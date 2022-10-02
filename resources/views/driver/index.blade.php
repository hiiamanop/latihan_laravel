{{-- mengambil file master digabungkan ke sini --}}
@extends('layouts.master')

{{-- memberikan identitas pada content web --}}
@section('content')
    <div class="container">
        <h1>HALO SELAMAT DATANG DI DRIVER</h1>\

        <table class="table table-bordered mb-3">
            <tr>
                <th>nomor</th>
                <th>nama</th>
                <th>kota</th>
                <th>pendapatan</th>
                <th>jumlah order</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>anton</td>
                <td>bandung</td>
                <td type='number'>50000000</td>
                <td>40</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>budi</td>
                <td>bandung</td>
                <td type='number'>50000000</td>
                <td>40</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>doni</td>
                <td>bandung</td>
                <td type='number'>50000000</td>
                <td>40</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>ayu</td>
                <td>bandung</td>
                <td type='number'>50000000</td>
                <td>40</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>markonah</td>
                <td>bandung</td>
                <td type='number'>50000000</td>
                <td>40</td>
            </tr>
        </table>
        <br>
        <a href="{{ url('add-driver') }}" class="btn btn-primary">Add</a>
    </div>
@endsection
