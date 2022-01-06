<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ResourceClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return response()->json(['clients'=>$clients], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = New Client;
        $client -> name = $request -> name;
        $client -> surname = $request -> surname;
        $client -> address = $request -> address;
        $client -> address_number = $request -> address_number;
        $client -> posta_code = $request -> post_code;
        $client -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client, $id)
    {
        $clients = Client::find($id);
        return response()->json(['clients'=>$clients], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client -> name = $request -> name;
        $client -> surname = $request -> surname;
        $client -> address = $request -> address;
        $client -> address_number = $request -> address_number;
        $client -> posta_code = $request -> post_code;
        $client -> save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
