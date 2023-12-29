<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
use Validator;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

      $title = 'Data FAQ';

      $daftar_faq = FAQ::get();

      return view('content.pages.faq.index', compact('daftar_faq', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $button = 'Simpan';

        $url = 'dashboard.faq.store';

        $title = 'Tambah FAQ';

        return view('content.pages.faq.form', compact('button', 'url', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
          'pertanyaan' => 'required',
          'jawaban' => 'required',
        ];

        $messgaes = [
          'pertanyaan.required' => 'Wajib diisi',
          'jawaban.required' => 'Wajib diisi',
        ];

        $validator = Validator::make($input, $rules, $messgaes)->validate();

        $faq = FAQ::create([
          'pertanyaan' => $request->pertanyaan,
          'jawaban' => $request->jawaban,
        ]);

        return redirect()->route('dashboard.faq')
        ->with('messages', __('pesan.create', ['modules' => $request->input('pertanyaan')]));

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
    public function edit(FAQ $faq)
    {
      $button = 'Update';

      $url = 'dashboard.faq.update';

      $title = 'Update FAQ';

      return view('content.pages.faq.form', compact('button', 'url', 'title', 'faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FAQ $faq)
    {
        $input = $request->all();

        $rules = [
          'pertanyaan' => 'required',
          'jawaban' => 'required',
        ];

        $messgaes = [
          'pertanyaan.required' => 'Wajib diisi',
          'jawaban.required' => 'Wajib diisi',
        ];

        $validator = Validator::make($input, $rules, $messgaes)->validate();

        $faq->pertanyaan = $request->pertanyaan;
        $faq->jawaban = $request->jawaban;

        $faq->save();

        return redirect()->route('dashboard.faq')
        ->with('messages', __('pesan.update', ['modules' => $request->input('pertanyaan')]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQ $faq)
    {
        try{

          $pertanyaan = $faq->pertanyaan;

          $faq->delete();

        }catch(Exception $e){

          return redirect()->route('dashboard.faq')
        ->with('messages', __('pesan.delete', ['modules' => $pertanyaan]));

        }

        return redirect()->route('dashboard.faq')
        ->with('messages', __('pesan.delete', ['modules' => $pertanyaan]));
    }
}
