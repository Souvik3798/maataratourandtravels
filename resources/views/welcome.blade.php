<x-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

    <style>
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
            height: 400px; /* Increased height */
            position: relative;
        }

        .test_image {
            width: 100%;
            height: 70%; /* Adjust this value to control the height of the image */
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
            background: rgba(0, 0, 0, 0.5); /* Added background to content for better readability */
        }

        .test_content {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 30%; /* Adjust this value to control the content height */
        }

        .test_item_info {
            margin-bottom: 5px;
            font-size: 1.5em;
            color: #fff;
            font-weight: bold;
            background: rgba(255, 255, 255, 0.8);
            padding: 10px 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            z-index: 11; /* Ensure it stays above other elements */
            position: relative;
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
            color: #fff; /* Changed to white for better contrast */
            text-decoration: none;
            transition: color 0.3s ease;
            margin-top: 5px;
        }

        .test_quote_title a:hover {
            color: #FFB300;
        }

        .test_quote_text {
            font-size: 1em;
            color: #fff; /* Changed to white for better contrast */
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

        @media (max-width: 768px) {
            .test_item {
                height: 300px; /* Adjust this value for smaller screens */
            }

            .test_image {
                height: 60%;
            }

            .test_content {
                height: 40%;
            }

            .test_name, .test_quote_title a, .test_quote_text {
                font-size: 0.9em;
            }
        }

    </style>


    <!-- Home -->

	<div class="home">

		<!-- Home Slider -->

		<div class="home_slider_container">

			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url({{asset('images/Banner/beach-4030308_1920.jpg')}})"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url({{asset('images/Banner/havelock-338536_1920.jpg')}})"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url({{asset('images/Banner/jail-3988719_1920.jpg')}})"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 "/>
				</svg>
			</div>

			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
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
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">car rentals</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
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
				<div class="col">
					<h2 class="intro_title text-center">We have the best tours</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Discover the breathtaking Andaman & Nicobar Islands, where pristine beaches, crystal-clear waters, and lush greenery await. Dive into vibrant coral reefs, explore exotic marine life, and enjoy serene sunsets. A paradise for nature lovers and adventure seekers alike.. </p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->


                    @php
                        $locations = \App\Models\TourLocation::all();
                    @endphp
                    @foreach ($locations as $location)
                        <div class="col-lg-4 intro_col" style="margin-bottom: 10px">
                            <div class="intro_item">
                                <div class="intro_item_overlay"></div>
                                <div class="intro_item_background" style="background-image:url({{asset('storage/'.$location->image_path)}})"></div>
                                <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="intro_date">{{$location->Location}}</div>
                                    <div class="button intro_button"><div class="button_bcg"></div><a href={{url('location/'.$location->id)}}>see more<span></span><span></span><span></span></a></div>
                                    <div class="intro_center text-center">
                                        <h1>{{$location->Place}}</h1>
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

					<div class="cta_slider_container">
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
                                <p class="cta_text">I had an amazing experience with Andaman Blue Ocean on my recent trip to Havelock Island. The team was incredibly professional and ensured we had the best possible time. The scuba diving session was a highlight, with crystal clear waters and vibrant marine life. The accommodations were top-notch, and every detail was taken care of. Highly recommend them for anyone looking to explore the Andamans!</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">book now<span></span><span></span><span></span></a>
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
                                <p class="cta_text">Andaman Blue Ocean organized a fantastic trip for us to Neil Island. The coral reefs were stunning, and the snorkeling trip was well-organized with excellent guides. The only downside was the ferry ride, which was a bit crowded. However, the beautiful beaches and friendly service made up for it. Overall, a wonderful experience!</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">book now<span></span><span></span><span></span></a>
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
                                <p class="cta_text">Our family vacation to Port Blair was made memorable thanks to Andaman Blue Ocean. They arranged a perfect itinerary that included visits to the Cellular Jail, Ross Island, and Corbyn's Cove Beach. The local guides were knowledgeable and very accommodating. We especially appreciated the attention to detail and the seamless transportation arrangements.</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">book now<span></span><span></span><span></span></a>
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
                                <p class="cta_text">Exploring the limestone caves and the mangrove creeks at Baratang Island was an unforgettable experience, thanks to Andaman Blue Ocean. The tour was well-planned, and our guide was excellent in explaining the unique geological formations. The only minor issue was the early morning start, but it was worth it for the breathtaking views. Highly recommend this company!</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">book now<span></span><span></span><span></span></a>
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
                                <p class="cta_text">Andaman Blue Ocean provided an outstanding trip to North Bay Island. The underwater sea walk was a surreal experience, and the vibrant coral reefs were a sight to behold. The staff was extremely helpful and ensured our safety throughout. The picnic lunch on the beach was delicious and well-organized. I can't wait to book my next adventure with them!</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">book now<span></span><span></span><span></span></a>
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
                                <p class="cta_text">Our day trip to Radhanagar Beach with Andaman Blue Ocean was absolutely perfect. Known as one of the best beaches in Asia, it lived up to its reputation. The clear blue waters and soft white sand were heavenly. The company arranged a comfortable cabana for us to relax and enjoy the view. The highlight was the sunset – truly a mesmerizing experience. I highly recommend their services for a hassle-free and enjoyable vacation.</p>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">book now<span></span><span></span><span></span></a>
                                </div>
                            </div>


						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
								11.042,18.219 "/>
							</svg>
						</div>

						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>

	</div>

	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">the best Packages</h2>
				</div>
			</div>
			<div class="row offers_items">

                @php
                    $packages = \App\Models\Package::all();
                @endphp

                @foreach ($packages as $package)
                    <!-- Offers Item -->
                    <div class="col-lg-6 offers_col">
                        <div class="offers_item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="offers_image_container">
                                        <div class="offers_image_background" style="background-image:url({{('storage/'.$package->Image)}})"></div>
                                        <div class="offer_name"><a href="{{url('package/'.$package->id)}}">{{$package->Name}}</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offers_content">
                                        <div class="offers_price">₹.{{$package->Price}}/-<span>per person</span></div>
                                        <div class="rating_r rating_r_4 offers_rating">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
                                        <p class="offers_text" style="text-align: justify">{{$package->Description}}.</p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="{{asset('images/post.png')}}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{asset('images/compass.png')}}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{asset('images/bicycle.png')}}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{asset('images/sailboat.png')}}" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="offers_link"><a href="{{url('package/'.$package->id)}}">read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach






			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
        <div class="test_border"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
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

                                <div class="owl-item">
                                    <div class="test_item" style="background-image: url('{{asset('storage/'.$activity->image)}}'); width:100%; background-position: center; background-size: cover;">
                                        <div class="test_image"></div>
                                        <div class="test_icon"><img src="{{asset('images/backpack.png')}}" alt=""></div>
                                        <div class="test_content_container">
                                            <div class="test_content">
                                                <div class="test_item_info">₹.{{$activity->pricing}}/-</div>
                                                <div class="test_quote_title"><a href="{{url('activity/'.$activity->id)}}">{{$activity->title}}</a></div>
                                                <p class="test_quote_text">{{$activity->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>

                        <!-- Testimonials Slider Nav - Prev -->
                        <div class="test_slider_nav test_slider_prev">
                            <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                                <defs>
                                    <linearGradient id='test_grad_prev'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                                    M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                                    C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
                                    11.042,18.219 "/>
                            </svg>
                        </div>

                        <!-- Testimonials Slider Nav - Next -->
                        <div class="test_slider_nav test_slider_next">
                            <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                                <defs>
                                    <linearGradient id='test_grad_next'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                                    M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                                    C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
                                    17.046,15.554 "/>
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
                <div class="col text-center">
                    <h2 class="section_title" style="color: #6A1B9A;">Luxurious Accommodations at Our Partner Hotels</h2>
                </div>
            </div>
            <div class="row trending_container" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                @php
                    $hotels = \App\Models\Hotel::all();
                @endphp
                @foreach ($hotels as $hotel)
                    <!-- Trending Item -->
                    <div class="col s12 m6 l3 trending_item" style="margin: 10px; box-sizing: border-box; display: flex;">
                        <div class="card" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15); transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 10px; overflow: hidden; background: #fff; display: flex; flex-direction: column; justify-content: space-between; width: 100%;">
                            <div class="card-image" style="overflow: hidden; height: 150px; display: flex; align-items: center; justify-content: center;">
                                <img src="{{('storage/'.$hotel->Image)}}" alt="" style="width: 100%; height: 100%; transition: transform 0.3s ease; object-fit: cover;">
                            </div>
                            <div class="card-content" style="text-align: center; padding: 15px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; font-family: 'TheWorldFont', sans-serif;">
                                <div style="flex-grow: 1;">
                                    <div class="trending_title" style="font-size: 1.2em; font-weight: bold; color: #6A1B9A;">
                                        <a href="{{url('hotel/'.$hotel->id)}}" style="color: inherit; text-decoration: none; transition: color 0.3s ease;">{{$hotel->Hotel}}</a>
                                    </div>
                                    <div class="trending_price" style="font-size: 1.1em; color: #FFB300; margin-top: 10px;">
                                        From ₹.{{$hotel->Price}}/-
                                    </div>
                                </div>
                                <div class="trending_location" style="font-size: 0.9em; color: #9575CD; margin-top: 5px;">
                                    {{$hotel->Location}}
                                </div>
                                <div style="margin-top: 10px;">
                                    <a href="{{url('hotel/'.$hotel->id)}}" style="display: inline-block; padding: 10px 20px; background: linear-gradient(45deg, #6A1B9A, #8E24AA); color: white; border-radius: 5px; text-decoration: none; font-size: 0.9em; position: relative; transition: background 0.3s ease;">
                                        More
                                        <span style="display: inline-block; margin-left: 8px; transition: transform 0.3s ease;">&rarr;</span>
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

	<div class="contact">
		<div class="contact_background" style="background-image:url(images/contact.png)"></div>

		<div class="container">
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
						<form action="{{ url('send/') }}" method="POST" id="contact_form" class="contact_form text-center">
                            @csrf
                            <input type="text" name="name" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                            <input type="email" name="email" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                            <input type="text" name="subject" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
                            <input type="tel" name="phone" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Phone Number" required="required" data-error="Phone number is required.">
                            <textarea id="contact_form_message" name="message" class="text_field contact_form_message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                            <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
</x-layout>
