<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //32 26
    /*public function index(){
    	return 'Hello world';
    }*/
   /* public function index(){
    	$message = 'Hello World';

    	return view('page')->with('message', $message);
    }*/
    public function index() {
    	$header = 'Hello world';
    	$message = 'If you have PHP installed locally and you';
    	return view('page')->with(['message'=>$message, 'header' => $header]);
    }
}
