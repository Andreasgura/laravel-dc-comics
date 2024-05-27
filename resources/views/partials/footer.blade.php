<div>
<div id="top-footer">
        <div class="container">
            <ul class="d-flex flex-row py-3">
            @foreach($pages as $page)    
            <li class="d-flex flex-row" >
            <div class="col-12 col-md-6 col-lg-2 mb-3 ">
        <div class="mb-3">
            <img class="w-100"
            src="{{ $page['imgpath'] }}" alt="{{ $page['name'] }}">
        </div>
        <div class="text-uppercase ">
            {{ $page['name'] }}
        </div>
    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>


</div>