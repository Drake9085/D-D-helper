<?php
include 'db.php';
global $db;
$word=$_POST['word'];
$query = "SELECT * from items WHERE (dice > 0 OR damage > 0) AND 'name' LIKE :word";
$stmt = $db->prepare($query);
$stmt->bindParam(":word",$word);
$stmt->execute();
echo '<p>cunter</p>';
if($stmt->rowCount() > 0){
	while ($row = $stmt->fetch()) {
		echo '
		<script>

		var sea= document.getElementById("wetable");
		sea.append="
		<tr id=\"'.$row['id'].'\">
                <td>
                  <input readonly type=\"text\" name=\"atkname1\" type=\"text\" value=\"'.$row['name'].'\"/>
                </td>
                <td>
                  <input readonly type=\"text\" name=\"atkbonus1\" type=\"text\" value=\"'.$row['dmgtype'].'\"/>
                </td>
                <td>
                  <input readonly type=\"text\" name=\"atkdamage1\" type=\"text\" value=\"'.$row['nodice'].'d'.$row['dice'].'\"/>
                </td>
				<td>
                  <input readonly type=\"text\" name=\"atkdescipt\" type=\"text\" value=\"'.$row['ranger'].'\"/>
                </td>
				<td>
                  <input readonly type=\"text\" name=\"atkdescipt\" type=\"text\" value=\"'.$row['description'].'\"/>
                </td>
				<td>
                  <input type=\"button\" onclick=\"add('.$row['id'].','.$id.')\" class=\"btn btn-primary\" value=\"Add\"/>
                </td>
              </tr>\"
			  </script>';
		
		
		
		}
	}
?>






