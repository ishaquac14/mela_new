<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;

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
            $request->validate([
                'id_transaksi' => 'nullable|string',
                'tanggal_transaksi' => 'nullable|string',
                'jenis_transaksi' => 'nullable|string',
                'deskripsi' => 'nullable|string',
                'jumlah_item' => 'nullable|string',
                'pihak' => 'nullable|string',
                'input_file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png,gif,txt',
                'note' => 'nullable|string'
            ]);

            // Simpan data yang valid ke dalam database
            $data = $request->only([
                'tanggal_transaksi',
                'jenis_transaksi',
                'deskripsi',
                'jumlah_item',
                'pihak',
                'note'
            ]);

            // Gunakan ID transaksi yang sudah ditetapkan sebelumnya
            $data['id_transaksi'] = $request->id_transaksi;

            if ($request->hasFile('input_file')) {
                // Proses upload file
            }

            Transaction::create($data);

            return redirect()->route('transaction.index')->with('success', 'Data berhasil disimpan !');
        } catch (Exception $e) {
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
        // Temukan transaksi berdasarkan ID atau beri respons 404 jika tidak ditemukan
        $transaction = Transaction::findOrFail($id);

        // Validasi permintaan
        $request->validate([
            'tanggal_transaksi' => 'nullable|string',
            'jenis_transaksi' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'jumlah_item' => 'nullable|string',
            'pihak' => 'nullable|string',
            'input_file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png,gif,txt',
            'note' => 'nullable|string'
        ]);

        // Mengambil data dari permintaan yang diizinkan
        $data = $request->only([
            'tanggal_transaksi',
            'jenis_transaksi',
            'deskripsi',
            'jumlah_item',
            'pihak',
            'note'
        ]);

        // Menetapkan ID transaksi yang sudah ditetapkan sebelumnya
        $data['id_transaksi'] = $id;

        // Proses upload file jika ada
        if ($request->hasFile('input_file')) {
            // Lakukan proses unggah file di sini
            // $file = $request->file('input_file');
            // $file->store('uploads');
        }

        // Perbarui data transaksi
        $transaction->update($data);

        // Redirect kembali ke halaman indeks transaksi dengan pesan sukses
        return redirect()->route('transaction.index')->with('success', 'Data berhasil diupdate !');
    }
}
