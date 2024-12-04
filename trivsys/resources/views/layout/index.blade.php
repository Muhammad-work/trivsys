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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: "Poppins", serif;
            font-weight: 300;
            font-style: normal;
        }
    </style>
</head>

<body>

    <nav class="w-full h-[80px] bg-[white] flex justify-between md:px-3 px-3 place-items-center">
        <!-- Logo Section -->
        <div class="md:w-[15%] w-[40%]">
            <img class="w-[100%]" src="{{ asset('storage/img/Untitled-1-removebg-preview.png') }}" alt="Company Logo">
        </div>

        <!-- Navigation Menu (Visible on medium screens and larger) -->
        <div class="md:block hidden">
            <ul class="flex gap-4 text-lg relative">
                <li class=""><a href="#">Home</a></li>
                <li class=""><a href="#">About</a></li>
                <li class="relative group ">
                    <a href="#">Services</a>
                </li>
                <li class=""><a href="#">Portfolio</a></li>
                <li class=""><a href="#">Career</a></li>
                <li class=""><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- Contact Info Section (Visible on medium screens and larger) -->
        <div class="md:block hidden">
            <div class="flex gap-3">
                <img class="w-[20%]" src="{{ asset('storage/img/cell.png') }}" alt="Phone Icon">
                <div>
                    <p class="text-[red]">Call us now</p>
                    <p class="text-xl">+1-888-442-4644</p>
                </div>
            </div>
        </div>

        <!-- Mobile Hamburger Menu (Hidden on medium screens and larger) -->
        <div class="md:hidden block">
            <i class="fa-solid fa-bars text-4xl menubar"></i>
        </div>
    </nav>

    <div class="w-full h-screen flex justify-end fixed top-0 left-0 sidebar"
        style="transform: translateX(100%); transition: transform 1s;">
        <div class="w-[300px] h-full bg-[white] flex relative justify-center p-10 shadow-lg">
            <i class="fa-solid fa-x absolute left-4 top-2 cancel text-2xl"></i>
            <ul class="flex flex-col gap-9 text-lg mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    <section class="w-full h-auto md:h-[600px] bg-cover bg-center bg-no-repeat py-6"
        style="background-image: url({{ asset('storage/img/section.webp') }});">
        <div class="w-full h-full flex flex-col justify-center items-start gap-3 px-5 md:px-[5%]">
            <h1 class="text-4xl md:text-5xl font-bold text-[#fff]">Revolutionizing</h1>
            <h1 class="text-4xl md:text-5xl font-bold text-[red] animationText"></h1>
            <h1 class="text-4xl md:text-5xl font-bold text-[#fff]">Through Innovation</h1>
            <div class="w-full md:w-[40%] mt-4">
                <p class="text-white text-sm md:text-lg">
                    <span class="font-bold text-[red]">RetroCube</span> is the global guru in the world of app
                    development services, leading the way through eccentricity and technological creativity. We excel in
                    creating highly responsive and adaptive apps, providing invigorating user experience across all
                    platforms.
                </p>
            </div>
            <button class="px-6 py-2 bg-[white] text-md rounded-[20px] font-medium mt-3">Contact Us <span
                    class="text-[red]"><i class="fa-solid fa-arrow-right"></i> </span></button>
        </div>
    </section>

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
                "App Development",
                "Web Development",
                "Graphic Designing",
                "Logo Designing",
                "Facbook Adds",
                "SEO Services"
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
    </script>

</body>

</html>
