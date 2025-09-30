<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        return view('dashboard/data-product', ['products' => Product::paginate(10)]);
    }

    public function create()
    {
        return view('dashboard/product/add-product', ['categories' => Category::all()]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'harga' => 'required|numeric|min:1',
            'deskripsi' => 'required|string|max:500',
            'stok' => 'required|numeric|min:1',
            'category_id' => 'required|numeric|min:1',
            'berat' => 'required|numeric|min:4',
            'asal' => 'required|string|min:5',
            'nutrisi' => 'required|string|min:4',
        ]);

        $product = Product::create([
            'nama' => $request->name,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'stok' =>  $request->stok,
            'category_id' => $request->category_id
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            Storage::disk('public')->putFileAs('image_products', $image, $imageName);

            $product->update([
                'image' => 'image_products/' . $imageName
            ]);
        }

        ProductDetail::create([
            'berat' => $request->berat,
            'asal' => $request->asal,
            'nutrisi' => $request->nutrisi,
            'sisastok' => 0,
            'product_id' => $product->id,
        ]);

        return redirect()->route('dashboard.product');
    }



    public function search(Request $request)
    {
        $keyword = $request->q;

        $products = \App\Models\Product::where('nama', 'LIKE', "%{$keyword}%")
            ->orWhere('deskripsi', 'LIKE', "%{$keyword}%")
            ->paginate(10);

        return view('products.index', compact('products', 'keyword'));
    }

    public function edit(Product $product)
    {

        return view('dashboard/product/edit-product', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'sometimes|string|max:225',
            'harga' => 'sometimes|numeric|min:1',
            'deskripsi' => 'sometimes|string|max:500',
            'stok' => 'sometimes|numeric|min:1',
            'category_id' => 'sometimes|numeric|min:1',
        ]);

        $product = Product::findOrFail($request->id);
        $oldImage = $product->image;

        $product->update([
            'nama' => $request->name ?? $product->nama,
            'deskripsi' => $request->deskripsi ?? $product->deskripsi,
            'harga' => $request->harga ?? $product->harga,
            'stok' => $request->stok ?? $product->stok,
            'category_id' => $request->category_id ?? $product->category_id
        ]);

        if ($request->hasFile('image')) {
            if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }

            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            Storage::disk('public')->putFileAs('image_products', $image, $imageName);

            $product->update([
                'image' => 'image_products/' . $imageName
            ]);
        }

        ProductDetail::create([
            'berat' => $request->berat ?? $product->detail->berat,
            'asal' => $request->asal,
            'nutrisi' => $request->nutrisi ?? $product->detail->nutrisi,
            'sisastok' => 0,
            'product_id' => $product->id ?? $product->detail->product_id,
        ]);

        return redirect()->route('dashboard.product')->with('success', 'Produk berhasil diperbarui.');
    }


    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required|string|max:225',
    //         'harga' => 'required|numeric|min:1',
    //         'deskripsi' => 'required|string|max:500',
    //         'stok' => 'required|numeric|min:1',
    //         'category_id' => 'required|numeric|min:1',
    //     ]);

    //     $product = Product::findOrFail($request->id);

    //     $oldImage = $product->image;

    //     $product->update([
    //         'nama' => $request->nama,
    //         'deskripsi' => $request->deskripsi,
    //         'harga' => $request->harga,
    //         'category_id' => $request->category_id
    //     ]);

    //     if ($request->hasFile('image')) {

    //         if ($oldImage && Storage::disk('public')->exists($oldImage)) {
    //             Storage::disk('public')->delete($oldImage);
    //         }

    //         $image = $request->file('image');
    //         $imageName = uniqid() . '.' .
    //             $image->getClientOriginalExtension();

    //         Storage::disk('public')->putFileAs('image_products', $image, $imageName);

    //         $product->update([
    //             'image' => 'image_products/' . $imageName
    //         ]);
    //     }
    //     return redirect('/product');
    // }

    // public function destroy(Request $request)
    // {
    //     $idProduct = $request->query('id');

    //     // ProductVariant::where('product_id', $idProduct)->delete();

    //     Product::where('id', $idProduct)->delete();

    //     return redirect('/');
    // }

    public function destroy(Product $product)
    {

        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->productDetail()->delete(); // hapus detail juga
        $product->delete();

        return redirect()->route('dashboard.product')->with('success', 'Produk berhasil dihapus.');
    }


    public function byCategory($id = null)
    {
        // Ambil semua kategori beserta jumlah produk
        $categories = Category::withCount('product')->get();
        $totalProducts = Product::count();

        // Cek jika id kategori null atau "7" (ID untuk "Semua")
        if ($id === null || $id == 7) {
            $products = Product::paginate(9); // Tampilkan semua produk
        } else {
            $products = Product::where('category_id', $id)->paginate(9); // Produk sesuai kategori
        }

        return view('shop', compact('categories', 'products', 'totalProducts'));
    }

    public function show($id)
    {
        $product = Product::with('category', 'productDetail')->findOrFail($id);
        $categories = Category::withCount('product')->get();
        return view('shopDetail', ["product" => $product, "products" => Product::paginate(4), 'categories' => $categories]);

        // return dd($product);
    }

    public function addToWishlist(Request $request, $productId)
    {
        $user = auth()->user();
        $product = Product::findOrFail($productId);

        if (!$user->wishlists()->where('product_id', $productId)->exists()) {
            $user->wishlists()->create(['product_id' => $productId]);
            return redirect()->back()->with('success', 'Produk ditambahkan ke wishlist!');
        }

        return redirect()->back()->with('error', 'Produk sudah ada di wishlist!');
    }

    public function removeFromWishlist($productId)
    {
        $user = auth()->User();
        $user->wishlists()->where('product_id', $productId)->delete();
        return redirect()->back()->with('success', 'Produk dihapus dari wishlist!');
    }

    public function showWishlist()
    {
        $user = auth()->user();
        $wishlists = $user->wishlists;
        return view('wishlist', compact('wishlists'));
    }
}
