@extends('template.nav',['title'=> 'Menu Update Cars'])

@section('maincontent')

    <div class="parentcontent mx-5">
        <h2>Form Update Mobil</h2>
        <form action="{{route('update',$data->id)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Merk Mobil</strong>
                        <input type="text" name="merk_mobil" id="merk_mobil" class="form-control" placeholder="masukkan merk mobil" value="{{$data->merk_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Plat Mobil</strong>
                        <input type="text" name="plat_mobil" id="plat_mobil" class="form-control" placeholder="masukkan plat mobil" value="{{$data->plat_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Warna Mobil</strong>
                        <input type="text" name="warna_mobil" id="warna_mobil" class="form-control" placeholder="masukkan warna mobil" value="{{$data->warna_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga Mobil</strong>
                        <input type="text" name="harga_mobil" id="harga_mobil" class="form-control" placeholder="masukkan harga mobil perhari" value="{{$data->harga_mobil}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tahun Keluaran Mobil</strong>
                        <input type="text" name="tahun" id="tahun" class="form-control" placeholder="masukkan tahun keluaran mobil" value="{{$data->tahun}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah Penumpang</strong>
                        <input type="text" name="max_penumpang" id="max_penumpang" class="form-control" placeholder="masukkan jumlah penumpang maximum" value="{{$data->max_penumpang}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Transmisi Mobil</strong>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="transmisi" id="transmisi1" value='manual'  checked>
                            <label class="form-check-label" for="transmisi1">
                                Manual
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="transmisi" id="transmisi2" value='matic'>
                            <label class="form-check-label" for="transmisi2">
                                Matic
                            </label>
                        </div>     
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status</strong>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="status" id="status1" value='ada'  checked>
                            <label class="form-check-label" for="status1">
                                Ada
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="status" id="status2" value='kosong'>
                            <label class="form-check-label" for="status2">
                                Tidak Ada
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