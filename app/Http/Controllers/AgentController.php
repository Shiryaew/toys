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
    function index2($search, $prior, $filter )
    {

        if ($request->has('Priority') && in_array($request->Priority, ['min', 'max'])) {
            
            $count = $products->count();
            if ($count > 1) {
                $max = $products->get()->max('Priority'); // цена самого дорогого товара
                $min = $products->get()->min('Priority'); // цена самого дешевого товара
                $avg = ($min + $max) * 0.5;
                if ($request->Priority == 'min') {
                    $products->where('Priority', '<=', $avg);
                } else {
                    $products->where('Priority', '>=', $avg);
                }
            }


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

    function index(Request $request)
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
            ->select('agent.ID','agent.Title', DB::raw('SUM(productsale.productCount) as Sum'),'agenttype.Title as agType','agent.Phone','agent.Logo','agent.Priority as Priority', DB::raw('SUM(product.MinCostForAgent*productsale.ProductCount) as Multiply'))
            ->orderBy('agent.ID')
            ->groupBy('agent.ID','agent.Title','agType','agent.Phone','agent.Logo','agent.Priority')
            ->get();

       if ($request->has('Priority') && in_array($request->Priority, ['min', 'max'])){
        if ($request->Priority == 'min') {
            $sort = 'asc';
        } else {
            $sort = 'desc';
        }

		$data= DB::table('agent')
            ->join('agenttype','agent.AgentTypeID','=','agenttype.ID')
            ->join('productsale','productsale.AgentID','=','agent.ID')
            ->join('product','product.ID','=', 'productsale.ProductID')
            ->select('agent.ID','agent.Title', DB::raw('SUM(productsale.productCount) as Sum'),'agenttype.Title as agType','agent.Phone','agent.Logo','agent.Priority as Priority', DB::raw('SUM(product.MinCostForAgent*productsale.ProductCount) as Multiply'))
            //->orderBy('agent.ID')
            //->orderBy('agent.Priority', 'desc')
            ->orderBy('agent.Priority', $sort)
            ->groupBy('agent.ID','agent.Title','agType','agent.Phone','agent.Logo','agent.Priority')
            ->get();
    }
        
        // /$products = $data;
        /*foreach ($data as $product) {
            if ($product['Priority'] < 10) {
                $result[] = $product;
            }
        }*/
        /*if ($request->has('Priority') && in_array($request->Priority, ['min', 'max'])) {
            
            $count = $products->count();
            if ($count > 1) {
                $max = $products->get()->max('Priority'); // цена самого дорогого товара
                $min = $products->get()->min('Priority'); // цена самого дешевого товара
                $avg = ($min + $max) * 0.5;
                if ($request->Priority == 'min') {
                    $products->where('Priority', '<=', $avg);
                } else {
                    $products->where('Priority', '>=', $avg);
                }
            }
        }*/

        return view('agent',['agent'=>$data]);
        //return view('agent',$products);
        //return view('agent',$result);

    }

}
