@extends('layouts.app')

@section('content')
    <div class="container" style="width: 95%">
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

    <div class="container" style="width: 95%">
        <div class="mb-4">
            <h3>Transaction History</h3>
            <div class="d-flex align-items-center justify-content-end">
                <a href="{{ route('transaction.create') }}" class="btn btn-primary" style="margin-left: 10px;">Create</a>
            </div>
        </div>

        <table id="myTable" class="table-bordered table-striped table-hover" style="width: 100%">
            <thead class="table-primary">
                <tr>
                    <th class="align-middle text-center" style="height: 40px">No</th>
                    <th class="align-middle text-center">ID Transaksi</th>
                    <th class="align-middle text-center">Tanggal Transaksi</th>
                    <th class="align-middle text-center">Jenis Transaksi</th>
                    <th class="align-middle text-center">Deskripsi</th>
                    <th class="align-middle text-center">Pihak</th>
                    <th class="align-middle text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td class="align-middle text-center" style="height: 40px">{{ $loop->iteration }}</td>
                        <td class="align-middle text-center">{{ $transaction->id_transaksi }}</td>
                        <td class="align-middle text-center">{{ $transaction->tanggal_transaksi }}</td>
                        <td class="align-middle text-center">{{ $transaction->jenis_transaksi }}</td>
                        <td class="align-middle text-center">{{ $transaction->deskripsi }}</td>
                        <td class="align-middle text-center">{{ $transaction->pihak }}</td>
                        <td class="align-middle text-center">
                            <a href="{{ route('transaction.show', ['id' => $transaction->id]) }}" style="text-decoration: none" class="text-secondary">
                                <i class="fas fa-eye" style="margin-right: 10px;"></i>
                            </a>
                            <a href="{{ route('transaction.edit', ['id' => $transaction->id]) }}" style="text-decoration: none" class="text-secondary">
                                <i class="fas fa-pen" style="margin-right: 10px;"></i>
                            </a>
                            <a href="#" onclick="return confirm('Apakah yakin akan dihapus?')" style="text-decoration: none" class="text-secondary">
                                <i class="fas fa-trash"></i>
                            </a>                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
