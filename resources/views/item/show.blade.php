@extends('layouts.blank')

@section('content')

<h1> Tabel Pertanyaan </h1>
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Diperbaharui</th>
        <th>Jawaban</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>{{ $insert_pertanyaan->judul}}</td>
        <td>{{ $insert_pertanyaan->isi}}</td>
        
      </tr>
    </tbody>
  </table>

@endsection