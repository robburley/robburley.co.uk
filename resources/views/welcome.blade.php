<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-whitelightest font-sans font-normal">
    <div class="flex flex-col md:flex-row" id="app">
        <div class="w-auto md:w-96 bg-brand p-8 h-auto md:h-screen relative md:fixed flex flex-col">
            <h4 class="font-normal tracking-wide text-4xl text-brand-lightest mb-4">
                Rob <span class="text-brand-darker">Burley</span>
            </h4>

            <span class="absolute md:hidden pin-r pin-t mr-8 mt-8">
                <font-awesome-icon icon="bars" class="text-brand-lightest text-4xl cursor-pointer"></font-awesome-icon>
            </span>

            <ul class="list-reset hidden md:flex  md:flex-col">
                <li class="my-8">
                    <a href="#"
                       class="py-8 font-thin tracking-wide text-2xl text-brand-lightest no-underline hover:text-brand-darker">
                        About
                    </a>
                </li>

                <li class="my-8">
                    <a href="#"
                       class="py-8 font-thin tracking-wide text-2xl text-brand-lightest no-underline hover:text-brand-darker">
                        Work
                    </a>
                </li>

                <li class="my-8">
                    <a href="#"
                       class="py-8 font-thin tracking-wide text-2xl text-brand-lightest no-underline hover:text-brand-darker">
                        Contact
                    </a>
                </li>
            </ul>

            <div class="flex flex-1 items-end mt-2">
                <div class="flex flex-col">
                    <a href="https://twitter.com/BurleyDev"
                       class="flex text-brand-darker items-center mt-2 no-underline hover:text-brand-lightest"
                    >
                        <font-awesome-icon :icon="['fab', 'twitter-square']" class="mr-4 text-2xl"></font-awesome-icon>
                        @BurleyDev
                    </a>

                    <a href="https://github.com/robburley"
                       class="flex text-brand-darker items-center mt-2 no-underline hover:text-brand-lightest"
                    >
                        <font-awesome-icon :icon="['fab', 'github-square']" class="mr-4 text-2xl"></font-awesome-icon>
                        /robburley
                    </a>
                </div>
            </div>
        </div>

        <div class="min-h-screen flex flex-col flex-1 ml-0 md:ml-96">
            <div class="flex flex-col justify-center items-center h-128 bg-fixed bg-no-repeat bg-cover p-8"
                 style="background-image: url('/img/header.png')"
            >
                <h4 class="tracking-wide text-4xl text-brand-lightest mb-4">
                    Full Stack Web Developer
                </h4>

                <p class="tracking-wide text-xl text-brand-light">
                    Specialising an Laravel business applications
                </p>
            </div>

            <div class="container mx-auto p-8 text-grey-darker mb-96">
                <h4 class="tracking-wide font-normal text-2xl text-brand-darker mb-2">
                    About Me
                </h4>

                <p class="text-xl font-thin leading-loose mb-8">
                    Hi, I'm Rob, a full stack web developer specialising in laravel business applications to make
                    businesses lives easier. Having spent over 8 years working in the development world from in-house
                    developer working closely with business owners and department heads, working for digital agencies
                    touching projects at all stages of their life cycle to working freelance building bespoke
                    applications to suit the needs of businesses.
                </p>

                <h4 class="tracking-wide font-normal text-2xl text-brand-darker mb-2">
                    Tech Stack
                </h4>

                <div class="flex flex-col lg:flex-row items-center text-xl font-thin leading-loose mb-8">
                    <div class="w-full lg:w-1/3 mr-2">
                        <img src="/img/laravel.png" class="w-full">
                    </div>

                    <div class="w-full lg:w-2/3">
                        With 4 years of writing Laravel applications, I consider myself well verse with the intricacies
                        of the framework. I originally picked up Laravel just after the release of Laravel 4.1 on
                        recommendation by a colleague. Compared to the competition, it was already incredibly featured
                        and the community was growing rapidly.
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row items-center text-xl font-thin leading-loose mb-8">
                    <div class="w-full lg:w-1/3 mr-2">
                        <img src="/img/vue.png" class="w-full">
                    </div>

                    <div class="w-full lg:w-2/3">
                        I originally picked up Vue.Js during late 2015 when it was in alpha and it was a breath of fresh
                        air, somewhere between React and Angular, it felt right. Since then, used Vue where ever it
                        feels that a page could to with more reactivity, whether that be animations, conditionally
                        showing content on the fly, complex real time calculations or seamless content loading.
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row items-center text-xl font-thin leading-loose mb-8">
                    <div class="w-full lg:w-1/3 mr-2">
                        <img src="/img/other.png" class="w-full">
                    </div>

                    <div class="w-full lg:w-2/3">
                        I bundle HTML, CSS, and MYSQL into one as they are the constant staples of web development. I
                        picked these up back in school and never looked back. The features have changed over the years
                        and I've always kept up to date with whats possible, features such as JSON fields in MYSQL and
                        the rise of CSS preprocessors have been a gamer changer.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
