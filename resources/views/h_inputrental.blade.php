@extends('template.nav',['title'=> 'Menu Input Rental'])
    @section('maincontent')
    
    <div class="parentcontent mx-5">
        <h2>Form Rental</h2>
        <form action="{{route('input')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIK</strong>
                        <input type="number" name="nik_penyewa" id="nik_penyewa" class="form-control" placeholder="masukkan nik anda" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NAMA</strong>
                        <input type="text" name="nama_penyewa" id="nama_penyewa" class="form-control" placeholder="masukkan nama anda">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>EMAIL</strong>
                        <input type="email" name="email_penyewa" id="email_penyewa" class="form-control" placeholder="masukkan email anda">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NO HANDPHONE</strong>
                        <input type="number" name="hp_penyewa" id="hp_penyewa" class="form-control" placeholder="masukkan nomer handphone anda">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ALAMAT</strong>
                        <input type="text" name="alamat_penyewa" id="alamat_penyewa" class="form-control" placeholder="masukkan alamat anda">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>MERK MOBIL</strong>
                        <input type="text" name="merk_mobil" id="merk_mobil" class="form-control" readonly value="{{$data->merk_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PLAT MOBIL</strong>
                        <input type="text" name="plat_mobil" id="plat_mobil" class="form-control" readonly value="{{$data->plat_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>WARNA MOBIL</strong>
                        <input type="text" name="warna_mobil" id="warna_mobil" class="form-control" readonly value="{{$data->warna_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>HARGA MOBIL</strong>
                        <input type="number" name="harga_mobil" id="harga_mobil" class="form-control" readonly value="{{$data->harga_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TAHUN</strong>
                        <input type="number" name="tahun" id="tahun" class="form-control" readonly value="{{$data->tahun}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>KAPASITAS PENUMPANG</strong>
                        <input type="number" name="max_penumpang" id="max_penumpang" class="form-control" readonly value="{{$data->max_penumpang}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TRANSMISI</strong>
                        <input type="text" name="transmisi" id="transmisi" class="form-control" readonly value="{{$data->transmisi}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TANGGAL PINJAM</strong>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" placeholder="masukkan tanggal pinjam">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>LAMA SEWA</strong>
                        <input type="lama_sewa" name="lama_sewa" id="lama_sewa"  class="form-control" placeholder="masukkan lama sewa">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TANGGAL DIKEMBALIKAN</strong>
                        <input type="date" name="tgl_dikembalikan" id="tgl_dikembalikan" class="form-control" placeholder="masukkan rencana tanggal pengembalian mobil">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TOTAL BAYAR</strong>
                        <input type="number" name="total_bayar" id="total_bayar" class="form-control" readonly value="0">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>STATUS RENTAL</strong>
                        <input type="string" name="status_rent" id="status_rent" class="form-control"  readonly value="baru">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    @include('template.footer')
@endsection
<link rel="stylesheet" href="{{asset('js/app.js')}}">

