// ===============================
// Proyecto Web Colaborativo
// Funciones JS Mejoradas
// ===============================

document.addEventListener('DOMContentLoaded', () => {
    console.log('Proyecto Web Colaborativo - Cargado correctamente');

    // ===============================
    // Validación del formulario
    // ===============================
    const form = document.getElementById('formRegistro');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const password = form.querySelector('input[name="password"]').value;
            const confirmPassword = form.querySelector('input[name="confirm_password"]').value;

            if (password !== confirmPassword) {
                mostrarMensaje('Las contraseñas no coinciden ❌', 'error');
                return;
            }

            if (password.length < 6) {
                mostrarMensaje('La contraseña debe tener al menos 6 caracteres ⚠️', 'error');
                return;
            }

            mostrarMensaje('¡Registro exitoso! ✅', 'success');
            form.reset();
        });
    }

    // ===============================
    // Marcar enlace activo en el menú
    // ===============================
    const links = document.querySelectorAll('nav a');
    const urlActual = window.location.pathname;

    links.forEach(link => {
        if (link.getAttribute('href') && urlActual.includes(link.getAttribute('href'))) {
            link.classList.add('active');
        }
    });
});

// ===============================
// Mensajes visuales
// ===============================
function mostrarMensaje(texto, tipo) {
    const mensaje = document.createElement('div');
    mensaje.className = `mensaje ${tipo}`;
    mensaje.textContent = texto;

    document.body.appendChild(mensaje);

    setTimeout(() => {
        mensaje.classList.add('mostrar');
    }, 100);

    setTimeout(() => {
        mensaje.classList.remove('mostrar');
        setTimeout(() => mensaje.remove(), 500);
    }, 3000);
}
