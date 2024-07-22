<x-layout>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single_listing_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single_listing_responsive.css') }}">

    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('images/single_background.jpg') }}"></div>
        <div class="home_content">
            <div class="home_title">Activity</div>
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
                                    <h1 class="hotel_title">{{ $activity->title }}</h1>
                                    <div class="rating_r rating_r_4 hotel_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class="hotel_location"><strong>₹.{{ $activity->pricing }}/-</strong></div>
                                </div>
                            </div>

                            <!-- Listing Image -->

                            <div class="hotel_image">
                                <img src="{{ asset('storage/' . $activity->image) }}" alt="">
                                <div
                                    class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
                                    <div class="hotel_review">
                                        <div class="hotel_review_content">
                                            <div class="hotel_review_title">very good</div>
                                        </div>
                                        <div class="hotel_review_rating text-center" style="background-color: purple">
                                            8.1</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hotel Info Text -->

                            <div class="hotel_info_text" style="text-align: justify">
                                <p style="color: black; font-size: 18px">{{ $activity->description }}</p>
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

                        <!-- Do's and Don'ts for Water Activities -->

                        <div class="dos_and_donts">
                            <h2>Do's and Don'ts</h2>
                            <div class="row">
                                <div class="col-md-6 dos_section">
                                    <h3>Do's</h3>
                                    <ul>
                                        <li><strong>Wear life jackets at all times during water activities.</strong>
                                        </li>
                                        <li><strong>Listen carefully to the safety instructions provided by your guide
                                                or instructor.</strong></li>
                                        <li><strong>Stay hydrated and apply sunscreen to protect yourself from
                                                sunburn.</strong></li>
                                        <li><strong>Ensure you are in good health before participating in any water
                                                activities.</strong></li>
                                        <li><strong>Respect marine life and coral reefs; look but do not touch.</strong>
                                        </li>
                                        <li><strong>Use the buddy system; never go alone during water
                                                activities.</strong></li>
                                        <li><strong>Follow local regulations and guidelines for each activity.</strong>
                                        </li>
                                        <li><strong>Dispose of any trash properly to keep the water and beaches
                                                clean.</strong></li>
                                        <li><strong>Inform your instructor if you feel uncomfortable or unwell during
                                                the activity.</strong></li>
                                        <li><strong>Have fun and enjoy the experience while staying safe.</strong></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 donts_section">
                                    <h3>Don'ts</h3>
                                    <ul>
                                        <li><strong>Do not participate in water activities under the influence of
                                                alcohol or drugs.</strong></li>
                                        <li><strong>Do not ignore safety instructions or guidelines provided by the
                                                instructors.</strong></li>
                                        <li><strong>Avoid swimming or diving in restricted or dangerous areas.</strong>
                                        </li>
                                        <li><strong>Do not touch or disturb marine life or coral reefs.</strong></li>
                                        <li><strong>Do not leave children unattended during water activities.</strong>
                                        </li>
                                        <li><strong>Avoid panic; stay calm and follow your instructor's guidance in case
                                                of any issues.</strong></li>
                                        <li><strong>Do not bring valuables or electronics that can be damaged by
                                                water.</strong></li>
                                        <li><strong>Do not feed fish or other marine creatures as it disrupts their
                                                natural behavior.</strong></li>
                                        <li><strong>Avoid strenuous activities if you have health conditions that can be
                                                exacerbated.</strong></li>
                                        <li><strong>Do not litter; always keep the environment clean and respect
                                                nature.</strong></li>
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
            content: "\2714";
            /* Unicode for check mark */
            color: #28a745;
        }

        .donts_section li::before {
            content: "\2716";
            /* Unicode for cross mark */
            color: #dc3545;
        }
    </style>
</x-layout>
