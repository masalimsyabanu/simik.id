<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilWebsite;
use Storage;
use Image;
use Str;
use Validator;

class ProfilWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil = ProfilWebsite::get()->first();

        if($profil != '')
        {
          return view('content.pages.profil-website.index', compact('profil'));
        }

          return redirect()->route('dashboard.profil-website.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $title = 'Tambah Profil Website';

      $button = 'Simpan';

      $url = 'dashboard.profil-website.store';

        return view('content.pages.profil-website.form', compact('button', 'url', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
          'logo' => ['file','mimes:jpeg,jpg,png'],
          'judul_website' => ['required'],
          'deskripsi' => ['required'],
          'no_hp' => ['required', 'regex:/^(^\+628\s?|^628)(\d{3,4}?){2}\d{2,4}$/','max:13'],
          'email' => ['required'],
          'alamat' => ['required'],
        ];

        $messages = [
          'judul_website.required' => 'Wajib diisi',
          'no_hp.required' => 'Nomor handphone wajib diisi',
          'no_hp.regex' => 'Format nomor handphone salah. Contoh: 6282273318016',
          'no_hp.max' => 'Nomor handphone maksimal 13 digit',
          'deskripsi.required' => 'Wajib diisi',
          'no_hp.required' => 'Wajib diisi',
          'alamat.required' => 'Wajib diisi',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();


        $profil = ProfilWebsite::create(
          [
            'judul_website' => $request->judul_website,
            'no_hp' => $request->no_hp,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'email' => $request->email,
          ]
          );

        if($request->hasFile('logo'))
        {
          $nama_file = Str::uuid();

          $path = 'profil-website/';
          $file_extension = $request->logo->extension();
          $profil->logo = $path . $nama_file . '.' . $file_extension;

          $gambar = $request->file('logo');
          $destinationPath = storage_path('/app/public/');

          $img->fit(100, 100, function ($cons) {
              $cons->aspectRatio();
            })
            ->save($destinationPath . $profil->logo);

          $profil->save();
        }

        return redireac()->route('dashboard.profil-website')
        ->with('messages', __('pesan.create', ['modules' => $request->input('judul_website')]));

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
    public function edit(ProfilWebsite $profil)
    {
      $title = 'Ubah Profil Website';

      $button = 'Update';

      $url = 'dashboard.profil-website.update';

        return view('content.pages.profil-website.form', compact('button', 'url', 'profil', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfilWebsite $profil)
    {
          $input = $request->all();

          $rules = [
            'logo' => ['file','mimes:jpeg,jpg,png'],
            'judul_website' => ['required'],
            'deskripsi' => ['required'],
            'no_hp' => ['required', 'regex:/^(^\+628\s?|^628)(\d{3,4}?){2}\d{2,4}$/','max:13'],
            'email' => ['required'],
            'alamat' => ['required'],
          ];

          $messages = [
            'judul_website.required' => 'Wajib diisi',
            'no_hp.required' => 'Nomor handphone wajib diisi',
            'no_hp.regex' => 'Format nomor handphone salah. Contoh: 6282273318016',
            'no_hp.max' => 'Nomor handphone maksimal 13 digit',
            'deskripsi.required' => 'Wajib diisi',
            'no_hp.required' => 'Wajib diisi',
            'alamat.required' => 'Wajib diisi',
          ];

          $validator = Validator::make($input, $rules, $messages)->validate();

          $profil->judul_website = $request->judul_website;
          $profil->deskripsi = $request->deskripsi;
          $profil->no_hp = $request->no_hp;
          $profil->alamat = $request->alamat;
          $profil->email = $request->email;

          if($request->hasFile('logo'))
          {
            $foto_lama = $profil->logo;

            $nama_file = Str::uuid();

            $path = 'profil-website/';
            $file_extension = $request->logo->extension();
            $profil->logo = $path . $nama_file . '.' . $file_extension;

            $gambar = $request->file('logo');
            $destinationPath = storage_path('/app/public/');

            $img->fit(100, 100, function ($cons) {
                $cons->aspectRatio();
              })
              ->save($destinationPath . $profil->logo);

              if($foto_lama != '') {
                Storage::disk('public')->delete($foto_lama);
              }
            }

            $profil->save();

            return redireac()->route('dashboard.profil-website')
            ->with('messages', __('pesan.update', ['modules' => $request->input('judul_website')]));
          }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilWebsite $profil)
    {
        try{

          if($profil->logo != '')
          {
            Storage::disk('public')->delete($profil->logo);
          }

          $profil->delete();


        }catch(Exception $e)
        {
          return redireac()->route('dashboard.profil-website')
            ->with('messages', __('pesan.delete', ['modules' => $request->input('judul_website')]));
        }

          return redireac()->route('dashboard.profil-website')
          ->with('messages', __('pesan.delete', ['modules' => $request->input('judul_website')]));
    }
}
