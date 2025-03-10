<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateContactFrom;
use App\Models\contactFrom;
use Illuminate\Http\Request;
use Str;
use Illuminate\Support\Facades\File as handleDelete;

class contactForm extends Controller
{
    function viewForm()
    {
        
    // $file = contactFrom::find(10);
    // handleDelete::delete(public_path($file->file_path));
    // $file->delete();

        return view('contactForm');
    }

    function submitform(validateContactFrom $data)
    {
       
       $file = $data->file('file');

    //    dd($file);
       
       $customname = 'larvel-'.Str::uuid();
      
       $filexrtesion = $file->getClientOriginalExtension();
       $filename = $customname.'.'.$filexrtesion;

       $filepath = $file->storeAs('/', $filename , 'custom_public');

       $contactfrom = new contactFrom();
       $contactfrom->name = $data->name;
       $contactfrom->email = $data->email;
       $contactfrom->subject = $data->subject;
       $contactfrom->message = $data->message;
       $contactfrom->file_path = 'custom_files/'.$filepath;
       $contactfrom->save();

       return redirect()->route('index.form'); 
    

    }
    
}
