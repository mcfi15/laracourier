<div>
    {{-- <section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
        <div class="bg-section"><img src="{{ asset('frontend/assets/images/page-titles/10.jpg') }}" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="title text-lg-left">
                        
                        
                        <div class="clearfix"></div>
                        <ol class="breadcrumb justify-content-lg-start">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">company</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </div>

                </div>

            </div>

        </div>

    </section> --}}

    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="contact-details">
                                <h6>contact details</h6>
                                <ul class="list-unstyled info">
                                    
                                    
                                    <li><span class="fas fa-envelope"></span><a href="mailto:{{ $appSetting->email }}">{{ $appSetting->email }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="opening-hours">
                                <h6>opening hours</h6>
                                <ul class="list-unstyled">
                                    <li> <span>Monday-friday</span><span>10:00 - 18:00</span></li>
                                    <li> <span>saturday</span><span>10:00 - 14:00</span></li>
                                    <li> <span>sunday</span><span>closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    {{-- @include('layouts.alert.msgFront') --}}
                    <form class="" wire:submit.prevent="send" method="post">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <input class="form-control" type="text" name="name" wire:model.live="name" id="name" placeholder="Name"
                                     />
                                     @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>  
                                    @enderror
                            </div>
                            <div class="col-12 col-lg-6">
                                <input class="form-control" type="text" name="email" wire:model.live="email" id="email" placeholder="Email"
                                     />
                                     @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>  
                                    @enderror
                            </div>

                            <div class="col-12 col-lg-6">
                                <input class="form-control" type="text" name="subject" wire:model.live="subject" id="subject" placeholder="Subject"
                                     />
                                     @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>  
                                    @enderror
                            </div>
                        
                            <div class="col-12">
                                <textarea class="form-control" name="message" wire:model.live="message" id="message" cols="30" rows="2"
                                    placeholder="message" ></textarea>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>  
                                    @enderror
                            </div>
                            <div wire:loading wire:target="send">
                                <img src="{{ asset('uploads/images/load.gif') }}" width="40" alt="">
                            </div>
                            <div class="col-12">
                                <button class="btn btn--primary" wire:loading.attr="disabled" wire:loading.remove wire:target="send" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
</div>
