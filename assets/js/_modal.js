window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');


const myModal = new bootstrap.Modal(document.getElementById('myModal'), {
    backdrop: false
})

const myInput = document.getElementById('buttonModal')

myInput.addEventListener('click', function () {
    myModal.toggle()
})

document.getElementById("myModal").addEventListener("click", function () {
    myModal.hide();
});

