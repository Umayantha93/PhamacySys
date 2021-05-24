<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRecords;

class CustomerRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $results = CustomerRecords::all();
        return $results;
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
        //
        error_log("test--------------------------------------------------------------------");
;        return CustomerRecords::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  
        // 
        // $records=CustomerRecords::find($id);
        // return $records->update($request->all());
        error_log('test........will be');
        $update = CustomerRecords::find($id);
        $update->name = $request->input('name');
        $update->age = $request->input('age');
        $update->national_id = $request->input('national_id');
        $update->description = $request->input('description');
        $update->address = $request->input('address');
        $update->save();
        return response("updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return CustomerRecords::destroy($id);
    }
}
