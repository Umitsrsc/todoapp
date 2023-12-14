<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yapılacaklar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">To Do List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            
            </div>
        </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 my-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Görev Ekle</div>
                            <form action="/todos/list" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="gorev">Görev</label>
                                    <input type="text" class="form-control" name="gorev" id="gorev">
                                </div>

                                <div class="form-group">
                                    <label for="aciklama">Açıklama</label>
                                    <textarea class="form-control" name="aciklama" id="aciklama" cols="10" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary my-2">Ekle</button>
                            </form>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


</html>