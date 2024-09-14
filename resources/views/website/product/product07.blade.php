
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
                            <img src="{{ asset('images/pr07-512.png') }}" alt="Mobirise Website Builder">
                        </div>

                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-6">
                    <div class="item-wrapper">
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
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Description</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Endless and seamless attribute textile machine conveyor belt without joints and seams. It can provide a smooth and uniform shrinkage effect for fabrics without leaving marks or wrinkles. High-temperature resistance, extrusion resistance, high elasticity, high shrinkage, wear resistance, anti-internal cracking, anti-sticking, and so on. It can withstand the high-temperature steam and pressure in the shrinkage finishing process and maintain stable performance. The rubber material is 100% pure, without any impurities, the higher the purity, the higher the quality, the heat-resistant temperature meets the requirements, the abrasion resistance, and the effective use time is longer than other manufacturers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
