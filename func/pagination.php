<?php

function pagination($offset = 0, $limit = 5){

	$page['page'] = $offset + 1;

	if($offset==0){
		$page['prev'] = false;
	}else{
		$page['prev'] = true;
	}
	$servername = "localhost";
        $username = "root";
        $password = "";
        $database = "recommendfit";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if (mysqli_connect_errno($conn))
      {
         echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
      }
    $sql = "SELECT count(*) as count FROM `news`";
    $result = mysqli_query($conn,$sql);
    $result = $result->fetch_assoc();
    $count = $result['count'];

    if($count>$limit*($offset+1)){
    	$page['next'] = true;
	}else{
		$page['next'] = false;
	}

	return $page;

}

if(isset($_GET['page'])){
	$page = $_GET['page'] - 1;
	$pagination = pagination($page);
}else{
	$pagination = pagination();
}

?>

<?php if ($pagination['prev']) { ?>
<a href="?page=<?php echo $pagination['page'] - 1 ?>" class="w3-btn" >Prev</a>
<?php } ?>
<?php //echo $pagination['page'] ?>
<?php if ($pagination['next']) { ?>
<a href="?page=<?php echo $pagination['page'] + 1 ?>" class="w3-btn" >Next</a>
<?php } ?>