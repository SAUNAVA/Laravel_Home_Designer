{{-- filepath: c:\Users\souvi\OneDrive\Desktop\Home_Designer Project\interiordesigner\resources\views\profile\saved_designs.blade.php --}}
<x-app-layout>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Saved Designs</h2>

        <div class="row">
            @forelse ($savedDesigns as $design)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        @if($design->image_path)
                            <img src="{{ asset('storage/' . $design->image_path) }}" class="card-img-top rounded" alt="{{ $design->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $design->name }}</h5>
                            <p class="card-text text-muted">{{ $design->description }}</p>
                            <form action="{{ route('designs.destroy', $design->id) }}" method="POST" class="mt-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">You have not saved any designs yet!</p>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>