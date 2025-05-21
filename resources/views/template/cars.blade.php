<!-- cars -->
<div class="row mx-4">
    @foreach($mobil as $item)
        <div class="col-sm-3">
            <div class="mb-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset($item->photo) }}" class="card-img-top" alt="ini gambar mobil">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $item->merk_mobil }}</h5>
                                    <p class="card-text text-center">Rp. {{ $item->harga_mobil }}</p>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Plat</li>
                                            <li class="list-group-item">Kapasitas</li>
                                            <li class="list-group-item">Transmisi</li>
                                            <li class="list-group-item">Tahun</li>
                                            <li class="list-group-item">Status</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{ $item->plat_mobil }}</li>
                                            <li class="list-group-item">{{ $item->max_penumpang }}</li>
                                            <li class="list-group-item">{{ $item->transmisi }}</li>
                                            <li class="list-group-item"> {{ $item->tahun }}</li>
                                            <li class="list-group-item">{{ $item->status }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if($item->status == "kosong")
                                        <a href="#" class="btn btn-danger">Stok Kosong</a>
                                    @elseif($item->status == "ada")
                                        <a href="{{route('showr',$item->id)}}" class="btn btn-primary">Pesan Sekarang</a>
                                    @endif
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
<!-- end cars -->