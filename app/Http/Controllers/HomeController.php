<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Displays the index page of the app
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
}
