@extends('layout.app')


@section('content')
    <br>
    <div class="container">
        <h3>Search Payments</h3>
        <form class="form-horizontal" method="get" action="/payments/results">
            <div class="form-group">
                <div class="col-sm-5">
                    <input required type="number" class="form-control" name="id" placeholder="Search Student number">
                </div>
            </div>
            <div class="form-group">
                <div class=" col-sm-5">
                    <input type="submit" class="btn btn-group-sm btn-outline-success btn-outline-dark" value="Search Student">
                </div>
            </div>
        </form>

    </div>
    </div>


@endsection
