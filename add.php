<?php
require "header.php";

if(isset($_POST['send'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$job = $_POST['job'];
	$city = $_POST['city'];
	$age = $_POST['age'];
	$data = file_get_contents('json.json');
	$json_add = json_decode($data, true);
	$json_add[] = array(
		'id'        => $id,
        'name' => $name,
        'email' => $email,
        'job'     =>$job,
        'city'    => $city,
        'age'   => $age
        );
        file_put_contents('json.json', json_encode($json_add));
        echo "<div class='alert alert-success text-center'>added</div>";
	}
?>
    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Add User</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="add.php">
        	<div class="form-group">
                <label for="exampleInputName1">Id</label>
                <input type="text" value="<?php echo $_GET['id'];?>" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" value="<?php echo $users['name'];?>" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email address</label>
                <input type="email" value="<?php echo $users['email'];?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Job</label>
                <input type="text" value="<?php echo $users['job'];?>" name="job" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">City</label>
                <input type="text" value="<?php echo $users['city'];?>" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Age</label>
                <input type="text" value="<?php echo $usera['age'];?>" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
         
            <button type="submit" class="btn btn-primary" name="send">Submit</button>
        </form>
    </div>
   
<?php  require 'footer.php'; ?>
