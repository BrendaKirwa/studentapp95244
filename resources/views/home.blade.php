@extends ('layout.app')

@section('content')


    <div class="container">

        <a href="/add"><button type="button" class="btn-primary btn-lg badge-dark  ">Add a student</button> </a>
        <br><br>
        <a href="/payfee">
            <button type="button" class=" btn-primary btn-lg badge-dark">Pay fees</button>
        </a>
        <br><br>
        <a href="/payments">
            <button type="button" class="btn-primary btn-lg badge-dark">Show Student Payments</button>
        </a>

    </div>
    <br><br>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h3>Fees Paid by all Students</h3>
            </div>
            <table class="table">
                <thead class="badge-light">
                <tr>
                    <th scope="col">Student Number</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Balance</th>
                    <th scope="col">address</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        {{--<th scope="row">1</th>--}}
                        <td>{{$student->id}}</td>
                        <td>{{$student->fullName}}</td>
                        <td>{{$student->balance}}</td>
                        <td>{{$student->address}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection
