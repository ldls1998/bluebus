const btnRegistrar = document.getElementById('Iniciar');
const urlParams = new URLSearchParams(window.location.search);
const nombres = document.getElementById('usuario');
const apellidos = document.getElementById('contraseña');


const form = document.querySelector('.formulario');
document.addEventListener('DOMContentLoaded', () => {

    if (urlParams.get('error') == '1') {
         showError('Ya existe en el sistema un usuario con este usuario');
    }

    if (urlParams.get('mensaje') == '1') {
        showGod('El usuario fue creado exitosamente');
    }

    btnRegistrar.addEventListener('click', validateForm);
})



const showError = (error) => {
    swal.fire({
        text: error,
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#48BB78'
    })
}

const showGod = (error) => {
    swal.fire({
        text: error,
        icon: 'success',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#48BB78'
    })
}

const validateForm = (e) => {
    e.preventDefault();
    const nombresValue = nombres.value;
    const apellidosValue = apellidos.value;
    
    
    

    if (nombresValue === '' || apellidosValue === '') {
        swal.fire({
            title: 'Error',
            text: 'Debe completar todos los campos',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }

  

    form.submit();
    form.reset();
}