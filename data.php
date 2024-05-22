<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Display data
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>

    body{
        font-family: 'Varela Round', sans-serif;
    }
    .bodyplaceholder{
        width:1000px;
        height: 1000px;
        background-color: blueviolet;
    }

    .imagebanner{
        width: 1000px;
        height: 200px;
        background-color: brown;
    }

    .mainmenu{
        width: 1000px;
        height: 50px;
        background-color: rebeccapurple;
    }

    .bannerpoltek{
    font-family: 'Varela Round', sans-serif;
    /* background-color: #0a9396;
    /* background: color url('https://politeknik-sampit.ac.id/wp-content/uploads/2022/03/DJI_0238_Moment-scaled-e1648001458516.jpg') others; */

    }

    .imagebackground{
    /* background-image: url(https://raw.githubusercontent.com/randesu/images/main/poltek.jpg); */
    background-image: url(https://desawisatapulesari.wordpress.com/wp-content/uploads/2015/01/cropped-begg.jpg);

    width: 100%;
    height: 300px;
    overflow: hidden;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    /* vertical-align: middle; */
    align-items: center;
    justify-content: center;
    display: flex;
    justify-content: space-evenly;
    }

    .navbar2{
    font-family: 'Varela Round', sans-serif;
    /* align-items: center; */
    /* justify-content: center; */
    height: 50px;
    background-color: #202f5b;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;

    }
    .nav-item:hover{
    background-color: #bdbdbd;
    color: white;

    }

    .dropdown-item:hover{
    background-color: #bdbdbd;

    }

    .container-fluid{
    color: black;

    }

    .mediacontainer{
    width: 100%;
    height: 500px;
    /* background-color: #202f5b; */
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    }

    .boxpaket{
    width: 60%;
    height: 500px;
    /* background-color: white; */
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;

    }

    .postcontainer{
    margin-top: 10px;
    width:350px;
    height:250px;
    /* background-color: #202f5b; */
    border: solid black 2px;
    }

    .boxvideo{
    width: 30%;
    height: 500px;
    /* background-color: blanchedalmond; */

    }



    </style>
</head>
<body>
    <div class="bannerpoltek">
        <div class="imagebackground">
            <!-- <img src="https://politeknik-sampit.ac.id/wp-content/uploads/2022/02/Logo-Politeknik-Sampit.png" alt="" style="width: 15%;height: auto;">
            <img src="https://politeknik-sampit.ac.id/wp-content/uploads/2023/03/Banner-Website-Politeknik-Sampit.png" alt="" style="width: 65%;height: auto;"> -->
    </div>
    </div>
    <nav class="navbar navbar-expand-lg  " style="background-color: rgb(255, 224, 167);">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
          <div class="collapse navbar-collapse bd-dark" id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pesanpaket.html">Daftar Paket Wisata</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="data.php">Modifikasi Pesanan</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu ">
                  <li><a class="dropdown-item" href="#">Action\\\</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <td> Nama</td>
            <td> Nomor HP</td>
            <td> Tanggal Wisata</td>
            <td> Jumlah Orang</td>
            
        </tr>

    </table>
</div>
    
</body>
</html>