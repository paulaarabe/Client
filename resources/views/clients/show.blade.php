<x-admin-layout>
    <div class="col-12">
        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary float-end mb-2 "><i
                class="bi bi-pencil me-1"></i>
            Edit</a>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Client Details</h5>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">First Name</div>
                    <div class="col-lg-9 col-md-8">{{ $client->first_name }}</div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Last Name</div>
                    <div class="col-lg-9 col-md-8">{{ $client->last_name }}</div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Birthday</div>
                    <div class="col-lg-9 col-md-8">Php {{ $client->date_of_birth }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Mobile Number</div>
                    <div class="col-lg-9 col-md-8">Php {{ $client->phone_number }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Address</div>
                    <div class="col-lg-9 col-md-8">Php {{ $client->address }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Points</div>
                    <div class="col-lg-9 col-md-8">Php {{ $client->points }}</div>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
