<?php

namespace App\Http\Controllers;

use App\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Warranty::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'             => 'required|string',
            'category'          => 'required|string',
            'subCategory'       => 'required|string',
            'brand'             => 'required|string',
            'placeOfPurchase'   => 'required|string',
            'serialNumber'      => 'required|string',
            'dateOfPurchase'    => 'required|date',
            'cost'              => 'required|numeric'
        ]);

        $warranty = Warranty::create($data);
        
        return response($warranty, 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warranty  $warranty
     * @return \Illuminate\Http\Response
     */
    public function show(Warranty $warranty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warranty  $warranty
     * @return \Illuminate\Http\Response
     */
    public function edit(Warranty $warranty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warranty  $warranty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warranty $warranty)
    {
        $data = $request->validate([
            'title'             => 'required|string',
        ]);

        $warranty->update($data);
        
        return response($warranty, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warranty  $warranty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warranty $warranty)
    {
        $warranty->delete();
        
        return response('Item Deleted',200);
    }
}
