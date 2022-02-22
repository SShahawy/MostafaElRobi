<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estsharat;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class EstsharatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.request');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('test');
        // $request->validate([
        //     'name' => 'required',
        //     'details' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'date' => 'required'
        // ]);


        $estshara = new Estsharat();
        
        $estshara->name = $request->name;
        $estshara->email = $request->email;
        $estshara->phone = $request->phone;
        $estshara->date = $request->date;
        $estshara->details = $request->details;

        $estshara->save();

      
              $data = array(
                  'name'      =>  $request->name,
                  'email'   =>   $request->email,
                  'phone'   =>   $request->phone,
                  'date'   =>   $request->date,
                  'details'   =>   $request->details
              );
      
           Mail::to('combidino6@gmail.com')->send(new SendMail($data));
          return redirect()->route('request')->with('message', 'تم حجز الإستشاره');

        //    return redirect()->route('index')
        //    ->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
