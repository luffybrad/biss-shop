<?php
    include "../connect.php";
    $sql = "select * from brands";
    $res = mysqli_query($conn,$sql);
    if($res){
    while ($row = mysqli_fetch_assoc($res)) {
        $name = $row["name"];
         ?>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $name; ?></li>
        </ul>
<?php
}
    }else{
        ?>
            <h1>Error</h1>
        <?php
        
    }

?>