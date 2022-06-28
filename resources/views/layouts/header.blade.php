
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kRtya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="https://app.spline.design/_assets/_icons/icon_favicon16x16.png"
    sizes="16x16">
</head>

<body>
    <nav style="background: rgba(0, 0, 0, 0.7);" class="margin-setter">
        <img src="{{ asset('img/logo.png') }}" alt="">
        <div class="nav-div">
          <i class="fas fa-bars  fa-2x" id="nav-icon"></i>
          <input type="checkbox" class="nav-checkbox">
          <ul class="nav-li-box">
              <li><a href="/home">Home</a></li>
              <li><a href="/shoping">Shopping</a></li>
              <li><a href="/cart">Cart</a></li>
              @if (Session()->has('u_id') OR Session()->has('id'))
              <li><a href="/logout">Log Out</a></li>
              @else
              <li><a href="/login">Log In</a></li>
              <li><a href="/signup">Register</a></li>
              @endif
            </ul>
        </div>
      </nav>