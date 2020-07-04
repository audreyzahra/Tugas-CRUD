@extends('layouts.blank')

@section ('content')
    <h1> Buat Pertanyaan </h1>

    <form action="/pertanyaan" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul"> Judul :</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul" id="judul">
    </div>
    <div class="form-group">
        <label for="isi">Pertanyaan :</label>
        <input type="text" name="isi" class="form-control" placeholder="Pertanyaan" id="isi">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection