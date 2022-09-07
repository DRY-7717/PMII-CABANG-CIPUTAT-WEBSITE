<?php

namespace App\Http\Controllers;

use App\Models\Categoryproduct;
use App\Models\Categoryprogram;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Categoryproduct::firstWhere('slug',request('category'));
            $title = 'in ' . $category->name;
        }
       
        if (request('user')) {
            $user = User::firstWhere('username',request('user'));
            $title = 'by ' . $user->name;
        }
        
        return view('product.index',[
            'title' => 'PMII Cabang Ciputat | Talent',
            'bigtitle' => 'Talent ' . $title,
            'talents' => Product::latest()->filter(request(['search','category','produsen','user']))->paginate(6)->withQueryString(),
            'categories' => Categoryproduct::all(),
            'produsens' => Product::all(),
            'users'    => User::all()
            
        ]);
    }

    public function show(Product $product)
    {
        return view('product.detail',[
            'title' => 'PMII Cabang Ciputat | Detail Talent',
            'talent' => $product
        ]);
    }
}
