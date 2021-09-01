<?php


function getUsers(){
	return $json_file = json_decode(file_get_contents('json.json'),true);
	}

function id($id){
	$users = getUsers();
	foreach($users as $user){
			if($id == $user['id']){
				return $user;
				}
		}
}

function update($post,$id){
	    $users = getUsers();

    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $i, 1);
        }
    }

	file_put_contents('json.json',json_encode($users,JSON_PRETTY_PRINT));
}