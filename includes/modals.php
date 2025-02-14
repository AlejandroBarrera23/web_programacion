<!-- Modales -->
<div id="modal-1" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal-1')">&times;</span>
        <h2>Programación Estructurada</h2>
        <p>La Programación Estructurada es un paradigma de programación que se basa en la organización del código en bloques lógicos y estructuras claras. Su objetivo es mejorar la claridad, calidad y facilidad de mantenimiento del código. A continuación, te explicamos los conceptos básicos que necesitas conocer para entender este enfoque.</p>
        
        <h3>Conceptos básicos de la Programación Estructurada</h3>
        <h4>Variables:</h4>
        <p>Una variable es un espacio en la memoria donde almacenamos datos. Estos datos pueden ser números, textos, listas, entre otros. Las variables tienen un nombre único que nos permite acceder a su valor.</p>
        <pre><code>edad = 25
nombre = "Ana"</code></pre>
        
        <h4>Condicionales:</h4>
        <p>Los condicionales nos permiten tomar decisiones en el código. Ejecutan un bloque de instrucciones solo si se cumple una condición específica.</p>
        <pre><code>if edad >= 18:
    print("Eres mayor de edad.")
else:
    print("Eres menor de edad.")</code></pre>
        
        <h4>Bucles:</h4>
        <p>Los bucles permiten repetir un bloque de código varias veces. Hay dos tipos principales:</p>
        
        <h5>Bucles for:</h5>
        <pre><code>for i in range(5):
    print("Iteración:", i)</code></pre>
        
        <h5>Bucles while:</h5>
        <pre><code>contador = 0
while contador < 5:
    print("Contador:", contador)
    contador += 1</code></pre>
        
        <h4>Funciones:</h4>
        <p>Una función es un bloque de código que realiza una tarea específica y puede ser reutilizado. Las funciones ayudan a organizar el código y evitar repetir instrucciones.</p>
        <pre><code>def saludar(nombre):
    print("Hola,", nombre)

saludar("Carlos")</code></pre>
        
        <h3>Ejemplo práctico interactivo</h3>
        <p>A continuación, te presentamos un ejemplo práctico de Programación Estructurada. Puedes modificar el código y ver el resultado en tiempo real.</p>
        <pre><code># Ejemplo: Calculadora simple
def suma(a, b):
    return a + b

def resta(a, b):
    return a - b

def main():
    print("Bienvenido a la calculadora simple")
    num1 = float(input("Ingresa el primer número: "))
    num2 = float(input("Ingresa el segundo número: "))
    operacion = input("Elige la operación (suma/resta): ")

    if operacion == "suma":
        resultado = suma(num1, num2)
    elif operacion == "resta":
        resultado = resta(num1, num2)
    else:
        print("Operación no válida.")
        return

    print("El resultado es:", resultado)

main()</code></pre>
        
        <h4>¡Pruébalo tú mismo!</h4>
        <p>Puedes copiar y pegar este código en un editor de Python en línea (como Replit o PythonTutor) para ver cómo funciona.</p>
        
        <h3>Consejos para aprender Programación Estructurada</h3>
        <ul>
            <li>Empieza con lo básico: Domina los conceptos de variables, condicionales, bucles y funciones antes de avanzar a temas más complejos.</li>
            <li>Practica con ejemplos: Escribe y modifica código para entender cómo funciona cada estructura.</li>
            <li>Organiza tu código: Usa funciones para dividir tu programa en tareas más pequeñas y manejables.</li>
            <li>Depura errores: Aprende a identificar y corregir errores en tu código. Esto es parte fundamental del aprendizaje.</li>
        </ul>
        
        <h3>Recursos adicionales</h3>
        <h4>Libros recomendados:</h4>
        <ul>
            <li><strong>"El lenguaje de programación C"</strong> de Brian W. Kernighan y Dennis M. Ritchie (un clásico sobre programación estructurada).</li>
            <li><strong>"Python Crash Course"</strong> de Eric Matthes (ideal para principiantes).</li>
        </ul>
        
        <h4>Herramientas en línea:</h4>
        <ul>
            <li><strong>Codecademy:</strong> Cursos interactivos de programación.</li>
            <li><strong>FreeCodeCamp:</strong> Tutoriales gratuitos y proyectos prácticos.</li>
        </ul>
    </div>
</div>

<div id="modal-2" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal-2')">&times;</span>
        <h2>Programación Orientada a Objetos</h2>
        <p>La Programación Orientada a Objetos (POO) es un paradigma de programación que organiza el código en "objetos", los cuales representan entidades del mundo real. Estos objetos contienen datos (atributos) y comportamientos (métodos). La POO se basa en cuatro pilares fundamentales: Abstracción, Encapsulación, Herencia y Polimorfismo.</p>
        
        <h3>Definición y conceptos clave</h3>
        <h4>Clases y Objetos:</h4>
        <p>Una clase es una plantilla o molde que define las propiedades y comportamientos de un tipo de objeto. Por ejemplo, una clase <strong>Coche</strong> puede tener atributos como color y velocidad, y métodos como <code>acelerar()</code> y <code>frenar()</code>.</p>
        <p>Un objeto es una instancia de una clase. Por ejemplo, un objeto <code>miCoche</code> de la clase <code>Coche</code> podría tener el color "rojo" y una velocidad de 0 km/h.</p>
        
        <h4>Herencia:</h4>
        <p>La herencia permite crear nuevas clases a partir de clases existentes, reutilizando sus atributos y métodos. Por ejemplo, una clase <code>CocheDeportivo</code> puede heredar de la clase <code>Coche</code> y añadir métodos específicos como <code>turbo()</code>.</p>
        
        <h4>Encapsulación:</h4>
        <p>La encapsulación es el mecanismo que oculta los detalles internos de un objeto y restringe el acceso a sus datos. Esto se logra mediante el uso de modificadores de acceso como <code>private</code>, <code>protected</code> y <code>public</code>.</p>
        
        <h4>Polimorfismo:</h4>
        <p>El polimorfismo permite que un objeto se comporte de múltiples formas. Por ejemplo, un método <code>mover()</code> puede comportarse de manera diferente en una clase <code>Coche</code> y en una clase <code>Avión</code>.</p>
        
        <h3>Ejemplo práctico: Sistema de vehículos</h3>
        <h4>Diagrama UML</h4>
        <pre>
+---------------------+
|      Vehículo       |
+---------------------+
| - color: string     |
| - velocidad: int    |
+---------------------+
| + acelerar(): void  |
| + frenar(): void    |
+---------------------+
        ^
        |
+---------------------+
|       Coche        |
+---------------------+
| - numPuertas: int  |
+---------------------+
| + abrirPuertas(): void |
+---------------------+
        ^
        |
+---------------------+
|  CocheDeportivo    |
+---------------------+
| + turbo(): void    |
+---------------------+
        </pre>
        
        <h4>Código en Python</h4>
        <pre><code># Clase base: Vehículo
class Vehiculo:
    def __init__(self, color, velocidad):
        self.color = color
        self.velocidad = velocidad

    def acelerar(self, incremento):
        self.velocidad += incremento
        print(f"Acelerando. Velocidad actual: {self.velocidad} km/h")

    def frenar(self, decremento):
        self.velocidad -= decremento
        print(f"Frenando. Velocidad actual: {self.velocidad} km/h")

# Clase derivada: Coche
class Coche(Vehiculo):
    def __init__(self, color, velocidad, numPuertas):
        super().__init__(color, velocidad)
        self.numPuertas = numPuertas

    def abrirPuertas(self):
        print(f"Abriendo {self.numPuertas} puertas.")

# Clase derivada: CocheDeportivo
class CocheDeportivo(Coche):
    def turbo(self):
        self.velocidad += 50
        print(f"Turbo activado. Velocidad actual: {self.velocidad} km/h")

# Creación de objetos
miCoche = Coche("Rojo", 0, 4)
miCocheDeportivo = CocheDeportivo("Azul", 0, 2)

# Uso de métodos
miCoche.acelerar(30)
miCoche.abrirPuertas()

miCocheDeportivo.acelerar(50)
miCocheDeportivo.turbo()
miCocheDeportivo.frenar(20)
        </code></pre>
        
        <h3>Consejos para aprender POO</h3>
        <ul>
            <li>Practica con ejemplos reales: Intenta modelar situaciones cotidianas usando clases y objetos.</li>
            <li>Domina los pilares de la POO: Asegúrate de entender bien la abstracción, encapsulación, herencia y polimorfismo.</li>
            <li>Usa diagramas UML: Los diagramas UML te ayudan a visualizar la estructura de tus clases y sus relaciones.</li>
            <li>Revisa código de otros: Analiza proyectos de código abierto para ver cómo aplican la POO en la práctica.</li>
        </ul>
        
        <h3>Recursos adicionales</h3>
        <h4>Libros recomendados:</h4>
        <ul>
            <li><strong>"Python Object-Oriented Programming"</strong> de Steven F. Lott.</li>
            <li><strong>"Head First Object-Oriented Analysis and Design"</strong> de Brett McLaughlin.</li>
        </ul>
        
        <h4>Herramientas en línea:</h4>
        <ul>
            <li><strong>Lucidchart:</strong> Para crear diagramas UML.</li>
            <li><strong>Replit:</strong> Para probar y ejecutar código en línea.</li>
        </ul>
    </div>
</div>

<div id="modal-3" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal-3')">&times;</span>
        <h2>Recursos Recomendados</h2>
        <p>A continuación, te presentamos una lista de recursos recomendados para profundizar en el aprendizaje de la POO. Estos recursos incluyen libros, artículos, canales de YouTube y herramientas en línea.</p>
        
        <h3>Libros recomendados</h3>
        <ul>
            <li><a href="https://www.amazon.com/Python-Object-Oriented-Programming-maintainable-object-oriented/dp/1801077266" target="_blank">Python Object-Oriented Programming</a> - Steven F. Lott</li>
            <li><a href="https://www.amazon.com/Head-First-Object-Oriented-Analysis-Design/dp/0596008678" target="_blank">Head First Object-Oriented Analysis and Design</a> - Brett McLaughlin</li>
            <li><a href="https://www.amazon.com/Clean-Code-Handbook-Software-Craftsmanship/dp/0132350882" target="_blank">Clean Code: A Handbook of Agile Software Craftsmanship</a> - Robert C. Martin</li>
        </ul>
        
        <h3>Artículos y tutoriales en línea</h3>
        <ul>
            <li><a href="https://realpython.com/python3-object-oriented-programming/" target="_blank">Programación Orientada a Objetos en Python</a> - Real Python</li>
            <li><a href="https://developer.mozilla.org/es/docs/Learn/JavaScript/Objects/Object-oriented_JS" target="_blank">Introducción a la POO</a> - MDN Web Docs</li>
            <li><a href="https://www.geeksforgeeks.org/object-oriented-programming-oops-concept-in-java/" target="_blank">POO en Java</a> - GeeksforGeeks</li>
        </ul>
        
        <h3>Canales de YouTube</h3>
        <ul>
            <li><a href="https://www.youtube.com/c/ProgramaciónATS" target="_blank">Programación ATS</a></li>
            <li><a href="https://www.youtube.com/c/FaztCode" target="_blank">Fazt Code</a></li>
            <li><a href="https://www.youtube.com/c/HolaMundoDev" target="_blank">HolaMundo</a></li>
        </ul>
        
        <h3>Herramientas en línea</h3>
        <ul>
            <li><a href="https://www.lucidchart.com/" target="_blank">Lucidchart</a></li>
            <li><a href="https://replit.com/" target="_blank">Replit</a></li>
            <li><a href="https://pythontutor.com/" target="_blank">Python Tutor</a></li>
        </ul>
        
        <h3>Cursos en línea</h3>
        <ul>
            <li><a href="https://www.udemy.com/course/programacion-orientada-a-objetos-python/" target="_blank">Programación Orientada a Objetos en Python</a> - Udemy</li>
            <li><a href="https://www.coursera.org/learn/orientacion-objetos-java" target="_blank">POO en Java</a> - Coursera</li>
            <li><a href="https://www.youtube.com/watch?v=2qg0T7qkKf4" target="_blank">FreeCodeCamp (YouTube)</a></li>
        </ul>
        
        <h3>Comunidades y foros</h3>
        <ul>
            <li><a href="https://stackoverflow.com/" target="_blank">Stack Overflow</a></li>
            <li><a href="https://www.reddit.com/r/learnprogramming/" target="_blank">Reddit - r/learnprogramming</a></li>
            <li><a href="https://dev.to/" target="_blank">Dev.to</a></li>
        </ul>
        
        <h3>Proyectos prácticos</h3>
        <ul>
            <li><a href="https://github.com/" target="_blank">GitHub</a></li>
            <li><a href="https://www.codecademy.com/" target="_blank">Codecademy Projects</a></li>
        </ul>
    </div>
</div>

<div id="modal-test" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal-test')">&times;</span>
        <h2>Evaluación de Programación</h2>
        <p>Responde las siguientes preguntas y descubre cuáles son correctas e incorrectas.</p>
        
        <form id="test-form">
            <div class="question">
                <p><strong>1. ¿Qué es una variable en programación?</strong></p>
                <label><input type="radio" name="q1" value="A"> Un bloque de código que realiza una tarea específica.</label><br>
                <label><input type="radio" name="q1" value="B"> Un espacio en la memoria donde se almacenan datos.</label><br>
                <label><input type="radio" name="q1" value="C"> Una condición que se evalúa como verdadera o falsa.</label><br>
                <label><input type="radio" name="q1" value="D"> Un bucle que repite un bloque de código.</label><br>
            </div>
            
            <div class="question">
                <p><strong>2. ¿Cuál de los siguientes es un ejemplo de un bucle for en Python?</strong></p>
                <label><input type="radio" name="q2" value="A"> while x < 10:</label><br>
                <label><input type="radio" name="q2" value="B"> for i in range(5):</label><br>
                <label><input type="radio" name="q2" value="C"> if x == 5:</label><br>
                <label><input type="radio" name="q2" value="D"> def funcion():</label><br>
            </div>
            
            <div class="question">
                <p><strong>3. En Programación Orientada a Objetos (POO), ¿qué es una clase?</strong></p>
                <label><input type="radio" name="q3" value="A"> Una instancia de un objeto.</label><br>
                <label><input type="radio" name="q3" value="B"> Una plantilla o molde para crear objetos.</label><br>
                <label><input type="radio" name="q3" value="C"> Un método que realiza una acción específica.</label><br>
                <label><input type="radio" name="q3" value="D"> Un tipo de dato primitivo.</label><br>
            </div>
            
            <div class="question">
                <p><strong>4. ¿Cuál de los siguientes es un pilar de la POO?</strong></p>
                <label><input type="radio" name="q4" value="A"> Abstracción</label><br>
                <label><input type="radio" name="q4" value="B"> Compilación</label><br>
                <label><input type="radio" name="q4" value="C"> Depuración</label><br>
                <label><input type="radio" name="q4" value="D"> Interpretación</label><br>
            </div>
            
            <button type="button" class="btn" onclick="evaluarTest()">Enviar Respuestas</button>
        </form>

        <div id="test-result" class="test-result"></div>
    </div>
</div>


