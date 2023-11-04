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
?>