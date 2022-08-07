<?php
    class connection_establishment{
    public $con;
    public function __construct(){
    $this->con=mysqli_connect('localhost','root','','spotknack',3307);
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    }
    }

    class detailsOfEachStudent extends connection_establishment{
        public function detailsOfEachStudent(){
            $result = mysqli_query($this->con,"SELECT userpublics.id,userpublics.name,userpublics.email, student_details.dob, student_details.mobile ,department_lists.department_name,college_lists.college_name, student_coins.coins
            FROM userpublics
            inner JOIN student_details  ON  userpublics.id=student_details.user_id
            inner join department_lists on student_details.department=department_lists.id
            inner join college_lists on userpublics.id=college_lists.id
            inner join student_coins on student_coins.id=userpublics.id 
            where userpublics.id<10;
            ");
            while($row = mysqli_fetch_array($result))
              { echo'<br>';
                echo 'Id: '.$row['id'].'<br> Name :'.$row['name'].'<br> Email : '.$row['email'].
                '<br>Dob : '.$row['dob'].'<br> Mobile : '.$row['mobile'].'<br> department_name : '
                .$row['department_name'].'<br> college_name : '.$row['college_name'].'<br> coins : '.$row['coins']; 
              echo "<br><br>";}
        
            mysqli_close($this->con);}

    }
    class namesAscendingOrderOfCoins extends connection_establishment{
        public function namesAscendingOrderOfCoins(){
            #$result = mysqli_query($con,"SELECT * FROM student_details");
            $result = mysqli_query($this->con,"select userpublics.name, student_coins.coins
            from student_coins
            join userpublics
            on userpublics.id=student_coins.id
            where student_coins.coins >0 order by student_coins.coins;
            ");
            while($row = mysqli_fetch_array($result))
              {
                echo'<br>';
                echo 'Name :'.$row['name'].'<br>'. 'coins : '.$row['coins']; 
              echo "<br><br>";}
              echo "</table>";
        
            mysqli_close($this->con);}}

    class studentsBetweenAprilToJuly extends connection_establishment{
        public function studentsBetweenAprilToJuly(){
            $result = mysqli_query($this->con,"select name, 
            created_at from userpublics where month(created_at)>4 and month(created_at)<7;");
            while($row = mysqli_fetch_array($result))
              { echo'<br>';
                echo 'Name :'.$row['name'].'<br> Joined On : '.$row['created_at']; 
              echo "<br><br>";}

            mysqli_close($this->con);}}  
            
        
    class julyBornStudents extends connection_establishment{
        public function julyBornStudents(){
            $result = mysqli_query($this->con,"select userpublics.name , student_details.dob, student_details.mobile
            from student_details
            inner join userpublics
            on userpublics.id=student_details.user_id
            where month(dob)=7; 
            ");
            while($row = mysqli_fetch_array($result))
              { echo'<br>';
                echo 'Name :'.$row['name'].'<br> DOB : '.$row['dob'].'<br> Mobile : ',$row['mobile']; 
              echo "<br><br>";}

            mysqli_close($this->con);}}  
      

    class studentsByDobOrder extends connection_establishment{
        public function studentsByDobOrder(){
            $result = mysqli_query($this->con,"select userpublics.name, student_details.dob 
            from student_details
            inner join userpublics
            on userpublics.id=student_details.user_id
            #where month(student_details.dob)=7
            order by student_details.dob;
             
            ");
            while($row = mysqli_fetch_array($result))
              { echo'<br>';
                echo 'Name :'.$row['name'].'<br> DOB : '.$row['dob']; 
              echo "<br><br>";}

            mysqli_close($this->con);}}


    class studentsWithOneProject extends connection_establishment{
        public function studentsWithOneProject(){
            $result = mysqli_query($this->con,"select userpublics.name, student_project_details.project_name 
            from student_project_details
            inner join userpublics
            on student_project_details.id=userpublics.id;            
            ");
            while($row = mysqli_fetch_array($result))
              { echo'<br>';
                echo 'Name :'.$row['name']. '<br> Project name: '.$row['project_name']; 
              echo "<br><br>";}

            mysqli_close($this->con);}}

    

    
    // echo "Enter the number of he detail you need to retrieve from the below : <br>
    // 1.detailsOfEachStudent <br>2.namesAscendingOrderOfCoins <br>3.studentsBetweenAprilToJuly <br>4.julyBornStudents
    // <br>5.studentsByDobOrder <br>6.studentsWithOneProject <br> ";
    $obj1= new detailsOfEachStudent();
    $obj1->detailsOfEachStudent();
    echo " Coin details <br><br>";
    $obj2= new namesAscendingOrderOfCoins();
    $obj2->namesAscendingOrderOfCoins();
    echo " studentsBetweenAprilToJuly <br><br> ";
    $obj3= new studentsBetweenAprilToJuly();
    $obj3->studentsBetweenAprilToJuly();
    echo "julyBornStudents <br><br>";
    $obj4= new julyBornStudents();
    $obj4->julyBornStudents();
    echo " studentsByDobOrder <br><br>";
    $obj5= new studentsByDobOrder();
    $obj5->studentsByDobOrder();
    echo "studentsWithOneProject <br><br>";
    $obj6= new studentsWithOneProject();
    $obj6->studentsWithOneProject();

?>