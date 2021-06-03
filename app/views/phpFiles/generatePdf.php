<?php
            
  require("../fpdf/fpdf.php");

                $host="localhost";
                $user="root";
                $password="";
                $db="users";
                $aVar=mysqli_connect($host,$user,$password);
                $query = "SELECT * FROM user_exemplu.users ORDER BY username DESC;";
                $result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));

                if(isset($_POST['btn_pdf'])){
                   
                    class PDF extends FPDF{
                    function Header()
                    {
                        $this->Image('logo_wog.jpg',10,6,30);
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
                    while($row = mysqli_fetch_array($result)){
                        $pdf->cell('20','10',++$counter, '1', '0', 'C');
                        $pdf->cell('100','10',$row["username"], '1', '1', 'C');
                    }

                    $pdf->Output();
                }
              
?>