<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trivsys</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: "Poppins", serif;
            font-weight: 400;
            font-style: normal;
        }

        .loader-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
            background: #000000;
            animation: loader 1.5s infinite ease;
            /* Animation for loader fading */
        }

        /* From Uiverse.io by Nawsome */
        .pl {
            width: 6em;
            height: 6em;
        }

        .pl__ring {
            animation: ringA 2s linear infinite;
        }

        .pl__ring--a {
            stroke: #f42f25;
        }

        .pl__ring--b {
            animation-name: ringB;
            stroke: #f49725;
        }

        .pl__ring--c {
            animation-name: ringC;
            stroke: #255ff4;
        }

        .pl__ring--d {
            animation-name: ringD;
            stroke: #f42582;
        }

        /* Animations */
        @keyframes ringA {

            from,
            4% {
                stroke-dasharray: 0 660;
                stroke-width: 20;
                stroke-dashoffset: -330;
            }

            12% {
                stroke-dasharray: 60 600;
                stroke-width: 30;
                stroke-dashoffset: -335;
            }

            32% {
                stroke-dasharray: 60 600;
                stroke-width: 30;
                stroke-dashoffset: -595;
            }

            40%,
            54% {
                stroke-dasharray: 0 660;
                stroke-width: 20;
                stroke-dashoffset: -660;
            }

            62% {
                stroke-dasharray: 60 600;
                stroke-width: 30;
                stroke-dashoffset: -665;
            }

            82% {
                stroke-dasharray: 60 600;
                stroke-width: 30;
                stroke-dashoffset: -925;
            }

            90%,
            to {
                stroke-dasharray: 0 660;
                stroke-width: 20;
                stroke-dashoffset: -990;
            }
        }

        @keyframes ringB {

            from,
            12% {
                stroke-dasharray: 0 220;
                stroke-width: 20;
                stroke-dashoffset: -110;
            }

            20% {
                stroke-dasharray: 20 200;
                stroke-width: 30;
                stroke-dashoffset: -115;
            }

            40% {
                stroke-dasharray: 20 200;
                stroke-width: 30;
                stroke-dashoffset: -195;
            }

            48%,
            62% {
                stroke-dasharray: 0 220;
                stroke-width: 20;
                stroke-dashoffset: -220;
            }

            70% {
                stroke-dasharray: 20 200;
                stroke-width: 30;
                stroke-dashoffset: -225;
            }

            90% {
                stroke-dasharray: 20 200;
                stroke-width: 30;
                stroke-dashoffset: -305;
            }

            98%,
            to {
                stroke-dasharray: 0 220;
                stroke-width: 20;
                stroke-dashoffset: -330;
            }
        }

        @keyframes ringC {
            from {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: 0;
            }

            8% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -5;
            }

            28% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -175;
            }

            36%,
            58% {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: -220;
            }

            66% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -225;
            }

            86% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -395;
            }

            94%,
            to {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: -440;
            }
        }

        @keyframes ringD {

            from,
            8% {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: 0;
            }

            16% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -5;
            }

            36% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -175;
            }

            44%,
            50% {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: -220;
            }

            58% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -225;
            }

            78% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -395;
            }

            86%,
            to {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: -440;
            }
        }



        #services::before {
            position: absolute;
            bottom: 9px;
            right: 90px;
            content: '';
            height: 15px;
            width: 400px;
            background: #ffcaa8;
            border-radius: 20px;
            z-index: -1;
        }

        @media (max-width: 768px) {
            #services::before {
                right: 40px;
                /* Reduce right positioning */
                width: 300px;
                /* Make it smaller on medium screens */
                height: 12px;
                /* Adjust height for balance */
                bottom: 7px;
                /* Reduce bottom positioning */
            }
        }

        @media (max-width: 480px) {
            #services::before {
                right: 20px;
                /* Further reduce right positioning on mobile */
                width: 250px;
                /* Adjust width for mobile */
                height: 8px;
                /* Decrease height */
                bottom: 5px;
                /* Slightly smaller bottom positioning */
            }
        }

        .app-development {
            height: 150px;
            min-height: 150px;
            transition: ease 1s;
            border-top: 1px solid #f49725;
            border-left: 1px solid #f49725;
            border-right: 1px solid #f49725;
            position: relative;
        }

        .services-text {
            display: none;
            transition: ease 1s;
        }

        .app-development:hover {
            height: auto;
            min-height: 350px;
            /* Adjust according to your content */
        }

        .app-development:hover .services-text {
            display: block;
            transition: ease 1s;
        }

        .app-development:hover .p {
            display: none;
            transition: 1s;
        }

        .app-development:hover .services-img {
            width: 100%;
            transition: 1s;
        }

        .app-development:hover .services-img img {
            width: 45%;
            display: block;
            margin: auto;
            transition: 1s;
        }

        /* Corrected position of ::before and ::after */
        .app-development::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            background: #EB7422;
            width: 0;
            height: 2px;
            transition: width 1s ease-in-out;
        }

        .app-development::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            background: #EB7422;
            width: 0;
            height: 2px;
            display: none;
            /* Initially hidden */
            transition: width 1s ease-in-out;
        }

        .app-development:hover {
            border-right: 2px solid #EB7422;
            border-left: 2px solid #EB7422;
            transition: 0.5s
        }

        .app-development:hover::before {
            width: 100%;
            display: block;
            animation: animationBefore 1s linear forwards;
        }

        .app-development:hover::after {
            display: block;
            width: 100%;
            animation: animationAfter 1s linear forwards;
        }



        @keyframes animationBefore {
            0% {
                width: 0%;
            }

            35%,
            55% {
                width: 100%;
            }

            100% {
                width: 100%;
            }
        }

        @keyframes animationAfter {
            0% {
                width: 0%;
            }

            35%,
            55% {
                width: 100%;
            }

            100% {
                width: 100%;
            }
        }

        .mobile-img {
            animation: img 2s ease-in-out infinite;
        }

        @keyframes img {
            0% {
                top: 0px;
            }

            50% {
                top: 50px;
                /* Slightly smaller movement for smoother animation */
            }

            100% {
                top: 0px;
            }
        }

        #baner-img {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: opacity 1.5s linear, clip-path 1.5s linear;
            z-index: -1;
        }

        #baner-conatiner:hover #baner-img {
            opacity: 1;
            clip-path: circle(150% at 50% 50%);
            z-index: 10;
            cursor: pointer;
        }

        #baner-conatiner:hover #baner-img {
            transition: opacity 1.5s linear, clip-path 1.5s linear;
        }

        #baner-conatiner:not(:hover) #baner-img {
            opacity: 0;
            clip-path: circle(0% at 50% 50%);
            z-index: -1;
            transition: opacity 1.5s linear, clip-path 1.5s linear;
        }
    </style>
</head>

<body class="scroll-smooth">

    <!-- loader section start -->
    {{-- <div class="loader-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div> --}}
    <!-- loader section end -->

    {{-- nav --}}
    @yield('nav')
    {{-- nav --}}

    {{-- sidebar section start --}}
    @yield('sidebar')
    {{-- sidebar section end --}}


    {{-- Home --}}
    @yield('home')
    {{-- Home --}}



    {{-- footer section start --}}
    @yield('fotter')
    {{-- footer section end --}}

    <script>
        let menubar = document.querySelector('.menubar');
        let sidebar = document.querySelector('.sidebar');
        let cancelmanu = document.querySelector('.cancel');

        menubar.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(0%)';
        });

        cancelmanu.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(100%)';
        });

        window.onload = function() {
            const textElement = document.querySelector('.animationText');
            const texts = [
                "Web Development",
                "App Development",
                "ERP Software",
                "CRM Software",
                "Digital Marketing",
            ];

            let currentTextIndex = 0;
            let index = 0;
            const typingSpeed = 100;
            const eraseSpeed = 100;

            function typeText() {
                let textContent = texts[currentTextIndex];
                if (index < textContent.length) {
                    textElement.textContent += textContent.charAt(index);
                    index++;
                    setTimeout(typeText, typingSpeed);
                } else {
                    setTimeout(() => {
                        eraseText();
                    }, 2000);
                }
            }

            function eraseText() {
                let textContent = texts[currentTextIndex];
                let eraseIndex = textContent.length;

                function eraseLetter() {
                    if (eraseIndex > 0) {
                        textElement.textContent = textContent.substring(0, eraseIndex - 1);
                        eraseIndex--;
                        setTimeout(eraseLetter, eraseSpeed);
                    } else {

                        currentTextIndex = (currentTextIndex + 1) % texts.length; // Loop through the texts array
                        index = 0;
                        textElement.textContent = '';
                        typeText();
                    }
                }

                eraseLetter();
            }

            typeText();
        };

        let loader = document.querySelector('.loader-container');

        function fadeOutLoader() {
            loader.style.transition = "opacity 1s ease";
            loader.style.opacity = '0';

            setTimeout(() => {
                loader.style.display = 'none';
            }, 1000);
        }

        setTimeout(fadeOutLoader, 2000);



        function animateCount(element, target) {
            let current = 0;
            const increment = target / 80;

            function updateCount() {
                current += increment;
                if (current < target) {
                    x = element.innerText = Math.ceil(current) + '+';
                    requestAnimationFrame(updateCount);

                } else {
                    if (target === '90') {
                        x = element.innerText = target + '%';
                    } else {
                        x = element.innerText = target + '+';
                    }
                }
            }
            updateCount();
        }

        const countElements = document.querySelectorAll('.count');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target.getAttribute('data-target');
                    const countElement = entry.target.querySelector('p');
                    animateCount(countElement, target);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        countElements.forEach(element => {
            observer.observe(element);
        });
    </script>


    <script>
        let serviceBtn = document.querySelectorAll('.btn');
        let servicinput = document.querySelector('#service');

        let array = Array.from(serviceBtn);

        array.forEach(btn => {
            let x = 0;
            btn.addEventListener('click', (e) => {

                if (x === 0) {
                    e.target.style.color = '#EB7422';
                    text = e.target.textContent;
                    servicinput.value = text;
                    x = 1;

                } else {
                    e.target.style.color = '#fff';
                    text = e.target.textContent;
                    servicinput.value = '';
                    x = 0;
                }


            });
        });
    </script>

    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 1, // Default: 1 slide visible
            spaceBetween: 10, // Space between slides
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2, // 2 slides for screens >= 640px
                },
                768: {
                    slidesPerView: 3, // 3 slides for screens >= 768px
                },
                1024: {
                    slidesPerView: 4, // 4 slides for screens >= 1024px
                },
            },
        });
    </script>
</body>

</html>
