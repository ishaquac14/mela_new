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

        // dd($request);

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

    public function store(Request $request)
    {
        try {
        $request->validate([
            'nama_lisence' => 'string|nullable',
            'nomor_lisence' => 'string|nullable',
            'vendor' => 'string|nullable',
            'tanggal_keluar' => 'string|nullable',
            'tanggal_expired' => 'string|nullable',
            'jenis_lisence' => 'string|nullable',
            'input_file' => 'nullable|mimes:pdf',
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

                    $data['input_file'] = $path;
                } 
            }

            Lisence::create($data);

            return redirect()->route('lisence.index')->with('success', 'Data berhasil disimpan !');
        } catch (Exception $e) {
            return back()->with('error', 'File harus berupa PDF !');
        }
    }
}
