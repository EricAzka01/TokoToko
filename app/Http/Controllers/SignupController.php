<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Seller;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Jobs\WelcomeEmailJob;
use App\Jobs\WelcomeEmailJobSeller;

class SignupController extends Controller
{
    public function index()
    {
        $title = 'Sign Up';

        return view('auth.signup', [
            'title' => $title,
        ]);
    }

    public function signup_buyer(Request $request)
    {
        $validated = $request->validate([
            'b_name' => 'required|unique:buyers|max:100|min:2',
            'b_email' => 'required|email|unique:buyers',
            'b_phoneno' => 'required|unique:buyers',
            'b_address' => 'required|max:150',
            'b_password' => 'required|min:6|alpha_dash',
        ]);

        $validated['password'] = Hash::make($validated['b_password']);

        Buyer::create($validated);
        
        WelcomeEmailJob::dispatch($request->b_email, $request->b_name);

        return redirect('/login')->with('signupSuccess', 'Successfully signed up, you can now');
    }

    public function signup_seller(Request $request) {
        $validated = $request->validate([
            's_name' => 'required|unique:sellers|max:100|min:2',
            's_email' => 'required|email|unique:sellers',
            's_phoneno' => 'required|unique:sellers',
            's_address' => 'required|max:150',
            's_password' => 'required|min:6|alpha_dash',
        ]);

        $validated['password'] = Hash::make($validated['s_password']);

        Seller::create($validated);

        WelcomeEmailJobSeller::dispatch($request->s_email, $request->s_name);

        return redirect('/login')->with('signupSuccess', 'Successfully signed up, you can now');
    }
}
