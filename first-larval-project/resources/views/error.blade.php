<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .error-container {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .error-container h1 {
            font-size: 5rem;
            margin: 0;
            color: #e74c3c;
        }

        .error-container p {
            font-size: 1.2rem;
            color: #555;
        }

        .error-container a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .error-container a:hover {
            background-color: #2980b9;
        }

        .error-container .error-code {
            font-size: 6rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="error-container">
        <div class="error-code">404</div>
        <h1>Oops! Page Not Found</h1>
        <p>The page you are looking for might have been moved or deleted.</p>
        <a href="/home">Go Back to Home</a>
    </div>

</body>
</html>

