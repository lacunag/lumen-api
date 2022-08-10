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

}
