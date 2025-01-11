<ul>
    @foreach($players as $player)
        {{-- Access players via $players directly --}}
        <li>{{ $player->name }} ({{ $player->uid }})</li>
    @endforeach
</ul>
