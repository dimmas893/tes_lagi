@extends('layouts.app')
@section('content')
  <div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/"></a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Pencarian Produk berdasarkan status
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

        <div class="site-section">
            <div class="container">
            <div class="row">
            <div class="col-md-12 text-center">
                <h6 class="display-5" style="text-transform:uppercase">Hasil Pencarian Untuk : {{ $cari }} ({{ $total  }} Hasil)</h6>
            </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-9 order-2">

                <div class="container">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">nama produk</th>
                        <th scope="col">harga</th>
                        <th scope="col">status</th>
                        <th scope="col">pembuat produk (id)</th>
                        <th scope="col">tanggal pembuatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $p)
                            
                        <tr>
                            <td>{{ $p->name }}</td>
                            <td>Rp {{ number_format($p->price,2,',','.') }}</td>
                            <td>{{ $p->status_id }}</td>
                            <td>{{ $p->user_id }}</td>
                            <td>{{ $p->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-12 text-right">
                    <div class="site-block-27">
                    {{ $produks->links() }}
                    </div>
                    </div>
                </div>
                </div>

 
                </div>
            </div>
            
            </div>
        </div>

</div>
@endsection