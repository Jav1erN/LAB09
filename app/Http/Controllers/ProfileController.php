<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function edit()
    {
        return view('edit_profile');
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|confirmed'
        ]);
    
        try {

            $user = auth()->user();
    

            $user->name = $request->input('name');
            $user->email = $request->input('email');
    
            if ($request->filled('password')) {
                $user->password = Hash::make($request->input('password'));
            }
    
            $user->save();
    
            return redirect()->route('profile.edit')->with('success', 'Perfil actualizado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('profile.edit')->with('error', 'Hubo un problema al actualizar el perfil');
        }
    }    

}   