<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function search(){
        $html = "";
        $value = $_POST['value'];
        $products = Product::where('sku', 'LIKE', '%' . $value . '%')->take(10)->get();
        foreach($products as $product) {
            $html .= "<a class='dropdown-item select-product-on-click' data-value='". $product->id . "' data-default-selected=''> " . $product->name . "</a>";
        }
        return $html;
    }

    public function showProduct($id){
        $product = Product::findOrFail($id);

        $html = '
            <tr>
                <td class="text-center product-id-td">'.$product->id.'</td>
                <td>'.$product->name.'</td>
                <td>'.$product->sku.'</td>
                <td>'.$product->mpn.'</td>
                <td class="text-right">&euro; <span class="price">'.$product->price.'</span></td>
                <td class="text-right"><input value="1" class="quantity" type="number"/></td>
                <td class="td-actions text-right">
                    <button type="button" rel="tooltip" class="btn btn-danger delete-product-button">
                        <i class="material-icons">delete</i>
                    </button>
                </td>
            </tr>
        ';
        return $html;
    }

    public function showProductUpdate($id){
        $product = Product::findOrFail($id);
        return $product;
    }

    public function create (Request $request) {
        $id = Product::insertGetId([
            "sku"      => $request->input("sku"     ),
            "mpn"      => $request->input("mpn"     ),
            "name"     => $request->input("name"    ),
            "type"     => $request->input("type"    ),
            "price"    => $request->input("price"   ),
            "quantity" => $request->input("quantity"),
        ]);

        return $id;
    }
}
