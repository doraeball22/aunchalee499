</head>
<body>
<?php

	require("Class.php");

	$addn = new News;
			require_once('db_connect.php');
	$addn->newsTitle = $_POST['newsTitle'];
	$addn->newsDetail = $_POST['newsDetail'];
	$addn->insertnews($conn,$addn);
?>
</body>

</html>