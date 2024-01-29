@extends('layouts.app')

@section('content')
    <div class="container" style="width: 95%; font-family: 'Poppins', sans-serif;">
        <div class="mb-4">
            <h3 class="row" style="font-family: 'Poppins', sans-serif;">Edit Lisence</h3>
            <div class="mb-4 d-flex align-items-center justify-content-end">
                <a href="javascript:history.go(-1);" class="btn btn-primary">
                    <i class="fas fa-solid fa-backward"></i>
                </a>
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
                            aria-label="default input example" value="{{ $lisence->vendor }}">
                    </div>
                    <div class="row col-md-3 mt-4" style="margin-right: 10px">
                        <label class="row" for="tanggal_keluar">Tanggal Dikeluarkan</label>
                        <input class="form-control" type="date" name="tanggal_keluar" placeholder="Tanggal Dikeluarkan"
                            aria-label="default input example" value="{{ $lisence->tanggal_keluar }}">
                    </div>
                    <div class="row col-md-3 mt-4">
                        <label class="row" for="tanggal_expired">Tanggal Expired</label>
                        <input class="form-control" type="date" name="tanggal_expired" placeholder="Tanggal Expired"
                            aria-label="default input example" value="{{ $lisence->tanggal_expired }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-4" style="margin-right: -5px;">
                        <div class="form-group">
                            <label for="jenis_lisence" class="row form-label">Jenis Lisence</label>
                            <div>
                                <select class="row form-control" name="jenis_lisence" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="">Pilih</option>
                                    <option value="berlangganan"
                                        {{ $lisence->jenis_lisence == 'berlangganan' ? 'selected' : '' }}>Berlangganan
                                    </option>
                                    <option value="sekali_beli"
                                        {{ $lisence->jenis_lisence == 'sekali_beli' ? 'selected' : '' }}>Sekali Beli
                                    </option>
                                    <option value="permanen" {{ $lisence->jenis_lisence == 'permanen' ? 'selected' : '' }}>
                                        Permanen</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <label for="input_file" class="form-label">Lisensi Bentuk PDF</label>
                        <div class="form-group">
                            <div class="input-group">
                                <input name="input_file" class="form-control" id="input_file" type="file" accept=".pdf">
                                @if ($lisence->input_file)
                                    <div class="input-group-append">
                                        <span class="input-group-text">File saat ini :</span>
                                    </div>
                                    <input type="text" class="form-control" readonly value="{{ $lisence->input_file }}">
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
                        <textarea name="note" class="form-control" id="floatingTextarea2" placeholder="Silahkan Isi Note" style="height: 100px">{{ $lisence->note }}</textarea>
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
