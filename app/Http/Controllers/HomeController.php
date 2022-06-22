<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $marqees = [
            "income",
            "expense",
            "contract",
            "auto",
        ];
        return view('pages.home.index', ["marqees" => $marqees]);
    }
}
