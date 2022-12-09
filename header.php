<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GUB Student Club</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!----------------------------Header Starts--------------------------------->
    <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="index.php"><img src="images/stdlogo.png" alt=""></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="about.php">About Club</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Topics
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">CSE</a></li>
                              <li><a class="dropdown-item" href="#">EEE</a></li>
                              <li><a class="dropdown-item" href="#">TEX</a></li>
                              <li><a class="dropdown-item" href="#">LAW</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Other Topics</a></li>
                            </ul>
                          </li>
                          
                          
                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <a href="register.php"><button type="button" class="btn btn-success m-2">Join Club</button></a>
                        <a href="login.php"><button type="button" class="btn btn-warning">Login</button></a>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
        
    </header>