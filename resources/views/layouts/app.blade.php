
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'OpnMrk') }}</title>

        <!-- Fonts, icons & style -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" />
    {{ $styles ?? ""  }}
<style>
.form-group{margin: 20px;}
.form-group label{display: block !important;min-width: 100%;}
.nav-tabs{list-style-type: none;}
.nav-tabs .nav-item{display: block !important;position: relative;min-width:100%;}
    </style>
        <!-- Scripts -->
         
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">


    
       <!-- ========== HEADER ========== -->

 @include('layouts.navigation')

<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<div class="-mt-px">
  <!-- Breadcrumb -->
  <div class="sticky top-0 inset-x-0 z-20 bg-white border-y border-gray-200 px-4 sm:px-6 lg:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
    <div class="flex items-center py-2">
      <!-- Navigation Toggle -->
      <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-hidden focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
        <span class="sr-only">Toggle Navigation</span>
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m8 9 3 3-3 3"/></svg>
      </button>
      <!-- End Navigation Toggle -->

      <!-- Breadcrumb -->
      <ol class="ms-3 flex items-center whitespace-nowrap">
        <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
          Application Layout
          <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </li>
        <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
          Dashboard
        </li>
      </ol>
      <!-- End Breadcrumb -->
    </div>
  </div>
  <!-- End Breadcrumb -->
</div>

@include('layouts.sideNav')

<!-- Content -->
<div class="w-full lg:ps-64">
  <div class="p-4 sm:p-6 space-y-4 sm:space-y-6 container"> 
    {{ $slot }}
  </div>
</div>
<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->

        
    <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/main.min.js') }}"></script>
        {{ $scripts ?? "" }}
        <script src="{{ asset('js/toastr.min.js') }}"></script>
         @if(Session::has('success'))
                <script>
                    toastr.success("{{ Session::get('success') }}");
                </script> 
         @elseif(Session::has('info'))
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                    };
                    toastr.options.timeOut = 5000; // 5 seconds
                    toastr.info("{{ Session::get('info') }}");
                </script>
         @endif
       <script>
            document.addEventListener('DOMContentLoaded', function () {
                const checkbox = document.getElementById('checkbox'); 
                checkbox.addEventListener('change', function () {
                    if(checkbox.checked){
                        html.setAttribute('data-bs-theme', 'dark');
                    }else {
                        html.setAttribute('data-bs-theme', 'light');
                    }
                    //document.body.classList.toggle('dark', this.checked);
                });
            });
            </script>
    </body>
</html>
