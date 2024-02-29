<?php

namespace App\Controllers;

class Main extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function about()
    {
        // Load a view file called 'about.php' located in the 'Views' directory
        return view('about');
    }

    // Other controller methods for handling different routes/actions
}