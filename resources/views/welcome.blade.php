<x-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .trending_item {
            flex: 1 1 22%;
            max-width: 22%;
        }

        @media (max-width: 1200px) {
            .trending_item {
                flex: 1 1 30%;
                max-width: 30%;
            }
        }

        @media (max-width: 992px) {
            .trending_item {
                flex: 1 1 45%;
                max-width: 45%;
            }
        }

        @media (max-width: 768px) {
            .trending_item {
                flex: 1 1 100%;
                max-width: 100%;
            }
        }


        /* activities */

        .test_slider_container {
            margin-top: 30px;
            position: relative;
        }

        .test_item {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            height: 400px;
            /* Increased height */
            position: relative;

        }

        .test_image {
            width: 100%;
            height: 70%;
            /* Adjust this value to control the height of the image */
            overflow: hidden;
        }

        .test_image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .test_icon {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #ffa500;
            border-radius: 50%;
            padding: 10px;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        .test_icon img {
            width: 24px;
        }

        .test_content_container {
            padding: 15px;
            background: rgba(0, 0, 0, 0.5);
            /* Added background to content for better readability */
        }

        .test_content {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 30%;
            /* Adjust this value to control the content height */
        }

        .test_item_info {
            margin-bottom: 5px;
            font-size: 1.5em;
            color: #fff;
            font-weight: bold;
            background: rgba(179, 178, 178, 0.8);
            padding: 10px 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect for price section */
        .test_item_info:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        /* Optional: Add hover effect for the entire card */
        .test_item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .test_quote_title a {
            font-size: 1.4em;
            color: #fff;
            /* Changed to white for better contrast */
            text-decoration: none;
            transition: color 0.3s ease;
            margin-top: 5px;
        }

        .test_quote_title a:hover {
            color: #FFB300;
        }

        .test_quote_text {
            font-size: 1em;
            color: #fff;
            /* Changed to white for better contrast */
            margin-top: 5px;
            text-align: center;
        }

        .owl-item {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .test_slider_nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 1000;
        }

        .test_slider_prev {
            left: 0;
        }

        .test_slider_next {
            right: 0;
        }

        .read_more {
            display: flex;
            align-items: center;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #ffa500;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .read_more:hover {
            color: #ff8c00;
            background-color: #fff;
        }

        .read_more svg {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .read_more:hover svg {
            transform: translateX(3px);
        }

        @media (max-width: 768px) {
            .test_item {
                height: 300px;
                /* Adjust this value for smaller screens */
            }

            .test_image {
                height: 60%;
            }

            .test_content {
                height: 40%;
            }

            .test_name,
            .test_quote_title a,
            .test_quote_text {
                font-size: 0.9em;
            }
        }

        /* Offer */
        .offers_image_container {
            position: relative;
            width: 100%;
            height: 200px;
            /* Further reduced height */
            overflow: hidden;
        }

        .offer_name {
            position: absolute;
            bottom: 5px;
            background: rgba(71, 0, 151, 0.916);
            padding: 3px 8px;
            border-radius: 0 5px 5px 0;
            z-index: 6;
            color: #fffbfb;
            font-weight: bold;
            font-size: 16px;
            /* Further reduced font size */
            display: block;
            transition: background 0.3s, transform 0.3s;
        }

        .offers_image_background {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease-in-out;
        }

        .offers_col {
            margin-bottom: 10px;
            /* Further reduced margin */
            display: flex;
            width: 100%;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .offers_item {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            display: flex;
            flex-direction: column;
            height: auto;
            min-height: 250px;
            /* Further reduced minimum height */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            position: relative;
        }

        .offers_content {
            padding: 10px;
            /* Reduced padding */
            overflow: hidden;
            flex: 1;
            position: relative;
        }

        /* Hover effects */
        .offers_col:hover .offers_item {
            transform: translateY(-3px);
            /* Reduced lift effect */
        }

        .offers_image_container:hover .offers_image_background {
            transform: scale(1.05);
            /* Slight zoom-in effect */
        }

        .offers_image_container:hover .offer_name {
            background: rgb(82, 0, 150);
            color: white;
            transform: translateY(-3px);
            /* Slight lift text */
        }

        .offers_link {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .offers_link a {
            display: inline-block;
            padding: 5px 10px;
            /* Further reduced padding */
            background-color: #550696;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            font-weight: bold;
            font-size: 14px;
            /* Reduced font size */
        }

        .offers_link a:hover {
            background-color: #ddd;
            color: #3d0181;
            transform: translateY(-3px);
        }

        .offers_link a::after {
            content: ' \2192';
            display: inline-block;
            margin-left: 5px;
            /* Reduced space */
            transition: transform 0.3s;
        }

        .offers_link a:hover::after {
            transform: translateX(3px);
            /* Reduced move arrow */
        }

        @media (max-width: 768px) {
            .offers_col {
                width: 100%;
            }

            .offers_item {
                height: auto;
            }

            .offers_image_background {
                height: 200px;
                /* Adjusted height for mobile view */
            }
        }

        @media (min-width: 769px) {
            .offers_col {
                flex: 1 0 22%;
                /* Adjust the width for desktop view */
                max-width: 22%;
                /* Reduced max-width */
                margin: 1.5%;
                /* Reduced margin */
            }
        }



        .purple_button a {
            background: #800080;
            /* Purple color */
            color: #fff;
            /* White text color */
        }

        .purple_button a:hover {
            background: #550055;
            /* Darker purple for hover effect */
        }

        .custom_read_more {
            background-color: #800080;
            /* Purple color */
            color: #fff;
            /* White text color */
            padding: 10px 20px;
            /* Adjust padding as needed */
            border-radius: 5px;
            /* Rounded corners */
            text-decoration: none;
            /* Remove underline */
        }

        .custom_read_more:hover {
            background-color: #550055;
            /* Darker purple for hover effect */
        }

        /* Custom styles for the bag icon */
        .test_icon {
            background-color: #800080;
            /* Purple color */
            padding: 10px;
            /* Add padding if needed */
            border-radius: 50%;
            /* Make it a circle if desired */
            display: inline-block;
        }

        /* Optionally adjust the icon itself */
        .custom_bag_icon {
            filter: grayscale(1) brightness(2);
            /* Adjust the icon's appearance if needed */
        }

        .service-item {
            text-align: center;
            margin: 10px;
            width: 200px;
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .service-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>


    <!-- Home -->

    <div class="home">

        <!-- Home Slider -->

        <div class="home_slider_container">

            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url({{ asset('images/hero.jpg') }})">
                    </div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-aos="zoom-in" data-aos-offset="100"
                            data-aos-delay="0" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-once="false">
                            <h1 style="text-shadow: 2px 2px 5px rgb(0, 0, 0);">Andaman Blue Ocean Travels
                            </h1>

                            <div class="button home_slider_button purple_button" style="border: 2px solid white">
                                <div class="button_bcg">
                                </div>
                                <a href="#contact">Enquiry Now</a>
                            </div>
                            <div class="button home_slider_button purple_button" style="border: 2px solid white">
                                <div class="button_bcg">
                                </div>
                                <a href="#Hotels">Hotel Bookings</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Home Slider Nav - Prev -->
            <div class="home_slider_nav home_slider_prev">
                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px"
                    viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                    <defs>
                        <linearGradient id='home_grad_prev'>
                            <stop offset='0%' stop-color='#fa9e1b' />
                            <stop offset='100%' stop-color='#8d4fff' />
                        </linearGradient>
                    </defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
     M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
     C22.545,2,26,5.541,26,9.909V23.091z" />
                    <polygon class="nav_arrow" fill="#F3F6F9"
                        points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 " />
                </svg>
            </div>

            <!-- Home Slider Nav - Next -->
            <div class="home_slider_nav home_slider_next">
                <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px"
                    viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                    <defs>
                        <linearGradient id='home_grad_next'>
                            <stop offset='0%' stop-color='#fa9e1b' />
                            <stop offset='100%' stop-color='#8d4fff' />
                        </linearGradient>
                    </defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
    M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
    C22.545,2,26,5.541,26,9.909V23.091z" />
                    <polygon class="nav_arrow" fill="#F3F6F9"
                        points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 " />
                </svg>
            </div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots">
                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                    {{-- <li class="home_slider_custom_dot active">
                        <div></div>01.
                    </li>
                    <li class="home_slider_custom_dot">
                        <div></div>02.
                    </li>
                    <li class="home_slider_custom_dot">
                        <div></div>03.
                    </li>
                    <li class="home_slider_custom_dot">
                        <div></div>04.
                    </li> --}}
                </ul>
            </div>

        </div>

    </div>

    <!-- Search -->

    <div class="search">


        <!-- Search Contents -->

        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col fill_height">

                    <!-- Search Tabs -->

                    <div class="search_tabs_container">
                        <div
                            class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div
                                class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                                <img src="images/suitcase.png" alt=""><span>hotels</span>
                            </div>
                            <div
                                class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                                <img src="images/bus.png" alt="">car rentals
                            </div>
                            <div
                                class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                                <img src="images/departure.png" alt="">flights
                            </div>
                            <div
                                class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                                <img src="images/island.png" alt="">trips
                            </div>
                            <div
                                class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                                <img src="images/cruise.png" alt="">cruises
                            </div>
                            <div
                                class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                                <img src="images/diving.png" alt="">activities
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col reveal">
                    <h2 class="intro_title text-center">We have the best tours</h2>
                </div>
            </div>
            <div class="row reveal">
                <div class="col-lg-10 offset-lg-1">
                    <div class="intro_text text-center">
                        <p style="color: black; font-weight: 500px">Discover the breathtaking Andaman & Nicobar
                            Islands,
                            where pristine beaches, crystal-clear
                            waters, and lush greenery await. Dive into vibrant coral reefs, explore exotic marine life,
                            and enjoy serene sunsets. A paradise for nature lovers and adventure seekers alike.. </p>
                    </div>
                </div>
            </div>
            <div class="row intro_items">

                <!-- Intro Item -->


                @php
                    $locations = \App\Models\TourLocation::all();
                    $i = 0;
                @endphp
                @foreach ($locations as $location)
                    @php
                        $i++;
                    @endphp
                    <div class="col-lg-4 intro_col reveal" style="margin-bottom: 10px">
                        <div class="intro_item">
                            <div class="intro_item_overlay"></div>
                            <div class="intro_item_background"
                                style="background-image:url({{ asset('storage/' . $location->image_path) }})"></div>
                            <div
                                class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date" style="background-color: #470099">{{ $location->Location }}
                                </div>
                                <div class="button intro_button purple_button">
                                    <div class="button_bcg"></div>

                                    {{-- <a href="{{ 'location/' . $location->id }}"> --}}
                                    <a
                                        @if ($i == 1) href="{{ url('https://andamanblueocean.com/package/1') }}"
                                        @elseif ($i == 2)
                                             href="{{ url('https://andamanblueocean.com/package/3') }}"
                                            @elseif ($i == 3)
                                                 href="{{ url('https://andamanblueocean.com/package/4') }}"
                                                @elseif ($i == 4)
                                                     href="{{ url('https://andamanblueocean.com/package/2') }}"
                                                    @elseif ($i == 5)
                                                         href="{{ url('https://andamanblueocean.com/package/5') }}"
                                                        @elseif ($i == 6)

                                                                href="{{ url('https://andamanblueocean.com/package/8') }}"
                                                            @elseif ($i == 7)

                                                                    href="{{ url('https://andamanblueocean.com/package/6') }}"
                                                                @elseif ($i == 8)

                                                                        href="{{ url('https://andamanblueocean.com/package/7') }}"
                                                                        @elseif ($i == 9){
                                                                            href="{{ url('https://andamanblueocean.com/package/9') }}"
                                                                        } @endif>
                                        see more<span></span><span></span><span></span></a>
                                </div>

                                <div class="intro_center text-center">
                                    <h1>{{ $location->Place }}</h1>
                                    <div class="rating rating_4">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- CTA -->

    <div class="cta">
        <!-- Image by https://unsplash.com/@thanni -->
        <div class="cta_background" style="background-image:url(images/cta.jpg)"></div>

        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- CTA Slider -->

                    <div class="cta_slider_container reveal">
                        <div class="owl-carousel owl-theme cta_slider">

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Havelock Island</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">I had an amazing experience with Andaman Blue Ocean on my recent
                                    trip to Havelock Island. The team was incredibly professional and ensured we had the
                                    best possible time. The scuba diving session was a highlight, with crystal clear
                                    waters and vibrant marine life. The accommodations were top-notch, and every detail
                                    was taken care of. Highly recommend them for anyone looking to explore the Andamans!
                                </p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    {{-- <a href="#">book now<span></span><span></span><span></span></a> --}}
                                </div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Neil Island</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Andaman Blue Ocean organized a fantastic trip for us to Neil
                                    Island. The coral reefs were stunning, and the snorkeling trip was well-organized
                                    with excellent guides. The only downside was the ferry ride, which was a bit
                                    crowded. However, the beautiful beaches and friendly service made up for it.
                                    Overall, a wonderful experience!</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    {{-- <a href="#">book now<span></span><span></span><span></span></a> --}}
                                </div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Port Blair</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Our family vacation to Port Blair was made memorable thanks to
                                    Andaman Blue Ocean. They arranged a perfect itinerary that included visits to the
                                    Cellular Jail, Ross Island, and Corbyn's Cove Beach. The local guides were
                                    knowledgeable and very accommodating. We especially appreciated the attention to
                                    detail and the seamless transportation arrangements.</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    {{-- <a href="#">book now<span></span><span></span><span></span></a> --}}
                                </div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Baratang Island</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Exploring the limestone caves and the mangrove creeks at Baratang
                                    Island was an unforgettable experience, thanks to Andaman Blue Ocean. The tour was
                                    well-planned, and our guide was excellent in explaining the unique geological
                                    formations. The only minor issue was the early morning start, but it was worth it
                                    for the breathtaking views. Highly recommend this company!</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    {{-- <a href="#">book now<span></span><span></span><span></span></a> --}}
                                </div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">North Bay Island</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Andaman Blue Ocean provided an outstanding trip to North Bay
                                    Island. The underwater sea walk was a surreal experience, and the vibrant coral
                                    reefs were a sight to behold. The staff was extremely helpful and ensured our safety
                                    throughout. The picnic lunch on the beach was delicious and well-organized. I can't
                                    wait to book my next adventure with them!</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    {{-- <a href="#">book now<span></span><span></span><span></span></a> --}}
                                </div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Radhanagar Beach</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Our day trip to Radhanagar Beach with Andaman Blue Ocean was
                                    absolutely perfect. Known as one of the best beaches in Asia, it lived up to its
                                    reputation. The clear blue waters and soft white sand were heavenly. The company
                                    arranged a comfortable cabana for us to relax and enjoy the view. The highlight was
                                    the sunset – truly a mesmerizing experience. I highly recommend their services for a
                                    hassle-free and enjoyable vacation.</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    {{-- <a href="#">book now<span></span><span></span><span></span></a> --}}
                                </div>
                            </div>


                        </div>

                        <!-- CTA Slider Nav - Prev -->
                        <div class="cta_slider_nav cta_slider_prev">
                            <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px"
                                height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
                                xml:space="preserve">
                                <defs>
                                    <linearGradient id='cta_grad_prev'>
                                        <stop offset='0%' stop-color='#fa9e1b' />
                                        <stop offset='100%' stop-color='#8d4fff' />
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
        C22.545,2,26,5.541,26,9.909V23.091z" />
                                <polygon class="nav_arrow" fill="#F3F6F9"
                                    points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
								11.042,18.219 " />
                            </svg>
                        </div>

                        <!-- CTA Slider Nav - Next -->
                        <div class="cta_slider_nav cta_slider_next">
                            <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px"
                                height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
                                xml:space="preserve">
                                <defs>
                                    <linearGradient id='cta_grad_next'>
                                        <stop offset='0%' stop-color='#fa9e1b' />
                                        <stop offset='100%' stop-color='#8d4fff' />
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
       M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
       C22.545,2,26,5.541,26,9.909V23.091z" />
                                <polygon class="nav_arrow" fill="#F3F6F9"
                                    points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
							17.046,15.554 " />
                            </svg>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Offers -->

    <div class="offers">
        <div class="container" style="max-width: 1200px; margin: auto;">
            <div class="row">
                <div class="col text-center" data-aos="slide-right" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                    <h2 class="section_title" style="font-size: 2.5em; margin: 20px 0;">Best Tour Package For
                        Andaman</h2>
                    <p style="color: black"><strong> Blair, Havelock Island, Neil Island, Rose Island, North Bay
                            Island, Baratang Island,
                            Mayabunder, Rangat, Diglipur.

                            <br><br>Note: Before Booking Other hotels options can also be provided, please call or mails
                            us
                            for any changes.</strong>
                    </p>
                </div>
            </div>
            <div class="row offers_items" style="display: flex; flex-wrap: wrap;">
                @php
                    $packages = \App\Models\Package::where('Type', '!=', 'Custom')->get();
                @endphp

                @foreach ($packages as $package)
                    <!-- Offers Item -->
                    <div class="col-lg-6 offers_col" data-aos="slide-right" data-aos-offset="200"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-once="false">
                        <div class="offers_item" data-image-url="{{ asset('storage/' . $package->Image) }}">
                            <div class="offers_image_container">
                                <div class="offers_image_background"
                                    style="background-image:url('{{ asset('storage/' . $package->Image) }}');"></div>
                                <div class="offer_name">
                                    ₹.{{ number_format($package->Price, 2) }}/-
                                </div>
                            </div>
                            <div class="offers_content">
                                <div class="offers_price"
                                    style="font-size: 1.5em; color: rgb(46, 1, 104); font-weight: bold;"><a
                                        href="{{ url('package/' . $package->id) }}"
                                        style="text-decoration: none; color: inherit;">{{ $package->Name }}</a></div>
                                <div class="rating_r rating_r_4 offers_rating"
                                    style="color: #ffd700; font-size: 1.2em;">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < 4)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <p class="offers_text"
                                    style="text-align: justify; margin: 15px 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 8; -webkit-box-orient: vertical;color:black;font-size: 15px">
                                </p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list"
                                        style="list-style: none; padding: 0; display: flex; justify-content: space-around;">
                                        <li class="offers_icons_item"><img src="{{ asset('images/post.png') }}"
                                                alt="" style="width: 24px; height: 24px;"></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/compass.png') }}"
                                                alt="" style="width: 24px; height: 24px;"></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/bicycle.png') }}"
                                                alt="" style="width: 24px; height: 24px;"></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/sailboat.png') }}"
                                                alt="" style="width: 24px; height: 24px;"></li>
                                    </ul>
                                </div>
                                <div class="offers_link" style="margin-top: 40px;margin-bottom: -10px">
                                    <a href="{{ url('package/' . $package->id) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




    <div class="offers">
        <div class="container" style="max-width: 1200px; margin: auto;">
            <div class="row">
                <div class="col text-center reveal">
                    <h2 class="section_title" style="font-size: 2.5em; margin: 20px 0;">Holiday Tour Package</h2>
                    <p style="color: black"><strong> here are some of the exclusive tour packages that we have
                            customized for our
                            valuable
                            clients.</strong>
                    </p>
                </div>
            </div>
            <div class="row offers_items" style="display: flex; flex-wrap: wrap;">
                @php
                    $packages = \App\Models\Package::where('Type', '=', 'Custom')->get();
                @endphp

                @foreach ($packages as $package)
                    <!-- Offers Item -->
                    <div class="col-lg-6 offers_col reveal">
                        <div class="offers_item" data-image-url="{{ asset('storage/' . $package->Image) }}">
                            <div class="offers_image_container">
                                <div class="offers_image_background"
                                    style="background-image:url('{{ asset('storage/' . $package->Image) }}');"></div>
                                <div class="offer_name">
                                    ₹.{{ number_format($package->Price, 2) }}/-
                                </div>
                            </div>
                            <div class="offers_content">
                                <div class="offers_price"
                                    style="font-size: 1.5em; color: rgb(46, 1, 104); font-weight: bold;"><a
                                        href="{{ url('package/' . $package->id) }}"
                                        style="text-decoration: none; color: inherit;">{{ $package->Name }}</a></div>
                                <div class="rating_r rating_r_4 offers_rating"
                                    style="color: #ffd700; font-size: 1.2em;">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < 4)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <p class="offers_text"
                                    style="text-align: justify; margin: 15px 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 8; -webkit-box-orient: vertical;color:black;font-size: 15px">
                                </p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list"
                                        style="list-style: none; padding: 0; display: flex; justify-content: space-around;">
                                        <li class="offers_icons_item"><img src="{{ asset('images/post.png') }}"
                                                alt="" style="width: 24px; height: 24px;"></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/compass.png') }}"
                                                alt="" style="width: 24px; height: 24px;"></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/bicycle.png') }}"
                                                alt="" style="width: 24px; height: 24px;"></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/sailboat.png') }}"
                                                alt="" style="width: 24px; height: 24px;"></li>
                                    </ul>
                                </div>
                                <div class="offers_link" style="margin-top: 40px;margin-bottom: -10px">
                                    <a href="{{ url('package/' . $package->id) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <div style="text-align: center; padding: 20px;">
        <h2 style="margin-bottom: 10px; color: black;">SHIP AND FLIGHT TICKETS</h2>
        <p style="font-size: 16px; color: gray; margin-bottom: 30px;">24/7 Service</p>

        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">

            <div style="text-align: center; margin: 10px; width: 200px;border-radius: 10px;" class="reveal">
                <img src="https://image3.jdomni.in/banner/04102023/6F/88/55/FAFA6BF2FFEA63C45392ADF5CD_1696397584757.png?output-format=webp"
                    alt="Ferry Ticket Service" style="width: 100%; height: auto; border-radius: 10px;">
                <h3 style="font-size: 18px; margin-top: 10px; color:black">Ferry Ticket Service</h3>
                <p style="font-size: 14px; color: gray;">Port Blair to Havelock Island</p>
                <a href="{{ url('contact/') }}"
                    style="display: inline-block; padding: 10px 20px; background-color: #A370F1; color: white; border: none; border-radius: 5px; text-decoration: none; cursor: pointer;">Enquiry
                    Now</a>
            </div>

            <div style="text-align: center; margin: 10px; width: 200px;border-radius: 10px;" class="reveal">
                <img src="https://image3.jdomni.in/banner/04102023/DC/06/19/2D7D61D7D08660A46AF5320128_1696399563721.jpg?output-format=webp"
                    alt="Ferry Ticket Service" style="width: 100%; height: auto; border-radius: 10px;">
                <h3 style="font-size: 18px; margin-top: 10px; color:black">Ferry Ticket Service</h3>
                <p style="font-size: 14px; color: gray;">Havelock Island to Neil Island</p>
                <a href="{{ url('contact/') }}"
                    style="display: inline-block; padding: 10px 20px; background-color: #A370F1; color: white; border: none; border-radius: 5px; text-decoration: none; cursor: pointer;">Enquiry
                    Now</a>
            </div>

            <div style="text-align: center; margin: 10px; width: 200px;border-radius: 10px;" class="reveal">
                <img src="https://image2.jdomni.in/banner/04102023/CB/88/5B/559D60E782BB4C581506E7C603_1696399813097.jpg?output-format=webp"
                    alt="Ferry Ticket Service" style="width: 100%; height: auto; border-radius: 10px;">
                <h3 style="font-size: 18px; margin-top: 10px; color:black">Ferry Ticket Service</h3>
                <p style="font-size: 14px; color: gray;">Neil Island to Port Blair</p>
                <a href="{{ url('contact/') }}"
                    style="display: inline-block; padding: 10px 20px; background-color: #A370F1; color: white; border: none; border-radius: 5px; text-decoration: none; cursor: pointer;">Enquiry
                    Now</a>
            </div>

            <div style="text-align: center; margin: 10px; width: 200px;border-radius: 10px;" class="reveal">
                <img src="https://image3.jdomni.in/banner/04102023/75/49/8B/C0F173813D499C99103F5B34F6_1696400724325.jpg?output-format=webp"
                    alt="Flight Ticket Service" style="width: 100%; height: auto; border-radius: 10px;">
                <h3 style="font-size: 18px; margin-top: 10px; color:black">Flight Ticket Service</h3>
                <p style="font-size: 14px; color: gray;">Domestic Flight</p>
                <a href="{{ url('contact/') }}"
                    style="display: inline-block; padding: 10px 20px; background-color: #A370F1; color: white; border: none; border-radius: 5px; text-decoration: none; cursor: pointer;">Enquiry
                    Now</a>
            </div>

            <div style="text-align: center; margin: 10px; width: 200px;border-radius: 10px;" class="reveal">
                <img src="https://image2.jdomni.in/banner/04102023/C8/95/5E/36E33CFEE6A9AAF5A15E414220_1696400936113.jpg?output-format=webp"
                    alt="Flight Ticket Service" style="width: 100%; height: auto; border-radius: 10px;">
                <h3 style="font-size: 18px; margin-top: 10px; color:black">Flight Ticket Service</h3>
                <p style="font-size: 14px; color: gray;">Andaman & Nicobar Islands</p>
                <a href="{{ url('contact/') }}"
                    style="display: inline-block; padding: 10px 20px; background-color: #A370F1; color: white; border: none; border-radius: 5px; text-decoration: none; cursor: pointer;">Enquiry
                    Now</a>
            </div>

        </div>
    </div>

    <!-- Testimonials -->


    <div class="testimonials">
        <div class="test_border"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center reveal">
                    <h2 class="section_title">Explore Our Range of Activities</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <!-- Testimonials Slider -->

                    <div class="test_slider_container">
                        <div class="owl-carousel owl-theme test_slider">

                            @php
                                $activities = \App\Models\Activity::all();
                            @endphp
                            @foreach ($activities as $activity)
                                <div class="owl-item" data-aos="zoom-in-right" data-aos-offset="200"
                                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    data-aos-once="false">
                                    <div class="test_item"
                                        style="background-image: url('{{ asset('storage/' . $activity->image) }}'); width:100%; background-position: center; background-size: cover;">
                                        <div class="test_image"></div>
                                        <div class="test_icon">
                                            <img src="{{ asset('images/backpack.png') }}" alt=""
                                                class="custom_bag_icon">
                                        </div>
                                        <div class="test_content_container">
                                            <div class="test_content">
                                                <div class="test_item_info">₹.{{ $activity->pricing }}/-</div>
                                                <div class="test_quote_title"><a
                                                        href="{{ url('activity/' . $activity->id) }}">{{ $activity->title }}</a>
                                                </div>
                                                <a href="{{ url('activity/' . $activity->id) }}"
                                                    class="read_more custom_read_more">
                                                    Read More
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-arrow-right"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M10.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.293 8 7.146 10.146a.5.5 0 0 0 .708.708l3-3z" />
                                                        <path fill-rule="evenodd"
                                                            d="M12 8a.5.5 0 0 0-.5-.5H4a.5.5 0 0 0 0 1h7.5a.5.5 0 0 0 .5-.5z" />
                                                    </svg>
                                                </a>
                                                {{-- <p class="test_quote_text">{{ Str::limit($activity->description, 50, '...') }}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <!-- Testimonials Slider Nav - Prev -->
                        <div class="test_slider_nav test_slider_prev">
                            <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px"
                                height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
                                xml:space="preserve">
                                <defs>
                                    <linearGradient id='test_grad_prev'>
                                        <stop offset='0%' stop-color='#fa9e1b' />
                                        <stop offset='100%' stop-color='#8d4fff' />
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                                M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                                C22.545,2,26,5.541,26,9.909V23.091z" />
                                <polygon class="nav_arrow" fill="#F3F6F9"
                                    points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
                                11.042,18.219 " />
                            </svg>
                        </div>

                        <!-- Testimonials Slider Nav - Next -->
                        <div class="test_slider_nav test_slider_next">
                            <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px"
                                height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
                                xml:space="preserve">
                                <defs>
                                    <linearGradient id='test_grad_next'>
                                        <stop offset='0%' stop-color='#fa9e1b' />
                                        <stop offset='100%' stop-color='#8d4fff' />
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                                M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                                C22.545,2,26,5.541,26,9.909V23.091z" />
                                <polygon class="nav_arrow" fill="#F3F6F9"
                                    points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
                                17.046,15.554 " />
                            </svg>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="trending">
        <div class="container">
            <div class="row">
                <div class="col text-center" id="Hotels" data-aos="zoom-in-right" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-once="false">
                    <h2 class="section_title" style="color: #6A1B9A;">Luxurious Accommodations at Our Partner
                        Hotels
                    </h2>
                </div>
            </div>
            <div class="row trending_container"
                style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                @php
                    $hotels = \App\Models\Hotel::all();
                @endphp
                @foreach ($hotels as $hotel)
                    <!-- Trending Item -->
                    <div class="col s12 m6 l3 trending_item"
                        style="margin: 10px; box-sizing: border-box; display: flex;" data-aos="zoom-in-right"
                        data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                        data-aos-easing="ease-in-out" data-aos-once="false">
                        <div class="card"
                            style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15); transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 10px; overflow: hidden; background: #fff; display: flex; flex-direction: column; justify-content: space-between; width: 100%;">
                            <div class="card-image"
                                style="overflow: hidden; height: 150px; display: flex; align-items: center; justify-content: center;">
                                <img src="{{ 'storage/' . $hotel->Image }}" alt=""
                                    style="width: 100%; height: 100%; transition: transform 0.3s ease; object-fit: cover;">
                            </div>
                            <div class="card-content"
                                style="text-align: center; padding: 15px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; font-family: 'TheWorldFont', sans-serif;">
                                <div style="flex-grow: 1;">
                                    <div class="trending_title"
                                        style="font-size: 1.2em; font-weight: bold; color: #6A1B9A;">
                                        <a href="{{ url('hotel/' . $hotel->id) }}"
                                            style="color: inherit; text-decoration: none; transition: color 0.3s ease;">{{ $hotel->Hotel }}</a>
                                    </div>
                                    <div class="trending_price"
                                        style="font-size: 1.1em; color: #FFB300; margin-top: 10px;">
                                        From ₹.{{ $hotel->Price }}/-
                                    </div>
                                </div>
                                <div class="trending_location"
                                    style="font-size: 0.9em; color: #9575CD; margin-top: 5px;">
                                    {{ $hotel->Location }}
                                </div>
                                <div style="margin-top: 10px;">
                                    <a href="{{ url('hotel/' . $hotel->id) }}"
                                        style="display: inline-block; padding: 10px 20px; background: linear-gradient(45deg, #6A1B9A, #8E24AA); color: white; border-radius: 5px; text-decoration: none; font-size: 0.9em; position: relative; transition: background 0.3s ease;">
                                        More
                                        <span
                                            style="display: inline-block; margin-left: 8px; transition: transform 0.3s ease;">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Trending Item -->
                @endforeach
            </div>
        </div>
    </div>


    <div style="text-align: center; padding: 20px;">
        <h2 style="color: black;">Services We Offer</h2>
        <p style="font-size: 16px; color: gray; margin-bottom: 30px;">The Company believes in the notion of extending
            flawless travel services to clients to explore the beautiful destinations in Andaman.</p>

        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image3.jdomni.in/library/FD/17/CF/8FB216B361B344F3155564D4DA_1496936555961_cropped_450X450.jpeg"
                    alt="24 Hours Travel Agents">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">24 Hours Travel Agents</h3>
                <p style="font-size: 14px; color: gray;">The ultimate and reliable solutions for all the travelers with
                    attractive travel packages.</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image3.jdomni.in/banner/30052019/6C/11/64/B9F505EDCD2D3947F6D5488508_1559159349426.jpg?output-format=webp"
                    alt="Adventure Tour Packages">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Adventure Tour Packages</h3>
                <p style="font-size: 14px; color: gray;">Rejuvenate yourself by rewarding yourself an adventure tour
                    with best tour packages available with us.</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image2.jdomni.in/library/C9/A5/CE/31F37E4418ABBD4D7C33DBF431_1496334323751_cropped_450X450.jpeg"
                    alt="Air Ticketing Agents">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Air Ticketing Agents</h3>
                <p style="font-size: 14px; color: gray;">Our company has the best air ticketing agents that help you to
                    make the process of air ticket booking easy.</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image3.jdomni.in/library/B4/40/71/74900D3BDF1534CE61A91EEB38_1496333473729_cropped_450X450.jpeg"
                    alt="Car Hire">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Car Hire</h3>
                <p style="font-size: 14px; color: gray;">We provide cars on hire at extremely affordable rates and can
                    be used to travel to various locations.</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image1.jdomni.in/library/39/CE/2D/40B10C37EADABAB24F450E867B_1496331650841_cropped_450X450.jpeg"
                    alt="Car On Hire For Outstation-Xylo">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Car On Hire For Outstation-Xylo</h3>
                <p style="font-size: 14px; color: gray;">Hire a Xylo car which is specially designed for outstation
                    travel & is comfortable & cosy all at once!</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image2.jdomni.in/library/70/11/6B/DA60E66CEFF76A40DE35199DA5_1496269572424_cropped_450X450.jpeg"
                    alt="Domestic Tour Operators">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Domestic Tour Operators</h3>
                <p style="font-size: 14px; color: gray;">We excel in providing a wide range of domestic tour options to
                    our clients as per their demands.</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image3.jdomni.in/library/1B/F1/8C/793EA679D44FC78AE24EFBC524_1496937988565_cropped_450X450.jpeg"
                    alt="Domestic Tour Packages">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Domestic Tour Packages</h3>
                <p style="font-size: 14px; color: gray;">We excel in providing exclusive packages to our clients. Our
                    clients are the focal points of all our packages.</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image2.jdomni.in/banner/30052019/30/04/2F/13E8B4401D04778386CB9B5850_1559159603474.jpg?output-format=webp"
                    alt="Domestic Travel Agents">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Domestic Travel Agents</h3>
                <p style="font-size: 14px; color: gray;">Explore and get to know more about the rich heritage of your
                    country with the best domestic travel agents.</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image2.jdomni.in/banner/30052019/75/72/B3/C506855A217AAA561B7DF35A80_1559159405278.jpg?output-format=webp"
                    alt="Hotel Reservations">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Hotel Reservations</h3>
                <p style="font-size: 14px; color: gray;">We offer reservation services to ensure all your needs &
                    requirements are efficiently met.</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image3.jdomni.in/library/E4/E3/DA/B932BBAD9EF9B3EB3A3B0115A0_1496252456466_cropped_450X450.jpeg"
                    alt="Tour Packages For Honeymoon">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Tour Packages For Honeymoon</h3>
                <p style="font-size: 14px; color: gray;">We are trusted and verified agents providing romantic
                    honeymoon tour packages for the best price.</p>
            </div>

            <div class="service-item" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <img src="https://image3.jdomni.in/library/27/A1/5F/C601C501D5166E5443AD394BBE_1496331665419_cropped_450X450.jpeg"
                    alt="Tour Packages For Honeymoon">
                <h3 style="font-size: 18px; margin-top: 10px; color: #6a1b9a;">Adventure Tour Packages</h3>
                <p style="font-size: 14px; color: gray;">Rejuvenate yourself by rewarding yourself an adventure tour
                    with best tour packages available with us.</p>
            </div>

        </div>
    </div>

    <div class="contact">
        <div class="contact_background" style="background-image:url(images/contact.png)"></div>

        <div class="container" id="contact">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact_image">
                        @if (session('success'))
                            <div class="alert alert-success" id="success-popup">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact_form_container">
                        <div class="contact_title">get in touch</div>
                        <form action="{{ url('send/') }}" method="POST" id="contact_form"
                            class="contact_form text-center">
                            @csrf
                            <input type="text" name="name" id="contact_form_name"
                                class="contact_form_name input_field" placeholder="Name" required="required"
                                data-error="Name is required." data-aos="zoom-in-right" data-aos-offset="200"
                                data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false">
                            <input type="email" name="email" id="contact_form_email"
                                class="contact_form_email input_field" placeholder="E-mail" required="required"
                                data-error="Email is required." data-aos="zoom-in-right" data-aos-offset="200"
                                data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false">
                            <input type="text" name="subject" id="contact_form_subject"
                                class="contact_form_subject input_field" placeholder="Subject" required="required"
                                data-error="Subject is required." data-aos="zoom-in-right" data-aos-offset="200"
                                data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false">
                            <input type="tel" name="phone" id="contact_form_phone"
                                class="contact_form_phone input_field" placeholder="Phone Number" required="required"
                                data-error="Phone number is required." data-aos="zoom-in-right" data-aos-offset="200"
                                data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false">
                            <textarea id="contact_form_message" name="message" class="text_field contact_form_message" rows="4"
                                placeholder="Message" required="required" data-error="Please, write us a message." data-aos="zoom-in-right"
                                data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false"></textarea>
                            <button type="submit" id="form_submit_button"
                                class="form_submit_button button trans_200" data-aos="zoom-in-right"
                                data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                                data-aos-easing="ease-in-out" data-aos-once="false">send
                                message<span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/node-vibrant/dist/vibrant.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = "{{ session('success') }}";
            if (successMessage) {
                // Display the SweetAlert dialog with the message
                swal("Thank You!", successMessage + "    Will Contact You Soon", "success");
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cards = document.querySelectorAll('.card');
            cards.forEach(function(card) {
                card.addEventListener('mouseover', function() {
                    card.style.transform = 'translateY(-10px)';
                    card.style.boxShadow = '0 10px 20px rgba(106, 27, 154, 0.5)';
                });
                card.addEventListener('mouseout', function() {
                    card.style.transform = 'translateY(0)';
                    card.style.boxShadow = '0 2px 5px rgba(106, 27, 154, 0.3)';
                });
            });

            var images = document.querySelectorAll('.card-image img');
            images.forEach(function(img) {
                img.addEventListener('mouseover', function() {
                    img.style.transform = 'scale(1.05)';
                });
                img.addEventListener('mouseout', function() {
                    img.style.transform = 'scale(1)';
                });
            });

            var titles = document.querySelectorAll('.trending_title a');
            titles.forEach(function(title) {
                title.addEventListener('mouseover', function() {
                    title.style.color = '#004d40';
                });
                title.addEventListener('mouseout', function() {
                    title.style.color = '#6A1B9A';
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buttons = document.querySelectorAll('a[style*="background: linear-gradient"]');
            buttons.forEach(function(button) {
                button.addEventListener('mouseover', function() {
                    button.style.background = 'linear-gradient(45deg, #004d40, #00796b)';
                    var arrow = button.querySelector('span');
                    arrow.style.transform = 'translateX(4px)';
                });
                button.addEventListener('mouseout', function() {
                    button.style.background = 'linear-gradient(45deg, #6A1B9A, #8E24AA)';
                    var arrow = button.querySelector('span');
                    arrow.style.transform = 'translateX(0)';
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Select all offer items
            const offerItems = document.querySelectorAll('.offers_item');

            offerItems.forEach(item => {
                const imageUrl = item.getAttribute('data-image-url');

                // Use Vibrant.js to get the primary color from the image
                Vibrant.from(imageUrl).getPalette()
                    .then(palette => {
                        // Get the primary color
                        const primaryColor = palette.Vibrant.getHex();

                        // Convert hex to rgba
                        const rgbaColor = hexToRgba(primaryColor,
                            0.3); // Adjust the alpha value as needed

                        // Apply the box shadow with the primary color
                        item.style.boxShadow = `0 0 10px ${rgbaColor}`;

                        // Add hover effect
                        item.addEventListener('mouseenter', () => {
                            item.style.boxShadow = `0 10px 20px ${rgbaColor}`;
                        });

                        item.addEventListener('mouseleave', () => {
                            item.style.boxShadow = `0 0 10px ${rgbaColor}`;
                        });
                    })
                    .catch(err => console.error(err));
            });

            // Function to convert hex to rgba
            function hexToRgba(hex, alpha) {
                const bigint = parseInt(hex.slice(1), 16);
                const r = (bigint >> 16) & 255;
                const g = (bigint >> 8) & 255;
                const b = bigint & 255;

                return `rgba(${r}, ${g}, ${b}, ${alpha})`;
            }
        });
    </script>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <script>
        ScrollReveal().reveal('.reveal', {
            reset: true, // Keep reset enabled
            duration: 1000, // Animation duration in milliseconds
            distance: '500px', // Distance to move during the reveal
            easing: 'ease-in', // Easing function
            origin: 'left', // Direction the element will move from
        });
    </script>

</x-layout>
