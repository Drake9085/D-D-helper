<!DOCTYPE html>
<html>
	<?php include_once 'db.php';?>
	<?php include_once 'main.php';?>
<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=MedievalSharp" />
		 <link rel="stylesheet" href="stylehome.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		 <script src="js/toast.js"></script>
		  <!-- Material Design Bootstrap -->
		  <link href="css/mdb.css" rel="stylesheet">
		  <link href="css/bootstrap.min.css" rel="stylesheet">
		  <!-- Your custom styles (optional) -->
		  <link href="css/style.css" rel="stylesheet">
		  <link href="css/toast.css" rel="stylesheet">
		  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<div id="container">
		<div class="row">
			<div class="col-4">
			<div class="adderino-gumberino" style="width:100%;">
				<a href="index.php?action=add" class="btn btn-primary" style="margin:15px;"><i class="material-icons" style="font-size: 50px; padding-top:5px;"> add_circle_outline</i></a>
				
			</div>
			<?php 
			if(isset($_GET['action'])){
				if($_GET['action']=='add'){
					addchar();
				}
				if($_GET['action']=='added'){
					echo '<script>
					  Toastify({
						text: "Character list was added",
						duration: 3000,
						newWindow: true,
						close: true,
						gravity: "top",
						positionLeft: false,
						backgroundColor: "linear-gradient(to right, #007bff , #007bff)"
					  }).showToast();
				</script>';
					
				}
			}
			choice();
			?>
		</div>
		<div class="col-8">
			<img src="D&D Transparent.png" height="400" width="800"  ></img>
			<a class="btn btn-danger floater" style="border-radius:50%;" href="rulebook.php?home=index.php"><i class="fa fa-question-circle" style="font-size:75px"></i></a>	
			<div class="row">
				<div class="col-8">
					<div class="gumbki" style="display: block;margin-left:100px;">
						  <button onclick="dice(4)" class="btn btn1" style="border-radius:25%" type="4"><img src="http://dnd.brianknappdeveloper.com/img/ui/icons/d4.png" alt="" /></button>
						  <button onclick="dice(6)" class="btn btn1" style="border-radius:25%" type="6"><img src="http://dnd.brianknappdeveloper.com/img/ui/icons/d6.png" alt="" /></button>
						  <button onclick="dice(8)" class="btn btn1" style="border-radius:25%" type="8"><img src="http://dnd.brianknappdeveloper.com/img/ui/icons/d8.png" alt="" /></button>
						  <button onclick="dice(10)" class="btn btn1" style="border-radius:25%" type="10"><img src="http://dnd.brianknappdeveloper.com/img/ui/icons/d10.png" alt="" /></button>
						  </br><button onclick="dice(12)" class="btn btn1" style="border-radius:25%" type="12"><img src="http://dnd.brianknappdeveloper.com/img/ui/icons/d12.png" alt="" /></button>
						  <button onclick="dice(20)" class="btn btn1" style="border-radius:25%" type="20"><img src="http://dnd.brianknappdeveloper.com/img/ui/icons/d20.png" alt="" /></button>
						  <button onclick="dice(100)" class="btn btn1" style="border-radius:25%" type="100"><img src="http://dnd.brianknappdeveloper.com/img/ui/icons/d100.png" alt="" /></button>
						  <button onclick="cu()" class="btn btn1" style="border-radius:25%;width:126px;height:114px;font-size: 30px;font-family: MedievalSharp">clear</button>
						<p id="ses" class="dicerolls" >Result: </p>
					</div>
				</div>
				<div class="col-4">
				</div>
			</div>
		</div>
	
	  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	  <!-- Bootstrap tooltips -->
	  <script type="text/javascript" src="js/popper.min.js"></script>
	  <!-- Bootstrap core JavaScript -->
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <!-- MDB core JavaScript -->
	  <script type="text/javascript" src="js/mdb.min.js"></script>
	  <script type="text/javascript" src="js/dice.js"></script>
	  <script type="text/javascript">
		function addPlayer(){
			document.getElementById("container").innerHTML="";
			<?php 
			$query = "INSERT INTO players (player) VALUES('')";
			$stmt = $db->prepare($query);
			$stmt->execute();
			?>
			$.ajax({
						type: 'POST',
						url: 'update_db.php',
								data: {  },
								success: function(response){
									console.log(response);
							}
						});
		}
	</script>
</body>
	
</html>

