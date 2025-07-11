<div class="min-h-screen ">
            @include('layouts.navigation')
                <!-- Page Heading -->
                            @isset($header)
                                <header class="shadow">
                                    <div class=" mx-auto py-6 px-4 ">
                                        {{ $header }}
                                    </div>
                                </header>
                            @endisset
         

            <!-- Page Content -->
            <main>
                
                <div class="container py-12 p-0 m-0">
                    <div class="row m-0 p-0">
                        @include('layouts.sideNav')
                          <div class="col-10 mx-auto bg-light">
                                {{ $slot }}
                          </div>
                    </div>
                </div>
            </main>
        </div>