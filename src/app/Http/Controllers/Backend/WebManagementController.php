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
        $inputs = $request->except('_token');

        foreach ($inputs as $key => $value) {
            // Check if the input is a file
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $imageName = $key . '_' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('frontend/images/settings'), $imageName);
                $finalValue = 'frontend/images/settings/' . $imageName;

                // Delete old image if exists
                $oldSetting = WebSetting::where('key', $key)->first();
                if ($oldSetting && $oldSetting->value && file_exists(public_path($oldSetting->value)) && !str_contains($oldSetting->value, 'frontend/images/')) {
                    // Only delete if it's in the settings folder (don't delete template images)
                    if (str_contains($oldSetting->value, 'settings/')) {
                        unlink(public_path($oldSetting->value));
                    }
                }
            } else {
                $finalValue = $value;
            }

            if ($finalValue !== null) {
                WebSetting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $finalValue]
                );
            }
        }

        return redirect()->back()->with('success', 'Web settings updated successfully.');
    }
}
