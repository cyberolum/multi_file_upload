<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Multi photo upload</title>
</head>
<body>

<form action="<?= base_url(); ?>home/upload" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="form-group">
                    <label for="img">File:</label>
                    <input type="file" name="uploadimage[]" class="form-control" id="img" multiple="multiple">
                </div>

                <input type="submit" name="upload" class="btn btn-default" value="Submit">
            </div>
        </div>
    </div>
</form>
</body>
</html>
