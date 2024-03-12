// Sign Up Data

document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('adminEditUserForm');

    form.addEventListener('submit', e => {
        const fName = document.getElementById('adminEditUserFName');
        const lName = document.getElementById('adminEditUserLName');
        const tel = document.getElementById('adminEditUserTel');
        const dob = document.getElementById('adminEditUserDOB');
        const address = document.getElementById('adminEditUserAddress');
        const city = document.getElementById('adminEditUserCity');
        const postalCode = document.getElementById('adminEditUserPostalCode');
        const email = document.getElementById('adminEditUserEmail');
        const password = document.getElementById('adminEditUserPassword');
        const confirmPassword = document.getElementById('adminEditUserConfirmPassword');

        if (password.value !== confirmPassword.value) {
            e.preventDefault();
            document.getElementById('adminEditUserCardMsg').innerHTML = 'Password does not match!';
        }
    });

});