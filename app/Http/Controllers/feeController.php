<?php

namespace App\Http\Controllers;

use App\fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class feeController extends Controller
{

    public function index(){
        return view('95244.payfee');
    }


    public  function payFee(){
        $fees= new fee();

        $fees->std_id=request('std_id');
        $fees->amount=request('amount');

        DB::table('students')->where('id','=', $fees->std_id)->decrement('balance',$fees->amount);

        $fees->save();
        return redirect('/');
    }
    public function searchPayment(){
        return view('95244.searchpayments');
    }

    public function getPayment(){
        $id= $_GET['id'];



        $fees = fee::where('std_id',$id)->get(['id', 'std_id', 'amount', 'created_at']);


        return view('95244.payresults', compact('name','fees'));


    }
}

