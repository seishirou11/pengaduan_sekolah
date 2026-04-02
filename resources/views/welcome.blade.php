<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Auth Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            background: url('https://c4.wallpaperflare.com/wallpaper/186/380/857/your-name-sky-stars-kimi-no-na-wa-wallpaper-preview.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* overlay gelap biar teks kebaca */
        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        .card {
            position: relative;
            z-index: 1;
            width: 360px;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            color: white;

            /* glass effect */
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(18px);
            box-shadow: 0 10px 50px rgba(0,0,0,0.6);
        }

        .card h1 {
            margin-bottom: 25px;
            font-size: 28px;
            letter-spacing: 1px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-login {
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            color: white;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(99,102,241,0.5);
        }

        .btn-register {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.4);
            color: #e0e7ff;
        }

        .btn-register:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

<div class="card">
    <h1>GASSS</h1>

    <a href="{{ route('login') }}">
        <button class="btn btn-login">Log in</button>
    </a>

    <a href="{{ route('register') }}">
        <button class="btn btn-register">Register</button>
    </a>
</div>

</body>
</html>