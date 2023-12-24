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
        $daftar_user = User::get();

        return view('content.pages.users.index', compact('daftar_user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $button = 'Simpan';
        $url  = 'dashboard.user.store';

        return view('content.pages.users.form', compact('button', 'url'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
          'nama' => 'required',
          'email' => 'required|unique:users,email',
          'password' => 'required',
          'username' => 'required'
        ];

        $messages =[
          'nama.required' => 'Harus diisi',
          'email.required' => 'Harus diisi',
          'email.unique' => 'Email sudah dipakai',
          'password.required' => 'Harus diisi',
          'username.required' => 'Harus diisi'
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $users = User::create([
          'nama' => $request->nama,
          'email' => $request->email,
          'password' => Hash::make($request->password),
          'username' => $request->username,
          'roles' => $request->roles,
          'status' => $request->status,
        ]);

        return redirect()->route('dashboard.user')
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
      $url  = 'dashboard.user.update';

      return view('content.pages.users.form', compact('button', 'url', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
      $input = $request->all();

      $rules = [
        'nama' => 'required',
        'email' => 'required|unique:users,email,'.$user->id,
        'username' => 'required'
      ];

      $messages =[
        'nama.required' => 'Harus diisi',
        'email.required' => 'Harus diisi',
        'email.unique' => 'Email sudah dipakai',
        'username.required' => 'Harus diisi'
      ];

      $validator = Validator::make($input, $rules, $messages)->validate();

      $user->nama = $request->nama;
      $user->email = $request->email;
      $user->username = $request->username;
      $user->status = $request->status;

      if($request->has('password') && $request->password != '') {
        $user->password = Hash::make($request->password);
      }

      $user->save();

      return redirect()->route('dashboard.user')
      ->with('messages', __('pesan.update', ['module' => $request->input('name')]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
       try {
          $user->delete();
       }catch(Exception $e) {
          return redirect()->route('dashboard.user')
        ->with('messages', __('pesan.delete', ['module' => $request->input('name')]));
       }
          return redirect()->route('dashboard.user')
          ->with('messages', __('pesan.delete', ['module' => $request->input('name')]));
    }
}
