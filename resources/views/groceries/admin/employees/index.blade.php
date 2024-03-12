@extends('layout.groceries')

@section('main_content')
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0"
            style="background-image: url('../assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Admin Employees
                </h1>
                <p class="lead">
                    Employees Administration.
                </p>
            </div>
        </div>
    </div>

    <section class="pb-0">
        <div class="contact1 mb-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-13">
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped table-bordered" id="tableEmployees">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>EMAIL</th>
                                        <th>SALARY</th>
                                        <th>GENDER</th>
                                        <th>DEPARTMENT</th>
                                        <th>HIRE DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $emp)
                                        <tr>
                                            <td>{{ $emp->emp_no }}</td>
                                            <td>{{ $emp->first_name }}</td>
                                            <td>{{ $emp->last_name }}</td>
                                            <td>{{ $emp->email }}</td>
                                            <td>{{ $emp->salary }}</td>
                                            <td>{{ $emp->gender }}</td>
                                            <td>{{ $emp->department }}</td>
                                            <td>{{ $emp->hire_date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
