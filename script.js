document.getElementById('signupForm').addEventListener('submit', function(event) {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var errorElement = document.getElementById('error');

    if (password !== confirmPassword) {
        errorElement.textContent = 'كلمات المرور غير متطابقة.';
        event.preventDefault();
    } else {
        errorElement.textContent = '';
    }
});
