<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM biglibrary WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $picture = $data['picture'];
        $isbn = $data['isbn'];
        $short_des = $data['short_des'];
        $type = $data['type'];
        $aut_fName = $data['aut_fName'];
        $aut_lName = $data['aut_lName'];
        $pub_name = $data['pub_name'];
        $pub_address = $data['pub_address'];
        $pub_date = $data['pub_date'];
    

    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Media</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            body
            {
                background-image: url(https://cdn.pixabay.com/photo/2015/07/27/20/16/book-863418_960_720.jpg);
                background-size: auto;               
            }
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Title" /></td>
                    </tr>   
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <th>ISBN Code</th>
                        <td><input class='form-control' type="text" name="isbn"  placeholder="ISBN Code" /></td>
                    </tr>   
                    <tr>
                        <th>Short Description</th>
                        <td><input class='form-control' type="text" name="short_des"  placeholder="Short Description" /></td>
                    </tr>   
                    <tr>
                        <th>Type</th>
                        <!-- <td><input class='form-control' type="text" name="type"  placeholder="Type" /></td> -->
                        <td><select class='form-control' name="type">
                            <option value="book">Book</option>
                            <option value="cd">CD</option>
                            <option value="dvd">DVD</option></select>
                    </td>   
                    </tr>   
                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name="aut_fName"  placeholder="Author First Name" /></td>
                    </tr>   
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name="aut_lName"  placeholder="Author Last Name" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "pub_name" placeholder="Publisher Name"/></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name= "pub_address" placeholder="Publisher Address"/></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name= "pub_date" placeholder="Date"/></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>