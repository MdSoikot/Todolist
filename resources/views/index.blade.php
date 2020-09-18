<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <table class="table">
            <tr class="header">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            @php
            $i = 1;
            @endphp
            @foreach ($allData as $item)


                <tr>
                    <td>{{ $i++ }} </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <span><i class="fab fa-facebook-f"></i></span>
                        <a href="delete/{{ $item->id }}" class="delete">Delete
                            <a href="#" class="edit">Edit
                    </td>
                </tr>

            @endforeach
        </table>
    </div>
</body>

</html>
