<!-- Halaman ini akan menampilkan
semua produk yang akan dibeli beserta info jumlah, subtotal dan total harga nya. (clue:
gunakan session management) -->


<h1>Shopping Cart</h1>
<?php

session_name('cart');
session_start();


// dd($cart);
?>


<table cellspacing="0" cellpadding="5" border="1">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>
    <?php
    $no = 1;
    $total = 0;
    ?>
    @foreach ($cart as $item => $value)
    <?php
    $subtotal = $value['UnitPrice'] * $value['Quantity'];
    $total += $subtotal;
    ?>
    <tr>
        <td>{{$no++}}</td>
        <td>{{$value['ProductName']}}</td>
        <td>{{$value['UnitPrice']}}</td>
        <td>{{$value['Quantity']}}</td>
        <td>{{$subtotal}}</td>
    </tr>
    @endforeach
    <tr>
        <th colspan="4">Total</th>
        <td>{{$total}}</td>
    </tr>
</table>