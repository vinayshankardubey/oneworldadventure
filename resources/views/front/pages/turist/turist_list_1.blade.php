@extends('front.layout.layout')
@section('content')
@include('front.layout.cssmenu') 
<section data-anim="fade" class="pageHeader -type-3">
      <div class="container">
        <div class="row justify-between">
          <div class="col-auto">
            <div class="breadcrumbs">
              <span class="breadcrumbs__item">
                <a href="#">Home</a>
              </span>
              <span>></span>
              <span class="breadcrumbs__item">
                <a href="#">Tours</a>
              </span>
              <span>></span>
              <span class="breadcrumbs__item">
                <a href="#">Phuket</a>
              </span>
            </div>
          </div>

          <div class="col-auto">
            <div class="pageHeader__subtitle">THE 10 BEST Phuket Tours & Excursions</div>
          </div>
        </div>

        <div class="row pt-30">
          <div class="col-auto">
            <h1 class="pageHeader__title">Explore all things to do in Phuket</h1>
          </div>
        </div>
      </div>
    </section>
<section class="layout-pb-xl">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-4">
            <div class="lg:d-none">
              <div class="sidebar -type-1 rounded-12">
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
                                    <div class="elCalendar js-calendar-el-calendar"></div>
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
                    <div class="accordion -simple-2 js-accordion">
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Tour Type</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

                                <div class="d-flex items-center">
                                  <div class="form-checkbox ">
                                    <input type="checkbox" name="name">
                                    <div class="form-checkbox__mark">
                                      <div class="form-checkbox__icon">
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button mb-10 d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Filter Price</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="pt-15">
                            <div class="js-price-rangeSlider">
                              <div class="px-5">
                                <div class="js-slider"></div>
                              </div>

                              <div class="d-flex justify-between mt-20">
                                <div class="">
                                  <span class="">Price:</span>
                                  <span class="fw-500 js-lower">11,200</span>
                                  <span> - </span>
                                  <span class="fw-500 js-upper">15,000</span>
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
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Duration</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

                                <div class="d-flex items-center">
                                  <div class="form-checkbox ">
                                    <input type="checkbox" name="name">
                                    <div class="form-checkbox__mark">
                                      <div class="form-checkbox__icon">
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Language</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

                                <div class="d-flex items-center">
                                  <div class="form-checkbox ">
                                    <input type="checkbox" name="name">
                                    <div class="form-checkbox__mark">
                                      <div class="form-checkbox__icon">
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Rating</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div class="d-flex">
                                <div class="form-checkbox">
                                  <input type="checkbox" name="rating">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon">
                                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button d-flex items-center justify-between">
                          <h5 class="text-18 fw-500">Specials</h5>

                          <div class="accordion__icon flex-center">
                            <i class="icon-chevron-down"></i>
                            <i class="icon-chevron-down"></i>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="pt-15">
                            <div class="d-flex flex-column y-gap-15">

                              <div>

                                <div class="d-flex items-center">
                                  <div class="form-checkbox ">
                                    <input type="checkbox" name="name">
                                    <div class="form-checkbox__mark">
                                      <div class="form-checkbox__icon">
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <div class="elCalendar js-calendar-el-calendar"></div>
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                <div class="js-slider"></div>
                              </div>

                              <div class="d-flex justify-between mt-20">
                                <div class="">
                                  <span class="">Price:</span>
                                  <span class="fw-500 js-lower">11,200</span>
                                  <span> - </span>
                                  <span class="fw-500 js-upper">15,000</span>
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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
                                          <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
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

          <div data-anim="slide-up delay-2" class="col-xl-9 col-lg-8">
            <div class="row y-gap-5 justify-between">
              <div class="col-auto">
                <div>1362 results</div>
              </div>

              <div class="col-auto">

                <div class="dropdown -type-2 js-dropdown js-form-dd" data-main-value="">
                  <div class="dropdown__button js-button">
                    <span>Sort by: </span>
                    <span class="js-title">Featured</span>
                    <i class="icon-chevron-down"></i>
                  </div>

                  <div class="dropdown__menu js-menu-items">

                    <div class="dropdown__item" data-value="fast">Fast</div>

                    <div class="dropdown__item" data-value="steady">Steady</div>

                    <div class="dropdown__item" data-value="speedy">Speedy</div>

                    <div class="dropdown__item" data-value="furious">Furious</div>

                    <div class="dropdown__item" data-value="grind">Grind</div>

                  </div>
                </div>

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

@endsection