<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Clients List</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center p-4">Our Top Clients </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{$message->id}}</td>
                        <td>{{$message->fullname}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{{$message->message}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
    
