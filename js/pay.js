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


