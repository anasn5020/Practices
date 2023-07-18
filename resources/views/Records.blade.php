<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class=" container table-responsive">
        <h1 class="text-center">Records</h1>
        <table class="table table-striped table-success table-hover" border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Address</th>
                <th>Opertation</th>
            </tr>
            @foreach ($members as $items)   
            <tr>
                <td>{{$items['id']}}</td>
                <td>{{$items['name']}}</td>
                <td>{{$items['email']}}</td>
                <td>{{$items['message']}}</td>
                <td>{{$items['address']}}</td>
                <td><a class="btn btn-danger" href={{"del/".$items['id']}}>Delete</a>
                    <a class="btn btn-warning" href={{"edit/".$items['id']}}>Edit</a>
                </td>
            </tr>
            @endforeach
            {{$members->links()}}
        </table>
    </div>


<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>