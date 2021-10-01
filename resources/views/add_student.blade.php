

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
    <div class="content">
        <h2>Add New Student</h2>
        <br>
        {{-- action url for post method --}}
        <form action="/addStudent" method="POST" style="width: 50%;">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name..."/>
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input type="text" class="form-control" name="age" placeholder="Age..."/>
            </div>
            <br>
            <button type="submit" class="btn btn-success" name="add">Add</button>
            <button type="submit" class="btn btn-primary" name="cancel" id="cancel">Cancel</button>
        </form>
    </div>

</body>

<style>
    .content {
        max-width: 1000px;
        margin: auto;
    }

    #cancel {
        margin-left: 10px;
    }

</style>

</html>
