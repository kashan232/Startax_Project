<?php

namespace App\Http\Controllers;

use App\Models\BankCode;
use App\Models\Client;
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
            $clients_details = Client::findOrFail($id);
            $ClientAddreses = ClientAddress::where('client_id', '=', $client_id)->first();

            // Retrieve all client banks
            $ClientBanks = ClientBank::where('client_id', '=', $client_id)->get();
            $bankData = [];

            foreach ($ClientBanks as $bank) {
                $data = json_decode($bank->bank_data, true);
                $data['id'] = $bank->id;
                $bankData[] = $data;
            }

            // Retrieve all client salaries
            $ClientSalaries = ClientSalary::where('client_id', '=', $client_id)->get();
            $salaryData = [];

            foreach ($ClientSalaries as $salary) {
                $data = json_decode($salary->salary_data, true);
                $data['id'] = $salary->id;
                $salaryData[] = $data;
            }

            // Retrieve selected income types for the client
            $selectedIncomeTypes = IncomeType::where('client_id', '=', $client_id)->pluck('income_type')->toArray();

            // Retrieve all client salaries
            $HouseProperties = HouseProperty::where('client_id', '=', $client_id)->get();
            $HousePropertyData = [];

            foreach ($HouseProperties as $HouseProperty) {
                $data = json_decode($HouseProperty->house_property_data, true);
                $data['id'] = $HouseProperty->id;
                $HousePropertyData[] = $data;
            }

            // dd($HousePropertyData);
            return view('User.client.client_detail', [
                'clients_details' => $clients_details,
                'ClientAddreses' => $ClientAddreses,
                'bankData' => $bankData,
                'salaryData' => $salaryData,
                'selectedIncomeTypes' => $selectedIncomeTypes,
                'HousePropertyData' => $HousePropertyData,
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
                'district'          => $request->district,
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

    public function store_house_property(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($request);
            $client_id = $request->input('client_id');
            $HousePropertiesdata = [
                'occupancyOfHouse' => $request->input('occupancyOfHouse'),
                'address.flatDoorBlockNumber' => $request->input('address.flatDoorBlockNumber'),
                'address.premiseBuildingVillageName' => $request->input('address.premiseBuildingVillageName'),
                'address.roadStreetPostOffice' => $request->input('address.roadStreetPostOffice'),
                'address.pinCodeOrZipCode' => $request->input('address.pinCodeOrZipCode'),
                'address.areaLocality' => $request->input('address.areaLocality'),
                'address.townCityDistrict' => $request->input('address.townCityDistrict'),
                'address_stateInIndia' => $request->input('address_stateInIndia'),
                'address.country' => $request->input('address.country'),
                'ownerOfProperty' => $request->input('ownerOfProperty'),
                'name' => $request->input('name'),
                'pan' => $request->input('pan'),
                'percentage' => $request->input('percentage'),
                'coownerBag.listCoowner[0].name' => $request->input('coownerBag.listCoowner[0].name'),
                'coownerBag.listCoowner[0].pan' => $request->input('coownerBag.listCoowner[0].pan'),
                'coownerBag.listCoowner[0].percentSharePropertyField' => $request->input('coownerBag.listCoowner[0].percentSharePropertyField'),
                'financialYearOfCompletion' => $request->input('financialYearOfCompletion'),
                'totalInterestPaidDuringPreConstruction' => $request->input('totalInterestPaidDuringPreConstruction'),
                'totalInterestPaidDuringPreConstructionAmount' => $request->input('totalInterestPaidDuringPreConstructionAmount'),
                'interestPaidForFinancialYear' => $request->input('interestPaidForFinancialYear'),
                'interestPaidForFinancialYearAmount' => $request->input('interestPaidForFinancialYearAmount'),
                'total_deduction' => $request->input('total_deduction'),
                'total_deductionAmount' => $request->input('total_deductionAmount'),

            ];

            // New bank data create karein
            $HouseProperties = HouseProperty::create([
                'admin_or_user_id' => $userId,
                'client_id' => $client_id,
                'house_property_data' => json_encode($HousePropertiesdata)
            ]);

            return response()->json(['success' => 'House Property details Added Successfully']);
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

            // Retrieving array inputs
            $properties = $request->input('properties', []);
            $pinCodes = $request->input('PinCode', []);
            $measurementOfLands = $request->input('MeasurementOfLand', []);
            $agriLandOwnedFlags = $request->input('AgriLandOwnedFlag', []);
            $agriLandIrrigatedFlags = $request->input('AgriLandIrrigatedFlag', []);

            // Creating the agriData array
            $agriData = [
                'GrossAgriRecpt' => $request->input('GrossAgriRecpt'),
                'ExpIncAgri' => $request->input('ExpIncAgri'),
                'UnabAgriLossPrev8' => $request->input('UnabAgriLossPrev8'),
                'AgriIncRule7and8' => $request->input('AgriIncRule7and8'),
                'NetAgriIncOrOthrIncRule7' => $request->input('NetAgriIncOrOthrIncRule7'),
                'properties' => $properties,
                'PinCode' => $pinCodes,
                'MeasurementOfLand' => $measurementOfLands,
                'AgriLandOwnedFlag' => $agriLandOwnedFlags,
                'AgriLandIrrigatedFlag' => $agriLandIrrigatedFlags,
            ];

            // Save data in database
            $ClientExemptIncome = ExemptIncome::create([
                'admin_or_user_id' => $userId,
                'client_id' => $client_id,
                'exept_income_data' => json_encode($agriData)
            ]);

            return response()->json(['success' => 'Client Exempt Income details Added Successfully']);
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }
}
