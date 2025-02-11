@extends('front.layout.layout')

@section('content')
@include('front.layout.cssmenu') 

<section data-anim="fade" class="pageHeader -type-1 is-in-view">
      <div class="pageHeader__bg">
        <img src="{{asset('front_assets/img/pageHeader/1.jpg')}}" alt="image">
        <img src="{{asset('front_assets/img/hero/1/shape.svg')}}" alt="image">
      </div>

      <div class="container">
        <div class="row justify-center">
          <div class="col-12">
            <div class="pageHeader__content">
              <h1 class="pageHeader__title">
                Phuket
              </h1>

              <p class="pageHeader__text">
                Explore deals, travel guides and things to do in Phuket
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="layout-pt-xl">
      <div class="container">
        <div class="row justify-between items-end y-gap-10">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Special Offers</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div class="specialCardGrid row y-gap-30 md:y-gap-20 pt-40 sm:pt-20">

          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="specialCard">
              <div class="specialCard__image">
                <img src="{{asset('front_assets/img/cta/10/1.jpg')}}" alt="image">
              </div>

              <div class="specialCard__content">
                <div class="specialCard__subtitle">Enjoy Upto</div>
                <h3 class="specialCard__title">60 % OFF</h3>
                <div class="specialCard__text">on Your Booking</div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="specialCard">
              <div class="specialCard__image">
                <img src="{{asset('front_assets/img/cta/10/2.jpg')}}" alt="image">
              </div>

              <div class="specialCard__content">
                <div class="specialCard__subtitle">80% Discount</div>
                <h3 class="specialCard__title">Are You Ready<br> To Turkey Tour</h3>
                <div class="specialCard__text"></div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="specialCard">
              <div class="specialCard__image">
                <img src="{{asset('front_assets/img/cta/10/3.jpg')}}" alt="image">
              </div>

              <div class="specialCard__content">
                <div class="specialCard__subtitle"></div>
                <h3 class="specialCard__title">Discover the wow<br> of europe</h3>
                <div class="specialCard__text"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="layout-pt-xl">
      <div class="container">
        <div class="row y-gap-10 justify-between items-end y-gap-10">
          <div class="col-auto">
            <h2 class="text-30">Popular Tour in Phuket</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div class="relative pt-40 sm:pt-20">
          <div class="overflow-hidden js-section-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-watch-progress swiper-backface-hidden" data-gap="30" data-slider-cols="xl-4 lg-3 md-2 sm-1 base-1" data-nav-prev="js-slider1-prev" data-nav-next="js-slider1-next">
            <div class="swiper-wrapper" id="swiper-wrapper-4994e9600e9bd7de" aria-live="polite" style="height: 380px;">

              <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="1 / 8" style="width: 255px; margin-right: 30px;">

                <a href="#" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{asset('front_assets/img/tourCards/1/1.png')}}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Centipede Tour - Guided Arizona Desert Tour by ATV</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$189,25</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group" aria-label="2 / 8" style="width: 255px; margin-right: 30px;">

                <a href="#" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{asset('front_assets/img/tourCards/1/2.png')}}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      New York, USA
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Molokini and Turtle Town Snorkeling Adventure Aboard</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$225,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide swiper-slide-visible" role="group" aria-label="3 / 8" style="width: 255px; margin-right: 30px;">

                <a href="#" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{asset('front_assets/img/tourCards/1/3.png')}}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      London, UK
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Westminster Walking Tour &amp; Westminster Abbey Entry</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$943,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide swiper-slide-visible" role="group" aria-label="4 / 8" style="width: 255px; margin-right: 30px;">

                <a href="#" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{asset('front_assets/img/tourCards/1/4.png')}}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      New York, USA
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>All Inclusive Ultimate Circle Island Day Tour with Lunch</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$771,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide" role="group" aria-label="5 / 8" style="width: 255px; margin-right: 30px;">

                <a href="#" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{asset('front_assets/img/tourCards/1/5.png')}}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Space Center Houston Admission Ticket</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$189,25</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide" role="group" aria-label="6 / 8" style="width: 255px; margin-right: 30px;">

                <a href="#" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{asset('front_assets/img/tourCards/1/6.png')}}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      New York, USA
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Clear Kayak Tour of Shell Key Preserve and Tampa Bay Area</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$225,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide" role="group" aria-label="7 / 8" style="width: 255px; margin-right: 30px;">

                <a href="#" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{asset('front_assets/img/tourCards/1/7.png')}}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      London, UK
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>History and Hauntings of Salem Guided Walking Tour</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$943,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide" role="group" aria-label="8 / 8" style="width: 255px; margin-right: 30px;">

                <a href="#" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{asset('front_assets/img/tourCards/1/9.png')}}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      New York, USA
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Mauna Kea Summit Sunset and Stars Free Astro Photos Hilo Kona Waikoloa Pick Up</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$771,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

            </div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

          <div class="navAbsolute">
            <button class="navAbsolute__button bg-white js-slider1-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-4994e9600e9bd7de" aria-disabled="true">
              <i class="icon-arrow-left text-14"></i>
            </button>

            <button class="navAbsolute__button bg-white js-slider1-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-4994e9600e9bd7de" aria-disabled="false">
              <i class="icon-arrow-right text-14"></i>
            </button>
          </div>
        </div>
      </div>
    </section>
    <section class="layout-pt-xl layout-pb-xl">
      <div data-anim-wrap="" class="container">
        <div data-anim-child="slide-up" class="row y-gap-10 justify-between items-end y-gap-10">
          <div class="col-auto">
            <h2 class="text-30">Explore all things to do in Phuket 2023</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="row pt-40 md:pt-20">
          <div class="col-xl-3 col-lg-4">
            <div class="lg:d-none">
              <div class="sidebar -type-1 overflow-hidden rounded-12">
                <div class="sidebar__content">
                  <!-- Tour type -->
                  <div class="sidebar__item">
                    <div class="accordion -simple-2 js-accordion">
                      <div class="accordion__item js-accordion-item-active is-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Tour Type</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content" style="max-height: 241px;">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

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

                                  <div class="lh-11 ml-10">Nature Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Adventure Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Cultural Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Food Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">City Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Cruises Tours</div>

                                </div>

                              </div>

                            </div>

                            <a href="#" class="d-flex text-15 fw-500 text-accent-2 mt-15">See More</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Filter price -->
                  <div class="sidebar__item">
                    <div class="accordion -simple-2 js-accordion">
                      <div class="accordion__item js-accordion-item-active is-active">
                        <div class="accordion__button mb-10 d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Filter Price</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content" style="max-height: 63px;">
                          <div class="pt-15">
                            <div class="js-price-rangeSlider">
                              <div class="px-5">
                                <div class="js-slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0.02%, 0px) scale(0.6998, 1);"></div></div><div class="noUi-origin" style="transform: translate(-99.98%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="70000.0" aria-valuenow="20.0" aria-valuetext="$20"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(-30%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="20.0" aria-valuemax="100000.0" aria-valuenow="70000.0" aria-valuetext="$70000"><div class="noUi-touch-area"></div></div></div></div></div>
                              </div>

                              <div class="d-flex justify-between mt-20">
                                <div class="">
                                  <span class="">Price:</span>
                                  <span class="fw-500 js-lower">$20</span>
                                  <span> - </span>
                                  <span class="fw-500 js-upper">$70000</span>
                                </div>

                                <div class="fw-500">
                                  Filter
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Duration -->
                  <div class="sidebar__item">
                    <div class="accordion -simple-2 js-accordion">
                      <div class="accordion__item js-accordion-item-active is-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Duration</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content" style="max-height: 173px;">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

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

                                  <div class="lh-11 ml-10">0-3 hours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">3-5 hours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">5-7 hours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Full day (7+ hours)</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Multi-day</div>

                                </div>

                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Language -->
                  <div class="sidebar__item">
                    <div class="accordion -simple-2 js-accordion">
                      <div class="accordion__item js-accordion-item-active is-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Language</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content" style="max-height: 173px;">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

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

                                  <div class="lh-11 ml-10">English</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Dutch</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">German</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">French</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Italian</div>

                                </div>

                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Rating -->
                  <div class="sidebar__item">
                    <div class="accordion -simple-2 js-accordion">
                      <div class="accordion__item js-accordion-item-active is-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Rating</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content" style="max-height: 173px;">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                </div>
                              </div>

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>


                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                </div>
                              </div>

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>


                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                </div>
                              </div>

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>


                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                </div>
                              </div>

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>


                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Specials -->
                  <div class="sidebar__item">
                    <div class="accordion -simple-2 js-accordion">
                      <div class="accordion__item js-accordion-item-active is-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Specials</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content" style="max-height: 173px;">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

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

                                  <div class="lh-11 ml-10">Deals &amp; Discounts</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Free Cancellation</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Likely to Sell Out</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Skip-The-Line</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Private Tour</div>

                                </div>

                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion d-none mb-30 lg:d-flex js-accordion">
              <div class="accordion__item col-12">
                <button class="accordion__button button -dark-1 bg-light-1 px-25 py-10 border-1 rounded-12">
                  <i class="icon-sort-down mr-10 text-16"></i>
                  Filter
                </button>

                <div class="accordion__content">
                  <div class="pt-20">
                    <div class="sidebar -type-1 overflow-hidden rounded-12">
                      <div class="sidebar__header bg-accent-1">
                        <div class="text-15 text-white fw-500">When are you traveling?</div>

                        <div class="mt-10">
                          <div class="searchForm -type-1 -col-1 -narrow">
                            <div class="searchForm__form">
                              <div class="searchFormItem js-select-control js-form-dd js-calendar">
                                <div class="searchFormItem__button" data-x-click="calendar">
                                  <div class="pl-calendar d-flex items-center">
                                    <i class="icon-calendar text-20 mr-15"></i>
                                    <div>
                                      <span class="js-first-date">Add dates</span>
                                      <span class="js-last-date"></span>
                                    </div>
                                  </div>
                                </div>


                                <div class="searchFormItemDropdown -calendar" data-x="calendar" data-x-toggle="is-active">
                                  <div class="searchFormItemDropdown__container">

                                    <div class="searchMenu-date -searchForm js-form-dd js-calendar-el">
                                      <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                                        <div class="bg-white rounded-4">
                                          <div class="elCalendar js-calendar-el-calendar">
        <div class="elCalendar__slider js-calendar-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight">
          <div class="swiper-wrapper" id="swiper-wrapper-be66956810ab3c428" aria-live="polite" style="transition-duration: 0ms; height: 0px;">
            
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    january 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="1" data-week="Sun" data-month="jan" class="elCalendar__sell -dark">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
        
                      
                        <div data-index="2" data-week="Mon" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="3" data-week="Tue" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="4" data-week="Wed" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="5" data-week="Thu" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="6" data-week="Fri" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="7" data-week="Sat" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="8" data-week="Sun" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="9" data-week="Mon" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="10" data-week="Tue" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="11" data-week="Wed" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="12" data-week="Thu" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="13" data-week="Fri" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="14" data-week="Sat" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="15" data-week="Sun" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="16" data-week="Mon" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="17" data-week="Tue" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="18" data-week="Wed" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="19" data-week="Thu" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="20" data-week="Fri" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="21" data-week="Sat" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="22" data-week="Sun" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="23" data-week="Mon" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="24" data-week="Tue" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="25" data-week="Wed" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="26" data-week="Thu" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="27" data-week="Fri" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="28" data-week="Sat" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="29" data-week="Sun" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="30" data-week="Mon" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="31" data-week="Tue" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="32" data-week="Wed" data-month="jan" class="elCalendar__sell">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    february 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="33" data-week="Sun" data-month="feb" class="elCalendar__sell -dark">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="34" data-week="Mon" data-month="feb" class="elCalendar__sell -dark">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="35" data-week="Tue" data-month="feb" class="elCalendar__sell -dark">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="36" data-week="Wed" data-month="feb" class="elCalendar__sell -dark">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
        
                      
                        <div data-index="37" data-week="Thu" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="38" data-week="Fri" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="39" data-week="Sat" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="40" data-week="Sun" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="41" data-week="Mon" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="42" data-week="Tue" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="43" data-week="Wed" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="44" data-week="Thu" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="45" data-week="Fri" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="46" data-week="Sat" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="47" data-week="Sun" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="48" data-week="Mon" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="49" data-week="Tue" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="50" data-week="Wed" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="51" data-week="Thu" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="52" data-week="Fri" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="53" data-week="Sat" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="54" data-week="Sun" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="55" data-week="Mon" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="56" data-week="Tue" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="57" data-week="Wed" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="58" data-week="Thu" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="59" data-week="Fri" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="60" data-week="Sat" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="61" data-week="Sun" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="62" data-week="Mon" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="63" data-week="Tue" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="64" data-week="Wed" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="65" data-week="Thu" data-month="feb" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    march 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="66" data-week="Sun" data-month="mar" class="elCalendar__sell -dark">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="67" data-week="Mon" data-month="mar" class="elCalendar__sell -dark">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="68" data-week="Tue" data-month="mar" class="elCalendar__sell -dark">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="69" data-week="Wed" data-month="mar" class="elCalendar__sell -dark">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="70" data-week="Thu" data-month="mar" class="elCalendar__sell -dark">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
        
                      
                        <div data-index="71" data-week="Fri" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="72" data-week="Sat" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="73" data-week="Sun" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="74" data-week="Mon" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="75" data-week="Tue" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="76" data-week="Wed" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="77" data-week="Thu" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="78" data-week="Fri" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="79" data-week="Sat" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="80" data-week="Sun" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="81" data-week="Mon" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="82" data-week="Tue" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="83" data-week="Wed" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="84" data-week="Thu" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="85" data-week="Fri" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="86" data-week="Sat" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="87" data-week="Sun" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="88" data-week="Mon" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="89" data-week="Tue" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="90" data-week="Wed" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="91" data-week="Thu" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="92" data-week="Fri" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="93" data-week="Sat" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="94" data-week="Sun" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="95" data-week="Mon" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="96" data-week="Tue" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="97" data-week="Wed" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="98" data-week="Thu" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="99" data-week="Fri" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="100" data-week="Sat" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="101" data-week="Sun" data-month="mar" class="elCalendar__sell">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    april 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="102" data-week="Sun" data-month="apr" class="elCalendar__sell -dark">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
        
                      
                        <div data-index="103" data-week="Mon" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="104" data-week="Tue" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="105" data-week="Wed" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="106" data-week="Thu" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="107" data-week="Fri" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="108" data-week="Sat" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="109" data-week="Sun" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="110" data-week="Mon" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="111" data-week="Tue" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="112" data-week="Wed" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="113" data-week="Thu" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="114" data-week="Fri" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="115" data-week="Sat" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="116" data-week="Sun" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="117" data-week="Mon" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="118" data-week="Tue" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="119" data-week="Wed" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="120" data-week="Thu" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="121" data-week="Fri" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="122" data-week="Sat" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="123" data-week="Sun" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="124" data-week="Mon" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="125" data-week="Tue" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="126" data-week="Wed" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="127" data-week="Thu" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="128" data-week="Fri" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="129" data-week="Sat" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="130" data-week="Sun" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="131" data-week="Mon" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="132" data-week="Tue" data-month="apr" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    may 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="133" data-week="Sun" data-month="may" class="elCalendar__sell -dark">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="134" data-week="Mon" data-month="may" class="elCalendar__sell -dark">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="135" data-week="Tue" data-month="may" class="elCalendar__sell -dark">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
        
                      
                        <div data-index="136" data-week="Wed" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="137" data-week="Thu" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="138" data-week="Fri" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="139" data-week="Sat" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="140" data-week="Sun" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="141" data-week="Mon" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="142" data-week="Tue" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="143" data-week="Wed" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="144" data-week="Thu" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="145" data-week="Fri" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="146" data-week="Sat" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="147" data-week="Sun" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="148" data-week="Mon" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="149" data-week="Tue" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="150" data-week="Wed" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="151" data-week="Thu" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="152" data-week="Fri" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="153" data-week="Sat" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="154" data-week="Sun" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="155" data-week="Mon" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="156" data-week="Tue" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="157" data-week="Wed" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="158" data-week="Thu" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="159" data-week="Fri" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="160" data-week="Sat" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="161" data-week="Sun" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="162" data-week="Mon" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="163" data-week="Tue" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="164" data-week="Wed" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="165" data-week="Thu" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="166" data-week="Fri" data-month="may" class="elCalendar__sell">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    june 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="167" data-week="Sun" data-month="jun" class="elCalendar__sell -dark">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="168" data-week="Mon" data-month="jun" class="elCalendar__sell -dark">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="169" data-week="Tue" data-month="jun" class="elCalendar__sell -dark">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="170" data-week="Wed" data-month="jun" class="elCalendar__sell -dark">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="171" data-week="Thu" data-month="jun" class="elCalendar__sell -dark">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="172" data-week="Fri" data-month="jun" class="elCalendar__sell -dark">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
        
                      
                        <div data-index="173" data-week="Sat" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="174" data-week="Sun" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="175" data-week="Mon" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="176" data-week="Tue" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="177" data-week="Wed" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="178" data-week="Thu" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="179" data-week="Fri" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="180" data-week="Sat" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="181" data-week="Sun" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="182" data-week="Mon" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="183" data-week="Tue" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="184" data-week="Wed" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="185" data-week="Thu" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="186" data-week="Fri" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="187" data-week="Sat" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="188" data-week="Sun" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="189" data-week="Mon" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="190" data-week="Tue" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="191" data-week="Wed" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="192" data-week="Thu" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="193" data-week="Fri" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="194" data-week="Sat" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="195" data-week="Sun" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="196" data-week="Mon" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="197" data-week="Tue" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="198" data-week="Wed" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="199" data-week="Thu" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="200" data-week="Fri" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="201" data-week="Sat" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="202" data-week="Sun" data-month="jun" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    july 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="203" data-week="Sun" data-month="jul" class="elCalendar__sell -dark">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
        
                      
                        <div data-index="204" data-week="Mon" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="205" data-week="Tue" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="206" data-week="Wed" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="207" data-week="Thu" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="208" data-week="Fri" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="209" data-week="Sat" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="210" data-week="Sun" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="211" data-week="Mon" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="212" data-week="Tue" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="213" data-week="Wed" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="214" data-week="Thu" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="215" data-week="Fri" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="216" data-week="Sat" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="217" data-week="Sun" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="218" data-week="Mon" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="219" data-week="Tue" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="220" data-week="Wed" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="221" data-week="Thu" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="222" data-week="Fri" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="223" data-week="Sat" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="224" data-week="Sun" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="225" data-week="Mon" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="226" data-week="Tue" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="227" data-week="Wed" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="228" data-week="Thu" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="229" data-week="Fri" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="230" data-week="Sat" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="231" data-week="Sun" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="232" data-week="Mon" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="233" data-week="Tue" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="234" data-week="Wed" data-month="jul" class="elCalendar__sell">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    august 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="235" data-week="Sun" data-month="aug" class="elCalendar__sell -dark">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="236" data-week="Mon" data-month="aug" class="elCalendar__sell -dark">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="237" data-week="Tue" data-month="aug" class="elCalendar__sell -dark">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="238" data-week="Wed" data-month="aug" class="elCalendar__sell -dark">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
        
                      
                        <div data-index="239" data-week="Thu" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="240" data-week="Fri" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="241" data-week="Sat" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="242" data-week="Sun" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="243" data-week="Mon" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="244" data-week="Tue" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="245" data-week="Wed" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="246" data-week="Thu" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="247" data-week="Fri" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="248" data-week="Sat" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="249" data-week="Sun" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="250" data-week="Mon" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="251" data-week="Tue" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="252" data-week="Wed" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="253" data-week="Thu" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="254" data-week="Fri" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="255" data-week="Sat" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="256" data-week="Sun" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="257" data-week="Mon" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="258" data-week="Tue" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="259" data-week="Wed" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="260" data-week="Thu" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="261" data-week="Fri" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="262" data-week="Sat" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="263" data-week="Sun" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="264" data-week="Mon" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="265" data-week="Tue" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="266" data-week="Wed" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="267" data-week="Thu" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="268" data-week="Fri" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="269" data-week="Sat" data-month="aug" class="elCalendar__sell">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    september 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
        
                      
                        <div data-index="270" data-week="Sun" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="271" data-week="Mon" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="272" data-week="Tue" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="273" data-week="Wed" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="274" data-week="Thu" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="275" data-week="Fri" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="276" data-week="Sat" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="277" data-week="Sun" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="278" data-week="Mon" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="279" data-week="Tue" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="280" data-week="Wed" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="281" data-week="Thu" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="282" data-week="Fri" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="283" data-week="Sat" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="284" data-week="Sun" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="285" data-week="Mon" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="286" data-week="Tue" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="287" data-week="Wed" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="288" data-week="Thu" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="289" data-week="Fri" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="290" data-week="Sat" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="291" data-week="Sun" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="292" data-week="Mon" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="293" data-week="Tue" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="294" data-week="Wed" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="295" data-week="Thu" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="296" data-week="Fri" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="297" data-week="Sat" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="298" data-week="Sun" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="299" data-week="Mon" data-month="sep" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    october 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="300" data-week="Sun" data-month="oct" class="elCalendar__sell -dark">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="301" data-week="Mon" data-month="oct" class="elCalendar__sell -dark">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
        
                      
                        <div data-index="302" data-week="Tue" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="303" data-week="Wed" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="304" data-week="Thu" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="305" data-week="Fri" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="306" data-week="Sat" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="307" data-week="Sun" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="308" data-week="Mon" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="309" data-week="Tue" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="310" data-week="Wed" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="311" data-week="Thu" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="312" data-week="Fri" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="313" data-week="Sat" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="314" data-week="Sun" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="315" data-week="Mon" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="316" data-week="Tue" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="317" data-week="Wed" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="318" data-week="Thu" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="319" data-week="Fri" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="320" data-week="Sat" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="321" data-week="Sun" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="322" data-week="Mon" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="323" data-week="Tue" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="324" data-week="Wed" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="325" data-week="Thu" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="326" data-week="Fri" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="327" data-week="Sat" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="328" data-week="Sun" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="329" data-week="Mon" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="330" data-week="Tue" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="331" data-week="Wed" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="332" data-week="Thu" data-month="oct" class="elCalendar__sell">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    november 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
                        <div data-index="333" data-week="Sun" data-month="nov" class="elCalendar__sell -dark">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="334" data-week="Mon" data-month="nov" class="elCalendar__sell -dark">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="335" data-week="Tue" data-month="nov" class="elCalendar__sell -dark">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="336" data-week="Wed" data-month="nov" class="elCalendar__sell -dark">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="337" data-week="Thu" data-month="nov" class="elCalendar__sell -dark">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
        
                      
                        <div data-index="338" data-week="Fri" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="339" data-week="Sat" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="340" data-week="Sun" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="341" data-week="Mon" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="342" data-week="Tue" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="343" data-week="Wed" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="344" data-week="Thu" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="345" data-week="Fri" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="346" data-week="Sat" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="347" data-week="Sun" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="348" data-week="Mon" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="349" data-week="Tue" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="350" data-week="Wed" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="351" data-week="Thu" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="352" data-week="Fri" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="353" data-week="Sat" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="354" data-week="Sun" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="355" data-week="Mon" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="356" data-week="Tue" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="357" data-week="Wed" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="358" data-week="Thu" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="359" data-week="Fri" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="360" data-week="Sat" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="361" data-week="Sun" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="362" data-week="Mon" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="363" data-week="Tue" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="364" data-week="Wed" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="365" data-week="Thu" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="366" data-week="Fri" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="367" data-week="Sat" data-month="nov" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="capitalize text-18 fw-500 text-center mb-20">
                    december 2024
                  </div>

                  <div class="elCalendar__month">
                    <div class="elCalendar__header">
                      <div class="elCalendar__header__sell">Sun</div><div class="elCalendar__header__sell">Mon</div><div class="elCalendar__header__sell">Tue</div><div class="elCalendar__header__sell">Wed</div><div class="elCalendar__header__sell">Thu</div><div class="elCalendar__header__sell">Fri</div><div class="elCalendar__header__sell">Sat</div>
                    </div>
        
                    <div class="elCalendar__body">
                      
        
                      
                        <div data-index="368" data-week="Sun" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            1
                          </span>
                        </div>
                      
                        <div data-index="369" data-week="Mon" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            2
                          </span>
                        </div>
                      
                        <div data-index="370" data-week="Tue" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            3
                          </span>
                        </div>
                      
                        <div data-index="371" data-week="Wed" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            4
                          </span>
                        </div>
                      
                        <div data-index="372" data-week="Thu" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            5
                          </span>
                        </div>
                      
                        <div data-index="373" data-week="Fri" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            6
                          </span>
                        </div>
                      
                        <div data-index="374" data-week="Sat" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            7
                          </span>
                        </div>
                      
                        <div data-index="375" data-week="Sun" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            8
                          </span>
                        </div>
                      
                        <div data-index="376" data-week="Mon" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            9
                          </span>
                        </div>
                      
                        <div data-index="377" data-week="Tue" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            10
                          </span>
                        </div>
                      
                        <div data-index="378" data-week="Wed" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            11
                          </span>
                        </div>
                      
                        <div data-index="379" data-week="Thu" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            12
                          </span>
                        </div>
                      
                        <div data-index="380" data-week="Fri" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            13
                          </span>
                        </div>
                      
                        <div data-index="381" data-week="Sat" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            14
                          </span>
                        </div>
                      
                        <div data-index="382" data-week="Sun" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            15
                          </span>
                        </div>
                      
                        <div data-index="383" data-week="Mon" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            16
                          </span>
                        </div>
                      
                        <div data-index="384" data-week="Tue" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            17
                          </span>
                        </div>
                      
                        <div data-index="385" data-week="Wed" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            18
                          </span>
                        </div>
                      
                        <div data-index="386" data-week="Thu" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            19
                          </span>
                        </div>
                      
                        <div data-index="387" data-week="Fri" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            20
                          </span>
                        </div>
                      
                        <div data-index="388" data-week="Sat" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            21
                          </span>
                        </div>
                      
                        <div data-index="389" data-week="Sun" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            22
                          </span>
                        </div>
                      
                        <div data-index="390" data-week="Mon" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            23
                          </span>
                        </div>
                      
                        <div data-index="391" data-week="Tue" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            24
                          </span>
                        </div>
                      
                        <div data-index="392" data-week="Wed" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            25
                          </span>
                        </div>
                      
                        <div data-index="393" data-week="Thu" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            26
                          </span>
                        </div>
                      
                        <div data-index="394" data-week="Fri" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            27
                          </span>
                        </div>
                      
                        <div data-index="395" data-week="Sat" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            28
                          </span>
                        </div>
                      
                        <div data-index="396" data-week="Sun" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            29
                          </span>
                        </div>
                      
                        <div data-index="397" data-week="Mon" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            30
                          </span>
                        </div>
                      
                        <div data-index="398" data-week="Tue" data-month="dec" class="elCalendar__sell">
                          <span class="js-date">
                            31
                          </span>
                        </div>
                      
                    </div>
                  </div>
                </div>
              
          </div>

          <button class="elCalendar__sliderNav -prev flex-center js-calendar-slider-prev" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-be66956810ab3c428" aria-disabled="false">
            <i class="icon-arrow-left text-20"></i>
          </button>

          <button class="elCalendar__sliderNav -next flex-center js-calendar-slider-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-be66956810ab3c428" aria-disabled="false">
            <i class="icon-arrow-right text-20"></i>
          </button>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
      </div>
                                        </div>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="sidebar__content">
                        <!-- Tour type -->
                        <div class="sidebar__item">
                          <h5 class="text-18 fw-500">Tour Type</h5>
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

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

                                  <div class="lh-11 ml-10">Nature Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Adventure Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Cultural Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Food Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">City Tours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Cruises Tours</div>

                                </div>

                              </div>

                            </div>

                            <a href="#" class="d-flex text-15 fw-500 text-accent-2 mt-15">See More</a>
                          </div>
                        </div>

                        <!-- Filter price -->
                        <div class="sidebar__item">
                          <h5 class="text-18 fw-500">Filter Price</h5>
                          <div class="pt-15">
                            <div class="js-price-rangeSlider">
                              <div class="px-5">
                                <div class="js-slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0.02%, 0px) scale(0.6998, 1);"></div></div><div class="noUi-origin" style="transform: translate(-99.98%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="70000.0" aria-valuenow="20.0" aria-valuetext="$20"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(-30%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="20.0" aria-valuemax="100000.0" aria-valuenow="70000.0" aria-valuetext="$70000"><div class="noUi-touch-area"></div></div></div></div></div>
                              </div>

                              <div class="d-flex justify-between mt-20">
                                <div class="">
                                  <span class="">Price:</span>
                                  <span class="fw-500 js-lower">$20</span>
                                  <span> - </span>
                                  <span class="fw-500 js-upper">$70000</span>
                                </div>

                                <div class="fw-500">
                                  Filter
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Duration -->
                        <div class="sidebar__item">
                          <h5 class="text-18 fw-500">Duration</h5>
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

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

                                  <div class="lh-11 ml-10">0-3 hours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">3-5 hours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">5-7 hours</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Full day (7+ hours)</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Multi-day</div>

                                </div>

                              </div>

                            </div>
                          </div>
                        </div>

                        <!-- Language -->
                        <div class="sidebar__item">
                          <h5 class="text-18 fw-500">Language</h5>
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

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

                                  <div class="lh-11 ml-10">English</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Dutch</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">German</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">French</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Italian</div>

                                </div>

                              </div>

                            </div>
                          </div>
                        </div>

                        <!-- Rating -->
                        <div class="sidebar__item">
                          <h5 class="text-18 fw-500">Rating</h5>
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                </div>
                              </div>

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>


                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                </div>
                              </div>

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>


                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                </div>
                              </div>

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>


                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                </div>
                              </div>

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex x-gap-5 ml-10">

                                  <i class="flex-center icon-star text-yellow-2 text-13"></i>


                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                  <i class="flex-center icon-star text-light-6 text-13"></i>

                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <!-- Specials -->
                        <div class="sidebar__item">
                          <h5 class="text-18 fw-500">Specials</h5>
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

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

                                  <div class="lh-11 ml-10">Deals &amp; Discounts</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Free Cancellation</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Likely to Sell Out</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Skip-The-Line</div>

                                </div>

                              </div>

                              <div>

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

                                  <div class="lh-11 ml-10">Private Tour</div>

                                </div>

                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-xl-9 col-lg-8">
            <div class="row y-gap-5 justify-between">
              <div class="col-auto">
                <div>1362 results</div>
              </div>

              <div class="col-auto">
                <div>Sort by: Featured</div>
              </div>
            </div>

            <div class="row y-gap-30 pt-30">

              <div class="col-12">

                <div class="tourCard -type-2">
                  <div class="tourCard__image">
                    <img src="{{asset('front_assets/img/tourCards/3/1.png')}}" alt="image">

                    <div class="tourCard__badge">
                      <div class="bg-accent-1 rounded-12 text-white lh-11 text-13 px-15 py-10">
                        20 % OFF
                      </div>
                    </div>

                    <div class="tourCard__favorite">
                      <button class="button -accent-1 size-35 bg-white rounded-full flex-center">
                        <i class="icon-heart text-15"></i>
                      </button>
                    </div>
                  </div>

                  <div class="tourCard__content">
                    <div class="tourCard__location">
                      <i class="icon-pin"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title mt-5">
                      <span>Phi Phi Islands Adventure Day Trip with Seaview Lunch by V. Marine Tour</span>
                    </h3>

                    <div class="d-flex items-center mt-5">
                      <div class="d-flex items-center x-gap-5">

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                      </div>

                      <div class="text-14 ml-10"><span class="fw-500">4.8</span> (269)</div>
                    </div>

                    <p class="tourCard__text mt-5">
                      The Phi Phi archipelago is a must-visit while in Phuket, and this speedboat trip.
                    </p>

                    <div class="row x-gap-20 y-gap-5 pt-30">
                      <div class="col-auto">
                        <div class="text-14 text-accent-1">
                          <i class="icon-price-tag mr-10"></i>
                          Best Price Guarantee
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="text-14">
                          <i class="icon-check mr-10"></i>
                          Free Cancellation
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tourCard__info">
                    <div>
                      <div class="d-flex items-center text-14">
                        <i class="icon-clock mr-10"></i>
                        2 Days 1 Nights
                      </div>

                      <div class="tourCard__price">
                        <div>$114.00</div>

                        <div class="d-flex items-center">
                          From <span class="text-20 fw-500 ml-5">$1,200</span>
                        </div>
                      </div>
                    </div>

                    <button class="button -outline-accent-1 text-accent-1">
                      View Details
                      <i class="icon-arrow-top-right ml-10"></i>
                    </button>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="tourCard -type-2">
                  <div class="tourCard__image">
                    <img src="{{asset('front_assets/img/tourCards/3/2.png')}}" alt="image">

                    <div class="tourCard__badge">
                      <div class=" rounded-12 text-white lh-11 text-13 px-15 py-10">

                      </div>
                    </div>

                    <div class="tourCard__favorite">
                      <button class="button -accent-1 size-35 bg-white rounded-full flex-center">
                        <i class="icon-heart text-15"></i>
                      </button>
                    </div>
                  </div>

                  <div class="tourCard__content">
                    <div class="tourCard__location">
                      <i class="icon-pin"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title mt-5">
                      <span>Phi Phi Islands Adventure Day Trip with Seaview Lunch by V. Marine Tour</span>
                    </h3>

                    <div class="d-flex items-center mt-5">
                      <div class="d-flex items-center x-gap-5">

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                      </div>

                      <div class="text-14 ml-10"><span class="fw-500">4.8</span> (269)</div>
                    </div>

                    <p class="tourCard__text mt-5">
                      The Phi Phi archipelago is a must-visit while in Phuket, and this speedboat trip.
                    </p>

                    <div class="row x-gap-20 y-gap-5 pt-30">
                      <div class="col-auto">
                        <div class="text-14 text-accent-1">
                          <i class="icon-price-tag mr-10"></i>
                          Best Price Guarantee
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="text-14">
                          <i class="icon-check mr-10"></i>
                          Free Cancellation
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tourCard__info">
                    <div>
                      <div class="d-flex items-center text-14">
                        <i class="icon-clock mr-10"></i>
                        2 Days 1 Nights
                      </div>

                      <div class="tourCard__price">
                        <div>$114.00</div>

                        <div class="d-flex items-center">
                          From <span class="text-20 fw-500 ml-5">$1,200</span>
                        </div>
                      </div>
                    </div>

                    <button class="button -outline-accent-1 text-accent-1">
                      View Details
                      <i class="icon-arrow-top-right ml-10"></i>
                    </button>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="tourCard -type-2">
                  <div class="tourCard__image">
                    <img src="{{asset('front_assets/img/tourCards/3/3.png')}}" alt="image">

                    <div class="tourCard__badge">
                      <div class="bg-accent-2 rounded-12 text-white lh-11 text-13 px-15 py-10">
                        FEATURED
                      </div>
                    </div>

                    <div class="tourCard__favorite">
                      <button class="button -accent-1 size-35 bg-white rounded-full flex-center">
                        <i class="icon-heart text-15"></i>
                      </button>
                    </div>
                  </div>

                  <div class="tourCard__content">
                    <div class="tourCard__location">
                      <i class="icon-pin"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title mt-5">
                      <span>Phi Phi Islands Adventure Day Trip with Seaview Lunch by V. Marine Tour</span>
                    </h3>

                    <div class="d-flex items-center mt-5">
                      <div class="d-flex items-center x-gap-5">

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                      </div>

                      <div class="text-14 ml-10"><span class="fw-500">4.8</span> (269)</div>
                    </div>

                    <p class="tourCard__text mt-5">
                      The Phi Phi archipelago is a must-visit while in Phuket, and this speedboat trip.
                    </p>

                    <div class="row x-gap-20 y-gap-5 pt-30">
                      <div class="col-auto">
                        <div class="text-14 text-accent-1">
                          <i class="icon-price-tag mr-10"></i>
                          Best Price Guarantee
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="text-14">
                          <i class="icon-check mr-10"></i>
                          Free Cancellation
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tourCard__info">
                    <div>
                      <div class="d-flex items-center text-14">
                        <i class="icon-clock mr-10"></i>
                        2 Days 1 Nights
                      </div>

                      <div class="tourCard__price">
                        <div>$114.00</div>

                        <div class="d-flex items-center">
                          From <span class="text-20 fw-500 ml-5">$1,200</span>
                        </div>
                      </div>
                    </div>

                    <button class="button -outline-accent-1 text-accent-1">
                      View Details
                      <i class="icon-arrow-top-right ml-10"></i>
                    </button>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="tourCard -type-2">
                  <div class="tourCard__image">
                    <img src="{{asset('front_assets/img/tourCards/3/4.png')}}" alt="image">

                    <div class="tourCard__badge">
                      <div class=" rounded-12 text-white lh-11 text-13 px-15 py-10">

                      </div>
                    </div>

                    <div class="tourCard__favorite">
                      <button class="button -accent-1 size-35 bg-white rounded-full flex-center">
                        <i class="icon-heart text-15"></i>
                      </button>
                    </div>
                  </div>

                  <div class="tourCard__content">
                    <div class="tourCard__location">
                      <i class="icon-pin"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title mt-5">
                      <span>Phi Phi Islands Adventure Day Trip with Seaview Lunch by V. Marine Tour</span>
                    </h3>

                    <div class="d-flex items-center mt-5">
                      <div class="d-flex items-center x-gap-5">

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                      </div>

                      <div class="text-14 ml-10"><span class="fw-500">4.8</span> (269)</div>
                    </div>

                    <p class="tourCard__text mt-5">
                      The Phi Phi archipelago is a must-visit while in Phuket, and this speedboat trip.
                    </p>

                    <div class="row x-gap-20 y-gap-5 pt-30">
                      <div class="col-auto">
                        <div class="text-14 text-accent-1">
                          <i class="icon-price-tag mr-10"></i>
                          Best Price Guarantee
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="text-14">
                          <i class="icon-check mr-10"></i>
                          Free Cancellation
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tourCard__info">
                    <div>
                      <div class="d-flex items-center text-14">
                        <i class="icon-clock mr-10"></i>
                        2 Days 1 Nights
                      </div>

                      <div class="tourCard__price">
                        <div>$114.00</div>

                        <div class="d-flex items-center">
                          From <span class="text-20 fw-500 ml-5">$1,200</span>
                        </div>
                      </div>
                    </div>

                    <button class="button -outline-accent-1 text-accent-1">
                      View Details
                      <i class="icon-arrow-top-right ml-10"></i>
                    </button>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="tourCard -type-2">
                  <div class="tourCard__image">
                    <img src="{{asset('front_assets/img/tourCards/3/5.png')}}" alt="image">

                    <div class="tourCard__badge">
                      <div class=" rounded-12 text-white lh-11 text-13 px-15 py-10">

                      </div>
                    </div>

                    <div class="tourCard__favorite">
                      <button class="button -accent-1 size-35 bg-white rounded-full flex-center">
                        <i class="icon-heart text-15"></i>
                      </button>
                    </div>
                  </div>

                  <div class="tourCard__content">
                    <div class="tourCard__location">
                      <i class="icon-pin"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title mt-5">
                      <span>Phi Phi Islands Adventure Day Trip with Seaview Lunch by V. Marine Tour</span>
                    </h3>

                    <div class="d-flex items-center mt-5">
                      <div class="d-flex items-center x-gap-5">

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                      </div>

                      <div class="text-14 ml-10"><span class="fw-500">4.8</span> (269)</div>
                    </div>

                    <p class="tourCard__text mt-5">
                      The Phi Phi archipelago is a must-visit while in Phuket, and this speedboat trip.
                    </p>

                    <div class="row x-gap-20 y-gap-5 pt-30">
                      <div class="col-auto">
                        <div class="text-14 text-accent-1">
                          <i class="icon-price-tag mr-10"></i>
                          Best Price Guarantee
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="text-14">
                          <i class="icon-check mr-10"></i>
                          Free Cancellation
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tourCard__info">
                    <div>
                      <div class="d-flex items-center text-14">
                        <i class="icon-clock mr-10"></i>
                        2 Days 1 Nights
                      </div>

                      <div class="tourCard__price">
                        <div>$114.00</div>

                        <div class="d-flex items-center">
                          From <span class="text-20 fw-500 ml-5">$1,200</span>
                        </div>
                      </div>
                    </div>

                    <button class="button -outline-accent-1 text-accent-1">
                      View Details
                      <i class="icon-arrow-top-right ml-10"></i>
                    </button>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="tourCard -type-2">
                  <div class="tourCard__image">
                    <img src="{{asset('front_assets/img/tourCards/3/6.png')}}" alt="image">

                    <div class="tourCard__badge">
                      <div class=" rounded-12 text-white lh-11 text-13 px-15 py-10">

                      </div>
                    </div>

                    <div class="tourCard__favorite">
                      <button class="button -accent-1 size-35 bg-white rounded-full flex-center">
                        <i class="icon-heart text-15"></i>
                      </button>
                    </div>
                  </div>

                  <div class="tourCard__content">
                    <div class="tourCard__location">
                      <i class="icon-pin"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title mt-5">
                      <span>Phi Phi Islands Adventure Day Trip with Seaview Lunch by V. Marine Tour</span>
                    </h3>

                    <div class="d-flex items-center mt-5">
                      <div class="d-flex items-center x-gap-5">

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                        <i class="icon-star text-yellow-2 text-12"></i>

                      </div>

                      <div class="text-14 ml-10"><span class="fw-500">4.8</span> (269)</div>
                    </div>

                    <p class="tourCard__text mt-5">
                      The Phi Phi archipelago is a must-visit while in Phuket, and this speedboat trip.
                    </p>

                    <div class="row x-gap-20 y-gap-5 pt-30">
                      <div class="col-auto">
                        <div class="text-14 text-accent-1">
                          <i class="icon-price-tag mr-10"></i>
                          Best Price Guarantee
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="text-14">
                          <i class="icon-check mr-10"></i>
                          Free Cancellation
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tourCard__info">
                    <div>
                      <div class="d-flex items-center text-14">
                        <i class="icon-clock mr-10"></i>
                        2 Days 1 Nights
                      </div>

                      <div class="tourCard__price">
                        <div>$114.00</div>

                        <div class="d-flex items-center">
                          From <span class="text-20 fw-500 ml-5">$1,200</span>
                        </div>
                      </div>
                    </div>

                    <button class="button -outline-accent-1 text-accent-1">
                      View Details
                      <i class="icon-arrow-top-right ml-10"></i>
                    </button>
                  </div>
                </div>

              </div>

            </div>

            <div class="d-flex justify-center flex-column mt-60">

              <div class="pagination justify-center">
                <button class="pagination__button button -accent-1 mr-15 -prev">
                  <i class="icon-arrow-left text-15"></i>
                </button>

                <div class="pagination__count">
                  <a href="#">1</a>
                  <a href="#" class="is-active">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">5</a>
                  <div>...</div>
                  <a href="#">20</a>
                </div>

                <button class="pagination__button button -accent-1 ml-15 -next">
                  <i class="icon-arrow-right text-15"></i>
                </button>
              </div>

              <div class="text-14 text-center mt-20">Showing results 1-30 of 1,415</div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section data-anim="slide-up" class="relative layout-pt-xl layout-pb-xl">
      <div class="sectionBg bg-accent-1-05 -w-1530 rounded-12"></div>

      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <h2 class="text-30">Why people love Phuket</h2>
          </div>
        </div>

        <div class="row justify-center pt-60 md:pt-30">
          <div class="col-lg-8 col-md-9">
            <div class="overflow-hidden js-testimonialsSlider_1 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper" id="swiper-wrapper-9939ded8ef71031dc" aria-live="polite">

                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5" style="width: 730px;">
                  <div class="testimonials -type-2 text-center">
                    <div class="testimonials__icon">
                      <svg width="60" height="43" viewBox="0 0 60 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.837 42.0652C11.0326 42.0652 7.6087 40.5435 4.56522 37.5C1.52174 34.3478 0 29.7283 0 23.6413C0 16.6848 1.84783 11.0326 5.54348 6.68478C9.34783 2.22825 14.7283 0 21.6848 0C24.1848 0 26.1413 0.163038 27.5543 0.489121V7.98912C26.0326 7.77173 24.0761 7.66304 21.6848 7.66304C17.9891 7.66304 15 8.91304 12.7174 11.413C10.5435 13.5869 9.29348 16.4674 8.96739 20.0543C10.3804 18.3152 12.663 17.4456 15.8152 17.4456C19.0761 17.4456 21.8478 18.587 24.1304 20.8696C26.413 23.0435 27.5543 25.9239 27.5543 29.5109C27.5543 33.2065 26.3587 36.25 23.9674 38.6413C21.5761 40.9239 18.5326 42.0652 14.837 42.0652ZM47.2826 42.0652C43.4783 42.0652 40.0543 40.5435 37.0109 37.5C33.9674 34.3478 32.4456 29.7283 32.4456 23.6413C32.4456 16.6848 34.2935 11.0326 37.9891 6.68478C41.7935 2.22825 47.1739 0 54.1304 0C56.6304 0 58.587 0.163038 60 0.489121V7.98912C58.4783 7.77173 56.5217 7.66304 54.1304 7.66304C50.4348 7.66304 47.4456 8.91304 45.163 11.413C42.9891 13.5869 41.7391 16.4674 41.413 20.0543C42.8261 18.3152 45.1087 17.4456 48.2609 17.4456C51.5217 17.4456 54.2935 18.587 56.5761 20.8696C58.8587 23.0435 60 25.9239 60 29.5109C60 33.2065 58.8043 36.25 56.413 38.6413C54.0217 40.9239 50.9783 42.0652 47.2826 42.0652Z" fill="#EB662B"></path>
                      </svg>
                    </div>

                    <div class="text-20 lh-18 md:text-18 fw-500 mt-60 md:mt-30">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-60 md:mt-30">
                      <div class="text-16 fw-500 lh-14">Ali Tufan</div>
                      <div class="lh-14">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5" style="width: 730px;">
                  <div class="testimonials -type-2 text-center">
                    <div class="testimonials__icon">
                      <svg width="60" height="43" viewBox="0 0 60 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.837 42.0652C11.0326 42.0652 7.6087 40.5435 4.56522 37.5C1.52174 34.3478 0 29.7283 0 23.6413C0 16.6848 1.84783 11.0326 5.54348 6.68478C9.34783 2.22825 14.7283 0 21.6848 0C24.1848 0 26.1413 0.163038 27.5543 0.489121V7.98912C26.0326 7.77173 24.0761 7.66304 21.6848 7.66304C17.9891 7.66304 15 8.91304 12.7174 11.413C10.5435 13.5869 9.29348 16.4674 8.96739 20.0543C10.3804 18.3152 12.663 17.4456 15.8152 17.4456C19.0761 17.4456 21.8478 18.587 24.1304 20.8696C26.413 23.0435 27.5543 25.9239 27.5543 29.5109C27.5543 33.2065 26.3587 36.25 23.9674 38.6413C21.5761 40.9239 18.5326 42.0652 14.837 42.0652ZM47.2826 42.0652C43.4783 42.0652 40.0543 40.5435 37.0109 37.5C33.9674 34.3478 32.4456 29.7283 32.4456 23.6413C32.4456 16.6848 34.2935 11.0326 37.9891 6.68478C41.7935 2.22825 47.1739 0 54.1304 0C56.6304 0 58.587 0.163038 60 0.489121V7.98912C58.4783 7.77173 56.5217 7.66304 54.1304 7.66304C50.4348 7.66304 47.4456 8.91304 45.163 11.413C42.9891 13.5869 41.7391 16.4674 41.413 20.0543C42.8261 18.3152 45.1087 17.4456 48.2609 17.4456C51.5217 17.4456 54.2935 18.587 56.5761 20.8696C58.8587 23.0435 60 25.9239 60 29.5109C60 33.2065 58.8043 36.25 56.413 38.6413C54.0217 40.9239 50.9783 42.0652 47.2826 42.0652Z" fill="#EB662B"></path>
                      </svg>
                    </div>

                    <div class="text-20 lh-18 md:text-18 fw-500 mt-60 md:mt-30">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-60 md:mt-30">
                      <div class="text-16 fw-500 lh-14">Ali Tufan</div>
                      <div class="lh-14">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide" role="group" aria-label="3 / 5" style="width: 730px;">
                  <div class="testimonials -type-2 text-center">
                    <div class="testimonials__icon">
                      <svg width="60" height="43" viewBox="0 0 60 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.837 42.0652C11.0326 42.0652 7.6087 40.5435 4.56522 37.5C1.52174 34.3478 0 29.7283 0 23.6413C0 16.6848 1.84783 11.0326 5.54348 6.68478C9.34783 2.22825 14.7283 0 21.6848 0C24.1848 0 26.1413 0.163038 27.5543 0.489121V7.98912C26.0326 7.77173 24.0761 7.66304 21.6848 7.66304C17.9891 7.66304 15 8.91304 12.7174 11.413C10.5435 13.5869 9.29348 16.4674 8.96739 20.0543C10.3804 18.3152 12.663 17.4456 15.8152 17.4456C19.0761 17.4456 21.8478 18.587 24.1304 20.8696C26.413 23.0435 27.5543 25.9239 27.5543 29.5109C27.5543 33.2065 26.3587 36.25 23.9674 38.6413C21.5761 40.9239 18.5326 42.0652 14.837 42.0652ZM47.2826 42.0652C43.4783 42.0652 40.0543 40.5435 37.0109 37.5C33.9674 34.3478 32.4456 29.7283 32.4456 23.6413C32.4456 16.6848 34.2935 11.0326 37.9891 6.68478C41.7935 2.22825 47.1739 0 54.1304 0C56.6304 0 58.587 0.163038 60 0.489121V7.98912C58.4783 7.77173 56.5217 7.66304 54.1304 7.66304C50.4348 7.66304 47.4456 8.91304 45.163 11.413C42.9891 13.5869 41.7391 16.4674 41.413 20.0543C42.8261 18.3152 45.1087 17.4456 48.2609 17.4456C51.5217 17.4456 54.2935 18.587 56.5761 20.8696C58.8587 23.0435 60 25.9239 60 29.5109C60 33.2065 58.8043 36.25 56.413 38.6413C54.0217 40.9239 50.9783 42.0652 47.2826 42.0652Z" fill="#EB662B"></path>
                      </svg>
                    </div>

                    <div class="text-20 lh-18 md:text-18 fw-500 mt-60 md:mt-30">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-60 md:mt-30">
                      <div class="text-16 fw-500 lh-14">Ali Tufan</div>
                      <div class="lh-14">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide" role="group" aria-label="4 / 5" style="width: 730px;">
                  <div class="testimonials -type-2 text-center">
                    <div class="testimonials__icon">
                      <svg width="60" height="43" viewBox="0 0 60 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.837 42.0652C11.0326 42.0652 7.6087 40.5435 4.56522 37.5C1.52174 34.3478 0 29.7283 0 23.6413C0 16.6848 1.84783 11.0326 5.54348 6.68478C9.34783 2.22825 14.7283 0 21.6848 0C24.1848 0 26.1413 0.163038 27.5543 0.489121V7.98912C26.0326 7.77173 24.0761 7.66304 21.6848 7.66304C17.9891 7.66304 15 8.91304 12.7174 11.413C10.5435 13.5869 9.29348 16.4674 8.96739 20.0543C10.3804 18.3152 12.663 17.4456 15.8152 17.4456C19.0761 17.4456 21.8478 18.587 24.1304 20.8696C26.413 23.0435 27.5543 25.9239 27.5543 29.5109C27.5543 33.2065 26.3587 36.25 23.9674 38.6413C21.5761 40.9239 18.5326 42.0652 14.837 42.0652ZM47.2826 42.0652C43.4783 42.0652 40.0543 40.5435 37.0109 37.5C33.9674 34.3478 32.4456 29.7283 32.4456 23.6413C32.4456 16.6848 34.2935 11.0326 37.9891 6.68478C41.7935 2.22825 47.1739 0 54.1304 0C56.6304 0 58.587 0.163038 60 0.489121V7.98912C58.4783 7.77173 56.5217 7.66304 54.1304 7.66304C50.4348 7.66304 47.4456 8.91304 45.163 11.413C42.9891 13.5869 41.7391 16.4674 41.413 20.0543C42.8261 18.3152 45.1087 17.4456 48.2609 17.4456C51.5217 17.4456 54.2935 18.587 56.5761 20.8696C58.8587 23.0435 60 25.9239 60 29.5109C60 33.2065 58.8043 36.25 56.413 38.6413C54.0217 40.9239 50.9783 42.0652 47.2826 42.0652Z" fill="#EB662B"></path>
                      </svg>
                    </div>

                    <div class="text-20 lh-18 md:text-18 fw-500 mt-60 md:mt-30">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-60 md:mt-30">
                      <div class="text-16 fw-500 lh-14">Ali Tufan</div>
                      <div class="lh-14">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 730px;">
                  <div class="testimonials -type-2 text-center">
                    <div class="testimonials__icon">
                      <svg width="60" height="43" viewBox="0 0 60 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.837 42.0652C11.0326 42.0652 7.6087 40.5435 4.56522 37.5C1.52174 34.3478 0 29.7283 0 23.6413C0 16.6848 1.84783 11.0326 5.54348 6.68478C9.34783 2.22825 14.7283 0 21.6848 0C24.1848 0 26.1413 0.163038 27.5543 0.489121V7.98912C26.0326 7.77173 24.0761 7.66304 21.6848 7.66304C17.9891 7.66304 15 8.91304 12.7174 11.413C10.5435 13.5869 9.29348 16.4674 8.96739 20.0543C10.3804 18.3152 12.663 17.4456 15.8152 17.4456C19.0761 17.4456 21.8478 18.587 24.1304 20.8696C26.413 23.0435 27.5543 25.9239 27.5543 29.5109C27.5543 33.2065 26.3587 36.25 23.9674 38.6413C21.5761 40.9239 18.5326 42.0652 14.837 42.0652ZM47.2826 42.0652C43.4783 42.0652 40.0543 40.5435 37.0109 37.5C33.9674 34.3478 32.4456 29.7283 32.4456 23.6413C32.4456 16.6848 34.2935 11.0326 37.9891 6.68478C41.7935 2.22825 47.1739 0 54.1304 0C56.6304 0 58.587 0.163038 60 0.489121V7.98912C58.4783 7.77173 56.5217 7.66304 54.1304 7.66304C50.4348 7.66304 47.4456 8.91304 45.163 11.413C42.9891 13.5869 41.7391 16.4674 41.413 20.0543C42.8261 18.3152 45.1087 17.4456 48.2609 17.4456C51.5217 17.4456 54.2935 18.587 56.5761 20.8696C58.8587 23.0435 60 25.9239 60 29.5109C60 33.2065 58.8043 36.25 56.413 38.6413C54.0217 40.9239 50.9783 42.0652 47.2826 42.0652Z" fill="#EB662B"></path>
                      </svg>
                    </div>

                    <div class="text-20 lh-18 md:text-18 fw-500 mt-60 md:mt-30">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-60 md:mt-30">
                      <div class="text-16 fw-500 lh-14">Ali Tufan</div>
                      <div class="lh-14">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

              </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>

          <div class="col-12">
            <div class="testimonialsPagination -type-2 pt-30 testimonialsSlider_2-pagination js-testimonialsSlider_1-pagination">

              <div class="testimonialsPagination__item is-active">
                <div>
                  <img src="{{asset('front_assets/img/avatars/2/1.jpg')}}" alt="person">
                </div>
              </div>

              <div class="testimonialsPagination__item ">
                <div>
                  <img src="{{asset('front_assets/img/avatars/2/2.jpg')}}" alt="person">
                </div>
              </div>

              <div class="testimonialsPagination__item ">
                <div>
                  <img src="{{asset('front_assets/img/avatars/2/3.jpg')}}" alt="person">
                </div>
              </div>

              <div class="testimonialsPagination__item ">
                <div>
                  <img src="{{asset('front_assets/img/avatars/2/4.jpg')}}" alt="person">
                </div>
              </div>

              <div class="testimonialsPagination__item ">
                <div>
                  <img src="{{asset('front_assets/img/avatars/2/5.jpg')}}" alt="person">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="layout-pt-xl">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="text-30 md:text-24">What to know before visiting Phuket</h2>
          </div>
        </div>

        <div class="row y-gap-20 pt-30">
          <div class="col-lg-8">
            <p>
              Phuket is a shining example of a metropolis at the highest peak of modernity and boasts an economy and cultural diversity that’s the envy of other global superpowers.
              <br><br>
              Take the opportunity to acquaint yourself with its fascinating history chronicled by institutions like the British Museum as well as see how far it has come by simply riding the Tube and passing by celebrated landmarks like Buckingham Palace, Westminster Abbey, and marvels like Big Ben, the London Eye, and the Tower Bridge.
              <br><br>
              You can also immerse yourself in its ever-evolving and impactful culture by visiting places like the National Gallery, the Tate Modern, West End, Abbey Road, the Royal Albert Hall, Oxford Street and the Westfield Shopping Centers, and areas referenced and seen in literature and film.
            </p>
          </div>

          <div class="col-lg-4">
            <div class="mapTourSingle2">
              <div class="map__content rounded-12 js-map-single"><div style="height: 100%; width: 100%;"><div style="overflow: hidden; width: 350px; height: 250px;"><img alt="" src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i308514&amp;2i393784&amp;2e1&amp;3u12&amp;4m2&amp;1u350&amp;2u250&amp;5m6&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;14i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=129069" style="width: 350px; height: 250px;"></div></div></div>

              <div class="mapTourSingle2__button">
                <button class="button -md -dark-1 bg-white fw-500 col-12">
                  <i class="icon-pin text-20 mr-10"></i>
                  See popular activities on the map
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="line mt-40 mb-40"></div>

        <div class="row y-gap-20">
          <div class="col-12">
            <h3 class="text-20 fw-500">Local weather</h3>
          </div>


          <div class="col-lg-3 col-6">
            <div>DEC - FEB</div>

            <div class="d-flex text-20 fw-500 pt-5">
              <span>7°</span>
              <span class="ml-20">3°</span>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div>MAR - MAY</div>

            <div class="d-flex text-20 fw-500 pt-5">
              <span>17°</span>
              <span class="ml-20">3°</span>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div>JUN - AUG</div>

            <div class="d-flex text-20 fw-500 pt-5">
              <span>27°</span>
              <span class="ml-20">3°</span>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div>SEP - NOV</div>

            <div class="d-flex text-20 fw-500 pt-5">
              <span>7°</span>
              <span class="ml-20">3°</span>
            </div>
          </div>

        </div>

        <div class="line mt-40 mb-40"></div>

        <div class="row y-gap-20">
          <div class="col-12">
            <h3 class="text-20 fw-500">General info</h3>
          </div>

          <div class="col-lg-3 col-6">
            <div>Time Zone</div>
            <div class="fw-500">GMT +00:00</div>
            <div>3 hours behind</div>
          </div>

          <div class="col-lg-3 col-6">
            <div>Currency</div>
            <div class="fw-500">British Pound</div>
            <div>1USD = 0.76GBP</div>
          </div>

          <div class="col-lg-6 col-6">
            <div>Best time to visit</div>
            <div class="row x-gap-20 y-gap-20">
              <div class="col-auto">
                <div class="fw-500">JUN</div>
                <div>The Queen's Birthday</div>
              </div>
              <div class="col-auto">
                <div class="fw-500">DEC</div>
                <div>A colorful Christmas season</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="layout-pt-xl">
      <div data-anim-wrap="" class="container">
        <div data-anim-child="slide-up" class="row justify-between items-end y-gap-10">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Travel Articles</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="row y-gap-30 pt-40 sm:pt-20">

          <div class="col-lg-4 col-md-6">
            <a href="#" class="blogCard -type-1">
              <div class="blogCard__image ratio ratio-41:30">
                <img src="{{asset('front_assets/img/blogCards/1/1.png')}}" alt="image" class="img-ratio rounded-12">

                <div class="blogCard__badge">Trips</div>
              </div>

              <div class="blogCard__content mt-30">
                <div class="blogCard__info text-14">
                  <div class="lh-13">April 06 2023</div>
                  <div class="blogCard__line"></div>
                  <div class="lh-13">By Ali Tufan</div>
                </div>

                <h3 class="blogCard__title text-18 fw-500 mt-10">Kenya vs Tanzania Safari: The Better African Safari Experience</h3>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6">
            <a href="#" class="blogCard -type-1">
              <div class="blogCard__image ratio ratio-41:30">
                <img src="{{asset('front_assets/img/blogCards/1/2.png')}}" alt="image" class="img-ratio rounded-12">

                <div class="blogCard__badge">Trips</div>
              </div>

              <div class="blogCard__content mt-30">
                <div class="blogCard__info text-14">
                  <div class="lh-13">April 06 2023</div>
                  <div class="blogCard__line"></div>
                  <div class="lh-13">By Ali Tufan</div>
                </div>

                <h3 class="blogCard__title text-18 fw-500 mt-10">Kenya vs Tanzania Safari: The Better African Safari Experience</h3>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6">
            <a href="#" class="blogCard -type-1">
              <div class="blogCard__image ratio ratio-41:30">
                <img src="{{asset('front_assets/img/blogCards/1/3.png')}}" alt="image" class="img-ratio rounded-12">

                <div class="blogCard__badge">Trips</div>
              </div>

              <div class="blogCard__content mt-30">
                <div class="blogCard__info text-14">
                  <div class="lh-13">April 06 2023</div>
                  <div class="blogCard__line"></div>
                  <div class="lh-13">By Ali Tufan</div>
                </div>

                <h3 class="blogCard__title text-18 fw-500 mt-10">Kenya vs Tanzania Safari: The Better African Safari Experience</h3>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>
    <section class="layout-pt-xl">
      <div data-anim-wrap="" class="container">
        <div data-anim-child="slide-up" class="row y-gap-10 justify-between items-end">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Trending destinations</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="row y-gap-30 justify-between xl:justify-center sm:justify-start pt-40 sm:pt-20 mobile-css-slider -w-160">

          <div class="col-xl-auto col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="featureImage -type-1 text-center">
              <div class="featureImage__image mx-auto">
                <img src="{{asset('front_assets/img/destinationCards/1/1.png')}}" alt="image" class="size-130 object-cover rounded-full">
              </div>

              <h3 class="featureImage__title text-16 fw-500 mt-20">Paris</h3>
              <p class="featureImage__text text-14">100+ Tours</p>
            </div>
          </div>

          <div class="col-xl-auto col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="featureImage -type-1 text-center">
              <div class="featureImage__image mx-auto">
                <img src="{{asset('front_assets/img/destinationCards/1/2.png')}}" alt="image" class="size-130 object-cover rounded-full">
              </div>

              <h3 class="featureImage__title text-16 fw-500 mt-20">Singapore</h3>
              <p class="featureImage__text text-14">300+ Tours</p>
            </div>
          </div>

          <div class="col-xl-auto col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="featureImage -type-1 text-center">
              <div class="featureImage__image mx-auto">
                <img src="{{asset('front_assets/img/destinationCards/1/3.png')}}" alt="image" class="size-130 object-cover rounded-full">
              </div>

              <h3 class="featureImage__title text-16 fw-500 mt-20">Roma</h3>
              <p class="featureImage__text text-14">400+ Tours</p>
            </div>
          </div>

          <div class="col-xl-auto col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="featureImage -type-1 text-center">
              <div class="featureImage__image mx-auto">
                <img src="{{asset('front_assets/img/destinationCards/1/4.png')}}" alt="image" class="size-130 object-cover rounded-full">
              </div>

              <h3 class="featureImage__title text-16 fw-500 mt-20">Bangkok</h3>
              <p class="featureImage__text text-14">100+ Tours</p>
            </div>
          </div>

          <div class="col-xl-auto col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="featureImage -type-1 text-center">
              <div class="featureImage__image mx-auto">
                <img src="{{asset('front_assets/img/destinationCards/1/5.png')}}" alt="image" class="size-130 object-cover rounded-full">
              </div>

              <h3 class="featureImage__title text-16 fw-500 mt-20">Bali</h3>
              <p class="featureImage__text text-14">600+ Tours</p>
            </div>
          </div>

          <div class="col-xl-auto col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="featureImage -type-1 text-center">
              <div class="featureImage__image mx-auto">
                <img src="{{asset('front_assets/img/destinationCards/1/6.png')}}" alt="image" class="size-130 object-cover rounded-full">
              </div>

              <h3 class="featureImage__title text-16 fw-500 mt-20">Phuket</h3>
              <p class="featureImage__text text-14">200+ Tours</p>
            </div>
          </div>

          <div class="col-xl-auto col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="featureImage -type-1 text-center">
              <div class="featureImage__image mx-auto">
                <img src="{{asset('front_assets/img/destinationCards/1/7.png')}}" alt="image" class="size-130 object-cover rounded-full">
              </div>

              <h3 class="featureImage__title text-16 fw-500 mt-20">Tokyo</h3>
              <p class="featureImage__text text-14">700+ Tours</p>
            </div>
          </div>

          <div class="col-xl-auto col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="featureImage -type-1 text-center">
              <div class="featureImage__image mx-auto">
                <img src="{{asset('front_assets/img/destinationCards/1/8.png')}}" alt="image" class="size-130 object-cover rounded-full">
              </div>

              <h3 class="featureImage__title text-16 fw-500 mt-20">Cappadocia</h3>
              <p class="featureImage__text text-14">900+ Tours</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="layout-pt-xl layout-pb-xl">
      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">FAQs about Phuket</h2>
          </div>
        </div>

        <div class="row justify-center pt-30">
          <div class="col-xl-8 col-lg-10">
            <div class="accordion -simple row y-gap-20 js-accordion">

              <div class="col-12">
                <div class="accordion__item px-20 py-15 border-1 rounded-12">
                  <div class="accordion__button d-flex items-center justify-between">
                    <div class="button text-16 text-dark-1">Can I get the refund?</div>

                    <div class="accordion__icon size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-plus"></i>
                      <i class="icon-minus"></i>
                    </div>
                  </div>

                  <div class="accordion__content">
                    <div class="pt-20">
                      <p>Phang Nga Bay Sea Cave Canoeing &amp; James Bond Island w/ Buffet Lunch by Big Boat cancellation policy: For a full refund, cancel at least 24 hours in advance of the start date of the experience. Discover and book Phang Nga Bay Sea Cave Canoeing &amp; James Bond Island w/ Buffet Lunch by Big Boat</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="accordion__item px-20 py-15 border-1 rounded-12">
                  <div class="accordion__button d-flex items-center justify-between">
                    <div class="button text-16 text-dark-1">Can I change the travel date?</div>

                    <div class="accordion__icon size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-plus"></i>
                      <i class="icon-minus"></i>
                    </div>
                  </div>

                  <div class="accordion__content">
                    <div class="pt-20">
                      <p>Phang Nga Bay Sea Cave Canoeing &amp; James Bond Island w/ Buffet Lunch by Big Boat cancellation policy: For a full refund, cancel at least 24 hours in advance of the start date of the experience. Discover and book Phang Nga Bay Sea Cave Canoeing &amp; James Bond Island w/ Buffet Lunch by Big Boat</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="accordion__item px-20 py-15 border-1 rounded-12">
                  <div class="accordion__button d-flex items-center justify-between">
                    <div class="button text-16 text-dark-1">When and where does the tour end?</div>

                    <div class="accordion__icon size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-plus"></i>
                      <i class="icon-minus"></i>
                    </div>
                  </div>

                  <div class="accordion__content">
                    <div class="pt-20">
                      <p>Phang Nga Bay Sea Cave Canoeing &amp; James Bond Island w/ Buffet Lunch by Big Boat cancellation policy: For a full refund, cancel at least 24 hours in advance of the start date of the experience. Discover and book Phang Nga Bay Sea Cave Canoeing &amp; James Bond Island w/ Buffet Lunch by Big Boat</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="accordion__item px-20 py-15 border-1 rounded-12">
                  <div class="accordion__button d-flex items-center justify-between">
                    <div class="button text-16 text-dark-1">Do you arrange airport transfers?</div>

                    <div class="accordion__icon size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-plus"></i>
                      <i class="icon-minus"></i>
                    </div>
                  </div>

                  <div class="accordion__content">
                    <div class="pt-20">
                      <p>Phang Nga Bay Sea Cave Canoeing &amp; James Bond Island w/ Buffet Lunch by Big Boat cancellation policy: For a full refund, cancel at least 24 hours in advance of the start date of the experience. Discover and book Phang Nga Bay Sea Cave Canoeing &amp; James Bond Island w/ Buffet Lunch by Big Boat</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
@endsection