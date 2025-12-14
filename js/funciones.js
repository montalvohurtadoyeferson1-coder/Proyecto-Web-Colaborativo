document.addEventListener('DOMContentLoaded', () => {
    console.log('Proyecto cargado correctamente');

    // Botón saludo
    const boton = document.getElementById('btnSaludo');
    if (boton) {
        boton.addEventListener('click', () => {
            alert('¡Gracias por visitar nuestro proyecto!');
        });
    }

    // Validación simple del formulario
    const form = document.getElementById('formRegistro');
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Registro enviado correctamente ✅');
            form.reset();
        });
    }
});
