<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

    }


    public function category($slug)
    {
        $category = ServiceCategory::where('slug', $slug)->firstOrFail();
        //$services = $category->services()->latest()->paginate(10);
        $services = Service::query()
            ->where('category_id', '=', $category->id)
            ->orderBy('id', 'asc')
            ->paginate(10);
        return view('services.index', compact('category','services'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug, $slugService)
    {
        $service = Service::where('slug', $slugService)->firstOrFail();
        return view('services.view', compact('service'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
