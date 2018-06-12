<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectcontroller extends Controller
{
    public function student(){
        return view('94391.student');
    }
    public function fees(){
        return view('94391.fees');
    }
    public function search(){
        return view('94391.search');
    }
    public  function allpay(){
        return view('94391.payments');
    }
    public function onepayment()
    {
      return view('94391.onePayements');
    }

}
