

<x-app-layout>
    <div class="container">
        <h2>Designs Matching Your Room: {{ $room->name }}</h2>
    
        @if ($matchedDesigns->isEmpty())
            <p>No matching designs found. Try creating a new room or adjusting dimensions!</p>
        @else
            <div class="row">
                @foreach ($matchedDesigns as $design)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ asset('storage/' . $design->image_path) }}" class="card-img-top" alt="{{ $design->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $design->name }}</h5>
                                <p class="card-text">{{ $design->description }}</p>
                                <p><strong>Style:</strong> {{ ucfirst($design->style) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>

