<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = 'Hotel Shankharapur | Best Memories start here';
        return view('frontend.welcome');
    }
}
