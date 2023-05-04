<x-admin-layout>


    <div class="col-lg-12">
        <a href="{{ route('clients.create') }}" class="btn btn-primary float-end mb-2"><i class="bi bi-plus me-1"></i>
            Create</a>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Clients</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Points</th>
                            <th scope="col">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->first_name }}</td>
                            <td>{{ $client->last_name  }}</td>
                            <td>{{ $client->date_of_birth  }}</td>
                            <td>{{ $client->phone_number  }}</td>
                            <td>{{ $client->address  }}</td>
                            <td>{{ $client->points  }}</td>
                            <td>

                                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary float-end mb-2"><i class="bi bi-pencil me-1"></i>
                                    Edit</a>

                                <a href="{{ route('clients.show', $client->id) }}" class="btn btn-primary float-end mb-2"><i class="bi bi-eye me-1"></i>
                                    View  </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-admin-layout>
