@extends('layouts.main')

@section('content')
    {{-- <h1 class="mt-5">Sticky footer with fixed navbar</h1>
<p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and
    CSS. A fixed navbar has been added with <code class="small">padding-top: 60px;</code> on the <code
        class="small">main &gt; .container</code>.</p>
<p>Back to <a href="/docs/5.3/examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        

        .cont {
            background-color: bisque;
            padding: 100px;
            margin-top: 20px;
            margin-bottom: 20px;
            display: flex;
            border-radius: 15px; /* Membuat sudut melengkung */
            transition: background-color 0.3s, box-shadow 0.3s; /* Efek transisi */
        }

        .cont:hover {
            background-color: rgb(255, 197, 89); /* Mengubah warna saat di-hover */
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
        }

        .ba {
            margin-top: 100px;
        }

        .ga {
            padding-top: 20px;
        }

        .non {
            list-style: none;
            font-size: 30px;
            transition: transform 0.3s;
            font-family: 'Times New Roman', Times, serif;
            transition: 0.2s;
            color: rgb(0, 0, 0);

        }
        .non:hover {
            color: rgb(34, 33, 33);
        }

        .non:hover {
            transform: translateX(10px); /* Geser ke kanan */
        }

        .image {
            width: 250px;
            height: 450px;
            /* transition: transform 0.3s; Animasi untuk foto */
            box-shadow: 0.3s;
            transition: 0.2s;
        }

        .image:hover {
            /* transform: translateX(10px); Geser ke kanan */
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2);
            transition: 0.2s;
        }
    </style>
</head>

<body>
    <div class="cont">
        <div class="ga">
            <img src="img/hanif.jpg" class="image" alt="Foto Hanif">
        </div>
        <div class="tab">
            <ul class="ba">
                <li class="non">Hai! Nama saya Hanif Dinata. Saya mahasiswa jurusan Teknologi Informasi, program studi D-3 Teknik Komputer di Politeknik Negeri Padang. Saya memiliki minat di bidang Frontend development dan desain. Intinya, saya suka hal-hal yang berkaitan dengan media dan kreativitas. Senang bisa berbagi dan belajar bersama!</li>
            </ul>
        </div>
    </div>
</body>

</html>

@endsection
