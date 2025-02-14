function openModal(modalId) {
    document.getElementById(modalId).style.display = "flex";
    document.body.style.overflow = "hidden"; // Bloquea el scroll de la página
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
    document.body.style.overflow = ""; // Restaura el scroll de la página
}

// Cerrar modal al hacer clic fuera del contenido
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".modal").forEach((modal) => {
        modal.addEventListener("click", function (e) {
            if (!e.target.closest(".modal-content")) {
                modal.style.display = "none";
                document.body.style.overflow = "";
            }
        });
    });
});

// Evaluación del Test
function evaluarTest() {
    const respuestasCorrectas = {
        q1: "B",  // Un espacio en la memoria donde se almacenan datos
        q2: "B",  // for i in range(5):
        q3: "B",  // Una plantilla o molde para crear objetos
        q4: "A"   // Abstracción
    };

    let resultadoHTML = "<h3>Resultados:</h3>";
    let respuestasUsuario = document.querySelectorAll("#test-form input[type='radio']:checked");
    let correctas = 0, incorrectas = 0;

    document.querySelectorAll(".question").forEach((pregunta) => {
        let inputSeleccionado = pregunta.querySelector("input[type='radio']:checked");
        let nombrePregunta = inputSeleccionado ? inputSeleccionado.name : null;
        let respuestaUsuario = inputSeleccionado ? inputSeleccionado.value : null;

        if (nombrePregunta) {
            if (respuestasCorrectas[nombrePregunta] === respuestaUsuario) {
                resultadoHTML += `<p class="correct">✔ Pregunta ${nombrePregunta.substring(1)} correcta</p>`;
                correctas++;
            } else {
                resultadoHTML += `<p class="incorrect">✘ Pregunta ${nombrePregunta.substring(1)} incorrecta (Respuesta correcta: ${respuestasCorrectas[nombrePregunta]})</p>`;
                incorrectas++;
            }
        }
    });

    if (respuestasUsuario.length < Object.keys(respuestasCorrectas).length) {
        resultadoHTML += "<p class='incorrect'>⚠ Responde todas las preguntas antes de enviar.</p>";
    } else {
        resultadoHTML += `<p>Total correctas: <strong>${correctas}</strong></p>`;
        resultadoHTML += `<p>Total incorrectas: <strong>${incorrectas}</strong></p>`;
    }

    document.getElementById("test-result").innerHTML = resultadoHTML;
}

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("contact-form").addEventListener("submit", function (event) {
        event.preventDefault(); // Evita la recarga de la página
        
        // Simulación de envío exitoso
        document.getElementById("confirmation-message").style.display = "block";

        // Opcional: Limpiar el formulario después de enviarlo
        document.getElementById("contact-form").reset();

        // Ocultar el mensaje después de 5 segundos
        setTimeout(() => {
            document.getElementById("confirmation-message").style.display = "none";
        }, 5000);
    });
});

function toggleMenu() {
    document.querySelector("nav ul").classList.toggle("show");
}

