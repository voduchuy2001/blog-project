<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function editSetting()
    {
        $settings = Setting::first();

        return view('admin.settings.edit', compact('settings'));
    }

    public function updateSetting(Request $request)
    {
        $settings = Setting::first();

        $oldAds = $settings->ads;
        if ($request->ads) {
            File::delete($settings->ads);
            $ads = $request->ads;
            $ads_new_name = time() . $ads->getClientOriginalName();
            $ads->move('uploads/settings/', $ads_new_name);

            $settings->ads = 'uploads/settings/' . $ads_new_name;
        } else {
            $settings->ads = $oldAds;
        }

        $settings->facebook = $request->facebook;
        $settings->youtube = $request->youtube;
        $settings->instagram = $request->instagram;
        $settings->pinterest = $request->pinterest;

        $settings->save();
        return redirect()->back()->with('success', 'Update settings success!');
    }
}
