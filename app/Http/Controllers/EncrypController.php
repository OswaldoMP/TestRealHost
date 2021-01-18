<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use \MyCrypt;

class EncrypController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcome', ['data' => '', 'encrypt' => '', 'decrypt' => '']);
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
        $optionCrypt = $request->input('option');
        $data = $request->input('data');

        if ($optionCrypt == "encrypt") {
            $encrypt = MyCrypt::encrypt($data, config('app.crypt_key'));
            return view('welcome', ['data' => $data, 'encrypt' => $encrypt, 'decrypt' => '']);
        }

        $encrypt = $request->input('encrypt');
        $decrypt = MyCrypt::decrypt($encrypt, config('app.crypt_key'));

        return view('welcome', ['data' => $data, 'decrypt' => $decrypt, 'encrypt' => '']);

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
