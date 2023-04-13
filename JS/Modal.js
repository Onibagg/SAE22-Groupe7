document.querySelector('.login-form').addEventListener('submit', function (event) {
    event.preventDefault();
    document.querySelector('#myModal').classList.add('modal-open');
});
