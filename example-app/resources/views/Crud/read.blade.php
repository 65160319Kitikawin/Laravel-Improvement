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
            <h4>Read Form</h4>
            <br>
            <div>
                @csrf
                <p>Name : {{ $c_data -> c_name}}</p>
                <p>Phone : {{ $c_data -> c_phone }}</p>
                <div class="d-flex  mt-3 justify-content-center">
                    <a href="/customers"><button type="button" class="btn-primary">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>