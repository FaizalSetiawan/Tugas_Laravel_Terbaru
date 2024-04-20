<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
        }
        .detail {
            margin-bottom: 10px;
        }
        .detail span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BioData</h1>
        <div class="detail">
            <span>Nama:</span> {{$nama}}
        </div>
        <div class="detail">
            <span>Jenis Kelamin:</span> {{$jenis_kelamin}}
        </div>
        <div class="detail">
            <span>Pendidikan Terakhir:</span> {{$pendidikan_terakhir}}
        </div>
        <div class="detail">
            <span>Pekerjaan:</span> {{$pekerjaan}}
        </div>
    </div>
</body>
</html>
