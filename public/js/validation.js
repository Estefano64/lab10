document.getElementById('contactForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('message').value.trim();
    var nameError = document.getElementById('name-error');
    var emailError = document.getElementById('email-error');
    var messageError = document.getElementById('message-error');
    var isValid = true;

    nameError.innerHTML = '';
    emailError.innerHTML = '';
    messageError.innerHTML = '';

    if (name === '') {
        nameError.innerHTML = 'Name is required';
        isValid = false;
    }

    if (email === '') {
        emailError.innerHTML = 'Email is required';
        isValid = false;
    } else if (!isValidEmail(email)) {
        emailError.innerHTML = 'Invalid email format';
        isValid = false;
    }

    if (message === '') {
        messageError.innerHTML = 'Message is required';
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault();
    }
});

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

