@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mb-4">
            <h3>Lisence</h3>
            <div class="d-flex align-items-center justify-content-end">
                <a href="{{ route('lisence.create') }}" class="btn btn-primary" style="margin-left: 10px;">Create</a>
            </div>
        </div>
        
        <table id="myTable" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lisence</th>
                    <th>Nomor Lisence</th>
                    <th>Vendor</th>
                    <th>Tanggal Dikeluarkan</th>
                    <th>Tanggal Expired</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>test 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                    <td>Action</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 2</td>
                    <td>Action</td>
                </tr>
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
