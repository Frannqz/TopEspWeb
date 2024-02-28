@extends('layout.groceries')

@section('main_content')
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0"
            style="background-image: url('../assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Admin Products
                </h1>
                <p class="lead">
                    Products Administration.
                </p>
            </div>
        </div>
    </div>

    <section class="pb-0">
        <div class="contact1 mb-5">
            <div class="container text-center">
                <div class="col-lg-12">
                    <button class="btn btn-primary" id="loadProductsBtn">Load Products</button>
                    <div class="table-responsive">
                        <br>
                        <table class="table table-striped table-bordered" id="tblProducts">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>CATEGORY</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            {{-- <tbody id="productsTableBody">
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script>
        $(document).ready(function() {
            $('#loadProductsBtn').click(function() {
                $.get('/api/products', function(data) {
                    var productsTableBody = $('#productsTableBody');
                    productsTableBody.empty();
                    data.forEach(function(product) {
                        var row = $('<tr>');
                        row.append($('<td>').text(product.id));
                        row.append($('<td>').text(product.name));
                        row.append($('<td>').text(product.sale_price));
                        row.append($('<td>').text(product.quantity));
                        productsTableBody.append(row);
                    });
                });
            });
        });
    </script> --}}
@endsection
