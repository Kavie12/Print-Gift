// Sign Up Data

document.addEventListener('DOMContentLoaded', () => {

    const signupForm = document.getElementById('signupForm');

    signupForm.addEventListener('submit', e => {
        const fName = document.getElementById('signUpFName');
        const lName = document.getElementById('signUpLName');
        const tel = document.getElementById('signUpTel');
        const dob = document.getElementById('signUpDOB');
        const address = document.getElementById('signUpAddress');
        const city = document.getElementById('signUpCity');
        const postalCode = document.getElementById('signUpPostalCode');
        const email = document.getElementById('signUpEmail');
        const password = document.getElementById('signUpPassword');
        const confirmPassword = document.getElementById('signUpConfirmPassword');
        const agreeTerms = document.getElementById('signUpAgreeTerms');

        if (password.value !== confirmPassword.value) {
            e.preventDefault();
            document.getElementById('signUpCardMsg').innerHTML = 'Password does not match!';
        }
    });

});