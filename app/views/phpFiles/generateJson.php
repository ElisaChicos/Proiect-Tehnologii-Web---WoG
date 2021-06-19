<?php
            
            function getData(){

                $servername="localhost";
                $user="root";
                $db_password="";
                $db="user_exemplu";
                
                $conn = new mysqli($servername, $user, $db_password, $db);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $activeUsers = array();
                $counter = 0;

                $stmt = $conn->prepare("SELECT * FROM user_exemplu.users ORDER BY activity_points DESC, username ASC, email ASC;");
                $stmt->execute();
                if($stmt->execute()){
                    $result = $stmt->get_result();
                    $stmt->close();
                    while($row = $result->fetch_assoc()){
                        $activeUsers[] = array(
                            'nr.crt' => ++$counter,
                            'username' => $row["username"],
                            'age' => $row["age"],
                            'gender' => $row["gender"]
                        );
                    }
                return json_encode($activeUsers);
                }else{
                    echo 'Error';
                }
            }
            $filename = 'activeUsers.json';
            if(file_put_contents($filename, getData())){
                echo '';
            }else{
                echo 'There is a error.';
            }
?>