<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background putih */
        body {
            background: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        /* Card Design */
        .register-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #ddd;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        .register-card h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #000;
        }

        .register-card .form-control {
            background: #fff;
            border: 1px solid #ccc;
            color: #333;
        }

        .register-card .form-control:focus {
            background: #fff;
            color: #333;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
            border-color: #2575fc;
        }

        .register-card .btn-primary {
            background: #2575fc;
            border: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .register-card .btn-primary:hover {
            background: #6a11cb;
        }

        .register-card a {
            color: #2575fc;
            text-decoration: underline;
        }

        .register-card p {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="register-card text-center">
        <h2>Daftar Akun</h2>
        <form action="./backend/register.php" method="post" class="mt-4">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <input type="password" name="confirm" class="form-control" placeholder="Confirm your password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <p class="mt-3">
            Udah punya akun? <a href="index.php">Login di Sini</a>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
