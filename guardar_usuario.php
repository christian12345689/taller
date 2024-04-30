<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = md5($password);

    $file = 'usuarios.txt';
    $data = "Nombre de usuario: $username - Contraseña encriptada: $hashed_password\n";

    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "¡Registro exitoso!";
}
?>
