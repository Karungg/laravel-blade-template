@extends('parent')

@section('title', 'Halaman Utama')

@section('header')
    @parent
    <p>Deskripsi Header</p>
@endsection

@section('content')
    <p>Ini adalah halaman utama</p>
@endsection
