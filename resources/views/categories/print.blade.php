<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kategori</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h3>Daftar Kategori</h3>
    <table>
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->kategori }}</td>
                <td>{{ $category->deskripsi }}</td>
                <td>{{ $category->harga }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
