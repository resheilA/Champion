<?php 
include_once("checkauthentication.php");	

if($_SERVER["REQUEST_METHOD"] == "POST")
{

if(isset($_FILES)){	
$imagearraykey = array_keys($_FILES);	

	foreach($imagearraykey as $key)
	{		
		if(!empty($_FILES[$key]['tmp_name']))
		{					
		$img = file_get_contents($_FILES[$key]['tmp_name']); 
					  
					// Encode the image string data into base64 
					$imagedata = base64_encode($img); 
					  
					// Display the output 
					$_POST[$key] = $imagedata; 
		}		
	}
}

$arraykey = array_keys($_POST);


//////////////////FIRST CREATEING A 2d array of FORMAT 
////////////////// array[tablename][variablename]
///////////////////


$table_count = 0;
$variable_count = 0;
$array_select = [];
foreach($arraykey as $key)
{
	
$keypiece = explode("|", $key);
	if(isset($keypiece[1]))
	{
	$table_name = $keypiece[0];
	$variable_name = $keypiece[1];

	///// ADDING THE TABLES and variables IN THE 2-D ARRAY 
//	 var_dump($variable_name);
	 
			//$array_select[$table_count] = $table_name;
			$array_select[$table_name][$variable_count] = $variable_name; /////addded here
			$variable_count++;
			$table_count++;
					
	}
}
//echo"<pre>";


	foreach(array_keys($array_select) as $tablename)
	{
		//////RUNNING A LOOP FOR TABLE NAME

		$variable_string = "";
		$value_string = "";
		$firstcount = 0;
		$firstcount_value = 0;
		
		///// CREATING A VARIABLE STRING
		
		foreach($array_select[$tablename] as $variname)
		{
			/////RUNNING A LOOP FOR VARIABLE NAME AND PREPARING INSET STIRNG
			
			if($firstcount == 0)	
			{
				$variable_string .= "".$variname;		         
			}
			else 
			{
				$variable_string .= ", ".$variname;		         
			}
			
			$firstcount++;
		}
		
			 
		$flag_auth = "false";		
				
		/////////CREATING A VALUE STRING 		
		foreach($array_select[$tablename] as $variname)
		{	
			
			/////RUNNING A LOOP FOR VARIABLE NAME AND GETTING AND PREPARING VALUE STRING
			$joined_string = $tablename."|".$variname;
						
			if(is_array($_POST[$joined_string]) == true)
			{					
				$_POST[$joined_string] = implode(", ", $_POST[$joined_string]);			
			}
			
			
			$flag_auth = authenticate($joined_string, $_POST);
			
			if($flag_auth != "true")
			{
				break;
			}
			
			if($firstcount_value == 0)	
			{
				$value_string .= "'".$_POST[$joined_string]."'";		        
			}
			else 
			{
				$value_string .= ", '".$_POST[$joined_string]."'";		         
			}
			
			$firstcount_value++;
		}
		
		
		if($flag_auth == "true"){
		include("connect.php");	
				
		    $sql = "INSERT INTO ".$tablename." (".$variable_string.")
				VALUES (".$value_string.")";
	
				if ($conn->query($sql) === TRUE) {								
					//header('Location: '.$result['redirect_to']);
					//echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;die();
					$error_mysql = '
								<div class="alert alert-danger">
							<strong>Error!</strong> Cannot Save. Please check the details you have entered.
							</div>
					';
				}

				$conn->close();
		}
		else
		{
			$error_mysql = '<div class="alert alert-danger">
							<strong>Error!</strong> '.$flag_auth.'
							</div>';		
								break;
		}					
	}
		
		
	if(!isset($error_mysql))
	{
	echo '<script type="text/javascript">location.href = "'.$result['redirect_to'].'";</script>';	
	}
	
				
}


?>



