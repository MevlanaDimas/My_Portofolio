<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    <link rel="stylesheet" href="../../../css/editProject.css">
    <link rel="icon" type="image/png" href="../../../img/logo/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="../../../img/logo/favicon.svg">
    <link rel="shortcut icon" href="../../../img/logo/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../img/logo/apple-touch-icon.png">
    <link rel="manifest" href="../../../img/logo/site.webmanifest">
    <script src="https://kit.fontawesome.com/5002c780cf.js" crossorigin="anonymous"></script>
</head>
<body class="bg-stone-800">
    <!-- Header section start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div id="logo" class="px-4">
                    <a href="/" class="block pl-1 py-3 lg:pl-15">
                        <img class="logo" width="60" src="../../../img/logo/output-onlinepngtools.png" alt="logo_web">
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
                                <a href="/" class="text-base text-par py-2 mx-8 flex group-hover:text-secondary">Home</a>
                            </li>
                            <li class="group">
                                <a href="/projects/createProject" class="text-base text-par py-2 mx-8 flex group-hover:text-secondary">Create Project</a>
                            </li>
                            <li class="group">
                                <a href="/projects" class="text-base text-par py-2 mx-8 flex group-hover:text-secondary">Projects</a>
                            </li>
                            <li>
                                <a href="/logout" class="bg-highlight text-button rounded-full py-2 mx-8 flex hover:text-button hover:bg-secondary justify-center items-center lg:px-4">Logout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header section end -->

    <!-- Hero section start -->
    <section class="pt-36">
        <div class="container place-content-center">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <h1 class="pb-5 block font-bold text-primary text-center items-center justify-center text-4xl mt-1 lg:text-5xl">Edit Project</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- Project section start -->
    <section class="pt-36 pb-16 bg-gray-200">
        <div class="container w-full lg:w-2/3 lg:mx-auto">
            <form action="{{ url('/projects/'.$project->id.'/updateProject') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="w-full px-4 mb-8">
                    <label for="img_file" class="ml-0 text-sm font-bold text-button">Picture</label>
                    <input type="file" name="img_file" id="img_file" value="{{ asset('storage/images/' . $project->img) }}" required class="w-full mt-2 bg-stone-400 text-base text-center text-gray-950 p-3 rounded-md focus:outline-none focus:ring-gray-50 focus:ring-1 focus:border-rose-350"/>
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="title" class="ml-0 text-sm font-bold text-button">Title</label>
                    <input type="text" name="title" id="title" value="{{ $project->title }}" required class="w-full mt-2 bg-stone-400 text-gray-950 text-base p-3 rounded-md focus:outline-none focus:ring-gray-50 focus:ring-1 focus:border-rose-350"/>
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="description" class="ml-0 text-sm font-bold text-button">Description</label>
                    <textarea name="description" id="description" required class="w-full mt-2 bg-stone-400 text-gray-950 text-base p-3 rounded-md focus:outline-none focus:ring-gray-50 focus:ring-1 focus:border-rose-350 h-50">{{ $project->proj_desc }}</textarea>
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="web" class="ml-0 text-sm font-bold text-button">Link Website</label>
                    <input type="url" name="web" id="web" value="{{ $project->web }}" class="w-full mt-2 bg-stone-400 text-gray-950 text-base p-3 rounded-md focus:outline-none focus:ring-gray-50 focus:ring-1 focus:rose-350">
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="github" class="ml-0 text-sm font-bold text-button">Github</label>
                    <input type="url" name="github" id="github" value="{{ $project->github }}" class="w-full mt-2 bg-stone-400 text-gray-950 text-base p-3 rounded-md focus:outline-none focus:ring-gray-50 focus:ring-1 focus:rose-350">
                </div>
                <div class="w-full px-4 mb-8">
                    <button type="submit" class="text-sm font-semibold text-par bg-button py-3 px-8 rounded-full w-full hover:bg-zinc-700 hover:shadow-lg transition duration-500">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Project section end -->

    <!-- Footer section start -->
    <footer class="bg-stone-900 pt-10 w-full">
        <div class="container">
            <div class="pt-5 flex items-center justify-center mt-1 mb-5">
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
    <script src="../../../js/edit_project.js"></script>
</body>
</html>