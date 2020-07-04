@extends('layouts.blank')

@section ('content')
    <h1> Buat Jawaban </h1>

    <form action="/jawaban/{pertanyaan_id}" method="POST">
    @csrf
    <div class="form-group">
        <label for="jawaban"> Judul :</label>
        <input type="text" name="jawaban" class="form-control" placeholder="Judul" id="jawaban">
    </div>
    <div class="form-group">
        <label for="isi">Isi :</label>
        <input type="text" name="isi" class="form-control" placeholder="Masukkan jawaban..." id="isi">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection