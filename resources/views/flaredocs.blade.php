<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adoniscasts | AdonisJS screencasts!</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            /* font-family: 'Nunito Sans', sans-serif; */
            /* font-family: 'Open Sans', sans-serif; */
        }

        #gitstore-embed {
            width: 100%;
        }

        #gitstore-embed iframe {
            border: 0;
            border-radius: 10px;
            width: 100%;
            height: 0;
        }
    </style>
</head>
<body>
    <!-- <div class="full-height flex-column">
        <nav class="links">
            <a href="/login" style="margin-right: 15px;">
                <button>
                    {{__('Login')}}
                </button>
            </a>

            <a href="/register">
                <button>
                    {{__('Register')}}
                </button>
            </a>
        </nav>

        <div class="flex-fill flex-center">
            <h1 class="text-center">
                <img src="{{ asset('/img/color-logo.png') }}" alt="{{ __('Logo') }}" />
            </h1>
        </div>
    </div> -->
    <header class="text-gray-700 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl font-black">adoniscasts <span class="font-normal text-blue-500">flare</span></span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <!-- <a href="/login" class="mr-5 hover:text-gray-900">Login</a> -->
          </nav>
          <a href="/" class="inline-flex items-center bg-blue-500 border-0 py-2 px-4 focus:outline-none hover:bg-blue-600 rounded-lg text-base mt-4 md:mt-0 text-white">Back to adoniscasts
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </header>

      <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-5xl text-5xl mb-4 font-black text-gray-900">Flare documentation
              <br class="hidden lg:inline-block">
            </h1>
            <p class="mb-8 leading-relaxed">Welcome to the Flare documentation, let's see how to setup Flare!</p>
            
            <h3 class="title-font sm:text-3xl text-3xl mb-4 font-black text-gray-900">Introduction</h3>
            <p class="mb-8 leading-relaxed">Flare is a beautifully designed application scaffolding for AdonisJS built by the founders of adoniscasts. Flare provides the perfect starting point for your next Adonis application and includes login and registration out of the box. Flare is really easy to setup, let's get started!</p>
            
            <h3 class="title-font sm:text-3xl text-3xl mb-4 font-black text-gray-900">Installation</h3>
            <p class="mb-8 leading-relaxed">To install Flare you can go to the <a class="text-blue-500" href="https://github.com/chrishcode/adoniscasts-flare/releases/tag/v1.0.0">github repository</a> and go to releases, here you can download Flare. Download the zip file, that's it, now you have a fresh copy of Flare on your local machine.</p>

            <h3 class="title-font sm:text-3xl text-3xl mb-4 font-black text-gray-900">Install dependencies and start the server</h3>
            <p class="mb-8 leading-relaxed">Start by opening up your terminal and cd into the Flare project.</p>
            <code class="bg-gray-200 p-4 rounded-lg">cd Downloads/adoniscasts-flare-1.0.0</code>
            <p class="mb-8 mt-8 leading-relaxed">Next install the dependencies.</p>
            <code class="bg-gray-200 p-4 rounded-lg">npm install</code>

            <p class="mb-8 mt-8 leading-relaxed">Generate an app key.</p>
            <code class="bg-gray-200 p-4 rounded-lg">node ace generate:key</code>

            <p class="mb-8 mt-8 leading-relaxed">Setup your .env file as you wish. For example:</p>
            <code class="bg-gray-200 p-4 rounded-lg">
            PORT=1234<br>
HOST=127.0.0.1<br>
NODE_ENV=<br>
APP_KEY=myappkey<br>
SESSION_DRIVER=cookie<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_USER=root<br>
DB_PASSWORD=<br>
DB_NAME=mydatabase
            </code>
            
            <p class="mb-8 mt-8 leading-relaxed">Now you can start the server.</p>
            <code class="bg-gray-200 p-4 rounded-lg">node ace serve --watch</code>
            <p class="mb-8 mt-8 leading-relaxed">That's it! Now you have a new Adonis application with authentication setup just like that.</p>

            <div class="flex justify-center">
              <!-- <a href="/flare/docs" class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded-lg text-lg">Back to adoniscasts</a> -->
              <!-- <a href="/register" class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded-lg text-lg">Documentation</a> -->
              <!-- <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded-full text-lg">Se första videon gratis</button> -->
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <!-- <img class="object-cover object-center rounded" alt="hero" src="{{ URL::asset('storage/undraw_code_typing_7jnv.png') }}"> -->
          </div>
        </div>
      </section>

      <footer class="text-gray-700 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl font-black">adoniscasts</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 adoniscasts
            <!-- <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@knyttneve</a> -->
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a href="https://www.instagram.com/adoniscasts/" class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
          </span>
        </div>
      </footer>

      <script src="//code.tidio.co/som0loblwgxadhpitzbegbbvyw0bfvo4.js" async></script>
      <script>
    var iframe = document.createElement("iframe");

    iframe.style.display = "none";

    iframe.onload = function() {
        iframe.style.display = "block";
    };

    window.addEventListener("message", function(event) {
        if (!event.data) {
            return;
        }

        var parts = event.data.split("→");

        if (parts[0] === "gitstore.height") {
            iframe.style.height = parts[1] + "px";
        }

        if (parts[0] === "gitstore.location") {
            var link = document.createElement("a");
            link.setAttribute("href", parts[1]);
            link.setAttribute("target", "_blank");
            link.click();
        }

        if (parts[0] === "gitstore.reload") {
            iframe.contentWindow.postMessage(event.data, "*");
        }
    });

    var target = document.querySelector("#gitstore-embed");

    if (target) {
        target.appendChild(iframe);
        iframe.src = "https://gitstore.app/repositories/chrishcode/adoniscasts-flare/embed";
    }
</script>
</body>
</html>
