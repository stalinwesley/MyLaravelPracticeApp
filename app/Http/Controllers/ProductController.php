<?php

namespace App\Http\Controllers;

use App\Models\MyProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function new(Request $request)
    {

        //refresh 
        $my_refresh = MyProduct::first();
        //tempory change
        $my_refresh->product_name = 'Changed Product Name';
        echo "<pre>";
        print_r($my_refresh->toArray());
        $my_refresh->refresh();
        dd($my_refresh);
        // print_r($my_refresh->toArray());



        $product_all_collection = MyProduct::all();
        $product_arr = MyProduct::all()->toArray();
        $product_sel_items_arr = MyProduct::all('product_brand','product_name')->toArray();

        $product_one = MyProduct::find(9)->toArray();
        $product_one = MyProduct::findOrFail(1)->toArray();
        $product_first = MyProduct::first();
        $product_ff = MyProduct::firstOrFail();

        $product_where_first = MyProduct::where('stack',12)->first()->toArray();
        $product_where_get = MyProduct::where('stack','<',20)
        // ->take(3)
        ->get()
        // ->count();
        ->toArray();


        $mp = MyProduct::first();
        
        $mpf = $mp->fresh()->where('stack',20)->get();
        
        dd($mp,$mpf);
        dd($product_where_get,$product_where_first,"Selvam","stalin");
        
        foreach($product as $p){
            echo $p->product_name . "<br>";
        }
        // dd($product); // dd display and dump

        die;

        $mpi_multiple = MyProduct::insert([
            [
            'category_id'=>2,
            'product_name'=>'Test2'.uniqid(),
            'product_brand'=>'Test Brand2',
            'price'=>'1200',
            'stack'=>'25',
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'category_id'=>2,
            'product_name'=>'Test2'.uniqid(),
            'product_brand'=>'Test Brand2',
            'price'=>'1300',
            'stack'=>'35',
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'category_id'=>2,
            'product_name'=>'Test2'.uniqid(),
            'product_brand'=>'Test Brand2',
            'price'=>'1400',
            'stack'=>'45',
            'created_at'=>now(),
            'updated_at'=>now()
            ],
        ]);


        dd($mpi_multiple);


        //date field will not update 

        $mpi = MyProduct::insert([
            'category_id'=>2,
            'product_name'=>'Test2',
            'product_brand'=>'Test Brand2',
            'price'=>'1700',
            'stack'=>'15',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);


        dd($mpi);

        $mp = MyProduct::create([
            'category_id'=>2,
            'product_name'=>'Test 76',
            'product_brand'=>'Test Brand23',
            'price'=>'1500',
            'stack'=>'20',
        ]);


        dd($mp);

        $product = new MyProduct;
        $product->product_name = "Nokia 12";
        $product->category_id = 1;
        $product->product_brand = "Nokia";
        $product->price = "10000";
        $product->stack = "10";
        $product->save();

        dd($product);

        
    }
}
