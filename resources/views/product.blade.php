<!-- Halaman ini menampilkan informasi productid, productname dan unitprice. Productname bisa diklik
menuju halaman ketiga. -->


<h1><?= $dataProduct[0]->CategoryName ?></h1>

<table cellspacing="0" cellpadding="5" border="1">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Unit Price</th>
    <tr>
        @foreach ($dataProduct as $product)
    <tr>
        <td>{{$product->ProductID}}</td>
        <td><a href="/detail-product/{{$product->ProductID}}">{{$product->ProductName}}</a></td>
        <td>{{$product->UnitPrice}}</td>
    </tr>
    @endforeach
</table>