@extends('layouts.app')

@section('content')
    <div class="container" style="width: 95%; font-family: 'Poppins', sans-serif;">
        <div class="mb-4">
            <h3>Detail Transaction</h3>
            <div class="mb-4 d-flex align-items-center justify-content-end">
                <a href="javascript:history.go(-1);" class="btn btn-primary">
                    <i class="fas fa-solid fa-backward"></i>
                </a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label class="form-label">ID Transaksi</label>
                <input type="text" name="id_transaksi" class="form-control" value="{{ $transaction->id_transaksi }}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Tanggal Transaksi</label>
                <input type="text" name="tanggal_transaksi" class="form-control" value="{{ $transaction->tanggal_transaksi }}"
                    readonly>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label class="form-label">Jenis Transaksi</label>
                <input type="text" name="jenis_transaksi" class="form-control" value="{{ $transaction->jenis_transaksi }}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Pihak Terkait</label>
                <input type="text" name="pihak" class="form-control" value="{{ $transaction->pihak }}"
                    readonly>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $transaction->deskripsi }}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Jumlah Item</label>
                <input type="text" name="jumlah_item" class="form-control" value="{{ $transaction->jumlah_item }}"
                    readonly>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label class="form-label">Bukti Transaksi</label>
                <iframe src="{{ asset('/storage/storage/' . $transaction->input_file) }}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
            </div>
            <div class="col-md-6">
                <label class="form-label">Note</label>
                <textarea name="note" class="form-control" readonly>{{ $transaction->note }}</textarea>
            </div>            
        </div>

    </div>
@endsection
