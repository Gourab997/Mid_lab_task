<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Models\Sales;
class DynamicPDFController extends Controller
{
    function index()
    {
     $sales_data = $this->get_sales_data();
     return view('dynamic_pdf')->with('sales_data', $sales_data);
    }

    function get_sales_data()
    {
     $sales_data = DB::table('Sales')
         ->limit(10)
         ->get();
     return $sales_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_sales_data_to_html());
     return $pdf->stream();
    }

    function convert_sales_data_to_html()
    {
     $sales_data = $this->get_sales_data();
     $output = '
     <h3 align="center">sales Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Address</th>
    <th style="border: 1px solid; padding:12px;" width="15%">City</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Postal Code</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Country</th>
   </tr>
     ';  
     foreach($sales_data as $sales)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$sales->Custome_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$sales->phone.'</td>
       <td style="border: 1px solid; padding:12px;">'.$sales->address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$sales->product_id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$sales->product_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$sales->unit_price.'</td>
        <td style="border: 1px solid; padding:12px;">'.$sales->total_price.'</td>
        <td style="border: 1px solid; padding:12px;">'.$sales->pay_type.'</td>
        <td style="border: 1px solid; padding:12px;">'.$sales->date_sold.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
