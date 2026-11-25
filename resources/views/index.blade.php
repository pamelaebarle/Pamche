
<!DOCTYPE html>
<html>
<head>
    <title>PAMCHE - Clothing Store</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f5f0;
            margin: 0;
            text-align: center;
        }

        header {
            background-color: white;
            padding: 15px;
        }

        header img {
            width: 180px;
        }

        nav {
            background-color: #333;
            padding: 18px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: #d6b89c;
        }

        .hero {
            padding: 70px 20px;
            background-color: #eadfd2;
        }

        .hero h1 {
            font-size: 40px;
            color: #3b3028;
        }

        .hero p {
            font-size: 17px;
        }

        button {
            background-color: #5c4033;
            color: white;
            padding: 12px 25px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #8b6855;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <header>
        <img src="{{ asset('images/logo.png') }}"
             alt="PAMCHE Logo">
    </header>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('products') }}">Products</a>
        <a href="{{ route('contact') }}">Contact Us</a>
    </nav>

    <div class="hero">

        <h1>WELCOME TO PAMCHE</h1>

        <h3>Wear Your Style, Express Yourself.</h3>

        <p>
            Discover fashionable, comfortable, and affordable
            clothing for your everyday outfits.
        </p>

        <p>Find your perfect style with PAMCHE!</p>

        <a href="{{ route('products') }}">
            <button>SHOP NOW</button>
        </a>

    </div>

    <footer>
        <p>&copy; 2026 PAMCHE Clothing Store. All Rights Reserved.</p>
    </footer>

</body>
</html>
