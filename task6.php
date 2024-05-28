<?php

$names=array("Joe"=>"smarties", 
"Ahmed"=>"pringles",
"Cassie"=>"marmite crisps" ,
 "Ben"=> "cakes");

foreach($names as $k=>$val){
    echo $k .":". $val ."<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Question number one</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>student name</th>
        <th>Fav food</th>
        
      </tr>
    </thead>
    <tbody>
      
        <?php
foreach($names as $k=>$val){
    echo "
    <tr>
    <td>$k</td>
    <td>$val</td>
    </tr>
    ";
    ?>
<?php
        //Q2
        
       $num="-3"; 
if($num>0){
    echo "the number is positive"."<br>";
}elseif($num<0){
    echo "the number is negative"."<br>";
}elseif($num == 0){
    echo "the number is zero"."<br>";
}

}
        ?>


        
    </tbody>
  </table>
</div>

</body>
</html>

