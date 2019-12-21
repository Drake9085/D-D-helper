<head>
 <link rel="stylesheet" href="style.css">
 <link href="css/mdb.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://code.iconify.design/1/1.0.2/iconify.min.js"></script>
</head>
<?php include 'db.php';?>
<?php include 'main.php';?>

<form class="charsheet">
  <header>
    <section class="charname">
      <label for="charname">Character Name</label><input id="charname" name="charname" onkeyup="gogogo()" />
    </section>
    <section class="misc">
      <ul>
        <li>
          <label for="classlevel">Class</label><input id="class" name="classlevel" onkeyup="gogogo()" />
        </li>
		<li>
          <label for="classlevel">Level</label><input id="level" name="classlevel" onkeyup="gogogo()" type="number"/>
        </li>
        <li>
          <label for="background">Background</label><input id = "background" onkeyup="gogogo()" name="background" />
        </li>
        <li>
          <label for="playername">Player Name</label><input id="name" onkeyup="gogogo()" name="playername" >
        </li>
        <li>
          <label for="race">Race</label><input id = "race" name="race" onkeyup="gogogo()" placeholder="Half-elf" />
        </li>
        <li>
          <label for="alignment">Alignment</label><input id = "alignment" onkeyup="gogogo()" name="alignment"  />
        </li>
        <li>
          <label for="experiencepoints">Experience Points</label><input id= "experience" onkeyup="gogogo()" name="experiencepoints" />
        </li>
		<li>
			<label for="experiencepoints"></label><a style="border-radius:50%;" href="index.php"><i class="fa fa-home" style="font-size:50px"></i></a>
        </li>
		<?php
			$player =$_GET['id'];
			
			echo '<li>
			<label for="experiencepoints"></label><a style="border-radius:50%;" href="rulebook.php?home=charsheet.php?id='.$player.'"><i class="fa fa-question-circle" style="font-size:50px"></i></a>
        </li>';
		?>
		
      </ul>
    </section>
  </header>
  <main>
    <section>
      <section class="attributes">
        <div class="scores">
          <ul>
            <li>
              <div class="score">
                <label for="Strengthscore">Strength</label><input id= "stre" onkeyup="gogogo()" name="Strengthscore" placeholder="10" />
              </div>
              <div class="modifier">
                <input id= "strem" name="Strengthmod" placeholder="+0" onkeyup="gogogo()" />
              </div>
            </li>
            <li>
              <div class="score">
                <label for="Dexterityscore">Dexterity</label><input id= "dex" name="Dexterityscore" placeholder="10" onkeyup="gogogo()" />
              </div>
              <div class="modifier">
                <input id= "dexm" name="Dexteritymod" placeholder="+0" onkeyup="gogogo()" />
              </div>
            </li>
            <li>
              <div class="score">
                <label for="Constitutionscore">Constitution</label><input id = "const" name="Constitutionscore" placeholder="10" onkeyup="gogogo()" />
              </div>
              <div class="modifier">
                <input id = "constm" name="Constitutionmod" placeholder="+0" onkeyup="gogogo()" />
              </div>
            </li>
            <li>
              <div class="score">
                <label for="Wisdomscore">Wisdom</label><input id="wisd" name="Wisdomscore" placeholder="10" onkeyup="gogogo()" />
              </div>
              <div class="modifier">
                <input id="wisdm" name="Wisdommod" placeholder="+0" onkeyup="gogogo()" />
              </div>
            </li>
            <li>
              <div class="score">
                <label for="Intelligencescore">Intelligence</label><input id="inte" name="Intelligencescore" placeholder="10" onkeyup="gogogo()" />
              </div>
              <div class="modifier">
                <input id="intem" name="Intelligencemod" placeholder="+0" onkeyup="gogogo()" />
              </div>
            </li>
            <li>
              <div class="score">
                <label for="Charismascore">Charisma</label><input id="chari" name="Charismascore" placeholder="10" onkeyup="gogogo()" />
              </div>
              <div class="modifier">
                <input id="charim" name="Charismamod" placeholder="+0" onkeyup="gogogo()" />
              </div>
            </li>
          </ul>
        </div>
        <div class="attr-applications">
          
          <div class="proficiencybonus box">
            <div class="label-container">
              <label for="proficiencybonus">Proficiency Bonus</label>
            </div>
            <input id="proficiency" name="proficiencybonus" placeholder="+2" onkeyup="gogogo()" />
          </div>
          <div class="saves list-section box">
            <ul>
              <li>
                <label for="Strength-save">Strength</label><input id="stres" name="Strength-save" placeholder="+0" type="text" onkeyup="gogogo()" /><input name="Strength-save-prof" type="checkbox" />
              </li>
              <li>
                <label for="Dexterity-save">Dexterity</label><input id="dexs" name="Dexterity-save" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Dexterity-save-prof" type="checkbox" />
              </li>
              <li>
                <label for="Constitution-save">Constitution</label><input id="consts" name="Constitution-save" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Constitution-save-prof" type="checkbox" />
              </li>
              <li>
                <label for="Wisdom-save">Wisdom</label><input id="wisds" name="Wisdom-save" placeholder="+0" type="text" /><input name="Wisdom-save-prof" type="checkbox" onkeyup="gogogo()"/>
              </li>
              <li>
                <label for="Intelligence-save">Intelligence</label><input id="intes" name="Intelligence-save" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Intelligence-save-prof" type="checkbox" />
              </li>
              <li>
                <label for="Charisma-save">Charisma</label><input id="charis" name="Charisma-save" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Charisma-save-prof" type="checkbox" />
              </li>
            </ul>
            <div class="label">
              Saving Throws
            </div>
          </div>
          <div class="skills list-section box">
            <ul>
              <li>
                <label for="Acrobatics">Acrobatics <span class="skill">(Dex)</span></label><input id="acrob" name="Acrobatics" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Acrobatics-prof" type="checkbox" />
              </li>
              <li>
                <label for="Animal Handling">Animal Handling <span class="skill">(Wis)</span></label><input id="anima" name="Animal Handling" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Animal Handling-prof" type="checkbox" />
              </li>
              <li>
                <label for="Arcana">Arcana <span class="skill">(Int)</span></label><input id="arcan" name="Arcana" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Arcana-prof" type="checkbox" />
              </li>
              <li>
                <label for="Athletics">Athletics <span class="skill">(Str)</span></label><input id="athlet" name="Athletics" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Athletics-prof" type="checkbox" />
              </li>
              <li>
                <label for="Deception">Deception <span class="skill">(Cha)</span></label><input id="decep" name="Deception" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Deception-prof" type="checkbox" />
              </li>
              <li>
                <label for="History">History <span class="skill">(Int)</span></label><input id="histo" name="History" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="History-prof" type="checkbox" />
              </li>
              <li>
                <label for="Insight">Insight <span class="skill">(Wis)</span></label><input id="insig" name="Insight" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Insight-prof" type="checkbox" />
              </li>
              <li>
                <label for="Intimidation">Intimidation <span class="skill">(Cha)</span></label><input id="intimi" name="Intimidation" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Intimidation-prof" type="checkbox" />
              </li>
              <li>
                <label for="Investigation">Investigation <span class="skill">(Int)</span></label><input id="inve" name="Investigation" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Investigation-prof" type="checkbox" />
              </li>
              <li>
                <label for="Medicine">Medicine <span class="skill">(Wis)</span></label><input id="medi" name="Medicine" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Medicine-prof" type="checkbox" />
              </li>
              <li>
                <label for="Nature">Nature <span class="skill">(Int)</span></label><input id="natu" name="Nature" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Nature-prof" type="checkbox" />
              </li>
              <li>
                <label for="Perception">Perception <span class="skill">(Wis)</span></label><input id="perce" name="Perception" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Perception-prof" type="checkbox" />
              </li>
              <li>
                <label for="Performance">Performance <span class="skill">(Cha)</span></label><input id="perf" name="Performance" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Performance-prof" type="checkbox" />
              </li>
              <li>
                <label for="Persuasion">Persuasion <span class="skill">(Cha)</span></label><input id="persu" name="Persuasion" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Persuasion-prof" type="checkbox" />
              </li>
              <li>
                <label for="Religion">Religion <span class="skill">(Int)</span></label><input id="relig" name="Religion" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Religion-prof" type="checkbox" />
              </li>
              <li>
                <label for="Sleight of Hand">Sleight of Hand <span class="skill">(Dex)</span></label><input id="sleig" name="Sleight of Hand" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Sleight of Hand-prof" type="checkbox" />
              </li>
              <li>
                <label for="Stealth">Stealth <span class="skill">(Dex)</span></label><input id="stea" name="Stealth" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Stealth-prof" type="checkbox" />
              </li>
              <li>
                <label for="Survival">Survival <span class="skill">(Wis)</span></label><input id="survi" name="Survival" placeholder="+0" type="text" onkeyup="gogogo()"/><input name="Survival-prof" type="checkbox" />
              </li>
            </ul>
            <div class="label">
              Skills
            </div>
          </div>
        </div>
      </section>
      <div class="passive-perception box">
        <div class="label-container">
          <label for="passiveperception">Passive Wisdom (Perception)</label>
        </div>
        <input id="passwis" name="passiveperception" placeholder="10" />
      </div>
      <div class="otherprofs box textblock">
        <label for="otherprofs">Other Proficiencies and Languages</label><textarea id="proflang" name="otherprofs" onkeyup="gogogo()"></textarea>
      </div>
    </section>
    <section>
      <section class="combat">
        <div class="armorclass">
          <div>
            <label for="ac">Armor Class</label><input id="armor" name="ac" placeholder="10" type="text" onkeyup="gogogo()"/>
          </div>
        </div>
        <div class="initiative">
          <div>
            <label for="initiative">Initiative</label><input id="init" name="initiative" placeholder="+0" type="text" onkeyup="gogogo()"/>
          </div>
        </div>
        <div class="speed">
          <div>
            <label for="speed">Speed</label><input id="speed" name="speed" placeholder="30" type="text" onkeyup="gogogo()"/>
          </div>
        </div>
        <div class="hp">
          <div class="regular">
            <div class="max">
              <label for="maxhp">Hit Point Maximum</label><input id="maxhit" name="maxhp" placeholder="10" type="text" onkeyup="gogogo()"/>
            </div>
            <div class="current">
              <label for="currenthp">Current Hit Points</label><input id="hit" name="currenthp" type="text" onkeyup="gogogo()"/>
            </div>
          </div>
          <div class="temporary">
            <label for="temphp">Temporary Hit Points</label><input id="temphit" name="temphp" type="text" onkeyup="gogogo()"/>
          </div>
        </div>
        <div class="hitdice">
          <div>
            <div class="total">
              <label for="totalhd">Total</label><input id="thitdice" name="totalhd" placeholder="2d10" type="text" onkeyup="gogogo()"/>
            </div>
            <div class="remaining">
              <label for="remaininghd">Hit Dice</label><input id="hitdice" name="remaininghd" type="text" onkeyup="gogogo()"/>
            </div>
          </div>
        </div>
        <div class="deathsaves">
          <div>
            <div class="label">
              <label>Death Saves</label>
            </div>
            <?php
				
				$player = $_GET['id'];
				checker($player);
			
			?>
            </div>
          </div>
        
      </section>
      <section class="attacksandspellcasting">
        <div>
          <label>Attacks & Spellcasting</label>
          <table>
            <thead>
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Atk Bonus
                </th>
                <th>
                  Damage/Type
                </th>
              </tr>
            </thead>
             <div class="spells" style="text-align:center;">
             <?php
				echo '<a style="text-decoration: none; margin-right:15px;" href="weapons.php?id='.$player.'"><span style="font-size:44px;color:red;text-decoration: none">&#9876;</span></a>';
				echo '<a href="spells.php?id='.$player.'"><i class="fa fa-magic" style="font-size:36px;color:red" ></i></a>';
				echo '</div><tbody>';
				$player =$_GET['id'];
				seeweapons($player);
				echo '</tbody>';
			 ?>
          </table>
          <textarea></textarea>
        </div>
      </section>
      <section class="equipment">
        <div>
          <label>Equipment</label>
          <div class="money">	
            <?php
				echo '<a href="items.php?id='.$player.'"><span style="font-size:44px;color:red;text-decoration: none" class="iconify" data-icon="mdi-pickaxe" data-inline="false"></span></a>';
				$player =$_GET['id'];
				seeitems($player);
				
				
			 ?>
          </div>
          
        </div>
      </section>
    </section>
    <section>
      <section class="flavor">
        <div class="personality">
          <label for="personality">Personality</label><textarea id="personal" name="personality" onkeyup="gogogo()"></textarea>
        </div>
        <div class="ideals">
          <label for="ideals">Ideals</label><textarea id="ideal" name="ideals" onkeyup="gogogo()"></textarea>
        </div>
        <div class="bonds">
          <label for="bonds">Bonds</label><textarea id="bond" name="bonds" onkeyup="gogogo()"></textarea>
        </div>
        <div class="flaws">
          <label for="flaws">Flaws</label><textarea id="flaws" name="flaws" onkeyup="gogogo()"></textarea>
        </div>
      </section>
      <section class="features">
        <div>
          <label for="features">Features & Traits</label><textarea id="featstrait" name="features" onkeyup="gogogo()"></textarea>
        </div>
      </section>
    </section>
  </main>
</form>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
		win=0;
		var win1=document.getElementById('win1');
		var win2=document.getElementById('win2');
		var win3=document.getElementById('win3');
		if(win1.checked== true){
			win+=1;
		}
		if(win2.checked== true){
			win+=1;
		}	
		if(win3.checked== true){
			win+=1;
		}
		failed=0;
		var fail1=document.getElementById('fail1');
		var fail2=document.getElementById('fail2');
		var fail3=document.getElementById('fail3');
		if(fail1.checked== true){
			failed+=1;
		}
		if(fail2.checked== true){
			failed+=1;
		}
		if(fail3.checked== true){
			failed+=1;
		}
	var classs=document.getElementById("class");
	var kek=document.getElementById("name");
	var level=document.getElementById("level");
	var experience=document.getElementById("experience");
	var background=document.getElementById("background");
	var charname=document.getElementById("charname");
	var race=document.getElementById("race");
	var alignment=document.getElementById("alignment");
	var stre=document.getElementById("stre");
	var dex=document.getElementById("dex");
	var consti=document.getElementById("const");
	var inte=document.getElementById("inte");
	var wisd=document.getElementById("wisd");
	var chari=document.getElementById("chari");
	var strem=document.getElementById("strem");
	var dexm=document.getElementById("dexm");
	var constm=document.getElementById("constm");
	var intem=document.getElementById("intem");
	var wisdm=document.getElementById("wisdm");
	var charim=document.getElementById("charim");
	var stres=document.getElementById("stres");
	var dexs=document.getElementById("dexs");
	var constis=document.getElementById("consts");
	var intes=document.getElementById("intes");
	var wisds=document.getElementById("wisds");
	var charis=document.getElementById("charis");
	var proficiency=document.getElementById("proficiency");
	var acrob=document.getElementById("acrob");
	var anima=document.getElementById("anima");
	var arcan=document.getElementById("arcan");
	var athlet=document.getElementById("athlet");
	var decep=document.getElementById("decep");
	var histo=document.getElementById("histo");
	var insig=document.getElementById("insig");
	var intimi=document.getElementById("intimi");
	var inve=document.getElementById("inve");
	var medi=document.getElementById("medi");
	var natu=document.getElementById("natu");
	var perce=document.getElementById("perce");
	var perf=document.getElementById("perf");
	var persu=document.getElementById("persu");
	var relig=document.getElementById("relig");
	var sleig=document.getElementById("sleig");
	var stea=document.getElementById("stea");
	var survi=document.getElementById("survi");
	var passwis=document.getElementById("passwis");
	var armor=document.getElementById("armor");
	var init=document.getElementById("init");
	var speed=document.getElementById("speed");
	var maxhit=document.getElementById("maxhit");
	var hit=document.getElementById("hit");
	var temphit=document.getElementById("temphit");
	var hitdice=document.getElementById("hitdice");
	var thitdice=document.getElementById("thitdice");
	var proflang=document.getElementById("proflang");
	var personal=document.getElementById("personal");
	var ideal=document.getElementById("ideal");
	var bond=document.getElementById("bond");
	var flaws=document.getElementById("flaws");
	var featstrait=document.getElementById("featstrait");
	<?php 
	if(isset($_GET['id'])){
		
		include 'db.php';
		$player =$_GET['id'];
		$query = "SELECT * from players WHERE id=:player";
		$stmt = $db->prepare($query);
		$stmt->bindParam(":player",$player );
		$stmt->execute();
		$result = $stmt->fetch();
		if($result>0){ 
			do{
			?>
				 kek.value="<?php echo $result[1];?>";
				 level.value="<?php echo $result[3];?>";
				 experience.value="<?php echo $result[4];?>";
				 background.value="<?php echo $result[5];?>";
				 charname.value="<?php echo $result[6];?>";
				 race.value="<?php echo $result[7];?>";
				 alignment.value="<?php echo $result[8];?>";
				 stre.value="<?php echo $result[9];?>";
				 dex.value="<?php echo $result[10];?>";
				 consti.value="<?php echo $result[11];?>";
				 inte.value="<?php echo $result[12];?>";
				 wisd.value="<?php echo $result[13];?>";
				 chari.value="<?php echo $result[14];?>";
				 strem.value="<?php echo $result[15];?>";
				 dexm.value="<?php echo $result[16];?>";
				 constm.value="<?php echo $result[17];?>";
				 intem.value="<?php echo $result[18];?>";
				 wisdm.value="<?php echo $result[19];?>";
				 charim.value="<?php echo $result[20];?>";
				 stres.value="<?php echo $result[21];?>";
				 dexs.value="<?php echo $result[22];?>";
				 constis.value="<?php echo $result[23];?>";
				 intes.value="<?php echo $result[24];?>";
				 wisds.value="<?php echo $result[25];?>";
				 charis.value="<?php echo $result[26];?>";
				 proficiency.value="<?php echo $result[28];?>";
				 acrob.value="<?php echo $result[29];?>";
				 anima.value="<?php echo $result[30];?>";
				 arcan.value="<?php echo $result[31];?>";
				 athlet.value="<?php echo $result[32];?>";
				 decep.value="<?php echo $result[33];?>";
				 histo.value="<?php echo $result[34];?>";
				 insig.value="<?php echo $result[35];?>";
				 intimi.value="<?php echo $result[36];?>";
				 inve.value="<?php echo $result[37];?>";
				 medi.value="<?php echo $result[38];?>";
				 natu.value="<?php echo $result[39];?>";
				 perce.value="<?php echo $result[40];?>";
				 perf.value="<?php echo $result[41];?>";
				 persu.value="<?php echo $result[42];?>";
				 relig.value="<?php echo $result[43];?>";
				 sleig.value="<?php echo $result[44];?>";
				 stea.value="<?php echo $result[45];?>";
				 survi.value="<?php echo $result[46];?>";
				 passwis.value="<?php echo $result[47];?>";
				 armor.value="<?php echo $result[48];?>";
				 init.value="<?php echo $result[49];?>";
				 speed.value="<?php echo $result[50];?>";
				 maxhit.value="<?php echo $result[51];?>";
				 hit.value="<?php echo $result[52];?>";
				 temphit.value="<?php echo $result[55];?>";
				 hitdice.value="<?php echo $result[56];?>";
				 thitdice.value="<?php echo $result[57];?>";
				 proflang.value="<?php echo $result[58];?>";
				 personal.value="<?php echo $result[59];?>";
				 ideal.value="<?php echo $result[60];?>";
				 bond.value="<?php echo $result[61];?>";
				 flaws.value="<?php echo $result[62];?>";
				 featstrait.value="<?php echo $result[63];?>";
				 classs.value="<?php echo $result[2];?>"; 
			<?php }while(($result = $stmt->fetch()));
		
		 } 
	?>
		console.log(classs.value);
		var player="<?php echo $player;?>";
	<?php } ?>
	
	
	function gogogo(){
		
		$.ajax({
					type: 'POST',
					url: 'update_db.php',
							data: { player: player, kek: kek.value, xp: experience.value, back: background.value, charn: charname.value, 
							race: race.value, ali: alignment.value, stre: stre.value, dex: dex.value, consti: consti.value, inte: inte.value, wisd: wisd.value, 
							chari: chari.value, strem: strem.value, dexm: dexm.value, constm: constm.value, intem: intem.value, wisdm: wisdm.value, 
							charim: charim.value, stres: stres.value, dexs: dexs.value, constis: constis.value, intes: intes.value, wisds: wisds.value, 
							charis: charis.value, proficiency: proficiency.value, acrob: acrob.value, anima: anima.value, arcan: arcan.value, 
							athlet: athlet.value, decep: decep.value, histo: histo.value, insig: insig.value, intimi: intimi.value, inve: inve.value, 
							medi: medi.value, natu: natu.value, perce: perce.value, perf: perf.value, persu: persu.value, relig: relig.value, 
							sleig: sleig.value, stea: stea.value, survi: survi.value, passwis: passwis.value, armor: armor.value, init: init.value, 
							speed: speed.value, maxhit: maxhit.value, hit: hit.value, temphit: temphit.value, hitdice: hitdice.value, 
							thitdice: thitdice.value, proflang: proflang.value, personal: personal.value, ideal: ideal.value, bond: bond.value, 
							flaws: flaws.value, featstrait: featstrait.value, win: win, failed: failed, level: level.value, classs: classs.value },
							success: function(response){
								console.log(response);
						}
					});
	}
	function wine(){
		win=0;
		var win1=document.getElementById('win1');
		var win2=document.getElementById('win2');
		var win3=document.getElementById('win3');
		if(win1.checked== true){
			win+=1;
		}
		if(win2.checked== true){
			win+=1;
		}
		if(win3.checked== true){
			win+=1;
		}
		gogogo();
		
	}
	function fail(){
		failed=0;
		var fail1=document.getElementById('fail1');
		var fail2=document.getElementById('fail2');
		var fail3=document.getElementById('fail3');
		if(fail1.checked== true){
			failed+=1;
		}
		if(fail2.checked== true){
			failed+=1;
		}
		if(fail3.checked== true){
			failed+=1;
		}
		gogogo();
	}
	
</script>