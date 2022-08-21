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
                    Pencarian Produk berdasarkan harga
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
                <h3 class="display-5" style="text-transform:uppercase">Hasil Pencarian Untuk : RP {{ $cari }} ({{ $total  }} Hasil)</h3>
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

            

                <!-- <div class="border p-4 rounded mb-4">
                    <div class="mb-4">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                    <div id="slider-range" class="border-primary"></div>
                    <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
                    </div>

                    <div class="mb-4">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                    <label for="s_sm" class="d-flex">
                        <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
                    </label>
                    <label for="s_md" class="d-flex">
                        <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
                    </label>
                    <label for="s_lg" class="d-flex">
                        <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
                    </label>
                    </div>

                    <div class="mb-4">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                    <a href="#" class="d-flex color-item align-items-center" >
                        <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                    </a>
                    <a href="#" class="d-flex color-item align-items-center" >
                        <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                    </a>
                    <a href="#" class="d-flex color-item align-items-center" >
                        <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                    </a>
                    <a href="#" class="d-flex color-item align-items-center" >
                        <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                    </a>
                    </div>

                </div> -->
                </div>
            </div>
            
            </div>
        </div>

</div>
@endsection