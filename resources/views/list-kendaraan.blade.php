@extends('template')

@section('title')
Data Kendaraan
@endsection

@section('content')

<h1 style="text-align: center">Data Kendaraan</h1>
<div class="container">
<a class="btn mb-2 btn-primary" style="position: relative; " href="/tambah-kendaraan">Tambah</a>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width:50%;
      text-align: center;
    }
    </style>
  
    <table class="table table-bordered" >
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">No. Polisi</th>
      <th scope="col">Merk</th>
      <th scope="col">Tipe</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
    @if (empty($data))
        <tr>
            <td colspan="3">Datanya Kosong</td>
        </tr>
    @endif
    <?php $no = 1; ?>
        @foreach($data as $i)
        <tbody >
        <tr>
            <td class="align-middle"><?php echo $no++; ?></td>
            <td class="align-middle">{{ $i->nopol }}</td> 
            <td class="align-middle">{{ $i->merk }}</td> 
            <td class="align-middle">{{ $i->tipe }}</td>
            <td >
                <a class="btn btn-sm btn-warning text-white" href="/ubah/{{$i->id}}">Edit</a>
                <a class="btn btn-sm btn-danger" href="/hapus/{{$i->id}}">Hapus</a>
            </td>
        </tr>
        </tbody>
        @endforeach
  </table>
    </div>


@endsection

