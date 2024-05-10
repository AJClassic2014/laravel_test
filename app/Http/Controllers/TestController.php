<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Product;

class TestController extends Controller
{
    public function testData()
    {
        // return response()->json([
        //     'name' => 'John Doe',
        //     'age' => 30,
        //     'address' => '123 Main St, Anytown'
        // ]);
        $data = Member::getFirstMemberData();
        if ($data) {
            return response()->json($data);
        } else {
            return response()->json(['message' => 'No data found'], 404);
        }
    }

    public function getProducts(Request $request)
    {
        $products = Product::all(); 
        return response()->json($products);
    }
}
