<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DekanRequest;
use App\Http\Resources\DekanResource;
use App\Models\Dekan;
use Illuminate\Http\Request;

class DekanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DekanResource::collection(Dekan::all());
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
    public function store(DekanRequest $request)
    {
        $dekan = new Dekan();
        $dekan->fakultas_id = $request->fakultasId;
        $dekan->employee_number = $request->employeeNumber;
        $dekan->username = $request->username;
        $dekan->name = $request->name;
        $dekan->email  =$request->email;
        $dekan->password = bcrypt($request->employee_number);
        $dekan->active = $request->active;

        if($dekan->save())
        {
            return response()->json([
                'msg' => 'Berhasil menyimpan data dekan'
            ], 200);
        }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
