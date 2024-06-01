<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\UsedFeature;
use App\Http\Resources\UsedFeatureResource;

class DashboardController extends Controller
{
    public function index() {
        $usedFeatures = UsedFeature::query()
            ->with(['feature'])
            ->where("user_id", auth()->user()->id)
            ->latest()
            ->paginate(10);


        return Inertia::render('Dashboard', [
            'usedFeatures' => UsedFeatureResource::collection($usedFeatures),
        ]);
    }
}
