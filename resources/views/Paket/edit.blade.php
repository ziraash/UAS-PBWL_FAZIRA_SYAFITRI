@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA PAKET LAUNDRY</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/paket/' .$row->paket_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">PAKET LAUNDRY</label>
                        <input type="text" name="paket_nama" class="form-control" value="{{$row->paket_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA/KG</label>
                        <input type="text" name="paket_harga" class="form-control" value="{{$row->paket_harga}}">
                    </div>
                    <div class="mb-3">
                        <label for="">BERAT (KG)</label>
                        <input type="text" name="paket_berat" class="form-control" value="{{$row->paket_berat}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection