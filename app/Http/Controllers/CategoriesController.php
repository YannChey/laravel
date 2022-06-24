<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
return view('categorie', ['categories'=>Category::all()]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Category $categorie)
    {
    }

    public function edit(Category $categorie)
    {
    }

    public function update(Request $request, Category $categorie)
    {
    }

    public function destroy(Category $categorie)
    {
    }
}
