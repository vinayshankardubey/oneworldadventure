@extends('front.layout.layout')
@section('content')
@include('front.layout.cssmenu') 
<div data-anim="fade" class="container is-in-view">
      <div class="row justify-between py-30 mt-80">
        <div class="col-auto">
          <div class="text-14">Home &gt; Tours &gt; Phuket</div>
        </div>

        <div class="col-auto">
          <div class="text-14">THE 10 BEST Phuket Tours &amp; Excursions</div>
        </div>
      </div>
    </div>
    <section class="">
      <div data-anim-wrap="" class="container animated">
        <div data-anim-child="slide-up" class="row y-gap-20 justify-between items-end is-in-view">
          <div class="col-auto">
            <div class="row x-gap-10 y-gap-10 items-center">
              <div class="col-auto">
                <button class="button -accent-1 text-14 py-5 px-15 bg-accent-1-05 text-accent-1 rounded-200">Bestseller</button>
              </div>
              <div class="col-auto">
                <button class="button -accent-1 text-14 py-5 px-15 bg-light-1 rounded-200">Free cancellation</button>
              </div>
            </div>

            <h2 class="text-40 sm:text-30 lh-14 mt-20">
              Phi Phi Islands Adventure Day Trip with<br>
              Seaview Lunch
            </h2>

            <div class="row x-gap-20 y-gap-20 items-center pt-20">
              <div class="col-auto">
                <div class="d-flex items-center">
                  <div class="d-flex x-gap-5 pr-10">

                    <i class="flex-center icon-star text-yellow-2 text-12"></i>

                    <i class="flex-center icon-star text-yellow-2 text-12"></i>

                    <i class="flex-center icon-star text-yellow-2 text-12"></i>

                    <i class="flex-center icon-star text-yellow-2 text-12"></i>

                    <i class="flex-center icon-star text-yellow-2 text-12"></i>

                  </div>
                  4.8 (269)
                </div>
              </div>

              <div class="col-auto">
                <div class="d-flex items-center">
                  <i class="icon-pin text-16 mr-5"></i>
                  Paris, France
                </div>
              </div>

              <div class="col-auto">
                <div class="d-flex items-center">
                  <i class="icon-reservation text-16 mr-5"></i>
                  30K+ booked
                </div>
              </div>
            </div>
          </div>

          <div class="col-auto">
            <div class="d-flex x-gap-30 y-gap-10">
              <a href="#" class="d-flex items-center">
                <i class="icon-share flex-center text-16 mr-10"></i>
                Share
              </a>

              <a href="#" class="d-flex items-center">
                <i class="icon-heart flex-center text-16 mr-10"></i>
                Wishlist
              </a>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="tourSingleGrid -type-1 mt-30 is-in-view">
          <div class="tourSingleGrid__grid mobile-css-slider-2">
            <img src="{{asset('front_assets/img/tourSingle/1/1.png')}}" alt="image">
            <img src="{{asset('front_assets/img/tourSingle/1/2.png')}}" alt="image">
            <img src="{{asset('front_assets/img/tourSingle/1/3.png')}}" alt="image">
            <img src="{{asset('front_assets/img/tourSingle/1/4.png')}}" alt="image">
          </div>

          <div class="tourSingleGrid__button">
            <a href="{{asset('front_assets/img/tourSingle/1/1.png')}}" class="js-gallery" data-gallery="gallery1">
              <span class="button -accent-1 py-10 px-20 rounded-200 bg-dark-1 lh-16 text-white">See all photos</span>
            </a>
            <a href="{{asset('front_assets/img/tourSingle/1/2.png')}}" class="js-gallery" data-gallery="gallery1"></a>
            <a href="{{asset('front_assets/img/tourSingle/1/3.png')}}" class="js-gallery" data-gallery="gallery1"></a>
            <a href="{{asset('front_assets/img/tourSingle/1/4.png')}}" class="js-gallery" data-gallery="gallery1"></a>
          </div>
        </div>
      </div>
    </section>
    <section class="layout-pt-md js-pin-container">
      <div class="container">
        <div class="row y-gap-30 justify-between">
          <div class="col-lg-8">
            <div class="row y-gap-20 justify-between items-center layout-pb-md">

              <div class="col-lg-3 col-6">
                <div class="d-flex items-center">
                  <div class="flex-center size-50 rounded-12 border-1">
                    <i class="text-20 icon-clock"></i>
                  </div>

                  <div class="ml-10">
                    <div class="lh-16">Duration</div>
                    <div class="text-14 text-light-2 lh-16">3 days</div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="d-flex items-center">
                  <div class="flex-center size-50 rounded-12 border-1">
                    <i class="text-20 icon-teamwork"></i>
                  </div>

                  <div class="ml-10">
                    <div class="lh-16">Group Size</div>
                    <div class="text-14 text-light-2 lh-16">10 people</div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="d-flex items-center">
                  <div class="flex-center size-50 rounded-12 border-1">
                    <i class="text-20 icon-birthday-cake"></i>
                  </div>

                  <div class="ml-10">
                    <div class="lh-16">Ages</div>
                    <div class="text-14 text-light-2 lh-16">18-99 yrs</div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="d-flex items-center">
                  <div class="flex-center size-50 rounded-12 border-1">
                    <i class="text-20 icon-translate"></i>
                  </div>

                  <div class="ml-10">
                    <div class="lh-16">Languages</div>
                    <div class="text-14 text-light-2 lh-16">English, Japanese</div>
                  </div>
                </div>
              </div>

            </div>

            <h2 class="text-30">Tour Overview</h2>
            <p class="mt-20">The Phi Phi archipelago is a must-visit while in Phuket, and this speedboat trip whisks you around the islands in one day. Swim over the coral reefs of Pileh Lagoon, have lunch at Phi Phi Leh, snorkel at Bamboo Island, and visit Monkey Beach and Maya Bay, immortalized in "The Beach." Boat transfers, snacks, buffet lunch, snorkeling equipment, and Phuket hotel pickup and drop-off all included.</p>

            <h3 class="text-20 fw-500 mt-20">Tour Highlights</h3>
            <ul class="ulList mt-20">
              <li>Experience the thrill of a speedboat to the stunning Phi Phi Islands</li>
              <li>Be amazed by the variety of marine life in the archepelago</li>
              <li>Enjoy relaxing in paradise with white sand beaches and azure turquoise water</li>
              <li>Feel the comfort of a tour limited to 35 passengers</li>
              <li>Catch a glimpse of the wild monkeys around Monkey Beach</li>
            </ul>


            <div class="line mt-60 mb-60"></div>


            <h2 class="text-30">What's included</h2>

            <div class="row x-gap-130 y-gap-20 pt-20">
              <div class="col-lg-6">
                <div class="y-gap-15">
                  <div class="d-flex">
                    <i class="icon-check flex-center text-10 size-24 rounded-full text-green-2 bg-green-1 mr-15"></i>
                    Beverages, drinking water, morning tea and buffet lunch
                  </div>
                  <div class="d-flex">
                    <i class="icon-check flex-center text-10 size-24 rounded-full text-green-2 bg-green-1 mr-15"></i>
                    Local taxes
                  </div>
                  <div class="d-flex">
                    <i class="icon-check flex-center text-10 size-24 rounded-full text-green-2 bg-green-1 mr-15"></i>
                    Hotel pickup and drop-off by air-conditioned minivan
                  </div>
                  <div class="d-flex">
                    <i class="icon-check flex-center text-10 size-24 rounded-full text-green-2 bg-green-1 mr-15"></i>
                    InsuranceTransfer to a private pier
                  </div>
                  <div class="d-flex">
                    <i class="icon-check flex-center text-10 size-24 rounded-full text-green-2 bg-green-1 mr-15"></i>
                    Soft drinks
                  </div>
                  <div class="d-flex">
                    <i class="icon-check flex-center text-10 size-24 rounded-full text-green-2 bg-green-1 mr-15"></i>
                    Tour Guide
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="y-gap-15">
                  <div class="d-flex">
                    <i class="icon-cross flex-center text-10 size-24 rounded-full text-red-3 bg-red-4 mr-15"></i>
                    Towel
                  </div>
                  <div class="d-flex">
                    <i class="icon-cross flex-center text-10 size-24 rounded-full text-red-3 bg-red-4 mr-15"></i>
                    Tips
                  </div>
                  <div class="d-flex">
                    <i class="icon-cross flex-center text-10 size-24 rounded-full text-red-3 bg-red-4 mr-15"></i>
                    Alcoholic Beverages
                  </div>
                </div>
              </div>
            </div>


            <div class="line mt-60 mb-60"></div>


            <h2 class="text-30">Itinerary</h2>

            <div class="mt-30">
              <div class="roadmap accordion -roadmap js-accordion">
                <div class="roadmap__item accordion__item js-accordion-item-active is-active">
                  <div class="roadmap__iconBig">
                    <i class="icon-pin"></i>
                  </div>
                  <div class="roadmap__wrap">
                    <div class="accordion__button d-flex items-center justify-between">
                      <div class="roadmap__title">Day 1: Airport Pick Up</div>
                    </div>

                    <div class="accordion__content" style="max-height: 99px;">
                      <div class="roadmap__content">
                        Like on all of our trips, we can collect you from the airport when you land and take you directly to your hotel. The first Day is just a check-in Day so you have this freedom to explore the city and get settled in.
                      </div>
                    </div>
                  </div>
                </div>


                <div class="roadmap__item accordion__item">
                  <div class="roadmap__icon"></div>
                  <div class="roadmap__wrap">
                    <div class="accordion__button d-flex items-center justify-between">
                      <div class="roadmap__title">Day 2: Temples &amp; River Cruise</div>
                    </div>

                    <div class="accordion__content">
                      <div class="roadmap__content">
                        Like on all of our trips, we can collect you from the airport when you land and take you directly to your hotel. The first Day is just a check-in Day so you have this freedom to explore the city and get settled in.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="roadmap__item accordion__item">
                  <div class="roadmap__icon"></div>
                  <div class="roadmap__wrap">
                    <div class="accordion__button d-flex items-center justify-between">
                      <div class="roadmap__title">Day 3: Massage &amp; Overnight Train</div>
                    </div>

                    <div class="accordion__content">
                      <div class="roadmap__content">
                        Like on all of our trips, we can collect you from the airport when you land and take you directly to your hotel. The first Day is just a check-in Day so you have this freedom to explore the city and get settled in.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="roadmap__item accordion__item">
                  <div class="roadmap__icon"></div>
                  <div class="roadmap__wrap">
                    <div class="accordion__button d-flex items-center justify-between">
                      <div class="roadmap__title">Day 4: Khao Sok National Park</div>
                    </div>

                    <div class="accordion__content">
                      <div class="roadmap__content">
                        Like on all of our trips, we can collect you from the airport when you land and take you directly to your hotel. The first Day is just a check-in Day so you have this freedom to explore the city and get settled in.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="roadmap__item accordion__item">
                  <div class="roadmap__icon"></div>
                  <div class="roadmap__wrap">
                    <div class="accordion__button d-flex items-center justify-between">
                      <div class="roadmap__title">Day 5: Travel to Koh Phangan</div>
                    </div>

                    <div class="accordion__content">
                      <div class="roadmap__content">
                        Like on all of our trips, we can collect you from the airport when you land and take you directly to your hotel. The first Day is just a check-in Day so you have this freedom to explore the city and get settled in.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="roadmap__item accordion__item">
                  <div class="roadmap__icon"></div>
                  <div class="roadmap__wrap">
                    <div class="accordion__button d-flex items-center justify-between">
                      <div class="roadmap__title">Day 6: Morning Chill &amp; Muay Thai Lesson</div>
                    </div>

                    <div class="accordion__content">
                      <div class="roadmap__content">
                        Like on all of our trips, we can collect you from the airport when you land and take you directly to your hotel. The first Day is just a check-in Day so you have this freedom to explore the city and get settled in.
                      </div>
                    </div>
                  </div>
                </div>


                <div class="roadmap__item accordion__item">
                  <div class="roadmap__iconBig">
                    <i class="icon-flag"></i>
                  </div>
                  <div class="roadmap__wrap">
                    <div class="accordion__button d-flex items-center justify-between">
                      <div class="roadmap__title">Day 7: Island Boat Trip</div>
                    </div>

                    <div class="accordion__content">
                      <div class="roadmap__content">
                        Like on all of our trips, we can collect you from the airport when you land and take you directly to your hotel. The first Day is just a check-in Day so you have this freedom to explore the city and get settled in.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <h2 class="text-30 mt-60 mb-30">Tour Map</h2>
            <div class="mapTourSingle">
              <div class="map__content rounded-12 js-map-tour" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button></div><div tabindex="0" aria-label="Map" aria-roledescription="map" role="region" aria-describedby="3D7F0171-6170-41C6-A58C-0355C1FE26F5" style="position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div id="3D7F0171-6170-41C6-A58C-0355C1FE26F5" style="display: none;"><div class="LGLeeN-keyboard-shortcuts-view"><table><tbody><tr><td><kbd aria-label="Left arrow">←</kbd></td><td aria-label="Move left.">Move left</td></tr><tr><td><kbd aria-label="Right arrow">→</kbd></td><td aria-label="Move right.">Move right</td></tr><tr><td><kbd aria-label="Up arrow">↑</kbd></td><td aria-label="Move up.">Move up</td></tr><tr><td><kbd aria-label="Down arrow">↓</kbd></td><td aria-label="Move down.">Move down</td></tr><tr><td><kbd>+</kbd></td><td aria-label="Zoom in.">Zoom in</td></tr><tr><td><kbd>-</kbd></td><td aria-label="Zoom out.">Zoom out</td></tr><tr><td><kbd>Home</kbd></td><td aria-label="Jump left by 75%.">Jump left by 75%</td></tr><tr><td><kbd>End</kbd></td><td aria-label="Jump right by 75%.">Jump right by 75%</td></tr><tr><td><kbd>Page Up</kbd></td><td aria-label="Jump up by 75%.">Jump up by 75%</td></tr><tr><td><kbd>Page Down</kbd></td><td aria-label="Jump down by 75%.">Jump down by 75%</td></tr></tbody></table></div></div></div><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 990; transform: matrix(1, 0, 0, 1, -116, -173);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 990; transform: matrix(1, 0, 0, 1, -116, -173);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i384!4i256!2m3!1e0!2sm!3i719476906!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=32439" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i384!4i256!2m3!1e0!2sm!3i719476906!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=96994" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i383!4i256!2m3!1e0!2sm!3i719476906!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=23199" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i383!4i256!2m3!1e0!2sm!3i719476906!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=89715" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i383!4i256!2m3!1e0!2sm!3i719476906!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=25160" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i384!4i256!2m3!1e0!2sm!3i719476906!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=98955" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i385!4i256!2m3!1e0!2sm!3i719476906!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=41679" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i385!4i256!2m3!1e0!2sm!3i719476906!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=106234" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i385!4i256!2m3!1e0!2sm!3i719476906!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;token=39718" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><span id="1E231C2C-5303-4B4A-AC7A-3F4132FFB05D" style="display: none;">To navigate, press the arrow keys.</span><div style="position: absolute; left: -10.818px; top: -0.301858px;">
        <div class="mapMarker button -outline-accent-1 flex-center bg-white rounded-200 border-accent-1 size-40 text-accent-1">
          <div class="text-14 fw-500">1</div>
        </div>
      </div><div style="position: absolute; left: -83.6358px; top: -192.981px;">
        <div class="mapMarker button -outline-accent-1 flex-center bg-white rounded-200 border-accent-1 size-40 text-accent-1">
          <div class="text-14 fw-500">2</div>
        </div>
      </div><div style="position: absolute; left: 134.818px; top: 95.8199px;">
        <div class="mapMarker button -outline-accent-1 flex-center bg-white rounded-200 border-accent-1 size-40 text-accent-1">
          <div class="text-14 fw-500">3</div>
        </div>
      </div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; transition-property: opacity, display; opacity: 0; display: none;"><p class="gm-style-mot"></p></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none; opacity: 0;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div><div></div><div></div><div></div><div></div><div><button draggable="false" aria-label="Toggle fullscreen view" title="Toggle fullscreen view" type="button" aria-pressed="false" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div><div></div><div></div><div></div><div></div><div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" data-control-width="40" data-control-height="113" style="margin: 10px; user-select: none; position: absolute; bottom: 127px; right: 40px;"><div class="gmnoprint" data-control-width="40" data-control-height="40" style="display: none; position: absolute;"><div style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;"><button draggable="false" aria-label="Rotate map clockwise" title="Rotate map clockwise" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div><button draggable="false" aria-label="Rotate map counterclockwise" title="Rotate map counterclockwise" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div><button draggable="false" aria-label="Tilt map" title="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"></button></div></div><button draggable="false" aria-label="Drag Pegman onto the map to open Street View" title="Drag Pegman onto the map to open Street View" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; left: 20px; top: 0px;"></button><div class="gmnoprint" data-control-width="40" data-control-height="81" style="position: absolute; left: 0px; top: 32px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" aria-label="Zoom in" title="Zoom in" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" aria-label="Zoom out" title="Zoom out" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div></div></div></div><div><div style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" title="Open this area in Google Maps (opens a new window)" aria-label="Open this area in Google Maps (opens a new window)" href="https://maps.google.com/maps?ll=40.8,-74.02&amp;z=10&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" style="display: inline;"><div style="width: 66px; height: 26px;"><img alt="Google" src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.6%22%20fill%3D%22%23fff%22%20stroke%3D%22%23fff%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39011%2024.8656%209.39011%2021.7783%209.39011%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2962%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39011%2035.7387%209.39011%2032.6513%209.39011%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22083v-.75H52.0788V20.4412H55.7387V5.220829999999999z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594z%22%20fill%3D%22%23E94235%22/%3E%3Cpath%20d%3D%22M40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594z%22%20fill%3D%22%23FABB05%22/%3E%3Cpath%20d%3D%22M51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M54.9887%205.22083V19.6912H52.8288V5.220829999999999H54.9887z%22%20fill%3D%22%2334A853%22/%3E%3Cpath%20d%3D%22M63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23E94235%22/%3E%3C/svg%3E" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div></div><div></div><div><div style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;"><div class="gmnoprint" style="z-index: 1000001;"><div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Keyboard shortcuts</button></div></div></div><div class="gmnoprint" style="z-index: 1000001;"><div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Map Data" title="Map Data" type="button" style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;">Map Data</button><span style="">Map data ©2025 Google</span></div></div></div><div class="gmnoscreen"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2025 Google</div></div><button draggable="false" aria-label="Map Scale: 5 km per 43 pixels" title="Map Scale: 5 km per 43 pixels" type="button" class="gm-style-cc" aria-describedby="630BFCF7-D088-40D2-A13F-DAB853CA53AE" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span style="color: rgb(0, 0, 0);">5 km&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 47px;"><div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 4px; height: 8px; left: 0px; top: 0px;"></div><div style="width: 4px; height: 8px; position: absolute; right: 0px; bottom: 0px;"></div><div style="position: absolute; background-color: rgb(0, 0, 0); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div><div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(0, 0, 0);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(0, 0, 0); bottom: 1px; right: 1px;"></div></div></div><span id="630BFCF7-D088-40D2-A13F-DAB853CA53AE" style="display: none;">Click to toggle between metric and imperial units</span></button><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms</a></div></div><div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" dir="ltr" href="https://www.google.com/maps/@40.8,-74.02,10z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; text-decoration: none; position: relative; color: rgb(0, 0, 0);">Report a map error</a></div></div></div></div></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps correctly.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="http://g.co/dev/maps-no-account" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this website?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div></div>
            </div>


            <div class="line mt-60 mb-60"></div>


            <h2 class="text-30">Availability Calendar</h2>

            <div class="searchMenu-date mt-30 js-form-dd js-calendar js-calendar-el" data-slider-cols-2="true">
              <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                <div class="bg-white rounded-4">
                  <div class="elCalendar js-calendar-el-calendar">
        <div class="elCalendar__slider js-calendar-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight">
          <div class="swiper-wrapper" id="swiper-wrapper-3ce4c8d9810027e9e" aria-live="polite" style="height: 348px;">
            
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="3 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="4 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="5 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="6 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="7 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="8 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="9 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="10 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="11 / 12" style="width: 350px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="12 / 12" style="width: 350px; margin-right: 30px;">
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

          <button class="elCalendar__sliderNav -prev flex-center js-calendar-slider-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-3ce4c8d9810027e9e" aria-disabled="true">
            <i class="icon-arrow-left text-20"></i>
          </button>

          <button class="elCalendar__sliderNav -next flex-center js-calendar-slider-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-3ce4c8d9810027e9e" aria-disabled="false">
            <i class="icon-arrow-right text-20"></i>
          </button>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
      </div>
                </div>
              </div>
            </div>


            <div class="line mt-60 mb-60"></div>


            <h2 class="text-30">FAQ</h2>

            <div class="accordion -simple row y-gap-20 mt-30 js-accordion">

              <div class="col-12">
                <div class="accordion__item px-20 py-15 border-1 rounded-12">
                  <div class="accordion__button d-flex items-center justify-between">
                    <div class="button text-16 text-dark-1">Can I get the refund?</div>

                    <div class="accordion__icon size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-plus text-13"></i>
                      <i class="icon-minus text-13"></i>
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
                      <i class="icon-plus text-13"></i>
                      <i class="icon-minus text-13"></i>
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
                      <i class="icon-plus text-13"></i>
                      <i class="icon-minus text-13"></i>
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
                      <i class="icon-plus text-13"></i>
                      <i class="icon-minus text-13"></i>
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


            <div class="line mt-60 mb-60"></div>


            <h2 class="text-30">Customer Reviews</h2>


            <div class="overallRating mt-30">
              <div class="overallRating__list">

                <div class="overallRating__item">
                  <div class="overallRating__content">
                    <div class="overallRating__icon">
                      <i class="icon-star-2 text-30 text-accent-1"></i>
                    </div>

                    <div class="overallRating__info">
                      <h5 class="text-16 fw-500">Overall Rating</h5>
                      <div class="lh-15">Excellent</div>
                    </div>
                  </div>

                  <div class="overallRating__rating d-flex items-center">
                    <i class="icon-star text-yellow-2 text-16"></i>
                    <div class="text-16 fw-500 ml-10">5.0</div>
                  </div>
                </div>

                <div class="overallRating__item">
                  <div class="overallRating__content">
                    <div class="overallRating__icon">
                      <i class="icon-pin-2 text-30 text-accent-1"></i>
                    </div>

                    <div class="overallRating__info">
                      <h5 class="text-16 fw-500">Location</h5>
                      <div class="lh-15">Excellent</div>
                    </div>
                  </div>

                  <div class="overallRating__rating d-flex items-center">
                    <i class="icon-star text-yellow-2 text-16"></i>
                    <div class="text-16 fw-500 ml-10">5.0</div>
                  </div>
                </div>

                <div class="overallRating__item">
                  <div class="overallRating__content">
                    <div class="overallRating__icon">
                      <i class="icon-application text-30 text-accent-1"></i>
                    </div>

                    <div class="overallRating__info">
                      <h5 class="text-16 fw-500">Amenities</h5>
                      <div class="lh-15">Excellent</div>
                    </div>
                  </div>

                  <div class="overallRating__rating d-flex items-center">
                    <i class="icon-star text-yellow-2 text-16"></i>
                    <div class="text-16 fw-500 ml-10">5.0</div>
                  </div>
                </div>

                <div class="overallRating__item">
                  <div class="overallRating__content">
                    <div class="overallRating__icon">
                      <i class="icon-utensils text-30 text-accent-1"></i>
                    </div>

                    <div class="overallRating__info">
                      <h5 class="text-16 fw-500">Food</h5>
                      <div class="lh-15">Excellent</div>
                    </div>
                  </div>

                  <div class="overallRating__rating d-flex items-center">
                    <i class="icon-star text-yellow-2 text-16"></i>
                    <div class="text-16 fw-500 ml-10">5.0</div>
                  </div>
                </div>

                <div class="overallRating__item">
                  <div class="overallRating__content">
                    <div class="overallRating__icon">
                      <i class="icon-price-tag text-30 text-accent-1"></i>
                    </div>

                    <div class="overallRating__info">
                      <h5 class="text-16 fw-500">Price</h5>
                      <div class="lh-15">Excellent</div>
                    </div>
                  </div>

                  <div class="overallRating__rating d-flex items-center">
                    <i class="icon-star text-yellow-2 text-16"></i>
                    <div class="text-16 fw-500 ml-10">5.0</div>
                  </div>
                </div>

                <div class="overallRating__item">
                  <div class="overallRating__content">
                    <div class="overallRating__icon">
                      <i class="icon-bed-2 text-30 text-accent-1"></i>
                    </div>

                    <div class="overallRating__info">
                      <h5 class="text-16 fw-500">Rooms</h5>
                      <div class="lh-15">Excellent</div>
                    </div>
                  </div>

                  <div class="overallRating__rating d-flex items-center">
                    <i class="icon-star text-yellow-2 text-16"></i>
                    <div class="text-16 fw-500 ml-10">5.0</div>
                  </div>
                </div>

                <div class="overallRating__item">
                  <div class="overallRating__content">
                    <div class="overallRating__icon">
                      <i class="icon-online-support-2 text-30 text-accent-1"></i>
                    </div>

                    <div class="overallRating__info">
                      <h5 class="text-16 fw-500">Tour Operator</h5>
                      <div class="lh-15">Excellent</div>
                    </div>
                  </div>

                  <div class="overallRating__rating d-flex items-center">
                    <i class="icon-star text-yellow-2 text-16"></i>
                    <div class="text-16 fw-500 ml-10">5.0</div>
                  </div>
                </div>

              </div>
            </div>


            <div class="pt-30">
              <div class="row justify-between">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="size-40 rounded-full">
                      <img src="{{asset('front_assets/img/reviews/avatars/1.png')}}" alt="image" class="img-cover">
                    </div>

                    <div class="text-16 fw-500 ml-20">Ali Tufan</div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-2">April 2023</div>
                </div>
              </div>

              <div class="d-flex items-center mt-15">
                <div class="d-flex x-gap-5">

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                </div>
                <div class="text-16 fw-500 ml-10">Take this tour! Its fantastic!</div>
              </div>

              <p class="mt-10">Great for 4-5 hours to explore. Really a lot to see and tons of photo spots. Even have a passport for you to collect all the stamps as a souvenir. Must see for a Harry Potter fan.</p>

              <div class="row x-gap-20 y-gap-20 pt-20">

                <div class="col-auto">
                  <div class="size-130">
                    <img src="{{asset('front_assets/img/reviews/1/1.png')}}" alt="image" class="img-cover rounded-12">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="size-130">
                    <img src="{{asset('front_assets/img/reviews/1/2.png')}}" alt="image" class="img-cover rounded-12">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="size-130">
                    <img src="{{asset('front_assets/img/reviews/1/3.png')}}" alt="image" class="img-cover rounded-12">
                  </div>
                </div>

              </div>

              <div class="d-flex x-gap-30 items-center mt-20">
                <div>
                  <a href="#" class="d-flex items-center">
                    <i class="icon-like text-16 mr-10"></i>
                    Helpful
                  </a>
                </div>
                <div>
                  <a href="#" class="d-flex items-center">
                    <i class="icon-dislike text-16 mr-10"></i>
                    Not helpful
                  </a>
                </div>
              </div>
            </div>

            <div class="pt-30">
              <div class="row justify-between">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="size-40 rounded-full">
                      <img src="{{asset('front_assets/img/reviews/avatars/1.png')}}" alt="image" class="img-cover">
                    </div>

                    <div class="text-16 fw-500 ml-20">Ali Tufan</div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-2">April 2023</div>
                </div>
              </div>

              <div class="d-flex items-center mt-15">
                <div class="d-flex x-gap-5">

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                </div>
                <div class="text-16 fw-500 ml-10">Take this tour! Its fantastic!</div>
              </div>

              <p class="mt-10">Great for 4-5 hours to explore. Really a lot to see and tons of photo spots. Even have a passport for you to collect all the stamps as a souvenir. Must see for a Harry Potter fan.</p>

              <div class="row x-gap-20 y-gap-20 pt-20">

                <div class="col-auto">
                  <div class="size-130">
                    <img src="{{asset('front_assets/img/reviews/1/1.png')}}" alt="image" class="img-cover rounded-12">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="size-130">
                    <img src="{{asset('front_assets/img/reviews/1/2.png')}}" alt="image" class="img-cover rounded-12">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="size-130">
                    <img src="{{asset('front_assets/img/reviews/1/3.png')}}" alt="image" class="img-cover rounded-12">
                  </div>
                </div>

              </div>

              <div class="d-flex x-gap-30 items-center mt-20">
                <div>
                  <a href="#" class="d-flex items-center">
                    <i class="icon-like text-16 mr-10"></i>
                    Helpful
                  </a>
                </div>
                <div>
                  <a href="#" class="d-flex items-center">
                    <i class="icon-dislike text-16 mr-10"></i>
                    Not helpful
                  </a>
                </div>
              </div>
            </div>

            <div class="pt-30">
              <div class="row justify-between">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="size-40 rounded-full">
                      <img src="{{asset('front_assets/img/reviews/avatars/1.png')}}" alt="image" class="img-cover">
                    </div>

                    <div class="text-16 fw-500 ml-20">Ali Tufan</div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-2">April 2023</div>
                </div>
              </div>

              <div class="d-flex items-center mt-15">
                <div class="d-flex x-gap-5">

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                  <i class="icon-star text-yellow-2 text-10"></i>

                </div>
                <div class="text-16 fw-500 ml-10">Take this tour! Its fantastic!</div>
              </div>

              <p class="mt-10">Great for 4-5 hours to explore. Really a lot to see and tons of photo spots. Even have a passport for you to collect all the stamps as a souvenir. Must see for a Harry Potter fan.</p>

              <div class="row x-gap-20 y-gap-20 pt-20">

                <div class="col-auto">
                  <div class="size-130">
                    <img src="{{asset('front_assets/img/reviews/1/1.png')}}" alt="image" class="img-cover rounded-12">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="size-130">
                    <img src="{{asset('front_assets/img/reviews/1/2.png')}}" alt="image" class="img-cover rounded-12">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="size-130">
                    <img src="{{asset('front_assets/img/reviews/1/3.png')}}" alt="image" class="img-cover rounded-12">
                  </div>
                </div>

              </div>

              <div class="d-flex x-gap-30 items-center mt-20">
                <div>
                  <a href="#" class="d-flex items-center">
                    <i class="icon-like text-16 mr-10"></i>
                    Helpful
                  </a>
                </div>
                <div>
                  <a href="#" class="d-flex items-center">
                    <i class="icon-dislike text-16 mr-10"></i>
                    Not helpful
                  </a>
                </div>
              </div>
            </div>


            <button class="button -md -outline-accent-1 text-accent-1 mt-30">
              See more reviews
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>


            <h2 class="text-30 pt-60">Leave a Reply</h2>
            <p class="mt-30">Your email address will not be published. Required fields are marked *</p>

            <div class="reviewsGrid pt-30">

              <div class="reviewsGrid__item">
                Location

                <div class="d-flex x-gap-5 pl-20">

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                </div>
              </div>

              <div class="reviewsGrid__item">
                Amenities

                <div class="d-flex x-gap-5 pl-20">

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                </div>
              </div>

              <div class="reviewsGrid__item">
                Food

                <div class="d-flex x-gap-5 pl-20">

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                </div>
              </div>

              <div class="reviewsGrid__item">
                Room

                <div class="d-flex x-gap-5 pl-20">

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                </div>
              </div>

              <div class="reviewsGrid__item">
                Price

                <div class="d-flex x-gap-5 pl-20">

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                </div>
              </div>

              <div class="reviewsGrid__item">
                Tour Operator

                <div class="d-flex x-gap-5 pl-20">

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                  <i class="icon-star text-10 text-yellow-2"></i>

                </div>
              </div>

            </div>

            <div class="contactForm y-gap-30 pt-30">
              <div class="row y-gap-30">
                <div class="col-md-6">

                  <div class="form-input ">
                    <input type="text" required="">
                    <label class="lh-1 text-16 text-light-1">Name</label>
                  </div>

                </div>

                <div class="col-md-6">

                  <div class="form-input ">
                    <input type="email" required="">
                    <label class="lh-1 text-16 text-light-1">Email</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <div class="form-input ">
                    <input type="text" required="">
                    <label class="lh-1 text-16 text-light-1">Title</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <div class="form-input ">
                    <textarea required="" rows="5"></textarea>
                    <label class="lh-1 text-16 text-light-1">Comment</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <button class="button -md -dark-1 bg-accent-1 text-white">
                    Post Comment
                    <i class="icon-arrow-top-right text-16 ml-10"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" style="">
            <div data-scrollmagic-pin-spacer="" class="scrollmagic-pin-spacer" style="inset: auto; margin: 0px; display: flex; position: relative; box-sizing: content-box; min-height: 774px; height: auto; padding-top: 4635px; padding-bottom: 0px;"><div class="d-flex justify-end js-pin-content" style="position: relative; margin: auto; inset: 0px auto auto 0px; box-sizing: border-box; width: 100%;">
              <div class="tourSingleSidebar">
                <div class="d-flex items-center">
                  <div>From</div>
                  <div class="text-20 fw-500 ml-10">$1,200</div>
                </div>

                <div class="searchForm -type-1 -sidebar mt-20">
                  <div class="searchForm__form">
                    <div class="searchFormItem js-select-control js-form-dd js-calendar">
                      <div class="searchFormItem__button" data-x-click="calendar">
                        <div class="searchFormItem__icon size-50 rounded-12 bg-light-1 flex-center">
                          <i class="text-20 icon-calendar"></i>
                        </div>
                        <div class="searchFormItem__content">
                          <h5>From</h5>
                          <div>
                            <span class="js-first-date">Add dates</span>
                            <span class="js-last-date"></span>
                          </div>
                        </div>
                        <div class="searchFormItem__icon_chevron">
                          <i class="icon-chevron-down d-flex text-18"></i>
                        </div>
                      </div>


                      <div class="searchFormItemDropdown -calendar" data-x="calendar" data-x-toggle="is-active">
                        <div class="searchFormItemDropdown__container">

                          <div class="searchMenu-date -searchForm js-form-dd js-calendar-el">
                            <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                              <div class="bg-white rounded-4">
                                <div class="elCalendar js-calendar-el-calendar">
        <div class="elCalendar__slider js-calendar-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight">
          <div class="swiper-wrapper" id="swiper-wrapper-1a5a91da82d3f25d" aria-live="polite" style="height: 348px;">
            
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="3 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="4 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="5 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="6 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="7 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="8 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="9 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="10 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="11 / 12" style="width: 398px; margin-right: 30px;">
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
              
                <div class="swiper-slide" role="group" aria-label="12 / 12" style="width: 398px; margin-right: 30px;">
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

          <button class="elCalendar__sliderNav -prev flex-center js-calendar-slider-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-1a5a91da82d3f25d" aria-disabled="true">
            <i class="icon-arrow-left text-20"></i>
          </button>

          <button class="elCalendar__sliderNav -next flex-center js-calendar-slider-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-1a5a91da82d3f25d" aria-disabled="false">
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

                    <div class="searchFormItem js-select-control js-form-dd">
                      <div class="searchFormItem__button" data-x-click="time">
                        <div class="searchFormItem__icon size-50 rounded-12 bg-light-1 flex-center">
                          <i class="text-20 icon-clock"></i>
                        </div>
                        <div class="searchFormItem__content">
                          <h5>Time</h5>
                          <div class="js-select-control-chosen">Choose time</div>
                        </div>
                        <div class="searchFormItem__icon_chevron">
                          <i class="icon-chevron-down d-flex text-18"></i>
                        </div>
                      </div>

                      <div class="searchFormItemDropdown -tour-type" data-x="time" data-x-toggle="is-active">
                        <div class="searchFormItemDropdown__container">
                          <div class="searchFormItemDropdown__list sroll-bar-1">

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">12:00</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">13:00</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">14:00</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">15:00</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">16:00</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">17:00</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">18:00</span>
                              </button>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>


                <h5 class="text-18 fw-500 mb-20 mt-20">Tickets</h5>

                <div>
                  <div class="d-flex items-center justify-between">
                    <div class="text-14">Adult (18+ years) <span class="fw-500">$94.00</span></div>

                    <div class="d-flex items-center js-counter">
                      <button class="button size-30 border-1 rounded-full js-down">
                        <i class="icon-minus text-10"></i>
                      </button>

                      <div class="flex-center ml-10 mr-10">
                        <div class="text-14 size-20 js-count">3</div>
                      </div>

                      <button class="button size-30 border-1 rounded-full js-up">
                        <i class="icon-plus text-10"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="mt-15">
                  <div class="d-flex items-center justify-between">
                    <div class="text-14">Youth (13-17 years) <span class="fw-500">$84.00</span></div>

                    <div class="d-flex items-center js-counter">
                      <button class="button size-30 border-1 rounded-full js-down">
                        <i class="icon-minus text-10"></i>
                      </button>

                      <div class="flex-center ml-10 mr-10">
                        <div class="text-14 size-20 js-count">4</div>
                      </div>

                      <button class="button size-30 border-1 rounded-full js-up">
                        <i class="icon-plus text-10"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="mt-15">
                  <div class="d-flex items-center justify-between">
                    <div class="text-14">Children (0-12 years) <span class="fw-500">$20.00</span></div>

                    <div class="d-flex items-center js-counter">
                      <button class="button size-30 border-1 rounded-full js-down">
                        <i class="icon-minus text-10"></i>
                      </button>

                      <div class="flex-center ml-10 mr-10">
                        <div class="text-14 size-20 js-count">2</div>
                      </div>

                      <button class="button size-30 border-1 rounded-full js-up">
                        <i class="icon-plus text-10"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <h5 class="text-18 fw-500 mb-20 mt-20">Add Extra</h5>

                <div class="d-flex items-center justify-between">
                  <div class="d-flex items-center">
                    <div class="form-checkbox">
                      <input type="checkbox">
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon">
                          <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="ml-10">Add Service per booking</div>
                  </div>

                  <div class="text-14">$40</div>
                </div>

                <div class="d-flex justify-between mt-20">
                  <div class="d-flex">
                    <div class="form-checkbox mt-5">
                      <input type="checkbox">
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon">
                          <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white"></path>
                          </svg>
                        </div>
                      </div>
                    </div>

                    <div class="ml-10">
                      Add Service per person
                      <div class="lh-16">Adult: <span class="fw-500">$17.00</span> - Youth: <span class="fw-500">$14.00</span></div>
                    </div>
                  </div>

                  <div class="text-14">$40</div>
                </div>

                <div class="line mt-20 mb-20"></div>

                <div class="d-flex items-center justify-between">
                  <div class="text-18 fw-500">Total:</div>
                  <div class="text-18 fw-500">$392.09</div>
                </div>

                <button class="button -md -dark-1 col-12 bg-accent-1 text-white mt-20">
                  Book Now
                  <i class="icon-arrow-top-right ml-10"></i>
                </button>
              </div>
            </div></div>
          </div>
        </div>
      </div>
    </section>
    <section class="layout-pt-xl layout-pb-xl">
      <div class="container">
        <div class="row">
          <div class="col-auto">
            <h2 class="text-30">You might also like...</h2>
          </div>
        </div>

        <div class="relative pt-40 sm:pt-20">
          <div class="overflow-hidden pb-5 js-section-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-watch-progress swiper-backface-hidden" data-gap="30" data-slider-cols="xl-4 lg-3 md-2 sm-1 base-1" data-nav-prev="js-slider1-prev" data-nav-next="js-slider1-next">
            <div class="swiper-wrapper" id="swiper-wrapper-c1102650db49e089c" aria-live="polite" style="height: 380px;">

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

              <div class="swiper-slide" role="group" aria-label="8 / 8" style="width: 255px; margin-right: 30px;">

                <a href="#" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{asset('front_assets/img/tourCards/1/8.png')}}" alt="image" class="img-ratio rounded-12">
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

            </div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

          <div class="navAbsolute">
            <button class="navAbsolute__button bg-white js-slider1-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-c1102650db49e089c" aria-disabled="true">
              <i class="icon-arrow-left text-14"></i>
            </button>

            <button class="navAbsolute__button bg-white js-slider1-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-c1102650db49e089c" aria-disabled="false">
              <i class="icon-arrow-right text-14"></i>
            </button>
          </div>
        </div>
      </div>
    </section>
@endsection