<x-layout title="Séries" :mensagem-sucesso="$mensagemSucesso">
    @auth
        <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    @endauth

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    @if ($serie->cover == null)
                        <img src="https://s2.glbimg.com/zJkkiqAx8hQekmURmkm5EMDvQTA=/0x0:763x404/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2022/C/w/0c866sTNGjWkOsg4TBfw/1dca6b02-2534-40f7-866a-ae1abc7c9a66.jpg"
                            width="100px" class="img-thumbnail me-3">
                    @else
                        <img src="{{ 'storage/' . $serie->cover }}" width="100px" class="img-thumbnail me-3">
                    @endif
                    @auth <a href="{{ route('seasons.index', $serie->id) }}"> @endauth
                        {{ $serie->nome }}
                        @auth </a> @endauth
                </div>
                @auth
                    <span class="d-flex">
                        <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                            E
                        </a>

                        <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                X
                            </button>
                        </form>
                    </span>
                @endauth
            </li>
        @endforeach
    </ul>
</x-layout>
