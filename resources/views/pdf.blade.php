<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Invitation </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Arial', sans-serif;
            padding: 0;
            margin: 0;
        }    
    </style>

</head>

<body>
    <div class = "position-absolute top-0 start-50 translate-middle opacity-50">
        <p class = "text-center"> {{ $user['nim'] }} - {{ $user['name'] }} </p>
    </div>
    <div class = "justify-content-center mt-2">
        <div>
            <h1 class = "text-center fw-bold fs-1"> Universitas Ciputra Awarding Night </h1>
            <h2 class = "text-center fw-bold fs-3"> Invitation </h2>
        </div>
        
        <div class = "my-5 px-5">
            <p> Dear {{ $user['name'] }}, </p>
            <p> You have been invited to Universitas Ciputra's Awarding 2024 as a welcome VIP (Very Important Person) Lorem ipsum aoidaoeawd sopaopwdja. </p>
        </div>
            
    </div>
</body>
</html>