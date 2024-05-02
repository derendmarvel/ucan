<?php
    $baseDir = 'C:/Users/YOGA 720/ucan/public/images';
    $relativePath = 'PDF Background.jpg';
    $absolutePath = $baseDir . '/' . $relativePath;
    $relativePath2 = 'Watermark - 2.png';
    $absolutePath2 = $baseDir . '/' . $relativePath2;

    $data = file_get_contents($absolutePath);
    $base64 = 'data:image/' . pathinfo($relativePath, PATHINFO_EXTENSION) . ';base64,' . base64_encode($data);

    $data2 = file_get_contents($absolutePath2);
    $watermark = 'data:image/' . pathinfo($relativePath2, PATHINFO_EXTENSION) . ';base64,' . base64_encode($data2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Invitation </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        @page {
            size: A4;
            margin: 1in;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        body{
            font-size: 24px;
            color: white;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-left: 40px;
            padding-right: 40px;
        }
        * {
            margin: 0;
            padding: 0;
        }
        .margin-1{
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .margin-2{
            margin-top: 100px;
        }
        .margin-3{
            margin-top: 150px;
            margin-bottom: 200px;
        }
    </style>

</head>

<body>
    <div style="background-image: url('<?php echo $base64?>'); height: 100%; background-size: cover;">
        <div class = "content">
            <div class = "pt-5">
                <div class = "d-flex justify-content-center">
                    <img src = "<?php echo $watermark?>" style = "max-width: 25%;" class = "text-center">
                </div>
            </div>
            
            <div class = "pt-3 mt-5 px-5 justify-content-center align-items-center align-middle">
                <p class = "text-center margin-1"> Welcome to UCAN 2024 </p>
                <p class = "text-center margin-1"> Dear Mr/Mrs  </p>
                <p class = "text-center margin-2"> {{ $user['name'] }} </p>
                <p class = "text-center margin-3"> Thank you for your willingness to fill out the RSVP invitation of UCAN 2024. UCAN is Universitas Ciputra Awarding Night, a celebration of student organizations at Universitas Ciputra Surabaya. Please attend this starry night on Wednesday,  June 5 2024. We look forward to your presence. </p>
                <p class = "text-center"> Best Regards, </p>
                <p class = "text-center"> Universitas Ciputra Awarding Night 2024 </p>
            </div>
                
        </div>
    </div>
</body>
</html>