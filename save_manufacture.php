<?php
include("db.php");
include('head.php');
include('header.php');
include('auth.php');

$manu_name=$_POST['manu_name'];
$manu_address=$_POST['manu_address'];

$query=mysql_query("SELECT * FROM manufacture WHERE name =".$manu_name."");
  
$row=mysql_query("INSERT INTO manufacture (name, address) VALUES ('$manu_name', '$manu_address')");
    
if(isset($row))
    {
?>




    <!-- Form Name -->
    <legend align="center">Manufacture Added.</legend>

    <table class="table table-responsive">

        <tbody>
            <tr>
                <td>
                    Want to Add Project for this manufacture
                </td>
                <td>
                    <a href="add_project.php">
                        <button class="btn btn-success">Yes</button>
                    </a>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Want to Add Product for this manufacture
                </td>
                <td>
                   <a href="add_product.php">
                       <button id="button1id" name="button1id" class="btn btn-success">Yes</button>
                   </a>
                    </td>
            </tr>
        </tbody>
    </table>

    <?php
   
}
include("footer.php");
    
?>
