<?php

//action.php

include('../../database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
    ':id'    => $_POST['id'],
    ':username'  => $_POST['username'],
    ':serialnumber'  => $_POST['serialnumber'],
    ':gender'   => $_POST['gender'],
    ':email'    => $_POST['email'],
    ':fingerprint_id'    => $_POST['fingerprint_id'],
    ':fingerprint_select'    => $_POST['fingerprint_select'],
    ':user_date'    => $_POST['user_date'],
    ':time_in'    => $_POST['time_in'],
    ':del_fingerid'    => $_POST['del_fingerid'],
    ':add_fingerid'    => $_POST['add_fingerid']
  
 );

 $query = "
 UPDATE users 
 SET username = :username, 
 serialnumber = :serialnumber, 
 gender = :gender, 
 email = :email,
 fingerprint_id = :fingerprin_id,
 fingerprin_select = :fingerprint_select,
 user_date = :fuser_date,
 time_in = :time_in,
 del_fingerid = :del_fingerid,
 add_fingerid = :add_fingerid,
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM users 
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>