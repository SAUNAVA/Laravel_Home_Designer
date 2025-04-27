<x-app-layout>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="mb-4 text-center text-primary">Design Your Dream Room Layout</h2>
            <p class="text-center text-muted">Fill out the details below to create a personalized room layout.</p>

            <form method="POST" action="{{ route('room-layouts.store') }}" class="mt-4">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Room Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Room Name" required>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="length" class="form-label fw-bold">Length (ft)</label>
                        <input type="text" name="length" id="length" class="form-control" placeholder="Length" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="width" class="form-label fw-bold">Width (ft)</label>
                        <input type="text" name="width" id="width" class="form-control" placeholder="Width" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="height" class="form-label fw-bold">Height (ft)</label>
                        <input type="text" name="height" id="height" class="form-control" placeholder="Height" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="style" class="form-label fw-bold">Room Style</label>
                    <select name="style" id="style" class="form-select" required>
                        <option value="" disabled selected>Select Style</option>
                        <option value="Modern">Modern</option>
                        <option value="Vintage">Vintage</option>
                        <option value="Minimalist">Minimalist</option>
                        <option value="Rustic">Rustic</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Create Room Layout</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>