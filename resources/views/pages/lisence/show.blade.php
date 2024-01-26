@extends('layouts.app')

@section('content')
    <div class="container" style="width: 90%">
        <div class="mb-4">
            <h3>Detail Lisence</h3>
            <div class="d-flex align-items-center justify-content-end">
                <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label class="form-label">Nama Lisence</label>
                <input type="text" name="nama_lisence" class="form-control" value="{{ $lisence->nama_lisence }}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Nomor Lisence</label>
                <input type="text" name="nomor_lisence" class="form-control" value="{{ $lisence->nomor_lisence }}"
                    readonly>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label class="form-label">Vendor</label>
                <input type="text" name="vendor" class="form-control" value="{{ $lisence->vendor }}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Tanggal Dikeluarkan</label>
                <input type="text" name="tanggal_keluar" class="form-control" value="{{ $lisence->tanggal_keluar }}"
                    readonly>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label class="form-label">Tanggal Expired</label>
                <input type="text" name="tanggal_expired" class="form-control" value="{{ $lisence->tanggal_expired }}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Jenis Lisence</label>
                <input type="text" name="jenis_lisence" class="form-control" value="{{ $lisence->jenis_lisence }}"
                    readonly>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label class="form-label">Lisence Bentuk PDF</label>
                <iframe src="{{ url('/storage/storage/' . $lisence->input_file) }}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
            </div>
            <div class="col-md-6">
                <label class="form-label">Note</label>
                <textarea name="note" class="form-control" value="{{ $lisence->note }}"
                    readonly></textarea>
            </div>
        </div>

    </div>
@endsection
