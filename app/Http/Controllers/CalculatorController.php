<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
        ]);

        $result = $data['a'] + $data['b'];

        return response()->json([
            'a' => $data['a'],
            'b' => $data['b'],
            'result' => $result,
        ]);
    }

    public function subtract(Request $request)
    {
        $data = $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
        ]);

        $result = $data['a'] - $data['b'];

        return response()->json([
            'a' => $data['a'],
            'b' => $data['b'],
            'result' => $result,
        ]);
    }
}
