
    @extends('layouts.master')

    @section('content')
    <div class="container mt-5">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nama_Driver" class="form-label">Nama Driver</label>
                <input type="text" class="form-control" id="nama_Driver" name="nama_Driver" placeholder="Masukan Nama Driver" required>
            </div>

            <div class="mb-3">
                <label for="kota_Driver" class="form-label">Kota Driver</label>
                <input type="text" class="form-control" id="kota_Driver" name="kota_Driver" placeholder="Masukan Kota Driver" required>
            </div>

            <div class="mb-3">
                <label for="pendapatan_Driver" class="form-label">Pendapatan Driver</label>
                <input type="number" class="form-control" id="pendapatan_Driver" name="pendapatan_Driver" placeholder="Masukan Pendapatan Driver" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_Order" class="form-label">Jumlah Order</label>
                <input type="number" class="form-control" id="jumlah_Order" name="jumlah_Order" placeholder="Masukan Jumlah Order" required>
            </div>

            <button name="proses" class="btn btn-primary">Submit</button>
        </form>
    </div>

    @endsection

