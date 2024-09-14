
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
                            <img src="{{ asset('images/pr14-512.png') }}" alt="Mobirise Website Builder">
                        </div>

                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-6">
                    <div class="item-wrapper">
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
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Description</strong>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
