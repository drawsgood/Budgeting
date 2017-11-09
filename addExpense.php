<?php
	$message = '';
	$error = '';
	 if(isset($_POST["submit"]))  
		 {  
		      if(empty($_POST["amount"]))  
		      {  
		           $error = "<label class='text-danger'>Enter Number</label>";  
		      }  
		      else  
		      {  
		           if(file_exists('test.json'))  
		           {  
		                $current_data = file_get_contents('test.json');  
		                $array_data = json_decode($current_data, true);  
		                $extra = array(  
		                     'amount'               =>     $_POST[amount],
		                     'category'               =>     $_POST['category']
		                );  
		                $array_data[] = $extra;  
		                $final_data = json_encode($array_data, JSON_PRETTY_PRINT);  
		                if(file_put_contents('test.json', $final_data))  
		                {  
		                     $message = "<label class='text-success'>File Appended Success fully</p>";  
		                }  
		                header("Location: index.php");
						exit;
		           }  
		           else  
		           {  
		                $error = 'JSON File not exits';  
		           }  
		      }  
		 } 
?>