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
                <div class="row">
                    <div class="col-lg-6">
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

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="categoryFilter">Filtrar por Category:</label>
                            <select class="form-control" id="categoryFilter" style="padding:5px;">
                                <option value="">All</option>
                                <option value="Vegetables">Vegetables</option>
                                <option value="Frozen Foods">Frozen Foods</option>
                                <option value="Packages">Packages</option>
                                <option value="Meats">Meats</option>
                                <option value="Fishes">Fishes</option>
                                <option value="Fruits">Fruits</option>
                            </select>
                        </div>

                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped table-bordered" id="tblProductsDt">
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
