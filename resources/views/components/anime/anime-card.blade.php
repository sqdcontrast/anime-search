<div>
    <a href="https://anilist.co/{{ $result['anilist'] }}">id на anilist: {{ $result['anilist'] }}</a>

    <h3>название: {{ $result['filename'] }}</h3>

    <p>номер эпизода: {{ $result['episode'] }}</p>

    <p>начало сцены {{ $result['from'] }}</p>
    <p>конец сцены {{ $result['to'] }}</p>
    <p>точность {{ $result['similarity'] }}</p>
    <p>Видео {{ $result['video'] }}</p>
    <p>изображение: {{ $result['image'] }}</p>

</div>
