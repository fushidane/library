
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
            background-image: url('https://i.etsystatic.com/23641280/r/il/c13ee5/2668603261/il_1140xN.2668603261_r1kj.jpg');
            background-size: cover; /* Adjusts the size of the background image */
            background-position: center; /* Positions the background image */
             /* Additional styles for the container */
            width: 100%;
            height: 100vh;
        }




        .logo {
            color: #ffffff;
            font-size: 1.5em;
        }
        h1 {
        color: rgb(232, 248, 10);
           }


        .nav-list {
            list-style: none;
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-list li {
            margin-right: 20px;
        }

        .nav-list a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav-list a:hover {
            color: #ff8c00;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: rgba(20, 20, 20, 0.5);">


        <h1>Dane's Library  System</h1>

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
