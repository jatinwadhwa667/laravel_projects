<?php

namespace App\Http\Controllers;

use App\Http\Requests\customervalidation;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class customers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $data)
    {
        // $customerdata = customer::all(); 

        $customerdata = customer::when($data->has('search'), function($test)use($data){
            $test->where('first_name' , 'LIKE' , "%$data->search%")->
            orWhere('last_name' , 'LIKE' , "%$data->search%")->
            orWhere('email' , 'LIKE' , "%$data->search%")->
            orWhere('phone_number' , 'LIKE' , "%$data->search%")->
            orWhere('account_number' , 'LIKE' , "%$data->search%");
        })->orderBy('id',$data->has('order') && $data->order == 'asc' ? 'ASC' : 'DESC')->get();

        return view('customer.index' , compact('customerdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(customervalidation $request)
    {
        $customer = new customer();
        
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->store('' , 'public');
            $filepath = 'customer_images/'.$filename;
            $customer->image = $filepath;
        }
        
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone;
        $customer->account_number = $request->account_number;
        $customer->save();

        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customerdata = customer::FindOrFail($id);
        return view('customer.show' , compact('customerdata'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customerdata = customer::FindOrFail($id);
        return view('customer.edit' , compact('customerdata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(customervalidation $request, string $id)
    {
        $customer = customer::findOrFail($id);
        
        if($request->hasFile('image'))
        {
          
            if($request->image != NULL && $customer->image != "/default/avator.png")
            {
               File::delete(public_path($customer->image));
            }
            
            $filename = $request->file('image')->store('' , 'public');
            $filepath = 'customer_images/'.$filename;
            $customer->image = $filepath;
        }
        
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone;
        $customer->account_number = $request->account_number;
        $customer->save();

        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $file = customer::findOrFail($id);
        
        // if($file->image != "/default/avator.png")
        // {
        //     File::Delete(public_path($file->image));
        // }
        $file->delete();

        return redirect()->route('customer.index');
    }
    public function trashData(Request $data)
    {
        $customerdata = customer::when($data->has('search'), function($test)use($data){
            $test->where('first_name' , 'LIKE' , "%$data->search%")->
            orWhere('last_name' , 'LIKE' , "%$data->search%")->
            orWhere('email' , 'LIKE' , "%$data->search%")->
            orWhere('phone_number' , 'LIKE' , "%$data->search%")->
            orWhere('account_number' , 'LIKE' , "%$data->search%");
        })->orderBy('id',$data->has('order') && $data->order == 'asc' ? 'ASC' : 'DESC')->onlyTrashed()->get();

        return view('customer.trash' , compact('customerdata'));
    }
    public function restore(int $id)
    {
        $customer = customer::onlyTrashed()->findOrFail($id);
        $customer->restore();
        
        return redirect()->back();
    }
    public function delete(int $id)
    {
        $file = customer::onlyTrashed()->findOrFail($id);
        
        if($file->image != "/default/avator.png")
        {
            File::Delete(public_path($file->image));
        }
        $file->forceDelete();

        return redirect()->route('customer.index');
    }
}
