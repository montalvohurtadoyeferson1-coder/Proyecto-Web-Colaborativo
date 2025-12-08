// Mensaje de bienvenida al cargar la página
console.log('Proyecto Web Colaborativo - Cargado correctamente');

// Validación del formulario de registro
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formRegistro');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.querySelector('input[name="password"]').value;
            const confirmPassword = document.querySelector('input[name="confirm_password"]').value;
            
            if (password !== confirmPassword) {
                alert('Las contraseñas no coinciden');
                return;
            }
            
            if (password.length < 6) {
                alert('La contraseña debe tener al menos 6 caracteres');
                return;
            }
            
            alert('¡Registro exitoso! Formulario enviado correctamente.');
            form.reset();
        });
    }
});

// Efecto hover en los enlaces del menú
const navLinks = document.querySelectorAll('nav a');
navLinks.forEach(link => {
    link.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.1)';
    });
    
    link.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
    });
});