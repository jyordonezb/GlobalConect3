<?php
// 2.1. Conexión a la base de datos
$servername = "localhost";
$username = "root";  // Usa tu nombre de usuario en phpMyAdmin
$password = "";      // Si tienes contraseña, ponla aquí
$dbname = "voluntarios_db";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// 2.2. Procesar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $departamento = $_POST['departamento'];
    $nivel_educativo = $_POST['nivel'];
    $email = $_POST['email'];
    $telefono = $_POST['tel'];

    // 2.3. Validar que todos los campos estén llenos
    if (empty($nombre) || empty($edad) || empty($genero) || empty($departamento) || empty($nivel_educativo) || empty($email) || empty($telefono)) {
        echo "Por favor, completa todos los campos.";
    } else {
        // 2.4. Preparar la consulta SQL para insertar los datos en la base de datos
        $sql = "INSERT INTO registro_voluntarios (nombre, edad, genero, departamento, nivel_educativo, email, telefono)
                VALUES ('$nombre', '$edad', '$genero', '$departamento', '$nivel_educativo', '$email', '$telefono')";

        if ($conn->query($sql) === TRUE) {
            // 2.5. Redirigir a la página de "Gracias" o la página principal
            header("Location: graciasvoluntarios.html");  // Reemplaza con tu página de agradecimiento
            exit;  // Es importante hacer exit después de la redirección
        } else {
            echo "Error al registrar: " . $conn->error;
        }
    }
}

// Cerrar la conexión
$conn->close();
?>