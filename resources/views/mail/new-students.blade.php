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
<p>Starking7 te registro como estudiante al curso de <strong>{{$course_name}}</strong>, puedes acceder a tu cuenta desde:</p>
<p><a href="http://admin.starking7.com/students">http://admin.starking7.com/students</a></p>
<p>Usuario: {{$user->email}}</p>
<p>Contraseña: {{$password}} (puede cambiar su contraseña desde su perfil)</p>
<p>*** Cuando su certificación este disponible podrá descargarlo. Utilice su certificado link para poder mostrar a otras personas.</p>
<p>Gracias por unirte a la familia Starking7</p>
</body>
</html>
