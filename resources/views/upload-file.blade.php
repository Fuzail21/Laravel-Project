<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="text-center " action="{{route('fileUpload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <input class="btn btn-success" type="submit" value="Submit">
    </form>


    <div class="container">
        <table class="table" style="padding: 12%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>File Name</th>
                    <th>File Path</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fileModel as $file)

                <tr>
                    <td>{{ $file->id}}</td>
                    <td>{{ $file->name}}</td>
                    <td>{{ $file->file_path}}</td>
                    <td>
                        <a href="{{url('/download-file',)}}/{{$file->id}}">
                        <button class="btn btn-primary">Download</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
