<?php

namespace App\Http\Controllers;

use App\Models\BankCode;
use App\Models\Client;
use App\Models\client22;
use App\Models\client23;
use App\Models\client24;
use App\Models\ClientAddress;
use App\Models\ClientBank;
use App\Models\ClientSalary;
use App\Models\ExemptIncome;
use App\Models\HouseProperty;
use App\Models\IncomeType;
use App\Models\PinCode;
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

            // New bank data create karein
            $Clients = Client::create([
                'admin_or_user_id' => $userId,
                'client_type' => $request->input('client_type'),
                'first_name' => $request->input('first_name'),
                'middel_name' => $request->input('middel_name'),
                'last_name' => $request->input('last_name'),
                'father_name' => $request->input('father_name'),
                'DOB' => $request->input('DOB'),
                'PAN_numbr' => $request->input('PAN_numbr'),
                'gender' => $request->input('gender'),
                'marital_status' => $request->input('marital_status'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);
            return redirect()->back()->with('Client-added', 'Client Added Successfully');
        } else {
            return redirect()->back();
        }
    }

    public function client_catalog(Request $request)
    {
        if (Auth::id()) {
            // dd($request);
            $userId = Auth::id();
            $client_id = $request->client_id;
            $year = $request->year;
            $clients_details = Client::where('id', '=', $client_id)->first();
            $ClientAddreses = ClientAddress::where('id', '=', $client_id)->get();
            $ClientBanks = ClientBank::where('id', '=', $client_id)->get();
            // Retrieve selected income types for the client
            $selectedIncomeTypes = IncomeType::where('client_id', '=', $client_id)->pluck('income_type')->toArray();
            // dd($selectedIncomeTypes);
            if ($year == 2022) {
                return view('User.catalog_22.client_catalog_22', [
                    'clients_details' => $clients_details,
                    'ClientAddreses' => $ClientAddreses,
                    'ClientBanks' => $ClientBanks,
                    'selectedIncomeTypes' => $selectedIncomeTypes,
                ]);
            } elseif ($year == 2023) {
                return view('User.catalog_23.client_catalog_23', [
                    'clients_details' => $clients_details,
                    'ClientAddreses' => $ClientAddreses,
                    'ClientBanks' => $ClientBanks,
                    'selectedIncomeTypes' => $selectedIncomeTypes,
                ]);
            } elseif ($year == 2024) {
                return view('User.catalog_24.client_catalog_24', [
                    'clients_details' => $clients_details,
                    'ClientAddreses' => $ClientAddreses,
                    'ClientBanks' => $ClientBanks,
                    'selectedIncomeTypes' => $selectedIncomeTypes,
                    'client_id' => $client_id,
                    'year' => $year,
                ]);
            } else {
                return redirect()->back()->with('error', 'Invalid year provided');
            }
        } else {
            return redirect()->back();
        }
    }






    public function edit_client_basic_details(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $update_id = $request->input('update_id');

            // Fetch the existing client details
            $client = Client::find($update_id);
            if (!$client) {
                return response()->json(['success' => false, 'message' => 'Client not found'], 404);
            }

            // Update the client details
            $updateResult = $client->update([
                'admin_or_user_id' => $userId,
                'first_name' => $request->input('first_name'),
                'middel_name' => $request->input('middel_name'),
                'last_name' => $request->input('last_name'),
                'father_name' => $request->input('father_name'),
                'DOB' => $request->input('DOB'),
                'PAN_numbr' => $request->input('PAN_numbr'),
                'gender' => $request->input('gender'),
                'marital_status' => $request->input('marital_status')
            ]);

            if ($updateResult) {
                return response()->json(['success' => true, 'message' => 'Client details updated successfully']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to update client details']);
            }
        } else {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
    }


    public function store_client_address(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $client_id = $request->input('update_id');
            // Update the client address details
            $ClientAddress = ClientAddress::create([
                'admin_or_user_id' => $userId,
                'client_id' => $client_id,
                'residence_no' => $request->input('residence_no'),
                'residence_name' => $request->input('residence_name'),
                'road_street' => $request->input('road_street'),
                'pin_code' => $request->input('pin_code'),
                'locality_or_area' => $request->input('locality_or_area'),
                'district' => $request->input('district'),
                'State' => $request->input('State'),
                'country_code' => $request->input('country_code'),
                'country_code_mobile' => $request->input('country_code_mobile'),
                'mobile_number' => $request->input('mobile_number'),
                'zip_code' => $request->input('zip_code'),
                'email' => $request->input('email'),
            ]);

            if ($ClientAddress) {
                return response()->json(['success' => true, 'message' => 'Client address details updated successfully']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to update client address details']);
            }
        } else {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
    }


    public function store_client_bank(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $client_id = $request->input('update_id');
            $ClientAddress = ClientBank::create([
                'admin_or_user_id' => $userId,
                'client_id' => $client_id,
                'Aadhaar_card_number' => $request->input('Aadhaar_card_number'),
                'Aadhaar_enrollment_number' => $request->input('Aadhaar_enrollment_number'),
                'bank_isfc_code' => $request->input('bank_isfc_code'),
                'bank_name' => $request->input('bank_name'),
                'Refund' => $request->input('Refund'),
                'bank_acount_no' => $request->input('bank_acount_no'),
                'bank_acount_type' => $request->input('bank_acount_type'),
            ]);

            if ($ClientAddress) {
                return response()->json(['success' => true, 'message' => 'Client bank details updated successfully']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to update client bank details']);
            }
        } else {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
    }

    public function delete_store_client_bank(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $id = $request->input('id');
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

    public function delete_store_client_income_salary(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $id = $request->input('id');
            $ClientSalary = ClientSalary::find($id);
            if ($ClientSalary && $ClientSalary->admin_or_user_id == $userId) {
                $ClientSalary->delete();
                return response()->json(['success' => 'Salary details deleted successfully']);
            } else {
                return response()->json(['error' => 'Unauthorized or Salary details not found'], 403);
            }
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }


    public function delete_store_house_property(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $id = $request->input('id');
            $HouseProperty = HouseProperty::find($id);
            if ($HouseProperty && $HouseProperty->admin_or_user_id == $userId) {
                $HouseProperty->delete();
                return response()->json(['success' => 'House property details deleted successfully']);
            } else {
                return response()->json(['error' => 'Unauthorized or Salary details not found'], 403);
            }
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }

    public function store_client_salary(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $client_id = $request->input('client_id');
            $SalaryData = [
                'salary_type' => $request->input('salary_type'),
                'em_name' => $request->input('em_name'),
                'em_address' => $request->input('em_address'),
                'pin_code_salry' => $request->input('pin_code_salry'),
                'district_salary' => $request->input('district_salary'),
                'State_salary' => $request->input('State_salary'),
                'employer_category' => $request->input('employer_category'),
                'Salary_1' => $request->input('Salary_1'),
                'perquisites_value' => $request->input('perquisites_value'),
                'profits_in_lieu' => $request->input('profits_in_lieu'),
                'exempt_allowance' => $request->input('exempt_allowance'),
                'deduction_us_16' => $request->input('deduction_us_16'),
                'tds_tax' => $request->input('tds_tax'),
                'tds_tan_emp' => $request->input('tds_tan_emp'),
            ];

            // New bank data create karein
            $ClientSalary = ClientSalary::create([
                'admin_or_user_id' => $userId,
                'client_id' => $client_id,
                'salary_data' => json_encode($SalaryData)
            ]);

            return response()->json(['success' => 'Client Salary details Added Successfully']);
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }



    public function getLocationDetails($pincode)
    {
        if (Auth::id()) {
            $location = Pincode::where('Pincode', $pincode)->first();

            if ($location) {
                return response()->json([
                    'state' => $location->StateName,
                    'district' => $location->District
                ]);
            } else {
                return response()->json(['message' => 'Pincode not found'], 404);
            }
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }

    public function getBankDetails($ifsc)
    {
        if (Auth::id()) {
            $bank = BankCode::where('IFSC_Code', $ifsc)->first();
            if ($bank) {
                return response()->json([
                    'bank_name' => $bank->Bank_Name
                ]);
            } else {
                return response()->json(['message' => 'IFSC code not found'], 404);
            }
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }

    public function saveIncomeTypes(Request $request)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $userId = Auth::id();
            $selectedTypes = $request->input('income_type');
            $client_id = $request->input('client_id');

            // Fetch existing income types for the client
            $existingIncomeTypes = IncomeType::where('client_id', $client_id)->pluck('income_type')->toArray();

            // Convert selected types to an associative array for easier lookup
            $selectedTypesAssoc = array_flip($selectedTypes);

            // Iterate over existing income types to update or delete them
            foreach ($existingIncomeTypes as $existingType) {
                if (isset($selectedTypesAssoc[$existingType])) {
                    // If the type is still selected, remove it from the associative array (indicates it's already in DB)
                    unset($selectedTypesAssoc[$existingType]);
                } else {
                    // If the type is no longer selected, delete the record
                    IncomeType::where('client_id', $client_id)
                        ->where('income_type', $existingType)
                        ->delete();
                }
            }

            // The remaining items in $selectedTypesAssoc are new and need to be inserted
            foreach ($selectedTypesAssoc as $type => $value) {
                IncomeType::create([
                    'admin_or_user_id' => $userId,
                    'client_id' => $client_id,
                    'income_type' => $type
                ]);
            }

            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }
    public function store_client_exempt_income(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $client_id = $request->input('client_id');
            $year = $request->input('year');

            // Retrieving array inputs
            $NameOfDistrict = $request->input('NameOfDistrict', []);
            $pinCodes = $request->input('PinCode', []);
            $measurementOfLands = $request->input('MeasurementOfLand', []);
            $agriLandOwnedFlags = $request->input('AgriLandOwnedFlag', []);
            $agriLandIrrigatedFlags = $request->input('AgriLandIrrigatedFlag', []);
            $otherExemptIncomes = $request->input('other_exempt_income', []);
            $otherExemptSources = $request->input('other_exempt_source', []);
            $otherExemptDescriptions = $request->input('other_exempt_description', []);
            $otherExemptAmounts = $request->input('other_exempt_amount', []);
            $interestIncomePPFOthers = $request->input('interest_income_ppf_other', []);
            $interestIncomePPFAmounts = $request->input('interest_income_ppf_amount', []);

            // Creating the agriData array
            $agriData = [
                'GrossAgriRecpt' => $request->input('GrossAgriRecpt'),
                'ExpIncAgri' => $request->input('ExpIncAgri'),
                'UnabAgriLossPrev8' => $request->input('UnabAgriLossPrev8'),
                'NetAgriIncOrOthrIncRule7' => $request->input('NetAgriIncOrOthrIncRule7'),
                'NameOfDistrict' => $NameOfDistrict,
                'PinCode' => $pinCodes,
                'MeasurementOfLand' => $measurementOfLands,
                'AgriLandOwnedFlag' => $agriLandOwnedFlags,
                'AgriLandIrrigatedFlag' => $agriLandIrrigatedFlags,
                'other_exempt_income' => $otherExemptIncomes,
                'other_exempt_source' => $otherExemptSources,
                'other_exempt_description' => $otherExemptDescriptions,
                'other_exempt_amount' => $otherExemptAmounts,
                'interest_income_ppf_other' => $interestIncomePPFOthers,
                'interest_income_ppf_amount' => $interestIncomePPFAmounts,
            ];
            // dd($agriData);
            // Save data in the appropriate table based on the year
            if ($year == '2022') {
                $ClientExemptIncome = client22::where('client_id', $client_id)->where('year', $year)->update([
                    'admin_or_user_id' => $userId,
                    'client_id' => $client_id,
                    'year' => $year,
                    'exempt_income_data' => json_encode($agriData)
                ]);
            } elseif ($year == '2023') {
                $ClientExemptIncome = client23::where('client_id', $client_id)->where('year', $year)->update([
                    'admin_or_user_id' => $userId,
                    'client_id' => $client_id,
                    'year' => $year,
                    'exempt_income_data' => json_encode($agriData)
                ]);
            } elseif ($year == '2024') {
                $ClientExemptIncome = client24::where('client_id', $client_id)->where('year', $year)->update([
                    'admin_or_user_id' => $userId,
                    'client_id' => $client_id,
                    'year' => $year,
                    'exempt_income_data' => json_encode($agriData)
                ]);
            } else {
                return response()->json(['error' => 'Invalid year specified'], 400);
            }

            return response()->json(['success' => 'Client Exempt Income details Added Successfully']);
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }

    public function store_vda_form(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $client_id = $request->input('client_id');
            $year = $request->input('year');
    
            // Creating the vdaData array
            $vdaData = [
                'asset_name' => $request->input('asset_name'),
                'buy_date' => $request->input('buy_date'),
                'sell_date' => $request->input('sell_date'),
                'buy_value' => $request->input('buy_value'),
                'sell_value' => $request->input('sell_value'),
                'income_head' => $request->input('income_head'),
                'gains' => $request->input('gains'),
            ];
    
            // Save data in the appropriate table based on the year
            if ($year == '2022') {
                $ClientVdaIncome = client22::where('client_id', $client_id)->where('year', $year)->updateOrInsert(
                    [
                        'client_id' => $client_id,
                        'year' => $year,
                    ],
                    [
                        'admin_or_user_id' => $userId,
                        'vda_form_data' => json_encode($vdaData),
                    ]
                );
            } elseif ($year == '2023') {
                $ClientVdaIncome = client23::where('client_id', $client_id)->where('year', $year)->updateOrInsert(
                    [
                        'client_id' => $client_id,
                        'year' => $year,
                    ],
                    [
                        'admin_or_user_id' => $userId,
                        'vda_form_data' => json_encode($vdaData),
                    ]
                );
            } elseif ($year == '2024') {
                $ClientVdaIncome = client24::where('client_id', $client_id)->where('year', $year)->updateOrInsert(
                    [
                        'client_id' => $client_id,
                        'year' => $year,
                    ],
                    [
                        'admin_or_user_id' => $userId,
                        'vda_form_data' => json_encode($vdaData),
                    ]
                );
            } else {
                return response()->json(['error' => 'Invalid year specified'], 400);
            }
    
            return response()->json(['success' => 'VDA Income details Added Successfully']);
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }
    
}
