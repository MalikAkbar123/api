<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Api</title>
</head>
<body>
    <form action="/custo/store" method="post">
        @csrf
        <input type="text" name="nama" id="" placeholder="Nama">
        <input type="number" namex="id_number" id="" placeholder="Id_Number">
        <input type="date" name="delivery_date" id="" placeholder="Tanggal Pengiriman">
        <input type="text" name="email" id="" placeholder="email">
        <button type="submit">Submit</button>
    </form>
</body>
</html>