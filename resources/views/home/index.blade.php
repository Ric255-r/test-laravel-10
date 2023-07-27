<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    div {
        border: 1px solid black;
    }

    .bg1 {
        height: 1000px;
        background-repeat: no-repeat;
        background-image:url({{ asset('assets/img/astronaut.jpg') }}); 
    }
</style>
<body>
    <div class="bg1">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p>Halo</p>
                </div>
                <div class="col-sm-4">
                    <p>Nama</p>
                </div>
                <div class="col-sm-4">
                    <p>Ricardo</p>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>