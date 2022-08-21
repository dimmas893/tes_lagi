@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


               <div class="container">
                 <div class="row">


                    <div class="col-3">
                    <form action="{{ route('user.produk.cari') }}" method="get" class="site-block-top-search" >
                        @csrf
                        <span class="icon icon-search2"></span>
                        <input type="text" class="form-control border-0" name="cari" placeholder="Search Harga" required>
                        <button class="btn btn-primary">cari harga</button>
                    </form>
                    </div>

                    
                    <div class="col-3">
                    <form action="{{ route('user.produk.caristatus') }}" method="get" class="site-block-top-search">
                        @csrf
                        {{-- <p>dirilis = 1</p>
                        <p>blm drilis = 2</p> --}}
                        <span class="icon icon-search2"></span>
                        {{-- <input type="text" class="form-control border-0" name="cari" placeholder="masukan kode status" required> --}}
                        <select name="cari" class="mt-2 form-control">
                            <option value="1">rilis</option>   
                            <option value="2">Belum rilis</option>   
                        </select>   
                        <button class="btn btn-primary mt-1">cari status</button>
                    </form>
                    </div>

                    <div class="col-3">
                    <form action="{{ route('user.produk.caritanggal') }}" method="get" class="site-block-top-search" >
                        @csrf
                        <span class="icon icon-search2"></span>
                        <input type="date" class="form-control border-0" name="cari" placeholder="Search tanggal" required>
                        <button class="btn btn-primary">cari tanggal</button>
                    </form>
                    </div>


                </div>
               </div>
               <a href="{{ route('products.index') }}" class="btn btn-primary mt-5">tambah produk</a>
               <a href="{{ route('user.create') }}" class="btn btn-primary mt-5">tambah foto profil anda</a>
               
                
                <div class="container">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">nama produk</th>
                        <th scope="col">harga</th>
                        <th scope="col">status</th>
                        <th scope="col">pembuat produk</th>
                        <th scope="col">tanggal dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $p)
                            
                        <tr>
                            <td>{{ $p->name }}</td>
                            <td>Rp {{ number_format($p->price,2,',','.') }}</td>
                            <td>{{ $p->nama_status }}</td>
                            <td>{{ $p->nama_user }}</td>
                            <td>{{ $p->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
