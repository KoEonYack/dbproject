<?php
    function movieClick(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
            
            global $conn;
            
            require('../db_connect.php');
            $sql = "INSERT INTO user_hate_list VALUES (".$_GET['id'].",".$_SESSION['userlist_id'].")";
            $result = mysqli_query($conn, $sql);

            $sql1 = "SELECT movie_name FROM movie_list WHERE movie_id=".$_GET['id'];
            echo '<h4>'.$sql.'</h4>';
            $result = mysqli_query($conn, $sql1);
            $row = mysqli_fetch_array($result);
            echo "<br><h5> 선택한 싫어하는 영화 이름  : ".$row['movie_name']."<h5>";

            // echo '<h5>유저 ID : '.$row['userlist_id'].'</h5>';
            // echo '<h5>개봉국가 : '.$row['nation'].'</h5>';

        }
          else{
              echo "Error :: invaild id";
          }
        }
        

?>
