<!-- resources/views/home.blade.php -->
@extends('template.empty')

@section('title', 'Home')

@section('content')
<div class="container mt-5 px-5">
<div class="container col-md-4 p-5 bg-light rounded shadow">
    <h1 class="text-center">About Me</h1>
    <div style="border-bottom: 2px solid #000; margin-bottom: 20px"></div>
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-1">
            <strong>Nama</strong>
        </div>
        <div class="col-md-7">
            : Mohamad Valdi Ananda Tauhid
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-1">
            <strong>NRP</strong>
        </div>
        <div class="col-md-7">
            : 5025221238
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-1">
            <strong>Kelas</strong>
        </div>
        <div class="col-md-7">
            : PBKK (B)
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</div>
@endsection
