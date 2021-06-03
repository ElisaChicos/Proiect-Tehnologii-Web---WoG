<?php
            
            function getData(){
                $host="localhost";
                $user="root";
                $password="";
                $db="users";
                $aVar=mysqli_connect($host,$user,$password);
                $query = "SELECT * FROM user_exemplu.users ORDER BY username DESC;";
                $result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));
                $activeUsers = array();
                $counter = 0;
                while($row = mysqli_fetch_array($result))
               {
                 $activeUsers[] = array(
                    'nr.crt' => ++$counter,
                    'username' => $row["username"]
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