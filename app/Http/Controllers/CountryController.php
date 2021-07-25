<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;
use App\Models\country;
use App\Models\Department;

class CountryController extends Controller
{
    public function index(){
        $countries = Department::orderBy('department_name')->get();
        return $countries;
    }

    public function show(Request $request){
        
        return Department::filter($request->all())->get();
        return Department::where('department_id', $request->department_id)->get();
    }
}