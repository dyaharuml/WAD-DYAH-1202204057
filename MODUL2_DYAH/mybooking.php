<!DOCTYPE html>
<html lang="en">
<head>
    <title>metode POST</title>
</head>

<body>
    <?php

    $name = isset($_GET['name']) ? $_GET['name']: '';
    $name = isset($_GET['checkin']) ? $_GET['checkin']: '';
    $name = isset($_GET['checkout']) ? $_GET['checkout']: '';
    $name = isset($_GET['car type']) ? $_GET['car type']: '';
    $name = isset($_GET['phone number']) ? $_GET['phone number']: '';
    $name = isset($_GET['services']) ? $_GET['services']: '';
    $name = isset($_GET['total price']) ? $_GET['total price']: '';
    ?>
    <div class="container">
        <h1 class="text-center">Thank you DYAH_1202204057 for Reserving</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Checkin</th>
                    <th scope="col">Checkout</th>
                    <th scope="col">Car type</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Services</th>
                    <th scope="col">Totak Price</th>
                </tr>
            </thead>
            <tbody>
                <tr><th scope="row">1</th></tr>
                <td><?php echo $name ?></td>
                <td><?php echo $checkin ?></td>
                <td><?php echo $checkout ?></td>
                <td><?php echo $cartype ?></td>
                <td><?php echo $phonenumber ?></td>
                <td><?php echo $services ?></td>
                <td><?php echo $totalprice ?></td>
                </tr>
            </tbody>
        </table>
        <div class="mb-3"><div class="d-flex justify-content-center"
         <a href="booking.php" class="btn btn-outline-primary w-50">Kembali</a>
    </div>
    </div>
</body>