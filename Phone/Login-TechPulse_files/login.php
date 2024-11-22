
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-TechPulse</title>
    <link href="#" rel="stylesheet">
    <style>
        /* Your existing styles with corrections */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'arial';
        }

        body {
            background-color: #ffffff;
            background: linear-gradient(45deg, #ff6363, #ff4cae);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0,0, 0.35);
            position: relative;
            overflow: hidden;
            width: 768px;
            min-width: 50%;
            min-height: 480px;
        }

        .container p{
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.3px;
            margin: 20px 0;
        }

        .container span {
            font-size: 12px;
        }

        .container a{
            color: #ccc;
            font-size: 13px;
            text-decoration: none;
            margin: 15px 0 10px;
        }

        .container button {
            background-color: #512da8;
            color: #fff;
            font-size: 12px;
            padding: 10px 45px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-top: 10px;
            cursor: pointer;
        }

        .container button.hidden {
            background-color: transparent;
            border-color: #fff;
        }

        .container form{
            background-color: #fff;
            display: flex;
            align-items:  center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
        }

        .container input {
            background-color:#eee ;
            border: none;
            margin: 8px 0;
            padding: 10px 15px;
            font-size: 13px;
            border-radius: 8px;
            width: 100%;
            outline: none;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.active .sign-in {
            transform: translateX(100%);

        }

        .sign-up{
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.active .sign-up {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: move 0.6s ;
        }

        @keyframes move {
            0%, 49.99%{
                opacity: 0;
                z-index: 1;
            }
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .social-icons{
            margin: 20px 0;
        }

        .social-icons a{
            border: 1px solid #ccc;
            border-radius: 20%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 3px;
            width: 40px;
            height: 40px;
        }

        .toggle-container{
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            border-radius: 0px;
            z-index: 1000;
        }

        .container.active .toggle-container{
            transform: translateX(-100%);
        }

        .toggle{
            background-color: #512da8;
            height: 100%;
            background: linear-gradient(45deg, #ff4cae, #ff1414);
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: all 0.6s ease-in-out ;
        }

        .container.active .toggle{
            transform: translateX(50%);
        }

        .toggle-panel{
            position: absolute;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .toggle-left{
            transform: translateX(-200%);
        }

        .container.active .toggle-left{
            transform: translateX(0);
        }

        .toggle-right{
            right: 0;
            transform: translateX(0);
        }

        .container.active .toggle-right{
            transform: translateX(200%);
        }

        .gradient-text {
    background: linear-gradient(45deg, #ff3c60, #ff0ecf);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    color: transparent;
    text-shadow: 0 0 5px rgb(255, 95, 156);
}
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container sign-in">
            <form action="../php/login_process.php" method="POST">
                <h1 class="gradient-text">Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fab fa-google"></i></a>
                    <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Email" name="username" required>
                <input type="email" placeholder="Password" name="email" required>
                <button type="submit">Sign In</button>
                <a href="../php/register.php"></a>
                            </form>
        </div>
        <div class="form-container sign-up">
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">

                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Fill the blanks with your personal details to use all of the site</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });

        document.addEventListener("DOMContentLoaded", () => {
            fetch("../php/session.php") // Adjust PHP file path if necessary
                .then(response => response.json())
                .then(data => {
                    if (data.email) {
                        alert(`Welcome back, ${data.email}!`);
                    }
                })
                .catch(() => {
                    // Fallback for unauthorized access
                    console.log("No session data found.");
                });
});
    </script>
</body>
</html>
