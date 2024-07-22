<x-layout>

    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single_listing_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single_listing_responsive.css') }}">
    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('images/single_background.jpg') }}"></div>
        <div class="home_content">
            <div class="home_title">Tour Location</div>
        </div>
    </div>

    <!-- Offers -->

    <div class="listing">

        <!-- Search -->



        <!-- Single Listing -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_listing">

                        <!-- Hotel Info -->

                        <div class="hotel_info">

                            <!-- Title -->
                            <div class="hotel_title_container d-flex flex-lg-row flex-column">
                                <div class="hotel_title_content">
                                    <h1 class="hotel_title">{{ $location->Location }}</h1>
                                    <div class="rating_r rating_r_4 hotel_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class="hotel_location">{{ $location->Place }}</div>
                                </div>
                                {{-- <div class="hotel_title_button ml-lg-auto text-lg-right">
									<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
									<div class="hotel_map_link_container">
										<div class="hotel_map_link">See Location on Map</div>
									</div>
								</div> --}}
                            </div>

                            <!-- Listing Image -->

                            <div class="hotel_image">
                                <img src="{{ asset('storage/' . $location->image_path) }}" alt="">
                                <div
                                    class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
                                    <div class="hotel_review">
                                        <div class="hotel_review_content">
                                            <div class="hotel_review_title">
                                                very good</div>
                                        </div>
                                        <div class="hotel_review_rating text-center"
                                            style="background-color: rgb(63, 0, 63)">8.1</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hotel Gallery -->


                            <!-- Hotel Info Text -->

                            <div class="hotel_info_text" style="text-align: justify">
                                <p style="color: black; font-size: 18px">{{ $location->Description }}</p>
                            </div>

                            <!-- Hotel Info Tags -->

                            <div class="hotel_info_tags">
                                <ul class="hotel_icons_list">
                                    <li class="hotel_icons_item"><img src="{{ asset('images/post.png') }}"
                                            alt=""></li>
                                    <li class="hotel_icons_item"><img src="{{ asset('images/compass.png') }}"
                                            alt=""></li>
                                    <li class="hotel_icons_item"><img src="{{ asset('images/bicycle.png') }}"
                                            alt=""></li>
                                    <li class="hotel_icons_item"><img src="{{ asset('images/sailboat.png') }}"
                                            alt=""></li>
                                </ul>
                            </div>

                        </div>


                        <!-- Do's and Don'ts for Travel Locations -->

                        <div class="dos_and_donts">
                            <h2>Do's and Don'ts</h2>
                            <div class="row">
                                <div class="col-md-6 dos_section">
                                    <h3>Do's</h3>
                                    <ul>
                                        <li><strong>Do follow the local guidelines and regulations.</strong></li>
                                        <li><strong>Do respect the natural environment and wildlife.</strong></li>
                                        <li><strong>Do dispose of trash in designated bins to keep the area
                                                clean.</strong></li>
                                        <li><strong>Do wear appropriate attire for the location.</strong></li>
                                        <li><strong>Do stay hydrated and apply sunscreen when visiting beaches.</strong>
                                        </li>
                                        <li><strong>Do carry sufficient water and snacks, especially in remote
                                                areas.</strong></li>
                                        <li><strong>Do take photos without disturbing the site or others.</strong></li>
                                        <li><strong>Do respect local customs and traditions.</strong></li>
                                        <li><strong>Do follow safety instructions and signage.</strong></li>
                                        <li><strong>Do support local businesses and vendors.</strong></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 donts_section">
                                    <h3>Don'ts</h3>
                                    <ul>
                                        <li><strong>Don't litter or leave any waste behind.</strong></li>
                                        <li><strong>Don't disturb wildlife or remove plants or animals from their
                                                habitat.</strong></li>
                                        <li><strong>Don't deface or damage heritage sites or monuments.</strong></li>
                                        <li><strong>Don't enter restricted or prohibited areas.</strong></li>
                                        <li><strong>Don't play loud music or create excessive noise.</strong></li>
                                        <li><strong>Don't engage in any activities that could harm the
                                                environment.</strong></li>
                                        <li><strong>Don't ignore warning signs or safety instructions.</strong></li>
                                        <li><strong>Don't wear inappropriate attire for religious or cultural
                                                sites.</strong></li>
                                        <li><strong>Don't leave valuables unattended or unsecured.</strong></li>
                                        <li><strong>Don't purchase items made from endangered species.</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .terms_conditions,
        .important_notes,
        .dos_and_donts {
            margin-top: 40px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .terms_conditions h2,
        .important_notes h2,
        .dos_and_donts h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            border-bottom: 2px solid #003366;
            padding-bottom: 10px;
        }

        .terms_conditions ul,
        .important_notes ul,
        .dos_and_donts ul {
            list-style-type: none;
            padding: 0;
        }

        .terms_conditions li,
        .important_notes li,
        .dos_and_donts li {
            background: #f4f4f9;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .terms_conditions li:nth-child(even),
        .important_notes li:nth-child(even),
        .dos_and_donts li:nth-child(even) {
            background: #e9ecef;
        }

        .terms_conditions strong,
        .important_notes strong,
        .dos_and_donts strong {
            color: #003366;
            margin-right: 10px;
        }

        .important_notes li {
            position: relative;
            padding-left: 30px;
        }

        .important_notes li::before {
            content: "\270F";
            /* Unicode for pencil icon */
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #28a745;
            font-size: 20px;
        }

        .dos_and_donts .row {
            display: flex;
            justify-content: space-between;
        }

        .dos_section,
        .donts_section {
            width: 48%;
        }

        .dos_section h3,
        .donts_section h3 {
            font-size: 20px;
            color: #003366;
            margin-bottom: 10px;
        }

        .dos_section ul,
        .donts_section ul {
            list-style-type: none;
            padding: 0;
        }

        .dos_section li,
        .donts_section li {
            background: #f4f4f9;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            position: relative;
            padding-left: 30px;
        }

        .dos_section li:nth-child(even),
        .donts_section li:nth-child(even) {
            background: #e9ecef;
        }

        .dos_section li::before,
        .donts_section li::before {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .dos_section li::before {
            content: "\2713";
            /* Unicode for check mark */
            color: #28a745;
        }

        .donts_section li::before {
            content: "\2715";
            /* Unicode for cross mark */
            color: #dc3545;
        }
    </style>
</x-layout>
