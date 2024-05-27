<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestlist</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed; /* Ensures consistent column widths */
        }
        th, td {
            padding: 10px; /* Adjust the spacing as needed */
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        th:nth-child(1), td:nth-child(1) {
            width: 20%; /* Adjust the width as needed */
        }
        th:nth-child(2), td:nth-child(2) {
            width: 30%; /* Adjust the width as needed */
        }
        th:nth-child(3), td:nth-child(3) {
            width: 20%; /* Adjust the width as needed */
        }
        th:nth-child(4), td:nth-child(4) {
            width: 10%; /* Adjust the width as needed */
        }
    </style>
</head>

<body>
    <table>
        <h1 style = "padding-bottom: 10px;"> Guests </h1>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">NIM</th>
                <th scope="col">Presence</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guests as $key => $guest)
                <tr>
                    <td>{{ $guest['name'] }}</td>
                    <td>{{ $guest['email'] }}</td>
                    <td>{{ $guest['nim'] }}</td>
                    <td>{{ $guest['presence'] == 1 ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table>
        <h1 style = "padding-bottom: 10px;"> VIPs </h1>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">NIK</th>
                <th scope="col">Presence</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($VIPs as $key => $guest)
                <tr>
                    <td>{{ $guest['name'] }}</td>
                    <td>{{ $guest['email'] }}</td>
                    <td>{{ $guest['nim'] }}</td>
                    <td>{{ $guest['presence'] == 1 ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>