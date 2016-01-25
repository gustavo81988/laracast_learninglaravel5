<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function about()
    {
        $data['first'] = "Fox";
        $data['last']  = "Mulder";

        return view('pages.about',$data);
    }

}
