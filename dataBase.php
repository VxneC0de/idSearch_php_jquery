<?php

//REGISTRATION

$connection = mysqli_connect("localhost", "root", "", "idsearch_vxnec0de") or die("Could not connect to DB");

if($_POST['id'] !== "" && $_POST['name'] !== "" && $_POST['lastName'] !== ""){
    
    $sql = "insert into identification values('', '$_POST[id]', '$_POST[name]', '$_POST[lastName]', 0)";
    
    if(mysqli_query($connection, $sql)){
        
        echo  "Your registration was successful";
    }else{
      echo "There were problems registering, please try again later";
    };
  
}else{
    echo "You cannot leave empty fields";
}

//SHOW DATA

$sqlShow = "SELECT * FROM identification";
$result = mysqli_query($connection, $sqlShow);


//SEARCH USER

if (isset($_POST['searchData'])) {

    $searchId = $_POST['searchData'];
    $sqlSearch = "SELECT * FROM identification WHERE cedula = '$searchId'";
    $resultSearch = mysqli_query($connection, $sqlSearch);

    if (mysqli_num_rows($resultSearch) > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>ID USER</th>
                <th>NAME</th>
                <th>LAST NAME</th>
                <th>STATUS</th>
              </tr>";

        while ($ver = mysqli_fetch_array($resultSearch)) {
            echo "<tr>
                    <td>{$ver[0]}</td>
                    <td>{$ver[1]}</td>
                    <td>{$ver[2]}</td>
                    <td>{$ver[3]}</td>
                    <td>{$ver[4]}</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No records found for ID: $searchId";
    }
}
?>