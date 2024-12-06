document.addEventListener('DOMContentLoaded', () => {
    
    const maxSeatsAllowed = parseInt(document.getElementById('session-config').getAttribute('data-max-seats'));
    let selectedSeats = [];

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
            const seat = button.textContent.trim(); 

            // Verifica si el asiento ya está reservado
            if (button.classList.contains('reserved')) {
                alert('Este asiento ya está reservado.');
                return;
            }

            
            if (selectedSeats.length >= maxSeatsAllowed && !selectedSeats.includes(seat)) {
                alert('Ya has alcanzado el número máximo de asientos permitidos.');
                return;
            }

            // Marca el asiento como seleccionado o desmarcado
            if (selectedSeats.includes(seat)) {
                button.classList.remove('selected');
                selectedSeats = selectedSeats.filter(selectedSeat => selectedSeat !== seat);
            } else {
                button.classList.add('selected');
                selectedSeats.push(seat);
            }

            // Bloquea los botones si se ha alcanzado el número máximo de asientos seleccionados
            if (selectedSeats.length === maxSeatsAllowed) {
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
            }

            
            updateCart();
        });
    });

    function updateCart() {
        
        /*const cartTotal = document.querySelector('.cart-total');
        const pricePerTicket = 50; 
        const totalPrice = selectedSeats.length * pricePerTicket;
        */
       
        if (cartTotal) {
            cartTotal.textContent = `$${totalPrice.toFixed(2)}`;
        }

        const seatsList = document.querySelector('.cart-details p');
        if (seatsList) {
            seatsList.textContent = `Asientos seleccionados: ${selectedSeats.join(', ')}`;
        }
    }
});
