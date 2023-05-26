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
        <h2 style="text-align: center; margin: 40px 0 30px 0; font-weight: 600;">Create your flipbook</h2>
        <form action="{{ route('post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="addMoreInputFields[0][subject]" placeholder="Enter subject" class="form-control" />
                    </td>
                    <td>
                        <textarea type="text" name="addMoreInputFields[0][text]" placeholder="Enter Description" class="form-control" ></textarea>
                    </td>
                    <td>
                        <input type="file" name="addMoreInputFields[0][image]" placeholder="Enter file" class="form-control" />
                    </td>
                    <td>
                        <input type="link" name="addMoreInputFields[0][link]" placeholder="Enter link" class="form-control" />
                    </td>
                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-primary">Add Book</button></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success btn-block" style="margin: 0 0 0 3px;">Save</button>
            <a class="btn btn-danger" style="float: right;" href="{{ route('flipbookAdmin') }}">Back</a>
        </form>
    </div>
</body>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    var i = 0;
    var maxInput = 20;
    $("#dynamic-ar").click(function () {
        if( i < maxInput){
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><textarea type="text" name="addMoreInputFields[' + i +
            '][text]" placeholder="Enter description" class="form-control" ></textarea></td><td><input type="file" name="addMoreInputFields[' + i +
            '][image]" placeholder="Enter file" class="form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
            '][link]" placeholder="Enter link" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        }else{
            alert('maximum input');
        }
    });

    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
        --i;
    });
}); 
</script>
</html>