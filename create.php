<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>PHP CRUD  |  Add Media</title>
        <style>
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
            
            th{
                color: white;
            }
            
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add Media</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
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
                            <option value="Book">Book</option>
                            <option value="CD">CD</option>
                            <option value="DVD">DVD</option></select>
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
                        <td><button class='btn btn-success' type="submit">Insert Media</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>