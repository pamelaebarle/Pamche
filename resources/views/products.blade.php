
<!DOCTYPE html>
<html>
<head>
    <title>Products - PAMCHE</title>

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

        .products {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
            padding: 30px;
        }

        .card {
            background-color: white;
            width: 250px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 3px 8px #ddd;
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: contain;
        }

        .card h2 {
            color: #5c4033;
        }

        .price {
            color: #8b5e45;
            font-weight: bold;
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

    <h1>OUR PRODUCTS</h1>

    <p>Discover your style with PAMCHE!</p>

    <div class="products">

        <div class="card">

            <img src="{{ asset('images/shirts.jpg') }}"
                 alt="PAMCHE Shirts">

            <h2>SHIRTS</h2>

            <p>
                Comfortable and stylish shirts
                for everyday outfits.
            </p>

            <p class="price">₱199</p>

        </div>

        <div class="card">

            <img src="{{ asset('images/jeans.jpg') }}"
                 alt="PAMCHE Jeans">

            <h2>JEANS</h2>

            <p>
                Trendy and comfortable jeans
                for different styles.
            </p>

            <p class="price">₱399</p>

        </div>

        <div class="card">

            <img src="{{ asset('images/tops.jpg') }}"
                 alt="PAMCHE Tops">

            <h2>TOPS</h2>

            <p>
                Fashionable tops for casual
                and everyday occasions.
            </p>

            <p class="price">₱249</p>

        </div>

    </div>

    <footer>
        <p>&copy; 2026 PAMCHE Clothing Store. All Rights Reserved.</p>
    </footer>

</body>
</html>
