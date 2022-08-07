<?php 
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
    public function studentProfileDetails(){
    $result = mysqli_query($this->con,"select userpublics.id, userpublics.name ,student_details.linkedin, student_details.github , student_coins.coins,student_project_details.project_name,student_project_details.git
    from userpublics 
    inner join student_details on userpublics.id = student_details.user_id
    inner join student_coins on userpublics.id = student_coins.user_id
    left join student_project_details on userpublics.id=student_project_details.student_id
    group by userpublics.id");
    $json_array = array();
    
    while($row = mysqli_fetch_array($result)){
      if ($row['id'] == 59){ // it stores the details of the person with 29 id in the username.json file
        $json_array[]=$row;
        echo 87;
        json_converting($row['name'],$json_array);
      }
      }
    }}
$obj= new testings();
$obj->studentProfileDetails();
?>
