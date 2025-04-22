<!DOCTYPE html>
<html>
<head>
    <title>Daftar Ekskul</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Daftar Ekskul Sekolah</h1>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ekskul</th>
                    <th>Pembina</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->pembina }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
