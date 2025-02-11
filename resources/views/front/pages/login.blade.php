@extends('front.layout.layout')
@section('content')
@include('front.layout.cssmenu') 
<section class="mt-header layout-pt-lg layout-pb-lg">
      <div class="container">
        <div data-anim="slide-up" class="row justify-center is-in-view">
          <div class="col-xl-6 col-lg-7 col-md-9">
            <div class="text-center mb-60 md:mb-30">
              <h1 class="text-30">Log In</h1>
              <div class="text-18 fw-500 mt-20 md:mt-15">We're glad to see you again!</div>
              <div class="mt-5">
                Don't have an account? <a href="register.html" class="text-accent-1">Sign Up!</a>
              </div>
            </div>

            <div class="contactForm border-1 rounded-12 px-60 py-60 md:px-25 md:py-30">

              <div class="form-input ">
                <input type="email" required="">
                <label class="lh-1 text-16 text-light-1">Email Address</label>
              </div>


              <div class="form-input mt-30">
                <input type="email" required="">
                <label class="lh-1 text-16 text-light-1">Password</label>
              </div>


              <div class="row y-ga-10 justify-between items-center pt-30">
                <div class="col-auto">

                  <div class="d-flex items-center">
                    <div class="form-checkbox ">
                      <input type="checkbox" name="name">
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon">
                          <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                          </svg>
                        </div>
                      </div>
                    </div>

                    <div class="lh-11 ml-10">Remember me</div>

                  </div>

                </div>

                <div class="col-auto">
                  <a href="#">Lost your password?</a>
                </div>
              </div>

              <button class="button -md -dark-1 bg-accent-1 text-white col-12 mt-30">
                Log In
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