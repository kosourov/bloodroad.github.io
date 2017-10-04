<?php session_start(); define("INDEX", "");?>

<!DOCTYPE html>
<html>
	<head>
		<title>Blood Road</title>
		<link rel="shortcut icon" href="http://bloodroad.ru/favicon.ico" type="image/x-icon">
		<link rel="icon" type="image/x-icon" href="http://bloodroad.ru/favicon.ico">
		<meta name="description" content="Blood Road - Это новейший проект игровых серверов на котором вы точно не заскучаете. У нас опытная администрация проверенная годами. Каждый игрок сможет найти для себя сервер по душе, ведь наши сервера находятся на мощнейшем оборудовании специально для вас!">
		<meta name="keywords" content="Blood, Road, Игра, Minecraft, RUST, Lineage, Counter-Strike, cs, кс, линейка, майнкрафт, mmo, онлайн, комплекс, игровых, серверов, игровые сервера">
		<meta name="robots" content="all">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://bloodroad.ru/js/script.js"></script>
		<link href="http://bloodroad.ru/css/style.css" rel="stylesheet" type="text/css" />
	</head>
<body>
	
	<?php
	//OPTIONS
	
	// Timer start date
	$Timer = [01,10,2017,16,00,00];	// d,m,y,h,m,s
	$Lang = 'Eng';
	
	include($_SERVER[DOCUMENT_ROOT]."/com/lang.php");
	$ColorServer = ['c_gray','c_red_f','c_yellow_f','c_yellow_f','c_blue_f','c_green'];
	?>
	
	
	
	<div class="background_right b<?php echo rand(1, 6)?>"></div>
	<div id="preloader"><div id="preloader_bg"><div id="preloader_fill"></div></div></div>

	<div id="wrapper">
		<center><a href="http://bloodroad.ru/" alt="<h2>Blood Road</h2>"><div id="logo"></div></a></center><br><br>
	
		<div class="start_block">
			<center>
				<h1 class="c_blue"><?php echo $Word['Opening']?></h1><br>
				<canvas id="d" class="timer" width="200" height="200"></canvas>
				<canvas id="h" class="timer" width="200" height="200"></canvas>
				<canvas id="m" class="timer" width="200" height="200"></canvas>
				<canvas id="s" class="timer" width="200" height="200"></canvas>
			</center>

			<script type="text/javascript">
				var timer_end = "<?php echo $Timer[1].'-'.$Timer[0].'-'.$Timer[2].' '.$Timer[3].':'.$Timer[4].':'.$Timer[5]?>";//month-day-year
				var timer_color = "blue"; //blue,red,green,yellow;
				var timer_bg = ['#111113','#fff'];	//background circle, color text
				getTimeRemaining(); // start timer countdown
			</script>
		</div>
		
		

		<?php
			// Status(0 - Coming Soon., 1 - Work), Img, Admin, Tech Admin, Game Admin, All Current Players, All Maximum Players, Link game
			$Game[] = [
			[0,99],
			'mc.jpg',
			'<a href="" class="c_red">Getaxe</a>',
			'<a href="" class="c_blue">-----</a>',
			'<a href="" class="c_yellow">-----</a>',
			0,400,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] MC HiTech','21.05.2017',0,100],
					[0,'[BR] MC Magic','21.05.2017',0,100],
                    [0,'[BR] MC DayZ','21.05.2017',0,100],
					[0,'[BR] MC MiniGames','21.05.2017',0,100],
				],
			'Minecraft'
			];
			$Game[] = [
			[0,98],
			'cs.jpg',
			'<a href="" class="c_red">Getaxe</a>',
			'<a href="" class="c_yellow">-----</a>',
			'<a href="" class="c_blue">-----</a>',
			0,256,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] CS:GO Classic','21.05.2017',0,32],
					[0,'[BR] CS1.6 Classic','21.05.2017',0,32],
					[0,'[BR] CS:GO AWP','21.05.2017',0,32],
					[0,'[BR] CS1.6 AWP','21.05.2017',0,32],
					[0,'[BR] CS:GO Jail','21.05.2017',0,32],
					[0,'[BR] CS1.6 Jail','21.05.2017',0,32],
					[0,'[BR] CS:GO DeathRun','21.05.2017',0,32],
					[0,'[BR] CS1.6 DeathRun','21.05.2017',0,32],
				],
			'Counter-Strike'
			];
			$Game[] = [
			[0,97],
			'arma3.jpg',
			'<a href="" class="c_red">Getaxe</a>',
			'<a href="" class="c_yellow">-----</a>',
			'<a href="" class="c_blue">-----</a>',
			0,50,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] Arma3 ','21.05.2017',0,50],
				],
			'Arma 3'
			];
			$Game[] = [
			[0,96],
			'rust.jpg',
			'<a href="" class="c_red">Getaxe</a>',
            '<a href="" class="c_yellow">-----</a>',
			'<a href="" class="c_blue">-----</a>',
			0,300,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] RUST TP|Map|X2|Clan ','21.05.2017',0,200],
					[0,'[BR] RUST Classic|Stacks ','21.05.2017',0,150],
					[0,'[BR] RUST Barren|Solo|X3|TP','21.05.2017',0,150],
				],
			'RUST'
			];
			$Game[] = [
			[0,95],
			'la.jpg',
			'<a href="" class="c_red">Getaxe</a>',
			'<a href="" class="c_yellow">-----</a>',
			'<a href="" class="c_blue">-----</a>',
			0,500,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] L2 ','21.05.2017',0,200],
					[0,'[BR] L2 ','21.05.2017',0,100],
					[0,'[BR] L2 ','21.05.2017',0,100],
					[0,'[BR] L2 ','21.05.2017',0,100],
				],
			'Lineage 2'
			];
			$Game[] = [
			[0,94],
			'samp.jpg',
			'<a href="" class="c_red">Getaxe</a>',
			'<a href="" class="c_yellow">-----</a>',
			'<a href="" class="c_blue">-----</a>',
			100,300,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] SAMP RolePlay','21.05.2017',22,65],
					[0,'[BR] SAMP Drift','21.05.2017',44,70],
					[0,'[BR] SAMP DeathMatch','21.05.2017',16,130],
				],
			'GTA: SAMP'
			];
			$Game[] = [
			[0,93],
			'unturned.jpg',
			'<a href="" class="c_red">Getaxe</a>',
			'<a href="" class="c_yellow">-----</a>',
			'<a href="" class="c_blue">-----</a>',
			100,300,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] Unturned #1','21.05.2017',22,65],
					[0,'[BR] Unturned #2','21.05.2017',44,70],
					[0,'[BR] Unturned Mega','21.05.2017',16,130],
				],
			'Unturned'
			];
			$Game[] = [
			[0,92],
			'7dtd.jpg',
			'<a href="" class="c_red">Getaxe</a>',
			'<a href="" class="c_yellow">-----</a>',
			'<a href="" class="c_blue">-----</a>',
			100,300,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] 7DaysToDie','21.05.2017',0,50],

				],
			'7 Days To Die'
			];
			$Game[] = [
			[0,91],
			'hurtworld.jpg',
			'<a href="" class="c_red">Getaxe</a>',
			'<a href="" class="c_yellow">-----</a>',
			'<a href="" class="c_blue">-----</a>',
			100,300,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] HurtWorld ','21.05.2017',0,0],

				],
			'HurtWorld'
			];
			/*$Game[] = [
			[0,0],
			'blackwake.jpg',
			'<a href="" class="c_red">Getaxe</a>, <a href="" class="c_red">MrBraZZers</a>',
			'<a href="" class="c_blue">-----</a>',
			'<a href="" class="c_yellow">-----</a>',
			100,300,'http://mc.bloadroad.ru/',
				[	// Status(0 - In work, 1 - off, 2 - CBT, 3 - OBT, 4 - Tech Work, 5 - Work), NameServer, Date start, Current Players, Maximum Players, 
					[0,'[BR] MC #1 TechServ','21.05.2017',22,65],
					[5,'[BR] MC #2 TechServ','21.05.2017',44,70],
					[3,'[BR] MC #3 TechServ','21.05.2017',16,130],
				],
			'BlackWake'
			];*/
		?>
		
		<br>
		<div class="start_block" style="padding:0px;background:none;border:0;">
			<table border="0" cellspacing="0" cellpadding="5" width="100%" class="servers">
				<?php
					rsort($Game);
					for($i=0;$i<count($Game);$i++){
						$NextTr='';if($i%3==0){$NextTr = '<tr>';}
						$Align='center';
						if($i%3==0){$Align='left';}
						if($i%3==2){$Align='right';}
						
						$button = 'b_blue';
						$ComingSoon = '';
						if($Game[$i][0][0]==0){ $ComingSoon = '<div class="coming_soon">'.$Word['ComingSoon'].'</div>';$button = 'b_gray';}
						$PrBar = (($Game[$i][5]/$Game[$i][6])*100);
						if($PrBar >= 0){$PrBarBg = 'b_blue_f';}if($PrBar >= 30){$PrBarBg = 'b_green_f';}if($PrBar >= 50){$PrBarBg = 'b_yellow_f';}if($PrBar >= 90){$PrBarBg = 'b_red_f';}
						rsort($Game[$i][8]);
						$Servera = '';
						for($j=0;$j<count($Game[$i][8]);$j++){
							if($Game[$i][8][$j][0] <= 1){$Alt='<span class=\''.$ColorServer[$Game[$i][8][$j][0]].'\'>'.$Word['StatusServer'][$Game[$i][8][$j][0]].'</span><br><span class=\'c_yellow_f\'>'.$Game[$i][8][$j][1].'</span>';}else{$Alt='<h3><span class=\''.$ColorServer[$Game[$i][8][$j][0]].'\'>'.$Word['StatusServer'][$Game[$i][8][$j][0]].'</span><br><span class=\'c_blue_f\'>'.$Game[$i][8][$j][1].'</span><br><span class=\'c_yellow_f\'>'.$Word['StartDate'].' '.$Game[$i][8][$j][2].'</span><br><span class=\'c_red_f\'>'.$Word['Online'].' '.$Game[$i][8][$j][3].' / '.$Game[$i][8][$j][4].'</span></h3>';}
							
							$Servera .= '<div style="cursor:pointer;" class="icon r2 server '.$ColorServer[$Game[$i][8][$j][0]].'" alt="'.$Alt.'"></div> ';
						}
						echo '
						'.$NextTr.'
						<td align="'.$Align.'">
							<div class="block_server">
								<div style="background-image:url(img/servers/'.$Game[$i][1].');" class="image_server" alt="<h2 class=\'c_blue_f\'>'.$Game[$i][9].'</h2>">'.$ComingSoon.'</div>
								<a href="'.$Game[$i][7].'" class="button '.$button.' btserver" alt="'.$Word['GoToGame'].'">'.$Word['GoToGame'].'</a>
								<table border="0" cellspacing="10" cellpadding="5" width="100%">
									<tr><td width="120">'.$Word['Admin'].'</td><td>'.$Game[$i][2].'</td></tr>
									<tr><td>'.$Word['GameAdmin'].'</td><td>'.$Game[$i][3].'</td></tr>
									<tr><td>'.$Word['TechAdmin'].'</td><td>'.$Game[$i][4].'</td></tr>
									<tr><td>'.$Word['Online'].'</td><td alt="'.$Word['AllOnline'].' '.$Game[$i][5].' / '.$Game[$i][6].'"><div class="progress"><div class="fill '.$PrBarBg.'" style="width:'.$PrBar.'%;"></div></div></td></tr>
									<tr><td valign="top">'.$Word['NumServer'].'</td><td>
									'.$Servera.'
									</td></tr>	
								</table>
							</div>
						</td>
						';	
					}
				?>
			</table>
			<div class="clear"></div>
		</div>
	</div>




	<script>
		$('#preloader_fill').animate({'width':'100%'},2000,function(){$(this).parent().fadeOut(200);});

		$(window).on('load', function () {
			var $preloader = $('#preloader'),
			$spinner   = $preloader.find('#preloader_fill');
			$spinner.stop(true,true).css('width','100%');
			$preloader.stop(true,true).fadeOut(700);
			$spinner.fadeOut();
			$preloader.delay(100).fadeOut(1500);
		});
	</script>
<br><br><br><br>
					<center><font size="3">Copyright © 2017 <a href="http://bloodroad.ru">bloodroad.ru</a></font></center> 
<br><br><br><br> 

</body>
</html>