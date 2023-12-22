<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculeController extends Controller
{
    public function calculeAddition(Request $request)
    {
        // dd(phpinfo());
        $numberOne = $request->numberOne;
        $numberTwe = $request->numberTwo;
        $result = $numberOne + $numberTwe;
        // dd($result);
        return view('calcule', compact('numberOne', 'numberTwe', 'result'));
    }
}