<header x-data="{ mobileMenuOpen: false }" class="relative z-30 @if(Request::is('/')){{ 'bg-white' }}@else{{ 'bg-gray-50' }}@endif">
    <div class="px-8 mx-auto xl:px-5 max-w-7xl">
        <div class="flex items-center justify-between h-24 border-b-2 border-gray-100 md:justify-start md:space-x-6">
            <div class="inline-flex">
            <!-- data-replace='{ "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }' -->
                <a href="{{ route('wave.home') }}" class="flex items-center justify-center space-x-3 transition-all duration-1000 ease-out transform text-wave-500">
                    @if(Voyager::image(theme('logo')))
                        <img class="h-9" src="https://leewardslope.s3.amazonaws.com/uploads/articles/8w3tgkmpcj6w0fg2g2jf.png" alt="Leewardslope">
                    @else
                        <svg class="w-9 h-9" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient x1="90.046%" y1="-11.694%" x2="26.264%" y2="109.183%" id="b"><stop stop-color="#1F41EF" offset="0%"/><stop stop-color="#15F7CC" offset="100%"/></linearGradient><linearGradient x1="120.803%" y1="-27.288%" x2="6.03%" y2="145.4%" id="e"><stop stop-color="#1739E7" offset="0%"/><stop stop-color="#00F4F1" offset="100%"/></linearGradient><path d="M302.433 100.67c-11.61-17.994-38.445-17.994-50.057 0L137.251 279.058c-3.295 5.104-9.036 8.199-15.207 8.199-14.159 0-22.764-15.258-15.209-26.966l139.34-215.91a28.394 28.394 0 000-30.886c-11.612-17.994-38.444-17.994-50.058-.001L3.298 312.275C-5.59 326.05 4.533 344 21.19 344h132.476c7.261 0 14.016-3.642 17.891-9.647l130.876-202.798a28.394 28.394 0 000-30.886" id="a"/><path d="M196.176 189c13.248 0 21.28-14.331 14.18-25.294l-53.211-82.14v.001L106.475 2.85c-2.446-3.8-8.096-3.8-10.542 0L4.588 144.755C-7.778 163.965 6.305 189 29.476 189c10.102 0 19.497-5.08 24.888-13.454l31.718-49.275c7.017-10.899 23.228-10.899 30.243 0a17.236 17.236 0 010 18.708L91.95 182.847c-1.719 2.67.24 6.153 3.462 6.153h100.764" id="d"/></defs><g fill="none" fill-rule="evenodd"><g transform="translate(33 84)"><mask id="c" fill="#fff"><use xlink:href="#a"/></mask><path d="M302.433 100.67c-11.61-17.994-38.445-17.994-50.057 0L137.251 279.058c-3.295 5.104-9.036 8.199-15.207 8.199-14.159 0-22.764-15.258-15.209-26.966l139.34-215.91a28.394 28.394 0 000-30.886c-11.612-17.994-38.444-17.994-50.058-.001L3.298 312.275C-5.59 326.05 4.533 344 21.19 344h132.476c7.261 0 14.016-3.642 17.891-9.647l130.876-202.798a28.394 28.394 0 000-30.886" fill="url(#b)" mask="url(#c)"/></g><g transform="translate(266 239)"><mask id="f" fill="#fff"><use xlink:href="#d"/></mask><path d="M196.176 189c13.248 0 21.28-14.331 14.18-25.294l-53.211-82.14v.001L106.475 2.85c-2.446-3.8-8.096-3.8-10.542 0L4.588 144.755C-7.778 163.965 6.305 189 29.476 189c10.102 0 19.497-5.08 24.888-13.454l31.718-49.275c7.017-10.899 23.228-10.899 30.243 0a17.236 17.236 0 010 18.708L91.95 182.847c-1.719 2.67.24 6.153 3.462 6.153h100.764" fill="url(#e)" mask="url(#f)"/></g></g></svg>
                    @endif
                </a>
            </div>
            <div class="flex justify-end flex-grow -my-2 -mr-2 md:hidden">
                <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                </button>
            </div>

            <!-- This is the homepage nav when a user is not logged in -->
            @if(auth()->guest())
                @include('theme::menus.guest')
            @else <!-- Otherwise we want to show the menu for the logged in user -->
                @include('theme::menus.authenticated')
            @endif

        </div>
    </div>

    @if(auth()->guest())
        @include('theme::menus.guest-mobile')
    @else
        @include('theme::menus.authenticated-mobile')
    @endif
</header>
