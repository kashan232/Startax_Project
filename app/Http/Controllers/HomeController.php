<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(Request $request)
    {

        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                $userId = Auth::id();
                $clients = Client::where('admin_or_user_id', '=', $userId)->get();

                // Decode the personal_details JSON for each client
                foreach ($clients as $client) {
                    $client->personal_details = json_decode($client->personal_details, true);
                }
                return view('user.user_dashboard', [
                    'clients' => $clients,
                ]);
            } else if ($usertype == 'admin') {
                return view('admin.admin_dashboard');
            } else {
                return redirect()->back();
            }
        }
    }
    public function admin_page(Request $request)
    {
        return view('admin.second');
    }

    public function users(Request $request)
    {
        if (Auth::id()) {
            $users = User::where('usertype', 'user')->orderBy('id', 'desc')->get();
            // dd($users);
            return view('admin.user.users', ['users' => $users]);
        } else {
            abort(401);
        }
    }
}
