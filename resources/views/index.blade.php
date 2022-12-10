<!-- Halaman pertama menampilkan daftar kategori dimana
setiap kategori bisa diklik menuju ke halama kedua -->

<h1>Categories</h1>


<table cellspacing="0" cellpadding="10" border="1">
    @foreach ($dataCategory as $category)
    <tr>
        <td><a href="/product/{{$category->CategoryID}}">{{$category->CategoryName}}</a></td>
    </tr>
    @endforeach
</table>