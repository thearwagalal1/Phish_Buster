<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap");
    </style>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById("menu");
            menu.classList.toggle("hidden");
        }
    </script>
</head>

<body>
    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full top-0 left-0 z-10">
        <div class="max-w-9xl mx-auto px-4">
            <div class="flex justify-between items-center py-1">
                <div>
                    <img src="{{ asset('images/about/logo1.png') }}" alt="logo" class="h-[60px] w-full" />
                </div>
                <div class="hidden md:flex">
                    <ul class="text-xl text-[#11477B] flex gap-5 items-center font-semibold inter-semibold">
                        <li><a href="{{ route('home') }}" class="hover:text-[#349BDB]">Home</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-[#349BDB]">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-[#349BDB]">Contact Us</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-[#349BDB] underline underline-offset-4">About</a></li>
                        @auth
                            <li>
                                <a href="{{ route('profile') }}" class="block bg-[#349BDB] rounded-full py-2 px-5 text-white hover:bg-[#11477B]">Profile</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('register') }}" class="block bg-[#349BDB] rounded-full py-2 px-5 text-white hover:bg-[#11477B]">Sign Up</a>
                            </li>
                        @endauth
                    </ul>
                </div>
                <div class="md:hidden">
                    <button onclick="toggleMenu()" class="text-[#349BDB] focus:outline-none cursor-pointer">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="menu" class="hidden md:hidden">
                <ul class="text-xl text-[#11477B] flex flex-col gap-3 pb-4 font-semibold inter-semibold">
                    <li><a href="{{ route('home') }}" class="block hover:text-[#349BDB]">Home</a></li>
                    <li><a href="{{ route('services') }}" class="block hover:text-[#349BDB]">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="block hover:text-[#349BDB]">Contact Us</a></li>
                    <li><a href="{{ route('about') }}" class="block hover:text-[#349BDB] underline underline-offset-4">About</a></li>
                    @auth
                        <li>
                            <a href="{{ route('profile') }}" class="block bg-[#349BDB] py-2 px-5 rounded text-white hover:bg-[#11477B]">Profile</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('register') }}" class="block bg-[#349BDB] py-2 px-5 rounded text-white hover:bg-[#11477B]">Sign Up</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="mt-[85px] max-w-7xl w-full mx-auto px-5 sm:px-[50px] md:px-[75px] lg:px-[100px] overflow-hidden">
        <div class="text-center">
            <p class="text-[#3498DB] font-bold text-3xl md:text-4xl lg:text-[44px]">
                __About Us__
            </p>
            <p class="text-[#11477b] font-normal text-base md:text-lg lg:text-xl mt-4">
                "In today’s fast-paced world, finding skilled cybersecurity talent is both time-consuming and
                challenging.<br />Our platform streamlines the process with cutting-edge tools designed to evaluate
                and hire top<br /> cybersecurity engineers efficiently. We also help safeguard companies by ensuring
                new hires are well-<br />prepared to identify and mitigate potential security risks."
            </p>
        </div>

        <div class="text-center mt-5">
            <p class="text-[#3498DB] font-bold text-3xl md:text-4xl lg:text-[44px]">
                We Guarantee You
            </p>
        </div>

        <div class="flex flex-col lg:flex-row justify-center gap-6 mt-2">
            <!-- Column 1 -->
            <div class="flex flex-col gap-6 w-full lg:w-auto">
                <!-- Card 1 -->
                <div class="bg-[#EBF5FB] rounded-3xl p-6 lg:p-8 w-full">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/about/Clock Checked.png') }}" alt="" class="w-10 h-10 mr-4" />
                        <p class="text-[#3498DB] font-bold text-lg lg:text-xl">
                            Time-Saving Solutions
                        </p>
                    </div>
                    <p class="text-[#3498DB] font-light text-sm lg:text-base">
                        Streamline the hiring process with automated interviews and assessments, saving valuable
                        time for both companies and applicants.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#EBF5FB] rounded-3xl p-6 lg:p-8 w-full">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/about/Video Chat.png') }}" alt="chat" class="w-10 h-10 mr-4" />
                        <p class="text-[#3498DB] font-bold text-lg lg:text-xl">
                            Real-Time Interview Experience
                        </p>
                    </div>
                    <p class="text-[#3498DB] font-light text-sm lg:text-base">
                        Conduct realistic interviews with voice-led questions and video recording, providing an
                        interactive and immersive evaluation process.
                    </p>
                </div>
            </div>

            <!-- Image Section -->
            <div class="w-full lg:w-[800px] h-auto flex items-center justify-center mt-2 lg:mt-0">
                <img src="{{ asset('images/about/image.png') }}" alt="about" class="w-full h-auto" />
            </div>

            <!-- Column 2 -->
            <div class="flex flex-col gap-6 w-full lg:w-auto">
                <!-- Card 3 -->
                <div class="bg-[#EBF5FB] rounded-3xl p-6 lg:p-8 w-full">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/about/Goal.png') }}" alt="goal" class="w-10 h-10 mr-4" />
                        <p class="text-[#3498DB] font-bold text-lg lg:text-xl">
                            Efficient Talent Selection
                        </p>
                    </div>
                    <p class="text-[#3498DB] font-light text-sm lg:text-base">
                        Connect companies with top cybersecurity professionals quickly and effectively, ensuring
                        only the best candidates move forward.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-[#EBF5FB] rounded-3xl p-6 lg:p-8 w-full">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/about/Protect.png') }}" alt="protect" class="w-10 h-10 mr-4" />
                        <p class="text-[#3498DB] font-bold text-lg lg:text-xl">
                            Comprehensive Skill Assessment
                        </p>
                    </div>
                    <p class="text-[#3498DB] font-light text-sm lg:text-base">
                        Test candidates’ technical knowledge and practical abilities through tailored challenges,
                        ensuring they’re ready to tackle real-world cybersecurity threats.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/about.js') }}"></script>
</body>

</html>