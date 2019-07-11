<?php

namespace data_process;

class User
{
    public static function editUserDetails($DbConn, $userId)
    {
        $sql = "UPDATE `blogdatabase`.`users` SET ";
        foreach ($_POST as $input) {
            $key = key($_POST);
            if(!($key == "Username" || $key == "UserType" || $key=="UserId" || $key=="Update")){
                $sql .=  $key . " = '" . $input . "',";
            }
            next($_POST);
        }
        $sql = substr($sql, 0, strrpos($sql, ",")) . " Where(UserId = '" . $userId . "')";
        echo $sql;
        
		//Finally, update the database
        if ($DbConn->query($sql) === TRUE) {
            echo "Details edited successfully";
        } else {
            echo "Something went wrong";
        }

    }
}
