<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;

class SystemController extends Controller
{
    public function GeneralSetting()
    {
        $data['systemData'] = System::all();
        return view('system.general_setting_view', $data);
    }

    public function GeneralSettingUpdate(Request $request, $id)
    {
        $data = System::find($id);
        $data->name = $request->name;
        $data->title = $request->title;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->currency = $request->currency;
        $data->theme = $request->theme;
        $data->footer = $request->footer;
        $data->body_color = $request->body_color;
        $data->school_detail = $request->school_detail;

        if ($request->file('logo')) {
            $file = $request->file('logo');
            @unlink(public_path('upload/system_image/' . $data->logo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('upload/system_image'), $filename);
            $data['logo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'System Data Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function showSchoolDetails()
    {
        $system = System::first(); // Adjust this based on your data retrieval logic
        return view('frontend.school_details', compact('system'));
    }
}
