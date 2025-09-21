<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function index()
    {
        return view('Category', ['categories' => Category::filter(request(['keyword']))->paginate(10)]);
    }


    public function create()
    {
        return view('AddCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required|string'
        ]);

        $categories = json_decode($request->data, true);

        foreach ($categories as $category) {
            Category::create([
                'nama' => $category['nama']
            ]);
        }

        return redirect('/');
    }
}
