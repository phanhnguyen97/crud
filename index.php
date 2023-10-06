<?php include 'header.php' ?>
<?php include 'config.php' ?>
    <div class="box1">
        <h2>All STUDENT</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUNDENTS</button>
    </div>
        
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>
        </thead>

        <tbody>

        <?php

        $query = 'SELECT * FROM `hocsinh`';
        $result = mysqli_query($conn , $query);
        if(mysqli_num_rows($result) > 0){
           
        

            while($row =mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><a href="update_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                
            </tr>
        <?php
            }
        }
        ?>
            
        </tbody>
    </table>

        <!-- Modal -->
<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENTS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
            <div class="form-group">
                <label for="name">NAME</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">ADDRESS</label>
                <input type="text" name="address" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_students" value="ADD">
    </div>
  </div>
</div>
</form>
<?php include 'footer.php' ?>
   
