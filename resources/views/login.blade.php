<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos_login.css">
</head>
<body>
    <div class="login-wrapper">
            <div class="login-side">
                <a href="#" title="Logo">
                    <img class="logo" src="images/logoSimposio.jpg" alt="Logo">
                </a>
                <div class="my-form__wrapper">
                    <div class="login-welcome-row">
                        <h1>Bienvenido &#x1F44F;</h1>
                        <p>Porfavor ingresa tus datos!</p>
                    </div>
                    <form class="my-form" method="POST">
                    @csrf
                        <div class="divider">
                            <div class="divider-line"></div>
                            Accede
                            <div class="divider-line"></div>
                        </div>
                        <div class="text-field">
                            <label for="email">Correo:</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Email"
                                required
                            >
                            <img
                                alt="Email Icon"
                                title="Email Icon"
                                src="assets/email.svg"
                            >
                        </div>
                        <div class="text-field">
                            <label for="password">Password:</label>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                placeholder="Password"
                                title="Escribe por lo menos 6 caracteres"
                                required
                            >
                            <img
                                alt="Password Icon"
                                title="Password Icon"
                                src="assets/password.svg"
                            >
                        </div>
                        <button id="botonLogin" class="my-form__button" type="submit">Login</button>
                    </form>
                </div>
            </div>
            <div class="info-side">
                <img src="images/umg.png" alt="Mock" class="mockup">
                <div class="welcome-message">
                    <h2>Simposio 2024 </h2>
                    <p>
                        Universidad Mariano Galvez de Guatemala
                    </p>    
                </div>
            </div>
        </div>
</body>
</html>