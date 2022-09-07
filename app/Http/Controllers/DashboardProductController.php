<?php

namespace App\Http\Controllers;

use App\Models\Categoryproduct;
use App\Models\Categoryprogram;
use App\Models\Product;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.product.index',[
            'title' => 'PMII Cabang Ciputat | Talent',
            'products' => Product::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.product.create',[
            'title' => 'PMII Cabang Ciputat | Create Talent',
            'categories' => Categoryproduct::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|max:255',
            'telp' => 'required|max:255',
            'produsen' => 'required|max:255',
            'slug' => 'required|unique:products',
            'categoryproduct_id' => 'required',
            'image' => 'image|file|max:2045',
            'image_produsen' => 'image|file|max:2045',
            'instagram' => 'required|max:255',
            'facebook' => 'required|max:255',
            'contoh1' => 'image|file|max:2045',
            'contoh2' => 'image|file|max:2045',
            'contoh3' => 'image|file|max:2045',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('product-images');
        }
        if ($request->file('image_produsen')) {
            $validated['image_produsen'] = $request->file('image_produsen')->store('image_produsen');
        }
        if ($request->file('contoh1')) {
            $validated['contoh1'] = $request->file('contoh1')->store('example_product');
        }
        if ($request->file('contoh2')) {
            $validated['contoh2'] = $request->file('contoh2')->store('example_product');
        }
        if ($request->file('contoh3')) {
            $validated['contoh3'] = $request->file('contoh3')->store('example_product');
        }
        if ($request->file('contoh4')) {
            $validated['contoh4'] = $request->file('contoh4')->store('example_product');
        }
        if ($request->file('contoh5')) {
            $validated['contoh5'] = $request->file('contoh5')->store('example_product');
        }
        if ($request->file('contoh6')) {
            $validated['contoh6'] = $request->file('contoh6')->store('example_product');
        }

        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 300);

        Product::create($validated);

        return redirect('/dashboard/product')->with('message', '<div class="alert alert-success" role="alert">
        Your talent has been added
      </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.product.detail',[
            'title' => 'PMII Cabang Ciputat | Detail Talent',
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('dashboard.product.edit', [
            'title' => 'PMII Cabang Ciputat | Edit Talent',
            'product' => $product,
            'categories' => Categoryproduct::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
       
        $rules = [
            'title' => 'required|max:255',
            
            'telp' => 'required|max:255',
            'produsen' => 'required|max:255',
            'categoryproduct_id' => 'required',
            'image' => 'image|file|max:2045',
            'image_produsen' => 'image|file|max:2045',
            'instagram' => 'required|max:255',
            'facebook' => 'required|max:255',
            'contoh1' => 'image|file|max:2045',
            'contoh2' => 'image|file|max:2045',
            'contoh3' => 'image|file|max:2045',
            'body' => 'required'
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($product->image) {
                Storage::delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('product-images');
        }
        if ($request->file('image_produsen')) {
            if ($product->image_produsen) {
                Storage::delete($product->image_produsen);
            }
            $validated['image_produsen'] = $request->file('image_produsen')->store('image_produsen');
        }
        if ($request->file('contoh1')) {
            if ($product->contoh1) {
                Storage::delete($product->contoh1);
            }
            $validated['contoh1'] = $request->file('contoh1')->store('example_product');
        }
        if ($request->file('contoh2')) {
            if ($product->contoh2) {
                Storage::delete($product->contoh2);
            }
            $validated['contoh2'] = $request->file('contoh2')->store('example_product');
        }
        if ($request->file('contoh3')) {
            if ($product->contoh3) {
                Storage::delete($product->contoh3);
            }
            $validated['contoh3'] = $request->file('contoh3')->store('example_product');
        }
        if ($request->file('contoh4')) {
            if ($product->contoh4) {
                Storage::delete($product->contoh4);
            }
            $validated['contoh4'] = $request->file('contoh4')->store('example_product');
        }
        if ($request->file('contoh5')) {
            if ($product->contoh5) {
                Storage::delete($product->contoh5);
            }
            $validated['contoh5'] = $request->file('contoh5')->store('example_product');
        }
        if ($request->file('contoh6')) {
            if ($product->contoh6) {
                Storage::delete($product->contoh6);
            }
            $validated['contoh6'] = $request->file('contoh6')->store('example_product');
        }

        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 300);

        Product::where('id',$product->id)->update($validated);

        return redirect('/dashboard/product')->with('message', '<div class="alert alert-success" role="alert">
        Your talent has been updated
      </div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        if ($product->image) {
            Storage::delete($product->image);
        }
        Product::destroy($product->id);

        return redirect('/dashboard/product')->with('message', '<div class="alert alert-success" role="alert">
        Your talent has been deleted
      </div>');
    }
    public function checkslug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
