<?php

namespace App\Http\Controllers;
use App\Models\Depart;
use Illuminate\Http\Request;
use Illuminate\View\View;
class DepartController extends Controller
{
    public function index(): View
    {
        $Depart = Depart::get();
        
        return view('department',compact('Depart'));
    }

}
