<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM biglibrary";
$result = mysqli_query($connect ,$sql);
$tbody=''; 
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td>" .$row['title']."</td>
            <td><img class='img-thumbnail' src='pictures/" .$row['picture']."'</td>
            <td>" .$row['isbn']."</td>
            <td>" .$row['short_des']."</td>
            <td>" .$row['type']."</td>
            <td>" .$row['aut_fName']."</td>
            <td>" .$row['aut_lName']."</td>
            <td>" .$row['pub_name']."</td>
            <td>" .$row['pub_address']."</td>
            <td>" .$row['pub_date']."</td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='12'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CRUD</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            body
            {
                background-image: url(https://cdn.pixabay.com/photo/2015/07/27/20/16/book-863418_960_720.jpg);
                background-size: auto;               
            }

            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
                vertical-align: middle;
                color: white;
            }
            tr {
                text-align: center;
                 }
            
                   
        </style>
    </head>
    <body>
        <div class="manageProduct w-75 mt-3">    
           
            <p class='h2'>Media</p>
            <table class='table table-dark table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Title</th>
                        <th>Picture</th>
                        <th>ISBN</th>
                        <th>Short Description</th>
                        <th>Type</th>
                        <th>Author First Name</th>
                        <th>Author Last Name</th>
                        <th>Publisher Name</th>
                        <th>Publisher Address</th>
                        <th>Publish Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
            <div class='mb-3 text-center'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add Media</button></a>
            </div>
        </div>
    </body>
</html>