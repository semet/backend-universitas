<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FakultasRequest;
use App\Http\Resources\FakultasResource;
use App\Models\Dekan;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FakultasResource::collection(Fakultas::all());
    }

    public function hasNoDekan()
    {
        $fakultas = Fakultas::whereNotIn('id', function ($query) {
            $query->select('fakultas_id')
                ->from('dekans');
        })->get();

        return FakultasResource::collection($fakultas);
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
    public function store(FakultasRequest $request)
    {
        $fakultas = Fakultas::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        if($fakultas)
        {
            return response()->json([
                'msg' => 'Berhasi Menyimpan Data Fakultas'
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

        return new FakultasResource(Fakultas::find($id));
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
    public function update(FakultasRequest $request)
    {
        $fakultas = Fakultas::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
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
