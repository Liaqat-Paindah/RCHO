<!-- resources/views/donations/create.blade.php -->
@extends('master')
@section('content')
<br><br><br>
<br><br>
<div class="container section-headline">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 shadow p-4 m-2">
                    <h6 class="donate-tag">Request Profile :</h6>
                    <form action="{{ url('/request') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-4">
    
                        <div class="col-md-12">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>
    
                        <div class="col-md-12 ">
                            <label for="">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>
    
                        <div class="col-md-12">
                            <label for="">Reason:</label>

                            <textarea name="reason" id="" class="form-control" placeholder="Please writ the here."></textarea>
                        </div>

                        <div class="col-md-12">
                            <button class="btn btn-success btn-sm btn-block">Request</button>
                        </div>

                    </div>

            </div>
            </form>

                </div>
                <div class="col-sm-3"></div>
            </div>

    </div>
</div>
</div>

@endsection