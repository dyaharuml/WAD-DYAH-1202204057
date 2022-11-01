<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BOOKING</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <section id="home">
    <nav class="navbar navbar-expand-lg navbar-fixed-top navabr-dark bg-dark">
        <div class="mx-auto d-flex">
        
        <div class="collapse navbar-collapse" id="navbarNAV">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav=link" href="home.php" style="color:white">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav=link" href="home.php" style="color:white">booking</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
        </section>

        <selection id="about"> <div class="mt-1 row" style="padding:100px;text-align:justify">
        <div class="mt-1 row" style="padding:7px;text-align:justify;background-color:white;height:50px">
        <center> <h5 style="color:black">Rent Your Car Now</h5></center>
    </div>
    </div>

    <div class="container-fluid text-center">
        <div class="mt-1 row" style="padding:50px;text-align:justify">

            <div class="col-sm-6 py-5">
                <div class="p-5">
                    
                    <div class="container">
                        <div class="img-card">
                            <?php
                            if (empty($_GET["gambarpost"])) {
                                echo '<center><img class="img-fluid booking car prev" src="C:\Users\LEGION\Documents\Materi Kuliah\Semester 5\Praktikum WAD\MODUL2_DYAH\image';
                            } else {
                                echo 'img class="img-booking car prev" src="https://' . $_GET['gambarpost'];
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-6 px-2">

                    <form method="post" action="Mybooking.php">
                        <div class="form-group">
                            <label for="inputNama" class="coll-sm-2 coll-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" placeholder="Nama anda" name="nama" value="DYAH_1202204057" required readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inDate" class="col-sm-3 col-form-label">Book date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputDate" placeholder="mm/dd/yyyy" name="masukkantanggal" value="<?php echo date('Y-m-d'); ?>" require>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="startTime" class="col-sm-3 col-form-label">Start time</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" id="startTime" placeholder="--:-- --" name="start" value="" require>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDuration" class="col-sm-3 col-form-label">Duration (Days)</label>
                            <div class="col-sm-10">
                                <input requiredname="duration" placeholder="Duration" class="form-control" type="number" min="1" aria-describedby="days">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-10 col-form-label" for="sel1">Car type</label>
                            <div class="col-sm-10">
                                <?php
                                if (empty($_GET['Mobil'])) {
                                    echo '
                                    <select name="listdata" class="form-control" id="listdata" onchange="change_image()">
                                        <option id="1" value="Toyota rush">
                                            Toyota rush</option>
                                        <option id="2" value="Toyota ayla">
                                            Toyota ayla</option>
                                        <option id="3" value="Honda brio">
                                            Honda brio</option>
                                    </select>';
                                    
                                } else {
                                    $carType = $_GET['Mobil'];
                                    $stat = is_null($carType);
                                    if ($stat !=1) {
                                        echo '
                                        <input readonly name="listdata" type="text" class="form-control disabled" id="listdata" value="'. $carType . '"required>';
                                    } else {
                                        echo '  <div class="col-sm-12">
                                        <Select name="listdata" class="form-control" id=listdata" onchange="change_image()">
                                            <option id="1" value="Toyota rush">
                                                Toyota rush</option>
                                            <option id="2" value="Toyota ayla">
                                                Toyota ayla</option>
                                            <option id="3" value="Honda brio">
                                                Honda brio</option>
                                            </seelect>
                                        </div>';
                        
                                    }
                                }
                                ?>
                            </div>
                        </div>


                        <div class="from-group">
                            <label class="col-sm-10 col-form-label">Phone Number:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPhone" placeholder="Nomor telpon" name="notelp" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="Col-sm-10 col-form-label" for="sel1">Add Service(s)</label>
                            <div class="col-sm-10">

                            <input type="checkbox" name="services[]" value="Machine"> Catering / Rp 25000 <br>
                                <input type="checkbox" name="services[]" value="Decoration"> Brake canvas / Rp 100000 <br>
                                <input type="checkbox" name="services[]" value="Sound"> Car tires / Rp 250000 <br>
                                </fieldset>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-12 py-3">
                                <button type="submit" name="submit" id="btn btn-outline-primary btn-center" color="blue" style="width:50%; margin:0; top: 75%; left: 75%;
                                -ms-transform: translate(-10%, -10%);
                                transform: translate(30%, 25%);">Book</button>
                            </div>
                        </div>

                    </form>
            </div>
    
    </div>
    </div>

    <footer class="bg-light py-2 text-center"><p class="text-secondary m-0">dibuat oleh DYAH_1202204057</p></footer>
        </selection>

    </body>
</html>