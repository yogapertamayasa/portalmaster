@extends('layout.app')         
    @section('content')
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <div class="container pt-5 pt-xl-8">
                <div class="row mb-5 mb-lg-8 mt-xl-1">
                    <div class="col-lg-4 col-xl-3 order-lg-1 width-md-50">
                        <div class="navbar-expand-lg navbar-expand-lg-collapse-block">
                            <button class="btn d-lg-none mb-5 p-0 collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="far fa-caret-square-down text-primary font-size-20 card-btn-arrow ml-0"></i>
                                <span class="text-primary ml-2">Sidebar</span>
                            </button>
                            <div id="sidebar" class="collapse navbar-collapse">
                                <div class="mb-6 w-100">
                                    <div class="pb-4 mb-2">
                                        <div class="sidebar border border-color-1 rounded-xs">
                                            <div class="p-4 mb-1">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1  font-weight-normal mb-0 text-left">Destination or Hotel Name</span>
                                                <div class="mb-4">
                                                    <div class="input-group border-bottom border-width-2 border-color-1">
                                                        <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold font-size-22"></i>
                                                      <input type="text" class="form-control font-weight-medium font-size-15 shadow-none hero-form border-0 p-0" placeholder="Where are you going?" aria-label="Keyword or title" aria-describedby="keywordInputAddon">
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 font-weight-normal mb-0 text-left">Check In - Out</span>
                                                <div class="mb-4">
                                                    <div class="border-bottom border-width-2 border-color-1">
                                                        <div id="datepickerWrapperPick" class="u-datepicker input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="d-flex align-items-center mr-2 font-size-21">
                                                                  <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                                </span>
                                                            </div>
                                                            <input class="js-range-datepicker font-weight-medium font-size-15 ml-1 shadow-none form-control hero-form bg-transparent border-0 flatpickr-input p-0" type="text" placeholder="July 7/2019" aria-label="July 7/2019"
                                                            data-rp-wrapper="#datepickerWrapperPick"
                                                            data-rp-type="range"
                                                            data-rp-date-format="M d / Y"
                                                            data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                        </div>
                                                        <!-- End Datepicker -->
                                                    </div>
                                                </div>
                                                <!-- End Input -->

                                                <!-- Input -->
                                                <span class="d-block text-gray-1 font-weight-normal mb-0 text-left">Rooms and Guests</span>
                                                <div class="mb-4 position-relative">
                                                    <div class="border-bottom border-width-2 border-color-1">
                                                        <a id="basicDropdownClickInvoker" class="dropdown-nav-link dropdown-toggle flex-horizontal-center pt-3 pb-2" href="javascript:;" role="button"
                                                            aria-controls="basicDropdownClick"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"
                                                            data-unfold-event="click"
                                                            data-unfold-target="#basicDropdownClick"
                                                            data-unfold-type="css-animation"
                                                            data-unfold-duration="300"
                                                            data-unfold-delay="300"
                                                            data-unfold-hide-on-scroll="true"
                                                            data-unfold-animation-in="slideInUp"
                                                            data-unfold-animation-out="fadeOut">
                                                            <i class="flaticon-add-group d-flex align-items-center mr-3 font-size-20 text-primary font-weight-semi-bold"></i>
                                                            <span class="text-black font-weight-medium font-size-15 mr-auto">2 Rooms - 3 Guests</span>
                                                        </a>
                                                        <div id="basicDropdownClick" class="dropdown-menu dropdown-unfold col m-0" aria-labelledby="basicDropdownClickInvoker">
                                                            <div class="w-100 py-2 px-3 mb-3">
                                                                <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                                    <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                                                    <div class="d-flex">
                                                                        <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                            <small class="fas fa-minus btn-icon__inner"></small>
                                                                        </a>
                                                                        <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                        <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                            <small class="fas fa-plus btn-icon__inner"></small>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-100 py-2 px-3 mb-3">
                                                                <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                                    <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                                                    <div class="d-flex">
                                                                        <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                            <small class="fas fa-minus btn-icon__inner"></small>
                                                                        </a>
                                                                        <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                        <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                            <small class="fas fa-plus btn-icon__inner"></small>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-100 py-2 px-3">
                                                                <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                                    <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                                                    <div class="d-flex">
                                                                        <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                            <small class="fas fa-minus btn-icon__inner"></small>
                                                                        </a>
                                                                        <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                        <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                            <small class="fas fa-plus btn-icon__inner"></small>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-100 text-right py-1 pr-5">
                                                                <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Input -->

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary height-60 w-100 font-weight-bold mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2 font-size-17"></i>Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pb-4 mb-2">
                                        <a href="#ontargetModal" class="d-block border rounded"
                                            data-modal-target="#ontargetModal"
                                            data-modal-effect="fadein">
                                            <img src="../../assets/img/map-markers/map.jpg" alt="" width="100%">
                                        </a>
                                        <!-- On Target Modal -->
                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-height-100vh width-100vw overflow-hidden"
                                            data-modal-type="ontarget"
                                            data-open-effect="zoomIn"
                                            data-close-effect="zoomOut"
                                            data-speed="500">
                                            <div class="bg-white">
                                                <div class="border-bottom py-xl-2">
                                                    <div class="row d-block d-md-flex flex-horizontal-center mx-0">
                                                        <div class="col-xl">
                                                            <!-- Nav Links -->
                                                            <ul class="row nav align-items-center py-xl-1 px-0 mb-3 mb-xl-0 border-bottom border-xl-bottom-0" role="tablist">
                                                                <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1">
                                                                    <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                        data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                                        <option value="one" selected>City</option>
                                                                        <option value="two">Two</option>
                                                                        <option value="three">Three</option>
                                                                        <option value="four">Four</option>
                                                                    </select>
                                                                </li>
                                                                <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                                    <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                        data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                                        <option value="one" selected>Price</option>
                                                                        <option value="two">Two</option>
                                                                        <option value="three">Three</option>
                                                                        <option value="four">Four</option>
                                                                    </select>
                                                                </li>
                                                                <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                                    <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                        data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                                        <option value="one" selected>Stars</option>
                                                                        <option value="two">Two</option>
                                                                        <option value="three">Three</option>
                                                                        <option value="four">Four</option>
                                                                    </select>
                                                                </li>
                                                                <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                                    <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                        data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                                        <option value="one" selected>Guest Rating</option>
                                                                        <option value="two">Two</option>
                                                                        <option value="three">Three</option>
                                                                        <option value="four">Four</option>
                                                                    </select>
                                                                </li>
                                                                <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                                    <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                        data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                                        <option value="one" selected>Meals</option>
                                                                        <option value="two">Two</option>
                                                                        <option value="three">Three</option>
                                                                        <option value="four">Four</option>
                                                                    </select>
                                                                </li>
                                                                <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                                    <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                        data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                                        <option value="one" selected>Facilities</option>
                                                                        <option value="two">Two</option>
                                                                        <option value="three">Three</option>
                                                                        <option value="four">Four</option>
                                                                    </select>
                                                                </li>
                                                                <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                                    <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                        data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                                        <option value="one" selected>Property Type</option>
                                                                        <option value="two">Two</option>
                                                                        <option value="three">Three</option>
                                                                        <option value="four">Four</option>
                                                                    </select>
                                                                </li>
                                                            </ul>
                                                            <!-- End Nav Links -->
                                                        </div>
                                                        <div class="col-xl-auto">
                                                            <div class="d-flex justify-content-center justify-content-xl-start">
                                                                <button type="button" class="btn btn-wide btn-blue-1 font-weight-normal font-size-14 rounded-xs mb-3 mb-xl-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <span aria-hidden="true">Back to hotel list</span>
                                                                    <i class="fas fa-times font-size-15 ml-3"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="height-100vh-72">
                                                    <div class="row no-gutters">
                                                        <div class="col-lg-5 col-xl-4 col-wd-3gdot5 order-1 order-lg-0">
                                                            <div class="pt-4 px-4 px-xl-5">
                                                                <div class="mb-4">
                                                                    <div class="mb-2 text-gray-1">
                                                                        50 of 3771 hotels shown
                                                                    </div>
                                                                    <select class="form-control js-select selectpicker dropdown-select" required="" data-msg="Please select option." data-error-class="u-has-error" data-success-class="u-has-success"
                                                                        data-style="form-control font-size-14 border-width-2 border-gray font-weight-normal">
                                                                        <option value="One" selected>Recommended</option>
                                                                        <option value="Two">Low to High</option>
                                                                        <option value="Three">High to Low</option>
                                                                        <option value="Four">Popular</option>
                                                                    </select>
                                                                </div>
                                                                <div class="js-scrollbar height-100vh-72">
                                                                    <ul class="d-block list-unstyled">
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="product-item__header">
                                                                                            <div class="position-relative">
                                                                                                <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img58.jpg"></a>
                                                                                            </div>
                                                                                            <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                                <span class="flaticon-valentine-heart"></span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#" class="d-block">
                                                                                                        <div class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 flex-horizontal-center">
                                                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span class="green-lighter ml-2">
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span class="font-weight-bold">£350.00</span>
                                                                                                    <span class="font-size-14 text-gray-1"> / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="product-item__header">
                                                                                            <div class="position-relative">
                                                                                                <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img59.jpg"></a>
                                                                                            </div>
                                                                                            <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                                <span class="flaticon-valentine-heart"></span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#" class="d-block">
                                                                                                        <div class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 flex-horizontal-center">
                                                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span class="green-lighter ml-2">
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span class="font-weight-bold">£350.00</span>
                                                                                                    <span class="font-size-14 text-gray-1"> / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="product-item__header">
                                                                                            <div class="position-relative">
                                                                                                <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img60.jpg"></a>
                                                                                            </div>
                                                                                            <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                                <span class="flaticon-valentine-heart"></span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#" class="d-block">
                                                                                                        <div class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 flex-horizontal-center">
                                                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span class="green-lighter ml-2">
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span class="font-weight-bold">£350.00</span>
                                                                                                    <span class="font-size-14 text-gray-1"> / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="product-item__header">
                                                                                            <div class="position-relative">
                                                                                                <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img3.jpg"></a>
                                                                                            </div>
                                                                                            <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                                <span class="flaticon-valentine-heart"></span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#" class="d-block">
                                                                                                        <div class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 flex-horizontal-center">
                                                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span class="green-lighter ml-2">
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span class="font-weight-bold">£350.00</span>
                                                                                                    <span class="font-size-14 text-gray-1"> / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="product-item__header">
                                                                                            <div class="position-relative">
                                                                                                <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img61.jpg"></a>
                                                                                            </div>
                                                                                            <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                                <span class="flaticon-valentine-heart"></span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#" class="d-block">
                                                                                                        <div class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 flex-horizontal-center">
                                                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span class="green-lighter ml-2">
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span class="font-weight-bold">£350.00</span>
                                                                                                    <span class="font-size-14 text-gray-1"> / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="product-item__header">
                                                                                            <div class="position-relative">
                                                                                                <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img62.jpg"></a>
                                                                                            </div>
                                                                                            <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                                <span class="flaticon-valentine-heart"></span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#" class="d-block">
                                                                                                        <div class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 flex-horizontal-center">
                                                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span class="green-lighter ml-2">
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span class="font-weight-bold">£350.00</span>
                                                                                                    <span class="font-size-14 text-gray-1"> / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="product-item__header">
                                                                                            <div class="position-relative">
                                                                                                <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img63.jpg"></a>
                                                                                            </div>
                                                                                            <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                                <span class="flaticon-valentine-heart"></span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#" class="d-block">
                                                                                                        <div class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 flex-horizontal-center">
                                                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span class="green-lighter ml-2">
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span class="font-weight-bold">£350.00</span>
                                                                                                    <span class="font-size-14 text-gray-1"> / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="product-item__header">
                                                                                            <div class="position-relative">
                                                                                                <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img9.jpg"></a>
                                                                                            </div>
                                                                                            <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                                <span class="flaticon-valentine-heart"></span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#" class="d-block">
                                                                                                        <div class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 flex-horizontal-center">
                                                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span class="green-lighter ml-2">
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span class="font-weight-bold">£350.00</span>
                                                                                                    <span class="font-size-14 text-gray-1"> / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="product-item__header">
                                                                                            <div class="position-relative">
                                                                                                <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img10.jpg"></a>
                                                                                            </div>
                                                                                            <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                                <span class="flaticon-valentine-heart"></span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#" class="d-block">
                                                                                                        <div class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 flex-horizontal-center">
                                                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span class="green-lighter ml-2">
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                    <small class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span class="font-weight-bold">£350.00</span>
                                                                                                    <span class="font-size-14 text-gray-1"> / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-xl-8 col-wd-8gdot5">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.315136188916!2d80.28787859999998!3d13.09419335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f6b00bf787831af!2sApollo%20City%20Centre%20Hospital%20Sowcarpet!5e0!3m2!1sen!2sin!4v1580992215999!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End On Target Modal -->
                                    </div>

                                    <div class="sidenav border border-color-8 rounded-xs">
                                        <!-- Accordiaon -->
                                        <div id="RatingAccordion" class="accordion rounded shadow-none border-bottom">
                                           <div class="card-collapse" id="shopRatingHeadingOne">
                                                <h3 class="mb-0">
                                                    <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#shopRatingOne" aria-expanded="false" aria-controls="shopRatingOne">
                                                        <span class="row align-items-center">
                                                            <span class="col-9">
                                                                <span class="font-weight-bold font-size-17 text-dark mb-3">Star Rating</span>
                                                            </span>
                                                            <span class="col-3 text-right">
                                                                <span class="card-btn-arrow">
                                                                    <span class="fas fa-chevron-down small"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="shopRatingOne" class="collapse show" aria-labelledby="shopRatingHeadingOne" data-parent="#RatingAccordion">
                                                <div class="card-body pt-0 mt-1 px-5">
                                                    <!-- Checkboxes -->
                                                    <div class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="brandAdidas">
                                                            <label class="custom-control-label text-lh-inherit text-color-1" for="brandAdidas">
                                                                <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                    <div class="green-lighter ml-1 letter-spacing-2">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                                                           <label class="custom-control-label text-lh-inherit text-color-1" for="brandNewBalance">
                                                                <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                    <div class="green-lighter ml-1 letter-spacing-2">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                           </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="brandNike">
                                                          <label class="custom-control-label text-lh-inherit text-color-1" for="brandNike">
                                                                <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                    <div class="green-lighter ml-1 letter-spacing-2">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                          </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                                                          <label class="custom-control-label text-lh-inherit text-color-1" for="brandFredPerry">
                                                                <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                    <div class="green-lighter ml-1 letter-spacing-2">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                          </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="shopCartAccordion" class="accordion rounded shadow-none">
                                            <div class="border-0">
                                                <div class="card-collapse" id="shopCardHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#shopCardOne" aria-expanded="false" aria-controls="shopCardOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="d-block font-size-lg-15 font-size-17 font-weight-bold text-dark">Price Range ($)</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="shopCardOne" class="collapse show" aria-labelledby="shopCardHeadingOne" data-parent="#shopCartAccordion">
                                                    <div class="card-body pt-0 px-5">
                                                        <div class="pb-3 mb-1 d-flex text-lh-1">
                                                            <span>£</span>
                                                            <span id="rangeSliderExample3MinResult" class=""></span>
                                                            <span class="mx-0dot5"> — </span>
                                                            <span>£</span>
                                                            <span id="rangeSliderExample3MaxResult" class=""></span>
                                                        </div>
                                                        <input class="js-range-slider" type="text"
                                                        data-extra-classes="u-range-slider height-35"
                                                        data-type="double"
                                                        data-grid="false"
                                                        data-hide-from-to="true"
                                                        data-min="0"
                                                        data-max="3456"
                                                        data-from="200"
                                                        data-to="3456"
                                                        data-prefix="$"
                                                        data-result-min="#rangeSliderExample3MinResult"
                                                        data-result-max="#rangeSliderExample3MaxResult">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="shopCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="shopCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#shopCategoryOne" aria-expanded="false" aria-controls="shopCategoryOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="font-weight-bold font-size-17 text-dark mb-3">Meals</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="shopCategoryOne" class="collapse show" aria-labelledby="shopCategoryHeadingOne" data-parent="#shopCategoryAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                       <!-- Checkboxes -->
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="1">
                                                                <label class="custom-control-label" for="1">Breakfast Included</label>
                                                            </div>
                                                            <span>749</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="2">
                                                                <label class="custom-control-label" for="2">All-inclusive</label>
                                                            </div>
                                                            <span>630</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="3">
                                                                <label class="custom-control-label" for="3">Breakfast & dinner included</label>
                                                            </div>
                                                            <span>58</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="4">
                                                                <label class="custom-control-label" for="4">Kitchen facilities</label>
                                                            </div>
                                                            <span>29</span>
                                                        </div>
                                                        <!-- End Checkboxes -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="facilityCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="facilityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#facilityCategoryOne" aria-expanded="false" aria-controls="facilityCategoryOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="font-weight-bold font-size-17 text-dark mb-3">Facilities</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="facilityCategoryOne" class="collapse show" aria-labelledby="facilityCategoryHeadingOne" data-parent="#facilityCategoryAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="Adidas">
                                                                <label class="custom-control-label" for="Adidas">Parking</label>
                                                            </div>
                                                            <span>749</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="NewBalance">
                                                                <label class="custom-control-label" for="NewBalance">Restaurant</label>
                                                            </div>
                                                            <span>630</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="Nike">
                                                                <label class="custom-control-label" for="Nike">Pet friendly</label>
                                                            </div>
                                                            <span>58</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="FredPerry">
                                                                <label class="custom-control-label" for="FredPerry">Room service</label>
                                                            </div>
                                                            <span>29</span>
                                                        </div>
                                                        <!-- End Checkboxes -->

                                                        <!-- View More - Collapse -->
                                                        <div class="collapse" id="collapseBrand1">
                                                            <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                                <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandGucci">
                                                                <label class="custom-control-label" for="brandGucci">Gucci</label>
                                                                </div>
                                                                <span>5</span>
                                                            </div>
                                                            <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="brandMango">
                                                                    <label class="custom-control-label" for="brandMango">Mango</label>
                                                                </div>
                                                                <span>1</span>
                                                            </div>
                                                        </div>
                                                        <!-- End View More - Collapse -->

                                                        <!-- Link -->
                                                        <a class="link link-collapse small font-size-1" data-toggle="collapse" href="#collapseBrand1" role="button" aria-expanded="false" aria-controls="collapseBrand1">
                                                          <span class="link-collapse__default font-size-14">Show all 13</span>
                                                          <span class="link-collapse__active font-size-14">Show less</span>
                                                        </a>
                                                        <!-- End Link -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="propertyCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="propertyCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#propertyCategoryOne" aria-expanded="false" aria-controls="propertyCategoryOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="font-weight-bold font-size-17 text-dark mb-3">Property Type</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="propertyCategoryOne" class="collapse show" aria-labelledby="propertyCategoryHeadingOne" data-parent="#propertyCategoryAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandhotel">
                                                                <label class="custom-control-label" for="brandhotel">Hotels</label>
                                                            </div>
                                                            <span>749</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandapartmet">
                                                                <label class="custom-control-label" for="brandapartmet">Apartments</label>
                                                            </div>
                                                            <span>630</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandbed">
                                                                <label class="custom-control-label" for="brandbed">Bed and Breakfasts</label>
                                                            </div>
                                                            <span>58</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandresorts">
                                                                <label class="custom-control-label" for="brandresorts">Resorts</label>
                                                            </div>
                                                            <span>29</span>
                                                        </div>
                                                        <!-- End Checkboxes -->

                                                        <!-- View More - Collapse -->
                                                        <div class="collapse" id="collapseBrand2">
                                                            <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                                <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="Gucci">
                                                                <label class="custom-control-label" for="Gucci">Gucci</label>
                                                                </div>
                                                                <span>5</span>
                                                            </div>
                                                            <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="Mango">
                                                                    <label class="custom-control-label" for="Mango">Mango</label>
                                                                </div>
                                                                <span>1</span>
                                                            </div>
                                                        </div>
                                                        <!-- End View More - Collapse -->

                                                        <!-- Link -->
                                                        <a class="link link-collapse small font-size-1" data-toggle="collapse" href="#collapseBrand2" role="button" aria-expanded="false" aria-controls="collapseBrand2">
                                                          <span class="link-collapse__default font-size-14">Show all 39</span>
                                                          <span class="link-collapse__active font-size-14">Show less</span>
                                                        </a>
                                                        <!-- End Link -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="cityCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="cityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#cityCategoryOne" aria-expanded="false" aria-controls="cityCategoryOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="font-weight-bold font-size-17 text-dark mb-3">City</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="cityCategoryOne" class="collapse show" aria-labelledby="cityCategoryHeadingOne" data-parent="#cityCategoryAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandamsterdam">
                                                                <label class="custom-control-label" for="brandamsterdam">Amsterdam</label>
                                                            </div>
                                                            <span>749</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandrotterdam">
                                                                <label class="custom-control-label" for="brandrotterdam">Rotterdam</label>
                                                            </div>
                                                            <span>630</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandvalkenburg">
                                                                <label class="custom-control-label" for="brandvalkenburg">Valkenburg</label>
                                                            </div>
                                                            <span>58</span>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandeindhoven">
                                                                <label class="custom-control-label" for="brandeindhoven">Eindhoven</label>
                                                            </div>
                                                            <span>29</span>
                                                        </div>
                                                        <!-- End Checkboxes -->

                                                        <!-- View More - Collapse -->
                                                        <div class="collapse" id="collapseBrand3">
                                                            <div class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                                <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="gucci">
                                                                <label class="custom-control-label" for="gucci">Gucci</label>
                                                                </div>
                                                                <span>5</span>
                                                            </div>
                                                            <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mango">
                                                                    <label class="custom-control-label" for="mango">Mango</label>
                                                                </div>
                                                                <span>1</span>
                                                            </div>
                                                        </div>
                                                        <!-- End View More - Collapse -->

                                                        <!-- Link -->
                                                        <a class="link link-collapse small font-size-1" data-toggle="collapse" href="#collapseBrand3" role="button" aria-expanded="false" aria-controls="collapseBrand3">
                                                          <span class="link-collapse__default font-size-14">Show all 25</span>
                                                          <span class="link-collapse__active font-size-14">Show less</span>
                                                        </a>
                                                        <!-- End Link -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9 order-md-1 order-lg-2 pb-5 pb-lg-0">
                        <!-- Shop-control-bar Title -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="font-size-21 font-weight-bold mb-0 text-lh-1">3292 hotels found</h3>
                            <ul class="nav tab-nav-shop flex-nowrap" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link font-size-22 p-0" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            <i class="fa fa-list"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-size-22 p-0 ml-2 active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            <i class="fa fa-th"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End shop-control-bar Title -->

                        <!-- Slick Tab carousel -->
                        <div class="u-slick__tab">
                            <!-- Nav Links -->
                            <div class="mb-5">
                                <ul class="nav flex-nowrap border border-radius-3 tab-nav align-items-center py-2 px-0" role="tablist">
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1">
                                        <a href="#" class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Recommended
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-auto" data-style="btn-sm py-1 px-4 px-wd-5 font-weight-normal font-size-15  text-gray-1 d-flex align-items-center">
                                          <option value="one" selected>Price</option>
                                          <option value="two">Two</option>
                                          <option value="three">Three</option>
                                          <option value="four">Four</option>
                                        </select>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-auto" data-style="btn-sm py-1 px-4 px-wd-5 font-weight-normal font-size-15  text-gray-1 d-flex align-items-center">
                                          <option value="one" selected>Stars</option>
                                          <option value="two">Two</option>
                                          <option value="three">Three</option>
                                          <option value="four">Four</option>
                                        </select>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <a href="#" class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Guest Rating
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <a href="#" class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Distance
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <a href="#" class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Top Reviewed
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Nav Links -->

                            <!-- Tab Content -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                                    <ul class="d-block list-unstyled products-group prodcut-list-view">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height "
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230 card-img-top" src="../../assets/img/300x230/img58.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230 card-img-top" src="../../assets/img/300x230/img59.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230 card-img-top" src="../../assets/img/300x230/img60.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230 card-img-top" src="../../assets/img/300x230/img61.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230 card-img-top" src="../../assets/img/300x230/img62.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230 card-img-top" src="../../assets/img/300x230/img63.jpg"></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="badge badge-orange text-white rounded-xs font-size-13 py-1 p-xl-2">Limited Time Offer</span>
                                                                <span class="green-lighter ml-2">
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../hotels/hotel-single-v1.html">
                                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../hotels/hotel-single-v1.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                                <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                                        <span class="font-weight-normal font-size-14">Breakfast</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Pay at the hotel</span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled d-md-flex">
                                                                    <li class="border border-green bg-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-white">Lowest price includes</span>
                                                                    </li>
                                                                    <li class="border border-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 ml-md-n1 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-green">Free breakfast</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.6 /5 </span>
                                                                            <span class="font-size-17 font-weight-bold text-primary">Very Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">(1,186 Reviews)</span>
                                                                </div>
                                                                <span class="font-size-14 pl-xl-2">"Great value" "Excellent location"</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span class="font-weight-bold">£350.00</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height "
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img63.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img62.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img59.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img58.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img57.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img56.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter ml-2">
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../hotels/hotel-single-v2.html">
                                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../hotels/hotel-single-v2.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                                <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                                        <span class="font-weight-normal font-size-14">Breakfast</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Pay at the hotel</span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled d-md-flex">
                                                                    <li class="border border-green bg-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-white">Lowest price includes</span>
                                                                    </li>
                                                                    <li class="border border-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 ml-md-n1 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-green">Free breakfast</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.6 /5 </span>
                                                                            <span class="font-size-17 font-weight-bold text-primary">Very Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">(1,186 Reviews)</span>
                                                                </div>
                                                                <span class="font-size-14 pl-xl-2">"Great value" "Excellent location"</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span class="font-weight-bold">£350.00</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height "
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img62.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img63.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img57.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img59.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img61.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img58.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter ml-2">
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../hotels/hotel-single-v3.html">
                                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../hotels/hotel-single-v3.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                                <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                                        <span class="font-weight-normal font-size-14">Breakfast</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Pay at the hotel</span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled d-md-flex">
                                                                    <li class="border border-green bg-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-white">Lowest price includes</span>
                                                                    </li>
                                                                    <li class="border border-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 ml-md-n1 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-green">Free breakfast</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.6 /5 </span>
                                                                            <span class="font-size-17 font-weight-bold text-primary">Very Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">(1,186 Reviews)</span>
                                                                </div>
                                                                <span class="font-size-14 pl-xl-2">"Great value" "Excellent location"</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span class="font-weight-bold">£350.00</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height "
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img59.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img58.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img60.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img61.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img62.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img63.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="badge badge-orange text-white rounded-xs font-size-13 py-1 p-xl-2">Limited Time Offer</span>
                                                                <span class="green-lighter ml-2">
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../hotels/hotel-single-v2.html">
                                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../hotels/hotel-single-v2.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                                <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                                        <span class="font-weight-normal font-size-14">Breakfast</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Pay at the hotel</span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled d-md-flex">
                                                                    <li class="border border-green bg-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-white">Lowest price includes</span>
                                                                    </li>
                                                                    <li class="border border-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 ml-md-n1 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-green">Free breakfast</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.6 /5 </span>
                                                                            <span class="font-size-17 font-weight-bold text-primary">Very Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">(1,186 Reviews)</span>
                                                                </div>
                                                                <span class="font-size-14 pl-xl-2">"Great value" "Excellent location"</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span class="font-weight-bold">£350.00</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height "
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img63.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img62.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img61.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img60.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img59.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img58.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter ml-2">
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../hotels/hotel-single-v3.html">
                                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../hotels/hotel-single-v3.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                                <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                                        <span class="font-weight-normal font-size-14">Breakfast</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Pay at the hotel</span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled d-md-flex">
                                                                    <li class="border border-green bg-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-white">Lowest price includes</span>
                                                                    </li>
                                                                    <li class="border border-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 ml-md-n1 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-green">Free breakfast</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.6 /5 </span>
                                                                            <span class="font-size-17 font-weight-bold text-primary">Very Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">(1,186 Reviews)</span>
                                                                </div>
                                                                <span class="font-size-14 pl-xl-2">"Great value" "Excellent location"</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span class="font-weight-bold">£350.00</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height "
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img11.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img9.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img10.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img12.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img63.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img58.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter ml-2">
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../hotels/hotel-single-v1.html">
                                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../hotels/hotel-single-v1.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                                <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                                        <span class="font-weight-normal font-size-14">Breakfast</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Pay at the hotel</span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled d-md-flex">
                                                                    <li class="border border-green bg-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-white">Lowest price includes</span>
                                                                    </li>
                                                                    <li class="border border-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 ml-md-n1 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-green">Free breakfast</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.6 /5 </span>
                                                                            <span class="font-size-17 font-weight-bold text-primary">Very Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">(1,186 Reviews)</span>
                                                                </div>
                                                                <span class="font-size-14 pl-xl-2">"Great value" "Excellent location"</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span class="font-weight-bold">£350.00</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height "
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img12.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img59.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img60.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img13.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img63.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img9.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="badge badge-orange text-white rounded-xs font-size-13 py-1 p-xl-2">Limited Time Offer</span>
                                                                <span class="green-lighter ml-2">
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../hotels/hotel-single-v3.html">
                                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../hotels/hotel-single-v3.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                                <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                                        <span class="font-weight-normal font-size-14">Breakfast</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Pay at the hotel</span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled d-md-flex">
                                                                    <li class="border border-green bg-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-white">Lowest price includes</span>
                                                                    </li>
                                                                    <li class="border border-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 ml-md-n1 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-green">Free breakfast</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.6 /5 </span>
                                                                            <span class="font-size-17 font-weight-bold text-primary">Very Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">(1,186 Reviews)</span>
                                                                </div>
                                                                <span class="font-size-14 pl-xl-2">"Great value" "Excellent location"</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span class="font-weight-bold">£350.00</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height "
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img60.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img59.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img61.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img62.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img13.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img10.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter ml-2">
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../hotels/hotel-single-v1.html">
                                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../hotels/hotel-single-v1.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                                <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                                        <span class="font-weight-normal font-size-14">Breakfast</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Pay at the hotel</span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled d-md-flex">
                                                                    <li class="border border-green bg-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-white">Lowest price includes</span>
                                                                    </li>
                                                                    <li class="border border-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 ml-md-n1 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-green">Free breakfast</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.6 /5 </span>
                                                                            <span class="font-size-17 font-weight-bold text-primary">Very Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">(1,186 Reviews)</span>
                                                                </div>
                                                                <span class="font-size-14 pl-xl-2">"Great value" "Excellent location"</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span class="font-weight-bold">£350.00</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height "
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotels-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img59.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotels-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img10.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotels-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img61.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotels-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img22.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotels-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img33.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../hotels/hotels-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="min-height-230 card-img-top" src="../../assets/img/300x230/img60.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter ml-2">
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                    <small class="fas fa-star font-size-10"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../hotels/hotels-single-v2.html">
                                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../hotels/hotels-single-v2.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                                <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                                        <span class="font-weight-normal font-size-14">Breakfast</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                                    </li>
                                                                    <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14">Pay at the hotel</span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled d-md-flex">
                                                                    <li class="border border-green bg-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-white">Lowest price includes</span>
                                                                    </li>
                                                                    <li class="border border-green rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 ml-md-n1 mb-2 mb-md-0">
                                                                        <span class="font-weight-normal font-size-14 text-green">Free breakfast</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.6 /5 </span>
                                                                            <span class="font-size-17 font-weight-bold text-primary">Very Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">(1,186 Reviews)</span>
                                                                </div>
                                                                <span class="font-size-14 pl-xl-2">"Great value" "Excellent location"</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span class="font-weight-bold">£350.00</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center text-md-left font-size-14 mb-3 text-lh-1">Showing 1–15</div>
                                    <nav aria-label="Page navigation">
                                        <ul class="list-pagination-1 pagination border border-color-4 rounded-sm overflow-auto overflow-xl-visible justify-content-md-center align-items-center py-2 mb-0">
                                            <li class="page-item">
                                                <a class="page-link border-right rounded-0 text-gray-5" href="#" aria-label="Previous">
                                                    <i class="flaticon-left-direction-arrow font-size-10 font-weight-bold"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link font-size-14 active" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">5</a></li>
                                            <li class="page-item disabled"><a class="page-link font-size-14" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">66</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">67</a></li>
                                            <li class="page-item">
                                                <a class="page-link border-left rounded-0 text-gray-5" href="#" aria-label="Next">
                                                    <i class="flaticon-right-thin-chevron font-size-10 font-weight-bold"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img9.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v1.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">Empire Prestige Causeway Bay</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img10.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v2.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Istanbul, Turkey
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">Park Avenue Baker Street London</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img12.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v3.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New York, United States
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v3.html" class="card-title font-size-17 font-weight-medium text-dark">New Road Hotel</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img11.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v2.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New South Wales, Australia
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">New York Marriott Downtown</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img57.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v1.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Istanbul, Turkey
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">Park Avenue Baker Street London</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img58.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v3.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New York, United States
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v3.html" class="card-title font-size-17 font-weight-medium text-dark">New Road Hotel</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img59.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v2.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>Greater London, United Kingdom
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">Empire Prestige Causeway Bay</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img60.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v3.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Istanbul, Turkey
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v3.html" class="card-title font-size-17 font-weight-medium text-dark">Park Avenue Baker Street London</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img61.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v1.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New York, United States
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">New Road Hotel</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img62.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v3.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New South Wales, Australia
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v3.html" class="card-title font-size-17 font-weight-medium text-dark">New York Marriott Downtown</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img61.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v1.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New York, United States
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">New Road Hotel</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img61.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v2.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New York, United States
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">New Road Hotel</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img10.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v3.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Istanbul, Turkey
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v3.html" class="card-title font-size-17 font-weight-medium text-dark">Park Avenue Baker Street London</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img12.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v1.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New York, United States
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">New Road Hotel</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img11.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v2.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New South Wales, Australia
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">New York Marriott Downtown</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img59.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v1.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>Greater London, United Kingdom
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">Empire Prestige Causeway Bay</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img60.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v2.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> Istanbul, Turkey
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">Park Avenue Baker Street London</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-1">
                                            <div class="card transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative">
                                                    <a href="../hotels/hotel-single-v3.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="../../assets/img/300x230/img61.jpg" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-4 pb-3">
                                                            <a href="../hotels/hotel-single-v3.html" class="d-block">
                                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                                    <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> New York, United States
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pl-3 pr-4 pt-2 pb-3">
                                                    <div class="ml-1 mb-2">
                                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                                            <div class="green-lighter">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../hotels/hotel-single-v3.html" class="card-title font-size-17 font-weight-medium text-dark">New Road Hotel</a>
                                                    <div class="mt-2 mb-3">
                                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                        <span class="font-weight-bold">£350.00</span>
                                                        <span class="font-size-14 text-gray-1"> / night</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center text-md-left font-size-14 mb-3 text-lh-1">Showing 1–15</div>
                                    <nav aria-label="Page navigation">
                                        <ul class="list-pagination-1 pagination border border-color-4 rounded-sm mb-5 mb-lg-0 overflow-auto overflow-xl-visible justify-content-md-center align-items-center py-2">
                                            <li class="page-item">
                                                <a class="page-link border-right rounded-0 text-gray-5" href="#" aria-label="Previous">
                                                    <i class="flaticon-left-direction-arrow font-size-10 font-weight-bold"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link font-size-14 active" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">5</a></li>
                                            <li class="page-item disabled"><a class="page-link font-size-14" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">66</a></li>
                                            <li class="page-item"><a class="page-link font-size-14" href="#">67</a></li>
                                            <li class="page-item">
                                                <a class="page-link border-left rounded-0 text-gray-5" href="#" aria-label="Next">
                                                    <i class="flaticon-right-thin-chevron font-size-10 font-weight-bold"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- Slick Tab carousel -->
                    </div>
                </div>
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- Page Preloader -->
        <!-- <div id="jsPreloader" class="page-preloader">
            <div class="page-preloader__content-centered">
                <div class="spinner-grow text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div> -->
        <!-- End Page Preloader -->
@endsection