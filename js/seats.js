document.addEventListener('DOMContentLoaded', function() {
    const seats = document.querySelectorAll('.seat:not(.reserved)');
    const cart = document.querySelector('.cart-container');
    const totalElement = document.querySelector('.cart-total');
    const grandTotalElement = document.querySelector('.grand-total span');
    const selectedSeatsElement = document.querySelector('#selected-seats');
    const payButton = document.querySelector('.pay-button');
    const nextStepButton = document.querySelector('.show-cart input');

    let selectedSeats = [];
    const ticketPrice = 50; // Precio por asiento
    const maxSeatsAllowed = 5; // Número máximo de asientos permitidos

    seats.forEach(seat => {
        seat.addEventListener('click', (e) => {
            e.preventDefault();

            if (seat.classList.contains('selected')) {
                // Desmarcar el asiento si ya está seleccionado
                seat.classList.remove('selected');
            } else {
                if (selectedSeats.length < maxSeatsAllowed) {
                    seat.classList.add('selected');
                } else {
                    alert(`Has alcanzado el límite de ${maxSeatsAllowed} boletos permitidos.`);
                    return;
                }
            }
            updateSelectedSeats();
            updateCart();
        });
    });

    function updateSelectedSeats() {
        selectedSeats = Array.from(document.querySelectorAll('.seat.selected')).map(seat => {
            const row = seat.closest('.row').querySelector('.row-name').textContent;
            const seatNumber = seat.textContent;
            return `${row}${seatNumber}`;
        });
    }

    function updateCart() {
        const numSeats = selectedSeats.length;
        const subtotal = numSeats * ticketPrice;
        const serviceFee = 8; // Tarifa de servicio fija
        const total = subtotal + serviceFee;

        totalElement.textContent = `$${subtotal.toFixed(2)}`;
        grandTotalElement.textContent = `$${total.toFixed(2)}`;
        selectedSeatsElement.textContent = `Asientos seleccionados: ${selectedSeats.join(', ')}`;

        // Mostrar/ocultar carrito basado en la selección de asientos
        if (numSeats > 0) {
            cart.style.display = 'block';
            nextStepButton.style.display = 'none';
        } else {
            cart.style.display = 'none';
            nextStepButton.style.display = 'block';
        }
    }

    payButton.addEventListener('click', () => {
        if (selectedSeats.length > 0) {
            alert(`Reserva confirmada para los asientos: ${selectedSeats.join(', ')}. Total: $${grandTotalElement.textContent}`);
            // Aquí normalmente enviarías estos datos al servidor
        } else {
            alert('Por favor, selecciona al menos un asiento antes de pagar.');
        }
    });

    nextStepButton.addEventListener('click', () => {
        if (selectedSeats.length > 0) {
            cart.style.display = 'block';
            nextStepButton.style.display = 'none';
        } else {
            alert('Por favor, selecciona al menos un asiento antes de continuar.');
        }
    });

    // Actualización inicial del carrito
    updateCart();
});
