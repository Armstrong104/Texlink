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
                            <img src="{{ asset('images/pr04-512.png') }}" alt="Mobirise Website Builder">
                        </div>

                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-6">
                    <div class="item-wrapper">
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
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Description</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Endless and seamless attributetextile machine conveyor belt without joints and seams. It has no weaknesses and has a flat thickness.

                                The compactor machine felt is flat with no blemishes, bumps, scales. The surface is extremely smooth. Features: Blanket surface is as smooth and smooth as the printed blanket. Shrinkage, long life, high-temperature resistance, high elasticity.

                                The high temperature felt material is 100% pure, without any impurities, the higher the purity, the higher the quality, the heat-resistant temperature meets the requirements, the abrasion resistance, and the effective use time is longer than other manufacturers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
