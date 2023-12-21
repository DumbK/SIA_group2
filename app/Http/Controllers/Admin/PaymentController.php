<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    public function index()
    {
        return view('admin.payment.index',[
            'pagetitle' => 'List of Students',
            'title' => 'Cashiering | Admin'
        ]);
    }
    public function payment(Request $request) {

        $auth = 'KorinaBernido2023';

        // API endpoint
        $apiEndpoint = 'https://ssc.slsubc.com/api/attendance/search/student';

        // Authentication data
        $authData = [
            'auth_value' => $auth,
            'idnumber' =>$request->idnumber,
            'firstname' =>$request->firstname,
            'last_name' =>$request->lastname,
            'academicyear' =>$request->academicyear,
            'semester' =>$request->semester,
        ];

        // Create a new Guzzle client
        $client = new Client();

        // Make a POST request with authentication data
        $response = $client->post($apiEndpoint, [
            'json' => $authData,
        ]);

        // Get the response body as a string
        $responseBody = $response->getBody()->getContents();

        $responseBody = stripslashes($responseBody);

        // Decode the JSON response
        $data = json_decode($responseBody, true);

        // Do something with the response data
        // return $responseBody;

        return view('admin.payment.index',[
            'pagetitle' => 'List of Students',
            'title' => 'Cashiering | Admin',
            'data' => $data
        ]);
    }
}
