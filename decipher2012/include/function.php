<?php
    function chkEligibleNonDa($teamname){
	
		$query = "SELECT * FROM googlockdareg WHERE Teamname = '$teamname'";
        $count = returnrows($query);
		
        if($count){
            return 0;
        }
		
		
		
		
        
		
		
		
		
        return 1;
    }
	
    function chklength($teammember){
        if(strlen($teammember)==9){
            return 1;
        }
        else{
            return 0;
        }
    } 
    function returnrows($query){
        $result=mysql_query($query);
        if(!$result){
            die("error in the query");
        }
        $count = mysql_affected_rows();
        return $count;
    }



    function chkEmail($email){
		$set=mysql_query("SELECT * FROM TeamtwisterUsers WHERE email='{$email}'");
		confirmQuery($set);
		if(mysql_num_rows($set)){
			//already email exists
			return false;
		}
		else{
			return true;
		}
	}
	
	

	function checkUsrPwd($message){
		if(isset($_POST['submit'])){
		$username = trim(mysqlPrep($_POST['username']));
		$password = trim(mysqlPrep($_POST['password']));
		$hash_password = md5($password); 
		
		$query = "SELECT username FROM TeamtwisterUsers WHERE username = '{$username}' AND hash_password = '{$hash_password}' LIMIT 1";
		
		$chk = mysql_query($query);
		confirmQuery($chk);
		$ary = mysql_fetch_array($chk);
		$num = mysql_num_rows($chk);
			if($num == 1){
				$_SESSION['username']=$ary['username'];//this helps to check whether the user has successfully logged in
				$message="";
				return $message;
			}
			else{
				$message = "Username or Password Incorrect. Please try again";
				return $message;
			}
		}
		else{
			$message="";
			return $message;
		}
	}

	function redirectTo($location){
		header("Location: {$location}");
		exit;
	}

	function mysqlPrep($value){
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysql_real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}
	
	function isEmail($email){
		return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
	}
?>