document.addEventListener('DOMContentLoaded', () => {
    const openmodal = document.querySelector('.BotonSiguiente');
    const modal = document.querySelector('.modal');
    const closemodal = document.querySelector('.modal__close');

    openmodal.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.add('modal--show');
    });

    closemodal.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.remove('modal--show');
        window.location.reload();
    });
});