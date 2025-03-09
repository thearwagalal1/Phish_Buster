<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pathways</title>
    <link rel="stylesheet" href="{{asset('css\interview.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap");
      .selected {
       border: 2px dashed #349BDB;
       box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .hover-zoom:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
      }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      function toggleMenu() {
        const menu = document.getElementById("menu");
        menu.classList.toggle("hidden");
      }
    </script>
  </head>
  <body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white fixed w-full top-0 left-0">
      <div class="max-w-9xl mx-auto px-4">
        <div class="flex justify-between items-center py-1">
          <div>
            <img src="{{asset('images/interview/logo1.png')}}" alt="logo" class="h-[60px] w-full animate__animated animate__fadeInDown" />
          </div>
          <div class="hidden md:flex">
            <ul class="text-xl text-[#11477B] flex gap-5 items-center font-medium inter-medium">
              <li><a href="../hommme 2/home 2.html" class="hover:text-[#349BDB] animate__animated animate__fadeInDown">Home</a></li>
              <li><a href="../services/services.html" class="hover:text-[#349BDB] animate__animated animate__fadeInDown">Services</a></li>
              <li><a href="../contactus/contact.html" class="hover:text-[#349BDB] animate__animated animate__fadeInDown">Contact Us</a></li>
              <li><a href="../about/about.html" class="hover:text-[#349BDB] animate__animated animate__fadeInDown">About</a></li>
              <li>
                <a
                href="../profile/profile.html"
                class="block bg-[#349BDB] rounded-full py-2 px-5  text-white hover:bg-[#11477B] animate__animated animate__fadeInDown"
                >Profile</a
                >
              </li>
            </ul>
          </div>
          <div class="md:hidden">
            <button
              onclick="toggleMenu()"
              class="text-[#349BDB] focus:outline-none"
            >
              <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16m-7 6h7"
                ></path>
              </svg>
            </button>
          </div>
        </div>
        <div id="menu" class="hidden md:hidden">
          <ul class="text-xl text-[#11477B] flex flex-col gap-3 pb-4 font-medium inter-medium">
            <li><a href="../hommme 2/home 2.html" class="hover:text-[#349BDB] animate__animated animate__fadeInDown">Home</a></li>
            <li><a href="../services/services.html" class="hover:text-[#349BDB] animate__animated animate__fadeInDown">Services</a></li>
            <li><a href="../contactus/contact.html" class="hover:text-[#349BDB] animate__animated animate__fadeInDown">Contact Us</a></li>
            <li><a href="../about/about.html" class="hover:text-[#349BDB] animate__animated animate__fadeInDown">About</a></li>
            <li>
              <a
                href="../profile/profile.html"
                class="block bg-[#349BDB] rounded-full py-2 px-5 text-white hover:bg-[#11477B] animate__animated animate__fadeInDown"
                >Profile</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="bg-gray-50 flex justify-center items-center pt-10 p-6 mt-16">
      <div class="w-full max-w-7xl p-3 text-center">
        <h1 class="text-2xl md:text-3xl font-bold inter-bold text-[#11477b] mb-6 animate__animated animate__fadeInUp">
          Select your path
        </h1>

        <!-- الخيارات -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-20">
          <!-- SOC -->
          <div id="soc" class="p-4 bg-[#3498DB14] rounded-lg cursor-pointer hover:shadow-lg transition border-2 hover:border-dashed hover:border-[#349BDB] animate__animated animate__fadeInUp hover-zoom">
            <img src="{{asset('images/interview/SOC.png')}}" alt="SOC" class="w-full h-32 object-contain animate__animated animate__zoomIn" />
            <p class="text-[#349BDB] text-xl font-bold inter-bold mt-2">
              security operation centre (SOC)
            </p>
          </div>

          <!-- Malware Analysis -->
          <div id="malware-analysis" class="bg-[#3498DB14] p-4 rounded-lg cursor-pointer hover:shadow-lg transition border-2 hover:border-dashed hover:border-[#349BDB] animate__animated animate__fadeInUp hover-zoom">
            <img src="{{asset('images/interview/analys.png')}}" alt="Malware" class="w-full h-32 object-contain animate__animated animate__zoomIn" />
            <p class="text-[#349BDB] text-xl font-bold inter-bold mt-2">
              Malware analysis
            </p>
          </div>

          <!-- Penetration Testing -->
          <div id="pen-test" class="bg-[#3498DB14] relative p-4 rounded-lg cursor-pointer hover:shadow-lg transition border-2 hover:border-dashed hover:border-[#349BDB] min-h-[200px] animate__animated animate__fadeInUp hover-zoom">
            <!-- Image -->
            <img src="{{asset('images/interview/object.png')}}" alt="PenTesting" class="w-full h-32 object-contain animate__animated animate__zoomIn" />
            <!-- Title -->
            <p class="text-[#349BDB] text-xl font-bold inter-bold mt-2">
              Penetration testing
            </p>

            <!-- Sub-options (hidden by default) -->
            <div id="sub-options" class="absolute top-full left-0 w-full mt-4 space-y-2 hidden p-2">
              <button class="w-full bg-white text-[#3498DB] text-xl font-light inter-light py-1 px-6 rounded-2xl border border-[#3498DB] hover:bg-[#11477B] hover:text-white animate__animated animate__fadeInUp">web application</button>
              <button class="w-full bg-white text-[#3498DB] text-xl font-light inter-light py-1 px-6 rounded-2xl border border-[#3498DB] hover:bg-[#11477B] hover:text-white animate__animated animate__fadeInUp">mobile application </button>
              <button class="w-full bg-white text-[#3498DB] text-xl font-light inter-light py-1 px-6 rounded-2xl border border-[#3498DB] hover:bg-[#11477B] hover:text-white animate__animated animate__fadeInUp">network</button>
            </div>
          </div>

          <!-- Red Teaming -->
          <div id="redTeaming" class="bg-[#3498DB14] p-4 rounded-lg cursor-pointer hover:shadow-lg transition border-2 hover:border-dashed hover:border-[#349BDB] animate__animated animate__fadeInUp hover-zoom">
            <img src="{{asset('images\interview\laptop.PNG')}}" alt="Red Teaming" class="w-full h-32 object-contain animate__animated animate__zoomIn" />
            <p class="text-[#349BDB] text-xl font-bold inter-bold mt-2">
              Red teaming
            </p>
          </div>
        </div>

        <div class="mt-10 md:mt-15">
          <button id="submit-button" class="bg-[#11477B] text-white text-base px-16 py-2 rounded-xl hover:bg-[#349BDB] transition mt-[120px] md:ml-[1050px] font-bold inter-bold animate__animated animate__fadeInUp hover-zoom">
            Submit
          </button>
        </div>
      </div>
    </div>

    <script src="{{asset('js\interview\pathways.js')}}"></script>
  </body>
</html>