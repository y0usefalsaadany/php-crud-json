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
	$json_arr = json_decode($data, true);
	$arr_index = array();
        foreach ($json_arr as $key => $value){
    if ($value['id'] == $id){
        $arr_index[] = $key;
    }
}
    foreach ($arr_index as $i)
    {
       unset($json_arr[$i]);
    }
    
    $json_arr = array_values($json_arr);
    file_put_contents('json.json', json_encode($json_arr));
    echo "<div class='alert alert-danger text-center'>deleted</div>";
}
?>
    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Delete User</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="delete.php">
        	<div class="form-group">
                <label for="exampleInputName1">Id</label>
                <input type="text" value="<?php echo $_GET['id'];?>" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
 
            <button type="submit" class="btn btn-primary" name="send">Delet</button>
        </form>
    </div>
   
<?php  require 'footer.php'; ?>
