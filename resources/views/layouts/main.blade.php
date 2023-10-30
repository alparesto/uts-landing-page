<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Alfamart Unversity</title>
    <link rel="icon" href="{{ asset('assets/img/symbiote2.jpg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <style>

        body {
          font-family: 'Open Sans', sans-serif;
            overflow-x: hidden;
            -ms-overflow-style: none;  /* IE and Edge */
          scrollbar-width: none;  /* Firefox */
        }

        body::-webkit-scrollbar {
          display: none;
        }

        /* navbar */

        .btn:focus {
            outline: none !important;
            box-shadow: none;
        }

        .berita-dan-pengumuman li a:hover {
          color: #FFDD00;
        }
        

    </style>
  </head>
  <body>

    @include('partials.navbar')

    <div class="content mt-3">
        @if ( isset($on) )
          <div class="row position-relative align-items-center" style="translate: 0, -150%;  z-index: 1000;">
            <div class="col-md-12 mb-5 mx-5">
                <span class="text-black mb-5">Universitas Indonesia <i class="mx-2 fa fa-angle-right"></i>  <span style="color: #FFDD00;">{{ $on }}:</span></span>
            </div>
        
            @if ( !request()->url('/berita') )
              <div class="col-md-12 mt-5 mb-5 mx-5">
                <span class="text-black">This post is also available in: <span style="color: #FFDD00;">English</span></span>
              </div>
            @endif
        
            {{-- <div class="col-md-5"><h2 class="fw-bold">Layanan Akademik Universitas</h2></div>
            <div class="col-md-7" style="width: 55%; height: 3px; background: #FFDD00;"></div> --}}
        </div>
        @endif
        

        @yield('content')
    </div>

    @include('partials.footer')


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>