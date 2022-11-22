<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\producttype;


class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {

        $data= DB::table('product')
            ->join('producttype','product.ProductTypeID','=','producttype.ID')
            ->select('product.ID','product.Title','producttype.Title as prodType','product.ArticleNumber','product.Description','product.Image','product.ProductionPersonCount','product.ProductionWorkshopNumber','product.MinCostForAgent')
            ->orderBy('product.ID')
            ->get();
        return view('product',['product'=>$data]);

    }



}
