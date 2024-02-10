<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width: 100%;
        background-color: #f1f1c1;
    }
    


</style>
<body>
    <div>
        <h1>Admin Page</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Name</th>
                <th>Phone</th>
                <th>City</th>
                <th>State</th>




            </tr>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ireg";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if(!$conn){
                die("conn failed". mysqli_connect_error());
            }
            
            $sql =  "SELECT * FROM registered";

            $result = $conn->query($sql);

            if(!$result){
                die("query failed");
            }

            while($row = $result->fetch_assoc()){
                echo "

                <tr>

                <td>$row[id]</td>
                <td>$row[email]</td>
                <td>$row[name]</td>
                <td>$row[phone]</td>
                <td>$row[city]</td>
                <td>$row[state]</td>
                </tr>
                
                ";
            }
            
            
            ?>

            


        </table>
    </div>
    



</body>
</html>



