document.querySelector('.confirm-button').addEventListener('click', () => {
    const inputs = document.querySelectorAll('input');
    const errorMessage = document.getElementById('error-message');

    let allFieldsFilled = true;

    inputs.forEach(input => {
        if (input.value.trim() === '') { 
            allFieldsFilled = false;
            input.style.borderColor = 'red'; 
        } else {
            input.style.borderColor = 'green'; 
        }
    });

    if (!allFieldsFilled) {
        errorMessage.style.display = 'block'; 
    } else {
        errorMessage.style.display = 'none'; 
        alert('Compra confirmada con éxito');
    }   
});

document.querySelectorAll('.pay-method input').forEach(button => {
    button.addEventListener('click', () => {
       
        document.querySelectorAll('.pay-method input').forEach(btn => {
            btn.style.backgroundColor = '';
            btn.style.color = ''; 
        });
        button.style.backgroundColor = '#FFB347'; 
        button.style.color = 'white'; 
    });
});


document.querySelector('.pay-button').addEventListener('click', function(event) {
    // Seleccionamos todos los inputs de texto
    const textInputs = document.querySelectorAll('input[type="text"]');
    let allFieldsFilled = true;

    // Verificamos si cada campo está lleno
    textInputs.forEach(input => {
        if (input.value.trim() === "") {
            allFieldsFilled = false;
            input.style.borderColor = 'red'; // Resaltar los campos vacíos
        } else {
            input.style.borderColor = ''; // Restaurar el borde normal
        }
    });

    // Si hay algún campo vacío, evitar el cambio de página
    if (!allFieldsFilled) {
        event.preventDefault();
        alert('Por favor, complete todos los campos antes de continuar.');
    }
});


