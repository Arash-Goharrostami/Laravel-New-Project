<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::take(10)->get();
        return view("dashboard.order.index", compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $products = $request->input("array");
        $quantity = 0;
        $sumPrice = 0;
        $sumOfProducts = 0;

        $orderId = Order::insertGetId([
            "sku"               => $request->input("sku" ),
            "name"              => $request->input("name"),
            "status"            => "waiting",
            // "quantity"          => $quantity,
            // "sum_of_products"   => $sumOfProducts,
            // "price_of_products" => $sumPrice,
        ]);

        foreach($products as $product) {
            Orderables::create([
                "order_id" => $orderId,
                "product_id" => $product[0],
                "quantity" => $product[1]
            ]);
        };


        return $orderId;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::where("id", $id)->with("products")->get();

        return $order;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
