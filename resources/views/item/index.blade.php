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
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Belajar SQL</td>
        <td>Bagaimana cara menghubungkan SQL dengan Laravel?</td>
        <td>5 Mei 2020</td>
        <td>24 Mei 2020</td>
        <td> <a href="/jawaban/{pertanyaan_id}" class = "btn btn-primary">Jawaban</a> </td>
        <td> <a href="/pertanyaan/{id}" class = "btn btn-primary">Show</a> </td>

      </tr>
      <tr>
        <td>2</td>
        <td>Belajar Laravel</td>
        <td>Apa itu konsep MVC? dan bagaimana cara kerja konsep tersebut?</td>
        <td>6 Juni 2020</td>
        <td>13 Juni 2020</td>
        <td> <a href="/jawaban/{pertanyaan_id}" class = "btn btn-primary">Jawaban</a> </td>
        <td> <a href="/pertanyaan/{id}" class = "btn btn-primary">Show</a> </td>

    </tr>
    <tr>
        <td>3</td>
        <td>Belajar Laravel</td>
        <td>Apa itu migration? Perlukah dilakukan hal tersebut?</td>
        <td>13 Juli 2020</td>
        <td>24 Juli 2020</td>
        <td> <a href="/jawaban/{pertanyaan_id}" class = "btn btn-primary">Jawaban</a> </td>
        <td> <a href="/pertanyaan/{id}" class = "btn btn-primary">Show</a> </td>

    </tr>

        @foreach($pertanyaan as $key => $insert_pertanyaan)
        <tr>
            <td> {{ $key + 1 }} </td>
            <td> {{ $insert_pertanyaan->judul}} </td>
            <td> {{ $insert_pertanyaan->isi}} </td>
            <td></td>
            <td></td>
            <td> <a href="/jawaban/create" class = "btn btn-primary">Jawaban Baru</a> </td>
            <td> <a href="/pertanyaan/{{$insert_pertanyaan->id}}" class = "btn btn-primary">Show</a> </td>

        </tr>
        @endforeach

    </tbody>
  </table>

  <a href="/pertanyaan/create" class = "btn btn-primary">
  Buat Pertanyaan Baru
  </a>

@endsection