
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - PAMCHE</title>

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
            padding: 30px;
        }

        .contact-form {
            background-color: white;
            max-width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 8px #ddd;
        }

        input, textarea {
            width: 90%;
            padding: 12px;
            margin: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
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

    <div class="content">

        <h1>CONTACT PAMCHE</h1>

        <p>We would love to hear from you!</p>

        <h3>Our Contact Information</h3>

        <p>Business Name: PAMCHE Clothing Store</p>
        <p>Address: Sta.Ana Nasipit, Agusan Del Norte</p>
        <p>Contact Number: 09469188124</p>
        <p>Email: Pamche@email.com</p>
        <p>Facebook: PAMCHE Clothing Store</p>

        <div class="contact-form">

            <h2>Send Us a Message</h2>

            <form>

                <input type="text"
                       placeholder="Customer Name">

                <input type="email"
                       placeholder="Email Address">

                <textarea rows="5"
                          placeholder="Your Message"></textarea>

                <button type="button">Submit</button>

            </form>

        </div>

    </div>

    <footer>
        <p>&copy; 2026 PAMCHE Clothing Store. All Rights Reserved.</p>
    </footer>

</body>
</html>
