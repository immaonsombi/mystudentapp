<?php

namespace App\Http\Controllers;

use App\Fees;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

USE App\Student;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $students=Fees::all();
    return view('94391.payments',compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'student_number'=>'required',
            'full_name'=>'required',
            'date_of_birth'=>'required',
            'address'=>'required',
            'amount'=>'required',
            'date_of_payment'=>'required'
        ]);
        $student= new Fees([
            'student_number' =>$request->get('student_number'),
            'full_name' =>$request->get('full_name'),
            'date_of_birth' =>$request->get('date_of_birth'),
            'address' =>$request->get('address'),
            'amount'=>$request->get('amount'),
            'date_of_payment' =>$request->get('date_of_payment')
        ]);
        $student->save();
        return redirect()->to('/')->with('success','Your details have been saved will get to you soon');

    }
    public function searchOne(){

        $search_one = Input::get ( 'searchstudent_number' );
        $user = Fees::where('student_number','LIKE','%'.$search_one.'%')->get();
        if(count($user) > 0)
            return view('94391.search')->withDetails($user)->withQuery ( $search_one );
        else return view ('94391/Home')->withMessage('No Details found. Try to search again !');
    }



}
