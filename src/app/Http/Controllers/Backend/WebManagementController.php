<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebSetting;
use Illuminate\Http\Request;

class WebManagementController extends Controller
{
    public function index()
    {
        $settings = WebSetting::all()->pluck('value', 'key');
        return view('backend.web-management.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $value) {
            if ($request->hasFile($key)) {
                $imageName = $key.'_'.time().'.'.$request->$key->extension();
                $request->$key->move(public_path('frontend/images/settings'), $imageName);
                $value = 'frontend/images/settings/'.$imageName;
                
                // Delete old image if exists
                $oldSetting = WebSetting::where('key', $key)->first();
                if ($oldSetting && $oldSetting->value && file_exists(public_path($oldSetting->value))) {
                    unlink(public_path($oldSetting->value));
                }
            }

            WebSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Web settings updated successfully.');
    }
}
