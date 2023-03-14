

<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->SetleftMargin(15);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,10,'MERCANCIA EN SISTEMA',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
    $this->cell(40, 10, 'Nombre', 1, 0,'C',0 );
    $this->cell(40, 10, 'Modelo', 1, 0,'C',0 );
    $this->cell(40, 10, 'Marca', 1, 0,'C',0 );
    $this->cell(60, 10, 'Descripcion', 1, 0,'C',0 );    
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    
}
}

require '../conexion.php';
$consulta = "SELECT * FROM  estudiantes"; 
$resu = $mysqli->query($consulta);
    
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->SetleftMargin(15);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);

while($row = $resu->fetch_assoc()){
    $pdf->cell(40, 10, $row['nombre'], 1, 0,'L',0 );
    $pdf->cell(40, 10, $row['modelo'], 1, 0,'L',0 );
    $pdf->cell(40, 10, $row['marca'], 1, 0,'L',0 );
    $pdf->cell(60, 10, $row['descripcion'], 1, 0,'L',0 );
    $pdf->Ln(10);
}


$pdf->Output();
?>

