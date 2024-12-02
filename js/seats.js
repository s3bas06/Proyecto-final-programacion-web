const seats = document.querySelectorAll('.seat');

seats.forEach(seat => {
    seat.addEventListener('click', (e)=>{
        e.preventDefault();
        seat.classList.toggle('selected');
    });
});
