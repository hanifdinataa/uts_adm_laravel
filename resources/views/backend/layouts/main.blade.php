    <!doctype html>
    <html lang="en" data-bs-theme="auto">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard Template</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


        <!-- Custom styles for this template -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">


        <!-- Custom styles for this template -->
        <link href="/css/dashboard.css" rel="stylesheet">
        <style>
            * {
                 font-family: 'Times New Roman'; 
            }
        </style>

    </head>

    <body>

        @include('backend.layouts.header')


        <div class="container-fluid">
            <div class="row">


                @include('backend.layouts.sidebar')

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @if (Session::has('success'))
                        <div class="pt-3">
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                    @endif
                    @yield('content')

                </main>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>