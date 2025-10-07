<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel='stylesheet' type='text/css' href='/styles/login.css'>
    <link href="https://fonts.googleapis.com/css2?family=Lora&amp;family=Oxygen&amp;display=swap" rel="stylesheet">
</head>

<body>
    <div class="preview-wrapper">
        <div class="preview">
            <div class="preview__text-container">
                <h1 class="preview__title">Escape.<span class="preview__lowercase">author</span></h1>
                <p class="preview__subtitle">Log in to start creating</p>
            </div>
            <div class="login-form">
            <form class="form login-form__form" method="post">
                <h2 class="login-form__title">Log In</h2>
                <div class="login-form__error-field hidden">
                    <span class="login-form__error-text"></span>
                </div>
                <label class="login-form__label" for="email">Email</label>
                <input class="login-form__input login-form__input_email" type="email" name="email" id="email">
                <span class="login-form__error login-form__error_email"></span>
                <div class="login-form__input-wrapper">
                    <label class="login-form__label" for="password">Password</label>
                    <input class="login-form__input login-form__input_password" type="password" name="password" id="password">
                    <span class="login-form__toggle-password"></span>
                </div>
                <span class="login-form__error login-form__error_password"></span>
                <input class="login-form__submit" type="submit" value="Log In" id="submit">
            </form>
        </div>
        </div>
    </div>
</body>
<script src="/script/login_validation.js"></script>
</html>