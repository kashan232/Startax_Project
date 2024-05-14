<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientAddress;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // Storage facade ko import karein
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    public function add_client(Request $request)
    {
        return view('User.client.add_client');
    }

    public function store_client(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $userId = Auth::id();
            
            Client::create([
                'admin_or_user_id'    => $userId,
                'client_type'          => $request->client_type,
                'AY'          => $request->AY,
                'first_name'          => $request->first_name,
                'middel_name'          => $request->middel_name,
                'last_name'          => $request->last_name,
                'father_name'          => $request->father_name,
                'DOB'          => $request->DOB,
                'PAN_numbr'          => $request->PAN_numbr,
                'gender'          => $request->gender,
                'marital_status'          => $request->marital_status,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);
            return redirect()->back()->with('Client-added', 'Client Added Successfully');
        } else {
            return redirect()->back();
        }
    }

    public function client_detail(Request $request, $id)
    {

        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $client_id = $id;
            // $clients_details = Client::where('id', '=', $client_id)->where('admin_or_user_id', '=', $userId)->get();
            $clients_details = Client::FindOrFail($id);
            // dd($clients_details);
            $ClientAddreses = ClientAddress::where('client_id', '=', $client_id)->first();
            // dd($ClientAddreses);

            // "first_name" => "Muhammad"
            // "middel_name" => "Kashan"
            // "last_name" => "Shaikh"
            return view('User.client.client_detail', [
                'clients_details' => $clients_details,
                'ClientAddreses' => $ClientAddreses,
            ]);
        } else {
            return redirect()->back();
        }
    }


    // public function edit_client_basic_details(Request $request)
    // {
    //     if (Auth::id()) {
    //         $usertype = Auth()->user()->usertype;
    //         $userId = Auth::id();
    //         $update_id = $request->input('update_id');

    //         $client = Client::find($update_id);
    //         if (!$client) {
    //             return response()->json(['error' => 'Client not found'], 404);
    //         }

    //         // Update client details in the database
    //         $client->admin_or_user_id = $userId;
    //         $client->first_name = $request->first_name;
    //         $client->middel_name = $request->middel_name;
    //         $client->last_name = $request->last_name;
    //         $client->father_name = $request->father_name;
    //         $client->DOB = $request->DOB;
    //         $client->PAN_numbr = $request->PAN_numbr;
    //         $client->gender = $request->gender;
    //         $client->marital_status = $request->marital_status;
    //         $client->save();

    //         // Retrieve all clients from the database
    //         $clients = Client::all();

    //         // Prepare an array to store details of all clients
    //         $allClients = [];
    //         foreach ($clients as $client) {
    //             $clientDetails = [
    //                 'client_id'    => $client->id,
    //                 'first_name'   => $client->first_name,
    //                 'middel_name'  => $client->middel_name,
    //                 'last_name'    => $client->last_name,
    //                 'father_name'  => $client->father_name,
    //                 'DOB'          => $client->DOB,
    //                 'PAN_numbr'    => $client->PAN_numbr,
    //                 'gender'       => $client->gender,
    //                 'marital_status' => $client->marital_status,
    //                 // Add other fields as needed
    //             ];
    //             $allClients[] = $clientDetails;
    //         }

    //         // Convert the array of all clients to JSON format
    //         $jsonContent = json_encode($allClients, JSON_PRETTY_PRINT);

    //         // Define the path to save the JSON file
    //         $filePath = public_path('clients.json');

    //         // Save client details to a single JSON file
    //         File::put($filePath, $jsonContent); // Save JSON data to 'clients.json' file in custom path

    //         return Redirect()->back()->with('success-message-updte', 'Client details updated successfully!');
    //     } else {
    //         return redirect()->back()->with('error-message', 'User not authenticated');
    //     }
    // }


    public function edit_client_basic_details(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $userId = Auth::id();
            $update_id = $request->input('update_id');

            $client = Client::find($update_id);
            if (!$client) {
                return response()->json(['error' => 'Client not found'], 404);
            }

            // Update client details in the database
            $client->admin_or_user_id = $userId;
            $client->first_name = $request->first_name;
            $client->middel_name = $request->middel_name;
            $client->last_name = $request->last_name;
            $client->father_name = $request->father_name;
            $client->DOB = $request->DOB;
            $client->PAN_numbr = $request->PAN_numbr;
            $client->gender = $request->gender;
            $client->marital_status = $request->marital_status;
            $client->save();

            // Convert client details to JSON format
            $clientDetails = [
                'client_id'    => $client->id,
                'first_name'   => $client->first_name,
                'middel_name'  => $client->middel_name,
                'last_name'    => $client->last_name,
                'father_name'    => $client->father_name,
                'DOB'    => $client->DOB,
                'PAN_numbr'    => $client->PAN_numbr,
                'gender'    => $client->gender,
                'marital_status'    => $client->marital_status,
                // Add other fields as needed
            ];

            // Convert client name to a suitable format for the file name (e.g., lowercase and replace spaces with underscores)
            $clientName = strtolower(str_replace(' ', '_', $client->first_name . '_' . $client->last_name));

            // Save client details to a JSON file with client name as filename
            $jsonContent = json_encode($clientDetails, JSON_PRETTY_PRINT);
            Storage::put($clientName . '.json', $jsonContent); // Save JSON data to 'client_name.json' file in storage

            return response()->json(['success' => 'Client details updated successfully']);
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }


    // public function edit_client_basic_details(Request $request)
    // {
    //     if (Auth::id()) {
    //         $usertype = Auth()->user()->usertype;
    //         $userId = Auth::id();
    //         $update_id = $request->input('update_id');

    //         Client::where('id', $update_id)->update([
    //             'admin_or_user_id'    => $userId,
    //             'first_name'          => $request->first_name,
    //             'middel_name'         => $request->middel_name,
    //             'last_name'           => $request->last_name,
    //             'father_name'         => $request->father_name,
    //             'DOB'                 => $request->DOB,
    //             'PAN_numbr'           => $request->PAN_numbr,
    //             'gender'              => $request->gender,
    //             'marital_status'      => $request->marital_status,
    //             'updated_at'          => Carbon::now(),
    //         ]);

    //         // Client ki details ko JSON format me retrieve karne ka function call
    //         // $clientDetails = $this->getClientDetails($update_id);

    //         // return response()->json($clientDetails); // Client ki details ko JSON format me return karein
    //     } else {
    //         return response()->json(['error' => 'User not authenticated'], 401); // Agar user authenticate nahi hai to error return karein
    //     }
    // }

    public function store_client_address(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $userId = Auth::id();
            $update_id = $request->input('update_id');
            ClientAddress::create([
                'admin_or_user_id'    => $userId,
                'client_id'          => $update_id,
                'flat_door'          => $request->flat_door,
                'Premise_name'          => $request->Premise_name,
                'road_street'          => $request->road_street,
                'pin_code'          => $request->pin_code,
                'Area_locality'          => $request->Area_locality,
                'town_city'          => $request->town_city,
                'State'          => $request->State,
                'Country'          => $request->Country,
                'mobile_phone'          => $request->mobile_phone,
                'email_address'          => $request->email_address,
                'email_address_secondary'          => $request->email_address_secondary,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);
            return response()->json(['success' => 'Client Address Added Successfully']);
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);

        }
    }
}
