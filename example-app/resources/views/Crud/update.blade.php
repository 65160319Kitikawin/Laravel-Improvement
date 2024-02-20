<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="form-label">
            <h4>Update Form</h4>
            <form action="/customers/{{$c_data -> c_id}}" method="POST">
                @csrf
                @method("PUT")
                <label>Name</label>
                <br>
                <input name="name" type="text" value="{{ $c_data -> c_name}}">
                <br>
                <label>Phone</label>
                <br>
                <input name="phone" type="text" value="{{ $c_data -> c_phone }}">
                <div class="d-flex  mt-3 justify-content-between">
                    <a href="/customers"><button type="button" class="btn-primary">Back</button></a>
                    <button type="submit" class="btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>