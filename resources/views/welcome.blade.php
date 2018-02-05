<html>
<head>
    <title>Prueba</title>
</head>
<body>

<form action="add" method="post">
    {{ csrf_field() }}
    <p>Usuario</p>
    <input id="usuario" type="text">
    <p>Contraseña</p>
    <input id="contraseña" type="password">
    <button type="submit">Registrar</button>
</form>

</body>
</html>