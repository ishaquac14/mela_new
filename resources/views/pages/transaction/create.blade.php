@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger border border-danger text-danger px-4 py-3 rounded-md shadow mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <div>
                        {{ session('error') }}
                    </div>
                </div>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success border border-success text-success px-4 py-3 rounded-md shadow mb-4"
                role="alert">
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="container" style="width: 95%; font-family: 'Poppins', sans-serif;">
        <div class="mb-4">
            <h3 class="row">Create Transaction</h3>
        </div>
        <div class="mb-4 d-flex align-items-center justify-content-end">
            <a href="javascript:history.go(-1);" class="btn btn-primary">
                <i class="fas fa-solid fa-backward"></i>
            </a>
        </div>

        <form action="{{ route('transaction.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @method('POST') --}}
            <table id="myTable" class="table">
                <div class="row">
                    <div class="row col-md-6" style="margin-right: 20px">
                        <label class="row" for="id_transaksi">ID Transaksi</label>
                        <input class="form-control" type="text" name="id_transaksi" value="{{ $idTransaksi }}" placeholder="Masukan "
                            aria-label="default input example" readonly>
                    </div>
                    <div class="row col-md-6">
                        <label class="row" for="tanggal_transaksi">Tanggal Transaksi</label>
                        <input class="form-control" type="date" name="tanggal_transaksi" placeholder="Masukan Tanggal Transaksi"
                            aria-label="default input example" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-4" style="margin-right: 10px">
                        <div class="form-group">
                            <label for="jenis_transaksi" class="row form-label">Jenis Transaksi</label>
                            <div>
                                <select class="row form-control" name="jenis_transaksi" id="floatingSelect"
                                    aria-label="Floating label select example" required>
                                    <option selected disabled>-- Pilih --</option>
                                    <option value="gr">GR</option>
                                    <option value="pr">PR</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-6 mt-4 form-group">
                        <label class="row" for="deskripsi">Deskripsi</label>
                        <input class="form-control" type="text" name="deskripsi" placeholder="Masukan Deskripsi"
                            aria-label="default input example" required>
                    </div>
                </div>
                <div class="row">
                    <div class="row col-md-4 mt-3 form-group" style="margin-right :20px">
                        <label class="row" for="jumlah_item">Jumlah Item</label>
                        <input class="form-control form-group" type="text" name="jumlah_item" placeholder="Jumlah Item"
                            aria-label="default input example" required>
                    </div>
                    <div class="row col-md-4 mt-3 form-group" style="margin-right :20px">
                        <label class="row" for="pihak">Pihak Terkait</label>
                        <input class="form-control form-group" type="text" name="pihak" placeholder="Input Pihak Terkait"
                            aria-label="default input example" required>
                    </div>
                    <div class="row col-md-4 mt-3 form-group">  
                        <label for="input_file" class="row form-label">Bukti Transaksi</label>
                        <div class="row form-group">
                            <input name="input_file" class="col-md-6 form-control" id="input_file" type="file">
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="row col-md-6 mt-2">
                        <label for="floatingTextarea2" class="row">Note</label>
                        <textarea name="note" class="form-control" placeholder="Silahkan Isi Note" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="row col-md-1 mt-4">
                        <button class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
            </table>
        </form>
    </div>
@endsection
