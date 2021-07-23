
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        html, body{
            height: 100%;
        }
        #header{
            width: 100%;
        }
        #main{
            flex: 1;
        }

        #menu{
            height: 100px;
            padding-top: 20px;
        }

        #menu .nav-link.active {
            color: #fff;
            background-color: #0d6efd;
        }

        #content{
            padding-top: 20px;
        }

        

        .fundo{
            background: currentColor;
            height: 37rem;
            border-radius: 1rem;
            margin-top: 4rem;
        }

        .col{
            margin: 2rem;
            width: 9rem;
        }

    </style>

    <title>Admnistração</title>
  </head>
  <body>
        <div id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand text-light" href="#">Minha carteira</a>
                </div>
            </nav>
        </div>
        <div class="container" id="main">
            <div class="row fundo">
                <div class="col">
                    <ul class="nav flex-column" id="menu">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Movimentação</a>
                        </li>                        
                    </ul>
                </div>
                <div class="col-10" id="content">
                    <?php include __DIR__ . $content; ?>
                </div>
            </div>
        </div>
    
</body>
</html>