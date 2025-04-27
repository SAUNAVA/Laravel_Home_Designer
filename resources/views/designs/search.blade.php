<x-app-layout>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Designs Matching Your Room</h2>

        <div class="row">
            @forelse ($designs as $design)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ url('storage/' . $design->image_path) }}" class="card-img-top rounded-top" alt="{{ $design->name }}">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $design->name }}</h5>
                            <p class="card-text text-muted">{{ $design->description }}</p>
                            <p class="text-muted">
                                <strong>Style:</strong> {{ ucfirst($design->style) }} <br>
                                <strong>Dimensions:</strong> {{ $design->length }}x{{ $design->width }}x{{ $design->height }} ft
                            </p>
                            <form method="POST" action="{{ route('designs.save', $design->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-success w-100">Save Design</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">No designs match your room layout. Try creating a different layout!</p>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>