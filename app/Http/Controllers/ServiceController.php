<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\StationeryProduct;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->get();
        $stationery = StationeryProduct::where('is_active', true)->get();

        return view('services.index', compact('services', 'stationery'));
    }

    public function show(Service $service)
    {
        $service->load('fields');
        return view('services.show', compact('service'));
    }
}