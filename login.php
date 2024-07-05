<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	// code...

	// $mysqli = require __DIR__ . "/database.php";
	   $mysqli = require __DIR__ . "/database.php";

	$sql = sprintf("SELECT * FROM user
	        WHERE email = '%s'",
	        $mysqli->real_escape_string($_POST["email"])); 

	$result = $mysqli->query($sql);

	$user = $result->fetch_assoc();

	// var_dump($user);
	// exit;

	if ($user) {

		if (password_verify($_POST["password"], $user["password_hash"])) {

			// die("Login successful");
			session_start();

            session_regenerate_id();

			// $_SESSION["Your_Name"] = $user["name"];
			$_SESSION["user_id"] = $user["id"];



			header("Location: index.php");
			// !!!!!!!!
			exit;
		}
	}

	$is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>C-Shop ● Login</title>
	<link rel="stylesheet" type="text/css" href="css/account.css">
</head>
<body>
	<section class="page flex">
		

		<div class="form__cover flex">

		 <!-- Form Logo -->
		<div class="box__logo form_branding flex" onclick="window.location.href= 'index.php'">
			<svg class="c-shop__icon" width="24" height="24" viewBox="0 0 24 24" version="1.1" id="svg1" sodipodi:docname="C-Shop.svg" xml:space="preserve" inkscape:export-filename="icons\brand\C-Shop.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
			<defs id="defs1"></defs>
			<sodipodi:namedview id="namedview1" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"></sodipodi:namedview>
			<g id="g17" transform="matrix(0.0791812,0,0,0.0791812,-9.6840863,-9.290962)">
			<path class="c-shop__icon-layer1" d="m 239.66101,409.37007 c -13.54433,-1.64923 -30.55597,-7.80771 -41.9932,-15.20221 -39.93742,-28.33308 -36.89962,-67.06558 -22.9241,-107.48435 2.99561,-8.34205 5.93362,-16.65113 6.52889,-18.46463 0.59528,-1.81349 4.12161,-11.90309 7.83631,-22.42134 3.71469,-10.51824 7.27104,-20.9046 7.90299,-23.08079 0.63197,-2.17617 3.18577,-9.59502 5.67514,-16.48627 2.48936,-6.89127 5.24179,-14.60685 6.11648,-17.14573 0.87472,-2.53888 2.27717,-6.05557 3.14868,-8.39825 0.45041,-1.21075 2.20386,-5.50807 4.36672,-9.92726 1.73267,-3.54023 6.10906,-10.07878 10.64371,-15.77638 5.48804,-6.89548 17.50409,-16.70668 23.85282,-19.476 15.32236,-6.68365 20.05368,-7.66605 36.74406,-7.62951 9.79742,0.0215 18.20199,1.32632 21.42075,2.04255 8.75121,1.94729 12.21417,3.7887 18.70513,7.51407 0,0 2.37097,1.62736 2.93028,1.99574 0.41142,0.27096 2.06819,1.71933 2.06819,1.71933 2.23027,1.46115 8.76511,8.4571 13.46016,16.94147 10.17389,18.38513 5.91428,54.44882 -8.09405,68.52775 -11.36253,11.4198 -26.54438,11.51803 -36.38153,0.23541 -5.00533,-5.74082 -5.84525,-11.61363 -2.83782,-19.84195 1.47469,-4.03469 2.46543,-10.25629 2.48136,-15.5823 0.0324,-10.85212 -2.4645,-14.15208 -11.48145,-15.17354 -7.84053,-0.8882 -14.31437,1.43769 -20.38921,7.32531 -6.54699,6.34522 -8.37649,9.46708 -12.50023,21.33034 -1.89114,5.44049 -5.21402,14.82762 -7.38416,20.86033 -2.17015,6.0327 -4.82597,13.45153 -5.90177,16.48627 -5.06314,14.28243 -11.35971,31.75736 -15.76978,43.76589 -2.66397,7.25397 -5.13962,14.37603 -5.50144,15.82683 -0.36183,1.45079 -1.19654,3.82482 -1.85491,5.27561 -3.14823,6.93757 -6.45472,20.08398 -6.42881,25.56068 0.0998,21.09765 24.08019,38.62049 53.11882,38.81474 20.95708,0.14019 41.93348,-9.54719 57.98183,-26.77738 6.69874,-7.19201 14.82831,-20.6293 18.16137,-30.01873 1.35273,-3.81071 4.15252,-8.55877 6.22174,-10.55121 3.28011,-3.1584 7.24542,-4.43864 11.47161,-4.67179 9.85099,-0.54346 16.55122,5.33416 19.06743,11.06755 1.18133,2.69173 1.70571,7.22233 -0.14031,13.61605 -8.81544,30.53237 -31.29032,57.10613 -60.9283,72.41742 -21.39089,11.05074 -52.5003,16.06089 -79.3934,12.78624 z" sodipodi:nodetypes="sssssssssssssssssssssssssssssssssssssssss"></path>
		    </g>
	        </svg>
			<span class="c-shop__text">-Shop</span>
		</div>

		<!-- Login form field -->
		<?php if ($is_invalid) : ?>
			<em class="form_feedback">Invalid Info</em>
		<?php endif; ?>
		
		<h5 class="form__title">LogIn</h5>

		<form class="form__box flex" method="post">

			<input type="email" name="email" placeholder="Enter Your Email" class="field" value="<?= htmlspecialchars($_POST["email"] ?? "")?>">

			<input type="password" name="password" placeholder="Enter Password" class="field">

			<input type="submit" name="" value="Login" class="acting">

			<span class="else__cover flex">
				<input type="checkbox" name="" class="restore__box">
				<p class="restore__text">For get password</p>
				<a href="signup.html" class="signup__text">Create account</a>
			</span>
		</form>
	</div>
	</section>
</body>
</html>