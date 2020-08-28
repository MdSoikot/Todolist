<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <tr class="header">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
             @foreach ($allData as $item)
                
           
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>