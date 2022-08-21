  

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
                    Pencarian Produk berdasarkan name
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="row">
                    
            
              <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                    <div class="col-md-6">
                    <div class="form-group">
                      <label>Foto</label>
                      <input type="file" class="form-control" name="image" placeholder="image" required />
                    </div>
                  </div>
                  <button class="btn btn-primary">save</button>
              </form>
        </div>
      </div>

</div>
@endsection