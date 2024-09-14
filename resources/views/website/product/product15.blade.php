
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
                            <img src="{{ asset('images/pr15-512.png') }}" alt="Mobirise Website Builder">
                        </div>

                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-6">
                    <div class="item-wrapper">
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Steel Slitting Machine Felt</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: White<br />
                                Temperature: 160&deg;<br />
                                Material: Polyester<br />
                                Density: 3200g, 3700g, Customizable <br/>
                                Thickness: 3mm-20mm<br />
                                Dimension(L*W*H): Customized according to machine<br />
                                Application: Steel slitting machine
                            </p>
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>Description</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Color: White<br />
                                Temperature: 160&deg;<br />
                                Material: Polyester<br />
                                Density: 3200g, 3700g, Customizable <br/>
                                Thickness: 3mm-20mm<br />
                                Dimension(L*W*H): Customized according to machine<br />
                                Application: Steel slitting machine
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
