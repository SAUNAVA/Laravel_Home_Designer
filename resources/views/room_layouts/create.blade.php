<x-app-layout>
    <div class="container mt-5">
        <h2 class="mb-4">Create Room Layout</h2>

        <form method="POST" action="{{ route('room-layouts.store') }}" class="card p-4 shadow-sm">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Room Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Room Name" required>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="length" class="form-label">Length (ft)</label>
                    <input type="text" name="length" id="length" class="form-control" placeholder="Length" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="width" class="form-label">Width (ft)</label>
                    <input type="text" name="width" id="width" class="form-control" placeholder="Width" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="height" class="form-label">Height (ft)</label>
                    <input type="text" name="height" id="height" class="form-control" placeholder="Height" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="style" class="form-label">Room Style</label>
                <select name="style" id="style" class="form-select" required>
                    <option value="">Select Style</option>
                    <option value="Modern">Modern</option>
                    <option value="Vintage">Vintage</option>
                    <option value="Minimalist">Minimalist</option>
                    <option value="Rustic">Rustic</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Layout</button>
            {{-- <a href="{{ route('room.matches', $room->id) }}" class="btn btn-primary">Find Designs</a> --}}

        </form>
    </div>
</x-app-layout>
