<?php

namespace App\Http\Controllers;

use App\Models\Lisence;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\TryCatch;

class LisenceController extends Controller
{
    public function index(Request $request)
    {
        $lisences = Lisence::orderBy('created_at', 'desc')->get();

        return view('pages.lisence.index', compact('lisences'));
    }

    public function create()
    {
        return view('pages.lisence.create');
    }

    public function show($id)
    {
        $lisence = Lisence::findOrFail($id);
        return view('pages.lisence.show', compact('lisence'));
    }

    public function edit($id)
    {
        $lisence = Lisence::findOrFail($id);
        return view('pages.lisence.edit', compact('lisence'));
    }

    public function destroy(string $id)
    {
        $lisence = Lisence::findOrFail($id);
        $lisence->delete();
        return redirect()->route('lisence.index')->with('error', 'Data Berhasil Dihapus !');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_lisence' => 'string|required',
                'nomor_lisence' => 'string|required',
                'vendor' => 'string|required',
                'tanggal_keluar' => 'string|required',
                'tanggal_expired' => 'string|required',
                'jenis_lisence' => 'string|required',
                'input_file' => 'required|mimes:pdf',
                'note' => 'string|nullable'
            ]);
            // dd($request);
            $data = $request->only([
                'nama_lisence',
                'nomor_lisence',
                'vendor',
                'tanggal_keluar',
                'tanggal_expired',
                'jenis_lisence',
                'input_file',
                'note'
            ]);


            if ($request->hasFile('input_file')) {
                $allowedExtensions = ['pdf'];

                $file = $request->file('input_file');
                $extension = $file->getClientOriginalExtension();

                if (in_array(strtolower($extension), $allowedExtensions)) {
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $filenameSimpan = $filename . '_' . time() . '.' . $extension;
                    $path = $file->storeAs('public/storage/', $filenameSimpan);

                    $data['input_file'] = $filenameSimpan;
                }
            }

            Lisence::create($data);

            return redirect()->route('lisence.index')->with('success', 'Data berhasil disimpan !');
        } catch (Exception $e) {
            return back()->with('error', 'File harus berupa PDF !');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama_lisence' => 'string|required',
                'nomor_lisence' => 'string|required',
                'vendor' => 'string|required',
                'tanggal_keluar' => 'string|required',
                'tanggal_expired' => 'string|required',
                'jenis_lisence' => 'string|required',
                'input_file' => 'required|mimes:pdf',
                'note' => 'string|nullable'
            ]);

            $lisence = Lisence::findOrFail($id);

            $data = $request->only([
                'nama_lisence',
                'nomor_lisence',
                'vendor',
                'tanggal_keluar',
                'tanggal_expired',
                'jenis_lisence',
                'note'
            ]);

            if ($request->hasFile('input_file')) {
                $allowedExtensions = ['pdf'];
                $file = $request->file('input_file');
                $extension = $file->getClientOriginalExtension();

                if (in_array(strtolower($extension), $allowedExtensions)) {
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $filenameSimpan = $filename . '_' . time() . '.' . $extension;
                    $path = $file->storeAs('public/storage/', $filenameSimpan);

                    // Remove old file if exists
                    if ($lisence->input_file) {
                        Storage::delete('public/storage/' . $lisence->input_file);
                    }

                    $data['input_file'] = $filenameSimpan;
                }
            }

            $lisence->update($data);

            return redirect()->route('lisence.index')->with('success', 'Data berhasil diupdate !');
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui data!');
        }
    }
}
