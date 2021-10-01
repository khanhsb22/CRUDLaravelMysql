<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

</body>

</html>

<div class="div1">
    <h1>All Students</h1>
</div>

<div class="div2">
    <a onclick="return confirm('Do you want to delete all record ?')"
        href="/delete_all_student" class="btn btn-danger">Delete All</a>

    <a href="/add_student" class="btn btn-success">Create new student</a>
</div>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $item)
            <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['age'] }}</td>
                <td>
                    <a href="/edit_student/{{ $item['id'] }}" class="btn btn-primary"><i
                            class="glyphicon glyphicon-pencil"></i></a>
                    <a onclick="return confirm('Are you sure you want to delete this entry?')"
                        href="/delete_student/{{ $item['id'] }}" class="btn btn-danger" name="deleteButton"><i
                            class="glyphicon glyphicon-trash"></i></a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<style>
    body {
        margin-left: 30px;
        margin-right: 30px;
    }

    td,
    th {
        text-align: center;
    }

    .div2 {
        float: right;
        margin-top: 50px;
        padding-bottom: 50px;
    }

    .div1 {
        float: left;
    }

</style>
