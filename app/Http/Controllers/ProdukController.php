<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk', ['product' => Product::filter(request(['keyword']))->paginate(10)]);
    }

    public function create()
    {
        return view('produkCreate', ['categories' => Category::all()]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:225',
            'harga' => 'required|numeric|min:1',
            'deskripsi' => 'required|string|max:500',
            'stok' => 'required|numeric|min:1',
            'category_id' => 'required|numeric|min:1',
        ]);

        $product = Product::create([
            'nama' => 'required|string|max:225',
            'harga' => 'required|numeric|min:1',
            'deskripsi' => 'required|string|max:500',
            'stok' => 'required|numeric|min:1',
            'category_id' => 'required|numeric|min:1',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' .
                $image->getClientOriginalExtension();

            Storage::disk('public')->putFileAs('image_products', $image, $imageName);

            $product->update([
                'image' => 'image_products/' . $imageName
            ]);
            return redirect('/');
        }
    }

    public function edit(Request $request)
    {
        $product = $request->id;

        return view('UpdateProduk', [
            'product' => Product::find($product),
            'categories' => Category::all()
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->q;

        $products = \App\Models\Product::where('nama', 'LIKE', "%{$keyword}%")
            ->orWhere('deskripsi', 'LIKE', "%{$keyword}%")
            ->paginate(10);

        return view('products.index', compact('products', 'keyword'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:225',
            'harga' => 'required|numeric|min:1',
            'deskripsi' => 'required|string|max:500',
            'stok' => 'required|numeric|min:1',
            'category_id' => 'required|numeric|min:1',
        ]);

        $product = Product::findOrFail($request->id);

        $oldImage = $product->image;

        $product->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'category_id' => $request->category_id
        ]);

        if ($request->hasFile('image')) {

            if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }

            $image = $request->file('image');
            $imageName = uniqid() . '.' .
                $image->getClientOriginalExtension();

            Storage::disk('public')->putFileAs('image_products', $image, $imageName);

            $product->update([
                'image' => 'image_products/' . $imageName
            ]);
        }
        return redirect('/product');
    }

    public function destroy(Request $request)
    {
        $idProduct = $request->query('id');

        // ProductVariant::where('product_id', $idProduct)->delete();

        Product::where('id', $idProduct)->delete();

        return redirect('/');
    }

public function byCategory($id = null)
{
    // Ambil semua kategori beserta jumlah produk
    $categories = Category::withCount('product')->get();
    $totalProducts = Product::count();

    // Cek jika id kategori null atau "7" (ID untuk "Semua")
    if($id === null || $id == 7){ 
        $products = Product::paginate(9); // Tampilkan semua produk
    } else {
        $products = Product::where('category_id', $id)->paginate(9); // Produk sesuai kategori
    }

    return view('shop', compact('categories', 'products', 'totalProducts'));
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
