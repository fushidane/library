
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finally</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <style>
    body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://c4.wallpaperflare.com/wallpaper/262/774/423/space-stars-nebula-tylercreatesworlds-wallpaper-preview.jpg');
            background-size: cover; /* Adjusts the size of the background image */
            background-position: center; /* Positions the background image */
             /* Additional styles for the container */
            width: 100%;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #e3e321;
            padding: 20px;

        }

        .container {
            text-align: right;
            margin-top: 20px;
            margin-bottom: 20px;

        }

}
.jumbotron {
  background-color: #212122;
  padding: 20px;
  border-radius: 10px;
 
}
        .btn-primary {
  --bs-btn-color: #fff;
  --bs-btn-bg: #553b35;
  --bs-btn-border-color: #0d0d0e;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #121212;
  --bs-btn-hover-border-color: #818182;
  --bs-btn-focus-shadow-rgb: 49,132,253;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #626365;
  --bs-btn-active-border-color: #848586;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #2a2d30;
  --bs-btn-disabled-border-color: #822f0c;
}

        .nav {
            display: flex;
            justify-content: center;
            background-color: #b8545405;
            padding: 10px 0;
            border-top: 2px solid #f6f2f2;
            border-bottom: 2px solid #faefef;
            border-right: 2px solid #f6efef;
            border-left: 2px solid #f9eeee;
        }

        .nav-item {
            margin: 0 15px;
        }

        .nav-link {
            text-decoration: none;
            color: #f1ecec;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #fdfd9e;
        }

        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: var(--bs-nav-pills-link-active-color);
            background-color: #131313;
            border-top: #000000;
            border-bottom:#000000;
            border-left:#000000;
            border-right:#000000;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: rgba(225, 221, 221, 0);">


        <ul class="nav justify-content-end float-right nav-pills">

            <li class="nav-item">
                <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('users') ? 'active' : ''}}" href="{{url('/users')}}">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('books') ? 'active' : ''}}" href="{{url('/books')}}">Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('borrowedbooks') ? 'active' : ''}}" href="{{url('/borrowedbooks')}}">Borrowed Books</a>
            </li>

        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>
