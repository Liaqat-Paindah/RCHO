@extends('master')
@section('content')
<main id="main">

<br><br><br> <br><br> <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <h6>Total Review:{{$totalReviews}}</h6>
                    <h6>AverageReviewsPerOrder Review:{{$averageReviewsPerOrder}}</h6>

            </div>
        </div>
    </div>
</main><!-- End #main -->
@endsection