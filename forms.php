<?php
    include "connect.php";
    if(isset($_POST["add_category"])){
        $category_name = $_POST["category_name"];
        $sql2= "select * from categories where name='$category_name'";
        $res2 = mysqli_query($conn,$sql2);
        $num2 = mysqli_num_rows($res2);
        if($num2>0){
            ?>
            <script>
                window.alert("This category already exists");
                window.location.href= "admin/index.php";
            </script>
            <?php
        }else{
            $sql1= "insert into `categories` (name) values ('$category_name')";
            $res1 = mysqli_query($conn,$sql1);
        if($res1){
         ?>
                <script>
                    window.alert("Category has been added.")
                    window.location.href = "admin/index.php"
                </script>
            <?php            
        }else{
            ?>
            <script>
                window.alert("Category has not been added");
            </script>
            <?php
            }

        }
    }
    if(isset($_POST["add_brand"])){
        $brand_name = $_POST["brand_name"];
        $sql2= "select * from brands where name='$brand_name'";
        $res2 = mysqli_query($conn,$sql2);
        $num2 = mysqli_num_rows($res2);
        if($num2>0){
            ?>
            <script>
                window.alert("This brand already exists");
                window.location.href= "admin/index.php";
            </script>
            <?php
        }else{
            $sql1= "insert into `brands` (name) values ('$brand_name')";
            $res1 = mysqli_query($conn,$sql1);
        if($res1){
         ?>
                <script>
                    window.alert("Brand has been added.")
                    window.location.href = "admin/index.php"
                </script>
            <?php            
        }else{
            ?>
            <script>
                window.alert("Brand has not been added");
            </script>
            <?php
            }

        }
    }
    if (isset($_POST["delete_category"])){
            $id = $_POST["category_id"];
            $name = $_POST["category_name"];
            $sql = "delete from categories where id='$id'";
            $res = mysqli_query($conn,$sql);
            if($res){
                ?>
                <script>
                    window.alert("Category successfully deleted");
                    window.location.href = "admin/index.php"
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    window.alert("Couldn't delete category")
                    window.location.href = "admin/index.php"
                </script>
                <?php
            }
            
    }
    if (isset($_POST["delete_brand"])){
        $id = $_POST["brand_id"];
        $name = $_POST["brand_name"];
        $sql = "delete from brands where id='$id'";
        $res = mysqli_query($conn,$sql);
        if($res){
            ?>
            <script>
                window.alert("Brand successfully deleted");
                window.location.href = "admin/index.php"
            </script>
            <?php
        }
        else{
            ?>
            <script>
                window.alert("Couldn't delete brand")
                window.location.href = "admin/index.php"
            </script>
            <?php
        }
        
}
if(isset($_POST["edit_category"])){
    $id = $_POST["category_id"];
    $name = $_POST["category_name"];
    $sql = "update categories set name='$name' where id=$id";
    $res = mysqli_query($conn,$sql);
    if($res){
        ?>
            <script>
                window.alert("Category successfully edited");
                window.location.href = "admin/index.php"
            </script>
            <?php
    }else{
        ?>
        <script>
            window.alert("Couldn't edit category")
            window.location.href = "admin/index.php"
        </script>
        <?php
    }
}
if(isset($_POST["edit_brand"])){
    $id = $_POST["brand_id"];
    $name = $_POST["brand_name"];
    $sql = "update brands set name='$name' where id=$id";
    $res = mysqli_query($conn,$sql);
    if($res){
        ?>
            <script>
                window.alert("Brand successfully edited");
                window.location.href = "admin/index.php"
            </script>
            <?php
    }else{
        ?>
        <script>
            window.alert("Couldn't edit brand")
            window.location.href = "admin/index.php"
        </script>
        <?php
    }
}
if(isset($_POST["add_product"])){
    $name = $_POST["name"];
    $desc = $_POST["description"];
    $category_id = $_POST["category"];
    $brand_id = $_POST["brand"];
    $price = $_POST["price"];
    $status = "true";   
    //accessing images
    $image1 = $_FILES["image1"]["name"];
    $image2 = $_FILES["image2"]["name"];
    //accessing image tmp name
    $image1_tmp= $_FILES["image1"]["tmp_name"];
    $image2_tmp= $_FILES["image2"]["tmp_name"];
    $folder1 = "images/".$image1;
    $folder2 = "images/".$image2;

    move_uploaded_file($image1_tmp,$folder1);
    move_uploaded_file($image2_tmp,$folder2);

    //insert query
    $sql = "insert into products (name,description,category_id,brand_id,image1,image2,price,date,status) values ('$name','$desc','$category_id','$brand_id','$image1','$image2','$price',NOW(),'$status') ";
    $res = mysqli_query($conn,$sql);
    if($res){
        ?>
        <script>
            window.alert("Product has been added.")
            window.location.href = "admin/index.php"
        </script>
    <?php      
    }else{
        ?>
        <script>
            window.alert("Category has not been added");
            window.location.href= "admin/index.php";
        </script>
        <?php
    }
}
?>