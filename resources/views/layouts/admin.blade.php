<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex"/>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- <link rel="icon" type="image/x-icon" href="/images/icons/favicon.png"> -->
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/gsap.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/special.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/select2.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/date/daterangepicker.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="{{asset('/js/jquery-3.1.0.js')}}"></script>
        <script src="{{asset('/js/select2.js')}}"></script>
        <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('/js/gsap/gsap.min.js') }}"></script>
        <script src="{{ asset('/js/date/moment.min.js') }}"></script>
        <script src="{{ asset('/js/date/daterangepicker.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="{{asset('/js/toastr.min.js')}}"></script>
        <script>window.addEventListener('alert', event => { 
            console.log( event.detail );            
            toastr[event.detail[0].type](event.detail[0].message, event.detail[0].title ?? ''), toastr.options = { "closeButton": true, "progressBar": true, } 
            });</script>
    </head>
    <body>
        @livewire('parts.header')
        <div class="flex relative">
            @livewire('adminSidebar')
            <div class="p-3 w-full" style="min-height: 90vh; overflow-x: auto;">
                {{ $slot }}
            </div>
        </div>
        @livewire('parts.footer')

        <script src="{{asset('/js/search.js')}}"></script>
        <!-- <script src="{{asset('/js/gsap/animation.js')}}"></script> -->
        <script src="{{ asset('/js/swiper.js') }}"></script>
        <script src="{{asset('/js/jquery-ui.min.js')}}"></script>
        <script src="{{ asset('/js/auto-search.js') }}"></script>
        
        <script>
            $(document).on('mouseenter', '.threeDots', function() {
                $('.dotOptions').hide();
                $(this).children('.dotOptions').toggle();
            });
            $(document).on('mouseleave', '.threeDots', function() { $(this).children('.dotOptions').hide(); });
        </script>        
        <script>
            $(document).ready(function () {
                window.Livewire.on('destroyAllCKEditors', function () {
                    const instances = CKEDITOR.instances;
                    for (const instance in instances) {
                        if (instances.hasOwnProperty(instance)) {
                            instances[instance].destroy(true);
                        }
                    }
                });
            });
        </script>
        @stack('scripts')
    </body>
</html>