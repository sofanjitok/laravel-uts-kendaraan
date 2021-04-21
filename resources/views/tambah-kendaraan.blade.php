@extends('template')

@section('title')
Tambah Kendaraan
@endsection

@section('content')

<h1 style="text-align: center">Tambah Data</h1>
<style>
    form {
        position: relative;
        left: 20px;
    }
</style>
<div class="container">
<form action="/simpan-kendaraan" method="POST" >
    <div class="form-group">
        <label for="nopol">No. Polisi : </label>
        <input class="form-control" type="text" name="nopol" id="nopol" required>
    </div>
    <div class="form-group">
        <label for="merk">Merk : </label>
        <input class="form-control" type="text" name="merk" id="merk" required>
    </div>
    <div class="form-group">
        <label for="tipe">Tipe : </label>
        <input class="form-control" type="text" name="tipe" id="tipe" required>
    </div>
    <input class="btn btn-success float-right" type="submit" value="Simpan"><br>

    
</form>
</div>


@endsection