<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Código</title>
    <link rel="stylesheet" href="../Public/css/codigo_verificacion.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="header">
                <h1>Verificar Código</h1>
                <p>Ingresa el código que enviamos a tu email y tu nueva contraseña</p>
            </div>
            
            <form action="../App/Controllers/controller.php" method="POST" class="verification-form">
                <input type="hidden" name="action" value="verificar_codigo_recuperacion">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($_GET['email'] ?? ''); ?>">
                
                <div class="input-group">
                    <label for="codigo">Código de Verificación</label>
                    <input type="text" id="codigo" name="codigo" placeholder="123456" maxlength="6" required>
                    <small>Revisa tu bandeja de entrada y spam</small>
                </div>
                
                <div class="input-group">
                    <label for="password">Nueva Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Nueva contraseña" required>
                </div>
                
                <div class="input-group">
                    <label for="confirm_password">Confirmar Nueva Contraseña</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar contraseña" required>
                </div>
                
                <button type="submit" class="btn-primary">Cambiar Contraseña</button>
                
                <div class="links">
                    <a href="recuperar_password.php" class="link-secondary">Reenviar código</a>
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