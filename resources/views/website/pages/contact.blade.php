@extends('website.master')

@section('title', 'Contact')

@section('body')
    <section data-bs-version="5.1" class="header18 cid-uftRsmBvSP mbr-fullscreen"
        data-bg-video="{{ asset('images/video04.mp4') }}?autoplay=1&amp;loop=1&amp;playlist=gOyGppJFWPQ&amp;t=20&amp;mute=1&amp;playsinline=1&amp;controls=0&amp;showinfo=0&amp;autohide=1&amp;allowfullscreen=true&amp;mode=transparent"
        id="hero-16-uftRsmBvSP">

        <div class="container-fluid">
            <div class="row">
                <div class="content-wrap col-12 col-md-12">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white display-1">
                        <strong>Contact Us</strong>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="contacts02 map1 cid-uftRsmGKaa" id="contacts-2-uftRsmGKaa">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-md-12 col-lg-6">
                    <div class="card-wrapper">
                        <div class="text-wrapper">

                            <ul class="list mbr-fonts-style display-7">
                                <li class="mbr-text item-wrap">
                                    Phone: 01703254545
                                </li>

                                <li class="mbr-text item-wrap">
                                    WhatsApp: 01703254545

                                </li>

                                <li class="mbr-text item-wrap">
                                    Email:
                                    <a href="mailto:info@texlinkservices.com" class="text-black">info@texlinkservices.com</a>
                                </li>

                                <li class="mbr-text item-wrap">
                                    Address: 203/1 (6th floor) Begum Rokeya Sarani, Senpara Parbata, Mirpur-10, Dhaka-1216
                                </li>

                                <li class="mbr-text item-wrap">
                                    Working Hours:
                                    Sat-Thu: 9am-6pm
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="map-wrapper col-md-12 col-lg-6">
                    <div class="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.904647565637!2d90.37021917439318!3d23.797911086952578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c10028631577%3A0x84af85673ce241da!2sTEXLINK%20SERVICE%20AND%20TRADING!5e1!3m2!1sen!2sbd!4v1723865141058!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="form5 cid-uftRsmGASo" id="contact-form-3-uftRsmGASo">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong>Get in Touch Today!</strong>
                        </h3>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="{{ route('post-message') }}" method="POST" class="mbr-form form-with-styler"
                        data-form-title="Form Name" id="contactForm">
                        @csrf
                        @if (Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                                <input type="text" name="name" placeholder="Name" data-form-field="name"
                                    class="form-control" id="name" value="{{ old('name') }}">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                                <input type="email" name="email" placeholder="Email" data-form-field="email"
                                    class="form-control" id="email" value="{{ old('email') }}">
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                            </div>
                            <div class="col-12 form-group mb-3" data-for="phone">
                                <input type="number" name="phone" placeholder="Phone" data-form-field="phone"
                                    class="form-control" id="phone" value="{{ old('phone') }}">
                                <span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : '' }}</span>
                            </div>
                            <div class="col-12 form-group mb-3" data-for="textarea">
                                <textarea name="message" placeholder="Message" data-form-field="textarea" class="form-control" id="message">{{ old('message') }}</textarea>
                                <span
                                    class="text-danger">{{ $errors->has('message') ? $errors->first('message') : '' }}</span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                <button type="submit" class="btn btn-primary display-7">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
