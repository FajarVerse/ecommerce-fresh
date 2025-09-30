<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function index()
    {
        return view('dashboard/data-category', ['categories' => Category::paginate(10)]);
    }


    public function create()
    {
        return view('dashboard/category/add-category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
        ]);

        Category::create([
            'nama' => $request->name
        ]);

        return redirect()->route('dashboard.category');
    }

    public function edit(Category $category)
    {
        return view('dashboard/category/edit-category', ['category' => $category]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'sometimes|string|min:3',
        ]);

        $category = Category::findOrFail($request->id);

        $category->update([
            'nama' => $request->name ?? $category->nama
        ]);

        return redirect()->route('dashboard.category');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('dashboard.category');
    }
}
