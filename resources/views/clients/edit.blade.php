<x-admin-layout>

    <form action="{{ route('clients.destroy', $client->id )}}" method="POST">

        @csrf
        @method('DELETE')
        <button class="btn btn-danger float-end mb-2" type="submit">Delete</button>

    </form>

    <div class="col-lg-12">
        </form>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Product</h5>
                <form action="{{ route('clients.update', $client->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="col-md-6 mb-2">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                            id="first_name" value="{{ $client->first_name}}">
                            @error('first_name')
                                <div class="invlid-feedback">{{ $message}}</div>

                            @enderror

                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" id="last_name" value="{{ $client->last_name}}">
                            @error('last_name')
                            <div class="invlid-feedback">{{ $message}}</div>

                        @enderror

                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="date_of_birth" class="form-label">Birth Day</label>
                        <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                            name="date_of_birth" id="date_of_birth" value="{{ $client->date_of_birth}}">
                            @error('date_of_birth')
                            <div class="invlid-feedback">{{ $message}}</div>

                        @enderror

                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="phone_number" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                            name="phone_number" id="phone_number" value="{{ $client->phone_number}}">
                            @error('phone_number')
                            <div class="invlid-feedback">{{ $message}}</div>

                        @enderror

                    </div>


                    <div class="col-md-6 mb-2">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                            name="address" id="address" value="{{ $client->address}}">
                            @error('address')
                            <div class="invlid-feedback">{{ $message}}</div>

                        @enderror

                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="points" class="form-label">Points</label>
                        <input type="number" class="form-control @error('points') is-invalid @enderror"
                            name="points" id="points" value="{{ $client->points}}">
                            @error('points')
                            <div class="invlid-feedback">{{ $message}}</div>

                        @enderror

                    </div>


                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-admin-layout>
