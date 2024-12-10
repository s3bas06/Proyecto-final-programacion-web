document.addEventListener('DOMContentLoaded', () => {
    const maxSeatsAllowed = parseInt(document.getElementById('session-config').getAttribute('data-max-seats'));
    let selectedSeats = [];
    const nextButton = document.querySelector('.pay-button');
    nextButton.disabled = true;

    // Obtén todos los botones de asientos
    const seatButtons = document.querySelectorAll('.seat');

    // Desactiva los asientos reservados al cargar la página
    seatButtons.forEach(button => {
        if (button.classList.contains('reserved')) {
            button.disabled = true;
        }
    });

    seatButtons.forEach(button => {
        button.addEventListener('click', () => {
            const row = button.parentElement.querySelector('.row-name').textContent.trim(); // Obtén la fila
            const seatNumber = button.textContent.trim(); // Obtén el número del asiento
            const seatId = `${row}${seatNumber}`; // Combina fila y número para un identificador único

            // Verifica si el asiento ya está reservado
            if (button.classList.contains('reserved')) {
                alert('Este asiento ya está reservado.');
                return;
            }

            // Verifica si el límite de asientos ha sido alcanzado
            if (selectedSeats.length >= maxSeatsAllowed && !selectedSeats.includes(seatId)) {
                alert('Ya has alcanzado el número máximo de asientos permitidos.');
                return;
            }

            // Marca el asiento como seleccionado o desmarcado
            if (selectedSeats.includes(seatId)) {
                button.classList.remove('selected');
                selectedSeats = selectedSeats.filter(selectedSeat => selectedSeat !== seatId);
            } else {
                button.classList.add('selected');
                selectedSeats.push(seatId);
            }

            // Actualiza el estado de los botones según el límite de asientos seleccionados
            if (selectedSeats.length === maxSeatsAllowed) {
                nextButton.disabled = false;
                seatButtons.forEach(btn => {
                    if (!btn.classList.contains('selected') && !btn.classList.contains('reserved')) {
                        btn.disabled = true;
                    }
                });
                alert('Has alcanzado el número máximo de asientos permitidos.');
            } else {
                seatButtons.forEach(btn => {
                    if (!btn.classList.contains('reserved')) {
                        btn.disabled = false;
                    }
                });
                nextButton.disabled = true;
            }

            updateCart();
        });
    });

    function updateCart() {
        const cartTotal = document.querySelector('.cart-total');
        const pricePerTicket = 50; // Precio por boleto
        const totalPrice = selectedSeats.length * pricePerTicket;

        if (cartTotal) {
            cartTotal.textContent = `$${totalPrice.toFixed(2)}`;
        }

        const seatsList = document.querySelector('.cart-details p');
        if (seatsList) {
            seatsList.textContent = `Asientos seleccionados: ${selectedSeats.join(', ')}`;
        }
    }
});
