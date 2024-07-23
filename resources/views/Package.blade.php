<x-layout>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single_listing_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single_listing_responsive.css') }}">


    <style>
        .responsive-image {
            width: 100%;
            /* Make the image take up the full width of its container */
            max-width: 500px;
            /* Set a maximum width for the image */
            height: auto;
            /* Maintain aspect ratio */
        }
    </style>

    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('images/single_background.jpg') }}"></div>
        <div class="home_content">
            <div class="home_title">{{ $package->Type }} Package</div>
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
                                    <h1 class="hotel_title">{{ $package->Name }}</h1>
                                    <p style="color: black;font-size: 18px">This Rate is Applicable More Than 5-7
                                        Person.</p>
                                    <br><br>
                                    <p style="color: black;font-size: 18px">NOTE - Please check the package tour
                                        itinerary properly, package includes and
                                        excludes and terms and conditions, important notes and last payment option, if
                                        you are interested then you book tour package with us. If any doubts in any of
                                        the tour itinerary then feel freely to contact us.</p>
                                    <div class="rating_r rating_r_4 hotel_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class="hotel_location">
                                        <strong>₹.{{ number_format($package->Price, 2) }}/- +5%GST</strong>
                                    </div>
                                </div>
                                <div class="hotel_title_button ml-lg-auto text-lg-right">

                                </div>
                            </div>

                            <!-- Listing Image -->

                            <div class="hotel_image">
                                <img src="{{ asset('storage/' . $package->Image) }}" alt=""
                                    class="responsive-image">
                                {{-- <div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
									<div class="hotel_review">
										<div class="hotel_review_content">
											<div class="hotel_review_title">very good</div>
										</div>
										<div class="hotel_review_rating text-center">8.1</div>
									</div>
								</div> --}}
                            </div>

                            <!-- Hotel Gallery -->



                            <!-- Hotel Info Text -->

                            <div class="hotel_info_text">
                                <p>{{ $package->Description }}</p>
                            </div>

                            <!-- Hotel Info Tags -->

                            <div class="hotel_info_tags">
                                <ul class="hotel_icons_list">
                                    <li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
                                    <li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
                                    <li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
                                    <li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
                                </ul>
                            </div>

                        </div>

                        <!-- Rooms -->


                        <div class="rooms">

                            <!-- Room -->
                            <div class="room">

                                <!-- Room -->
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="room_content">
                                            <div class="room_title">Inclusions</div>
                                            {{-- <div class="room_price">$99/night</div> --}}
                                            @foreach ($package->Inclusions as $Inclusion)
                                                <ul class="room_text" style="list-style-type: disc; padding-left: 10px">
                                                    <li>{{ ucfirst($Inclusion['Inclusion']) }}</li>
                                                </ul>
                                            @endforeach
                                            {{-- <div class="room_extra">Breakfast $7.50</div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-lg-right">
                                        <div class="room_button">
                                            {{-- <div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <ul>
                                @foreach ($package->location as $location)
                                    <li>
                                        {{ $location['location'] }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="rooms">

                            <!-- Room -->
                            <div class="room">

                                <!-- Room -->
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="room_content">
                                            <div class="room_title">Exclusions</div>
                                            {{-- <div class="room_price">$99/night</div> --}}
                                            @foreach ($package->Exclusions as $Exclusion)
                                                <ul class="room_text" style="list-style-type: disc; padding-left: 10px">
                                                    <li>{{ ucfirst($Exclusion['Exclusion']) }}</li>
                                                </ul>
                                            @endforeach
                                            {{-- <div class="room_extra">Breakfast $7.50</div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-lg-right">
                                        <div class="room_button">
                                            {{-- <div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <!-- Reviews -->

                        <div class="reviews">
                            <div class="reviews_title">itinerary</div>
                            <div class="reviews_container">

                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($package->Itinerary as $Itinerary)
                                    <div class="review">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <div class="review_image">
                                                    <img src="{{ asset('images/664637.png') }}" alt="t">
                                                </div>
                                            </div>
                                            <div class="col-lg-11">
                                                <div class="review_content">
                                                    <div class="review_title_container">
                                                        <div class="review_title">{{ $Itinerary['Title'] }}</div>
                                                        <div class="review_rating">Day {{ $i }}</div>
                                                    </div>
                                                    <div class="review_text">
                                                        <p>
                                                            {{-- {{$Itinerary['Description']}} --}}
                                                            {!! nl2br(e($Itinerary['Description'])) !!}
                                                        </p>
                                                        @php
                                                            $carbonDate = \Carbon\Carbon::parse($package->created_at);
                                                        @endphp
                                                        <div class="review_date">Updated
                                                            {{ $carbonDate->diffForHumans() }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                                @php
                                    $i = 0;
                                @endphp


                            </div>
                        </div>

                        <!-- Here Goes Terms and conditions -->


                        <div class="terms_conditions">
                            <h2>Terms and Conditions</h2>
                            <ul>
                                <li><strong>Weather and Cancellation Policy:</strong> All tours in Andaman are subject
                                    to weather conditions. Tours may be cancelled at any time due to bad weather,
                                    technical issues, or other unforeseen reasons.</li>
                                <li><strong>Tourist Place Closures:</strong> Many tourist spots in Port Blair are closed
                                    on Mondays and Wednesdays.</li>
                                <li><strong>Payment Terms:</strong> A 40% advance payment is required at the time of
                                    booking. The remaining 60% must be paid on the first day of your hotel check-in. If
                                    the full balance is not paid by the end of the first day, all tour services will be
                                    halted immediately. No excuses or compromises will be accepted regarding payments.
                                </li>
                                <li><strong>GST:</strong> An additional 5% GST will be applied to the total package
                                    cost, as per the Government of India regulations.</li>
                                <li><strong>Responsibility for Cancellations:</strong> We are not responsible for
                                    cancellations of speed boats, ferries, or cruises due to bad weather. In case of
                                    such cancellations, guests must cover their own hotel expenses for the affected
                                    day(s), as the rooms on other islands have already been booked and are
                                    non-refundable.</li>
                                <li><strong>Island Travel Issues:</strong> If travel to Havelock, Neil, or any other
                                    island is cancelled due to bad weather or other issues, guests must pay for any
                                    additional days they need to stay, depending on room availability.</li>
                                <li><strong>Tour Itinerary:</strong> No additional tours beyond the itinerary will be
                                    provided.</li>
                                <li><strong>Children’s Charges:</strong> Children above 2 years will be charged the full
                                    rate. Entry permits, tickets, and other fees for children below 2 years, if
                                    applicable, must be paid directly.</li>
                                <li><strong>Optional Tours:</strong> Additional or optional tours will incur extra
                                    charges.</li>
                                <li><strong>Vehicle Usage:</strong> Vehicles provided for tours are exclusive to the
                                    group but are not available for personal use. They will be used according to the
                                    tour schedule and will not be available all day. Extra charges apply if the vehicle
                                    is used outside the planned schedule or for personal use.</li>
                                <li><strong>Full-Day Vehicle Use:</strong> If you need a vehicle for the full day,
                                    please contact us in advance and be prepared to pay extra for this service.</li>
                                <li><strong>Dinner Time Vehicle Use:</strong> Vehicles will not be provided during
                                    dinner time unless requested in advance, and extra charges will apply.</li>
                                <li><strong>Baggage Policy:</strong> Guests must ensure their baggage fits into the
                                    provided vehicle. If additional vehicles are needed for baggage, guests will bear
                                    the cost. Most vehicles in Andaman do not have baggage carriers.</li>
                                <li><strong>Extra Vehicle Charges:</strong> Additional charges apply for any vehicle use
                                    outside the planned itinerary.</li>
                                <li><strong>Island Travel by Private Cruise:</strong> Travel to and from any island will
                                    be by private cruise (V.Makruzz/M.V.Green Ocean). We are not responsible for
                                    cancellations due to weather or short notice. We will try to arrange alternative
                                    ferries if available but cannot guarantee this.</li>
                                <li><strong>Cruise Seating:</strong> The package includes Economy or Premium class seats
                                    in a Private AC Cruise Ferry. For Luxury or Royal Class seats, please notify us
                                    before booking. Cancellation and rebooking charges will apply if seats in other
                                    classes are available.</li>
                                <li><strong>Refunds for Cancellations:</strong> If a ferry is cancelled due to technical
                                    or weather issues, refunds will be processed according to the company's cancellation
                                    policy. No extra amount will be paid.</li>
                            </ul>
                        </div>


                        <div class="important_notes">
                            <h2>Important Notes</h2>
                            <ul>
                                <li><strong>Mobile Network Availability:</strong> Airtel, BSNL, and Vodafone are
                                    available. BSNL is preferred.</li>
                                <li><strong>Adherence to Timings and Instructions:</strong> Please follow all timings
                                    and instructions provided.</li>
                                <li><strong>Hotel Check-in Time:</strong> Check-in time varies between 10:00 AM and
                                    12:00 PM. For early check-in, the room must be booked for the previous day at an
                                    extra charge.</li>
                                <li><strong>Hotel Room Availability:</strong> Rooms are subject to availability. If the
                                    listed hotel is unavailable, a similar hotel will be provided.</li>
                                <li><strong>Check-in on Arrival Day:</strong> For same-day or early check-in, an extra
                                    day booking is required in advance.</li>
                                <li><strong>Hotel Check-out Time:</strong> Check-out time is between 07:00 AM and 08:00
                                    AM. For late check-out, request the hotel directly; additional charges may apply.
                                </li>
                                <li><strong>Complimentary Breakfast:</strong> No complimentary breakfast on the arrival
                                    day. It is available on the check-out day only.</li>
                                <li><strong>Hotel Ratings and Reviews:</strong> Please check online ratings and reviews
                                    before confirming your hotel.</li>
                                <li><strong>Hotel Food Services:</strong> Meals are provided at the same hotel. Extra
                                    charges apply for vehicle use for meals outside the hotel.</li>
                                <li><strong>Rescheduling Due to Flight Changes:</strong> Notify us immediately of any
                                    flight rescheduling to adjust your tour package accordingly.</li>
                                <li><strong>Hotel Menu Choices:</strong> Complimentary meals are provided by the hotel.
                                    Additional food choices are at direct payment.</li>
                                <li><strong>Hotel Service Issues:</strong> Contact hotel management for any service
                                    issues. We are not responsible for hotel hospitality issues.</li>
                                <li><strong>Mineral Water:</strong> Mineral water is not provided. Please purchase it
                                    personally if needed.</li>
                                <li><strong>Bed Tea:</strong> Provided only after 07:00 AM.</li>
                                <li><strong>Complimentary Breakfast Timing:</strong> Available after 08:00 AM. For
                                    earlier breakfast, request a packed form a day in advance.</li>
                                <li><strong>Revisiting Tour Points:</strong> Revisiting points in the itinerary incurs
                                    extra charges.</li>
                                <li><strong>Vehicle and Driver Changes:</strong> Vehicles and drivers may change
                                    according to the location in the itinerary.</li>
                                <li><strong>Identity Proof:</strong> All guests, including children, must bring original
                                    identity proof (preferably Aadhar card).</li>
                                <li><strong>Full Payment on Arrival:</strong> Full payment is required on arrival.
                                    Online fund transfer is unreliable due to poor internet connectivity.</li>
                                <li><strong>No Post-dated Cheques:</strong> Post-dated cheques are not accepted. Cheques
                                    must be from banks with branches in Port Blair.</li>
                                <li><strong>Cooperation:</strong> We appreciate your cooperation and assure you of the
                                    best service and tour experience in Andaman.</li>
                            </ul>
                        </div>

                        <!-- Do's and Don'ts -->

                        <div class="dos_and_donts">
                            <h2>Do's and Don'ts for Tourists</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="dos_section">
                                        <h3>Do's</h3>
                                        <ul>
                                            <li><strong> Identification:</strong> Always carry your original ID proof,
                                                such as Aadhar card, passport, or driving license.</li>
                                            <li><strong>Follow Timelines:</strong> Adhere to the provided itinerary and
                                                timelines for a smooth travel experience.</li>
                                            <li><strong>Stay Hydrated:</strong> Drink plenty of water and keep yourself
                                                hydrated, especially in tropical climates.</li>
                                            <li><strong>Respect Local Culture:</strong> Be respectful of local customs,
                                                traditions, and dress codes.</li>
                                            <li><strong>Keep Your Belongings Safe:</strong> Use hotel safes for
                                                valuables and be mindful of your belongings, especially in crowded
                                                places.</li>
                                            <li><strong>Use Authorized Transport:</strong> Use only authorized transport
                                                provided by our company or recommended by the hotel.</li>
                                            <li><strong>Inform About Health Issues:</strong> Inform our representatives
                                                about any health issues or dietary requirements in advance.</li>
                                            <li><strong>Follow Safety Guidelines:</strong> Abide by the safety
                                                guidelines provided during activities such as boating, trekking, or
                                                water sports.</li>
                                            <li><strong>Check Reviews:</strong> Review the ratings and feedback for
                                                hotels and services provided in your package.</li>
                                            <li><strong>Carry Necessary Items:</strong> Bring essential items like
                                                sunscreen, insect repellent, comfortable shoes, and a first-aid kit.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="donts_section">
                                        <h3>Don'ts</h3>
                                        <ul>
                                            <li><strong>Avoid Littering:</strong> Do not litter in public places or
                                                natural sites. Use designated bins for waste disposal.</li>
                                            <li><strong>Respect Wildlife:</strong> Do not disturb wildlife or damage
                                                their natural habitat.</li>
                                            <li><strong>No Unauthorized Areas:</strong> Do not enter restricted or
                                                unauthorized areas.</li>
                                            <li><strong>Avoid Last-Minute Changes</strong>: Avoid making last-minute
                                                changes to your itinerary, as it may cause inconvenience and additional
                                                charges.</li>
                                            <li><strong>Do Not Overcrowd:</strong> Do not overcrowd vehicles, boats, or
                                                any transport provided.</li>
                                            <li><strong>Limit Valuables:</strong> Avoid carrying excessive valuables and
                                                large sums of cash.</li>
                                            <li><strong>Do Not Engage in Illegal Activities:</strong> Refrain from
                                                engaging in any illegal activities, including drug use or purchasing
                                                contraband items.</li>
                                            <li><strong>Avoid Unofficial Guides:</strong> Do not hire unofficial guides
                                                or services not endorsed by our company.</li>
                                            <li><strong>No Smoking in Restricted Areas:</strong> Do not smoke in
                                                non-smoking areas or public places where it is prohibited.</li>
                                            <li><strong>Don’t Overindulge in Alcohol:</strong> Avoid excessive
                                                consumption of alcohol, especially before engaging in activities or
                                                using transport.</li>
                                        </ul>
                                    </div>
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

        .dos_section h3,
        .donts_section h3 {
            font-size: 20px;
            color: #003366;
            margin-bottom: 10px;
        }

        .dos_section li::before,
        .donts_section li::before {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .dos_section li {
            position: relative;
            padding-left: 30px;
        }

        .dos_section li::before {
            content: "\2714";
            /* Unicode for check mark */
            color: #28a745;
        }

        .donts_section li {
            position: relative;
            padding-left: 30px;
        }

        .donts_section li::before {
            content: "\2716";
            /* Unicode for cross mark */
            color: #dc3545;
        }
    </style>
</x-layout>
