<?php
            
  require("../fpdf/fpdf.php");

    $servername="localhost";
    $user="root";
    $db_password="";
    $db="user_exemplu";

    $conn = new mysqli($servername, $user, $db_password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['btn_pdf'])){
    
        class PDF extends FPDF{
        function Header()
        {
            $this->Image('logoWoG.jpg',10,6,30);
            $this->SetFont('Arial','B',15);
            $this->Cell(80);
            $this->Cell(30,10,'Top Active Users','C');
            $this->Ln(20);
        }
        
        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
        }
        
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','b',12);
        $pdf->SetLeftMargin(45);
        $pdf->cell('20','10','Nr. crt', '1', '0', 'C');
        $pdf->cell('100','10','Username', '1', '1', 'C');
        
        $counter = 0;
        $pdf->SetFont('Times','',12);


        $stmt = $conn->prepare("SELECT * FROM user_exemplu.users ORDER BY activity_points DESC, username ASC, email ASC;");
        $stmt->execute();
        if($stmt->execute()){
          $result = $stmt->get_result();
          $stmt->close();
          while($row = $result->fetch_assoc()){
            $pdf->cell('20','10',++$counter, '1', '0', 'C');
            $pdf->cell('100','10',$row["username"], '1', '1', 'C');
            }
        }else{
            echo 'Error';
        }

        $pdf->Output();
    }
              
?>