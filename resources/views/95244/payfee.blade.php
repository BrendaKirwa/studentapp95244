@extends ('layout.app')



@section('content')
    <br>
    <div class="container">



        <div class="container">
            <h3>Enter amount to be paid</h3>

            <form action="/paid/finished" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-sm-5">
                        <input required type="number" class="form-control" name="amount" placeholder="Amount to be paid">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <input required type="number" class="form-control" name="std_id" placeholder="Student No">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-5">
                        <input type="submit" class="form-control btn btn-group-sm btn-outline-dark" value="Submit Fees">
                    </div>
                </div>

            </form>


        </div>

    </div>
    </div>
@endsection
