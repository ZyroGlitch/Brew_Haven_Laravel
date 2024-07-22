<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add this import
use Illuminate\Support\Facades\Hash; // Add this if you want to hash passwords

class UserAccountController extends Controller
{
    // View Controllers
    public function registerView()
    {
        return view('userSide.registrationForm');
    }

    public function loginView(){
        return view('userSide.loginForm');
    }

    public function dashboard($userID)
    {
        // Fetch the user by their ID
        $userAccount = UserAccount::where('id', $userID)->first();

        $displayProducts = Product::all();
        
        // Return the view with userAccount firstname
        return view('userSide.dashboard', ['products' => $displayProducts, 'userID' => $userAccount]);
    }


    // Database Model Controllers
    public function register(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        // Inserting the data to the database
        UserAccount::create($data);

        // Fetch the user by their ID
        $userAccount = UserAccount::where('username', $data['username'])->value('id');

        return redirect(route('dashboard.userSide', ['userID' => $userAccount]));
    }


     public function login(Request $request)
    {
        $data = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // Manually query the users table to find the user by username
        $user = UserAccount::where('username', $data['username'])->first();

        // Retrieve the id of the specific user that login
        $userID = UserAccount::where('username', $data['username'])->value('id');

        // Check if the user exists and the password matches
        if ($user && $user->password === $data['password']) {
            return redirect(route('dashboard.userSide', ['userID' => $userID]));

        } else {
            return back()->withErrors([
                'loginFailed' => 'The provided credentials do not match our records.'
            ])->withInput();
        }
    }

}