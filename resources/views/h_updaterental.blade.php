@extends('template.nav',['title'=> 'Menu Update Rental'])

@section('maincontent')

<div class="parentcontent mx-5">
        <h2>Form Rental</h2>
        <form action="{{route('updatex',$data->id)}}" method="POST">
            @csrf
            <div class="row">
                <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIK</strong>
                        <input type="number" name="nik_penyewa" id="nik_penyewa" class="form-control" placeholder="masukkan nik anda" value="{{$data->nik_penyewa}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NAMA</strong>
                        <input type="text" name="nama_penyewa" id="nama_penyewa" class="form-control" placeholder="masukkan nama anda" value="{{$data->nama_penyewa}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>EMAIL</strong>
                        <input type="email" name="email_penyewa" id="email_penyewa" class="form-control" placeholder="masukkan email anda" value="{{$data->email_penyewa}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NO HANDPHONE</strong>
                        <input type="number" name="hp_penyewa" id="hp_penyewa" class="form-control" placeholder="masukkan nomer handphone anda" value="{{$data->hp_penyewa}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ALAMAT</strong>
                        <input type="text" name="alamat_penyewa" id="alamat_penyewa" class="form-control" placeholder="masukkan alamat anda" value="{{$data->alamat_penyewa}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>MERK MOBIL</strong>
                        <input type="text" name="merk_mobil" id="merk_mobil" class="form-control"  placeholder="masukkan merk mobil" value="{{$data->merk_mobil}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PLAT MOBIL</strong>
                        <input type="text" name="plat_mobil" id="plat_mobil" class="form-control" placeholder="masukkan plat mobil" value="{{$data->plat_mobil}}" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>WARNA MOBIL</strong>
                        <input type="text" name="warna_mobil" id="warna_mobil" class="form-control"  placeholder="masukkan warna mobil" value="{{$data->warna_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>HARGA MOBIL</strong>
                        <input type="number" name="harga_mobil" id="harga_mobil" class="form-control"  placeholder="masukkan harga mobil" value="{{$data->harga_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TAHUN</strong>
                        <input type="number" name="tahun" id="tahun" class="form-control"  placeholder="masukkan tahun mobil" value="{{$data->tahun}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>KAPASITAS PENUMPANG</strong>
                        <input type="number" name="max_penumpang" id="max_penumpang" class="form-control"  placeholder="masukkan kapasitas mobil" value="{{$data->max_penumpang}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TRANSMISI</strong>
                        <input type="text" name="transmisi" id="transmisi" class="form-control" value="{{$data->transmisi}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TANGGAL PINJAM</strong>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" placeholder="masukkan tanggal pinjam" value="{{$data->tgl_pinjam}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>LAMA SEWA</strong>
                        <input type="lama_sewa" name="lama_sewa" id="lama_sewa"  class="form-control" placeholder="masukkan lama sewa" value="{{$data->lama_sewa}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TANGGAL DIKEMBALIKAN</strong>
                        <input type="date" name="tgl_dikembalikan" id="tgl_dikembalikan" class="form-control" placeholder="masukkan rencana tanggal pengembalian mobil" value="{{$data->tgl_dikembalikan}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TOTAL BAYAR</strong>
                        <input type="number" name="total_bayar" id="total_bayar" class="form-control" value="{{$data->total_bayar}}>
                    </div>
                </div> -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>STATUS RENTAL</strong>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="status_rent" id="status_rent1" value='baru'  checked>
                            <label class="form-check-label" for="status_rent1">
                                Baru
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="status_rent" id="status_rent2" value='selesai'>
                            <label class="form-check-label" for="status_rent2">
                                Selesai
                            </label>
                        </div>     
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection