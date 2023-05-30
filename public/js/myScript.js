
// script que agrega tiempo a los mensajes
setTimeout(() => {
    const elem = document.getElementById('mensaje');
    elem.style.display = 'none';
}, 4000)



// script para dar formato al valor ingresado
let montoInput = document.getElementById('precioProducto');

montoInput.addEventListener('input', function (event) {
    // Obtener el valor ingresado sin los caracteres de formato
    let montoSinFormato = parseFloat(montoInput.value.replace(/[$,.]/g, ''));

    // Verificar si es un número válido
    if (!isNaN(montoSinFormato)) {
        // Formatear el valor con puntos y comas
        let montoFormateado = montoSinFormato.toLocaleString('es-ES');

        // Actualizar el valor en el campo de entrada
        montoInput.value = '' + montoFormateado;
    }
});




