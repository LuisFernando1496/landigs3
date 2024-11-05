<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Notification</title>
</head>
<body>
    <h1>Envío de nuevo formulario de contacto</h1>
    <p>Has recibido un nuevo mensaje desde la sección de contacto de tu página web. A continuación, se presentan los detalles del mensaje:</p>
    <br/>
    <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
    <p><strong>Correo:</strong> {{ $details['email'] }}</p>
    <p><strong>Telefono:</strong> {{ $details['phone_number'] }}</p>
    <p><strong>Mensaje:</strong> {{ $details['message'] }}</p>
</body>
</html>
