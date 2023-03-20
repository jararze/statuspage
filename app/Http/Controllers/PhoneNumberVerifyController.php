<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PhoneNumberVerifyController extends Controller
{
    public function show(Request $request)
    {
//        $phoneVerified = $request->user()->phone_verified_at;
//
//        if(! is_null($phoneVerified)){
//            return redirect()->route('dashboard');
//        }else{
//            return view('phoneverify.show');
//        }
//        dd($request->user()->userPhoneVerified());
        if ($request->user()->userPhoneVerified()) {
            return redirect()->route('dashboard');
        } else {
            return view('phoneverify.show');
        }
    }

    public function verify(Request $request)
    {
//        dd($request->verify);
//        dd($request->user()->verification_code."=".$request->verify);
        if ($request->user()->verification_code !== $request->verify) {
            return back()->withErrors('Invalid Code Please Try Again!');
        }
//        dd("das");
        if ($request->user()->userPhoneVerified() && $request->user()->userEmailVerified()) {
            return redirect()->route('dashboard');
        }

        $request->user()->phoneVerifiedAt();

        return redirect()->route('dashboard')->with('status', 'Your phone was successfully verified!');
    }

}
