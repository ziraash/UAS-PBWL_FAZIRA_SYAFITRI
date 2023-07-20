@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA PAKET LAUNDRY</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/paket')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">PAKET LAUNDRY</label>
                        <input type="text" name="paket_nama" class="form-control" placeholder="Paket">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA/KG</label>
                        <input type="text" name="paket_harga" class="form-control" placeholder="Harga">
                    </div>
                    <div class="mb-3">
                        <label for="">BERAT (KG)</label>
                        <input type="text" name="paket_berat" class="form-control" placeholder="Berat">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection