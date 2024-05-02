@extends('layout.template')

@section('title', 'UCAN Guestlist')

@section('content')
    <div class="w-100 h-100">
        <div class="container-fluid">
            <div class="row invitation-background header align-items-center align-middle">
                <div class="col-12">
                    <h1 class="fw-bold countdown-font my-3">Guests</h1>

                    <form action = "{{ route('guestSearch') }}" method = "GET" class = "form-inline w-75 d-flex gap-2 pt-0 pb-3"> 
                        <input class = "form-control" type = "search" name = "search" placeholder = "Search">
                        <button type = "submit" class = "btn btn-outline-success"> Search </button>
                    </form>

                    <div class="table-responsive">
                        <table class="rounded-5 w-100">
                            <thead>
                                <tr>
                                    <th scope="col" >Name</th>
                                    <th scope="col" class = "hide-on-mobile">Email</th>
                                    <th scope="col" class = "hide-on-mobile">NIM</th>
                                    <th scope="col">Presence</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guests as $key => $guest)
                                    <tr>
                                        <td>{{ $guest['name'] }}</td>
                                        <td class = "hide-on-mobile">{{ $guest['email'] }}</td>
                                        <td class = "hide-on-mobile">{{ $guest['nim'] }}</td>
                                        <td>{{ $guest['presence'] == 1 ? 'Yes' : 'No' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>    

                        <!-- Pagination Links -->
                        <div class="pagination-wrapper d-flex justify-content-end my-3">
                            {{ $guests->links('pagination::bootstrap-5') }} <!-- Ensure correct pagination view -->
                        </div>
                    </div>
                    </div>

                    <h1 class="fw-bold countdown-font my-3"> VIPs </h1>

                    <form action = "{{ route('vipSearch') }}" method = "GET" class = "form-inline w-75 d-flex gap-2 pt-0 pb-3"> 
                        <input class = "form-control" type = "search" name = "search" placeholder = "Search">
                        <button type = "submit" class = "btn btn-outline-success"> Search </button>
                    </form>

                    <div class="table-responsive">
                        <table class="rounded-5 w-100">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col" class = "hide-on-mobile">Email</th>
                                    <th scope="col" class = "hide-on-mobile">NIM</th>
                                    <th scope="col">Presence</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($VIPs as $key => $guest)
                                    <tr>
                                        <td>{{ $guest['name'] }}</td>
                                        <td class = "hide-on-mobile">{{ $guest['email'] }}</td>
                                        <td class = "hide-on-mobile">{{ $guest['nim'] }}</td>
                                        <td>{{ $guest['presence'] == 1 ? 'Yes' : 'No' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection