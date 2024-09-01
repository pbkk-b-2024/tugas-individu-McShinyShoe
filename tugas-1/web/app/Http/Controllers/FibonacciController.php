<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('page.home.fibonacci');
    }

    // Handle the calculation and show the result
    public function calculate(Request $request)
    {
        // Validate input
        $request->validate([
            'number' => 'required|numeric|min:1',
        ]);

        // Get input value
        $n = $request->input('number');

        // Calculate the first n Fibonacci numbers
        $fibonacciSeq = $this->generateFibonacci($n);

        // Return the view with the result
        return view('page.home.fibonacci', compact('fibonacciSeq'));
    }

    // Function to generate Fibonacci sequence
    private function generateFibonacci($n)
    {
        $fibonacciSeq = [];

        if ($n >= 1) {
            $fibonacciSeq[] = 0;  // First Fibonacci number
        }
        if ($n >= 2) {
            $fibonacciSeq[] = 1;  // Second Fibonacci number
        }

        for ($i = 2; $i < $n; $i++) {
            $fibonacciSeq[] = $fibonacciSeq[$i - 1] + $fibonacciSeq[$i - 2];
        }

        return $fibonacciSeq;
    }
}
