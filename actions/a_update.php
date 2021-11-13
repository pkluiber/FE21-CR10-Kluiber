<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {    
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $short_des = $_POST['short_des'];
    $type = $_POST['type'];
    $aut_fName = $_POST['aut_fName'];
    $aut_lName = $_POST['aut_lName'];
    $pub_name = $_POST['pub_name'];
    $pub_address = $_POST['pub_address'];
    $pub_date = $_POST['pub_date'];
    $id = $_POST['id'];
    //variable for upload pictures errors is initialized
    $uploadError = '';

    $picture = file_upload($_FILES['picture']);//file_upload() called  
    if($picture->error===0){
        ($_POST["picture"]=="product.png")?: unlink("../pictures/$_POST[picture]");           
        $sql = "UPDATE biglibrary SET title = '$title', picture = '$picture->fileName', isbn = '$isbn', short_des = '$short_des',type = '$type',aut_fName = '$aut_fName',aut_lName = '$aut_lName',pub_name = '$pub_name',pub_address = '$pub_address',pub_date = '$pub_date' WHERE id = {$id}";
    }else{
        $sql = "UPDATE biglibrary SET title = '$title', isbn = '$isbn', short_des = '$short_des',type = '$type',aut_fName = '$aut_fName',aut_lName = '$aut_lName',pub_name = '$pub_name',pub_address = '$pub_address',pub_date = '$pub_date' WHERE id = {$id}";
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);    
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>