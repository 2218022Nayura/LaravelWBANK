<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category Report</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            text-align: left;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Category Report</h1>

    <table>
        <thead>
            <tr>
                <th>Jenis Kartu</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->jenis_kartu }}</td>
                    <td>{{ $category->kategori }}</td>
                    <td>{{ $category->deskripsi }}</td>
                    <td>{{ $category->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
