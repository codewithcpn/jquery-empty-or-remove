<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class=" mt-3 text-primary">jQuery: Empty or Remove methods</h1>
            <hr class="text-center" style="width:50%">
            <div class="col-md-12 border border-primary bg-info" id="empty">
                <h2>Text Box</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s </p>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" id="emptybtn">Empty</button>
                <button type="submit" class="btn btn-primary" id="removebtn">Remove</button>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#emptybtn').click(function() {
            $('#empty').empty();
        });

        $('#removebtn').click(function() {
            $('#empty').remove();
        })
    })
    </script>
</body>


</html>
