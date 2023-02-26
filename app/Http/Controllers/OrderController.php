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
        $orders = Order::orderBy('updated_at', 'desc')->paginate(10);
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
            "sku"    => $request->input("sku" ),
            "name"   => $request->input("name"),
            "status" => "waiting",
        ]);

        foreach($products as $product) {
            $quantity++;
            $sumPrice += ((int) $product[1] * (int) $product[2]);
            $sumOfProducts += (int) $product[2];
            Orderables::create([
                "order_id" => $orderId,
                "product_id" => $product[0],
                "quantity" => $product[2]
            ]);
        };

        Order::where("id", $orderId)->update([
            "quantity"          => $quantity,
            "sum_of_products"   => $sumOfProducts,
            "price_of_products" => $sumPrice,
        ]);


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

    public function info(string $id)
    {
        $products = Orderables::where("order_id", $id)->with("product")->get();
        return $products;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = $request->input("array");
        $quantity = 0;
        $sumPrice = 0;
        $sumOfProducts = 0;

        Order::where("id", $id)->update([
            "sku"    => $request->input("sku" ),
            "name"   => $request->input("name"),
            "status" => "waiting",
        ]);


        Orderables::where("order_id", $id)->delete();

        foreach($products as $product) {
            $quantity++;
            $sumPrice += ((int) $product[1] * (int) $product[2]);
            $sumOfProducts += (int) $product[2];
            Orderables::create([
                "order_id" => $id,
                "product_id" => $product[0],
                "quantity" => $product[2]
            ]);
        };

        Order::where("id", $id)->update([
            "quantity"          => $quantity,
            "sum_of_products"   => $sumOfProducts,
            "price_of_products" => $sumPrice,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Order::where("id", $id)->delete();
        Orderables::where("order_id", $id)->delete();
        return true;
    }
}
