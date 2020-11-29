<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Kullanıcı-Ürün Tablosu</h2>

<table>
    <tr>
        <th>Ad</th>
        <th>Ürün</th>
        <th>Fiyat</th>
    </tr>

    @foreach($userProducts as $userProduct)
    <tr>
        <td>{{$userProduct->name}}</td>
        <td>{{$userProduct->pName}}</td>
        <td>{{$userProduct->price}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
