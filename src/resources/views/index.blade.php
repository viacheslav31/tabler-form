<x-tabler-button />

<ul>
    @foreach($posts as $post)
        <li>
            {{ $post->title }}
        </li>
    @endforeach
</ul>
