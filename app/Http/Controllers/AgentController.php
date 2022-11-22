<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\agent;
use App\Models\agenttype;
use App\Models\productsale;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        //$number = DB::table('agent')
       // ->join('productsale','productsale.AgentID','=','agent.ID')
        //->join('product','product.ID','=', 'productsale.ProductID')
       // ->select(DB::raw('product.MinCostForAgent'))
       // ->get();

		$data= DB::table('agent')
            ->join('agenttype','agent.AgentTypeID','=','agenttype.ID')
            ->join('productsale','productsale.AgentID','=','agent.ID')
            ->join('product','product.ID','=', 'productsale.ProductID')
            ->select('agent.ID','agent.Title', DB::raw('SUM(productsale.productCount) as Sum'),'agenttype.Title as agType','agent.Phone','agent.Logo','agent.Priority', DB::raw('SUM(product.MinCostForAgent*productsale.ProductCount) as Multiply'))
            ->orderBy('agent.ID')
            ->groupBy('agent.ID','agent.Title','agType','agent.Phone','agent.Logo','agent.Priority')
            ->get();

        return view('agent',['agent'=>$data]);

    }

}
