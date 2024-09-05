@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

        <section class="slider slider-1" id="slider-1">
            <div class="container-fluid pr-0 pl-0">
                <div class="carousel owl-carousel custom-carousel carousel-navs carousel-dots" data-slide="1"
                    data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="true" data-space="0"
                    data-loop="true" data-speed="800" data-slider-id="#custom-carousel">

                    <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
                        <div class="bg-section"><img src="{{ asset('frontend/assets/images/sliders/1.jpg') }}" alt="Background" /></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="slide-content">
                                        <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                                        <h1 class="slide-headline">full sustainable<br />cargo solutions!</h1>
                                        <p class="slide-desc">Representative logistics operator providing full range of
                                            service in the sphere of customs clearance and transportation worldwide.</p>
                                        <div class="slide-buttons">
                                        	<a class="btn btn--primary"
                                                href="#track">Track your shipment</a>
                                            </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
                        <div class="bg-section"><img src="{{ asset('frontend/assets/images/sliders/2.jpg') }}" alt="Background" /></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="slide-content">
                                        <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                                        <h2 class="slide-headline">Air Freight That<br />Saves Your Time!</h2>
                                        <p class="slide-desc">Representative logistics operator providing full range of
                                            service in the sphere of customs clearance and transportation worldwide.</p>
                                        <a class="btn btn--primary"
                                                href="#track">Track your shipment</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
                        <div class="bg-section"><img src="{{ asset('frontend/assets/images/sliders/3.jpg') }}" alt="Background" /></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="slide-content">
                                        <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                                        <h2 class="slide-headline">innovation sea<br />transportation!</h2>
                                        <p class="slide-desc">Representative logistics operator providing full range of
                                            service in the sphere of customs clearance and transportation worldwide.</p>
                                        <a class="btn btn--primary"
                                                href="#track">Track your shipment</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
                        <div class="bg-section"><img src="{{ asset('frontend/assets/images/sliders/4.jpg') }} {{ asset('frontend/assets/images/sliders/4.jpg') }}" alt="Background" /></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="slide-content">
                                        <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                                        <h2 class="slide-headline">your flexible<br />road directions!</h2>
                                        <p class="slide-desc">Representative logistics operator providing full range of
                                            service in the sphere of customs clearance and transportation worldwide.</p>
                                        <a class="btn btn--primary"
                                                href="#track">Track your shipment</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section class="services-bar" id="servicesBar">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-md-6 col-lg-3 services-bar-card active"><i
                            class="thumb-icon flaticon-002-warehouse"></i>
                        <div class="thumb-body">
                            <p>sustainable </p>
                            <h3> <a href="service-warehouse.html">warehousing services</a></h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 services-bar-card"><i
                            class="thumb-icon flaticon-035-plane"></i>
                        <div class="thumb-body">
                            <p>reliable</p>
                            <h3> <a href="service-air-freight.html">air freight services</a></h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 services-bar-card"><i class="thumb-icon flaticon-010-cargo">
                        </i>
                        <div class="thumb-body">
                            <p>innovative</p>
                            <h3> <a href="service-ocean-freight.html">ocean freight services</a></h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 services-bar-card"><i
                            class="thumb-icon flaticon-004-trailer-1"></i>
                        <div class="thumb-body">
                            <p>flexible</p>
                            <h3> <a href="service-road-freight.html"> road freight services</a></h3>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section class="about pt-70" id="about-1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="about-img about-img-left">
                            <div class="about-img-warp bg-overlay">
                                <div class="bg-section"><img src="{{ asset('frontend/assets/images/about/1.jpg') }}" alt="about Image" /></div>
                            </div>
                            <div class="counter">
                                <div class="counter-icon"> <i class="flaticon-018-packaging"></i></div>
                                <div class="counter-num"> <span class="counting">9,612</span>
                                    <p>m</p>
                                </div>
                                <div class="counter-name">
                                    <h6>delivered goods</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="heading heading-3">
                            <p class="heading-subtitle">Providing Full Range Of Transportation Worldwide.</p>
                            <h2 class="heading-title">Reliable Logistic & Transport Solutions Saves Your Time!</h2>
                        </div>
                        <div class="about-block">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="block-left">
                                        <p>Fastlane Express Delivery Service is a representative logistics operator providing full range of
                                            service in the sphere of customs clearance transportation worldwide for any
                                            cargo</p>
                                        <p>We pride ourselves on providing the best transport and shipping services
                                            available allover the world. Our skilled personnel, utilising the latest
                                            communications, tracking and combined with experience through integrated
                                            supply chain solutions!</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="block-right">
                                        <div class="detail">
                                            <h6>quality </h6>
                                            <p>Following the quality of our service thus having gained trust of our many
                                                clients.</p>
                                        </div>
                                        <div class="detail">
                                            <h6>rellability</h6>
                                            <p>We provide with cargo safety throughout all the stages of our delivery
                                                process..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="signature-block">
                            <div class="signature-body">
                                <h6>john peter</h6>
                                <p>founder</p>
                            </div><img src="{{ asset('frontend/assets/images/signature/1.png') }}" alt="signature" />
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="cta bg-overlay bg-overlay-dark2" id="cta-1">
            <div class="bg-section"><img src="{{ asset('frontend/assets/images/cta/1.jpg') }}" alt="background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="heading heading-2 heading-light">
                            <p class="heading-subtitle">Dedicated Customer Teams & An Agile Services</p>
                            <h2 class="heading-title">Global Logistics Partner To World’s Famous Brands For Over 25
                                Years!</h2>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="icon-set">
                            <div class="icon-panel"> <i class="icon flaticon-016-payment-terminal"></i><span>transparent
                                    pricing</span></div>
                            <div class="icon-panel"> <i class="icon flaticon-014-box-3"></i><span>fast, effecient
                                    delivery</span></div>
                            <div class="icon-panel"> <i class="icon flaticon-001-scale-1"></i><span>warehouse
                                    storage</span></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="contact-panel">
                            <div class="contact-types" id="track">
                                <a class="button track-btn active" href="javascript:void(0)"
                                    data-form="trackFormActive"> <i class="flaticon-009-shipping-1"> </i><span>track
                                        &amp; trace</span></a>
                            </div>
                            <div class="contact-card">
                                <div class="contact-body trackFormActive" >
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            
                                            <form class=" track-form mb-0" method="GET"
                                                action="{{ url('/search') }}">
                                  
                                                <h5 class="card-heading">Tracking number</h5>

                                                @include('layouts.alert.msg')
                                                <div class="row">
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="search"
                                                            cols="30" rows="2"
                                                            placeholder="Enter tracking number"
                                                            required=""></textarea>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn--secondary btn--block">Track &amp; Trace</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="features bg-gray" id="features-1">
            <div class="container">
                

                <div class="row">
                    <div class=" col-sm-6 col-md-6 col-lg-4">
                        <div class="feature-panel bg-white">
                            <div class="feature-icon"><i class="flaticon-035-plane"></i></div>
                            <div class="feature-content"><i class="flaticon-035-plane"></i>
                                <h4>air freight<br />services</h4>
                                <p>We can provide with the comprehensive service in the sphere of urgent, valuable,
                                    fragile or any cargoes conscientious accelerated delivery by air.</p><a
                                    href="javascript:void(0)"><i class="icon-arrow-right"></i> read more</a>
                            </div>
                        </div>

                    </div>
                    <div class=" col-sm-6 col-md-6 col-lg-4">
                        <div class="feature-panel bg-white">
                            <div class="feature-icon"><i class="flaticon-010-cargo"></i></div>
                            <div class="feature-content"><i class="flaticon-010-cargo"></i>
                                <h4>ocean freight<br />services</h4>
                                <p>We provides with the types of basic conditions International sea transportation is
                                    implemented by our partners’ the largest ocean carriers.</p><a
                                    href="javascript:void(0)"><i class="icon-arrow-right"></i> read more</a>
                            </div>
                        </div>

                    </div>
                    <div class=" col-sm-6 col-md-6 col-lg-4">
                        <div class="feature-panel bg-white">
                            <div class="feature-icon"><i class="flaticon-004-trailer-1"></i></div>
                            <div class="feature-content"><i class="flaticon-004-trailer-1"></i>
                                <h4>road freight<br />services</h4>
                                <p>We provides a wide range of transportation services including quality international
                                    road transportation of cargoes &amp; goods arriving from the ports</p><a
                                    href="javascript:void(0)"><i class="icon-arrow-right"></i> read more</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="more-features">
                    <p>Logistic & Transport Solutions Saves Your Time. <a href="javascript:void(0)">Find your solution
                        </a></p>
                </div>
            </div>

        </section>

        <section class="cta cta-3 bg-theme" id="cta-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="heading heading-2 heading-light">
                            <p class="heading-subtitle">Directions, That Matter!</p>
                            <h2 class="heading-title">Digital Freight That Saves Your Time!</h2>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 offset-lg-1">
                        <div class="prief-set">
                            <p>We pride ourselves on providing the best transport and shipping services available
                                allover the world. Our skilled personnel, utilising communications, tracking and
                                processing software, combined with decades of experience! Through integrated supply
                                chain solutions, Fastlane Express Delivery Service drives sustainable competitive advantages to some of Australia's
                                largest companies.</p>
                            <ul class="advantages-list">
                                <li><i class="fas fa-check-circle"></i> Quality Control System</li>
                                <li><i class="fas fa-check-circle"></i> Unrivalled workmanship</li>
                                <li><i class="fas fa-check-circle"></i> 100% Satisfaction Guarantee</li>
                                <li><i class="fas fa-check-circle"></i> Accurate Testing Processes</li>
                                <li><i class="fas fa-check-circle"></i> Highly Professional Staff</li>
                                <li><i class="fas fa-check-circle"></i> Professional and Qualified</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="action-panels">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-6">
                            <div class="action-panel">
                                <div class="action-panel-img">
                                    <div class="bg-section"><img src="{{ asset('frontend/assets/images/cta/2.jpg') }}" alt="image" /></div>
                                </div>
                                <div class="action-panel-content">
                                    <div class="panel-icon"><i class="flaticon-015-scale"></i></div>
                                    <div class="panel-heading">
                                        <h3>Affordable Price, Certified Forwarders</h3>
                                    </div><a href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="action-panel">
                                <div class="action-panel-img">
                                    <div class="bg-section"><img src="{{ asset('frontend/assets/images/cta/3.jpg') }}" alt="Image" /></div>
                                </div>
                                <div class="action-panel-content inverted">
                                    <div class="panel-icon"><i class="flaticon-017-pallet"></i></div>
                                    <div class="panel-heading">
                                        <h3>Affordable Price, Certified Forwarders</h3>
                                    </div><a href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section class="cases-clients bg-parllax" id="cases-clients-1">
            <div class="cases-standard">
                <div class="container">
                    <div class="heading text-center">
                        <p class="heading-subtitle">Explore Recent Works</p>
                        <h2 class="heading-title">featured projects</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="carousel owl-carousel carousel-navs carousel-dots" data-slide="3"
                                data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="30"
                                data-loop="true" data-speed="3000">
                                <div class="case-item">
                                    <div class="case-item-warp">
                                        <div class="case-img"><img src="{{ asset('frontend/assets/images/work/full/1.jpg') }}"
                                                alt="work Item Image" /></div>

                                        <div class="case-content">
                                            <div class="case-title">
                                                <h4><a href="case-study-single.html">floride chemical factory</a></h4>
                                            </div>
                                            <div class="case-cat"><a href="javascript:void(0)">analytics</a><a
                                                    href="javascript:void(0)">optimization</a></div>
                                            <div class="case-desc">
                                                <p>We understand that data is the greatest asset when it comes to
                                                    analyzing and optimizing your supply chain performance.</p>
                                            </div>
                                            <div class="case-more"><a href="case-study-single.html"><i
                                                        class="icon-arrow-right"></i> explore case study</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="case-item">
                                    <div class="case-item-warp">
                                        <div class="case-img"><img src="{{ asset('frontend/assets/images/work/full/2.jpg') }}"
                                                alt="work Item Image" /></div>

                                        <div class="case-content">
                                            <div class="case-title">
                                                <h4><a href="case-study-single.html">warehouse inventory</a></h4>
                                            </div>
                                            <div class="case-cat"><a href="javascript:void(0)">warehousing</a><a
                                                    href="javascript:void(0)">distrbution</a></div>
                                            <div class="case-desc">
                                                <p>Cost savings is crucial, innovative technology minimizes your overall
                                                    spend by utilizing an schedule.</p>
                                            </div>
                                            <div class="case-more"><a href="case-study-single.html"><i
                                                        class="icon-arrow-right"></i> explore case study</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="case-item">
                                    <div class="case-item-warp">
                                        <div class="case-img"><img src="{{ asset('frontend/assets/images/work/full/3.jpg') }}"
                                                alt="work Item Image" /></div>

                                        <div class="case-content">
                                            <div class="case-title">
                                                <h4><a href="case-study-single.html">Minimize Manufacturing</a></h4>
                                            </div>
                                            <div class="case-cat"><a href="javascript:void(0)">logistics</a><a
                                                    href="javascript:void(0)">analytics</a></div>
                                            <div class="case-desc">
                                                <p>Our Group has been building relationships and projects that last.
                                                    Serving an impressive list of long-term.</p>
                                            </div>
                                            <div class="case-more"><a href="case-study-single.html"><i
                                                        class="icon-arrow-right"></i> explore case study</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="case-item">
                                    <div class="case-item-warp">
                                        <div class="case-img"><img src="{{ asset('frontend/assets/images/work/full/1.jpg') }}"
                                                alt="work Item Image" /></div>

                                        <div class="case-content">
                                            <div class="case-title">
                                                <h4><a href="case-study-single.html">floride chemical factory</a></h4>
                                            </div>
                                            <div class="case-cat"><a href="javascript:void(0)">analytics</a><a
                                                    href="javascript:void(0)">optimization</a></div>
                                            <div class="case-desc">
                                                <p>We understand that data is the greatest asset when it comes to
                                                    analyzing and optimizing your supply chain performance.</p>
                                            </div>
                                            <div class="case-more"><a href="case-study-single.html"><i
                                                        class="icon-arrow-right"></i> explore case study</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="case-item">
                                    <div class="case-item-warp">
                                        <div class="case-img"><img src="{{ asset('frontend/assets/images/work/full/2.jpg') }}"
                                                alt="work Item Image" /></div>

                                        <div class="case-content">
                                            <div class="case-title">
                                                <h4><a href="case-study-single.html">warehouse inventory</a></h4>
                                            </div>
                                            <div class="case-cat"><a href="javascript:void(0)">warehousing</a><a
                                                    href="javascript:void(0)">distrbution</a></div>
                                            <div class="case-desc">
                                                <p>Cost savings is crucial, innovative technology minimizes your overall
                                                    spend by utilizing an schedule.</p>
                                            </div>
                                            <div class="case-more"><a href="case-study-single.html"><i
                                                        class="icon-arrow-right"></i> explore case study</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="case-item">
                                    <div class="case-item-warp">
                                        <div class="case-img"><img src="{{ asset('frontend/assets/images/work/full/3.jpg') }}"
                                                alt="work Item Image" /></div>

                                        <div class="case-content">
                                            <div class="case-title">
                                                <h4><a href="case-study-single.html">Minimize Manufacturing</a></h4>
                                            </div>
                                            <div class="case-cat"><a href="javascript:void(0)">logistics</a><a
                                                    href="javascript:void(0)">analytics</a></div>
                                            <div class="case-desc">
                                                <p>Our Group has been building relationships and projects that last.
                                                    Serving an impressive list of long-term.</p>
                                            </div>
                                            <div class="case-more"><a href="case-study-single.html"><i
                                                        class="icon-arrow-right"></i> explore case study</a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </section>

        <section class="testimonial testimonial-3 bg-overlay bg-overlay-theme">
            <div class="bg-section"> <img src="{{ asset('frontend/assets/images/background/1.jpg') }}" alt="background-img" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="heading heading-light heading-6">
                            <p class="heading-subtitle">what our clients say!</p>
                            <h2 class="heading-title">
                                Individually Assess <br />Each Plan And Offer <br />Optimal Solutions!</h2>
                            <p class="heading-desc">Serving an impressive list of long-term clients with experience and
                                expertise in multiple industries.</p><a class="btn btn--transparent btn--inverse"
                                href="javascript:void(0)">our services</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-rs="1"
                            data-autoplay="false" data-nav="false" data-dots="true" data-space="40" data-loop="true"
                            data-speed="800">
                            <div class="testimonial-panel">
                                <div class="testimonial-panel-warp">
                                    <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                    <div class="testimonial-body">
                                        <div class="testimonial-img"><img src="{{ asset('frontend/assets/images/testimonial/3.jpg') }}"
                                                alt="Testimonial Author" /></div>
                                        <div class="testimonial-content">
                                            <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                            <p>{{ $appSetting->website_name }} International customer service is some of the best we
                                                have ever had with ocean we like to ship as much as possible with you
                                                all.</p>
                                            <div class="testimonial-meta">
                                                <h4>John R Peter</h4>
                                                <p>movein</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-panel">
                                <div class="testimonial-panel-warp">
                                    <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                    <div class="testimonial-body">
                                        <div class="testimonial-img"><img src="{{ asset('frontend/assets/images/testimonial/4.jpg') }}"
                                                alt="Testimonial Author" /></div>
                                        <div class="testimonial-content">
                                            <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                            <p>{{ $appSetting->website_name }} International customer service is some of the best we
                                                have ever had with ocean we like to ship as much as possible with you
                                                all.</p>
                                            <div class="testimonial-meta">
                                                <h4>James Wane</h4>
                                                <p>James Wane</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-panel">
                                <div class="testimonial-panel-warp">
                                    <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                    <div class="testimonial-body">
                                        <div class="testimonial-img"><img src="{{ asset('frontend/assets/images/testimonial/3.jpg') }}"
                                                alt="Testimonial Author" /></div>
                                        <div class="testimonial-content">
                                            <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                            <p>{{ $appSetting->website_name }} International customer service is some of the best we
                                                have ever had with ocean we like to ship as much as possible with you
                                                all.</p>
                                            <div class="testimonial-meta">
                                                <h4>Marko Smith</h4>
                                                <p>Aify Agency</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section class="blog blog-grid" id="blog-1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-7 text-center">
                            <p class="heading-subtitle">insight and trends</p>
                            <h2 class="heading-title">recent articles</h2>
                            <p class="heading-desc">Follow our latest news and thoughts which focuses exclusively on
                                insight, industry trends, top news headlines.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-12 col-md-6 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry-img"><a href="blog-single.html"><img src="{{ asset('frontend/assets/images/blog/grid/1.jpg') }}"
                                        alt="Importers achieve cost savings through the First Sale rule!" /></a></div>


                            <div class="entry-content">
                                <div class="entry-category"><a href="javascript:void(0)">cargo</a><a
                                        href="javascript:void(0)">insights</a>
                                </div>
                                <div class="entry-title">
                                    <h4><a href="blog-single.html">Importers achieve cost savings through the First Sale
                                            rule!</a></h4>
                                </div>
                                <div class="entry-date"><span class="month">jan 20</span><span class="date">2021</span>
                                </div>
                                <div class="entry-bio">
                                    <p>The trade war currently ensuing between the nations around the globe, fiercely
                                        with China, shows no signs of the first set of tariffs levied against solar...
                                    </p>
                                </div>
                                <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                            </div>
                        </div>

                    </div>
                    <div class=" col-12 col-md-6 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry-img"><a href="blog-single.html"><img src="{{ asset('frontend/assets/images/blog/grid/2.jpg') }}"
                                        alt="Cargo flow through better supply chain visibility, control." /></a></div>


                            <div class="entry-content">
                                <div class="entry-category"><a href="javascript:void(0)">warehouse</a><a
                                        href="javascript:void(0)">construction</a>
                                </div>
                                <div class="entry-title">
                                    <h4><a href="blog-single.html">Cargo flow through better supply chain visibility,
                                            control.</a></h4>
                                </div>
                                <div class="entry-date"><span class="month">jan 23</span><span class="date">2021</span>
                                </div>
                                <div class="entry-bio">
                                    <p>Global provider connected products for consumers, and enterprises worldwide,
                                        supply chain control is everything, provide visibility and traceability needed
                                        for...</p>
                                </div>
                                <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                            </div>
                        </div>

                    </div>
                    <div class=" col-12 col-md-6 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry-img"><a href="blog-single.html"><img src="{{ asset('frontend/assets/images/blog/grid/3.jpg') }}"
                                        alt="Importance of specialized focus in Projects, Oil &amp; Gas Logistics?" /></a>
                            </div>


                            <div class="entry-content">
                                <div class="entry-category"><a href="javascript:void(0)">logistics</a><a
                                        href="javascript:void(0)">distrbution</a>
                                </div>
                                <div class="entry-title">
                                    <h4><a href="blog-single.html">Importance of specialized focus in Projects, Oil
                                            &amp; Gas Logistics?</a></h4>
                                </div>
                                <div class="entry-date"><span class="month">jan 24</span><span class="date">2021</span>
                                </div>
                                <div class="entry-bio">
                                    <p>Our team provides skilled &amp; experienced managers who know the intricacies of
                                        this vertical and focus on providing solutions in Oil &amp; Gas sector...</p>
                                </div>
                                <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>


@endsection