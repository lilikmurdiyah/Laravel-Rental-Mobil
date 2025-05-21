@extends('template.nav',['title'=> 'Menu Detail Rental'])

@section('maincontent')
<div class="parentcontent mx-5">
    <h2>Detail Rental</h2>
    <table class="table table-bordered mx-3">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $data->id }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>{{ $data->nik_penyewa }}</td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>{{ $data->nama_penyewa }}</td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td>{{ $data->email_penyewa }}</td>
            </tr>
            <tr>
                <td>NO HANDPHONE</td>
                <td>{{ $data->hp_penyewa }}</td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>{{ $data->alamat_penyewa }}</td>
            </tr>
            <tr>
                <td>MERK MOBIL</td>
                <td>{{ $data->merk_mobil }}</td>
            </tr>
            <tr>
                <td>PLAT MOBIL</td>
                <td>{{ $data->plat_mobil }}</td>
            </tr>
            <tr>
                <td>WARNA MOBIL</td>
                <td>{{ $data->warna_mobil }}</td>
            </tr>
            <tr>
                <td>HARGA MOBIL</td>
                <td>{{ $data->harga_mobil }}</td>
            </tr>
            <tr>
                <td>TAHUN KELUARAN MOBIL</td>
                <td>{{ $data->tahun }}</td>
            </tr>
            <tr>
                <td>KAPASITAS PENUMPANG</td>
                <td>{{ $data->max_penumpang }}</td>
            </tr>
            <tr>
                <td>TRANSMISI</td>
                <td>{{ $data->transmisi }}</td>
            </tr>
            <tr>
                <td>TANGGAL PINJAM</td>
                <td>{{ $data->tgl_pinjam }}</td>
            </tr>
            <tr>
                <td>LAMA SEWA</td>
                <td>{{ $data->lama_sewa }}</td>
            </tr>
            <tr>
                <td>TANGGAL DIKEMBALIKAN</td>
                <td>{{ $data->tgl_dikembalikan }}</td>
            </tr>
            <tr>
                <td>TOTAL BAYAR</td>
                <td>{{ $data->total_bayar }}</td>
            </tr>
            <tr>
                <td>STATUS RENTAL</td>
                <td>{{ $data->status_rent }}</td>
            </tr>
        </tbody>
    </table>
</div>
    
    @include('template.footer')
@endsection