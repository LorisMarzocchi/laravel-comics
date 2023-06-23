
<div class="infoNav"></div>
<header>
    <img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="" />
<div class="d-flex">

    <ul>
        @foreach ($arrMenu as $menu)
            <li><a href="{{ $menu['link'] }}">{{ $menu['title'] }}</a></li>
        @endforeach
    </ul>
    <input class="form-control ms-3" type="text" placeholder="Search">
</div>

</header>
