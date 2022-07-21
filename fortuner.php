<!DOCTYPE html>
<html>
    <title>Booking</title>
    <head>
        <style>
            .pos{
                margin: 0 auto;
                margin-top: 30px;
                width: 70%;
                position: relative;
            }
            table{
                background-image: url('bgtb.jpg');
            }
            p.double {border-style: double; font-size: 24px; margin: 10px; text-align: center; position: relative; border-color: rgb(0, 0, 0); font-family: cursive; font-style: italic; background-color: rgb(98, 130, 130); color: #fff;}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body style="background-color: rgb(85, 85, 109);">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
            <div class="container">
                <a class="navbar-brand" href="index.html">RENTAL MOBIL CHANDRA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book.html">Book Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesanan.php">Cek Pesanan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Contact Person</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07">
                        <li><a class="dropdown-item" href="https://wa.me/+6289649389245?text=Mantab%20Cuy...">Whatsapp</a></li>
                        <li><a class="dropdown-item" href="#">Instagram</a></li>
                        <li><a class="dropdown-item" href="#">Facebook</a></li>
                        </ul>
                    </li>
                    </ul>
                    <form role="search">
                        <input class="form-control" type="search" placeholder="Cari" aria-label="Cari">
                    </form>
                </div>
            </div>
        </nav>
        <form name="form1" action="proses.php" method="post">
            <div class="pos">
                <p class="double">Formulir Reservasi</p>
                <table border="2" width="100%" height="500px">
                    <td>
                        <div class="mb-2">
                            <label for="mobil" class="form-label" style="color: #fff;"> Jenis Mobil</label>
                            <select id="mobil" name="mobil" class="form-control">
                                <option value="Fortuner 2.8">Fortuner 2.8</option>
                            </select>
                        </div>
                        <label for="nama" class="form-label" style="color: #fff;"> Nama</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <label for="kelamin" class="form-label" style="color: #fff;"> Jenis Kelamin</label>
                        <div class="form-group mb-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" style="margin-left: 1px;" type="radio" id="kelamin" name="kelamin" value="Laki-Laki">
                                <label class="form-check-label" for="kelamin" style="margin-left: 7px; color: #fff;">Laki-Laki</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="kelamin" name="kelamin" value="Perempuan">
                                <label class="form-check-label" for="kelamin" style="color: #fff;">Perempuan</label>
                            </div>    
                        </div>
                        <div class="form-row">
                            <div class="form-group mb-2">
                                <label for="pickup" class="form-label" style="color: #fff;"> Pick Up</label>
                                <input type="date" class="form-control" id="pickup" name="pickup">
                            </div>
                            <div class="form-group mb-2">
                                <label for="return" class="form-label" style="color: #fff;"> Return</label>
                                <input type="date" class="form-control" id="return" name="return">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="alamat" class="form-label" style="color: #fff;"> Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>
                        <button type="submit" name="Submit" value="Kirim" class="btn btn-primary">Simpan</button>&nbsp;<button type="reset" class="btn btn-primary" name="Submit2" value="Batal">Batal</button>
                    </td>
                </table>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>