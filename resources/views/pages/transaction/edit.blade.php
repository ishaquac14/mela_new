@extends('layouts.app')

@section('content')
    <div class="container" style="width: 95%; font-family: 'Poppins', sans-serif;">
        <div class="mb-4">
            <h3 class="row">Edit Transaction</h3>
            <div class="mb-4 d-flex align-items-center justify-content-end">
                <a href="javascript:history.go(-1);" class="btn btn-primary">
                    <i class="fas fa-solid fa-backward"></i>
                </a>
            </div>
        </div>

        <form action="{{ route('transaction.update', ['id' => $transaction->id]) }}" method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            {{-- @method('POST') --}}
            <table id="myTable" class="table">
                <div class="row">
                    <div class="row col-md-6" style="margin-right: 20px">
                        <label class="row" for="id_transaksi">ID Transaksi</label>
                        <input class="form-control" type="text" name="id_transaksi" placeholder="Masukan Nama Transaksi"
                            aria-label="default input example" value="{{ $transaction->id_transaksi }}" readonly>
                    </div>
                    <div class="row col-md-6">
                        <label class="row" for="tanggal_transaksi">Tanggal Transaksi</label>
                        <input class="form-control" type="text" name="tanggal_transaksi"
                            placeholder="Masukan Nomor Transaksi" aria-label="default input example"
                            value="{{ $transaction->tanggal_transaksi }}">
                    </div>
                </div>
                <div class="row">
                    <div class="row col-md-6 mt-4" style="margin-right: 20px">
                        <label class="row" for="jenis_transaksi">Jenis Transaksi</label>
                        <input class="form-control" type="text" name="jenis_transaksi"
                            placeholder="Pilih Jenis Transaksi" aria-label="default input example"
                            value="{{ $transaction->jenis_transaksi }}">
                    </div>
                    <div class="row col-md-3 mt-4" style="margin-right: 10px">
                        <label class="row" for="deskripsi">Deskripsi</label>
                        <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi"
                            aria-label="default input example" value="{{ $transaction->deskripsi }}">
                    </div>
                    <div class="row col-md-3 mt-4">
                        <label class="row" for="jumlah_item">Jumlah Item</label>
                        <input class="form-control" type="text" name="jumlah_item" placeholder="Jumlah Item"
                            aria-label="default input example" value="{{ $transaction->jumlah_item }}">
                    </div>
                </div>
                <div class="row">
                    <div class="row col-md-6 mt-4" style="margin-right: 20px">
                        <label class="row" for="pihak">Pihak terkait</label>
                        <input class="form-control form-group" type="text" name="pihak" placeholder="Pihak Terkait"
                            aria-label="default input example" value="{{ $transaction->pihak }}">
                    </div>

                    <div class="col-md-6 mt-4" style="margin-left: -10px">
                        <label for="input_file" class="form-label">Bukti Transaksi</label>
                        <div class="form-group">
                            <div class="input-group">
                                <input name="input_file" class="form-control" id="input_file" type="file" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.jpg,.jpeg,.png,.gif,.txt">
                                @if ($transaction->input_file)
                                    <div class="input-group-append">
                                        <span class="input-group-text">File saat ini :</span>
                                    </div>
                                    <input type="text" class="form-control" readonly value="{{ $transaction->input_file }}">
                                @else
                                    <div class="input-group-append">
                                        <span class="input-group-text">Tidak ada file saat ini !</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="row col-md-6 mt-3">
                        <label for="floatingTextarea2" class="row form-label">Note</label>
                        <textarea name="note" class="form-control" id="floatingTextarea2" placeholder="Silahkan Isi Note"
                            style="height: 100px">{{ $transaction->note }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="row col-md-1 mt-4">
                        <button class="btn btn-warning">UPDATE</button>
                    </div>
                </div>
            </table>
        </form>
    </div>
@endsection
