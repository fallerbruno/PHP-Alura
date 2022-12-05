<x-layout title="Temporadas de {!! $series->nome !!}">
    <div class="d-flex justify-center">
        @if ($series->cover == null)
            <img src="https://s2.glbimg.com/zJkkiqAx8hQekmURmkm5EMDvQTA=/0x0:763x404/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2022/C/w/0c866sTNGjWkOsg4TBfw/1dca6b02-2534-40f7-866a-ae1abc7c9a66.jpg"
                width="400px" >
        @else
            <img src="{{ asset('storage/' . $series->cover) }}" class="img-fluid" style="height:400px" />
        @endif
    </div>
    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('episodes.index', $season->id) }}">
                    Temporada {{ $season->number }}
                </a>

                <span class="badge bg-secondary">
                    {{ $season->numberOfWatchedEpisodes() }} / {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
