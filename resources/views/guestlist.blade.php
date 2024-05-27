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
                                        <td>
                                            <a href = "/manualCheck/{{$guest->id}}"> <img src = "/images/X.png" class = "btn-size"> </a>
                                            <a href = "/uncheck/{{$guest->id}}"> <img src = "/images/X-1.png" class = "btn-size"> </a>
                                        </td>
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
                                    <th scope="col" class = "hide-on-mobile">NIK</th>
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
                                        <td>
                                            <a href = "/manualCheck/{{$guest->id}}"> <img src = "/images/X.png" class = "btn-size"> </a>
                                            <a href = "/uncheck/{{$guest->id}}"> <img src = "/images/X-1.png" class = "btn-size"> </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <form id = "qrForm" action="{{ route('attendanceCheck') }}" method="POST" class = "mt-3">
                        @csrf
                        @method('post')
                        <!-- <label for="qr_code"> Scan QR Code: </label> -->
                        <input class = "form-control" type = "text" name = "qr_code" id="qr_code" style="display:none;">
                        <!-- <button type="submit" class = "btn btn-white">Check Attendance</button> -->
                    </form>
                    <div class = "col-12 text-center">
                        <a class="btn btn-white w-50 py-3 px-2 px-md-5 fw-bold rounded-0 my-3" href = "/allguests"> DOWNLOAD GUESTLIST </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const qrInput = document.getElementById('qr_code');

            // Automatically focus on the input field
            qrInput.focus();

            let buffer = '';

            // Add a keydown event listener to the window
            window.addEventListener('keydown', (e) => {
                // Check if the key is not the Enter key
                if (e.key !== 'Enter') {
                    buffer += e.key;
                } else {
                    // When Enter key is pressed, set the input value and submit the form
                    qrInput.value = buffer;
                    document.getElementById('qrForm').submit();
                    buffer = ''; // Reset the buffer
                }
            });

            // Re-focus on the input field whenever the form is submitted
            document.getElementById('qrForm').addEventListener('submit', () => {
                qrInput.focus();
            });
        });
    </script>
@endsection