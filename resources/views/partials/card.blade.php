@foreach ($arrComics as $comic)
    <div class="card">
        <img src="{{ Vite::asset($comic['thumb']) }}" alt="">
        <p class="pt-1">{{ Str::before( $comic['title'], '#') }}</p>
    </div>
@endforeach
