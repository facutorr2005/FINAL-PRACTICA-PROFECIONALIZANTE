<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="../Public/css/recuperar_password.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="header">
                <h1>Recuperar Contraseña</h1>
                <p>Ingresa tu email para recibir un código de verificación</p>
            </div>
            
            <form action="../App/Controllers/controller.php" method="POST" class="recovery-form">
                <input type="hidden" name="action" value="enviar_codigo_recuperacion">
                
                <div class="input-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" placeholder="tu@email.com" required>
                </div>
                
                <button type="submit" class="btn-primary">Enviar Código</button>
                
                <div class="links">
                    <a href="login.php" class="link-secondary">Volver al Login</a>
                </div>
            </form>
            
            <!-- Mostrar mensajes de error o éxito -->
            <?php if (isset($_SESSION['mensaje'])): ?>
                <div class="mensaje <?php echo $_SESSION['tipo_mensaje']; ?>">
                    <?php 
                        echo $_SESSION['mensaje']; 
                        unset($_SESSION['mensaje'], $_SESSION['tipo_mensaje']);
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>