<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            background-color: #B9D9EB;
        }

        .btnBox {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        th {
            text-align: center;
        }



        .container {
            max-width: 95%;
            background-color: #B9D9EB;
            padding-top: 23px;
            padding-bottom: 23px;
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <h1>SHOW EMPLOYEES DATA</h1>



        <div class="container">

            <table class="table table-bordered border-warning">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>AGE</th>
                        <th>EMAIL</th>
                        <th>DESIGNATION</th>
                        <th>SALARY</th>
                        <th>CITY</th>
                        <th>OPTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('conn.php');

                    // if($connection){
                    //     echo "db connected";
                    // }

                    $showTable = "SELECT * FROM emp_tbl";

                    $result = mysqli_query($connection, $showTable);

                    foreach ($result as $row) {
                        echo "<tr>";

                        echo "<td>$row[id]</td>";
                        echo "<td>$row[emp_name]</td>";
                        echo "<td>$row[age]</td>";
                        echo "<td>$row[email]</td>";
                        echo "<td>$row[designation]</td>";
                        echo "<td>$row[salary]</td>";
                        echo "<td>$row[city]</td>";
                        echo " <td><div class='btnBox'>
                    <a href ='edit.php?id=$row[id]&name=$row[emp_name]&age=$row[age]&email=$row[email]&designation=$row[designation]&salary=$row[salary]&city=$row[city]'><button class = 'btn btn-success'>Edit</button></a>
                    <a href ='delete.php?id=$row[id]'><button class = 'btn btn-danger'>Delete</button></a> 
                    </div> </td>";

                        echo "</tr>";
                    }


                    ?>

                </tbody>
            </table>



        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>