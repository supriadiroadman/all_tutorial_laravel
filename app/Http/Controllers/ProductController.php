<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function export()
    {
        return Excel::download(new ProductsExport, 'invoices.xlsx');
    }
}
