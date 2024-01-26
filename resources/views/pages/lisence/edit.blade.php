@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-4">
            <h3 class="row">Edit Lisence</h3>
            <div class="d-flex align-items-center justify-content-end">
                <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
            </div>
        </div>

        <form action="{{ route('lisence.update', ['id' => $lisence->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            {{-- @method('POST') --}}
            <table id="myTable" class="table">
                <div class="row">
                    <div class="row col-md-6" style="margin-right: 20px">
                        <label class="row" for="nama_lisence">Nama Lisence</label>
                        <input class="form-control" type="text" name="nama_lisence" placeholder="Masukan Nama Lisence"
                            aria-label="default input example" value="{{ $lisence->nama_lisence }}">
                    </div>
                    <div class="row col-md-6">
                        <label class="row" for="nomor_lisence">Nomor Lisence</label>
                        <input class="form-control" type="text" name="nomor_lisence" placeholder="Masukan Nomor Lisence"
                            aria-label="default input example" value="{{ $lisence->nomor_lisence }}">
                    </div>
                </div>
                <div class="row">
                    <div class="row col-md-6 mt-4" style="margin-right: 20px">
                        <label class="row" for="vendor">Vendor</label>
                        <input class="form-control" type="text" name="vendor" placeholder="Input Nama Perusahaan"
                            aria-label="default input example">
                    </div>
                    <div class="row col-md-3 mt-4" style="margin-right: 10px">
                        <label class="row" for="tanggal_keluar">Tanggal Dikeluarkan</label>
                        <input class="form-control" type="date" name="tanggal_keluar" placeholder="Tanggal Dikeluarkan"
                            aria-label="default input example">
                    </div>
                    <div class="row col-md-3 mt-4">
                        <label class="row" for="tanggal_expired">Tanggal Expired</label>
                        <input class="form-control" type="date" name="tanggal_expired" placeholder="Tanggal Expired"
                            aria-label="default input example">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-4" style="margin-right: 10px">
                        <div class="form-group">
                            <label for="jenis_lisence" class="row form-label">Jenis Lisence</label>
                            <div>
                                <select class="row form-control" name="jenis_lisence" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Pilih</option>
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
                        <button class="btn btn-warning">UPDATE</button>
                    </div>
                </div>
            </table>
        </form>
    </div>

@endsection
