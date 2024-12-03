l;@extends('layouts.user')

@section('title')
Products
@endsection
@section('content')
<div> 
    <h1><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearIt - Product Page</title>
    <style>
        body {
            font-family: Popins;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            margin: 20px auto;
            max-width: 900px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .product-image {
            flex: 1;
            padding: 20px;
        }
        .product-image img {
            max-width: 100%;
            border-radius: 8px;
        }
        .product-details {
            flex: 1;
            padding: 20px;
        }
        .product-details h1 {
            font-size: 24px;
            margin: 0;
        }
        .product-details p {
            margin: 10px 0;
        }
        .product-details .price {
            font-size: 20px;
            color: #007bff;
            margin: 10px 0;
        }
        .color-options span, .size-options span {
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px 10px;
            margin: 5px;
            cursor: pointer;
        }
        .add-to-cart {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none;
            margin-top: 10px;
            border-radius: 4px;
        }
        .add-to-cart:hover {
            background-color: #0056b3;
        }
        .favorite {
            text-align: right;
        }
        .favorite a {
            text-decoration: none;
            font-size: 20px;
            color: red;
        }
    </style>


    <div class="product-container">
        <div class="product-image">
            <img src="https://image.uniqlo.com/UQ/ST3/id/imagesgoods/472740/item/idgoods_11_472740_3x4.jpg?width=294" alt="Product Image">
        </div>
        <div class="product-details">
            <h1>Printed Loose T-shirt</h1>
            <div class="rating">⭐ 5.0</div>
            <p class="price">Rp. 500.000,00</p>
            <p>Relaxed-fit shirt. Camp collar and short sleeves.</p>
            <div class="color-options">
                <strong>Color:</strong>
                <span style="background: #ccc;"></span>
                <span style="background: #333;"></span>
                <span style="background: black;"></span>
                <span style="background: #b2f5e9;"></span>
                <span style="background: #e0e0ff;"></span>
            </div>
            <div class="size-options">
                <strong>Size:</strong>
                <span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>2XL</span>
            </div>
            <a href="#" class="add-to-cart">ADD TO CART</a>
            <div class="favorite">
                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" class="w-8 h-8">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-.6 0-1.2-.2-1.7-.6C7.8 18.6 2 13.5 2 8.5 2 5.4 4.4 3 7.5 3 9.3 3 10.9 4.1 12 5.4 13.1 4.1 14.7 3 16.5 3 19.6 3 22 5.4 22 8.5c0 5-5.8 10.1-8.3 12-0.5 0.4-1.1 0.5-1.7 0.5z"/>
</svg>

</a>
            </div>
        </div>
    </div>
</body>
</html>
    </h2>
    <h3</h3>
</div>
@endsection