@extends('main')

@section('content')
<div class="row d-lg-none d-inline-block px-0">
            <div class="col-lg-9 mx-auto p-0">
              <div class="carousel slide shadow-lg" id="carousels_promo" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php
                    $i = 1;
                    @endphp
                    @foreach($banner as $data)
                    @php
                        $active = ($i == 1) ? 'active' : '';
                    @endphp
                    <div class="carousel-item {{ $active }}">
                        <a href="#">
                            <img src="{{ $data->path }}" alt="" class="d-block w-100">
                        </a>
                    </div>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousels_promo" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousels_promo" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row d-none d-lg-block">
              <div class="col-lg-9 mx-auto">
                <div class="carousel slide shadow-lg" id="carousels_promo-d" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @php
                            $i = 1;
                    @endphp
                    @foreach($banner as $data)
                    @php
                        $active = ($i == 1) ? 'active' : '';
                    @endphp
                    <div class="carousel-item {{ $active }}">
                        <a href="#">
                            <img src="{{ $data->path }}" alt="" class="d-block w-100">
                        </a>
                    </div>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carousels_promo-d" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carousels_promo-d" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-9 mx-auto">
                <div class="nav-item mt-4 col-lg-12 dropdown d-lg-inline-block mx-auto">
                  <div class="row h-100">
                    <div class="col-sm mt-3">
                      <ul class="nav nav-pills justify-content-left" id="myTab" role="tablist">
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                          <button class="btn-sm btn-category nav-link active" id="Game_Populer-tab" data-bs-toggle="tab" data-bs-target="#Game_Populer" type="button" role="tab" aria-controls="game" aria-selected="true">
                            <text>Game</text>
                          </button>
                        </li>
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                          <button class="btn-sm btn-category nav-link " id="E-Wallet-tab" data-bs-toggle="tab" data-bs-target="#E-Wallet" type="button" role="tab" aria-controls="game" aria-selected="true">
                            <text>E-Wallet</text>
                          </button>
                        </li>
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                          <button class="btn-sm btn-category nav-link " id="PPOB-tab" data-bs-toggle="tab" data-bs-target="#PPOB" type="button" role="tab" aria-controls="game" aria-selected="true">
                            <text>PPOB</text>
                          </button>
                        </li>
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                          <button class="btn-sm btn-category nav-link " id="Joki-tab" data-bs-toggle="tab" data-bs-target="#Joki" type="button" role="tab" aria-controls="game" aria-selected="true">
                            <text>Joki</text>
                          </button>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm mt-3">
                      <form action="{{ route('homes') }}" method="POST">
                        @csrf
                        <div class="input-group me-3 search-bar" aria-haspopup="true" id="dropsearchdown">
                          <input type="text" name="q" placeholder="Cari Game Anda Disini..." id="search_input" class="form-control search_input" autocomplete="off">
                          <button type="submit" class="btn btn-primary" id="btnSearchProds">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                        <ul class="dropdown-menu dropdown-menu position-absolute shadow navbar-nav-scroll" aria-labelledby="dropsearchdown" id="dropDownSearchResults"></ul>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 mx-auto">
                <div class="row mb-4 ">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active" id="Game_Populer" role="tabpanel" aria-labelledby="Game_Populer-tab">
                      <div class="col-lg-9 mx-auto mt-4">
                        <div class="carousel slide" data-bs-ride="false" id="carouselCard-Top Up">
                          <div class="carousel-inner">
                            <div class="carousel-item  active ">
                              <div class="row row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 mt-sm-2 g-2 mb-3 justify-content-center ">
                                @foreach($kategori as $category)
                                    @if($category->tipe == "game")
                                        <div class="col pt-5 mt-3">
                                            <div class="card bg-light border h-100">
                                            <div class="row h-100">
                                                <div class="col mt-4 mb-lg-4 text-center">
                                                <img src="{{ $category->thumbnail  }}" class="card-img-top rounded-img-buy size-img-buy position-absolute top-0 start-50 translate-middle">
                                                </div>
                                                <div class="col card-body mt-2 mt-sm-2 py-md-0 d-md-none text-center">
                                                <div class="row">
                                                    <div class="col-hp">
                                                    <small class="text-sm bold">{{ $category->nama }}</small>
                                                    </div>
                                                    <div class="col-hp2">
                                                    <small class="text-sm text-muted">{{ $category->publisher }}</small>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col card-body py-md-0 mt-md-5 mt-lg-3 mb-3 d-none d-md-block text-center">
                                                <small class="text-sm bold">{{ $category->nama }}</small>
                                                <br>
                                                <small class="text-sm text-muted">{{ $category->publisher }}</small>
                                                </div>
                                            </div>
                                            <div class="col-hp mb-2 text-center">
                                                <a href="{{ url('/game/') }}/{{ $category->kode }}" class="btn btn-topup rounded-pill btn-sm stretched-link"> Top Up</a>
                                            </div>
                                            </div>
                                        </div> 
                                    @endif
                                @endforeach
                                 
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane " id="E-Wallet" role="tabpanel" aria-labelledby="E-Wallet-tab">
                      <div class="col-lg-9 mx-auto mt-4">
                        <div class="carousel slide" data-bs-ride="false" id="carouselCard-Top Up">
                          <div class="carousel-inner">
                            <div class="carousel-item  active ">
                                <div class="row row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 mt-sm-2 g-2 mb-3 justify-content-center ">
                                    @foreach($kategori as $category)
                                        @if($category->tipe == "ewallet")
                                            <div class="col pt-5 mt-3">
                                                <div class="card bg-light border h-100">
                                                <div class="row h-100">
                                                    <div class="col mt-4 mb-lg-4 text-center">
                                                    <img src="{{ $category->thumbnail  }}" class="card-img-top rounded-img-buy size-img-buy position-absolute top-0 start-50 translate-middle">
                                                    </div>
                                                    <div class="col card-body mt-2 mt-sm-2 py-md-0 d-md-none text-center">
                                                    <div class="row">
                                                        <div class="col-hp">
                                                        <small class="text-sm bold">{{ $category->nama }}</small>
                                                        </div>
                                                        <div class="col-hp2">
                                                        <small class="text-sm text-muted">{{ $category->publisher }}</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col card-body py-md-0 mt-md-5 mt-lg-3 mb-3 d-none d-md-block text-center">
                                                    <small class="text-sm bold">{{ $category->nama }}</small>
                                                    <br>
                                                    <small class="text-sm text-muted">{{ $category->publisher }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-hp mb-2 text-center">
                                                    <a href="{{ url('/game/') }}/{{ $category->kode }}" class="btn btn-topup rounded-pill btn-sm stretched-link"> Top Up</a>
                                                </div>
                                                </div>
                                            </div> 
                                        @endif
                                    @endforeach
                                     
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane " id="PPOB" role="tabpanel" aria-labelledby="PPOB-tab">
                      <div class="col-lg-9 mx-auto mt-4">
                        <div class="carousel slide" data-bs-ride="false" id="carouselCard-Top Up">
                          <div class="carousel-inner">
                            <div class="carousel-item  active ">
                                <div class="row row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 mt-sm-2 g-2 mb-3 justify-content-center ">
                                    @foreach($kategori as $category)
                                        @if($category->tipe == "app")
                                            <div class="col pt-5 mt-3">
                                                <div class="card bg-light border h-100">
                                                <div class="row h-100">
                                                    <div class="col mt-4 mb-lg-4 text-center">
                                                    <img src="{{ $category->thumbnail  }}" class="card-img-top rounded-img-buy size-img-buy position-absolute top-0 start-50 translate-middle">
                                                    </div>
                                                    <div class="col card-body mt-2 mt-sm-2 py-md-0 d-md-none text-center">
                                                    <div class="row">
                                                        <div class="col-hp">
                                                        <small class="text-sm bold">{{ $category->nama }}</small>
                                                        </div>
                                                        <div class="col-hp2">
                                                        <small class="text-sm text-muted">{{ $category->publisher }}</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col card-body py-md-0 mt-md-5 mt-lg-3 mb-3 d-none d-md-block text-center">
                                                    <small class="text-sm bold">{{ $category->nama }}</small>
                                                    <br>
                                                    <small class="text-sm text-muted">{{ $category->publisher }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-hp mb-2 text-center">
                                                    <a href="{{ url('/game/') }}/{{ $category->kode }}" class="btn btn-topup rounded-pill btn-sm stretched-link"> Top Up</a>
                                                </div>
                                                </div>
                                            </div> 
                                        @endif
                                    @endforeach
                                     
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane " id="Joki" role="tabpanel" aria-labelledby="Joki-tab">
                        <div class="col-lg-9 mx-auto mt-4">
                          <div class="carousel slide" data-bs-ride="false" id="carouselCard-Top Up">
                            <div class="carousel-inner">
                              <div class="carousel-item  active ">
                                  <div class="row row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 mt-sm-2 g-2 mb-3 justify-content-center ">
                                      @foreach($kategori as $category)
                                          @if($category->tipe == "joki")
                                              <div class="col pt-5 mt-3">
                                                  <div class="card bg-light border h-100">
                                                  <div class="row h-100">
                                                      <div class="col mt-4 mb-lg-4 text-center">
                                                      <img src="{{ $category->thumbnail  }}" class="card-img-top rounded-img-buy size-img-buy position-absolute top-0 start-50 translate-middle">
                                                      </div>
                                                      <div class="col card-body mt-2 mt-sm-2 py-md-0 d-md-none text-center">
                                                      <div class="row">
                                                          <div class="col-hp">
                                                          <small class="text-sm bold">{{ $category->nama }}</small>
                                                          </div>
                                                          <div class="col-hp2">
                                                          <small class="text-sm text-muted">{{ $category->publisher }}</small>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="col card-body py-md-0 mt-md-5 mt-lg-3 mb-3 d-none d-md-block text-center">
                                                      <small class="text-sm bold">{{ $category->nama }}</small>
                                                      <br>
                                                      <small class="text-sm text-muted">{{ $category->publisher }}</small>
                                                      </div>
                                                  </div>
                                                  <div class="col-hp mb-2 text-center">
                                                      <a href="{{ url('/game/') }}/{{ $category->kode }}" class="btn btn-topup rounded-pill btn-sm stretched-link"> Top Up</a>
                                                  </div>
                                                  </div>
                                              </div> 
                                          @endif
                                      @endforeach
                                       
                                    </div>
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

@section('js')
<script type="text/javascript">
    var cookie = document.cookie.split("; ");

    if(cookie.length < 2){
        $(document).ready(function(){
            $("#popup").modal("show");
            
        })
    }
    
    function disablePopup(){
        var checkBox = document.getElementById("dontShow");
        var date = new Date();
        date.setTime(date.getTime()+(1*24*60*60*1000));
        
        if(checkBox.checked){
            document.cookie = "popup=0; expires="+ date.toGMTString();
        }
    }
</script>
@endsection