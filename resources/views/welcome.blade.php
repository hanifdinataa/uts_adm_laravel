<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #001f3f; /* Warna biru dongker */
            overflow: hidden;
            position: relative;
        }
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        h1 {
            font-size: 2.5em;
            color: #333;
            font-family: 'Georgia', serif; /* Font yang lebih menarik */
        }
        p {
            font-size: 1.2em;
            color: #666;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #28a745; /* Warna hijau */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn:hover {
            background-color: #218838; /* Warna hijau lebih gelap */
            transform: scale(1.05); /* Efek zoom */
        }
        .flowers {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/flowers.png') repeat;
            animation: moveFlowers 30s linear infinite;
            z-index: 0;
        }
        @keyframes moveFlowers {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 1000px 1000px;
            }
        }

        /* Responsif untuk perangkat lebih kecil */
        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }
            p {
                font-size: 1em;
            }
            .btn {
                padding: 8px 16px;
                font-size: 0.9em;
            }
        }
    </style>

</head>
<body>
    <div class="flowers"></div>
    <div class="container">
        <h1>Halo! Selamat datang di Laravel saya</h1>
        <p>Silahkan Tekan tombol di bawah untuk mengakses web Laravel-nya</p>
        <a class="btn" href="/home">Masuk</a>
    </div>
</body>
</html>
