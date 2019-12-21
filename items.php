<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/style.css">
 <link href="css/mdb.css" rel="stylesheet">
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Items</title>
</head>
	<?php include_once 'db.php';?>
	<?php include 'main.php';?>
	<body>
	<div class="container">
	<label for="experiencepoints"></label><a style="border-radius:50%;" href="index.php"><i class="fa fa-home" style="font-size:50px"></i></a>

		<?php
			$player =$_GET['id'];
			echo '<label for="experiencepoints"></label><a style="border-radius:50%;" href="charsheet.php?id='.$player.'"><i class="fa fa-address-book raz" style="font-size:45px"></i></a>';
			echo '<span>   </span>';
			echo '<label for="experiencepoints"></label><a style="border-radius:50%;" href="rulebook.php?home=items.php?id='.$player.'"><i class="fa fa-question-circle raz" style="font-size:50px"></i></a>';

		?>
	<section class="attacksandspellcasting">
		 <h2>Items</h2>
	<table class="tabelca">
            <thead>
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Cost
                </th>
                <th>
                  Weight
                </th>
				<th>
                  Description
                </th>
				<th> Action</th>
				
              </tr>
            </thead>
            <tbody>
			<?php
				$player =$_GET['id'];
				showitems1($player);
			
			?>
			</tbody>
          </table>
		  <table class="tabelca">
		  <?php
				$player =$_GET['id'];
				searchit($player);
			
			?>
			</table>
      </section>
	  </div>
	</body>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script>
	function deli(id,pid){
		document.getElementById(id).remove();
		$.ajax({
					type: 'POST',
					url: 'delwe.php',
							data: { data: id, pid: pid },
							success: function(response){
								console.log(response);
						}
					});
	}
	function add(id, pid){
		$.ajax({
					type: 'POST',
					url: 'addit.php',
							data: { data: id, pid: pid },
							success: function(response){
								location.reload();
						}
					});
	}
	
	</script>
</html>