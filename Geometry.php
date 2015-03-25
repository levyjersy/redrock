<?php
	abstract class Geometry{
		abstract function area($a);
		abstract function zhouchang($a);
	}
	interface math {
		public function volume($a);
		public function surface($a);
	}
	class Circle extends Geometry {
		protected $a;
		static $PI = 3.14;
		public function area ($a) {
			echo '圆的面积是：'.self::$PI*$a*$a;
		}
		public function zhouchang ($a) {
			echo '圆的周长是：'.self::$PI*$a*2;
		}
	} 
	class Ball extends Circle implements math {
		public function volume ($a) {
			echo '球的体积是：'.parent::$PI*$a*$a*$a*4/3;
		}
		public function surface ($a) {
			echo '球的表面积是：'.parent::$PI*$a*$a*4;
		}
	}
	class Square extends Geometry {
		protected $a;
		public function area ($a) {
			echo '正方形的面积是：'.$a*$a;
		}
		public function zhouchang ($a) {
			echo '正方形的周长是：'.$a*4;
		}
	}
	class Cube extends Square implements math {
		public function volume ($a) {
			echo '正方体的体积是：'.$a*$a*$a;
		}
		public function surface ($a) {
			echo '正方体的表面积是：'.$a*$a*6;
		}
	} 
	if(isset($_POST['geometry'])){
		$geometry = $_POST['geometry'];
		$length = $_POST['length'];
		if($geometry == '圆'){
			$circle = new Circle();
			$circle->area($length);
			$circle->zhouchang($length);
			$ball = new Ball();
			echo '<br>';
			$ball->area($length);
			$ball->zhouchang($length);
			$ball->volume($length);
			$ball->surface($length);
			echo '<br>';
		}
		if($geometry == '正方形'){
			$Square = new Square();
			echo '<br>';
			$Square->area($length);
			$Square->zhouchang($length);
			$cube = new Cube();
			$cube->area($length);
			$cube->zhouchang($length);
			$cube->volume($length);
			$cube->surface($length);
		}
	}
?>
<!DOCTYPE html>
<head>
</head>
<body>
	<form action="Geometry.php" method="post">
		图形形状：&nbsp&nbsp<input type="text" name="geometry" style="margin:10px;"><br>
		半径或边长：<input type="text" name="length" style="margin:10px;"><br>
		<input type="submit" name="submit" value="提交"> 
	</form>
</body>
</html>