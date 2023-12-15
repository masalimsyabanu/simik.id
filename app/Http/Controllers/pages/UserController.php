<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.pages.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $button = 'Simpan';
        $url  = 'dashboard.users.store';

        return view('content.pages.users.form', compact('button', 'url'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
          'name' => 'required',
          'email' => 'required|unique:users',
          'password' => 'required',
          'username' => 'required'
        ];

        $messages =[
          'name.required' => 'Harus diisi',
          'email.required' => 'Harus diisi',
          'email.unique' => 'Email sudah dipakai',
          'password.required' => 'Harus diisi',
          'username.required' => 'Harus diisi'
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $users = User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => $request->password,
          'username' => $request->username,
          'roles' => $request->roles,
          'status' => $request->status,
        ]);

        return redirect()->route('dashboard.user.index')
        ->with('messages', __('pesan.create', ['module' => $request->input('name')]));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
      $button = 'Update';
      $url  = 'dashboard.users.update';

      return view('content.pages.users.form', compact('button', 'url', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
