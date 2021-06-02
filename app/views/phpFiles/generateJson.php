<?php
            
            function getData(){
                $host="localhost";
                $user="root";
                $password="";
                $db="images";
                $aVar=mysqli_connect($host,$user,$password);
                $query = "SELECT * FROM user_exemplu.images ORDER BY name_image DESC;";
                $result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));
                $activeUsers = array();
                while($row = mysqli_fetch_array($result))
               {
                 $activeUsers[] = array(
                    'name' => $row["name_image"],
                    'step1' => $row["step1"]
                 );
               }
               return json_encode($activeUsers);
            }

            $filename = 'activeUsers.json';
            if(file_put_contents($filename, getData())){
                echo '';
            }else{
                echo 'There is a error.';
            }
?>