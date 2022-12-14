<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agent;
use App\Models\agenttype;
use Illuminate\Support\Facades\DB;

class AgentCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
		$data= DB::table('agent')
            ->join('agenttype','agent.AgentTypeID','=','agenttype.ID')
            ->select('agenttype.Title as agType','agent.INN','agent.KPP','agent.DirectorName','agent.Email','agent.Address','agent.Title','agent.Phone','agent.Logo','agent.Priority')
            ->orderBy('agent.ID')
            ->get();
        return view('agentcard',['agentcard'=>$data]);

    }

}
