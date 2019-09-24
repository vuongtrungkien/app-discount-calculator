<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AppController
{

    public function result(Request $request)
    {
        $price = $request->price;
        $description = $request->description;
        $discount_percent = $request->discount_percent;
        $discount_amount = $price * ($discount_percent / 100);
        $discount_price = $price - $discount_amount;

        return view('/display-discount', compact(['price', 'description', 'discount_percent', 'discount_amount', 'discount_price']));
    }


}
