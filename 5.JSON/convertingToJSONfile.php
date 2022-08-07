<?php
    function json_converting($name,$json_array){
        $a=$name;
        $b='.json';
        $c=$a.$b;
        $x=fopen($c,'w');
        fwrite($x,json_encode($json_array));
        fclose($x);}    
 #json_converting($row['name'],json_array);

?>



<!-- <?php //Sample code
    include 'convertingToJSONfile.php';
    class testings{
    public $con;
    public function __construct(){
    $this->con=mysqli_connect('localhost','root','','spotknack',3307);
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    }
    public function studentsBetweenAprilToJuly(){
    $result = mysqli_query($this->con,"select id,name, created_at from userpublics where month(created_at)>4 and month(created_at)<7; 
    ");
    $json_array = array();
    
    while($row = mysqli_fetch_array($result)){
      if ($row['id'] == 29){ // it stores the details of the person with 29 id in the username.json file
        $json_array[]=$row;
        json_converting($row['name'],$json_array);
      }
    }
    }}
$obj= new testings();
$obj->studentsBetweenAprilToJuly();


?> -->