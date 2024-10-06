<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic Brown Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #5D3A1D, #A84B0D);
            font-family: 'Poppins', Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background */
        .bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1), rgba(0, 0, 0, 0.5));
            animation: gradient 15s ease infinite;
            z-index: 0;
        }

        @keyframes gradient {
            0% { background-color: rgba(255, 255, 255, 0.1); }
            50% { background-color: rgba(0, 0, 0, 0.1); }
            100% { background-color: rgba(255, 255, 255, 0.1); }
        }

        /* Container */
        .container {
            background: rgba(30, 30, 30, 0.8);
            border-radius: 20px;
            padding: 40px;
            width: 400px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 10;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5em;
            color: #e9a14e;
            text-transform: uppercase;
            animation: slideIn 1.5s ease-in-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 1em;
            transition: background 0.3s, transform 0.2s;
        }

        input::placeholder {
            color: #d4d4d4;
        }

        input:focus {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
        }

        button {
            background: linear-gradient(90deg,  #e48b25, #9a5609);
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background 0.3s, transform 0.2s;
            width: 100%;
            position: relative;
            z-index: 1;
            overflow: hidden;
            margin-top: 10px;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        /* Unique Animations on Button */
        button:after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transition: transform 0.5s ease;
            transform: translate(-50%, -50%) scale(0);
            z-index: 0;
        }

        button:hover:after {
            transform: translate(-50%, -50%) scale(1);
        }

        /* Error Message Styling */
        .error {
            color: #ff4747;
            text-align: center;
            margin-top: 10px;
        }

        p {
            margin-top: 20px;
            text-align: center;
            color: #fff;
        }

        a {
            color: #e9a14e;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #ffcc00;
        }

        /* Floating Shapes for Futuristic Effect */
        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.2);
            animation: float 8s infinite;
            opacity: 0.1;
            border-radius: 10%;
        }

        .shape-1 {
            width: 150px; height: 150px; left: 15%; top: 30%; animation-duration: 6s; transform: rotate(15deg);
        }
        .shape-2 {
            width: 100px; height: 100px; left: 80%; top: 20%; animation-duration: 7s; transform: rotate(-15deg);
        }
        .shape-3 {
            width: 120px; height: 120px; left: 50%; top: 60%; animation-duration: 8s; transform: rotate(20deg);
        }
        .shape-4 {
            width: 80px; height: 80px; left: 30%; top: 80%; animation-duration: 9s; transform: rotate(-10deg);
        }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                padding: 20px;
                width: 90%;
            }

            h1 {
                font-size: 2em;
            }

            button {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>
    <div class="bg"></div>
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
    <div class="shape shape-4"></div>
    
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div>
                <input type="email" name="email" required placeholder="Enter your email" value="{{ old('email') }}">
            </div>
            <div>
                <input type="password" name="password" required placeholder="Enter your password">
            </div>
            <button type="submit">Login</button>
        </form>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <p class="register-link">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </div>
</body>

</html>
