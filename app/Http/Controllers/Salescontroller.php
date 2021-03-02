<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sales;
use App\Http\Requests\SalesRequest;
class Salescontroller extends Controller
{  public function index(Request $req){
    if($req->session()->has('salesname')){
        return view('sales.index' );
       }else{
           $req->session()->flash('msg','invalid request');
           return redirect('/login');
       }
}
public function sales_log(SalesRequest $req){
    $sales = new sales();
    $sales->Custome_name = $req->Custome_name;
    $sales->phone     = $req->phone;
    $sales->address     = $req->address;
    $sales->product_id = $req->product_id;
    $sales->product_name    = $req->product_name;
    $sales->unit_price  = $req->unit_price;
    $sales->quantity = $req->quantity;
    $sales->total_price = $req->total_price;
    $sales->pay_type = $req->pay_type;
    $sales->date_sold = now();
    $sales->status = "sold";
 
 
    $sales->save();
     return redirect('/system/sales/physicalstore');
}

}