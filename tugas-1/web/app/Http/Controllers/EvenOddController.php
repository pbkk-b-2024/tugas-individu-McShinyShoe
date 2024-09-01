<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenOddController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('page.home.even_odd');
    }

    // Handle the calculation and show the result
    public function calculate(Request $request)
    {
        // Validate input
        $request->validate([
            'number' => 'required|numeric|min:1',
            'type' => 'required|in:even,odd',
        ]);

        // Get input values
        $number = $request->input('number');
        $type = $request->input('type');

        // Calculate the first X even or odd numbers
        $numbers = [];
        $start = ($type === 'even') ? 0 : 1;

        for ($i = 0; $i < $number; $i++) {
            $numbers[] = $start;
            $start += 2;  // Increment by 2 to get the next even or odd number
        }

        // Return the view with the result
        return view('page.home.even_odd', compact('numbers', 'type'));
    }
}
