<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(){


        return view("agent.users.paymentform");
    }




    public function historypage(){

        return view("agent.users.paymenthistory");



    }
}
