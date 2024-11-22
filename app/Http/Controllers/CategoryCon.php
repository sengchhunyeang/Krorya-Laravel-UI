<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryCon extends Controller
{
    public function index()
    {
        // Define categories as an array of objects
        $categories = [
            (object) ['image' => 'images/category/all.svg', 'title' => 'Category 1'],
            (object) ['image' => 'images/category/all.svg', 'title' => 'Category 2'],
            (object) ['image' => 'images/category/all.svg', 'title' => 'Category 3'],
        ];

        // Pass the categories variable to the view
        return view('home', compact('categories'));
    }
}
