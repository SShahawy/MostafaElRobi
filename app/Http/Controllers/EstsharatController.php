<?php

namespace App\Http\Controllers;

use App\Mail\companyMail;
use Illuminate\Http\Request;
use App\Models\Estsharat;
use App\Models\Company;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Upload;

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


    public function storeCom(Request $request)
    {
        // dd($request);
        $com = new Company();
        
        $com->type = $request->type;
        $com->count = $request->count;
        $com->work = $request->work;
        $com->name = $request->name;
        $com->money = $request->money;
        $com->email = $request->email;
        $com->phone = $request->phone;
        $com->location = $request->location;
        $com->attach = $request->file;

        $com->save();
      
              $data = array(
                  'type'      =>  $request->type,
                  'count'   =>   $request->count,
                  'work'   =>   $request->work,
                  'name'   =>   $request->name,
                  'money'   =>   $request->money,
                  'location'   =>   $request->location,
                  'attach'   =>   $request->file,
                  'email'   =>   $request->email,
                  'phone'   =>   $request->phone
              );
              
              $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();  
              
              $type = $request->file->getClientMimeType();
              $size = $request->file->getSize();
            //   dd(public_path('file').'\\'.$fileName);
              $request->file->move(public_path('file'), $fileName);
              Upload::create([
                  'company_id' => $com->id,
                  'filename' => $fileName,
                  'file_path' => public_path('file'),
                ]);
                
                   Mail::to('combidino6@gmail.com')->send(new companyMail(public_path('file').'\\'.$fileName,$data));
        return redirect()->route('company-open')->with('message', 'تم ارسال بيانات الشركة');
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
