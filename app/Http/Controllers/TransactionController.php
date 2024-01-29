<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('id_transaksi', 'desc')->get();
        return view('pages.transaction.index', compact('transactions'));
    }

    public function create()
    {
        // Mendapatkan ID transaksi terakhir dari database
        $lastTransaction = Transaction::orderBy('id_transaksi', 'desc')->first();

        // Menentukan nomor urut untuk transaksi berikutnya
        $nextId = $lastTransaction ? intval(substr($lastTransaction->id_transaksi, -3)) + 1 : 1;

        // Membuat ID transaksi baru dengan format yang diinginkan
        $idTransaksi = 'ITD-TRS-' . str_pad($nextId, 3, '0', STR_PAD_LEFT);

        return view('pages.transaction.create', compact('idTransaksi'));
    }


    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'id_transaksi' => 'required|string',
                'tanggal_transaksi' => 'required|string',
                'jenis_transaksi' => 'required|string',
                'deskripsi' => 'required|string',
                'jumlah_item' => 'required|string',
                'pihak' => 'required|string',
                'input_file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png,gif,txt',
                'note' => 'nullable|string'
            ]);

            // Simpan data yang valid ke dalam variabel $data
            $data = $request->only([
                'id_transaksi',
                'tanggal_transaksi',
                'jenis_transaksi',
                'deskripsi',
                'jumlah_item',
                'pihak',
                'note'
            ]);

            // Menggunakan ID transaksi yang sudah ditetapkan sebelumnya
            $data['id_transaksi'] = $request->id_transaksi;

            // Memproses upload file jika ada
            if ($request->hasFile('input_file')) {
                // Mengambil ekstensi file yang diunggah
                $file = $request->file('input_file');
                $extension = strtolower($file->getClientOriginalExtension());

                // Menyimpan file hanya jika ekstensinya diizinkan
                if (in_array($extension, ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'jpg', 'jpeg', 'png', 'gif', 'txt'])) {
                    // Menyimpan file dengan nama yang unik
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $filenameSimpan = $filename . '_' . time() . '.' . $extension;
                    $path = $file->storeAs('public/storage/', $filenameSimpan);

                    // Menyimpan nama file ke dalam variabel $data
                    $data['input_file'] = $filenameSimpan;
                } else {
                    // Jika ekstensi file tidak diizinkan, kembalikan pesan kesalahan
                    return back()->with('error', 'Tipe file tidak diizinkan. Silakan unggah file dengan salah satu ekstensi berikut: pdf, doc, docx, xls, xlsx, ppt, pptx, jpg, jpeg, png, gif, atau txt.');
                }
            }

            // Menyimpan data transaksi ke dalam database
            Transaction::create($data);

            // Redirect ke halaman indeks transaksi dengan pesan sukses
            return redirect()->route('transaction.index')->with('success', 'Data berhasil disimpan !');
        } catch (Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan error
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('pages.transaction.show', compact('transaction'));
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('pages.transaction.edit', compact('transaction'));
    }

    public function destroy(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return redirect()->route('transaction.index')->with('error', 'Data Berhasil Dihapus !');
    }

    public function update(Request $request, $id)
    {
        try {
            // Temukan transaksi berdasarkan ID
            $transaction = Transaction::findOrFail($id);

            // Validasi input
            $request->validate([
                'tanggal_transaksi' => 'required|string',
                'jenis_transaksi' => 'required|string',
                'deskripsi' => 'required|string',
                'jumlah_item' => 'required|string',
                'pihak' => 'required|string',
                'input_file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png,gif,txt',
                'note' => 'nullable|string'
            ]);

            // Simpan data yang valid ke dalam variabel $data
            $data = $request->only([
                'tanggal_transaksi',
                'jenis_transaksi',
                'deskripsi',
                'jumlah_item',
                'pihak',
                'note'
            ]);

            // Memproses upload file jika ada
            if ($request->hasFile('input_file')) {
                $file = $request->file('input_file');
                $extension = strtolower($file->getClientOriginalExtension());

                // Menyimpan file hanya jika ekstensinya diizinkan
                if (in_array($extension, ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'jpg', 'jpeg', 'png', 'gif', 'txt'])) {
                    // Menghapus file lama jika ada
                    if ($transaction->input_file) {
                        Storage::delete('public/storage/' . $transaction->input_file);
                    }

                    // Menyimpan file dengan nama yang unik
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $filenameSimpan = $filename . '_' . time() . '.' . $extension;
                    $path = $file->storeAs('public/storage/', $filenameSimpan);

                    // Menyimpan nama file ke dalam variabel $data
                    $data['input_file'] = $filenameSimpan;
                } else {
                    // Jika ekstensi file tidak diizinkan, kembalikan pesan kesalahan
                    return back()->with('error', 'Tipe file tidak diizinkan. Silakan unggah file dengan salah satu ekstensi berikut: pdf, doc, docx, xls, xlsx, ppt, pptx, jpg, jpeg, png, gif, atau txt.');
                }
            }

            // Perbarui data transaksi
            $transaction->update($data);

            // Redirect ke halaman indeks transaksi dengan pesan sukses
            return redirect()->route('transaction.index')->with('success', 'Data berhasil diperbarui !');
        } catch (Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan error
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
