
// загрузка html элемента document после выполнения собыия DOMContentLoaded (выполняется первым)
document.addEventListener('DOMContentLoaded', () => {
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const submitButton = document.getElementById('submit');
    const passwordErrorField = document.querySelector('.login-form__error_password'); //поиск элемента по CSS-селектору .login-form__error_password
    const emailErrorFiled = document.querySelector('.login-form__error_email'); //поиск элемента по CSS-селектору .login-form__error_email
    const togglePassword = document.querySelector('.login-form__toggle-password'); //поиск элемента по CSS-селектору .login-form__toggle-password 
    const errorMassageField = document.querySelector('.login-form__error-field'); //поиск элемента по CSS-селектору .login-form__error-field
    const form = document.querySelector('.form'); //поиск элемента по CSS-селектору .form
    const regExp = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/gi

    // загрузка html элемента window после выполнения события load (переход к /admin при получении ключа auth)
    window.addEventListener('load', event => {
        if (sessionStorage.getItem('auth')) {
            window.location.replace("/admin");
        }
    })

    // событие togglePassword после выполнения собития click
    togglePassword.addEventListener('click', event => {
        const passwordType = 'password';
        
        //получение значения элемента с атрибутом type события passwordInput
        passwordInput.getAttribute('type') === passwordType
            ? passwordInput.setAttribute('type', 'text')
            : passwordInput.setAttribute('type', 'password');
        
        // включение класса переключателя
        togglePassword.classList.toggle('active');
    })

    passwordInput.addEventListener('change', event => {
        validatePasswordFiled(passwordInput, passwordErrorField);
        isFillInput(passwordInput);
    })

    emailInput.addEventListener('change', event => {
        validateEmailField(emailInput, emailErrorFiled);
        isFillInput(emailInput);
    })

    submitButton.addEventListener('click', event => {
        event.preventDefault();
        const isValidEmail = validateEmailField(emailInput, emailErrorFiled);
        const isValidPassword = validatePasswordFiled(passwordInput, passwordErrorField);
        if (isValidEmail && isValidPassword) {
            if (!sessionStorage.getItem('auth')) {

                sessionStorage.setItem('auth', emailInput.value);
            }
            window.location.replace("/admin")
        } else {
            form.classList.add('anim_error');
            errorMassageField.classList.remove('hidden');
            errorMassageField.innerHTML = 'A-Ah! Check all fields';
            setTimeout(() => form.classList.remove('anim_error'), 1000)
        }
    })

    function validatePasswordFiled(input, errorField) {
        isNotEmptyField();
        if (input.value.length < 8) {
            errorField.innerHTML = 'Password is required.';
            errorField.classList.add('error');
            input.classList.add('error');
        } else {
            errorField.innerHTML = '';
            errorField.classList.remove('error');
            input.classList.remove('error');
            return true;
        }
    }

    function validateEmailField(input, errorField) {
        isNotEmptyField();
        if (!input.value) {
            errorField.innerHTML = 'Email is required.';
        }

        if (!input.value.match(regExp) && input.value) {
            errorField.innerHTML = 'Incorrect email format. Correct format is ****@**.***';
        }

        if ((input.value.toLowerCase().match(regExp) && input.value)) {
            errorField.innerHTML = '';
            errorField.classList.remove('error')
            input.classList.remove('error')
            return true;
        }

        errorField.classList.add('error');
        input.classList.add('error');
    }

    function isFillInput(input) {
        input.value ? input.classList.add('fill') : input.classList.remove('fill')
    }

    function isNotEmptyField() {
        if (emailInput.value && passwordInput.value) {
            errorMassageField.classList.add('hidden')
        }
    }
})
