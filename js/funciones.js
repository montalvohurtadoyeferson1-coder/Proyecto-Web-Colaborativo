document.addEventListener('DOMContentLoaded', () => {
    console.log('Proyecto cargado correctamente');

    const boton = document.getElementById('btnSaludo');

    boton.addEventListener('click', () => {
        mostrarMensaje('¡Gracias por visitar el proyecto! 👋');
    });
});

function mostrarMensaje(texto) {
    const mensaje = document.createElement('div');
    mensaje.textContent = texto;
    mensaje.style.position = 'fixed';
    mensaje.style.bottom = '20px';
    mensaje.style.right = '20px';
    mensaje.style.background = '#333';
    mensaje.style.color = 'white';
    mensaje.style.padding = '15px 20px';
    mensaje.style.borderRadius = '8px';
    mensaje.style.boxShadow = '0 10px 20px rgba(0,0,0,0.4)';
    mensaje.style.zIndex = '999';

    document.body.appendChild(mensaje);

    setTimeout(() => {
        mensaje.remove();
    }, 3000);
}
