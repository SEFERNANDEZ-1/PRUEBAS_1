// Declaración de la variable signaturePad e inicialización con null
let signaturePad = null;
// Se añade un evento que se ejecuta cuando la ventana y todos sus recursos están cargados
window.addEventListener('load', async () => {

    // Se selecciona el elemento canvas en el documento HTML
    const canvas = document.querySelector("canvas");

    // Se ajusta la altura y anchura del canvas para ocupar su tamaño disponible
    canvas.height = canvas.offsetHeight;
    canvas.width = canvas.offsetWidth;

    // Se crea una instancia de SignaturePad, asociada al canvas
    signaturePad = new SignaturePad(canvas, {});

});

