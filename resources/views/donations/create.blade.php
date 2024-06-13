<!-- resources/views/donations/create.blade.php -->
@extends('master')
@section('content')
<br><br><br>
<br><br><br><br>
<div class="container section-headline">
    <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center"> ARDHO Donation<span class="highlight"> Policy </span></h2>
            <p class="text-justify">
                Thank you for considering a donation to the Afghanistan Research, Development, and Health Organization (ARDHO). Your support plays a crucial role in helping us advance our mission of improving healthcare and fostering development initiatives in Afghanistan.
            </p>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 shadow p-4 m-4">
                    <h6 class="donate-tag">Donation Tags:</h6>
                    <form action="{{ route('donations.store') }}" method="post" class=" p-4 aos-init aos-animate"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
    
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>
    
                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>
    
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="amount" placeholder="Amount" required="">
                        </div>
                    </div>
                    <div class="center mt-3">
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
                        data-key="{{ config('services.stripe.key') }}" data-amount="" data-name="ARDHO Donation"
                        data-description="Afghanistan"
                        data-image="{{ url('assets/img/favicon.png')}}" data-locale="auto" data-currency="usd">
                        </script>
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