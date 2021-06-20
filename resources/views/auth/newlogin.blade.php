<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_boostrap/bootstrap3/admin.css')}}">
</head>

<body class="back-log">
<form action="" name="myForm" method="post" onsubmit="return validateform()"></form>
<div class="modallogin2">
    <div class="modallogin">
        <center>
            <div class="">
                <h1 class="jo">Login</h1>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input id="nama_pegawai" class="logbox" type="text" placeholder="Username"
                       name="nama_pegawai" value="{{ old('email') }}">
                <input id="password" class="logbox" type="password"
                       name="password" placeholder="Password">
                <button type="submit" class="logbu" style="width: 80%;color: white;border: none">
                    {{ __('Login') }}
                </button>
            </form>


        </center>
    </div>
</div>
</body>

@if(session()->has('error'))
    <script>
        alert("{{session()->get('error')}}");
    </script>
@endif

</html>


