@extends('template.nav',['title'=> 'Menu Administrasi Cars'])

@section('maincontent')

    <div class="parentcontent mx-5">
    <h2>Form  Mobil</h2>
    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Merk Mobil</strong>
                    <input type="text" name="merk_mobil" id="merk_mobil" class="form-control" placeholder="masukkan merk mobil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Plat Mobil</strong>
                    <input type="text" name="plat_mobil" id="plat_mobil" class="form-control" placeholder="masukkan plat mobil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Warna Mobil</strong>
                    <input type="text" name="warna_mobil" id="warna_mobil" class="form-control" placeholder="masukkan warna mobil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Mobil</strong>
                    <input type="text" name="harga_mobil" id="harga_mobil" class="form-control" placeholder="masukkan harga sewa mobil per hari">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Keluaran Mobil</strong>
                    <input type="text" name="tahun" id="tahun" class="form-control" placeholder="masukkan tahun keluaran mobil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Penumpang</strong>
                    <input type="text" name="max_penumpang" id="max_penumpang" class="form-control" placeholder="masukkan jumlah penumpang maximum">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Transmisi</strong>
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
                <div class="form-group">
                    <strong>Foto Mobil</strong>
                    <input class="form-control" name="photo" type="file" id="photo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <br>
    <h2>Data Mobil</h2>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">ID</th>  
            <th class="text-center">MERK</th>
            <th class="text-center">PLAT</th>
            <th class="text-center">WARNA</th>
            <th class="text-center">HARGA</th>
            <th class="text-center">TAHUN</th>
            <th class="text-center">ISI</th>
            <th class="text-center">TRANSMISI</th>
            <th class="text-center">STATUS</th>
            <th class="text-center">GAMBAR</th>
            <th class="text-center">AKSI</th>
        </thead>
        <tbody>
            @foreach($mobil as $item)
            <tr>
                <td class="text-center">{{ $item->id }}</td>
                <td class="text-center">{{ $item->merk_mobil }}</td>
                <td class="text-center">{{ $item->plat_mobil }}</td>
                <td class="text-center">{{ $item->warna_mobil }}</td>
                <td class="text-center">{{ $item->harga_mobil }}</td>
                <td class="text-center">{{ $item->tahun }}</td>
                <td class="text-center">{{ $item->max_penumpang }}</td>
                <td class="text-center">{{ $item->transmisi }}</td>
                <td class="text-center">{{ $item->status }}</td>
                <td class="text-center">
                    <img src="{{ asset($item->photo) }}" width= '100' height='60' class="img img-responsive" />
                </td>
                <td class="text-center"><a href="{{route('hapus',$item->id)}}">Hapus</a> | <a href="{{route('show',$item->id)}}">Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @include('template.footer')
@endsection