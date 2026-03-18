<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $result = null;

        if ($request->filled('glucose') && $request->filled('bmi') && $request->filled('age')) {

            $glucose = $request->glucose;
            $bmi = $request->bmi;
            $age = $request->age;

            if ($glucose > 120 || $bmi > 30) {
                $result = "High Risk";
            } else {
                $result = "Low Risk";
            }

        }

        return view('home', compact('result'));
    }
}