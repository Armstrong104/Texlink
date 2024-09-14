@extends('website.master')

@section('title', 'Product Details')

@section('body')

    <section class="product-details-header">

        <div class="mbr-overlay">
            <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-2 text-center">
                <strong>Product Details</strong>
            </h1>
        </div>
    </section>

    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="item features-image col-12 col-md-6 col-lg-6">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('images/pr09-512.png') }}" alt="Mobirise Website Builder">
                        </div>

                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-6">
                    <div class="item-wrapper">
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
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Description</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Endless and seamless attribute conveyor felt belt without joints and seams. It has no
                                weaknesses and has a flat thickness.

                                The felt for the laundry flat iron machine is flat with no blemishes, bumps, scales. Good
                                heat resistance, high stability, long life. It allows for easier installation and less
                                downtime. good dimensional stability, abrasion resistance.

                                The high temperature felt material is 100% pure, without any impurities, the higher the
                                purity, the higher the quality, the heat-resistant temperature meets the requirements, the
                                abrasion resistance, and the effective use time is longer than other manufacturers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
