<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Settings;
use Illuminate\Http\Request;
use Session;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('admin.settings.index', [
            'settings' => Setting::first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'site_name' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required|email',
            'address' => 'required',
        ]);

        $settings = Setting::first();
        $settings->site_name = $request->site_name;
        $settings->contact_number = $request->contact_number;   
        $settings->contact_email = $request->contact_email;
        $settings->address = $request->address;
        $settings->save();

        Session::flash('success', 'Settings updated successfully.');
        return redirect()->back();
    }

    
}
