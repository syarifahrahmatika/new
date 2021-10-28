<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        return view('Product_page');
    }

    public function display()
    {
        return view('product/product_display');
    }

    public function page()
    {
        echo view('header');
        echo view('content');
        echo view('footer');
    }
}
