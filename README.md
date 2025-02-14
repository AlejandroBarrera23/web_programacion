# 🌐 Programo y Aprendo

**Programo y Aprendo** es un sitio web diseñado para ayudar a los usuarios a aprender sobre programación estructurada, programación orientada a objetos y otros recursos educativos.

---

🌍 **Sitio web en producción:**  
[https://programoyaprendo.online](https://programoyaprendo.online)

---

## Capturas de pantalla
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px;">
  <img src="https://programoyaprendo.online/blog/wp-content/uploads/2025/02/f1.png" alt="Pantalla principal" width="500" />
  <img src="https://programoyaprendo.online/blog/wp-content/uploads/2025/02/f2.png" alt="Resultado del juego" width="500" />
</div>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px;">
  <img src="https://programoyaprendo.online/blog/wp-content/uploads/2025/02/f3.png" alt="Pantalla principal" width="500" />
  <img src="https://programoyaprendo.online/blog/wp-content/uploads/2025/02/f4.png" alt="Resultado del juego" width="500" />
</div>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px;">
  <img src="https://programoyaprendo.online/blog/wp-content/uploads/2025/02/f5.png" alt="Pantalla principal" width="500" />
  <img src="https://programoyaprendo.online/blog/wp-content/uploads/2025/02/f6.png" alt="Resultado del juego" width="500" />
</div>

---

## 📌 Características del Proyecto

✅ **Diseño moderno y adaptativo**.  
✅ **Menú de navegación con submenús**.  
✅ **Secciones interactivas** con contenido educativo.  
✅ **Test de conocimientos** con validación de respuestas.  
✅ **Formulario de contacto**.  
✅ **Modales** para mostrar información detallada.  

---

## 🎨 **Diseño de la Página**
La web fue desarrollada con:

- **HTML, CSS y JavaScript**.
- **Diseño responsivo** mediante `@media queries` en CSS.
- **Diseño adaptable en todos los dispositivos.**
- **Modales interactivos** para mostrar información.
- **Formulario de contacto** con validación.
- **Redirección forzada a HTTPS** para mejorar la seguridad.

---

## 🚀 **Subida al Servidor**
Para alojar esta web en un **hosting con cPanel**, se realizaron los siguientes pasos:

1. **Subida de archivos**  
   - Se accedió a **cPanel** y se usó el **Administrador de Archivos**.
   - Se subieron los archivos dentro de `public_html`.

2. **Instalación de SSL (HTTPS)**  
   - Se activó un **certificado SSL gratuito** desde **cPanel > Seguridad > SSL/TLS**.
   - Se agregó una redirección a HTTPS mediante **`.htaccess`**:

     ```apache
     RewriteEngine On
     RewriteCond %{HTTPS} !=on
     RewriteRule ^(.*)$ https://%{HTTP_HOST}/$1 [R=301,L]
     ```

3. **Pruebas y correcciones**  
   - Se verificó que el sitio funcionara correctamente en navegadores y móviles.
   - Se solucionaron posibles problemas de contenido mixto (`http://` en lugar de `https://`).

---

## 🖥 **Ejecutar la Página Localmente**
Si deseas correr esta web en tu computadora localmente, sigue estos pasos:

### **1️⃣ Clonar el Repositorio**
Ejecuta el siguiente comando en tu terminal:

```sh
git clone https://github.com/AlejandroBarrera23/web_programacion/
