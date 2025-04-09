<?php

namespace App\Http\Controllers;

use App\Models\CategoryDetail;
use App\Http\Requests\StoreCategoryDetailRequest;
use App\Http\Requests\UpdateCategoryDetailRequest;

class CategoryDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');


    }
    public function index()
    {
        //
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
    public function store(StoreCategoryDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryDetail $categoryDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryDetail $categoryDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryDetailRequest $request, CategoryDetail $categoryDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryDetail $categoryDetail)
    {
        //
    }
}
