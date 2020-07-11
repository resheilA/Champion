<?php 


require( "config.php" );
session_start();
$page = isset( $_GET['page'] ) ? $_GET['page'] : "home";
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

if(isset($_SESSION["type"]) && $_SESSION["type"] != "Infra"){	
	header("location: /sport/trainer/?page=home");exit();
}

if ( $page != "login" && $page != "logout" && !$username && $page != "signup" && $page != "home" && $page != "contactus" && $page != "aboutus" && $page != "faq") {
  login();
  exit;
}

if ( ($page == "signup"  || $page == "login") && $username ) {
  dashboard();
  exit;
}




switch ( $page ) {
	case 'home':	
	  home();
	  break;
	case 'aboutus':	
	  aboutus();
	  break;  
	case 'contactus':	
	  contactus();
	  break;  
    case 'login':	
	  login();	 
      break;
	case 'signup':   
      signup();	 
      break;
	case 'dashboard':	
	  dashboard();
	  break;
	case 'faq':
	   faq();
	  break; 
	case 'howitworks':
	   howitworks();
	  break;   
	case 'logout':	
	  logout();
	  break;  
	default:
	  mainpage();		
}

function howitworks(){
	include(TEMPLATE_PATH."howitworks.php");			
}

function aboutus(){
	include(TEMPLATE_PATH."aboutus.php");			
}
function contactus(){
	include(TEMPLATE_PATH."contactus.php");			
}

function faq(){
	include(TEMPLATE_PATH."faq.php");			
}

function home(){
	include(TEMPLATE_PATH."home.php");			
}

function logout()
{
	session_destroy();
	login();
}

function login()
{
	$result["redirect_to"] = "dashboard";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		include("getdata_single.php");
		$response = singletable( "users", $where = "WHERE type = 'Infra' AND username='".$_POST['users|username']."' AND password ='".$_POST['users|password']."'", $param = "*" );	
		
		if(!isset($response["error"])){
			session_start();		
			$_SESSION["username"] = $response['users|username'];
			$_SESSION["type"] = $response['users|type'];
			$_SESSION["name"] = $response['users|name'];
			$_SESSION["uid"] = $response['users|randomid'];
			
			header("Location:?page=".$result["redirect_to"]);}
	}
	include(TEMPLATE_PATH."login.php");
}

function signup()
{
	$result["redirect_to"] = "?page=login";
	$random_id = generateRandomString();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		include("savedata.php");
	}	
	include(TEMPLATE_PATH."signup.php");
}

function dashboard()
{	
	$checkflag = 0; 
	 
	include("getdata_single.php");
	$response = singletable( "infra_details", $where = "WHERE randomid='".$_SESSION['uid']."'", $param = "*" );	
		
	if(isset($response["error"])){$checkflag = 1;}	
	else{		
		$response["infra_details|sports"] = explode(", ",$response["infra_details|sports"]);
		
		foreach($response["infra_details|sports"] as $sportground){		
		$tablename = $sportground."form_info";
		$sporttableresponse = singletable( $tablename, $where = "WHERE uid='".$_SESSION['uid']."'", $param = "*");					
		if(isset($sporttableresponse["error"])){$checkflag = $sportground;break;}
		}
	}
	
	
	if($checkflag == 1){
		$result["redirect_to"] = "?page=login";
		
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				include("savedata.php");
			}	
			
		include(TEMPLATE_PATH."details.php");
	}	
	else if(strcmp($checkflag, "cricket") == 0){		
		$random_ground = generateRandomString()."_cricket";
		$result["redirect_to"] = "?page=login";
		
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				include("savedata.php");
			}	
		
		include(TEMPLATE_PATH."cricketdetails.php");
	}
	else if(strcmp($checkflag, "football") == 0){		
		$random_ground = generateRandomString()."_football";
		$result["redirect_to"] = "?page=login";
		
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				include("savedata.php");
			}	
		
		include(TEMPLATE_PATH."footballdetails.php");
	}	
	else if(strcmp($checkflag, "basketball") == 0){		
		$random_ground = generateRandomString()."_basketball";
		$result["redirect_to"] = "?page=login";
		
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				include("savedata.php");
			}	
		
		include(TEMPLATE_PATH."basketballdetails.php");
	}	
	else{
		include(TEMPLATE_PATH."thankyou.php");
	}
}	

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function mainpage()
{
	include(TEMPLATE_PATH."index.html");
}

////LIST OF GENERAL FUNCTION

?>