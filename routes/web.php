<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('fetchServices', function(Request $request){
    $response = Http::get('https://demo.wispgate.io/api/services');
    return response()->json($response->json());
});

Route::post('submit-form', function(Request $request){
    $data = $request->validate([
        'username' => 'required|string',
        'email' => 'required|email',
        'password' => 'required',
        'service_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'card_name' => 'required',
        'card_no' => 'required',
        'password' => 'required',
        'phone' => 'required',
        'card_expiry' => 'required',
        'card_cvc' => 'required',
    ]);





        // Send the data to the API endpoint
        $response = Http::post('http://localhost:8001/api/subscription-services/create', $data);

        // Handle the response as needed
        if ($response->successful()) {
            return response()->json(['message' => 'Data submitted successfully!'], 200);
        } else {
            return response()->json(['message' => 'Failed to submit data.'], $response->status());
        }
});

