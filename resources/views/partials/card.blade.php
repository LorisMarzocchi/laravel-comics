@foreach ($arrComics as $comic)
    <div class="card">
        <img src="{{ Vite::asset($comic['thumb']) }}" alt="">
        <p>{{ Str::before( $comic['title'], '#') }}</p>
    </div>
@endforeach
