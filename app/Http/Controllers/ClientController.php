<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientAddress;
use App\Models\ClientBank;
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
            $client_id = $id;
            $clients_details = Client::FindOrFail($id);
            $ClientAddreses = ClientAddress::where('client_id', '=', $client_id)->first();
        
            // Saare client ke banks retrieve karein
            $ClientBanks = ClientBank::where('client_id', '=', $client_id)->get();

            $bankData = []; // Default value set karain

            foreach ($ClientBanks as $bank) {
                // Har bank ka data JSON se decode karein aur $bankData array mein push karein
                $bankData[] = json_decode($bank->bank_data, true);
            }

            return view('User.client.client_detail', [
                'clients_details' => $clients_details,
                'ClientAddreses' => $ClientAddreses,
                'bankData' => $bankData, // JSON data ko view mein pass karein
            ]);
        } else {
            return redirect()->back();
        }
    }




    public function edit_client_basic_details(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $userId = Auth::id();
            $update_id = $request->input('update_id');

            Client::where('id', $update_id)->update([
                'admin_or_user_id'    => $userId,
                'first_name'          => $request->first_name,
                'middel_name'         => $request->middel_name,
                'last_name'           => $request->last_name,
                'father_name'         => $request->father_name,
                'DOB'                 => $request->DOB,
                'PAN_numbr'           => $request->PAN_numbr,
                'gender'              => $request->gender,
                'marital_status'      => $request->marital_status,
                'updated_at'          => Carbon::now(),
            ]);

            // Client ki details ko JSON format me retrieve karne ka function call
            // $clientDetails = $this->getClientDetails($update_id);

            // return response()->json($clientDetails); // Client ki details ko JSON format me return karein
        } else {
            return response()->json(['error' => 'User not authenticated'], 401); // Agar user authenticate nahi hai to error return karein
        }
    }

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

    public function store_client_bank(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $client_id = $request->input('client_id');
            
            $bankData = [
                'IFSC_Code' => $request->input('bank_isfc_code'),
                'Bank_Account_No' => $request->input('bank_acount_no'),
                'Bank_Name' => $request->input('bank_name'),
                'Account_Type' => $request->input('bank_acount_type')
            ];

            // New bank data create karein
            $clientBank = ClientBank::create([
                'admin_or_user_id' => $userId,
                'client_id' => $client_id,
                'bank_data' => json_encode($bankData)
            ]);

            return response()->json(['success' => 'Client Bank details Added Successfully']);
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }

    public function delete_store_client_bank(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $id =$request->input('id');
            $clientBank = ClientBank::find($id);
            if ($clientBank && $clientBank->admin_or_user_id == $userId) {
                $clientBank->delete();
                return response()->json(['success' => 'Bank details deleted successfully']);
            } else {
                return response()->json(['error' => 'Unauthorized or bank details not found'], 403);
            }
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }

}
