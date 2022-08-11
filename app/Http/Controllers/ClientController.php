<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;



class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        // get all clients
        $clients = Client::all();
        return response()->json(['message' => 'success', 'data' => $clients], 200);
    }

    public function show($id)
    {
        // get client
        $client = Client::find($id);
        if (!$client) {
            return response()->json(['message' => 'client not found'], 404);
        }
        return response()->json(['message' => 'success', 'data' => $client], 200);
    }

    public function store(Request $request)
    {
        // validate request

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'phone' => 'required|unique:clients|digits:9|numeric',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'company' => 'required',
            'website' => 'required',
        ]);

        // create client
        $client = Client::create($request->all());
        return response()->json(['message' => 'success', 'data' => $client], 201);
    }

    public function update(Request $request, $id)
    {
        // validate request
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'phone' => 'required|unique:clients|digits:9|numeric',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'company' => 'required',
            'website' => 'required',
        ]);
        // update client
        $client = Client::find($id);
        if (!$client) {
            return response()->json(['message' => 'client not found'], 404);
        }
        $client->update($request->all());
        return response()->json(['message' => 'success', 'data' => $client], 200);
    }   

    public function delete($id)
    {
        // encrypt id
        $id = encrypt($id);
        echo $id;
        die();

        die();
        // delete client
        $client = Client::find($id);
        if (!$client) {
            return response()->json(['message' => 'client not found'], 404);
        }
        $client->delete();
        return response()->json(['message' => 'success'], 200);
    }
}
