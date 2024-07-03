<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>ID Search</title>
</head>
<body>
    
    <main>
        
        <section class="registration">
            
            <h1>User Form</h1>

            <form action="dataBase.php" method="post">

                <label for="id">Id</label>
                <input type="text" name="id" id="id-registration" placeholder="Enter your ID" required>

                <label for="name">Name</label>
                <input type="text" name="name" id="name-registration" placeholder="Enter your Name" required>

                <label for="lastname">Last Name</label>
                <input type="text" name="lastName" id="lastName-registration" placeholder="Enter your Last Name" required>

                <button type="submit" id="enter-registration">Enter</button>

            </form>

            <p id="answer-registration"></p>

        </section>

        <section class="showData">

            <h1>All Records</h1>

            <table>

                <tr>
                    <th>ID</th>
                    <th>ID USER</th>
                    <th>NAME</th>
                    <th>LAST NAME</th>
                    <th>STATUS</th>
                </tr>

                <?php
                
                require_once "dataBase.php"; //// Includes the file with the connection and functions
                
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td>" . $row[3] . "</td>";
                        echo "<td>" . $row[4] . "</td>";
                    echo "</tr>";

                }
                ?>

            </table>

        </section>

        <section class="searchUser">

            <form action="dataBase.php" method="post">

                <label for="search">Search by ID</label>
                <input type="text" name="search" id="search-registration" placeholder="Enter ID" required>

                <button type="submit" id="enter-search">Search</button>

            </form>

            <p id="answer-search"></p>

        </section>

    </main>


    <script src="jquery.js"></script>
    <script src="./logic.js"></script>
</body>
</html>