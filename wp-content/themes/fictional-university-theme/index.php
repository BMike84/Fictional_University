<!-- <?php 
  function greet($name, $color) {
   echo "<h2>Hi, my name is $name and my favorite color is $color</h2>";
  }
  greet('John', "blue");
  greet('Jane', 'green');
  
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description') ?></p>


 -->

 <?php 
  $names = array('Mike', 'Brad', 'Pete');
  $count = 0;
  while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
  }
 ?>

 <!-- <h3>Hi, my name is <?php echo $names[0] ?>.</h3> -->

