<!DOCTYPE html>
<html lang="en">
    <head>
        <title>QLSV</title>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        <!-- CSS And JavaScript -->
    </head>

    <body>
       <h3 align="center">Students management</h3>

       @yield('content')
       <footer>
       <ul class="pagination justify-content-center">
           <li class="page-item"><a class="page-link" href="#">Previous</a></li>
           <li class="page-item"><a class="page-link" href="#">1</a></li>
           <li class="page-item"><a class="page-link" href="#">2</a></li>
           <li class="page-item"><a class="page-link" href="#">3</a></li>
           <li class="page-item"><a class="page-link" href="#">Next</a></li>
         </ul>
        </footer>

    </body>
</html>