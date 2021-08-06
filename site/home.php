<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100%;
        }

        #header {
            width: 100%;
        }

        #main {
            flex: 1;
        }
        #content{
            padding: 50px;
        }
    </style>

    <title>Site minha carteira</title>
</head>

<body>
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">Minha carteira</a>
            </div>
        </nav>
    </div>
    <div id="main">
        <div class="row justify-content-center">
            <div id="content" class="col-4 align-self-center">
                <div class="card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Login</h5>
                            <form action="/admin/login" method="POST">
                                <div class="mb-3">
                                    <label for="admin" class="form-label">Admin</label>
                                    <input type="text" class="form-control" id="admin" aria-describedby="adminHelp" name="admin" placeholder="">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>