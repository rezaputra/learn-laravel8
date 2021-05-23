<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home(){
        print_r(route('home'));
        return view('home');
    }
    
    public function index(){
        $title = 'The most popular mobile phone now';
        $data = [
            'iphone', 'samsung'
        ];
        return view('products.index', compact('title', 'data'));
    }


    public function about(){
        return 'About us page';
    }

    public function show($id, $name){
        $data = [
            'iphone', 
            'samsung'
        ];

        $products = [$data[$id]  ?? 'products doest exist'];

        return view('products.index', compact('products', 'name'));
    }
}
