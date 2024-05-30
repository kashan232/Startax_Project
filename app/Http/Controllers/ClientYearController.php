<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\client22;
use App\Models\client23;
use App\Models\client24;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientYearController extends Controller
{

    public function store_house_property_seprate(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $client_id = $request->input('client_id');
            $housePropertyDetails = $request->input('house_property_details');
            $year = $request->input('year');

            // Extracting house property details from the request
            // Extract and merge house property details from the request
            $HousePropertiesdata = [
                'occupancyOfHouse' => $request->input('occupancyOfHouse'),
                'address' => [
                    'flatDoorBlockNumber' => $request->input('address.flatDoorBlockNumber'),
                    'premiseBuildingVillageName' => $request->input('address.premiseBuildingVillageName'),
                    'roadStreetPostOffice' => $request->input('address.roadStreetPostOffice'),
                    'pinCodeOrZipCode' => $request->input('address.pinCodeOrZipCode'),
                    'areaLocality' => $request->input('address.areaLocality'),
                    'townCityDistrict' => $request->input('address.townCityDistrict'),
                    'stateInIndia' => $request->input('address_stateInIndia'),
                    'country' => $request->input('address.country')
                ],
                'ownerOfProperty' => $request->input('ownerOfProperty'),
                'name' => $request->input('name'),
                'pan' => $request->input('pan'),
                'percentage' => $request->input('percentage'),
                'coownerBag' => [
                    'listCoowner' => [
                        [
                            'name' => $request->input('coownerBag.listCoowner.0.name'),
                            'pan' => $request->input('coownerBag.listCoowner.0.pan'),
                            'percentSharePropertyField' => $request->input('coownerBag.listCoowner.0.percentSharePropertyField')
                        ]
                    ]
                ],
                'financialYearOfCompletion' => $request->input('financialYearOfCompletion'),
                'totalInterestPaidDuringPreConstruction' => $request->input('totalInterestPaidDuringPreConstruction'),
                'totalInterestPaidDuringPreConstructionAmount' => $request->input('totalInterestPaidDuringPreConstructionAmount'),
                'interestPaidForFinancialYear' => $request->input('interestPaidForFinancialYear'),
                'interestPaidForFinancialYearAmount' => $request->input('interestPaidForFinancialYearAmount'),
                'total_deduction' => $request->input('total_deduction'),
                'total_deductionAmount' => $request->input('total_deductionAmount'),
            ];
            // Save the data to the appropriate table based on the year
            if ($year == '2022') {
                client22::create([
                    'admin_or_user_id' => $userId,
                    'client_id' => $client_id,
                    'year' => $year,
                    'house_property_data' => json_encode($HousePropertiesdata)
                ]);
            } elseif ($year == '2023') {
                client23::create([
                    'admin_or_user_id' => $userId,
                    'client_id' => $client_id,
                    'year' => $year,
                    'house_property_data' => json_encode($HousePropertiesdata)
                ]);
            } elseif ($year == '2024') {
                client24::create([
                    'admin_or_user_id' => $userId,
                    'client_id' => $client_id,
                    'year' => $year,
                    'house_property_data' => json_encode($HousePropertiesdata)
                ]);
            }

            return response()->json(['success' => 'House Property details Added Successfully']);
        } else {
            return response()->json(['error' => 'User not authenticated'], 403);
        }
    }
}
