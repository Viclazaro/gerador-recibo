<?php
/**
 * --------------------------------------------------
 * Gerador de Recibo com FPDF
 * --------------------------------------------------
 * Descrição:
 * Este script gera um recibo em PDF utilizando a biblioteca FPDF.
 * 
 * Funcionalidades:
 * - Cria um recibo de pagamento
 * - Insere campos como nome e RG
 * - Formata o layout com linhas para preenchimento
 * 
 * Autor: Victória
 * Data: 2026
 * --------------------------------------------------
 */
require_once('fpdf.php');

$pdf = new FPDF();
// Define margens: esquerda, topo, direita
$pdf->SetMargins(20, 20, 20);

// Define quebra automática respeitando margem inferior
$pdf->SetAutoPageBreak(true, 20);
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0, 10, utf8_decode('RECIBO DE PAGAMENTO'), 0, 1, 'C');
$pdf->Ln(10);

// pega posição atual
$x = $pdf->GetX();
$y = $pdf->GetY();

$larguraRestante = 210 - 20 - $x; // página - margem direita - posição atual

$pdf->SetXY($x, $y);

$pdf->SetFont('Arial','',12);
$pdf->MultiCell($larguraRestante, 6, utf8_decode('Pelo presente, eu, _________________________________________, portador do RG, nº _____________________, CPF nº _______________________________. Declaro ter recebido de _____________________________________, CPF/CNPJ nº _____________________________, a importância de R$ _____________________ (valor por extenso), referente a __________________________________.'), 0, 0);

$pdf->MultiCell($larguraRestante, 50,'_________________, ____/____/_______', 0, 'C' );

$pdf->MultiCell($larguraRestante, 7,'______________________________', 0, 'C' );

$pdf->SetFont('Arial','B',12);
$pdf->MultiCell($larguraRestante, 7,'Assinatura', 0, 'C' );

$pdf->Output();
