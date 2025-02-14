<section id="contacto" class="contacto">
    <h2>Contacto</h2>
    <p>Si tienes dudas o aportes, contáctanos llenando el siguiente formulario.</p>
    <br>

    <form id="contact-form" class="contact-form">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" rows="4" placeholder="Escribe tu mensaje" required></textarea>

        <button type="submit" class="btn">Enviar Mensaje</button>
    </form>

    <!-- Mensaje de confirmación -->
    <div id="confirmation-message" style="display: none; color: #00D4AA; font-weight: bold; margin-top: 10px;">
        ✅ ¡Mensaje enviado correctamente!
    </div>
</section>
