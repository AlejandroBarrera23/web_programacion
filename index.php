<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <link rel="stylesheet" href="assets/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programo y Aprendo</title>
</head>
<body>

    <!-- llamar a navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Seccion Hero -->
    <section id="hero" class="hero">
        <div class="hero-content">
            <h2>¡Aprende a Programar!</h2>
            <p>En Programo y Aprendo, te ayudamos a desarrollar habilidades en programación desde cero. Explora nuestros recursos y aprende todo sobre programación.</p>
            <a href="#introduccion" class="btn">¡Comenzar ahora!</a>
        </div>
    </section>

    
    <!-- Llamar a introduccion -->
    <?php include 'pages/introduccion.php'; ?>

    <!-- Llamar al menu tipo galeria -->
    <?php include 'pages/menu_galeria.php'; ?>

    <!-- Llamar al test-evaluacion -->
    <?php include 'pages/evaluacion.php'; ?>

    <!-- Llamar al formulario de contacto -->
    <?php include 'pages/contacto.php'; ?>

    <!-- Llamar al footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Llamar a los 4 modales -->
    <?php include 'includes/modals.php'; ?>

    <script src="assets/scripts.js"></script>
</body>
</html>
