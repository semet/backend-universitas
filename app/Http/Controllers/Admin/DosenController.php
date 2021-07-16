<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Requests\DosenRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\DosenResource;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DosenResource::collection(Dosen::all());
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
    public function store(DosenRequest $request)
    {
        $dosen = new Dosen();
        $dosen->fakultas_id = $request->fakultasId;
        $dosen->matakuliah_id = $request->matakuliahId;
        $dosen->employee_number = $request->employeeNumber;
        $dosen->username = $request->username;
        $dosen->name = $request->name;
        $dosen->email  =$request->email;
        $dosen->password = bcrypt($request->employee_number);
        $dosen->active = $request->active;

        if($dosen->save())
        {
            return response()->json([
                'msg' => 'Berhasil menyimpan data dosen'
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
