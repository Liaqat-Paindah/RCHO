@extends('master')
@section('content')
<main id="main">

<br><br><br> <br><br> <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>     ID    </th>
                        <th>     Name    </th>
                        <th>     Email    </th>
                        <th>     Role    </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                    <a href="{{ url('orders')}}" class="btn btn-success btn-sm mb-2">Orders</a>
                </table>

            </div>
        </div>
    </div>
</main><!-- End #main -->
@endsection