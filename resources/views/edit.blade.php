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
    <div class="container">
        <h1 class="text-center">Update Your Records</h1>
        <form class="mt-5" action="/edit" method="POST">
            @csrf
            <input type="hidden" name="id" value={{$data['id']}}>
            Name: <br>
            <input type="text" class="w-100 p-3" name="name" value="{{$data['name']}}"><br><br>
            Email: <br>
            <input type="text" class="w-100 p-3" name="email" value="{{$data['email']}}"><br><br>
            Message: <br>
            <input type="text" class="w-100 p-3" name="message" value="{{$data['message']}}"><br><br>
            Address: <br>
            <input type="text" class="w-100 p-3" name="address" value="{{$data['address']}}"><br><br>
            <button class="btn btn-success w-25" type="submit">Update</button>
            </form>
        
    </div>
    
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>