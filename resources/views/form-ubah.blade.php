@extends('template')

@section('title')
Ubah Kendaraan
@endsection

@section('content')

<h1 style="text-align: center">Ubah Data</h1>
<style>
    form {
        position: relative;
        left: 20px;
    }
</style>
<div class="container">
<form action="/ubah" method="POST" >
<div class="form-group">
        <label for="nopol">No. Polisi : </label>
        <input class="form-control" type="text" name="nopol" id="nopol" value="{{ $data[0]->nopol }}">
    </div>
    <div class="form-group">
        <label for="merk">Merk : </label>
        <input class="form-control" type="text" name="merk" id="merk" value="{{ $data[0]->merk }}">
    </div>
    <div class="form-group">
        <label for="tipe">Tipe : </label>
        <input class="form-control" type="text" name="tipe" id="tipe" value="{{ $data[0]->tipe }}">
    </div>
    <input type="hidden" value="{{ $data[0]->id }}" id="id" name="id">
    <input class="btn float-right btn-success" type="submit" value="Simpan"><br>
</form>
</div>

@endsection