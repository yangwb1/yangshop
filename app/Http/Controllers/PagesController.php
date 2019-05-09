<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function root()
    {
        //pages文件夹下的root文件
        return view('pages.root');
    }


}
