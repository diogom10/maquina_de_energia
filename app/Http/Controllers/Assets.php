<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Libraries\Template;

class Assets extends Controller
{

    public function example()
    {

        return Template::load('assets/assets');

    }


}
