@extends('website.master')
@section('title', 'Texlink')

@section('body')

    <section data-bs-version="5.1" class="header18 cid-uftRsmBvSP mbr-fullscreen"
        data-bg-video="{{ asset('images/video04.mp4') }}?autoplay=1&amp;loop=1&amp;playlist=gOyGppJFWPQ&amp;t=20&amp;mute=1&amp;playsinline=1&amp;controls=0&amp;showinfo=0&amp;autohide=1&amp;allowfullscreen=true&amp;mode=transparent">


        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="content-wrap col-12 col-md-12">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white display-1">
                        <strong>Texlink Service and Trading</strong>
                    </h1>
                    {{-- <p class="mbr-fonts-style mbr-text mbr-white mb-4 pb-5 display-7">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Molestias similique minus dicta eos voluptas veniam, tempora itaque reiciendis
                        iusto, hic, quo doloremque tempore! Cum quae velit possimus architecto reiciendis repudiandae
                        consequuntur maiores, obcaecati dolores esse quasi, quia id officiis. Cum rem placeat ea atque quia
                        consequuntur maiores, obcaecati dolores esse quasi, quia id officiis. Cum rem placeat ea atque quia
                        accusantium pariatur non, autem facilis?
                    </p> --}}
                </div>
            </div>
        </div>
    </section>


    <section data-bs-version="5.1" class="image02 cid-uftRsmBUfi mbr-fullscreen mbr-parallax-background"
        id="image-13-uftRsmBUfi">


        <div class="container">
            <div class="row"></div>
        </div>
    </section>

    <section data-bs-version="5.1" class="pricing02 cid-uftRsmBWtK" id="product-list-8-uftRsmBWtK">


        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong>Products</strong>
                        </h4>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr07-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Sanforizing Rubber Belt</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Hardness: 40 &#xb1; 2<br />
                                Inner diameter: 1262<br />
                                Width: 1500mm-2230mm<br />
                                Circumference: 3962mm-4000mm<br />
                                Material: 100% Natural rubber<br />
                                Thickness: 50mm-73mm(Customized)<br />
                                Application: Used in the fabric finishing process of the sanforizing machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product07') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr02-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Heat Press Printing Felt Blanket</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: Off-White/White<br />
                                Temperature: 160&deg;C-260&deg;C<br />
                                Material: Nomax/Polyester<br />
                                Density: Customizable<br />
                                Thickness: 2mm-15mm<br />
                                Dimension(L*W*H): Customizable<br />
                                Application: Textile Machinery,Flatened Heat Press Machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product02') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-12 col-lg-4 ">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr03-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Endless Felt Blanket For Pleating Machine</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: Off-white<br />
                                Temperature: 260&deg;C<br />
                                Material: 100% Nomax<br />
                                Density: 400g/m&sup2;/mm<br />
                                Thickness: 3mm-6mm<br />
                                Application: Textile pleating machinery
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product03') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr04-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Compacting Needled Felt Blanket</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: Off-White/White<br />
                                Temperature: 180&deg;C-280&deg;C<br />
                                Material: Nomax/Polyester<br />
                                Density: 8800g/m&sup2;-10000g/m&sup2;<br />
                                Width: 1800mm-2800mm<br />
                                Thickness: 18mm-21mm<br />
                                Dimension(L*W*H): Customized according to machine<br />
                                Application: Textile machinery, Compactor machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product04') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr05-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Laminating/Calender Machine Felt Blanket</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: Off-White/White<br />
                                Temperature: 160&deg;C-260&deg;C<br />
                                Material: Nomax/Polyester<br />
                                Density: 400g/m&sup2;/mm<br />
                                Thickness: 5mm-10mm<br />
                                Dimension(L*W*H): Customized according to machine<br />
                                Application: Textile industry, Calender machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product05') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-12 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr06-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Sanforizing Needle Felt Blanket</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: Off-White/White<br />
                                Temperature: 160&deg;C-260&deg;C<br />
                                Material: Nomax/Polyester<br />
                                Density: 400g/m&sup2;/mm<br />
                                Thickness: 6mm-10mm<br />
                                Dimension(L*W*H): Customized according to machine<br />
                                Application: Textile sanforizing machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product06') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr01-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Heat Transfer Printing Felt Blanket</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: White<br />
                                Temperature: 260&deg;C<br />
                                Material: Nomax<br />
                                Width: 600mm-4500mm<br />
                                Density: 400g/m&sup2;/mm<br />
                                Thickness: 6mm-10mm<br />
                                Application: Heat Transfer Printing Machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product01') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr08-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>100% Nomex Ironer Belt</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: Off-White<br />
                                Width: 100mm, 150mm, 200mm<br />
                                Length: Customizable<br />
                                Thickness: 3mm-6mm<br />
                                Material: 100% Nomax<br />
                                Temperature: Below 260&deg;C<br />
                                Density: 400g/m&sup2;/mm<br />
                                Dimension(L*W*H): Customized size<br />
                                Application: Suitable for all kinds of ironing machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product08') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-12 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr09-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>100% Polyester Ironer Belt</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: White<br />
                                Width: 100mm, 150mm, 200mm<br />
                                Length: Customizable<br />
                                Thickness: 2mm-6mm<br />
                                Material: 100% Polyester needle punch<br />
                                Temperature: Below 180&deg;C<br />
                                Density: 400g/m&sup2;/mm<br />
                                Dimension(L*W*H): Customized size<br />
                                Application: Suitable for all kinds of ironing machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product09') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr10-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>100% Polyester Woven Ironer Belt</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: White<br />
                                Temperature: 160&deg;C<br />
                                Material: Polyester<br />
                                Density: 1000g/m&sup2;-2200g/m&sup2;<br />
                                Length: 50m/roll, 100m/roll or Customized<br />
                                Width: 100mm, 150mm, 200mm<br />
                                Dimension(L*W*H): Customized size<br />
                                Thickness: 2mm<br />
                                Application: Suitable for normal operation of ironing machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product10') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr11-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>100% Polyester/Nomex Ironer Padding</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: Off-White/White<br />
                                Temperature: 160&deg;C-260&deg;<br />
                                Material: Polyester/Nomax<br />
                                Density: 260g/m&sup2;/mm<br />
                                Thickness: 3mm-6mm<br />
                                Width: 3.3mm, 3.6mm, 3.8mm<br />
                                Dimension(L*W*H): Customized size<br />
                                Application: Suitable for normal operation of ironing machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product11') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-12 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr12-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>100% Nomex/ PPS/ Polyester/ Guide Tape</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Type: Guide Tape<br />
                                Color: Off-White(Nomex and PPS), White(Polyester)<br />
                                Width: 15mm, 19mm<br />
                                Length: 100m/roll, 400m/roll<br />
                                Thickness: 0.3mm<br />
                                Material: 100% Nomex/PPS/Polyester<br />
                                Temperature: Nomex 280&deg;C/PPS 200&deg;/Polyester 160&deg;<br />
                                Dimension(L*W*H): Customized size<br />
                                Application: Suitable for high-speed oil heating steam processing
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product12') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr13-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Fold Bands/Cotton Belt</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: Off-White<br />
                                Temperature: 160&deg;C<br />
                                Material: Cotton<br />
                                Length: 100m/roll<br />
                                Width: 50mm, 75mm<br />
                                Thickness: 2mm<br />
                                Dimension(L*W*H): Customized size<br />
                                Application: Suitable for normal operation of ironing machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product13') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr14-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Stretch Belt/Non-Skid Belt</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: Off-white<br />
                                Material: Cotton/Rubber-cotton<br />
                                Length: 50m/roll, 100m/roll<br />
                                Width: 50mm<br />
                                Thickness: 2mm<br />
                                Application: Suitable for normal operation of ironing machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product14') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-12 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr15-512.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Steel Slitting Machine Felt</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: White<br />
                                Temperature: 160&deg;<br />
                                Material: Polyester<br />
                                Density: 3200g, 3700g, Customizable <br />
                                Thickness: 3mm-20mm<br />
                                Dimension(L*W*H): Customized according to machine<br />
                                Application: Steel slitting machine
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer">
                            <a href="{{ route('product15') }}" class="btn item-btn btn-primary display-7">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="news08 cid-uftRsmCuHV" id="blog-4-uftRsmCuHV">


        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-12 content-head">
                    <div class="mbr-section-head">
                        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong>Services</strong>
                        </h4>

                    </div>
                </div>
            </div>
            <div class="row mbr-masonry" data-masonry="{" percentposition":="" true="" }"="">
                <div class="item features-image col-12 col-md-6 col-lg-4 active">
                    <div class="item-wrapper">
                        <div class="item-img mb-3">
                            <img src="{{ asset('images/service01.png') }}" alt="Mobirise Website Builder"
                                title="">
                        </div>
                        <div class="item-content align-left">
                            <h6 class="item-subtitle mbr-fonts-style display-5 text-center">
                                <strong>Sanforizing, Desizing and Mercerizing</strong>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-4 active">
                    <div class="item-wrapper">
                        <div class="item-img mb-3">
                            <img src="{{ asset('images/service02.png') }}" alt="Mobirise Website Builder"
                                title="">
                        </div>
                        <div class="item-content align-left">
                            <h6 class="item-subtitle mbr-fonts-style display-5 text-center">
                                <strong>Printing and Coating</strong>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-4 active">
                    <div class="item-wrapper">
                        <div class="item-img mb-3">
                            <img src="{{ asset('images/service03.png') }}" alt="Mobirise Website Builder"
                                title="">
                        </div>
                        <div class="item-content align-left">
                            <h6 class="item-subtitle mbr-fonts-style display-5 text-center">
                                <strong>Continuous Over dyeing</strong>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-6 active">
                    <div class="item-wrapper">
                        <div class="item-img mb-3">
                            <img src="{{ asset('images/service04.png') }}" alt="Mobirise Website Builder"
                                title="">
                        </div>
                        <div class="item-content align-left">
                            <h6 class="item-subtitle mbr-fonts-style display-5 text-center">
                                <strong>Stentering and Heat Setting</strong>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-12 col-lg-6 active">
                    <div class="item-wrapper">
                        <div class="item-img mb-3">
                            <img src="{{ asset('images/service05.png') }}" alt="Mobirise Website Builder"
                                title="">
                        </div>
                        <div class="item-content align-left">
                            <h6 class="item-subtitle mbr-fonts-style display-5 text-center">
                                <strong>Brushing and Sueding</strong>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="people07 cid-uftRsmDg1U" id="testimonials-8-uftRsmDg1U">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <p class="card-text mbr-fonts-style display-5">C.E.O of Texlink Service and Trading</p>
                    <div class="img-wrapper mt-3 justify-content-center">
                        <img src="{{ asset('images/kibria.jpg') }}" alt="" data-slide-to="0"
                            data-bs-slide-to="0">
                    </div>
                    <p class="card-title mbr-fonts-style mt-3 display-7">
                        <strong>D. G. Kibria</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="article15 cid-uftRsmDdQv" id="about-us-15-uftRsmDdQv">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 gx-5">
                    <img src="{{ asset('images/visitingCard01.png') }}" alt="" style="height:250px;">
                </div>
                <div class="col-12 col-md-6">
                    <p class="mbr-text mbr-fonts-style display-7"> Dewan Golam Kibria<br />
                        I have 24 years of work experience in Denim sector.<br />
                        I am mostly specialized on Denim fabric
                        Finishing process.<br />
                        My business name is Texlink Service and Trading.<br /></p>
                </div>
            </div>
        </div>
    </section>



    <section data-bs-version="5.1" class="header18 cid-uftRsmE7oa mbr-fullscreen"
        data-bg-video="{{ asset('images/video05.mp4') }}?autoplay=1&amp;loop=1&amp;playlist=B7Vo3yPSXl0&amp;t=20&amp;mute=1&amp;playsinline=1&amp;controls=0&amp;showinfo=0&amp;autohide=1&amp;allowfullscreen=true&amp;mode=transparent"
        id="video-5-uftRsmE7oa">


        {{-- <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div> --}}
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="slider4 mbr-embla cid-uftRsmGHHP" id="gallery-13-uftRsmGHHP">


        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="embla position-relative" data-skip-snaps="true" data-align="center"
                        data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true"
                        data-auto-play-interval="5" data-draggable="true">
                        <div class="embla__viewport">
                            <div class="embla__container">
                                <div class="embla__slide slider-image item"
                                    style="margin-left: 1rem; margin-right: 1rem;">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('images/material01.jpg') }}"
                                                    alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="embla__slide slider-image item"
                                    style="margin-left: 1rem; margin-right: 1rem;">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('images/material02.jpg') }}"
                                                    alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="embla__slide slider-image item"
                                    style="margin-left: 1rem; margin-right: 1rem;">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('images/material03.jpg') }}"
                                                    alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="embla__slide slider-image item"
                                    style="margin-left: 1rem; margin-right: 1rem;">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('images/material04.jpg') }}"
                                                    alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="embla__slide slider-image item"
                                    style="margin-left: 1rem; margin-right: 1rem;">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('images/material05.jpg') }}"
                                                    alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="embla__button embla__button--prev">
                            <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                            <span class="sr-only visually-hidden visually-hidden">Previous</span>
                        </button>
                        <button class="embla__button embla__button--next">
                            <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                            <span class="sr-only visually-hidden visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section data-bs-version="5.1" class="features10 cid-uftRsmGosE" id="metrics-2-uftRsmGosE">




        <div class="container">

            <div class="row justify-content-center">
                <div class="item features-without-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="card-box align-left">

                            <p class="card-title mbr-fonts-style mb-3 display-1">
                                <strong>1000+</strong>
                            </p>
                            <p class="card-text mbr-fonts-style mb-3 display-7">Happy Customers</p>

                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="card-box align-left">

                            <p class="card-title mbr-fonts-style mb-3 display-1">
                                <strong>500+</strong>
                            </p>
                            <p class="card-text mbr-fonts-style mb-3 display-7">Innovative Solutions</p>

                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="card-box align-left">

                            <p class="card-title mbr-fonts-style mb-3 display-1">
                                <strong>6+</strong>
                            </p>
                            <p class="card-text mbr-fonts-style mb-3 display-7">Years of Experience</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="social05 cid-uftRsmGYmG" id="follow-us-2-uftRsmGYmG">

        <div class="container">
            <div class="row">
                <h3 class="mbr-section-title align-center mb-5 mbr-fonts-style display-2">
                    <strong>Join Our Textile Revolution</strong>
                </h3>
                <div class="col-12">
                    <div class="social-row">
                        <div class="soc-item">
                            <a href="https://www.facebook.com/texlinkservice">
                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#">
                                <span class="mbr-iconfont socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#">
                                <span class="mbr-iconfont socicon-instagram socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#">
                                <span class="mbr-iconfont socicon socicon-linkedin"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#">
                                <span class="mbr-iconfont socicon socicon-twitch"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
