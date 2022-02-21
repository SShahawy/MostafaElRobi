<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tawzeef;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailer;
class HiringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $tawzeef = new Tawzeef();
        
        $tawzeef->name = $request->name;
        $tawzeef->email = $request->email;
        $tawzeef->phone = $request->phone;
        $tawzeef->gender = $request->gender;
        $tawzeef->details = $request->details;

        $tawzeef->save();
        $data = array(
            'name'      =>  $request->name,
            'email'   =>   $request->email,
            'phone'   =>   $request->phone,
            'gender'   =>   $request->gender,
            'details'   =>   $request->details
        );

     Mail::to('combidino6@gmail.com')->send(new Mailer($data));
    return redirect()->route('index')->with('success', 'Thanks for contacting us!');

        // return redirect()->route('index')
        //     ->with('success', 'Product created successfully.');
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
