<?php

namespace App\Http\Controllers;

use App\Models\{Donation, Program, User};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $totalprogram = Program::count();
        $totaluser = User::count();
        $totaldonation = Donation::count();
        //dd($count);
       return view('dashboard', compact("totalprogram", "totaluser", "totaldonation"));
    }
    
}
