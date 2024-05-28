import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteBtn = document.getElementById('deleteBtn');
console.log(deleteBtn);
deleteBtn.addEventListener('click', (e) => {
    e.preventDefault();
    console.log('ciao');
    const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
    modal.show();
    const deleteFromDb = document.getElementById('deleteFromDb');
    deleteFromDb.addEventListener('click', () => {
        deleteBtn.parentElement.submit();
    })

})
