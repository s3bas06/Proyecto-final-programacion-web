
const configElement = document.getElementById('session-config');
const maxSeatsAllowed = parseInt(configElement.getAttribute('data-max-seats'), 10);

let selectedSeats = 0; // Contador de asientos seleccionados.

const seats = document.querySelectorAll('.seat');
const cartTotal = document.querySelector('.cart-total');
const cartDetails = document.querySelector('.cart-details');

// Agrega un event listener a cada asiento.
seats.forEach(seat => {
    seat.addEventListener('click', () => {
        // Verifica si el asiento está reservado.
        if (seat.classList.contains('reserved')) {
            alert('Este asiento está reservado.');
            return;
        }

       
        if (selectedSeats >= maxSeatsAllowed && !seat.classList.contains('selected')) {
            alert('Has alcanzado el límite de boletos seleccionados.');
            return;
        }

        
        if (!seat.classList.contains('selected')) {
            seat.classList.add('selected');
            selectedSeats++;
        } else {
            seat.classList.remove('selected');
            selectedSeats--;
        }

       
        updateCart();
    });
});

// Función para actualizar el carrito.
function updateCart() {
    const pricePerTicket = 50; // Precio por boleto 
    const totalPrice = pricePerTicket * selectedSeats;

    if (selectedSeats > 0) {
        cartTotal.textContent = `$${totalPrice.toFixed(2)}`;
        cartDetails.innerHTML = `
            <h3>Asientos seleccionados</h3>
            <p><strong>Boletos seleccionados:</strong> ${selectedSeats}</p>
            <p class="price">$${totalPrice.toFixed(2)}</p>
        `;
    } else {
        cartTotal.textContent = '$0.00';
        cartDetails.innerHTML = `
            <h3>Asientos seleccionados</h3>
            <p>No has seleccionado ningún asiento.</p>
        `;
    }
}
