<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //
    public function getAllProductbyCategory($category)
    {
        $dataProduct = DB::select('select * from products as p inner join categories as c on p.CategoryID = c.categoryID where p.CategoryID = ?', [$category]);
        // dd($dataProduct);
        return view('product', compact(['dataProduct']));
    }

    public function getProductDetail($id)
    {
        $detailProduct = DB::select('select * from products as p inner join categories as c on p.CategoryID = c.categoryID inner join suppliers as s on p.SupplierID = s.SupplierID where p.CategoryID = ?', [$id]);
        // dd($dataProduct);
        return view('detail-product', compact(['detailProduct']));
    }

    public function addToCart(Request $request)
    {
        $cart = session('cart');

        $productID = $request->input('ProductID');
        $productName = $request->input('ProductName');
        $quantity = $request->input('qty');
        $price = $request->input('UnitPrice');

        $cart["$productID"] = [
            'ProductName' => $productName,
            'Quantity' => $quantity,
            'UnitPrice' => $price,
        ];
        // save to session
        session(['cart' => $cart]);
        return redirect('/shopping-cart');
    }

    public function getShoppingCart()
    {
        $cart = session('cart');
        return view('shopping-cart', compact(['cart']));
    }
}
