<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Add/Remove Multiple Input Fields Example</title>
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <style>
        html, body{
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
<body>
    <div class="container-xl">
        <h2 style="text-align: center; margin: 40px 0 30px 0; font-weight: 600;">Edit your flipbook</h2>
        <form action="{{ route('update5', ['bookflip' => $bookflip->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Image</th>
                    <th>Link</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" value="{{ $bookflip->subject }}" name="subject" placeholder="Enter subject" class="form-control" />
                    </td>
                    <td>
                        <textarea type="text" name="text" placeholder="Enter Description" class="form-control" >{{ $bookflip->text }}</textarea>
                    </td>
                    <td>
                        <input type="file" name="image" placeholder="Enter file" class="form-control" />
                    </td>
                    <td>
                        <input type="link" value="{{ $bookflip->link }}" name="link" placeholder="Enter link" class="form-control" />
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success btn-block">Save</button>
            <a class="btn btn-danger" style="float: right;" href="{{ route('flipbookAdmin') }}">Back</a>
        </form>
        <div style="text-align: center;">
            <b>Previous Image</b>
            <div>
                <img src="{{ asset('storage/images/' . $bookflip->image) }}" style="width: 200px;">
            </div>
        </div>
    </div>
</body>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</script>
</html>