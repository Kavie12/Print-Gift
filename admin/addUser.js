// Sign Up Data

document.addEventListener('DOMContentLoaded', () => {

    const signupForm = document.getElementById('adminAddUserForm');

    signupForm.addEventListener('submit', e => {
        const fName = document.getElementById('adminAddUserFName');
        const lName = document.getElementById('adminAddUserLName');
        const tel = document.getElementById('adminAddUserTel');
        const dob = document.getElementById('adminAddUserDOB');
        const address = document.getElementById('adminAddUserAddress');
        const city = document.getElementById('adminAddUserCity');
        const postalCode = document.getElementById('adminAddUserPostalCode');
        const email = document.getElementById('adminAddUserEmail');
        const password = document.getElementById('adminAddUserPassword');
        const confirmPassword = document.getElementById('adminAddUserConfirmPassword');

        if (password.value !== confirmPassword.value) {
            e.preventDefault();
            document.getElementById('adminAddUserCardMsg').innerHTML = 'Password does not match!';
        }
    });

});