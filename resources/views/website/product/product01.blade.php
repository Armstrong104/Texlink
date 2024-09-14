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
                            <img src="{{ asset('images/pr01-512.png') }}" alt="Mobirise Website Builder">
                        </div>

                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-6">
                    <div class="item-wrapper">
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
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Description</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Endless and seamless attribute textile machine conveyor belt without joints and seams. It
                                has no weaknesses and has a flat thickness.

                                The heat transfer felt is flat with no blemishes, bumps, scales. The surface is extremely
                                smooth. Features: Blanket surface is as smooth and smooth as the printed blanket. Shrinkage,
                                long life, high-temperature resistance, high elasticity.

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