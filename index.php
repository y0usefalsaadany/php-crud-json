<?php
require "header.php";

?>
<h1 class="text-center col-12 bg-primary py-3 text-white my-2">Home Page</h1>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Job</th>
                    <th scope="col">City</th>
                    <th scope="col">Age</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach( $users as $user): ?> 
                    <tr>
                        <th><?php echo $user['id'];?></th>
                        <td><?php echo $user['name'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo $user['job'];?></td>
                        <td><?php echo $user['city'];?></td>
                        <td><?php echo $user['age'];?></td>
                        <td>
                            <a class="btn btn-info" href="edit.php?id=<?php echo $user['id'];?>"> <i class="fa fa-edit"></i> </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $user['id'];?>"> <i class="fa fa-close"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
               
                
                </tbody>
            </table>
        </div>
    </div>

<?php include "footer.php";?>

	
	