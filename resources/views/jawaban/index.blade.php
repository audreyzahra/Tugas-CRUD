@extends('layouts.blank')

@section('content')

<h1> Tabel Jawaban </h1>
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Jawaban</th>
        <th>Isi</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Diperbaharui</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Belajar SQL</td>
        <td>Dapat digunakan dengan menggunakan migration</td>
        <td>5 Mei 2020</td>
        <td>24 Mei 2020</td>
      </tr>  
      
    <tr>
        <td>2</td>
        <td>Belajar Laravel</td>
        <td>MVC adalah Model, View, dan Controller</td>
        <td>6 Juni 2020</td>
        <td>13 Juni 2020</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Belajar Laravel</td>
        <td>Diperlukan untuk memudahkan</td>
        <td>13 Juli 2020</td>
        <td>24 Juli 2020</td>     
    </tr>
    </tbody>
  </table>
    
@endsection