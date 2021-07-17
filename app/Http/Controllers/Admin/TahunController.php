<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tahun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TahunRequest;
use App\Http\Resources\TahunResource;
use PHPUnit\Framework\Constraint\JsonMatches;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TahunResource::collection(Tahun::all());
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
    public function store(TahunRequest $request)
    {
        $tahun = Tahun::create([
            'name' => $request->name,
            'start_date' => $request->startDate,
            'end_date' => $request->endDate,
            'description' => $request->description
        ]);

        if($tahun)
        {
            return response()->json([
                'msg' => 'Berhasil Menyimpan data tahun'
            ], 200);
        }
    }
    /**
     * @Author: Hamdani Ash-Sidiq
     * @Date: 2021-07-17 07:57:19
     * @Desc: Toggle active tahun
     */
    public function toggleActive($id)
    {
        $this->deactivate()->activate($id);
        return response()->json([
            'msg' => 'Berhasil merubah status Tahun'
        ], 200);
    }
    /**
     * @Author: Hamdani Ash-Sidiq
     * @Date: 2021-07-17 07:55:04
     * @Desc:  deactivate the previous active Tahun
     */
    public function deactivate()
    {
        Tahun::where('active', true)->update([
            'active' => false
        ]);
        return $this;
    }

    /**
     * @Author: Hamdani Ash-Sidiq
     * @Date: 2021-07-17 07:55:23
     * @Desc: Activate selected Tahun
     */
    public function activate($id)
    {
        Tahun::where('id', $id)->update([
            'active' => true
        ]);

        return $this;
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
