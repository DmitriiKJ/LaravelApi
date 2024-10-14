<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;


class ProductController extends BaseController
{
    function showAll(){
        return Product::all();
    }

    function showById($id){
        $product = Product::find($id);
        if(is_null($product)){
            return $this->send_error("Error", "Product not found");
        }

        return $this->send_response($product->toArray(), "Product retrieved successfully");
    }

    function addProduct(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required',
        ]);

        if($validator->fails()){
            return $this->send_error("Validation error", $validator->errors());
        }

        $product = Product::create($input);
        return $this->send_response($product, "Product was added");
    }

    function updateProduct(Request $request, $id){
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required',
        ]);

        if($validator->fails()){
            return $this->send_error("Validation error", $validator->errors());
        }

        $product = Product::find($id);
        // $response = Gate::inspect('update', $product);

        // if ($response->allowed()) {
            Product::whereId($id)->update($input);
            return $this->send_response($product, "Product was updated");
        // } else {
        //     return $this->send_error("Product policy error", false);
        // }
    }

    function deleteProduct($id){
        Product::find($id)->delete();
        return $this->send_response(["res" => "succes"], "Product was deleted");
    }
}
