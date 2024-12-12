<?php
include 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebab Baba Kinan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #FF5733;
            color: white;
            padding: 20px;
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        .header-left img {
            margin-left: 10px;
        }

        .logout-button {
            background-color: white;
            color: #FF5733;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logout-button:hover {
            background-color: #e14c2b;
            color: white;
        }

        h1 {
            margin: 0;
        }

        .menu {
            padding: 20px;
            margin-bottom: 100px; 
        }

        .menu h2 {
            text-align: center;
            color: #333;
        }

        .menu-item {
            display: flex;
            background-color: white;
            margin: 20px 0;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .menu-item img {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .menu-details h3 {
            margin: 0;
            color: #FF5733;
        }

        .menu-details p {
            color: #555;
        }

        .quantity-control {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-control button {
            background-color: #FF5733;
            color: white;
            border: none;
            padding: 5px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .quantity-control button:hover {
            background-color: #e14c2b;
        }

        .quantity {
            font-size: 18px;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .order-button-container {
            text-align: center;
            margin-top: 20px;
        }

        .order-button {
            background-color: #FF5733;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .order-button:hover {
            background-color: #e14c2b;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-left">
            <h1>Kebab Baba Kinan</h1>
            <img src="images/babakinan.png" alt="Logo Baba Kinan" width="50" height="50">
        </div>
        <button class="logout-button" onclick="logout()">Logout</button>
    </header>

    <section class="menu">
        <h2>Menu</h2>

        <div class="menu-item">
            <img src="images/Kebab_Sapi.jpeg" alt="Kebab Daging">
            <div class="menu-details">
                <h3>Kebab Daging</h3>
                <p>Kebab daging dengan irisan daging sapi dipanggang sempurna dengan bumbu melimpah lengkap dengan sayur selada, tomat, dan bawang.</p>
                <p>Rp 15.000</p>
                <div class="quantity-control">
                    <button class="decrement" onclick="updateQuantity(this, -1)">-</button>
                    <span class="quantity">0</span>
                    <button class="increment" onclick="updateQuantity(this, 1)">+</button>
                </div>
            </div>
        </div>

        <div class="menu-item">
            <img src="images/Kebab_Ayam.png" alt="Kebab Ayam">
            <div class="menu-details">
                <h3>Kebab Ayam</h3>
                <p>Kebab ayam dengan daging ayam yang dipadukan dengan sayuran selada, tomat, dan bawang bombai.</p>
                <p>Rp 12.000</p>
                <div class="quantity-control">
                    <button class="decrement" onclick="updateQuantity(this, -1)">-</button>
                    <span class="quantity">0</span>
                    <button class="increment" onclick="updateQuantity(this, 1)">+</button>
                </div>
            </div>
        </div>

        <div class="order-button-container">
            <button class="order-button" onclick="placeOrder()">Lakukan Pesanan</button>
        </div>
    </section>

    <footer>
        <p>Instagram: @Kebab_Baba_Kinan</p>
    </footer>

    <script>
        function updateQuantity(button, change) {
            const quantityElement = button.parentElement.querySelector('.quantity');
            let quantity = parseInt(quantityElement.textContent);
            quantity = Math.max(0, quantity + change);
            quantityElement.textContent = quantity;
        }

        function placeOrder() {
            alert('Pesanan Anda telah diterima!');
        }

        function logout() {
            window.location.href = 'Landing.php';
        }
    </script>
</body>
</html>
