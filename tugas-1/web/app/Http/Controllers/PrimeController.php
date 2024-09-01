<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('page.home.prime');
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

        // Calculate the first n prime numbers
        $primes = $this->generatePrimes($n);

        // Return the view with the result
        return view('page.home.prime', compact('primes'));
    }

    // Function to generate prime numbers
    private function generatePrimes($n)
    {
        $primes = [];
        $num = 2; // Start checking from the first prime number

        while (count($primes) < $n) {
            if ($this->isPrime($num)) {
                $primes[] = $num;
            }
            $num++;
        }

        return $primes;
    }

    // Function to check if a number is prime
    private function isPrime($num)
    {
        if ($num <= 1) return false;
        if ($num <= 3) return true;
        if ($num % 2 == 0 || $num % 3 == 0) return false;

        for ($i = 5; $i * $i <= $num; $i += 6) {
            if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
        }

        return true;
    }
}
