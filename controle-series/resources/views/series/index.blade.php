<x-layout title="Séries">

<ul>
    @foreach ($series as $serie)
        <li>
            {{ $serie->name }}
        </li>
    @endforeach
</ul>


    <script>
        const series = {{  Js::from($series)  }};
    </script>

</x-layout>
