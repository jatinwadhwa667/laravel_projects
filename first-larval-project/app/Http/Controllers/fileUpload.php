<?php

namespace App\Http\Controllers;

use App\Models\fileUlpoad;
use Faker\Core\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class fileUpload extends Controller
{
    function index()
    {
        $filedata = fileUlpoad::all();

        return view('fleUpload',['files' =>$filedata]);
    }
    function fileStore(Request $filedata)
    {
        
        $storefileResult = $filedata->file('file')->store('/','local');
        
        $storefile = new fileUlpoad();
        $storefile->file_path = $storefileResult;
        $storefile->save();
        dd($storefile);
    }
    function  downloadfile()
    {
       return Storage::disk('local')->download('ywed96qSRFLxmSj1LZePRxAbXntxD0uCO86NF5hE.png');
    }
}
