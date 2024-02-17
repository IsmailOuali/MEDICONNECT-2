<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="build/tailwind.css">

        <title>Home page</title>
    </head>
    <style>
    #menu-toggle:checked+#menu {
      display: block;
    }

    #dropdown-toggle:checked+#dropdown {
      display: block;
    }

    a,
    span {
      position: relative;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    a.arrow,
    span.arrow {
      display: flex;
      align-items: center;
      font-weight: 600;
      line-height: 1.5;
    }

    a.arrow .arrow_icon,
    span.arrow .arrow_icon {
      position: relative;
      margin-left: 0.5em;
    }

    a.arrow .arrow_icon svg,
    span.arrow .arrow_icon svg {
      transition: transform 0.3s 0.02s ease;
      margin-right: 1em;
    }

    a.arrow .arrow_icon::before,
    span.arrow .arrow_icon::before {
      content: "";
      display: block;
      position: absolute;
      top: 50%;
      left: 0;
      width: 0;
      height: 2px;
      background: #38b2ac;
      transform: translateY(-50%);
      transition: width 0.3s ease;
    }

    a.arrow:hover .arrow_icon::before,
    span.arrow:hover .arrow_icon::before {
      width: 1em;
    }

    a.arrow:hover .arrow_icon svg,
    span.arrow:hover .arrow_icon svg {
      transform: translateX(0.75em);
    }

    .bg-blue-teal-gradient {
      background: rgb(49, 130, 206);
      background: linear-gradient(90deg, rgba(49, 130, 206, 1) 0%, rgba(56, 178, 172, 1) 100%);
    }

  </style>
  <body class=" bg-white font-sans text-gray-900">

    <main class="w-full">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center py-6 px-4 mt-2">
          <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
            <div class="flex items-center justify-between w-full md:w-auto">
              <a href="/" aria-label="Home">MEDICONNECT</a>
              <div class="-mr-2 flex items-center md:hidden">
                <button type="button" id="main-menu" aria-label="Main menu" aria-haspopup="true" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                  <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" class="h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
              </div>
            </div>
          </div>
          <div class="hidden md:flex md:space-x-10">
            <a href="#features"
              class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Profil</a>
            <a href="#pricing"
              class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Consultation</a>
            <a href="/booking"
              class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Prendre un rendez-vous</a>
            <a href="https://docs.pingping.io" target="_blank"
              class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Medecins</a>
          </div>
          <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
            <span class="inline-flex">
              <a href="/login" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium text-blue-600 hover:text-blue-500 focus:outline-none transition duration-150 ease-in-out">
                Login
                </a>
            </span>
            <span class="inline-flex rounded-md shadow ml-2">
              <a href="/register" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out">
                  Creer un compte
              </a>
            </span>
          </div>
      </nav>



      
  
      <!-- start hero -->
      <div class="bg-gray-100">
        <section class="cover bg-blue-teal-gradient relative bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 overflow-hidden py-48 flex
        items-center min-h-screen">
          <div class="h-full absolute top-0 left-0 z-0">
            <img src="images/cover-bg.jpg" alt="" class="w-full h-full object-cover opacity-20">
          </div>
  
          <div class="lg:w-3/4 xl:w-2/4 relative z-10 h-100 lg:mt-16">
            <div>
              <h1 class="text-white text-4xl md:text-5xl xl:text-6xl font-bold leading-tight">A better life starts with a
                beautiful
                smile.</h1>
              <p class="text-blue-100 text-xl md:text-2xl leading-snug mt-4">Welcome to the Dentist Office of Dr. Thomas
                Dooley,
                where
                trust
                and comfort are priorities.</p>
              <a href="#" class="px-8 py-4 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">Book
                Appointment</a>
            </div>
          </div>
        </section>
      </div>
      <!-- end hero -->
  
        
        
  
  
  
      <!-- start footer -->
      <footer class="relative bg-gray-900 text-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 lg:py-24">
        <div class="flex flex-col md:flex-row">
          <div class="w-full lg:w-2/6 lg:mx-4 lg:pr-8">
            <h3 class="font-bold text-2xl">MEDICONNECT</h3>
            <p class="text-gray-400">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
  
            <form class="flex items-center mt-6">
              <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2" for="grid-last-name">
                  Subscribe for our Newsletter
                </label>
                <div class="relative">
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="email" placeholder="Enter Your Email Address">
  
                  <button type="submit"
                    class="bg-teal-500 hover:bg-teal-400 text-white px-4 py-2 text-sm font-bold rounded absolute top-0 right-0 my-2 mr-2">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
  
          <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
            <h5 class="uppercase tracking-wider font-semibold text-gray-500">Treatments</h5>
            <ul class="mt-4">
              <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">General Dentistry</a></li>
              <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Cosmetic Dentistry</a></li>
              <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Oral Health</a></li>
            </ul>
          </div>
  
          <div class="w-full lg:w-2/6 mt-8 lg:mt-0 lg:mx-4 lg:pr-8">
            <h5 class="uppercase tracking-wider font-semibold text-gray-500">Contact Details</h5>
            <ul class="mt-4">
              <li>
                <a href="#" title="" class="block flex items-center opacity-75 hover:opacity-100">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                        d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                    </svg>
                  </span>
                  <span class="ml-3">
                    1985 Kerry Way, Whittier, CA, USA
                  </span>
                </a>
              </li>
              <li class="mt-4">
                <a href="#" title="" class="block flex items-center opacity-75 hover:opacity-100">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                        d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                      <path d="M13 7L11 7 11 13 17 13 17 11 13 11z" /></svg>
                  </span>
                  <span class="ml-3">
                    Mon - Fri: 9:00 - 19:00<br>
                    Closed on Weekends
                  </span>
                </a>
              </li>
              <li class="mt-4">
                <a href="#" title="" class="block flex items-center opacity-75 hover:opacity-100">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                        d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                    </svg>
                  </span>
                  <span class="ml-3">
                    +1 562-789-1935
                  </span>
                </a>
              </li>
              <li class="mt-4">
                <a href="#" title="" class="block flex items-center opacity-75 hover:opacity-100">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                        d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z" />
                    </svg>
                  </span>
                  <span class="ml-3">
                    MEDICONNECT@example.com
                  </span>
                </a>
              </li>
            </ul>
          </div>
  
          <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
            <h5 class="uppercase tracking-wider font-semibold text-gray-500">We're Social</h5>
            <ul class="mt-4 flex">
              <li>
                <a href="#" target="_blank" title="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path
                      d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z" />
                  </svg>
                </a>
              </li>
  
              <li class="ml-6">
                <a href="#" target="_blank" title="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path
                      d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z" />
                  </svg>
                </a>
              </li>
  
              <li class="ml-6">
                <a href="#" target="_blank" title="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path
                      d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z" />
                    <circle cx="11.994" cy="11.979" r="3.003" /></svg>
                </a>
              </li>
  
              <li class="ml-6">
                <a href="#" target="_blank" title="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path
                      d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z" />
                  </svg>
                </a>
              </li>
            </ul>
  
            <p class="text-sm text-gray-400 mt-12">© 2023 By Ismail Ouali <br class="hidden lg:block">All Rights Reserved.
            </p>
          </div>
        </div>
      </footer>
      <!-- end footer -->
  
    </main>
  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131505823-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
  
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
  
      gtag('config', 'UA-131505823-4');
    </script>
  
  </body>
</html>