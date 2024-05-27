@extends('layout.template')

@section('title', 'Attendance')

@section('content')
<div class="row invitation-background login-section align-items-center align-middle"></div>
    <form action="{{ route('attendance.check') }}" method="POST">
        @csrf
        @method('post')
        <label for="qr_code"> Scan QR Code: </label>
        <input type="text" id="qr_code" name="qr_code" autofocus>
        <button type="submit">Check Attendance</button>
    </form>
</div>

@endsection