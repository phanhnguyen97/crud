<?php include 'header.php' ?>
<?php include 'config.php' ?>
               
            <?php
            if( isset($_GET['id'])){
                $id = $_GET['id'];

            
                $query = "SELECT * FROM `hocsinh` where `id` = '$id'";
                $result = mysqli_query($conn , $query);
                if(!$result){
                    die("query failed" . mysqli_error($conn));
                }
                else{
                    $row = mysqli_fetch_assoc($result);
                }
            }                                                                
            ?>
            <?php
            if(isset($_POST['update_student'])){
                if(isset($_GET['id_new'])){
                    $id_new = $_GET['id_new'];
                }
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];

                $query = "UPDATE `hocsinh` SET `name`='$name',`email`='$email',`address`='$address' WHERE `id`='$id_new' ";
                $result = mysqli_query($conn , $query);
                if(!$result){
                    die("query failed" . mysqli_error($conn));
                }else{
                    header('location:index.php');
                }
            }
            ?>


            <form action="update_page_1.php?id_new=<?php echo $id?>" method="post">
            <div class="form-group">
                <label for="name">NAME</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="text" name="email" class="form-control" value="<?php echo $row['email']?>">
            </div>
            <div class="form-group">
                <label for="address">ADDRESS</label>
                <input type="text" name="address" class="form-control" value="<?php echo $row['address']?>">
            </div>
            <input type="submit" class="btn btn-success" name="update_student" value="UPDATE">
            </form>



<?php include 'footer.php' ?>