@extends('template.nav',['title'=> 'Menu Administrasi Activity'])
@section('maincontent')
<div class="parentcontent mx-5">
    <h2>Data Mobil</h2>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">ID</th>  
            <th class="text-center">NIK</th>
            <th class="text-center">NAMA</th>
            <th class="text-center">NO HP</th>
            <th class="text-center">MERK MOBIL</th>
            <th class="text-center">PLAT MOBIL</th>
            <th class="text-center">STATUS</th>
            <th class="text-center">AKSI</th>
        </thead>
        <tbody>
            @foreach($rental as $item)
            <tr>
                <td class="text-center">{{ $item->id }}</td>
                <td class="text-center">{{ $item->nik_penyewa }}</td>
                <td class="text-center">{{ $item->nama_penyewa }}</td>
                <td class="text-center">{{ $item->hp_penyewa }}</td>
                <td class="text-center">{{ $item->merk_mobil }}</td>
                <td class="text-center">{{ $item->plat_mobil }}</td>
                <td class="text-center">{{ $item->status_rent }}</td>
                <td class="text-center"><a href="{{route('detail',$item->id)}}">Detail</a> | <a href="{{route('hapusx',$item->id)}}">Hapus</a> | <a href="{{route('showx',$item->id)}}">Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
    @include('template.footer')
@endsection