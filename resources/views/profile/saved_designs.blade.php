<x-app-layout>
    <div class="container mt-5">
        <h2 class="mb-4">Saved Designs</h2>

        <div class="row">
            @forelse ($savedDesigns as $design)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($design->image_path)
                            <img src="{{ asset('storage/' . $design->image_path) }}" class="card-img-top" alt="{{ $design->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $design->name }}</h5>
                            <p class="card-text">{{ $design->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>You have not saved any designs yet!</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
