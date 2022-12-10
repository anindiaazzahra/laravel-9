<!-- Halaman ini menampilkan
informasi semua kolom dari produk tersebut. Dibagian paling bawah halaman ini diberi
form yang berisi textbox untuk memasukkan jumlah produk yang akan dibeli dan sebuah
tombol beli. Jika tombol beli diklik, data ini akan terkirim ke halaman shopping cart. -->

<h1>Detail Product</h1>

<table cellspacing="0" cellpadding="5" border="1">
    <tr>
        <th rowspan="3">Product ID</th>
        <th rowspan="3">Product Name</th>
        <th colspan="5">Supplier</th>
        <th rowspan="3">Quantity Per Unit</th>
        <th rowspan="3">Unit Price</th>
        <th rowspan="3">Units In Stock</th>
        <th rowspan="3">Units On Order</th>
        <th rowspan="3">Reorder Level</th>
        <th rowspan="3">Discontinued</th>
    <tr>
    <tr>
        <th>Company Name</th>
        <th>Contact Name</th>
        <th>Contact Title</th>
        <th>Address</th>
        <th>Phone</th>
    </tr>
    <tr>
        <td>{{$detailProduct[0]->ProductID}}</td>
        <td>{{$detailProduct[0]->ProductName}}</td>

        <td>{{$detailProduct[0]->CompanyName}}</td>
        <td>{{$detailProduct[0]->ContactName}}</td>
        <td>{{$detailProduct[0]->ContactTitle}}</td>
        <td>{{$detailProduct[0]->Address}}</td>
        <td>{{$detailProduct[0]->Phone}}</td>

        <td>{{$detailProduct[0]->QuantityPerUnit}}</td>
        <td>{{$detailProduct[0]->UnitPrice}}</td>
        <td>{{$detailProduct[0]->UnitsInStock}}</td>
        <td>{{$detailProduct[0]->UnitsOnOrder}}</td>
        <td>{{$detailProduct[0]->ReorderLevel}}</td>
        <td>{{$detailProduct[0]->Discontinued}}</td>
    </tr>
</table>
<br>
<!-- form input shopping cart -->
<form action="/add-shopping-cart" method="POST">
    @csrf
    <input type="hidden" name="ProductID" value="{{$detailProduct[0]->ProductID}}">
    <input type="hidden" name="ProductName" value="{{$detailProduct[0]->ProductName}}">
    <input type="hidden" name="UnitPrice" value="{{$detailProduct[0]->UnitPrice}}">
    Beli sebanyak: <input type="number" min="1" name="qty" required>
    <input type="submit" value="Beli">
</form>