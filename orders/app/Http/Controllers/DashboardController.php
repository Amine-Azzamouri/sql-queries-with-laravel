<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Order;


class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $subcategories = Subcategory::with('category')->get();
        $products = Product::with('subcategory.category')->get();
        $orders = Order::with('customer', 'seller')->get();
        $ordersWithProducts = Order::with('products')->get();

        return view('dashboard', compact('categories', 'subcategories', 'products', 'orders', 'ordersWithProducts'));
    }
}