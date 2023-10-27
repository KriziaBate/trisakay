<?php
include 'conn.php'; // Include your database connection script

// Define or initialize the $BookingID variable
$BookingID = 2; // Replace 123 with the actual BookingID you want to retrieve

// Your SQL query with the defined $BookingID
$query = "SELECT BodyNumber, Toda, PickupPoint, DropoffPoint, Fare, ConvenienceFee, Distance,driverETA FROM booking WHERE BookingID = $BookingID";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

// Fetch the data from the result set
$row = mysqli_fetch_assoc($result);

// Store the retrieved data in variables
$BodyNumber = $row['BodyNumber'];
$Toda = $row['Toda'];
$PickupPoint = $row['PickupPoint'];
$DropoffPoint = $row['DropoffPoint'];
$Fare = $row['Fare'];
$ConvenienceFee = $row['ConvenienceFee'];
$Distance = $row['Distance'];
$driverETA = $row['driverETA'];

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/commuter.css">
    <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/commuter.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .container {
            width: 500px;
            margin: 20px auto;
            border: 1px solid #FFFF;
            padding: 10px;
            margin-top: 5%;
            background: #e6ebda;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 75vh; /* Center vertically in the viewport */
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: black;
        }
        tr:nth-child(even) {
            background-color: #0000;
        }
        td, p {
            color: black; /* Change to the color of your choice */
        }
        title {
            color: black;
        }
        h1 {
            color: black;
        }
        p {
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="container">
<img src="img/navbar.png" alt="Image Description" width="300" height="100"> <!-- Centered both horizontally and vertically -->

    <h1>Your Receipt</h1>

    <!-- Add an image with the <img> tag -->
        
    <table>
        <tr>
            <td>Body Number</td>
            <td><?php echo $BodyNumber; ?></td>
        </tr>
        <tr>
            <td>Toda</td>
            <td><?php echo $Toda; ?></td>
        </tr>
        <tr>
            <td>Pickup Point</td>
            <td><?php echo $PickupPoint; ?></td>
        </tr>
        <tr>
            <td>Dropoff Point</td>
            <td><?php echo $DropoffPoint; ?></td>
        </tr>
        <tr>
            <td>Fare</td>
            <td><?php echo $Fare; ?></td>
        </tr>
        <tr>
            <td>Convenience Fee</td>
            <td><?php echo $ConvenienceFee; ?></td>
        </tr>
        <tr>
            <td>Distance</td>
            <td><?php echo $Distance; ?></td>
        </tr>
    </table>
    
    <?php
        // Calculate the total amount by adding Fare and ConvenienceFee
        $totalAmount = $Fare + $ConvenienceFee;
    ?>
    
    <p>Total Amount: ₱<?php echo $totalAmount; ?></p>
</div>
</body>
</html>

