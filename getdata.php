<?php

require_once "connection.php";

$query = "SELECT * FROM resume";

$result = mysqli_query($mysqli,$query);

if($result){
    echo "<table class='table table-bordred'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Firstname</th>";
    echo "<th>Lastname</th>";
    echo "<th>Email</th>";
    echo "<th>Mobile</th>";
    echo "<th>Gender</th>";
    echo "<th>State</th>";
    echo "<th>City</th>";
    echo "<th>Eduction</th>";
    echo "<th>Hobbies</th>";
    echo "<th>CareerObjective</th>";
    echo "</tr>";
    while($data = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$data['ID']."</td>";
        echo "<td>".$data['Firstname']."</td>";
        echo "<td>".$data['Lastname']."</td>";
        echo "<td>".$data['Email']."</td>";
        echo "<td>".$data['Mobile']."</td>";
        echo "<td>".$data['Gender']."</td>";
        echo "<td>".$data['State']."</td>";
        echo "<td>".$data['City']."</td>";
        echo "<td>".$data['Eduction']."</td>";
        echo "<td>".$data['Hobbies']."</td>";
        echo "<td>".$data['CareerObjective']."</td>";
        echo "</tr>";
    }
}

mysqli_close($mysqli);

?>