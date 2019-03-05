<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    


    public function temp(){



    	dd(\App\User::all());
    }
}
