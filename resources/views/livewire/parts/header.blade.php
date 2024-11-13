<nav x-data="{ open: false }" class="nav w-full z-50 bg-black card py-3">
    <div class="mx-auto py-2 md:py-3">
        <div class="flex items-center justify-between w-full py-2 md:py-3 px-4 sm:px-6 lg:px-8">
            <a href="/"><img class="w-full logo" src="{{ asset('images/logo.jpg') }}" alt="Regtell Logo" width="150" height="45"/></a>
            <div class="flex justify-center">
                <ul class="flex items-center justify-center">
                    <li class="paragraph text-white mx-2 md:mx-3"><a href="{{ route('home') }}">Home</a></li>
                    <li class="paragraph text-white mx-2 md:mx-3"><a href="">Products</a></li>
                    <li class="paragraph text-white mx-2 md:mx-3"><a href="">Services</a></li>
                    <li class="paragraph text-white mx-2 md:mx-3"><a href="">About Us</a></li>
                    <li class="bg-primary rounded-full paragraph text-white px-3 md:px-6 lg:px-12 py-2 mx-2 md:mx-3"><a href="">Contact</a></li>
                    @if($count>0)
                        <x-nav-link href="{{ route('cart') }}" class="hover:border-action mr-5">
                            <div class="flex items-center relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="#fff" viewBox="0 0 24 24" stroke="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                <span class="count text-sm font-semibold absolute right-0">{{$count}}</span>
                            </div>
                        </x-nav-link>
                    @endif
                </ul>
            </div>
            @if(!Auth::user())
                <div class="dd">
                    <x-dropdown align="right" width="48" height="100%">
                        <x-slot name="trigger">
                            <span class="text-white h-full hover:cursor-pointer inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 focus:outline-none focus:border-action transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg><svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg></span>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="/login">Login</x-dropdown-link>
                            <x-dropdown-link href="/register">Register</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endif
        </div>
    </div>
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pb-2 space-y-1">
            <div class="mobiledd text-right pr-4">
                <x-dropdown align="right" width="48" height="100%">
                    <x-slot name="trigger">
                        <span class="inline-flex hover:cursor-pointer items-center pl-3 py-2">Online<svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg></span>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{route('home')}}" class="w-full baseText text-left px-6 py-3">Digital Marketing</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
            <div class="mobiledd text-right pr-4">
                <x-dropdown align="right" width="48" height="100%">
                    <x-slot name="trigger">
                        <span class="inline-flex hover:cursor-pointer items-center pl-3 py-2">Offline<svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg></span>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{route('home')}}" class="baseText text-left px-6 py-3">Videos & Animations</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
            <div class="mobiledd text-right pr-4">
                <x-dropdown align="right" width="48" height="100%">
                    <x-slot name="trigger">
                        <span class="inline-flex hover:cursor-pointer items-center pl-3 py-2">Languages<svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg></span>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{route('home')}}" class="baseText text-left px-6 py-3">Laravel Development</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
            <div class="mobiledd text-right pr-4">
                <x-responsive-nav-link href="/blog" :active="request()->routeIs('blog')" class="baseText text-right hover:cursor-pointer">{{ __('Blog') }}</x-responsive-nav-link>
            </div>
            <div class="mobiledd text-right pr-4">
                @if(!Auth::user())
                    <x-dropdown align="right" width="48" height="100%">
                        <x-slot name="trigger">
                            <span class="h-full hover:cursor-pointer inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 focus:outline-none focus:border-action transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg><svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg></span>
                        </x-slot>
                        <x-slot name="content">
                                <x-dropdown-link href="/login">Login</x-dropdown-link>
                                <x-dropdown-link href="/register">Register</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                @endif
            </div>
        </div>
        <div class="pb-2 border-t border-gray-200 text-right pr-4">
            <div class="space-y-1">
                @if(Auth::user())
                    <form method="POST" action="{{ route('logout') }}">@csrf <x-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-responsive-nav-link></form>
                @endif
            </div>
        </div>
    </div>
</nav>