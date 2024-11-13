<div style="padding-top: 150px;">
    <footer class="relative bg-primary pt-12">
        <section class="absolute top-0 left-0 right-0 container grid grid-cols-12 gap-4 gap-x-3 items-center justify-center bg-white px-6 md:px-12 py-3 md:py-6" style="top: -50px;">
            <div class="col-span-12 md:col-span-6">
                <h2 class="heading font-extrabold">SUBSCRIBE US.</h2>
                <p class="paragraph font-bold italic pt-1">Never Miss an Update!</p>
                <p class="paragraph">Subscribe Now to receive our latest news.</p>
            </div>
            <div class="col-span-12 md:col-span-6">
                <form action="#" method="POST" class="flex bg-primary text-gray-700 rounded-lg p-2 md:p-3 m-2">
                    <input type="email" placeholder="Enter Your Email ID for Newsletters" class="w-full bg-primary text-white paragraph px-3" required>
                    <button type="submit" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                    </button>
                </form>
            </div>
        </section>
        <section class="row px-6 md:px-12 py-3 md:py-6 lg:pt-12 mt-12">
            <div class="col-span-12 md:col-span-3 pt-12">
                <a href="/"><img class="bg-black w-full logo px-3 md:px-6 py-2 md:py-3" src="{{ asset('images/logo.jpg') }}" alt="Navneet Khare Logo" width="150" height="45"/></a>
                <p class="text-sm text-white py-2 md:py-3 lg:py-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sequi ipsam aspernatur eos enim mollitia consequuntur laudantium cupiditate. Voluptatibus inventore temporibus quo quis exercitationem?</p>
            </div>
            <div class="col-span-12 md:col-span-2">
                <h2 class="smallHeading text-white text-center pb-2 md:pb-3 lg:pb-5">Categories</p>
                <div class="flex items-center justify-center">
                    <ul class="flex flex-col items-center justify-center mx-2 md:mx-3 py-2 md:py-3 lg:py-5">
                        <li class="text-sm text-white text-center py-1 md:py-2">ABC</li>
                        <li class="text-sm text-white text-center py-1 md:py-2">DEF</li>
                        <li class="text-sm text-white text-center py-1 md:py-2">GHI</li>
                        <li class="text-sm text-white text-center py-1 md:py-2">JKL</li>
                    </ul>
                </div>
            </div>
            <div class="col-span-12 md:col-span-2">
                <h2 class="smallHeading text-white text-center">Information</h2>
                <ul class="py-2 md:py-3 lg:py-5">
                    <li class="text-sm text-white text-center py-2 md:py-3">MNO</li>
                    <li class="text-sm text-white text-center py-2 md:py-3">PQR</li>
                    <li class="text-sm text-white text-center py-2 md:py-3">STU</li>
                </ul>
            </div>
            <div class="col-span-12 md:col-span-2">
                <h2 class="smallHeading text-white text-center">Quick Links</h2>
                <ul class="py-2 md:py-3 lg:py-5">
                    <li class="text-sm text-white text-center py-2 md:py-3">Contact Us</li>
                    <li class="text-sm text-white text-center py-2 md:py-3">About Us</li>
                    <li class="text-sm text-white text-center py-2 md:py-3">Privacy Policy</li>
                </ul>
            </div>
            <div class="col-span-12 md:col-span-3">
                <h2 class="smallHeading text-white">Connect</h2>
                <ul class="py-2 md:py-3 lg:py-5">
                    <li class="flex items-center justify-start py-2 md:py-3"><img src="/images/icons/contact/call.svg" alt="Regtell Contact Number" class="w-4 mr-2">@if( config('amitkk.phone')  && count( config('amitkk.phone') )) <p>@foreach( config('amitkk.phone')  as $key => $i) <a class="text-sm text-white" href="tel:{{ $i}}">{{ $i}}</a> @if($key != count( config('amitkk.phone') )-1 ) / @endif @endforeach</p>@endif</li>
                    <li class="flex items-center justify-start py-2 md:py-3"><img src="/images/icons/contact/mail.svg" alt="Regtell Official Mail ID" class="w-4 mr-2">@if( config('amitkk.email')  && count( config('amitkk.email') ))<p class="text-sm text-white">@foreach( config('amitkk.email')  as $key => $i) <a class="text-sm text-white" href="mailto:{{ $i}}">{{ $i}}</a> @if($key != count( config('amitkk.email') )-1 ) / @endif @endforeach</p>@endif</li>
                    <li class="flex items-center justify-start py-2 md:py-3"><img src="/images/icons/contact/location.svg" alt="" class="w-4 mr-2"><a href="" class="text-sm text-white">{{ config('amitkk.full_address') }}</a></li>                    
                </ul>
            </div>
        </section>
    </footer>
    <section class="grid grid-cols-12 gap-4 gap-x-3 navneetShadow bg-[#003d5e] py-5">
        <div class="col-span-12 md:col-span-12 container md:flex items-center justify-between">
            <p class="text-white text-xs md:text-sm text-center">© {{ now()->year }} | Furrnipro Pvt Ltd. | All Rights Reserved</p>
            <p class="text-white text-xs md:text-sm text-center">Designed & Developed By <a href="https://www.amitkk.com" target="_blank"><strong>AMITKK</strong></a>
            </p>
        </div>
    </section>

    <style>
        .animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes fade{0%{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}to{opacity:1;-webkit-transform:none;transform:none}}@media only screen and (max-width:768px){@keyframes fade{0%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}to{opacity:1;-webkit-transform:none;transform:none}}}.fade{-webkit-animation-name:fade;animation-name:fade}.bg-dark{background:#000000ad;z-index:100}
    </style>
</div>
