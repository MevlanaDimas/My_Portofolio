<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimas Maulana Arbi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/logo/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="img/logo/favicon.svg">
    <link rel="shortcut icon" href="img/logo/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo/apple-touch-icon.png">
    <link rel="manifest" href="img/logo/site.webmanifest">
    <script src="https://kit.fontawesome.com/5002c780cf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/split-type"></script>
</head>
<body class="bg-stone-800 w-full border-none">

    <!-- Header section start -->
     <header class="header bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div id="logo" class="px-4">
                    <a href="#home" class="block pl-1 py-3 lg:pl-15">
                        <img class="logo" width="60" src="img/logo/output-onlinepngtools.png" alt="logo_web">
                    </a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-right"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-right"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-stone-800 shadow-lg rounded-lg max-w-[453px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-par py-2 mx-8 flex group-hover:text-secondary">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-par py-2 mx-8 flex group-hover:text-secondary">About Me</a>
                            </li>
                            <li class="group">
                                <a href="#portofolio" class="text-base text-par py-2 mx-8 flex group-hover:text-secondary">Portofolio</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-par py-2 mx-8 flex group-hover:text-secondary">Contact</a>
                            </li>
                            <li>
                                <a href="/login" class="bg-highlight text-button rounded-full py-2 mx-8 flex hover:text-button hover:bg-secondary justify-center items-center lg:px-4">Admin</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
     </header>
    <!-- Header section end -->

    <!-- Hero section start -->
    <section id="home" class="pt-36">
        <div class="container place-content-center lg:pl-45">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 id="hello" class="hello text-base font-semibold text-highlight md:text-xl">Hello 👋 my name is <span class="name block font-bold text-primary text-4xl mt-1 lg:text-5xl">Dimas Maulana Arbi</span></h1>
                    <h2 class="job1 font-medium text-highlight text-lg mb-5 lg:text-2xl">Data Science & Fullstack <span class=" text-stone-300">(Backend heavy)</span></h2>
                    <p class="intro font-medium text-highlight mb-10 leading-relaxed">I am Dimas Maulana Arbi, a Data Scientist and Fullstack programmer with a focus on the Backend side. I have expertise in processing data and building reliable web applications. With experience in both fields, I am passionate about creating innovative solutions that combine the power of data and technology.</p>

                    <a href="#contact" id="contact" class="text-base font-semibold text-white bg-button -mb-100 py-3 px-8 rounded-full hover:shadow-lg hover:bg-secondary transition duration-300 ease-in-out">Contact</a>
                    </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        @foreach ($about as $item)
                        <img src="{{ asset('storage/photos/' . $item->photo) }}" alt="Dimas Maulana Arbi" class="photo max-w-full mx-auto"/>
                        @endforeach
                            <span class="blob absolute bottom-10 left-1/2 -z-10 -translate-x-1/2 md:scale-125">
                                <svg height="300" width="300" viewBox="-120 -120 240 240" xmlns="http://www.w3.org/2000/svg"><path d="M 83.6991542188895,0 C 82.32289797975632,6.713819768239018 68.19458186682996,32.52831235538234 64.07762945198186,36.99523661313481 C 59.960677037133756,41.462160870887274 37.36345938944673,54.1228972366873 32.23724903328818,55.83655322190579 C 27.11103867712963,57.550209207124276 5.360070868226553,58.065869867932605 3.576944478309678e-15,58.41593642836589 C -5.360070868226546,58.76600298879917 -28.161023944221593,61.07363982066901 -34.76363681954369,60.21238522732184 C -41.366249694865786,59.35113063397467 -77.73995503783914,52.46724482971206 -82.53266094152622,47.650254011526314 C -87.3253668452133,42.83326319334057 -94.30165740275527,7.838123976615025 -94.67246061563209,1.159403258603377e-14 C -95.04326382850891,-7.838123976615002 -91.36001760808804,-44.4693999361659 -87.16770110248643,-50.326295696161345 C -82.97538459688482,-56.18319145615679 -49.24192038381079,-69.84232123783742 -42.26850429561188,-73.21119699994304 C -35.295088207412974,-76.58007276204866 -6.35985914745239,-93.13543507010316 -1.6980446013314084e-14,-92.43724272248147 C 6.359859147452356,-91.73905037485979 30.727268452251053,-68.12457123328221 37.22973504754278,-64.48379265467193 C 43.73220164283451,-60.84301407606165 77.56327890743887,-52.086213902226675 81.28083244114661,-46.92751048985292 C 84.99838597485436,-41.76880707747917 85.07541045802269,-6.713819768239018 83.6991542188895,0 Z" fill="#9ca3af" /></svg>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- About section start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container lg:pl-45 lg:pr-37">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                        <h4 class="text-about font-bold uppercase text-secondary text-lg mb-3">ABOUT ME</h4>
                        <h2 class="who font-bold text-highlight text-3xl mb-5 max-w-md lg:text-4xl">Who I am</h2>
                        @foreach ($about as $item)
                        <p class="bio font-medium text-base text-par max-w-xl lg:text-lg">{{ $item->bio }}</p>
                        @endforeach
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="my-social font-semibold text-secondary text-2xl mb-4 lg:text-3xl lg:pt-11">My Social Media</h3>
                    <p class="social-go font-medium text-base text-par mb-6 lg:text-lg">Want to know more about me? Feel free to connect with me on Instagram, Github, and Linkedin to discuss!</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="social-logo mt-10"></span>
                        <a href="https://www.instagram.com/dimceng_?" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-button text-button hover:bg-highlight hover:text-highlight">
                            <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" fill="#9ca3af"/></svg>
                        </a>
                        <a href="https://www.github.com/MevlanaDimas" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-button text-button hover:bg-highlight hover:text-highlight mr-10 ml-10">
                            <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" fill="#9ca3af"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/maulana-arbi" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-button text-button hover:bg-highlight hover:text-highlight">
                            <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" fill="#9ca3af"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->

    <!-- Portofolio section start -->
    <section id="portofolio" class="pt-36 pb-16 bg-gray-200">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="porto font-semibold text-lg text-secondary mb-2">PORTOFOLIO</h4>
                    <h2 class="my-porto font-bold text-button text-3xl mb-4">My Newest Project</h2>
                    <p class="check-porto font-medium text-md text-stone-700">Check out my portfolio, where you can explore the innovative Data Science and Fullstack projects I've completed!</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-6/10 xl:mx-auto">
                @foreach ($projects as $project)
                    <div class="project mb-12 p-4 md:w-1/2">
                        <div class="rounded-md shadow-md overflow-hidden">      
                            <img class="img" src="{{ asset('/storage/images/' . $project->img) }}" alt="Project Picture" width="w-full">
                            <h3 class="judul font-semibold text-xl text-gray-700 pl-5 pr-5 mt-2">{{ $project->title }}</h3>
                            <p class="desc font-medium text-base text-gray-900 pl-5 pr-5">{{ $project->proj_desc }}</p>
                            <div class="flex items-center ">
                                <span class="block flex">
                                    <a href="{{ $project->web }}" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border-button text-button hover:bg-primary hover:text-primary mt-3 mb-3 ml-5">
                                        <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 256c0 22.2-1.2 43.6-3.3 64l-185.3 0c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64l185.3 0c2.2 20.4 3.3 41.8 3.3 64zm28.8-64l123.1 0c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64l-123.1 0c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32l-116.7 0c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0l-176.6 0c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0L18.6 160C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192l123.1 0c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64L8.1 320C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6l176.6 0c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352l116.7 0zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6l116.7 0z" fill="#404040"/></svg>
                                    </a>
                                    <a href="{{ $project->github }}" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border-button text-button hover:bg-primary hover:text-primary mt-3 mb-3 ml-5">
                                        <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" fill="#404040"/></svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Portofolio section end -->

    <!-- Contact section start -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-secondary mb-2">CONTACT</h4>
                    <h2 class="font-bold text-highlight text-3xl mb-4 sm:text-4xl lg:text-5xl">Contact Me</h2>
                    <p class="font-medium text-md text-par md:text-lg">Please contact me via the form below or you can message me on social media for more information</p>
                </div>
            </div>
            <form action="">
                <div class="w-full lg:w-2/3 lg:mx-auto">

                    <div class="w-full px-4 mb-8">
                        <label for="name" class="ml-0 text-sm font-bold text-primary">Name</label>
                        <input type="text" name="name" id="name" class="w-full mt-2 bg-stone-400 text-gray-950 p-3 rounded-md focus:outline-none focus:ring-gray-50 focus:ring-1 focus:border-rose-350"/>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="ml-0 text-sm font-bold text-primary">Email</label>
                        <input type="text" name="email" id="email" class="w-full mt-2 bg-stone-400 text-gray-950 p-3 rounded-md focus:outline-none focus:ring-gray-50 focus:ring-1 focus:border-rose-350"/>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="ml-0 text-sm font-bold text-primary">Message</label>
                        <textarea type="text" name="message" id="message" class="w-full mt-2 bg-stone-400 text-gray-950 p-3 rounded-md focus:outline-none focus:ring-gray-50 focus:ring-1 focus:border-rose-350 h-40"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <button type="submit" class="text-sm font-semibold text-par bg-zinc-500 py-3 px-8 rounded-full w-full hover:bg-zinc-700 hover:shadow-lg transition duration-500">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact section end -->

    <!-- Footer section start -->
    <footer class="bg-stone-900 pt-24 w-full">
        <div class="container">
            <div class="flex flex-wrap ml-5">
                <div class="w-full px-4 mb-12 font-medium text-sm text-par md:w-1/2">
                    <h2 class="font-bold text-3xl text-primary mb-5">Dimas Maulana Arbi</h2>
                    <h3 class="font-bold text-2xl mb-2 text-highlight">Contact Me</h3>
                    <p class="mb-2">maulana.arby10@gmail.com</p>
                    <p>Jalan Samingan RT 02 / RW 04 Ajibarang Wetan</p>
                    <p>Ajibarang District, Banyumas Regency</p>
                    <p>Central Java Province, Republic of Indonesia</p>
                    <p>Postal Code (53163)</p>
                </div>
                <div class="w-full px-4 mb-12 md:pl-40 md:w-1/2">
                    <h3 class="font-semibold text-xl text-highlight mb-5">Link</h3>
                    <ul class="text-par">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">Home</a>
                        </li>
                    </ul>
                    <ul class="text-par">
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-primary mb-3">About Me</a>
                        </li>
                    </ul>
                    <ul class="text-par">
                        <li>
                            <a href="#portofolio" class="inline-block text-base hover:text-primary mb-3">Portofolio</a>
                        </li>
                    </ul>
                    <ul class="text-par">
                        <li>
                            <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pt-10 flex items-center justify-center mt-1 mb-5">
                <span class="mt-10"></span>
                <a href="https://www.instagram.com/dimceng_?" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-button text-button hover:bg-highlight hover:text-highlight">
                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" fill="#9ca3af"/></svg>
                </a>
                <a href="https://www.github.com/MevlanaDimas" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-button text-button hover:bg-highlight hover:text-highlight mr-10 ml-10">
                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" fill="#9ca3af"/></svg>
                </a>
                <a href="https://www.linkedin.com/in/maulana-arbi" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-button text-button hover:bg-highlight hover:text-highlight">
                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" fill="#9ca3af"/></svg>
                </a>
            </div>
            <p class="font-medium text-xs text-par text-center pb-3">© <span id="year">Year</span> - Dimas Maulana Arbi</p>
        </div>
    </footer>
    <!-- Footer section end -->
    <script src="js/script.js"></script>
</body>
</html>