
<!DOCTYPE html>
<html>
<head>
    <title>About Us - PAMCHE</title>

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

        .content {
            background-color: white;
            max-width: 750px;
            margin: 35px auto;
            padding: 30px;
            border-radius: 10px;
        }

        h1, h2 {
            color: #5c4033;
        }

        p {
            line-height: 1.7;
            color: #444;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 15px;
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

    <div class="content">

        <h1>ABOUT PAMCHE</h1>

        <h2>Our Background</h2>

        <p>
            PAMCHE is a clothing store that offers stylish,
            comfortable, and affordable clothing.
            We sell shirts, jeans, and tops suitable
            for everyday wear and different occasions.
        </p>

        <h2>Our Vision</h2>

        <p>
            To become a trusted clothing brand that inspires
            confidence and self-expression through fashion.
        </p>

        <h2>Our Mission</h2>

        <p>
            To provide fashionable, comfortable, and quality
            clothing at affordable prices while giving
            customers a satisfying shopping experience.
        </p>

        <h2>Our Goals</h2>

        <p>
            To satisfy our customers, offer quality products,
            follow fashion trends, and grow PAMCHE into
            a successful clothing business.
        </p>

    </div>

    <footer>
        <p>&copy; 2026 PAMCHE Clothing Store. All Rights Reserved.</p>
    </footer>

</body>
</html>
