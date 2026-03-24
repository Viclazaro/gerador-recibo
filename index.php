<?php

require_once('fpdf.php');

//GERAR PÁGINAS
$pdf = new FPDF();
$pdf->AddPage();

// ESTRUTURA CÓDIGO
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0, 10, utf8_decode('RECIBO DE PAGAMENTO'), 0, 1, 'C');
$pdf->Ln(10);

// LINHA 1: NOME
$pdf->SetFont('Arial','',12);
$pdf->cell(0, 20, utf8_decode('Pelo presente, eu, '));

$pdf->SetX(50);
$pdf->Cell(100, 12, '', 'B', );
$pdf->Ln(10);
//LINHA 2: RG
$pdf->SetFont('Arial','',12);
$pdf->cell(0, 20, utf8_decode(' , carteira de identidade (RG), Nº '));

// $pdf->SetX(10);
// $pdf->Cell(80, 22, '', 'B');
// $pdf->cell(0, 40, utf8_decode(' , expedida por '));

// $pdf->SetX(121);
// $pdf->Cell(50, 22, '', 'B');

// $pdf->cell(0, 40, utf8_decode(' , CPF Nº'));

// $pdf->SetX(10);
// $pdf->Cell(70, 32.5, '', 'B');

// $pdf->cell(0, 61, utf8_decode(' , declaro ter recebido de '));

// $pdf->SetX(130);
// $pdf->Cell(50, 32.2, '', 'B');
// $pdf->cell(0, 61, utf8_decode(' , carteira de'));

//SAÍDA
$pdf->Output();