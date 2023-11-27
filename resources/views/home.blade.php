@extends('main')

@section('title', 'Dashboard')
    
@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Selamat Datang {{ Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">10468</span> 
                </h4>
                <p class="text-light">List Menu</p>
                <a href="#" class="text-light d-block mb-3">view detail</a>
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">10468</span>
                </h4>
                <p class="text-light">Stok Bahan</p>
                <a href="#" class="text-light d-block mb-3">view detail</a>
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">10468</span>
                </h4>
                <p class="text-light">Rekapan Penjualan</p>
                <a href="#" class="text-light d-block mb-3">view detail</a> 
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">10468</span>
                </h4>
                <p class="text-light">List Pegawai</p>
                <a href="#" class="text-light d-block mb-3">view detail</a>
            </div>
        </div>
    </div>
</div>
@endsection