const openModal = document.querySelector('.combo-btn');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.confirm-button');

openModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.add('modal--show');
});

closeModal.addEventListener('click', (e) =>{
    e.preventDefault();
    modal.classList.remove('modal--show');
});

