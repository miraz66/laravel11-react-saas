<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class Feature1Controller extends Controller
{
    public ?Feature $feature = null;

    public function __construct() {}

    public function index(Request $request) {}

    public function calculate(Request $request) {}
}
