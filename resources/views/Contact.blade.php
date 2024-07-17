<x-layout>

    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

    <!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">contact</div>
		</div>
	</div>

	<!-- Contact -->
    <div class="contact_form_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    @if (session('success'))
                        <div class="alert alert-success" id="success-popup">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Contact Form -->
                    <div class="contact_form_container">
                        <div class="contact_title text-center">get in touch</div>
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


	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">

					<!-- About - Image -->

					<div class="about_image">
						<img src="images/man.png" alt="">
					</div>

				</div>

				<div class="col-lg-4">

					<!-- About - Content -->

					<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><a href="{{url('/')}}"><img src="{{asset('images/ABS.png')}}" alt=""></a></div>
						</div>
						<p class="about_text" style="text-align: justify">Andaman Blue Ocean crafts unforgettable experiences by showcasing the pristine beauty and rich culture of the Andaman Islands. This service boosts the local economy while fostering a global appreciation for this unique destination. It prioritizes sustainable practices, ensuring that the natural and cultural attractions of the islands are preserved for future explorers</p>
						<ul class="about_social_list">
							<li class="about_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="about_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>

				</div>

				<div class="col-lg-3">

					<!-- About Info -->

					<div class="about_info">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
								<div class="contact_info_text">Ponghi Kyaung, Port Blair, 744101</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
								<div class="contact_info_text">+91-9933250564</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:andamanblueoceantravel@gmail.com?Subject=Hello" target="_top">andamanblueoceantravel@gmail.com</a></div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="{{asset('images/whstapp.png')}}" alt=""></div></div>
								<div class="contact_info_text"><a href="https://wa.me/9531913980">+91-95319 13980</a></div>
							</li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- Google Map -->


    <script src="js/contact_custom.js"></script>
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
    </script>


</x-layout>
