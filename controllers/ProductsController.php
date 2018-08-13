<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController
{
    public function index()
    {
        $products = App::get('database')->getAll("models");

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = App::get('database')->getAll("categories");
        return view('products.create', compact('categories'));
    }

    public function store()
    {
        App::get('database')->addNew('models', $_POST);
        return redirect('/models');
    }

    public function show()
    {
        $product = App::get('database')->getOne('models', $_GET['id']);
        $categories = App::get('database')->getAll("categories");

        return view('products.show', compact('product', 'categories'));
    }

    public function edit()
    {
        $categories = App::get('database')->getAll("categories");
        $product = App::get('database')->getOne('models', $_GET['id']);
        return view('products.create', compact('product', 'categories'));
    }

    public function update()
    {
        App::get('database')->update('models', $_POST);
        return redirect('/admin/products');
    }

    public function destroy()
    {
        App::get('database')->destroy('models', $_POST['id']);
        return redirect('/admin/products');
    }
}