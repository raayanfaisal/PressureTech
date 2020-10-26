@extends('layouts.app')

@section('content')
<section>
<div class="container-fluid">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/img-01.jpg" alt="First slide" width="100%" height="auto">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/img-02.jpg" alt="Second slide" width="100%" height="auto">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/img-03.jpg" alt="Third slide" width="100%" height="auto">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</section>
<section>
    <div class="container">
    <div class="heading-01">
        <h2 class="text-center m-5"><b>WHO ARE WE <span class="question-01">?</b><span></h2>    
    </div>
        <p class="main-text">Pressure Tech Maldives Pvt Ltd was found in 2016 in a tiny office in Capital City Male’ and has grown to become a leading partner for Complete Scuba Diving Solutions and aftersales service for both High pressure & Low-Pressure machines equipment
with a customer base of 80 Luxury resorts, 50 Liveaboards (Safari boats) over 50 Local Guesthouse dive operations and a vast majority of fishing vessels in the Maldives
Pressure Tech Maldives is also the Exclusive distributor for Coltri compressors in the Maldives.
</p>
    </div>
</section>
<section class="products">
    <div class="heading-02 text-center">
        <h2><b>PRODUCTS</b></h2>
    </div>

    <div class="container">
    <div class="card-group">
    <div class="card m-5" style="width: 18rem;">
        <img class="card-img-top" src="/images/01.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Products 1</h5>
            <p class="card-text">a Quick summury of the product on showcase.</p>
            <a href="#" class="btn btn-primary">View more</a>
        </div>
        </div>

        <div class="card m-5" style="width: 18rem;">
        <img class="card-img-top" src="/images/02.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Products 2</h5>
            <p class="card-text">a Quick summury of the product on showcase.</p>
            <a href="#" class="btn btn-primary">View more</a>
        </div>
        </div>

        <div class="card m-5" style="width: 18rem;">
        <img class="card-img-top" src="/images/03.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Products 3</h5>
            <p class="card-text">a Quick summury of the product on showcase.</p>
            <a href="#" class="btn btn-primary">View more</a>
        </div>
        </div>
    </div>
    </div>
</section>
<section id="ctn" class="mb-5">
<div class="container">
    <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                    </div>

                </div>
            </div>
            <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">

            <li><i class="fa fa-phone mt-4 fa-2x"></i>
                <p class="ctn">:(+960) 3325365</p>
            </li>

            <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                <p class="mail">info@pressuretech.mv</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->
</div>
</section>
<section>
               <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">
        <div class="container">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase"><b>MANDHOO DIVING</b></h5>


            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase"><b>USEFULL LINKS</b></h5>

            <ul class="list-unstyled">
                <li>
                <a href="#!">Back to top</a>
                </li>
                <li>
                <a href="#!">Products</a>
                </li>
                <li>
                <a href="#!">Contacts</a>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase"><b>SOCIAL LINKS</b></h5>

            <ul class="list-unstyled">
                <li>
                <a href="#!">FACEBOOK</a>
                </li>
                <li>
                <a href="#!">TWITTER</a>
                </li>
                <li>
                <a href="#!">INSTAGRAM</a>
                </li>
                <li>
                <a href="#!">LINKDNIN</a>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3"><b>© 2020 Copyright:</b>
        <a href="https://mdbootstrap.com/"> MANDHOO D</a>
        </div>
        <!-- Copyright -->
        </div>
        </footer>
        <!-- Footer -->
    </div>
</section>
@endsection
