<?php

namespace App\Http\Controllers\Sathya;
use App\Http\Controllers\Controller;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('sathya.home');
    }
}
