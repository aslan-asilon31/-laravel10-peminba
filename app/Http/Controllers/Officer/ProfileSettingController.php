<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Officer\UpdateProfileSettingRequest;
use App\Models\Officer;

class ProfileSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $myInformation = auth('officer')->user();

        return view('officer.profile_setting.index', compact('myInformation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileSettingRequest $request)
    {
        $officer = Officer::find(auth('officer')->id());
        $validated = $request->validated();

        $officer->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'password' => ! is_null($validated['password']) ? bcrypt($validated['password']) : $officer->password,
        ]);

        return redirect()->route('officers.profile-settings.index')->with('success', 'Data berhasil diubah!');
    }
}
