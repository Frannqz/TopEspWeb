@extends('layout.groceries')

@section('main_content')
    @if (session()->get('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0"
            style="background-image: url({{ asset('assets/img/bg-header.jpg') }});">
            <div class="container">
                <h1 class="pt-5">
                    {{ $product->name }}
                </h1>
                <p class="lead">
                    {{ $product->description }}
                </p>
            </div>
        </div>
    </div>
    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="slider-zoom">
                        <a href="{{ asset('assets/img/') }}/{{ $product->image }}" class="cloud-zoom"
                            rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10"
                            id="cloudZoom">
                            <img alt="Detail Zoom thumbs image" src="{{ asset('assets/img/') }}/{{ $product->image }}"
                                style="width: 100%;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p>
                        <strong>Overview</strong><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                <strong>Price</strong> (/Pack)<br>
                                <span class="price">Rp 100.000</span>
                                <span class="old-price">Rp 150.000</span>
                            </p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>
                                <span class="stock available">In Stock: 99</span>
                            </p>
                        </div>
                    </div>
                    <p class="mb-1">
                        <strong>Quantity</strong>
                    </p>
                    <div class="row">
                        <div class="col-sm-5">
                            <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary"
                                data-bts-button-up-class="btn btn-primary" value="" name="vertical-spin">
                        </div>
                        <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                    </div>

                    <button class="mt-3 btn btn-primary btn-lg">
                        <i class="fa fa-shopping-basket"></i> Add to Cart
                    </button>
                    <br><br><br>
                    <h3>Enviar comentario</h3>
                    <form data-aos="fade-left" data-aos-duration="1200"
                        action="{{ route('comments.store', ['id' => $product->id]) }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Full Name" name="fullname"
                                        value="{{ old('fullname') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email" name="email"
                                        value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="Comment" name="message" value="{{ old('message') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-right">
                                <button type="submit" class="btn btn-lg btn-primary mb-5">Send</button>
                            </div>
                        </div>
                        <input type="hidden" name="category_id" value="{{ $product->category_id }}">

                    </form>
                </div>
                <div class="col-lg-12">
                    <h3>Comentarios de otros clientes</h3>
                    <ul>
                        @foreach ($comments as $comment)
                            <li>
                                <strong>{{ $comment->fullname }}</strong> dijo:
                                <p>{{ $comment->message }}</p>
                                <small>Enviado el {{ $comment->created_at->format('d/m/Y H:i') }}</small>
                                <br><br>
                            </li>
                        @endforeach
                    </ul>
                </div>


            </div>
        </div>

    </div>
    </div>



    <section id="related-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Related Products</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($products as $p)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{ asset('assets/img') }}/{{ $p->image }}" alt="Card image 2"
                                            class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{ route('details', ['id' => $p->id]) }}">{{ $p->name }}</a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">{{ $p->purchase_price }}</span>
                                            <span class="reguler">{{ $p->sale_price }}</span>
                                        </div>
                                        <a href="{{ route('details', ['id' => $p->id]) }}"
                                            class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
