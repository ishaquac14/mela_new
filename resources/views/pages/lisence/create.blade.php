@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-4">
            <h3>Lisence</h3>
            <div class="d-flex align-items-center justify-content-end">
                <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
            </div>
        </div>

        <table id="myTable" class="table">
            <div class="row">
                <div class="row col-md-6" style="margin-right: 20px">
                    <label for="nama_lisence">Nama Lisence</label>
                    <input class="form-control" type="text" placeholder="Masukan Nama Lisence"
                        aria-label="default input example">
                </div>
                <div class="row col-md-6">
                    <label for="nomor_lisence">Nomor Lisence</label>
                    <input class="form-control" type="text" placeholder="Masukan Nomor Lisence"
                        aria-label="default input example">
                </div>
            </div>
            <div class="row">
                <div class="row col-md-6 mt-4" style="margin-right: 20px">
                    <label for="vendor">Vendor</label>
                    <input class="form-control" type="text" placeholder="Input Nama Perusahaan"
                        aria-label="default input example">
                </div>
                <div class="row col-md-3 mt-4" style="margin-right: 10px">
                    <label for="tanggal_keluar">Tanggal Dikeluarkan</label>
                    <input class="form-control" type="date" placeholder="Tanggal Dikeluarkan"
                        aria-label="default input example">
                </div>
                <div class="row col-md-3 mt-4">
                    <label for="tanggal_expired">Tanggal Expired</label>
                    <input class="form-control" type="date" placeholder="Tanggal Expired"
                        aria-label="default input example">
                </div>
            </div>
            <div class="row">
                <div class="row col-md-4 mt-4">
                    <label for="jenis_lisence" class="form-label">Jenis Lisence</label>
                    <div class="form-control" style="margin-right: 20px">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row col-md-4 mt-4">
                    <label for="input_file" class="form-label">Lisence Bentuk PDF</label>
                    <input class="form-control" id="input_file" type="file">
                </div>
            </div>
            <div class="row col-md-6 mt-4">
                <label for="floatingTextarea2">Comments</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
        </table>
    </div>
@endsection
