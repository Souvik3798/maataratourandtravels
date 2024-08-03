<x-layout>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about_responsive.css') }}">
    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg">
        </div>
        <div class="home_content">
            <div class="home_title">about us</div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="intro_image" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false"><img
                            src="images/intro.png" alt=""></div>
                </div>
                <div class="col-lg-5">
                    <div class="intro_content">
                        <div class="intro_title" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">we have the
                            best tours</div>
                        <p class="intro_text" style="text-align: justify" data-aos="zoom-in-right" data-aos-offset="200"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-once="false">Who wouldn't want to spend a peaceful vacation
                            amidst the stunning natural beauty of the Andaman and Nicobar Islands? These pristine
                            islands promise lifelong memories for those who embark on an adventure here. With the
                            tourism industry experiencing significant growth in recent years, we are a trusted tourism
                            agent in the Andaman Islands, dedicated to helping both domestic and international travelers
                            enjoy their journeys to the fullest.

                            Our motto, "serving with genuine hospitality," is at the heart of everything we do.
                            Established in 2006, <strong>Andaman Blue Ocean</strong> has been a committed tour agent in
                            the Andaman region. Our CEO, Sanjit Debnath, is passionate about providing flawless travel
                            services that allow clients to explore the captivating destinations of the Andaman Islands.
                            Based in Port Blair, Andaman and Nicobar Islands, we aim to showcase the unique history and
                            culture of Andaman, highlighting it as one of the world's most unspoiled destinations.

                            Contact us and make <strong>Andaman Blue Ocean</strong> your travel partner to experience
                            the breathtaking beauty of the Andaman and Nicobar Islands.</p>
                        {{-- <div class="button intro_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats -->

    <div class="stats">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">years statistics
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center" data-aos="zoom-in-right" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                    <p class="stats_text" style="text-align: justify">Since our inception in 2006, <strong>Andaman Blue
                            Ocean</strong> has achieved remarkable milestones. We have successfully organized over 5,000
                        tours, serving more than 20,000 satisfied clients from around the globe. Our dedication to
                        excellence has earned us numerous accolades, including the prestigious Andaman Tourism Award. We
                        have expanded our services to include bespoke travel packages, ensuring personalized and
                        memorable experiences for every traveler. Our team’s commitment to "serving with genuine
                        hospitality" has cemented our reputation as a trusted and reliable tour operator in the Andaman
                        Islands, continually driving us to set new standards in the travel industry </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="stats_years" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                        <div class="stats_years_last">2002</div>
                        <div class="stats_years_new float-right">{{ date('Y') }}</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="stats_contents">

                        <!-- Stats Item -->
                        <div class="stats_item d-flex flex-md-row flex-column clearfix">
                            <div class="stats_last order-md-1 order-3" data-aos="zoom-in-right" data-aos-offset="200"
                                data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false">
                                <div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
                                    <img src="images/stats_1.png" alt="">
                                </div>
                                <div class="stats_last_content">
                                    <div class="stats_number">1642</div>
                                    <div class="stats_type">Clients</div>
                                </div>
                            </div>
                            <div class="stats_bar order-md-2 order-2" data-x="1642" data-y="4527" data-color="#31124b"
                                data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                                <div class="stats_bar_perc">
                                    <div>
                                        <div class="stats_bar_value"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="stats_new order-md-3 order-1 text-right" data-aos="zoom-in-right"
                                data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                                data-aos-easing="ease-in-out" data-aos-once="false">
                                <div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
                                    <img src="images/stats_1.png" alt="">
                                </div>
                                <div class="stats_new_content">
                                    <div class="stats_number">4527</div>
                                    <div class="stats_type">Clients</div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats Item -->
                        <div class="stats_item d-flex flex-md-row flex-column clearfix" data-aos="zoom-in-right"
                            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                            data-aos-easing="ease-in-out" data-aos-once="false">
                            <div class="stats_last order-md-1 order-3">
                                <div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
                                    <img src="images/stats_2.png" alt="">
                                </div>
                                <div class="stats_last_content">
                                    <div class="stats_number">768</div>
                                    <div class="stats_type">Returning Clients</div>
                                </div>
                            </div>
                            <div class="stats_bar order-md-2 order-2" data-x="768" data-y="6145"
                                data-color="#a95ce4" data-aos="zoom-in-right" data-aos-offset="200"
                                data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false">
                                <div class="stats_bar_perc">
                                    <div>
                                        <div class="stats_bar_value"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="stats_new order-md-3 order-1 text-right" data-aos="zoom-in-right"
                                data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                                data-aos-easing="ease-in-out" data-aos-once="false">
                                <div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
                                    <img src="images/stats_2.png" alt="">
                                </div>
                                <div class="stats_new_content">
                                    <div class="stats_number">6145</div>
                                    <div class="stats_type">Returning Clients</div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats Item -->
                        <div class="stats_item d-flex flex-md-row flex-column clearfix" data-aos="zoom-in-right"
                            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                            data-aos-easing="ease-in-out" data-aos-once="false">
                            <div class="stats_last order-md-1 order-3">
                                <div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
                                    <img src="images/stats_3.png" alt="">
                                </div>
                                <div class="stats_last_content">
                                    <div class="stats_number">11546</div>
                                    <div class="stats_type">Reach</div>
                                </div>
                            </div>
                            <div class="stats_bar order-md-2 order-2" data-x="11546" data-y="19321"
                                data-color="#fa6f1b" data-aos="zoom-in-right" data-aos-offset="200"
                                data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false">
                                <div class="stats_bar_perc">
                                    <div>
                                        <div class="stats_bar_value"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="stats_new order-md-3 order-1 text-right" data-aos="zoom-in-right"
                                data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                                data-aos-easing="ease-in-out" data-aos-once="false">
                                <div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
                                    <img src="images/stats_3.png" alt="">
                                </div>
                                <div class="stats_new_content">
                                    <div class="stats_number">19321</div>
                                    <div class="stats_type">Reach</div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats Item -->
                        <div class="stats_item d-flex flex-md-row flex-column clearfix" data-aos="zoom-in-right"
                            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                            data-aos-easing="ease-in-out" data-aos-once="false">
                            <div class="stats_last order-md-1 order-3">
                                <div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
                                    <img src="images/stats_4.png" alt="">
                                </div>
                                <div class="stats_last_content">
                                    <div class="stats_number">3729</div>
                                    <div class="stats_type">Items</div>
                                </div>
                            </div>
                            <div class="stats_bar order-md-2 order-2" data-x="3729" data-y="17429"
                                data-color="#fa9e1b" data-aos="zoom-in-right" data-aos-offset="200"
                                data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false">
                                <div class="stats_bar_perc">
                                    <div>
                                        <div class="stats_bar_value"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="stats_new order-md-3 order-1 text-right" data-aos="zoom-in-right"
                                data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                                data-aos-easing="ease-in-out" data-aos-once="false">
                                <div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
                                    <img src="images/stats_4.png" alt="">
                                </div>
                                <div class="stats_new_content">
                                    <div class="stats_number">17429</div>
                                    <div class="stats_type">More Items</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add -->

    <div class="add">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="add_container">
                        <div class="add_background"
                            style="background-image:url(https://cdn.pixabay.com/photo/2019/02/11/04/25/jail-3988719_1280.jpg)"
                            data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                        </div>
                        <div class="add_content" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                            <h1 class="add_title">Cellular Jail</h1>
                            <div class="add_subtitle">From <span>₹.9999/-</span></div>
                            <div class="button add_button">
                                <div class="button_bcg"></div><a href="#">explore
                                    now<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Milestones -->

    <div class="milestones">
        <div class="container">
            <div class="row">

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col" data-aos="zoom-in-right" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-once="false">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/milestone_1.png" alt=""></div>
                        <div class="milestone_counter" data-end-value="4527">0</div>
                        <div class="milestone_text">Clients</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col" data-aos="zoom-in-right" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-once="false">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/milestone_2.png" alt=""></div>
                        <div class="milestone_counter" data-end-value="1176">0</div>
                        <div class="milestone_text">Activities</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col" data-aos="zoom-in-right" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-once="false">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/milestone_3.png" alt=""></div>
                        <div class="milestone_counter" data-end-value="39">0</div>
                        <div class="milestone_text">Location Covered</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col" data-aos="zoom-in-right" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-once="false">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/milestone_4.png" alt=""></div>
                        <div class="milestone_counter" data-end-value="127">0</div>
                        <div class="milestone_text">Services</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/about_custom.js"></script>
</x-layout>
