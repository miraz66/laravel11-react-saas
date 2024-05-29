<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Feature2Controller extends Controller
{
    public function index() {
        return inertia('Feature2/Index');
    }
}
