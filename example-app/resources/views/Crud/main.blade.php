<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Customer <b>Details</b></h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <a href="/customers/create"><button class="btn-success">Add</button></a>
                                <a href="/logout"><button class="btn-danger">LOGOUT</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name <i class="fa fa-sort"></i></th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($customers as $index => $customer) { ?>
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{$customer -> c_name}}</td>
                            <td>{{$customer -> c_phone}}</td>
                            <td>
                                <a href="/customers/{{$customer->c_id}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="/customers/{{$customer->c_id}}/edit" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <form method="POST" action="/customers/{{$customer->c_id}}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete" title="Delete" data-toggle="tooltip" style="color: red; border: none; background-color: transparent; cursor: pointer;">
                                        <i class="material-icons bg-red">&#xE872;</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>