<?php
include 'db.php';

function choice(){
	global $db;
	$query = "SELECT * FROM players";
	$stmt = $db->prepare($query);
	$stmt->execute();
	if($stmt->rowCount() === 0){

    }else{
		
		while ($row = $stmt->fetch()) {
			echo '<div class="card" style="padding:15px; width:450px; font-family: MedievalSharp; margin: 15px;">
				  <img class="card-img-top" src="default-dp.jpg" height="200" width="200">
				  <div class="card-body">
					<h4 class="card-title"><a>Character:'.$row['charname'].'</a></h4>
					<p class="card-text"><b>Player: </b>'.$row['name'].'</p>
					<p class="card-text"><b>Class and Level: </b>Level '.$row['level'].' '.$row['classs'].'</p>
				  </div>
				  <a href="charsheet.php?id='.$row['id'].'" class="btn btn-primary">Edit character sheet</a>
				</div>';	
    }
	
}
}
function addchar(){
	global $db;
	$query = "INSERT INTO players (name) VALUES('')";
	$stmt = $db->prepare($query);
	$stmt->execute();
	echo '<script>window.location.replace("index.php?action=added");</script>';
}
function seeweapons($id){
	global $db;
	$query = "SELECT * from items i
	join playitems p on p.iid = i.id
	WHERE p.pid = :kek AND (i.dice > 0 OR damage > 0) LIMIT 7";
	$stmt = $db->prepare($query);
	$stmt->bindParam(":kek",$id );
	$stmt->execute();
	
	if($stmt->rowCount() > 0){
	while ($row = $stmt->fetch()) {
		echo '<tr>
                <td>
                  <input readonly type="text" name="atkname1" type="text" value="'.$row['name'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkbonus1" type="text" value="'.$row['dmgtype'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkdamage1" type="text" value="'.$row['nodice'].'d'.$row['dice'].'"/>
                </td>
              </tr>';
	}
	}
}
function seeitems($id){
	global $db;
	$query = "SELECT * from items i
	join playitems p on p.iid = i.id
	WHERE p.pid=:kek";
	$stmt = $db->prepare($query);
	$stmt->bindParam(":kek",$id );
	$stmt->execute();
	
	if($stmt->rowCount() > 0){
		while ($row = $stmt->fetch()) {
			echo '<p>- '.$row['name'].', which costs '.$row['cost'].' and weighs '.$row['weight'].'</p>';
	}
	}
}
function checker($id){
	global $db;
	$query = "SELECT * FROM players WHERE id=:id";
	$stmt = $db->prepare($query);
	$stmt->bindParam(":id",$id );
	$stmt->execute();
	if($stmt->rowCount() === 0){
		echo '<div class="marks">
              <div class="deathsuccesses">
                <label>Successes</label>
                <div class="bubbles">
                  <input id="win1" name="deathsuccess1" type="checkbox" onclick="wine()"/>
                  <input id="win2" name="deathsuccess2" type="checkbox" onclick="wine()"/>
                  <input id="win3" name="deathsuccess3" type="checkbox" onclick="wine()"/>
                </div>
              </div>';
    }else{
		
		while ($row = $stmt->fetch()) {
		if($row['savsuc']==0){
				echo '<div class="marks">
              <div class="deathsuccesses">
                <label>Successes</label>
                <div class="bubbles">
                  <input id="win1" name="deathsuccess1" type="checkbox" onclick="wine()"/>
                  <input id="win2" name="deathsuccess2" type="checkbox" onclick="wine()"/>
                  <input id="win3" name="deathsuccess3" type="checkbox" onclick="wine()" />
                </div>
              </div>';
              
			}elseif($row['savsuc']==1) {
				echo '<div class="marks">
              <div class="deathsuccesses">
                <label>Successes</label>
                <div class="bubbles">
                  <input id="win1" name="deathsuccess1" type="checkbox" checked onclick="wine()"/>
                  <input id="win2" name="deathsuccess2" type="checkbox" onclick="wine()"/>
                  <input id="win3" name="deathsuccess3" type="checkbox" onclick="wine()"/>
                </div>
              </div>';
			}elseif($row['savsuc']==2) {
				echo '<div class="marks">
              <div class="deathsuccesses">
                <label>Successes</label>
                <div class="bubbles">
                  <input id="win1" name="deathsuccess1" type="checkbox" checked onclick="wine()"/>
                  <input id="win2" name="deathsuccess2" type="checkbox" checked onclick="wine()"/>
                  <input id="win3" name="deathsuccess3" type="checkbox" onclick="wine()"/>
                </div>
              </div>';
			}else{
				echo '<div class="marks">
              <div class="deathsuccesses">
                <label>Successes</label>
                <div class="bubbles">
                  <input id="win1" name="deathsuccess1" type="checkbox" checked onclick="wine()"/>
                  <input id="win2" name="deathsuccess2" type="checkbox" checked onclick="wine()"/>
                  <input id="win3" name="deathsuccess3" type="checkbox" checked onclick="wine()"/>
                </div>
              </div>';
			}
		}
	}

	$query = "SELECT * FROM players WHERE id=:id";
	$stmt = $db->prepare($query);
	$stmt->bindParam(":id",$id );
	$stmt->execute();
	if($stmt->rowCount() === 0){
		echo '<div class="deathfails">
                <label>Failures</label>
                <div class="bubbles">
                  <input id="fail1" name="deathfail1" type="checkbox" onclick="fail()"/>
                  <input id="fail2" name="deathfail2" type="checkbox" onclick="fail()"/>
                  <input id="fail3" name="deathfail3" type="checkbox" onclick="fail()"/>
                </div>
              </div>';
    }else{
		
		while ($row = $stmt->fetch()) {
		if($row['savfail']==0){
				echo '<div class="deathfails">
                <label>Failures</label>
                <div class="bubbles">
                  <input id="fail1" name="deathfail1" type="checkbox" onclick="fail()"/>
                  <input id="fail2" name="deathfail2" type="checkbox" onclick="fail()"/>
                  <input id="fail3" name="deathfail3" type="checkbox" onclick="fail()"/>
                </div>
              </div>';
              
			}elseif($row['savfail']==1) {
				echo '<div class="deathfails">
                <label>Failures</label>
                <div class="bubbles">
                  <input id="fail1" name="deathfail1" type="checkbox" checked onclick="fail()"/>
                  <input id="fail2" name="deathfail2" type="checkbox" onclick="fail()"/>
                  <input id="fail3" name="deathfail3" type="checkbox" onclick="fail()"/>
                </div>
              </div>';
			}elseif($row['savfail']==2) {
				echo '<div class="deathfails">
                <label>Failures</label>
                <div class="bubbles">
                  <input id="fail1" name="deathfail1" type="checkbox" checked onclick="fail()"/>
                  <input id="fail2" name="deathfail2" type="checkbox" checked onclick="fail()"/>
                  <input id="fail3" name="deathfail3" type="checkbox" onclick="fail()"/>
                </div>
              </div>';
			}else{
				echo '<div class="deathfails">
                <label>Failures</label>
                <div class="bubbles">
                  <input id="fail1" name="deathfail1" type="checkbox" checked onclick="fail()"/>
                  <input id="fail2" name="deathfail2" type="checkbox" checked onclick="fail()"/>
                  <input id="fail3" name="deathfail3" type="checkbox" checked onclick="fail()"/>
                </div>
              </div>';
			}
		
	
		}
	}
}

function showitems($id){
	global $db;
	$query = "SELECT * from items i
	join playitems p on p.iid = i.id
	WHERE p.pid = :kek AND (i.dice > 0 OR damage > 0)";
	$stmt = $db->prepare($query);
	$stmt->bindParam(":kek",$id );
	$stmt->execute();
	
	if($stmt->rowCount() > 0){
	while ($row = $stmt->fetch()) {
		echo '<tr id="'.$row['id'].'">
                <td>
                  <input readonly type="text" name="atkname1" type="text" value="'.$row['name'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkbonus1" type="text" value="'.$row['dmgtype'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkdamage1" type="text" value="'.$row['nodice'].'d'.$row['dice'].'"/>
                </td>
				<td>
                  <input readonly type="text" name="atkdescipt" type="text" value="'.$row['ranger'].'"/>
                </td>
				<td>
                  <input readonly type="text" style="resize: horizontal" name="atkdescipt" type="text" value="'.$row['description'].'"/>
                </td>
				<td>
                  <input type="button" onclick="deli('.$row['id'].','.$id.')" class="btn btn-danger" value="Delete"/>
                </td>
              </tr>';
	}
	}
	
}

function searchwe($id){
	global $db;
	echo "<h2>Add Weapon</h2>";
	$query = "SELECT * from items WHERE (dice > 0 OR damage > 0)";
	$stmt = $db->prepare($query);
	$stmt->execute();
	if($stmt->rowCount() > 0){
	while ($row = $stmt->fetch()) {
		echo '<tr id="'.$row['id'].'">
                <td>
                  <input readonly type="text" name="atkname1" type="text" value="'.$row['name'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkbonus1" type="text" value="'.$row['dmgtype'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkdamage1" type="text" value="'.$row['nodice'].'d'.$row['dice'].'"/>
                </td>
				<td>
                  <input readonly type="text" name="atkdescipt" type="text" value="'.$row['ranger'].'"/>
                </td>
				<td>
                  <input readonly type="text" style="resize: horizontal" name="atkdescipt" type="text" value="'.$row['description'].'"/>
                </td>
				<td>
                  <input type="button" onclick="add('.$row['id'].','.$id.')" class="btn btn-primary" value="Add"/>
                </td>
              </tr>';
		
		}
	}
}

function searchspe($id){
    global $db;
    echo "<h2>Add Spells</h2>";
    $query = "SELECT * from spells WHERE levell<=(SELECT level from players WHERE id=:id)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id",$id );
    $stmt->execute();
    if($stmt->rowCount() > 0){
    while ($row = $stmt->fetch()) {
        echo '<tr id="'.$row['id'].'">
                <td>
                  <input readonly type="text" name="atkname1" type="text" value="'.$row['name'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkdamage1" type="text" value="'.$row['nodice'].'d'.$row['dice'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkbonus1" type="text" value="'.$row['spellrange'].'"/>
                </td>
                <td>
                  <input readonly type="text" style="resize: horizontal" name="atkdescipt" type="text" value="'.$row['description'].'"/>
                </td>
                <td>
                  <input type="button" onclick="add('.$row['id'].','.$id.')" class="btn btn-primary" value="Add"/>
                </td>
              </tr>';

        }
    }
}
function showspells($id){
	global $db;
	$query = "SELECT * from spells i
	join playspells p on p.sid = i.id
	WHERE p.pid = :kek ";
	$stmt = $db->prepare($query);
	$stmt->bindParam(":kek",$id );
	$stmt->execute();
	if($stmt->rowCount() > 0){
	while ($row = $stmt->fetch()) {
		echo '<tr id="'.$row['id'].'">
                <td>
                  <input readonly type="text" name="atkname1" type="text" value="'.$row['name'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkdamage1" type="text" value="'.$row['nodice'].'d'.$row['dice'].'"/>
                </td>
				<td>
                  <input readonly type="text" name="atkbonus1" type="text" value="'.$row['spellrange'].'"/>
                </td>
				<td>
                  <input readonly type="text" style="resize: horizontal" name="atkdescipt" type="text" value="'.$row['description'].'"/>
                </td>
				<td>
                  <input  type="button" onclick="dels('.$row['id'].', '.$id.')" class="btn btn-danger" value="Delete"/>
                </td>
              </tr>';
	}
}
}
function showitems1 ($id){
	global $db;
	$query = "SELECT * from items i
	join playitems p on p.iid = i.id
	WHERE p.pid = :kek";
	$stmt = $db->prepare($query);
	$stmt->bindParam(":kek",$id );
	$stmt->execute();
	if($stmt->rowCount() > 0){
	while ($row = $stmt->fetch()) {
		echo '<tr id="'.$row['id'].'">
                <td>
                  <input readonly type="text" name="atkname1" type="text" value="'.$row['name'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkbonus1" type="text" value="'.$row['cost'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkdamage1" type="text" value="'.$row['weight'].'"/>
                </td>
				<td>
                  <input readonly type="text" style="resize: horizontal" name="atkdamage1" type="text" value="'.$row['description'].'"/>
                </td>
				<td>
                  <input type="button" onclick="deli('.$row['id'].','.$id.')" class="btn btn-danger" value="Delete"/>
                </td>
              </tr>';
	}
	}
}
function searchit($id){
	global $db;
	$query = "SELECT * from items";
	$stmt = $db->prepare($query);
	$stmt->execute();
	echo "<h2>Add Items</h2>";
	if($stmt->rowCount() > 0){
	while ($row = $stmt->fetch()) {
		echo '<p>
				<tr id="'.$row['id'].'">
                <td>
                  <input readonly type="text" name="atkname1" type="text" value="'.$row['name'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkbonus1" type="text" value="'.$row['cost'].'"/>
                </td>
                <td>
                  <input readonly type="text" name="atkdamage1" type="text" value="'.$row['weight'].'"/>
                </td>
				<td>
                  <input readonly type="text" style="resize: horizontal" name="atkdamage1" type="text" value="'.$row['description'].'"/>
                </td>
				<td>
                  <input type="button" onclick="add('.$row['id'].','.$id.')" class="btn btn-primary" value="Add "/>
                </td>
              </tr></p>';
	}
	}
}


	
 ?>