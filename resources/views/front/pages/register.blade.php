@extends('front.layout.layout')
@section('content')
@include('front.layout.cssmenu') 
<section class="mt-header layout-pt-lg layout-pb-lg">
      <div class="container">
        <div data-anim="slide-up" class="row justify-center is-in-view">
          <div class="col-xl-6 col-lg-7 col-md-9">
            <div class="text-center mb-60 md:mb-30">
              <h1 class="text-30">Register</h1>
              <div class="text-18 fw-500 mt-20 md:mt-15">Let's create your account!</div>
              <div class="mt-5">
                Already have an account? <a href="{{url('login')}}" class="text-accent-1">Log In!</a>
              </div>
            </div>

            <div class="contactForm border-1 rounded-12 px-60 py-60 md:px-25 md:py-30">

              <div class="form-input ">
                <input type="text" required="">
                <label class="lh-1 text-16 text-light-1">Username</label>
              </div>


              <div class="form-input mt-30">
                <input type="text" required="">
                <label class="lh-1 text-16 text-light-1">First Name</label>
              </div>


              <div class="form-input mt-30">
                <input type="text" required="">
                <label class="lh-1 text-16 text-light-1">Last Name</label>
              </div>


              <div class="form-input mt-30">
                <input type="email" required="">
                <label class="lh-1 text-16 text-light-1">Your Email</label>
              </div>


              <div class="form-input mt-30">
                <input type="email" required="">
                <label class="lh-1 text-16 text-light-1">Confirm email</label>
              </div>


              <button class="button -md -dark-1 bg-accent-1 text-white col-12 mt-30">
                Register
                <i class="icon-arrow-top-right ml-10"></i>
              </button>

              <div class="relative line mt-50 mb-30">
                <div class="line__word fw-500">OR</div>
              </div>

              <div class="row y-gap-15">
                <div class="col">
                  <button class="button -md -outline-blue-1 text-blue-1 col-12">
                    <i class="icon-facebook mr-10"></i>
                    Continue Facebook
                  </button>
                </div>

                <div class="col">
                  <button class="button -md -outline-red-1 text-red-1 col-12">
                    <i class="icon-google mr-10"></i>
                    Continue Google
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection