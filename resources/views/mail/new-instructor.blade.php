<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            color: #313131;
        }
    </style>
</head>
<body>
<h1><strong>{{$user->name}}</strong></h1>
<p>Starking7 te agrego como instructor, puedes acceder a tu cuenta desde:</p>
<p><a href="http://starking7.nu/instructor/courses">http://starking7.nu/instructor/courses</a></p>
<p>Usuario: {{$user->email}}</p>
<p>Contraseña: {{$password}} (puede cambiar su contraseña desde su perfil)</p>
<p>*** Se te asignará tus cursos. También puedes crear cursos nuevos y solicitar que se publiquen.</p>
<p>Gracias por unirte a la familia Starking7</p>
</body>
</html>
