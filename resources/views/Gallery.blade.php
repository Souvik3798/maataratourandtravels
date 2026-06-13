<x-layout>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about_responsive.css') }}">

    <style>
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            padding: 60px 0;
        }
        .gallery-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            background: #000;
            aspect-ratio: 16/9;
        }
        .gallery-item video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 2;
        }
        .play-btn:hover {
            background: #fff;
            transform: translate(-50%, -50%) scale(1.1);
        }
        .play-btn i {
            font-size: 24px;
            color: #003366;
            margin-left: 3px;
        }
        .gallery-item.playing .play-btn {
            opacity: 0;
            pointer-events: none;
        }

        .video-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            z-index: 9999;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .video-modal.active {
            display: flex;
        }
        .video-modal-content {
            position: relative;
            max-width: 90vw;
            max-height: 90vh;
            cursor: default;
        }
        .video-modal-content video {
            width: 100%;
            height: auto;
            max-height: 85vh;
            display: block;
            border-radius: 4px;
        }
        .video-modal-close {
            position: absolute;
            top: -40px;
            right: 0;
            color: #fff;
            font-size: 30px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 5px;
            line-height: 1;
        }
        .video-modal-close:hover {
            opacity: 0.7;
        }
    </style>

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about_background.jpg') }}"></div>
        <div class="home_content">
            <div class="home_title">Gallery</div>
        </div>
    </div>

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">Our Video Gallery</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="gallery-grid">
                        @php
                            $videoFiles = glob(public_path('images/gallery/*.{mp4,webm,ogg,avi,mov}'), GLOB_BRACE);
                            shuffle($videoFiles);
                        @endphp
                        @foreach($videoFiles as $video)
                            @php
                                $filename = basename($video);
                                $videoUrl = asset('images/gallery/' . $filename);
                            @endphp
                            <div class="gallery-item" data-video="{{ $videoUrl }}">
                                <video src="{{ $videoUrl }}" preload="metadata" muted playsinline></video>
                                <div class="play-btn">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-modal" id="videoModal">
        <div class="video-modal-content">
            <button class="video-modal-close" id="modalCloseBtn">&times;</button>
            <video id="modalVideo" controls playsinline></video>
        </div>
    </div>

    <script>
        var modal = document.getElementById('videoModal');
        var modalVideo = document.getElementById('modalVideo');
        var modalCloseBtn = document.getElementById('modalCloseBtn');

        document.querySelectorAll('.gallery-item').forEach(function(item) {
            var playBtn = item.querySelector('.play-btn');
            var videoUrl = item.getAttribute('data-video');

            playBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                modalVideo.src = videoUrl;
                modal.classList.add('active');
                modalVideo.play();
            });
        });

        function closeModal() {
            modal.classList.remove('active');
            modalVideo.pause();
            modalVideo.src = '';
        }

        modalCloseBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            closeModal();
        });

        modal.addEventListener('click', function() {
            closeModal();
        });

        modal.querySelector('.video-modal-content').addEventListener('click', function(e) {
            e.stopPropagation();
        });
    </script>

</x-layout>
