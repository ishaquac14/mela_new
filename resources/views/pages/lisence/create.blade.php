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
            <h3 class="row">Create Lisence</h3>
        </div>
        <div class="mb-4 d-flex align-items-center justify-content-end">
            <a href="javascript:history.go(-1);" class="btn btn-primary">
                <i class="fas fa-solid fa-backward"></i>
            </a>
        </div>

        <form action="{{ route('lisence.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @method('POST') --}}
            <table id="myTable" class="table">
                <div class="row">
                    <div class="row col-md-6" style="margin-right: 20px">
                        <label class="row" for="nama_lisence">Nama Lisence</label>
                        <input class="form-control" type="text" name="nama_lisence" placeholder="Masukan Nama Lisence"
                            aria-label="default input example" required>
                    </div>
                    <div class="row col-md-6">
                        <label class="row" for="nomor_lisence">Nomor Lisence</label>
                        <input class="form-control" type="text" name="nomor_lisence" placeholder="Masukan Nomor Lisence"
                            aria-label="default input example" required>
                    </div>
                </div>
                <div class="row">
                    <div class="row col-md-6 mt-4" style="margin-right: 20px">
                        <label class="row" for="vendor">Vendor</label>
                        <input class="form-control" type="text" name="vendor" placeholder="Input Nama Perusahaan"
                            aria-label="default input example" required>
                    </div>
                    <div class="row col-md-3 mt-4" style="margin-right: 10px">
                        <label class="row" for="tanggal_keluar">Tanggal Dikeluarkan</label>
                        <input class="form-control" type="date" name="tanggal_keluar" placeholder="Tanggal Dikeluarkan"
                            aria-label="default input example" required>
                    </div>
                    <div class="row col-md-3 mt-4">
                        <label class="row" for="tanggal_expired">Tanggal Expired</label>
                        <input class="form-control" type="date" name="tanggal_expired" placeholder="Tanggal Expired"
                            aria-label="default input example" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-4" style="margin-right: 10px">
                        <div class="form-group">
                            <label for="jenis_lisence" class="row form-label">Jenis Lisence</label>
                            <div>
                                <select class="row form-control" name="jenis_lisence" id="floatingSelect"
                                    aria-label="Floating label select example" required>
                                    <option disabled disabled>-- Pilih --</option>
                                    <option value="berlangganan">Berlangganan</option>
                                    <option value="sekali_beli">Sekali Beli</option>
                                    <option value="permanen">Permanen</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row col-md-6 mt-4">
                        <label for="input_file" class="row form-label">Lisensi Bentuk PDF</label>
                        <div class="row form-group">
                            <input name="input_file" class="col-md-6 form-control" id="input_file" type="file" accept=".pdf">
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="row col-md-6 mt-3">
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
