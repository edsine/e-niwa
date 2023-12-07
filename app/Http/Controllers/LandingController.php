<?php

// app/Http/Controllers/LandingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LandingController extends Controller
{
    public function showLanding()
    {
        $sliders = [
            ['image' => 'assets/images/sliders/hero-slider1.jpeg'],
            ['image' => 'assets/images/sliders/hero-slider2.jpeg'],
            ['image' => 'assets/images/sliders/hero-slider3.jpeg'],
        ];

        return view('landing', ['sliders' => $sliders]);
    }
}

