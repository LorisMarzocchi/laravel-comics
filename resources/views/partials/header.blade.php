
<div class="infoNav d-flex justify-content-end align-items-center text-light">
    <span class="power">DC POWER<i class="fa-solid fa-trademark"></i> </span><span class="ms-1">VISA <i class="fa-sharp fa-regular fa-registered"></i></span>
    <div class="ms-4 d-flex ">
        <span>ADDICTIONAL DC SITES</span>
        <i class="fa-solid fa-caret-down ms-2"></i>

    </div>

</div>
<header>
    <img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="" />
    {{-- <i class="fa-solid fa-house"></i> --}}
    <div class="d-flex align-items-end">

        <ul>
            @foreach ($arrMenu as $menu)
            <li>
                {{-- <a href="{{ $menu['link'] }}">{{ $menu['title'] }}</a> --}}
                    @if ($loop->last)
                    <div class="link d-flex align-items-center">

                        <a href="{{ $menu['link'] }}">{{ $menu['title'] }}</a>
                        <i class="fa-solid fa-caret-down ms-2"></i>
                    </div>
                    @else
                    <div class="d-flex">

                        <a href="{{ $menu['link'] }}">{{ $menu['title'] }}</a>
                        {{-- <i class="fa-solid fa-caret-down"></i> --}}
                    </div>


                    @endif




                </li>
            @endforeach
        </ul>

        <input type="text" class="form-control search ms-3" placeholder="Search...">
            {{-- <input class="form-control ms-3" type="text" placeholder="Search"> --}}
        {{-- <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required> --}}

    </div>


</header>
