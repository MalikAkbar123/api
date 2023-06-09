<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container my-5">
        <a href="students/create" class="btn btn-success">Tambah Data</a>
        <table class="table table-bordered table-warning my-3">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>Id_Number</th>
                    <th>Tanggal_Pengiriman</th>
                    <th>Email</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $value)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $student['name']}}</td>
                        <td>{{ $student['id_number']}}</td>
                        <td>{{ $student['delivery_date']}}</td>
                        <td>{{ $student['email']}}</td>
                        <td> <a href="/students/{{$student['id']}}" class="btn btn-primary">show<i class="bi bi-eye-fill"></i></a>
                             <a href="/students/edit/{{$student['id']}}" class="btn btn-warning">edit<i class="bi bi-sliders"></i></a>
                             <form action="/students/delete{{$student['id']}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i>delete</button>
                             </form>
                             {{-- <a href="/students/delete/" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a> --}}
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>