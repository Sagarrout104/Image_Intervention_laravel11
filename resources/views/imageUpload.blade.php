<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Image - Intervention</title>
</head>

<body>
    <div class="container py-4">
        <div class="row h-100">
            <div class="d-flex justify-content-center">
                <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card  border border-dark">
                        <div class="card-header">
                            <h4 class="card-title">Image Intervention in Laravel 11</h4>
                        </div>
                        <div class="card-body">
                            <div class=" form-group">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image"
                                    class="form-control @error('image')
                                    is-invalid
                                @enderror">
                                @error('image')
                                    <p class=" invalid-feedback ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        @session('success')
                            <p class=" text-success text-center"> {{ session('success') }}</p>
                        @endsession
                        <div class="card-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
