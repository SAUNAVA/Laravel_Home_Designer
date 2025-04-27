<x-app-layout>
    <div class="container mt-5">
        <h2 class="mb-4">Designs Matching Your Room</h2>

        <div class="row">
            @forelse ($designs as $design)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $design->name }}</h5>
                            <p class="card-text">{{ $design->description }}</p>
                            <p class="text-muted">
                                {{ $design->style }} style | {{ $design->length }}x{{ $design->width }}x{{ $design->height }} ft
                            </p>
                            <div class="card" style="width: 18rem;">
                                <img src="{{ url('storage/' . $design->image_path) }}" class="card-img-top" alt="{{ $design->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $design->name }}</h5>
                                    <p class="card-text">{{ $design->description }}</p>
                                    <p class="card-text"><small class="text-muted">Style: {{ ucfirst($design->style) }}</small></p>
                                </div>
                            </div>

                            <form method="POST" action="{{ route('designs.save', $design->id) }}" >
                                @csrf
                                <button type="submit" class="btn btn-success">Save Design</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p>No designs match your room layout. Try creating a different layout!</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
