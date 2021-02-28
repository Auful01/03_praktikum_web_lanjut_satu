@extends('utama')

@section('title', 'News')

@section('content')
    <a href="https://www.educastudio.com/{{ $news }}"> Berita Utama</a><br>
    <a href="https://www.educastudio.com/{{ $news }}/{{ $topic }}"> Berita Covid</a>
@endsection
