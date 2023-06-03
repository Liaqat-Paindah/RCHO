@extends('master')
@section('content')
<main id="main">
<section id="contact" class="contact">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <h3 class="pt-4">Afghanistan Inquiries </h3>
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>House#43, Pule Sorkh, Karte 3, PD#6, Kabul Afghanistan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:info@mgtwell.com">info@mgtwell.com</a></p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><a href="tel:+93781266164">+93(0) 781-266-164 </a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Email</button></div>
            </form>

          </div>

        </div>



        <div class="row mt-1 d-flex justify-content-end aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <h3 class="pt-4">United States Inquiries </h3>
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>8200 Greensboro Drive, Suite 900, Tysons VA 22102, United States</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:info@mgtwell.com">info@mgtwell.com</a></p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><a href="tel:+93781266164">+1 (571) 397-8967 </a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.9966030596242!2d69.13830507649715!3d34.50297039379532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d168d9bac85c5b%3A0xe45f238e3b558ca6!2sMgtWell%20Consulting%20Services!5e0!3m2!1sen!2s!4v1683522376157!5m2!1sen!2s" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

      </div>
    </section>
  <!-- ======= Services Section ======= 
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title pt-4">
        <h2>Contact</h2>
        <p class="text-center">
          Please let us know if you have a question, want to leave a comment, or would like further information about
          MgtWell Consulting Services.

        </p>
      </div>

      <div class="row contact-info">
        <h3>Afghanistan Inquiries </h3>
        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>House#43, Pule Sorkh, Karte 3, PD#6, Kabul Afghanistan </address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+93781266164">+93(0) 781-266-164 </a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@mgtwell.com">info@mgtwell.com</a></p>
          </div>
        </div>

      </div>
      <div class="row contact-info">
        <h3>United States Inquiries        </h3>
        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>8200 Greensboro Drive, Suite 900, Tysons VA 22102, United States.
            </address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+1 (571) 397-8967">+1 (571) 397-8967 </a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@mgtwell.com">info@mgtwell.com</a></p>
          </div>
        </div>

      </div>
      <div class="form">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                data-rule="email" data-msg="Please enter a valid email">
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
          </div>
            <br>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
      <div class="p-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.996602764023!2d69.13869131559052!3d34.502970401289346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d168d9bac85c5b%3A0xe45f238e3b558ca6!2sMgtWell%20Consulting%20Services!5e0!3m2!1sen!2s!4v1680944450145!5m2!1sen!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
   end of testimonials-->
</main><!-- End #main -->
@endsection