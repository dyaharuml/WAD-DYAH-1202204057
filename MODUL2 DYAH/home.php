<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <style>
        body {
            font-family:"Trebuchet MS",sans-serif;
        }

    </style>
</head>

<body>
<section id="home">
   
   <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark ">
         <div class="mx-auto d-flex">
         
         <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
             <li class="nav-item active">
               <a class="nav-link" href="index.php">Home</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="Booking.php">Booking</a>
             </li>
   
           </ul>
         </div>
         </div>
       </nav>
   
     </section>

     
     <section id="about">
    <class="container"></class>
     <div style="padding: 1% 6%;">
        <h3 class="text-center">WELCOME TO EAD RENT</h3>
        <h5 class="bg-white mx-auto text-black text-center p-3">Find your best car, here!</h5>
        <div class="row w-75 m-auto" >
      

        <div class="col-4 px-2">
          <div class="card">
            <img src="image\toyota rush.png">
            <div class="card-body">
              <h5 class="card-title">Toyota rush</h5>
              <p class="card-text" style="text-align:justify; ">Rp 320.000 / Days</p>
              <hr>
              <center><p style="color:blue; font-size: 15px;font-weight:bold">7 Kursi</p><hr><p style="color:gblue; font-size: 15px;font-weight:bold">1500 CC</p><hr><p style="color:blue; font-size: 15px;font-weight:bold">Manual</p><p style="color:blue; font-size: 15px;font-weight:bold"><hr>

                <a href="booking.php?Mobil=<?php echo 'Toyotarush&gambarpost=C:\Users\LEGION\Documents\Materi Kuliah\Semester 5\Praktikum WAD\MODUL 2\image\toyota rush.png' ?>"><button type="button" class="btn btn-primary btn-block"style="width:60%">Book Now</button></a>
              </center>
            </div>
          </div>
        </div>

        <div class="col-4 px-2">
          <div class="card">
            <img src="image\toyota ayla.png">
            <div class="card-body">
              <h5 class="card-title">Toyota ayla</h5>
              <p class="card-text" style="text-align:justify; ">Rp 160.000 / Days</p>
              <hr>
              <center><p style="color:blue; font-size: 15px;font-weight:bold">5 Kursi</p><hr><p style="color:gblue; font-size: 15px;font-weight:bold">1200 CC</p><hr><p style="color:blue; font-size: 15px;font-weight:bold">Manual</p><p style="color:blue; font-size: 15px;font-weight:bold"><hr>

                <a href="booking.php?Mobil=<?php echo 'Toyotarush&gambarpost=C:\Users\LEGION\Documents\Materi Kuliah\Semester 5\Praktikum WAD\MODUL 2\image\toyota ayla.png' ?>"><button type="button" class="btn btn-primary btn-block"style="width:60%">Book Now</button></a>
              </center>
            </div>
          </div>
        </div>

        <div class="col-4 px-2">
          <div class="card">
            <img src="image\honda brio.jpg">
            <div class="card-body">
              <h5 class="card-title">Honda brio</h5>
              <p class="card-text" style="text-align:justify; ">Rp 280.000 / Days</p>
              <hr>
              <center><p style="color:blue; font-size: 15px;font-weight:bold">5 Kursi</p><hr><p style="color:gblue; font-size: 15px;font-weight:bold">1200 CC</p><hr><p style="color:blue; font-size: 15px;font-weight:bold">Automstic</p><p style="color:blue; font-size: 15px;font-weight:bold"><hr>

                <a href="booking.php?Mobil=<?php echo 'Toyotarush&gambarpost=C:\Users\LEGION\Documents\Materi Kuliah\Semester 5\Praktikum WAD\MODUL 2\image\honda brio.jpg' ?>"><button type="button" class="btn btn-primary btn-block"style="width:60%">Book Now</button></a>
              </center>
            </div>
          </div>
        </div>
        
            </div>
          </div>
        </div>




  </section>
</body>