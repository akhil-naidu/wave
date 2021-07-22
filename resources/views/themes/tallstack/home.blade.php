@extends('theme::layouts.app')

@section('content')


    <!-- Section 1 -->
    <section class="py-16 bg-white md:py-24">
        <div class="flex flex-col max-w-6xl px-10 mx-auto lg:flex-row">

            <div class="flex flex-col items-start justify-center w-full pr-10 mb-12 lg:w-1/2 lg:mb-0">
                <div class="relative">
                    <p class="mb-2 text-base font-bold text-black">Introdcuing Leewardslope</p>
                    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl xl:text-6xl">
                        <span class="block xl:inline">Study Smart &amp;</span>
                        <span class="block text-indigo-500 xl:inline">Learn Faster</span>
                    </h1>
                </div>
                <p class="my-8 text-lg text-gray-600 md:text-xl">Are you ready to see the magical awesomeness of being a part of community? Now, you can learn, write and share faster, by converting your ideas into words.</p>
                <div class="relative flex items-center pt-4 space-x-3">
                    <a href="#_" class="relative text-2xl group">
                        <span class="relative z-10 px-5 py-2 font-bold leading-tight text-black bg-white border-4 border-gray-900 rounded-lg group-hover:bg-blue-600 group-hover:text-white">Signup</span>
                        <span class="absolute top-0 right-0 w-full h-14 -mt-2.5 -mr-0.5 bg-black rounded-lg"></span>
                    </a>

                    <a href="#_" class="relative text-2xl group">
                        <span class="relative z-10 px-5 py-2 font-bold leading-tight text-green-900 bg-green-200 border-4 border-black rounded-lg group-hover:bg-green-400 group-hover:text-white">Explore</span>
                        <span class="absolute top-0 right-0 w-full h-14 -mt-2.5 -mr-0.5 bg-black rounded-lg"></span>
                    </a>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center w-full lg:w-1/2">
                <img src="https://cdn.devdojo.com/images/december2020/greenred-animals.png">
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="relative w-full py-12 overflow-hidden bg-white md:py-20 xl:pt-32 xl:pb-40">
        <div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0">
            <h2 class="mb-1 text-3xl font-extrabold leading-tight text-gray-900">Features</h2>
            <p class="mb-12 text-lg text-gray-500">Here is a few of the awesome features we provide.</p>

            <div class="flex w-full h-full">

                <div class="w-full lg:w-2/3">

                    <!-- Feature blocks first column -->
                    <div class="flex flex-col w-full mb-10 sm:flex-row">
                        <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                            <div class="relative h-full ml-0 mr-0 sm:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-indigo-500 rounded-lg">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-indigo-500 fill-current" viewBox="0 0 20 20"><polygon points="18.198,7.95 3.168,7.95 3.168,8.634 9.317,9.727 9.317,19.564 12.05,19.564 12.05,9.727 18.198,8.634 "></polygon><path d="M2.485,10.057v-3.41H2.473l0.012-4.845h1.366c0.378,0,0.683-0.306,0.683-0.683c0-0.378-0.306-0.683-0.683-0.683H1.119c-0.378,0-0.683,0.306-0.683,0.683c0,0.378,0.306,0.683,0.683,0.683h0.683v4.845C1.406,6.788,1.119,7.163,1.119,7.609v2.733c0,0.566,0.459,1.025,1.025,1.025c0.053,0,0.105-0.008,0.157-0.016l-0.499,5.481l5.9,2.733h0.931C8.634,13.266,5.234,10.458,2.485,10.057z"></path><path d="M18.169,6.584c-0.303-3.896-3.202-6.149-7.486-6.149c-4.282,0-7.183,2.252-7.484,6.149H18.169z M15.463,3.187c0.024,0.351-0.103,0.709-0.394,0.977c-0.535,0.495-1.405,0.495-1.94,0c-0.29-0.268-0.418-0.626-0.394-0.977C13.513,3.827,14.683,3.827,15.463,3.187z"></path><path d="M18.887,10.056c-2.749,0.398-6.154,3.206-6.154,9.508h0.933l5.899-2.733L18.887,10.056z"></path></svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Awesome Dashboard</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase">PREMIUM FEATURE</p>
                                    <p class="mb-2 text-gray-600">You can get a quick snapshot of all your analytics on your beautiful dashboard.</p>
                                </div>

                            </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <div class="relative h-full ml-0 md:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-purple-500 fill-current" viewBox="0 0 20 20"><path d="M19.629,9.655c-0.021-0.589-0.088-1.165-0.21-1.723h-3.907V7.244h1.378V6.555h-2.756V5.866h2.067V5.177h-0.689V4.488h-1.378V3.799h0.689V3.11h-1.378V2.421h0.689V1.731V1.294C12.88,0.697,11.482,0.353,10,0.353c-5.212,0-9.446,4.135-9.629,9.302H19.629z M6.555,2.421c1.522,0,2.756,1.234,2.756,2.756S8.077,7.933,6.555,7.933S3.799,6.699,3.799,5.177S5.033,2.421,6.555,2.421z"></path><path d="M12.067,18.958h-0.689v-0.689h2.067v-0.689h0.689V16.89h2.067v-0.689h0.689v-0.689h-1.378v-0.689h-2.067v-0.689h1.378v-0.689h2.756v-0.689h-1.378v-0.689h3.218c0.122-0.557,0.189-1.134,0.21-1.723H0.371c0.183,5.167,4.418,9.302,9.629,9.302c0.711,0,1.401-0.082,2.067-0.227V18.958z"></path></svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Rad Tools</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase">NEW FEATURE</p>
                                    <p class="mb-2 text-gray-600">We've got some pretty rad tools to help you take on the world.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Feature blocks second column -->
                    <div class="flex flex-col w-full mb-5 sm:flex-row">
                        <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                            <div class="relative h-full ml-0 mr-0 sm:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-blue-400 fill-current" viewBox="0 0 20 20"><path d="M18.21,16.157v-8.21c0-0.756-0.613-1.368-1.368-1.368h-1.368v1.368v1.368v6.841l-1.368,3.421h5.473L18.21,16.157z"></path><path d="M4.527,9.316V7.948V6.579H3.159c-0.756,0-1.368,0.613-1.368,1.368v8.21l-1.368,3.421h5.473l-1.368-3.421V9.316z"></path><path d="M14.766,5.895h0.023V5.21c0-2.644-2.145-4.788-4.789-4.788S5.211,2.566,5.211,5.21v0.685h0.023H14.766zM12.737,3.843c0.378,0,0.684,0.307,0.684,0.684s-0.306,0.684-0.684,0.684c-0.378,0-0.684-0.307-0.684-0.684S12.358,3.843,12.737,3.843z M10,1.448c0.755,0,1.368,0.613,1.368,1.368S10.755,4.185,10,4.185c-0.756,0-1.368-0.613-1.368-1.368S9.244,1.448,10,1.448z"></path><path d="M14.789,6.579H5.211v9.578l1.368,1.368h6.841l1.368-1.368V6.579z M12.052,12.052H7.948c-0.378,0-0.684-0.306-0.684-0.684c0-0.378,0.306-0.684,0.684-0.684h4.105c0.378,0,0.684,0.306,0.684,0.684C12.737,11.746,12.431,12.052,12.052,12.052z M12.052,9.316H7.948c-0.378,0-0.684-0.307-0.684-0.684s0.306-0.684,0.684-0.684h4.105c0.378,0,0.684,0.307,0.684,0.684S12.431,9.316,12.052,9.316z"></path></svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Easy Collaboration</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-blue-400 uppercase">FREE FEATURE</p>
                                    <p class="mb-2 text-gray-600">Collaborating with members of your team couldn't be easier.</p>
                                </div>

                            </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <div class="relative h-full ml-0 md:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"><path d="M16.853,8.355V5.888c0-3.015-2.467-5.482-5.482-5.482H8.629c-3.015,0-5.482,2.467-5.482,5.482v2.467l-2.741,7.127c0,1.371,4.295,4.112,9.594,4.112s9.594-2.741,9.594-4.112L16.853,8.355z M5.888,17.367c-0.284,0-0.514-0.23-0.514-0.514c0-0.284,0.23-0.514,0.514-0.514c0.284,0,0.514,0.23,0.514,0.514C6.402,17.137,6.173,17.367,5.888,17.367z M5.203,10c0-0.377,0.19-0.928,0.423-1.225c0,0,0.651-0.831,1.976-0.831c0.672,0,1.141,0.309,1.141,0.309C9.057,8.46,9.315,8.938,9.315,9.315v1.028c0,0.188-0.308,0.343-0.685,0.343H5.888C5.511,10.685,5.203,10.377,5.203,10z M7.944,16.853H7.259v-1.371l0.685-0.685V16.853z M9.657,16.853H8.629v-2.741h1.028V16.853zM8.972,13.426v-1.028c0-0.568,0.46-1.028,1.028-1.028c0.568,0,1.028,0.46,1.028,1.028v1.028H8.972z M11.371,16.853h-1.028v-2.741h1.028V16.853z M12.741,16.853h-0.685v-2.056l0.685,0.685V16.853z M14.112,17.367c-0.284,0-0.514-0.23-0.514-0.514c0-0.284,0.23-0.514,0.514-0.514c0.284,0,0.514,0.23,0.514,0.514C14.626,17.137,14.396,17.367,14.112,17.367z M14.112,10.685h-2.741c-0.377,0-0.685-0.154-0.685-0.343V9.315c0-0.377,0.258-0.855,0.572-1.062c0,0,0.469-0.309,1.141-0.309c1.325,0,1.976,0.831,1.976,0.831c0.232,0.297,0.423,0.848,0.423,1.225S14.489,10.685,14.112,10.685z M18.347,15.801c-0.041,0.016-0.083,0.023-0.124,0.023c-0.137,0-0.267-0.083-0.319-0.218l-2.492-6.401c-0.659-1.647-1.474-2.289-2.905-2.289c-0.95,0-1.746,0.589-1.754,0.595c-0.422,0.317-1.084,0.316-1.507,0C9.239,7.505,8.435,6.916,7.492,6.916c-1.431,0-2.246,0.642-2.906,2.292l-2.491,6.398c-0.069,0.176-0.268,0.264-0.443,0.195c-0.176-0.068-0.264-0.267-0.195-0.444l2.492-6.401c0.765-1.911,1.824-2.726,3.543-2.726c1.176,0,2.125,0.702,2.165,0.731c0.179,0.135,0.506,0.135,0.685,0c0.04-0.029,0.99-0.731,2.165-0.731c1.719,0,2.779,0.814,3.542,2.723l2.493,6.404C18.611,15.534,18.524,15.733,18.347,15.801z"></path></svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Automated Workflow</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase">PREMIUM FEATURE</p>
                                    <p class="mb-2 text-gray-600">Our automation tools will help you build and grow your marketing empire.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="hidden w-1/3 lg:block">
                    <div class="absolute w-full max-w-4xl pl-12 -mt-20 xl:-mt-32">
                        <div class="absolute top-0 left-0 w-full h-full mt-2 ml-10 bg-gray-900 rounded-2xl"></div>
                        <div class="relative overflow-hidden border-2 border-black rounded-2xl">
                            <img src="https://cdn.devdojo.com/images/february2021/task-dashboard.png" class="object-cover w-full h-full transform">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Section 3 -->
    <section class="w-full py-16 bg-white">
        <div class="px-10 mx-auto max-w-7xl">

            <div class="text-center">
                <h2 class="relative inline-block px-5 py-2 mb-5 text-5xl font-bold font-extrabold bg-white border-2 border-black">

                    <div class="absolute w-full py-2 h-full inset-0 border-2 border-black bg-black ml-1.5 mt-1.5"></div>
                    <div class="absolute inset-0 w-full h-full py-2 bg-white"></div>
                    <span class="relative">From the Blog</span>
                </h2>
                <p class="text-xl font-medium text-gray-800 mb-7">View the latest posts from our blog</p>
            </div>
            <div class="grid grid-cols-12 gap-8">
                <div class="relative col-span-12 duration-150 ease-out transform border-2 border-black cursor-pointer md:col-span-6 lg:col-span-4 hover:scale-105">
                    <a href="#_" class="block h-64 overflow-hidden">
                        <img src="https://cdn.devdojo.com/images/may2021/blogimg1.jpg" class="object-cover w-full h-full">
                    </a>
                    <div class="p-5 pb-6">
                        <h2 class="mb-2">
                            <a href="/extracting-tailwindcss-from-html" class="text-2xl font-bold leading-tight tracking-tight">5 Tips on Getting The Most from Your Training Days</a>
                        </h2>
                        <p class="mb-2 text-sm font-medium tracking-widest text-gray-500">Written on April 2, 2021</p>
                        <p class="text-gray-700">
                            <span>Follow these simple steps to learn how you can increase your gains and get the most out of your training days. In this post we'll show you exactly how to accomplish this.</span>
                        </p>
                    </div>
                </div>

                <div class="relative col-span-12 duration-150 ease-out transform border-2 border-black cursor-pointer md:col-span-6 lg:col-span-4 hover:scale-105">
                    <a href="#_" class="block h-64 overflow-hidden">
                        <img src="https://cdn.devdojo.com/images/may2021/blogimg2.jpg" class="object-cover w-full h-full">
                    </a>
                    <div class="p-5 pb-6">
                        <h2 class="mb-2">
                            <a href="/extracting-tailwindcss-from-html" class="text-2xl font-bold leading-tight tracking-tight">Learn about the Retro Tech that Pushed the Limits</a>
                        </h2>
                        <p class="mb-2 text-sm font-medium tracking-widest text-gray-500">Written on April 2, 2021</p>
                        <p class="text-gray-700">
                            <span>Have you ever wondered about the devices that got us to where we are today? In this article you will learn about the old tech gadgets that transformed our culture.</span>
                        </p>
                    </div>
                </div>

                <div class="relative col-span-12 duration-150 ease-out transform border-2 border-black cursor-pointer md:col-span-6 lg:col-span-4 hover:scale-105">
                    <a href="#_" class="block h-64 overflow-hidden">
                        <img src="https://cdn.devdojo.com/images/may2021/blogimg3.jpg" class="object-cover w-full h-full">
                    </a>
                    <div class="p-5 pb-6">
                        <h2 class="mb-2">
                            <a href="/extracting-tailwindcss-from-html" class="text-2xl font-bold leading-tight tracking-tight">Travel Destinations that Should be on Your Bucket List</a>
                        </h2>
                        <p class="mb-2 text-sm font-medium tracking-widest text-gray-500">Written on April 2, 2021</p>
                        <p class="text-gray-700">
                            <span>Check out these top destinations that is an absolute must visit before you kick the bucket. Find out some of the top destinations from around the world.</span>
                        </p>
                    </div>
                </div>

                <div class="relative col-span-12 duration-150 ease-out transform border-2 border-black cursor-pointer md:col-span-6 lg:col-span-4 hover:scale-105">
                    <a href="#_" class="block h-64 overflow-hidden">
                        <img src="https://cdn.devdojo.com/images/may2021/blogimg4.jpg" class="object-cover w-full h-full">
                    </a>
                    <div class="p-5 pb-6">
                        <h2 class="mb-2">
                            <a href="/extracting-tailwindcss-from-html" class="text-2xl font-bold leading-tight tracking-tight">The Best Breeds</a>
                        </h2>
                        <p class="mb-2 text-sm font-medium tracking-widest text-gray-500">Written on April 2, 2021</p>
                        <p class="text-gray-700">
                            <span>Find out the best breeds for your personality type. You can learn a lot about an individual based on the dog they own.</span>
                        </p>
                    </div>
                </div>

                <div class="relative col-span-12 duration-150 ease-out transform border-2 border-black cursor-pointer md:col-span-6 lg:col-span-4 hover:scale-105">
                    <a href="#_" class="block h-64 overflow-hidden">
                        <img src="https://cdn.devdojo.com/images/may2021/blogimg5.jpg" class="object-cover w-full h-full">
                    </a>
                    <div class="p-5 pb-6">
                        <h2 class="mb-2">
                            <a href="/extracting-tailwindcss-from-html" class="text-2xl font-bold leading-tight tracking-tight">The Best Holiday Drinks</a>
                        </h2>
                        <p class="mb-2 text-sm font-medium tracking-widest text-gray-500">Written on April 2, 2021</p>
                        <p class="text-gray-700">
                            <span>Holidays are the best time to hangout with family and friends. It's also an amazing time to enjoy these top rated drinks.</span>
                        </p>
                    </div>
                </div>

                <div class="relative col-span-12 duration-150 ease-out transform border-2 border-black cursor-pointer md:col-span-6 lg:col-span-4 hover:scale-105">
                    <a href="#_" class="block h-64 overflow-hidden">
                        <img src="https://cdn.devdojo.com/images/may2021/blogimg6.jpg" class="object-cover w-full h-full">
                    </a>
                    <div class="p-5 pb-6">
                        <h2 class="mb-2">
                            <a href="/extracting-tailwindcss-from-html" class="text-2xl font-bold leading-tight tracking-tight">Hottest Rides of the Year</a>
                        </h2>
                        <p class="mb-2 text-sm font-medium tracking-widest text-gray-500">Written on April 2, 2021</p>
                        <p class="text-gray-700">
                            <span>See the vehicles that made the list of the premium exotic cars of the year. Picked and selected from top car enthusiasts.</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class="relative items-center w-full py-12 bg-gray-100 sm:py-16 md:py-20">
        <svg class="absolute -mt-32 text-purple-500 transform scale-150 fill-current top-1/2" viewBox="0 0 197 31" xmlns="http://www.w3.org/2000/svg"><path d="M4.83 30.3c.945-.18 1.9-.307 2.86-.38.49-.07 1.07-.17 1.65-.28.58-.11 1.15-.18 1.61-.23.9-.11 1.8-.22 2.7-.3.9-.08 1.8-.19 2.71-.22 5.13-.26 10.31-.11 15.5.13l5.14.29h.54c2.35.14 4.72.27 7.09.35 1.34 0 4.64.13 4.94.14.5.06 3.49 0 4 0 .51 0 4.25-.17 5.24-.28 1.16 0 2.32-.09 3.47-.16 1.15-.07 2.61-.19 4.18-.36a41.33 41.33 0 004.21-.73c.84-.19 1.69-.32 2.53-.54l.35-.07c.55-.11 1.17-.28 1.8-.46a47.28 47.28 0 0019.46-10.06c1.84-1.69 3.61-3.24 5.6-3 .987.133 1.95.406 2.86.81l3.09 1.29 6.24 2.64c2 .81 3.34 1.23 6 2.33 1.17.46 3.39 1.3 4.59 1.64a57.05 57.05 0 005.65 1.29 39.75 39.75 0 0015.52-.14l2-.47c.66-.2 1.34-.36 2-.59a18 18 0 005.72-2.89 37.76 37.76 0 004.35-4c2.42-2.58 4.14-5.52 6.35-7.89A12.69 12.69 0 01177.65 4c.35.09.7.16 1.05.27l1 .38c.69.22 1.35.56 2 .8A23.72 23.72 0 01186.46 8c1.49 1 2.9 2.12 4.45 3.36 1.26 1 4.45 3.36 5.11 3.38.39 0 .3-.52.68-.55.85 0-.24-2.56-2-4a59 59 0 00-5.92-4.38 33.42 33.42 0 00-6.89-3.6A23.9 23.9 0 00175.75 1a17.23 17.23 0 00-6.69 1 20.69 20.69 0 00-2.39 1.1 13.51 13.51 0 00-2.16 1.59 28.46 28.46 0 00-3.5 3.83c-2.31 2.9-4.26 5.92-6.9 8.08a22.73 22.73 0 01-9.19 4.47 36.08 36.08 0 01-13.17.74c-6-.8-11.89-2.93-17.66-5.27l-8.7-3.54a15.35 15.35 0 00-4.92-1.38 6.78 6.78 0 00-2.83.48c-.83.341-1.61.792-2.32 1.34-1.37 1-2.45 2.11-3.65 3A40.1 40.1 0 0187.96 19a38.51 38.51 0 01-10.25 4.61l-.6.15h-.1c-1.85.51-4 1.07-5.87 1.48a79.21 79.21 0 01-11.79 1.41c-4.55.21-9.19.32-13.68.16-8.49-.29-17-1-25.65-.9a91.5 91.5 0 00-14.28.63 17.59 17.59 0 00-3.46.91 17.08 17.08 0 00-1.68.67.67.67 0 00-.35.9 2.6 2.6 0 001.62 1.13c.96.29 1.976.34 2.96.15z" fill-rule="nonzero"></path></svg>
        <div class="px-10 mx-auto text-left max-w-7xl md:text-center pb-14 xl:px-0">
            <h2 class="mx-auto text-4xl font-bold md:text-5xl">Flexible, Simple Plans</h2>
            <p class="max-w-lg mt-5 text-lg text-gray-600 md:mx-auto">Check out our flexible, simple and transparent plans below. Designed to fit companies of any size.</p>
        </div>
        <div class="relative grid gap-8 px-10 mx-auto md:grid-cols-2 lg:grid-cols-3 max-w-7xl">

            <svg class="absolute hidden w-12 h-auto -mt-8 -ml-0 text-purple-500 fill-current xl:block" viewBox="0 0 39 50" height="50" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero"><path d="M34.31 6.86a19.81 19.81 0 001-1.92l.11-.24.06-.13c0-.09.07-.19.09-.28.02-.09.17-.42 0-.51a21.26 21.26 0 00-3.48-.57l-4.22-.42a26.55 26.55 0 00-3.65-.21 2.28 2.28 0 00-.76.13c-.18 0-.14.24-.11.35.022.115.052.23.09.34l.31.79c.28.68.6 1.45 1.2 2.78.16.42 1.36 3.14 1.58 3.53.204.4.449.78.73 1.13.26.34.6.58.83.91.23.33.58 1 .77 1.19a.2.2 0 010 .11.28.28 0 00-.06.09 1.58 1.58 0 00-.3 1.12.4.4 0 01-.33.49 1.78 1.78 0 01-1.22-.31 6.74 6.74 0 01-2.08-2.42 40.45 40.45 0 01-2.34-5.11c-.35-.87-.67-1.7-.96-2.7l-.21-.71a11.26 11.26 0 01-.3-1.21 3 3 0 010-1.15 3.21 3.21 0 01.24-.45l.07-.12v-.05a1.53 1.53 0 01.18-.18 3.45 3.45 0 01.66-.35 5.54 5.54 0 011.5-.27H24.8c.59 0 1.17 0 1.74.05 1.15.06 2.28.17 3.4.3 1.12.13 2.25.29 3.38.47.56.1 1.13.2 1.7.32l.57.14c.237.05.47.113.7.19a2.88 2.88 0 011.14.64 2 2 0 01.35 1.11 4.31 4.31 0 01-.31 1.3 6.27 6.27 0 01-.27.63L37 6l-.37.76a36.55 36.55 0 01-3.83 5.82 10.57 10.57 0 01-2.15 2.18 3 3 0 01-1.28.54c-.41.06-.85-.13-.88-.44a5.73 5.73 0 00.5-1.15 14 14 0 01.51-1.43A5 5 0 0130.67 11c1.22-.41 2.15-1.85 3-3.13.22-.32.43-.66.64-1.01zM17.31 39.86a19.81 19.81 0 001-1.92l.11-.24.06-.13c0-.09.07-.19.09-.28.02-.09.17-.42 0-.51a21.26 21.26 0 00-3.48-.57l-4.22-.42a26.55 26.55 0 00-3.65-.21 2.28 2.28 0 00-.76.13c-.18 0-.14.24-.11.35.022.115.052.23.09.34l.31.79c.28.68.6 1.45 1.2 2.78.16.42 1.36 3.14 1.58 3.53.204.4.449.78.73 1.13.26.34.6.58.83.91.23.33.58 1 .77 1.19a.2.2 0 010 .11.28.28 0 00-.06.09 1.58 1.58 0 00-.3 1.12.4.4 0 01-.33.49 1.78 1.78 0 01-1.22-.31 6.74 6.74 0 01-2.08-2.42 40.45 40.45 0 01-2.34-5.11c-.35-.87-.67-1.7-.96-2.7l-.21-.71a11.26 11.26 0 01-.3-1.21 3 3 0 010-1.15 3.21 3.21 0 01.24-.45l.07-.12v-.05a1.53 1.53 0 01.18-.18 3.45 3.45 0 01.66-.35 5.54 5.54 0 011.5-.27H7.8c.59 0 1.17 0 1.74.05 1.15.06 2.28.17 3.4.3 1.12.13 2.25.29 3.38.47.56.1 1.13.2 1.7.32l.57.14c.237.05.47.113.7.19a2.88 2.88 0 011.14.64 2 2 0 01.35 1.11 4.31 4.31 0 01-.31 1.3 6.27 6.27 0 01-.27.63L20 39l-.37.76a36.55 36.55 0 01-3.83 5.82 10.57 10.57 0 01-2.15 2.18 3 3 0 01-1.28.54c-.41.06-.85-.13-.88-.44a5.73 5.73 0 00.5-1.15 14 14 0 01.51-1.43A5 5 0 0113.67 44c1.22-.41 2.15-1.85 3-3.13.22-.32.43-.66.64-1.01zM13.874 23.203c.718.071 1.44.103 2.162.095l.264-.002h.143c.082-.038.202-.017.292-.037.09-.02.453-.023.462-.216a21.26 21.26 0 00-.954-3.394l-1.402-4.003a26.55 26.55 0 00-1.353-3.396 2.28 2.28 0 00-.439-.634c-.076-.163-.276-.026-.363.048a2.37 2.37 0 00-.27.225l-.585.615a81.727 81.727 0 00-2.013 2.263c-.313.322-2.27 2.56-2.531 2.923a6.62 6.62 0 00-.716 1.14c-.198.379-.272.788-.474 1.136-.202.348-.661.949-.753 1.201a.2.2 0 01-.1.047.28.28 0 00-.107-.017 1.58 1.58 0 00-1.142.202.4.4 0 01-.583-.092 1.78 1.78 0 01-.235-1.237 6.74 6.74 0 011.315-2.908 40.45 40.45 0 013.642-4.28c.64-.685 1.257-1.326 2.041-2.011l.555-.49c.308-.28.632-.541.97-.784a3 3 0 011.042-.486c.17-.004.34.005.51.027l.138.013.045-.021c.082.022.162.051.24.087.214.128.413.28.595.45.35.373.645.792.879 1.246l.16.344.3.643c.25.535.495 1.06.69 1.599.432 1.067.81 2.138 1.166 3.208.355 1.07.688 2.162 1.002 3.262.146.55.296 1.108.428 1.676l.114.576c.056.235.097.474.124.714a2.88 2.88 0 01-.098 1.304 2 2 0 01-.858.786 4.31 4.31 0 01-1.31.269 6.27 6.27 0 01-.685.021l-.392-.037-.845-.015a36.55 36.55 0 01-6.894-1.011 10.57 10.57 0 01-2.884-1.027 3 3 0 01-1.03-.932c-.228-.346-.242-.825.026-.984a5.73 5.73 0 001.254-.033 14 14 0 011.512-.142 5 5 0 011.654.52c.887.932 2.585 1.167 4.105 1.396.383.064.78.11 1.186.153z"></path></g></svg>
            <svg class="absolute right-0 hidden w-12 h-auto -mt-6 -mr-0 text-purple-500 fill-current xl:block" viewBox="0 0 38 47" height="47" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero"><path d="M6.962 14.533c1.88.249 9.32-10.256 8.596-11.156-.724-.899-12.772-2.782-13.94-1.902-.71.544 3.662 12.87 5.344 13.058zM29.801 33.433c-.904-1.667-13.775-1.511-14.077-.397-.302 1.114 5.256 11.968 6.654 12.395.857.255 8.26-10.526 7.423-11.998zM29.995 23.637c1.306-1.374-2.82-13.568-3.972-13.511-1.153.057-9.758 8.697-9.733 10.16.023.893 12.564 4.601 13.705 3.351z"></path></g></svg>

            <!-- Starter Plan -->
            <div class="relative">
                <div class="relative z-20 flex flex-col p-5 bg-white border-2 border-gray-800">
                    <h3 class="text-2xl font-bold">Starter plan</h3>
                    <p class="mt-4 text-sm text-gray-700">The starter plan is perfect for start-ups and smaller sized businesses. Get started with this plan today.</p>
                    <div class="h-0.5 w-full border-b border-gray-200 my-8"></div>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>One Project</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>One User Account</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Browser Extension</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Unlimited Customizations</span>
                        </li>
                    </ul>
                    <div class="h-0.5 w-full border-b border-gray-200 my-8"></div>
                    <h4 class="mb-2 -mt-2 text-3xl font-bold">Free</h4>
                    <p class="mb-5 text-gray-600">Get started with our free plan.</p>
                    <a href="#_" class="py-4 mb-2 text-sm font-bold text-center text-white bg-blue-600 rounded-lg">Get Started</a>
                    <p class="text-xs font-medium text-center text-gray-800">*Try it out for free</p>
                </div>
                <div class="absolute inset-0 z-10 w-full h-full mt-2 ml-2 bg-white border-2 border-gray-800"></div>
            </div>

            <!-- Basic Plan -->
            <div class="relative">
                <div class="relative z-20 flex flex-col p-5 bg-white border-2 border-gray-800">
                    <h3 class="text-2xl font-bold">Basic plan</h3>
                    <p class="mt-4 text-sm text-gray-700">The basic plan is perfect for small teams or medium sized businesses. Try it free for 30 days.</p>
                    <div class="h-0.5 w-full border-b border-gray-200 my-8"></div>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Three Projects</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Three User Accounts</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Browser Extension</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Unlimited Customizations</span>
                        </li>
                    </ul>
                    <div class="h-0.5 w-full border-b border-gray-200 my-8"></div>
                    <h4 class="mb-2 -mt-2 text-3xl font-bold">$12</h4>
                    <p class="mb-5 text-gray-600">Get started with our basic plan.</p>
                    <a href="#_" class="py-4 mb-2 text-sm font-bold text-center text-white bg-purple-600 rounded-lg">Try Free for 30 days</a>
                    <p class="text-xs font-medium text-center text-gray-800">*Try it out for free</p>
                </div>
                <div class="absolute inset-0 z-10 w-full h-full mt-2 ml-2 bg-white border-2 border-gray-800"></div>
            </div>

            <!-- Pro Plan -->
            <div class="relative">
                <div class="relative z-20 flex flex-col p-5 bg-white border-2 border-gray-800">
                    <h3 class="text-2xl font-bold">Pro plan</h3>
                    <p class="mt-4 text-sm text-gray-700">The pro plan is perfect for larger companies and teams. Try it out free for 30 days.</p>
                    <div class="h-0.5 w-full border-b border-gray-200 my-8"></div>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Unlimited Projects</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Unlimited User Accounts</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Browser Extension</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Unlimited Customizations</span>
                        </li>
                    </ul>
                    <div class="h-0.5 w-full border-b border-gray-200 my-8"></div>
                    <h4 class="mb-2 -mt-2 text-3xl font-bold">$25</h4>
                    <p class="mb-5 text-gray-600">Get started with our pro plan.</p>
                    <a href="#_" class="py-4 mb-2 text-sm font-bold text-center text-white bg-pink-600 rounded-lg">Try Free for 30 days</a>
                    <p class="text-xs font-medium text-center text-gray-800">*Try it out for free</p>
                </div>
                <div class="absolute inset-0 z-10 w-full h-full mt-2 ml-2 bg-white border-2 border-gray-800"></div>
            </div>

        </div>
    </section>

    <!-- Section 5 -->
    <section class="bg-white">
        <div class="flex flex-col items-center justify-center px-5 py-20 mx-auto max-w-7xl md:px-0">
            <div class="relative">
                <h1 class="relative text-5xl font-black text-transparent bg-center bg-cover bg-gradient-to-br from-indigo-400 via-indigo-600 to-indigo-500 lg:text-6xl bg-clip-text" style="background-image:url('https://cdn.devdojo.com/images/february2021/bg-colorful.jpg')">Join now.</h1>
            </div>
            <p class="mt-3 text-xl text-gray-500 lg:text-2xl">Discover the power of your potential.</p>
            <div class="flex flex-col justify-center w-full mt-5 space-y-3 sm:space-x-3 sm:space-y-0 sm:flex-row lg:mt-8">
                <input type="text" class="container inline-block h-12 px-3 overflow-visible text-base font-semibold text-gray-700 bg-transparent border-2 border-gray-300 border-solid rounded-lg sm:max-w-xs lg:max-w-sm focus:outline-none cursor-text md:text-left focus:ring-2 focus:ring-indigo-500 focus:border-indigo-600" placeholder="Your email address">
                <div class="flex items-center justify-center flex-shrink-0 h-12 px-4 py-2 text-white rounded-lg cursor-pointer bg-gradient-to-r from-indigo-500 to-indigo-600">Request Access</div>
            </div>
        </div>
    </section>
    
    <!-- You need to remove hastag's and replace with comment tag of html
    # Section 6
    <section class="relative py-2 bg-yellow-200">
        <div class="flex items-center justify-between h-20 px-8 mx-auto max-w-7xl">

            <a href="#_" class="relative z-10 flex items-center w-auto text-2xl font-black leading-none text-gray-900 select-none">tails.</a>

            <nav class="items-center justify-center hidden space-x-5 text-gray-200 md:flex lg:space-x-8">
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-1 text-base font-bold text-gray-700 uppercase transition duration-150 ease hover:text-gray-900">
                    <span class="block">Home</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-yellow-200" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-gray-900 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-1 text-base font-bold text-gray-700 uppercase transition duration-150 ease hover:text-gray-900">
                    <span class="block">Features</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-yellow-200" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-gray-900 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-1 text-base font-bold text-gray-700 uppercase transition duration-150 ease hover:text-gray-900">
                    <span class="block">Pricing</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-yellow-200" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-gray-900 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-1 text-base font-bold text-gray-700 uppercase transition duration-150 ease hover:text-gray-900">
                    <span class="block">Blog</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-yellow-200" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-gray-900 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>
                <div class="w-0 h-5 border border-r border-yellow-500 opacity-25"></div>
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-0.5 text-base font-bold text-gray-700 uppercase transition duration-150 ease hover:text-gray-900">
                    <span class="block">Login</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-yellow-200" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-gray-900 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>

                <a href="#_" class="relative h-6 group">
                    <span class="relative z-10 px-5 py-2 font-bold leading-tight text-black bg-white border-4 border-gray-900 rounded-lg group-hover:bg-yellow-100">Signup</span>
                    <span class="absolute top-0 right-0 w-full h-10 -mr-1 bg-black rounded-lg"></span>
                </a>

            </nav>

            #Mobile Button
            <div class="flex items-center justify-center h-full text-black md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
            </div>

        </div>
    </section>

    #Section 7 
    <section class="w-full bg-yellow-50">
        <div class="px-6 mx-auto max-w-7xl">
            <div class="flex items-center justify-between h-20">
                <div class="relative z-10 flex items-center w-auto px-0 leading-10 md:px-2 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
                    <a href="#_" class="inline-block font-sans text-2xl font-extrabold text-left text-black no-underline bg-transparent cursor-pointer focus:no-underline">
                        <svg class="w-8 h-8 text-black fill-current" viewBox="0 0 39 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.252 1.152C4.184 2.526.454 6.918.061 14.329c1.963-4.049 4.798-5.975 8.503-5.778 2.115.112 3.84 1.295 5.75 2.603 3.11 2.133 6.712 4.601 13.281 3.324 7.068-1.374 10.798-5.766 11.191-13.177-1.963 4.049-4.798 5.975-8.503 5.779-2.115-.113-3.84-1.296-5.75-2.604-3.11-2.133-6.712-4.601-13.281-3.324z" fill-rule="evenodd"></path>
                            </svg>
                    </a>
                </div>

                <div class="flex items-center space-x-8">
                    <a href="#_" class="font-bold text-gray-900">Demo</a>
                    <a href="#_" class="px-4 py-2 font-bold text-white bg-gray-900 rounded-md">Get It Now</a>
                </div>
            </div>

            <div class="flex flex-col flex-wrap w-full px-10 pt-24 pb-40 mx-auto leading-6 text-left text-black lg:flex-row">
                <div class="box-border relative w-full px-4 text-black lg:w-6/12">
                    <p class="pt-4 mx-auto mb-4 text-4xl font-black leading-tight text-left text-gray-900 xl:pt-6 sm:text-5xl lg:text-4xl xl:text-5xl">Start Crafting Your<br>Next Great Idea</p>
                    <p class="pt-3 mb-2 mr-12 text-xl font-normal leading-relaxed text-left text-gray-900 lg:mb-4 xl:pt-5 sm:text-2xl lg:text-xl xl:text-2xl">
                        Create better designs, user experiences, and showcase your application in style with —
                        <b class="box-border text-left">Tails</b>.
                    </p>
                    <div class="pt-5 space-y-3 space-y-4 leading-6 text-left xl:pt-8 xl:space-y-5">
                        <div class="relative inline-block">
                            <div class="w-full h-full bg-gray-900 ml-0.5 mt-0.5 rounded-lg absolute left-0 top-0"></div>
                            <a class="relative inline-block px-5 py-2 text-lg font-bold text-center text-gray-900 no-underline whitespace-no-wrap align-middle bg-white border-2 border-gray-900 border-solid rounded-md shadow-xs cursor-pointer select-none hover:bg-white hover:shadow-xs hover:text-gray-900 focus:shadow-xs">Download App — only $99</a>
                        </div>
                        <p class="pt-6 mb-2 text-sm font-bold text-left text-gray-900">Easily integrates with:</p>

                        #Logos
                        <div class="flex w-full h-8 space-x-4 opacity-100">
                            <svg class="w-auto h-8 text-gray-900 fill-current" viewBox="0 0 176 51" xmlns="http://www.w3.org/2000/svg"><title>logo</title><path d="M67.057 11.723V34.67h8.362v3.958H62.605V11.723h4.452zm24.078 11.415v-2.42h4.219v17.91h-4.22v-2.422c-.567.897-1.374 1.602-2.42 2.114-1.044.512-2.096.768-3.154.768-1.368 0-2.62-.25-3.755-.749a8.782 8.782 0 01-2.923-2.056 9.549 9.549 0 01-1.896-2.998 9.613 9.613 0 01-.678-3.613 9.67 9.67 0 01.678-3.594 9.508 9.508 0 011.896-3.016 8.79 8.79 0 012.923-2.057c1.135-.5 2.387-.75 3.755-.75 1.058 0 2.11.257 3.155.77 1.045.512 1.852 1.217 2.42 2.113zm-.388 8.725a6.226 6.226 0 00.388-2.19c0-.77-.13-1.5-.388-2.192a5.548 5.548 0 00-1.083-1.806 5.245 5.245 0 00-1.684-1.23c-.659-.307-1.388-.461-2.188-.461-.8 0-1.523.154-2.168.461-.645.308-1.2.718-1.664 1.23a5.276 5.276 0 00-1.064 1.806 6.489 6.489 0 00-.368 2.191c0 .769.122 1.5.368 2.19a5.27 5.27 0 001.064 1.807 5.29 5.29 0 001.664 1.23c.645.308 1.368.461 2.168.461s1.53-.153 2.188-.46a5.234 5.234 0 001.684-1.23 5.543 5.543 0 001.083-1.807zm7.936 6.764v-17.91h11.459v4.122h-7.24v13.788h-4.219zm26.75-15.489v-2.42h4.219v17.91h-4.22v-2.422c-.568.897-1.374 1.602-2.42 2.114-1.044.512-2.096.768-3.154.768-1.369 0-2.62-.25-3.755-.749a8.782 8.782 0 01-2.923-2.056 9.549 9.549 0 01-1.896-2.998 9.613 9.613 0 01-.678-3.613 9.65 9.65 0 01.678-3.594 9.508 9.508 0 011.896-3.016 8.79 8.79 0 012.923-2.057c1.135-.5 2.386-.75 3.755-.75 1.058 0 2.11.257 3.155.77 1.045.512 1.851 1.217 2.42 2.113zm-.388 8.725a6.226 6.226 0 00.387-2.19c0-.77-.13-1.5-.387-2.192a5.548 5.548 0 00-1.084-1.806 5.245 5.245 0 00-1.684-1.23c-.658-.307-1.387-.461-2.187-.461-.8 0-1.523.154-2.168.461-.645.308-1.2.718-1.664 1.23a5.276 5.276 0 00-1.065 1.806 6.489 6.489 0 00-.368 2.191c0 .769.122 1.5.368 2.19a5.27 5.27 0 001.065 1.807 5.29 5.29 0 001.664 1.23c.645.308 1.368.461 2.168.461s1.53-.153 2.187-.46a5.234 5.234 0 001.684-1.23 5.543 5.543 0 001.084-1.807zm21.523-11.146h4.274l-6.926 17.91h-5.302l-6.926-17.91h4.274l5.303 13.715 5.303-13.715zm13.476-.46c5.746 0 9.664 5.055 8.928 10.972h-13.998c0 1.545 1.571 4.532 5.302 4.532 3.21 0 5.36-2.803 5.362-2.805l2.85 2.19c-2.548 2.702-4.635 3.943-7.903 3.943-5.84 0-9.797-3.668-9.797-9.416 0-5.2 4.09-9.416 9.256-9.416zm-5.059 7.859h10.112c-.031-.345-.579-4.532-5.086-4.532-4.507 0-4.993 4.187-5.026 4.532zm16.735 10.511V11.723h4.22v26.904h-4.22zM49.764 11.513a.8.8 0 01.028.208v10.924a.796.796 0 01-.403.691l-9.234 5.279v10.463a.796.796 0 01-.403.69L20.478 50.787c-.044.026-.093.041-.14.058-.019.006-.036.017-.054.022a.812.812 0 01-.412 0c-.022-.006-.042-.018-.063-.026a.718.718 0 01-.132-.054L.402 39.77A.796.796 0 010 39.078V6.306a.8.8 0 01.028-.208c.006-.024.02-.045.028-.067.016-.042.03-.085.052-.124.015-.026.037-.047.054-.07.024-.032.044-.066.072-.094.023-.023.053-.04.079-.06.029-.022.055-.048.088-.067l.001-.001L10.04.106a.81.81 0 01.8 0l9.638 5.509h.002c.032.02.058.046.088.068.026.02.055.037.078.06.028.028.048.062.072.093.018.024.04.045.055.071.022.039.036.082.052.124.008.022.021.043.028.067a.8.8 0 01.027.208v20.469l8.032-4.591V11.721a.8.8 0 01.027-.208c.007-.024.02-.044.029-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.07.024-.032.044-.066.072-.093.023-.023.052-.04.078-.06.03-.023.056-.05.089-.068v-.001l9.638-5.509a.808.808 0 01.801 0l9.637 5.509h.001c.034.02.06.046.09.068.025.02.055.038.078.06.028.028.048.062.071.093.018.024.04.045.055.071.023.039.036.082.052.124.009.023.022.043.028.067zm-1.578 10.671V13.1l-3.373 1.928-4.658 2.663v9.084l8.03-4.591zm-9.637 16.433v-9.09l-4.584 2.598L20.88 39.54v9.175l17.669-10.1zM1.606 7.685v30.932l17.668 10.1v-9.174l-9.23-5.186-.002-.003-.004-.001c-.032-.018-.057-.044-.086-.066-.026-.02-.054-.036-.077-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.026-.044-.049-.06-.077l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.029-.03-.057-.038-.089v-.001c-.011-.038-.012-.078-.017-.117-.003-.03-.012-.059-.012-.09v-21.39L4.98 9.613 1.606 7.685zm8.834-5.968l-8.027 4.59 8.027 4.588 8.028-4.589-8.028-4.589zm4.176 28.638l4.658-2.662V7.685l-3.372 1.928-4.659 2.663v20.007l3.373-1.928zM39.352 7.133l-8.028 4.588 8.028 4.589 8.027-4.589-8.027-4.588zm-.803 10.558l-4.659-2.663-3.372-1.928v9.084l4.658 2.663 3.373 1.928V17.69zm-18.473 20.47l11.775-6.674 5.886-3.336-8.022-4.586-9.237 5.28-8.418 4.812 8.016 4.504z" fill-rule="evenodd"></path></svg>
                            <svg class="w-auto h-8" viewBox="0 0 226 51" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g><g transform="translate(60.535 5.881)"><path d="M3.386 35.026c-.848 0-1.547-.241-2.097-.723s-.824-1.174-.824-2.076V4.384c0-.902.275-1.586.824-2.052.55-.467 1.249-.7 2.097-.7.848 0 1.555.233 2.12.7.565.466.848 1.15.848 2.052v27.843c0 .902-.283 1.594-.848 2.076s-1.272.723-2.12.723zm12.117 0c-.848 0-1.547-.241-2.096-.723-.55-.482-.825-1.174-.825-2.076V14.225c0-.902.275-1.586.825-2.053.55-.466 1.248-.7 2.096-.7.848 0 1.555.234 2.12.7.565.467.848 1.15.848 2.053v18.002c0 .902-.283 1.594-.848 2.076s-1.272.723-2.12.723zm0-27.704c-1.068 0-1.916-.288-2.544-.863-.628-.575-.942-1.329-.942-2.262s.314-1.679.942-2.238c.628-.56 1.476-.84 2.544-.84 1.037 0 1.877.28 2.52.84.644.56.966 1.305.966 2.238s-.314 1.687-.942 2.262c-.628.575-1.476.863-2.544.863zm25.261 5.83c.252-.56.59-.98 1.013-1.26.424-.28.888-.42 1.39-.42.723 0 1.374.242 1.955.724s.872 1.08.872 1.795c0 .374-.094.747-.283 1.12l-8.715 18.05c-.283.59-.684 1.04-1.202 1.352a3.279 3.279 0 01-1.72.466c-.596 0-1.17-.155-1.719-.466a2.998 2.998 0 01-1.248-1.353l-8.763-18.05a2.348 2.348 0 01-.236-1.072c0-.715.306-1.321.919-1.819a3.233 3.233 0 012.096-.746c1.131 0 1.963.544 2.497 1.632l6.596 14.412 6.548-14.365zm26.722 15.344c.534 0 .966.202 1.296.607.33.404.495.948.495 1.632 0 .964-.581 1.772-1.744 2.425-1.067.59-2.277 1.065-3.627 1.423-1.35.357-2.638.536-3.863.536-3.707 0-6.643-1.057-8.81-3.171-2.167-2.115-3.251-5.006-3.251-8.675 0-2.332.471-4.4 1.413-6.203.943-1.804 2.27-3.203 3.981-4.198 1.712-.995 3.651-1.492 5.819-1.492 2.073 0 3.878.45 5.417 1.352 1.54.902 2.733 2.177 3.581 3.825.848 1.648 1.272 3.59 1.272 5.83 0 1.336-.597 2.005-1.79 2.005H53.777c.188 2.145.8 3.723 1.837 4.734 1.037 1.01 2.544 1.516 4.523 1.516 1.005 0 1.892-.125 2.662-.373.77-.25 1.64-.591 2.614-1.027.943-.497 1.634-.746 2.073-.746zm-8.15-13.012c-1.602 0-2.882.497-3.84 1.492-.958.995-1.53 2.426-1.72 4.291h10.648c-.063-1.897-.534-3.335-1.413-4.314-.88-.98-2.105-1.47-3.675-1.47z" fill="#000" fill-rule="nonzero"></path><path d="M105.166 12.54c.22-.576.543-1.008.968-1.297a2.428 2.428 0 011.392-.432c.724 0 1.376.248 1.958.745.582.496.873 1.113.873 1.85 0 .415-.078.784-.236 1.104l-7.786 18.591c-.252.609-.637 1.073-1.156 1.393-.52.32-1.093.48-1.722.48-.598 0-1.157-.16-1.676-.48-.519-.32-.904-.784-1.156-1.393L91.01 19.362l-5.427 13.74c-.252.608-.637 1.072-1.156 1.392-.52.32-1.094.48-1.723.48-.598 0-1.164-.16-1.699-.48a2.836 2.836 0 01-1.18-1.393l-7.738-18.59c-.158-.417-.236-.77-.236-1.058 0-.736.314-1.369.943-1.897.63-.529 1.322-.793 2.077-.793.535 0 1.022.144 1.463.432.44.289.77.72.99 1.297l5.569 14.652 5.71-14.507c.252-.609.613-1.065 1.085-1.37a2.816 2.816 0 011.558-.456c.566 0 1.085.152 1.557.456.472.305.833.761 1.085 1.37l5.757 14.555 5.521-14.652zm12.28 22.483c-.85 0-1.55-.248-2.1-.745-.551-.496-.827-1.209-.827-2.137V13.597c0-.928.276-1.633.826-2.113.55-.48 1.25-.721 2.1-.721.85 0 1.557.24 2.124.72.566.481.85 1.186.85 2.114v18.544c0 .928-.284 1.64-.85 2.137-.567.497-1.274.745-2.124.745zm0-28.536c-1.07 0-1.92-.296-2.549-.888-.63-.593-.944-1.37-.944-2.33 0-.961.315-1.73.944-2.306.63-.577 1.479-.865 2.548-.865 1.038 0 1.88.288 2.525.865.645.576.967 1.345.967 2.306 0 .96-.314 1.737-.944 2.33-.629.592-1.478.888-2.548.888zm22.093 4.276c.818-.064 1.463.112 1.935.528.472.417.708 1.041.708 1.874 0 .865-.204 1.505-.613 1.922-.41.416-1.149.688-2.218.816l-1.416.144c-1.856.192-3.217.833-4.082 1.922-.865 1.089-1.298 2.45-1.298 4.083v10.089c0 .928-.283 1.64-.85 2.137-.565.497-1.273.745-2.123.745-.849 0-1.549-.248-2.1-.745-.55-.496-.825-1.209-.825-2.137V13.549c0-.896.275-1.585.825-2.065.551-.48 1.235-.721 2.053-.721.818 0 1.479.232 1.982.697.504.464.755 1.128.755 1.993v1.922c.598-1.41 1.487-2.498 2.666-3.267a8.075 8.075 0 013.94-1.297l.661-.048zm23.133 17.534c.535 0 .967.209 1.298.625.33.416.495.977.495 1.681 0 .993-.582 1.826-1.746 2.498-1.07.609-2.28 1.097-3.634 1.466-1.352.368-2.642.552-3.87.552-3.711 0-6.653-1.089-8.824-3.267-2.17-2.177-3.256-5.156-3.256-8.935 0-2.402.472-4.532 1.416-6.39.944-1.857 2.273-3.298 3.987-4.323 1.715-1.025 3.658-1.537 5.828-1.537 2.077 0 3.886.464 5.427 1.393 1.542.929 2.737 2.242 3.587 3.94.85 1.697 1.274 3.698 1.274 6.004 0 1.377-.598 2.066-1.793 2.066H148.94c.188 2.21.802 3.835 1.84 4.876 1.038 1.04 2.548 1.561 4.53 1.561 1.007 0 1.896-.128 2.666-.384.771-.256 1.644-.609 2.62-1.057.943-.512 1.635-.769 2.076-.769zm-8.164-13.403c-1.604 0-2.886.513-3.846 1.538-.96 1.024-1.534 2.498-1.722 4.42h10.664c-.062-1.954-.534-3.436-1.415-4.444-.881-1.01-2.108-1.514-3.681-1.514z" stroke="#000"></path></g><g fill-rule="nonzero"><path d="M41.76 33.247C40.946 34.48 40.326 36 38.667 36c-2.791 0-2.942-4.304-5.735-4.304S30.29 36 27.498 36c-2.792 0-2.943-4.304-5.736-4.304C18.97 31.696 19.12 36 16.33 36c-2.792 0-2.943-4.304-5.735-4.304C7.8 31.696 7.95 36 5.16 36c-.877 0-1.494-.425-2.013-1.008C1.149 31.516 0 27.442 0 23.087 0 10.337 9.85 0 22 0s22 10.336 22 23.087c0 3.646-.805 7.094-2.24 10.16z" fill="#FB70A9"></path><g transform="translate(7 21)"><g transform="translate(0 6)" fill="#666"><path d="M6.214 3.968v9.562a3.107 3.107 0 01-6.214 0V1.986C.58.922 1.242 0 2.437 0 4.38 0 5.06 2.442 6.214 3.968zm11.738.498v15.122a3.452 3.452 0 11-6.904 0V2.473C11.698 1.219 12.368 0 13.742 0c2.174 0 2.766 3.056 4.21 4.466zM29 4.188v10.978a3.107 3.107 0 11-6.214 0V1.673C23.326.747 23.97 0 25.046 0 27.087 0 27.734 2.692 29 4.188z"></path></g><g fill="#000" fill-opacity=".4"><path d="M6.214 12.898c-.55-.674-1.203-1.175-2.147-1.175-2.24 0-2.652 2.824-4.067 4.097V3.64a3.107 3.107 0 116.214 0v9.258zm11.738.218c-.587-.782-1.275-1.393-2.317-1.393-2.493 0-2.722 3.495-4.587 4.461v-5.386a3.452 3.452 0 016.904 0v2.318zM29 12.512c-.478-.471-1.045-.79-1.798-.79-2.414 0-2.704 3.28-4.416 4.364V5.153a3.107 3.107 0 116.214 0v7.359z"></path></g></g><path d="M41.76 33.247C40.946 34.48 40.326 36 38.667 36c-2.791 0-2.942-4.304-5.735-4.304S30.29 36 27.498 36c-2.792 0-2.943-4.304-5.736-4.304C18.97 31.696 19.12 36 16.33 36c-2.792 0-2.943-4.304-5.735-4.304C7.8 31.696 7.95 36 5.16 36c-.877 0-1.494-.425-2.013-1.008C1.149 31.516 0 27.442 0 23.087 0 10.337 9.85 0 22 0s22 10.336 22 23.087c0 3.646-.805 7.094-2.24 10.16z" fill="#000"></path><path d="M37 35.54c5.765-8.576 5.914-18.09.447-28.54A23.028 23.028 0 0144 23.136a23.07 23.07 0 01-2.321 10.121C40.833 34.486 40.19 36 38.472 36A2.506 2.506 0 0137 35.54z" fill="#FFF" opacity=".139"></path><g transform="translate(9 6)"><path d="M11.82 22.846c7.651 0 10.872-4.438 10.872-10.741S17.825 0 11.821 0C5.816 0 .949 5.802.949 12.105c0 6.303 3.221 10.741 10.872 10.741z" fill="#FFF"></path><g transform="translate(4.82 3.462)"><ellipse fill="#000" cx="4.077" cy="4.5" rx="4.077" ry="4.5"></ellipse><ellipse fill="#FFF" cx="3.397" cy="3.462" rx="2.038" ry="2.077"></ellipse></g></g></g></g></g></svg>
                        </div>


                    </div>
                </div>
                <div class="relative flex-1 w-full pt-6 text-black lg:pt-12 lg:pl-12 lg:w-6/12">
                    #Start of Image
                    <img src="https://cdn.devdojo.com/images/january2021/hero-character.png" class="w-full">
                    #End of Image
                </div>
            </div>


        </div>
    </section>

    #Section 8
    <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
        <div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">

            #Image
            <div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                <img src="https://cdn.devdojo.com/images/december2020/productivity.png" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 ">
            </div>

            #Content
            <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    Boost Productivity
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                    Build an atmosphere that creates productivity in your organization and your company culture.
                </p>
                <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Maximize productivity and growth
                    </li>
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Speed past your competition
                    </li>
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Learn the top techniques
                    </li>
                </ul>
            </div>
            #End  Content
        </div>
        <div class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">

            #Content
            <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    Automated Tasks
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
                    Save time and money with our revolutionary services. We are the leaders in the industry.
                </p>
                <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Automated task management workflow
                    </li>
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Detailed analytics for your data
                    </li>
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Some awesome integrations
                    </li>
                </ul>
            </div>
            #End  Content

            #Image
            <div class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                <img src="https://cdn.devdojo.com/images/december2020/settings.png" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32">
            </div>
        </div>
    </section>

    #Section 9 
    <section class="w-full px-8 py-16 bg-gray-100 xl:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col items-center md:flex-row">

                <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                    <p class="font-medium text-blue-500 uppercase">Building Businesses</p>
                    <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                        Changing The Way People Do Business.
                    </h2>
                    <p class="text-xl text-gray-600 md:pr-16">Learn how to engage with your visitors and teach them about your mission. We're revolutionizing the way customers and businesses interact.</p>
                </div>

                <div class="w-full mt-16 md:mt-0 md:w-2/5">
                    <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                        <h3 class="mb-6 text-2xl font-medium text-center">Sign in to your Account</h3>
                        <input type="text" name="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Email address">
                        <input type="password" name="password" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Password">
                        <div class="block">
                            <button class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Log Me In</button>
                        </div>
                        <p class="w-full mt-4 text-sm text-center text-gray-500">Don't have an account? <a href="#_" class="text-blue-500 underline">Sign up here</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    #Section 10 
    <section class="py-12 bg-white sm:py-16 md:py-20 lg:py-24">
        <div class="max-w-6xl px-8 mx-auto lg:px-16">
            <h2 class="mb-2 text-2xl font-bold md:text-3xl">Got a Question?</h2>
            <p class="mb-4 text-sm text-gray-600 sm:text-base md:text-lg">We may have an answer for you. Here are some of our common FAQ's:</p>

            <div class="relative mt-2">
                #Question 1 
                <div x-data="{ show: false }" class="relative overflow-hidden border-b-2 border-black select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span>Where do I go to upgrade my account?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
                </div>

                #Question 2 
                <div x-data="{ show: false }" class="relative overflow-hidden border-b-2 border-black select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span>How do I use Tails in my project?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">Implementation in your project is very simple. You can use the exported page as a starting point, or you can copy and paste the HTML into your own page.</p>
                </div>

                #Question 3 
                <div x-data="{ show: false }" class="relative overflow-hidden border-b-2 border-black select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span>How long will I have access to Tails?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You will have unlimited access to all your pre-built pages; however, if you want to be able to download and export your pages, you'll need a pro account. Paddle for processing payments.</p>
                </div>

                #Question 4 
                <div x-data="{ show: false }" class="relative overflow-hidden border-b-2 border-black select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span>What is the license on the pages?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You have unlimited use to the templates used in Tails; however, you cannot re-use the templates to sell for others to use.</p>
                </div>

                #Question 5 
                <div x-data="{ show: false }" class="relative overflow-hidden select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span>What if I need help with my project?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">If you need assistance implementing the templates into your project you can contact support or you can visit our question section.</p>
                </div>
            </div>

        </div>
    </section>

    #Section 11 
    <section class="relative w-full bg-white">
        <div class="absolute inset-0 w-full h-full opacity-25 sm:opacity-50">
            <svg class="absolute top-0 right-0 w-auto h-full opacity-75" viewBox="0 0 150 350" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 0h50v50H0z"></path><path d="M0 0h50v50H0z"></path><path d="M0 0h150v150H0z"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g><g fill="#DEB9FF" fill-rule="nonzero"><path d="M25 25c13.807 0 25-11.193 25-25H0c0 13.807 11.193 25 25 25z"></path></g><g transform="translate(0 100)"><mask fill="#fff"><use xlink:href="#path-1"></use></mask><path d="M25 0c13.807 0 25 11.193 25 25S38.807 50 25 50H0V0h25z" fill="#F9C7FF" mask="url(#mask-2)"></path></g><g transform="translate(100 100)"><mask fill="#fff"><use xlink:href="#path-3"></use></mask><path d="M25 25c13.807 0 25-11.193 25-25H0c0 13.807 11.193 25 25 25z" fill="#93FFFD" fill-rule="nonzero" mask="url(#mask-4)"></path></g><g transform="translate(0 200)"><mask fill="#fff"><use xlink:href="#path-5"></use></mask><path d="M75 75c0 41.421 33.579 75 75 75V0c-41.421 0-75 33.579-75 75z" fill="#93FFFD" fill-rule="nonzero" mask="url(#mask-6)"></path></g></g></g></svg>
            <svg class="absolute top-0 left-0 w-auto h-full opacity-30" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 0h50v50H0z"></path><path d="M0 0h50v50H0z"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="matrix(-1 0 0 1 150 0)"><g transform="translate(0 25)" fill="#93FFFD" fill-rule="nonzero"><path d="M25 0C11.193 0 0 11.193 0 25h50C50 11.193 38.807 0 25 0z"></path></g><path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" transform="translate(100)" fill="#DEB9FF"></path><g transform="translate(0 100)"><mask fill="#fff"><use xlink:href="#path-1"></use></mask><path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" fill="#B3EBFF" mask="url(#mask-2)"></path></g><g transform="translate(100 200)"><mask fill="#fff"><use xlink:href="#path-3"></use></mask><path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" fill="#93FFFD" mask="url(#mask-4)"></path></g></g></g></svg>
        </div>
        <div class="relative w-full px-8 pt-16 pb-16 ml-auto mr-auto bg-top bg-cover sm:max-w-xl md:max-w-full md:px-24 lg:px-8 lg:py-24 lg:pb-32">
            <div class="max-w-xl mb-10 ml-auto mr-auto bg-top bg-cover md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <p class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider uppercase bg-purple-600 rounded-full text-purple-50">Our Team</p>
                <div class="max-w-2xl mb-6 ml-auto mr-auto font-sans tracking-tight text-gray-900 bg-top bg-cover sm:text-4xl md:mx-auto">
                    <p class="inline max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">Our Awesome Team of Unique Individuals</p>
                </div>
                <p class="text-base text-gray-700 md:text-lg">These are the amazing people that make us unique and stand-out amongst the competition. We are a team of focused and talented individuals.</p>
            </div>
            <div class="grid gap-10 row-gap-8 ml-auto mr-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex items-center">
                    <img src="https://cdn.devdojo.com/images/july2021/03-Mike-Melcher.jpg" class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    <div class="relative">
                        <p class="text-lg font-bold text-gray-800">Mike Melcher</p>
                        <p class="text-sm text-gray-600">CEO &amp; Founder</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="https://cdn.devdojo.com/images/july2021/01-John-Cremson.jpg" class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    <div class="relative">
                        <p class="text-lg font-bold text-gray-800">John Cremson</p>
                        <p class="text-sm text-gray-600">Co-Founder</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="https://cdn.devdojo.com/images/july2021/02-Sally-Jones.jpg" class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    <div class="relative">
                        <p class="text-lg font-bold text-gray-800">Sally Jones</p>
                        <p class="text-sm text-gray-600">Marketing Manager</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="https://cdn.devdojo.com/images/july2021/04-Barbara-Sanchez.jpg" class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    <div class="relative">
                        <p class="text-lg font-bold text-gray-800">Barbara Sanchez</p>
                        <p class="text-sm text-gray-600">SEO Specialist</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="https://cdn.devdojo.com/images/july2021/05-Sam-Lee.jpg" class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    <div class="relative">
                        <p class="text-lg font-bold text-gray-800">Sam Lee</p>
                        <p class="text-sm text-gray-600">Lead Designer</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="https://cdn.devdojo.com/images/july2021/06-Carly-Jenson.jpg" class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    <div class="relative">
                        <p class="text-lg font-bold text-gray-800">Carly Jenson</p>
                        <p class="text-sm text-gray-600">Designer</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="https://cdn.devdojo.com/images/july2021/07-Jeremy-Deen.png" class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    <div class="relative">
                        <p class="text-lg font-bold text-gray-800">Jermy Deen</p>
                        <p class="text-sm text-gray-600">Sales Manager</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="https://cdn.devdojo.com/images/july2021/08-Susan-Miller.jpg" class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    <div class="relative">
                        <p class="text-lg font-bold text-gray-800">Susan Miller</p>
                        <p class="text-sm text-gray-600">Developer</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="https://cdn.devdojo.com/images/july2021/paul-richards.jpg" class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    <div class="relative">
                        <p class="text-lg font-bold text-gray-800">Paul Denson</p>
                        <p class="text-sm text-gray-600">Developer</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    #Section 12
    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        About
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Blog
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Team
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Pricing
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Contact
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Terms
                    </a>
                </div>
            </nav>
            <div class="flex justify-center mt-8 space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Dribbble</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-base leading-6 text-center text-gray-400">
                © 2021 SomeCompany, Inc. All rights reserved.
            </p>
        </div>
    </section>
    -->
@endsection
