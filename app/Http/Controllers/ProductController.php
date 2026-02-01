<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductController extends Controller
{
    // home
    public function home()
    {
        return view('welcome');
    }

    
 public function list()
{
    // Paginate 10 products per page, load categories
    $myproduct = Product::with('category')->paginate(10);

    return view('catalogue', compact('myproduct'));
}


    // add product page
    public function add()
    {
        return view('addproduct');
    }

    // admin data
    public function admin()
{
    
    $products = Product::with('category')->paginate(5);

    return view('admin', [
        'listOfproduct' => $products
    ]);
}
    //create product
    public function create(Request $request)
    {
        DB::table('products')->insert(

        [
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'image_url' => $request->image_url
        ]);

        return redirect()->route('admin');
    }

    // edit product

    // edit product page
    public function edit($id)
    {
        // get the product by id
        $product = DB::table('products')->where('id', $id)->first();

        return view('edit', [
            'product' => $product
        ]);
    }

    // update product
        public function update(Request $request, $id)
        {
            DB::table('products')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'price' => $request->price,
                    'stock' => $request->stock,
                    'image_url' => $request->image_url
                ]);

            // redirect back to admin list page
            return redirect()->route('admin');
        }


        // delete product
        public function destroy($id)
        {
            DB::table('products')->where('id', $id)->delete();

            // redirect back to admin dashboard
            return redirect()->route('admin')->with('success', 'Produit supprimé avec succès.');
        }


        // show product details
            public function show($id)
            {
                // get the product by id with its category
                $product = Product::with('category')->find($id);

                // check if product exists
                if (!$product) {
                    return redirect()->route('catalogue')->with('error', 'Product not found');
                }

                return view('details', [
                    'product' => $product
                ]);
            }





}
