<script src="js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	var dd = $('.vticker').easyTicker({
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 2000,
		height: 'auto',
		visible: 1,
		mousePause: 0,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			stopText: 'Stop !!!'
		}
	}).data('easyTicker');
	
	cc = 1;
	$('.aa').click(function(){
		$('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
		cc++;
	});
	
	$('.vis').click(function(){
		dd.options['visible'] = 3;
		
	});
	
	$('.visall').click(function(){
		dd.stop();
		dd.options['visible'] = 0 ;
		dd.start();
	});
	
});
</script>

<style>
.vticker{
	border: 1px solid red;
	width: 400px;
}
.vticker ul{
	padding: 0;
}
.vticker li{
	list-style: none;
	border-bottom: 1px solid green;
	padding: 10px;
}
.et-run{
	background: red;
}
</style>
  <h1> News</h1>
<button class="vis">SET VISIBLE 3</button>


<button class="up">UP</button>
<button class="down">DOWN</button>
<button class="toggle">TOGGLE</button>
<?php
       
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
        $query = "SELECT * FROM news";
        $result = mysqli_query($conn,$query)
         
        
    ?>
 
<div class="vticker">

	<ul>

	<?php
	  while($rows=mysqli_fetch_array($result)){ ?>
		<li> <?php echo $rows['newsTitle']."</br>".$rows['newsDetail'] ?></li>
		
            <?php } ?>
       
       
	</ul>
</div>