<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Available Designs</h3>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($designs as $design)
                            <div class="col">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="{{ url('storage/' . $design->image_path) }}" class="card-img-top" alt="{{ $design->name }}" style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $design->name }}</h5>
                                        <p class="card-text text-muted">{{ Str::limit($design->description, 100) }}</p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <form method="POST" action="{{ route('designs.save', $design->id) }}" >
                                            @csrf
                                            <button type="submit" class="btn btn-success">Save Design</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>