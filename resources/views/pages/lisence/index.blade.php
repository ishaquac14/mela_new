@extends('layouts.app')

@section('content')

    <div class="container-fluid">
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

        <div class="container-fluid">
            <div class="mb-4">
                <h3>Lisence</h3>
                <div class="d-flex align-items-center justify-content-end">
                    <a href="{{ route('lisence.create') }}" class="btn btn-primary" style="margin-left: 10px;">Create</a>
                </div>
            </div>

            <table id="myTable" class="table-bordered table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th class="align-middle text-center">ID</th>
                        <th class="align-middle text-center">Nama Lisence</th>
                        <th class="align-middle text-center">Nomor Lisence</th>
                        <th class="align-middle text-center">Vendor</th>
                        <th class="align-middle text-center">Tanggal Dikeluarkan</th>
                        <th class="align-middle text-center">Tanggal Expired</th>
                        <th class="align-middle text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lisences as $lisence)
                        <tr>
                            <td class="align-middle text-center">{{ $loop->iteration }}</td>
                            <td class="align-middle text-center">{{ $lisence->nama_lisence }}</td>
                            <td class="align-middle text-center">{{ $lisence->nomor_lisence }}</td>
                            <td class="align-middle text-center">{{ $lisence->vendor }}</td>
                            <td class="align-middle text-center">{{ $lisence->tanggal_keluar }}</td>
                            <td class="align-middle text-center">{{ $lisence->tanggal_expired }}</td>
                            <td class="align-middle text-center">
                                <a href="{{ route('lisence.show', ['id' => $lisence->id]) }}" class="text-secondary">
                                    <i class="fas fa-eye" style="margin-right: 10px;"></i>
                                </a>
                                <a href="#" style="margin-right: 10px;" class="text-secondary">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="text-secondary">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
