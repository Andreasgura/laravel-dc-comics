<header>
        <div class="container  ">
            <div class="d-flex justify-content-between">
                <div class=" py-3"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo"></div>
                <div class="d-flex align-items-center">
                    <ul class="text-uppercase d-flex align-items-center h-100 mb-0 ">
                        
                        @foreach ($menuList as $menu)
                        <li>    
                            <a href="{{ $menu['path'] }}">{{ $menu['name'] }}</a>
                        </li>
                        @endforeach
                        
                    </ul>

                </div>
            </div>
        </div>
        <div class="jumbo">

        </div>
    </header>


