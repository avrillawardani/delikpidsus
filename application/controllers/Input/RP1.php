<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RP1 extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('M_RP1');
}
public function index()
{
$this->template->load('static','input/rp1');
}
public function input_rp1()
{
$sumber_penerima = $this->input->post('sumber_penerima');
$isi_ringkas = $this->input->post('isi_ringkas');
$identitas_terlapor = $this->input->post('identitas_terlapor');
$pilihan = $this->input->post('pilihan');
$ket = $this->input->post('ket');
if ($this->M_RP1->add_rp1($sumber_penerima,$isi_ringkas,$identitas_terlapor,$pilihan,$ket))
{
redirect('Read/RP1');
}
else {
redirect('Input/RP1');
}
}
public function export() {
$orders = $this->M_RP1->get_all();
$pdf = new \TCPDF('L', PDF_UNIT, 'F4', true, 'UTF-8', false);
$pdf->AddPage();
$pdf->SetFont('', 'B', 20);
/*$pdf->Cell(115, 0, "Register - ".$tanggal, 0, 1, 'L');*/
$pdf->SetAutoPageBreak(true, 0);
// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);
$pdf->SetFillColor(255, 255, 255);
// Add Header
$pdf->Ln(20);
$pdf->SetFont('', 'B', 12);
$pdf->MultiCell(10, 8, "No", 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'M');
$pdf->MultiCell(55, 8, "Nama Penerima", 1, 'C',  1, 0, '', '', true, 0, false, true, 40, 'M');
$pdf->MultiCell(55, 8, "Isi Ringkas", 1, 'C',  1, 0, '', '', true, 0, false, true, 40, 'M');
$pdf->MultiCell(55, 8, "Identitas Terlapor", 1, 'C',  1, 0, '', '', true, 0, false, true, 40, 'M');
$pdf->MultiCell(55, 8, "Diteruskan/Petunjuk Pimpinan", 1, 'C',  1, 0, '', '', true, 0, false, true, 40, 'M');
$pdf->MultiCell(55, 8, "Keterangan", 1,'C',  1, 0, '', '', true, 0, false, true, 40, 'M');
$pdf->Ln(4);
foreach($orders->result_array() as $k => $order) {
$this->addRow($pdf, $k+1, $order);
}
$pdf->Output('RP1 -.pdf');
}
private function addRow($pdf, $no, $order) {
$pdf->MultiCell(10, 8, $no,1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'M',true);
$pdf->MultiCell(55, 8, $order['sumber_penerima'],1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'M',true);
$pdf->MultiCell(55, 8, $order['isi_ringkas'],1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'M',true);
$pdf->MultiCell(55, 8, $order['identitas_terlapor'],1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'M',true);
$pdf->MultiCell(55, 8, $order['pilihan'], 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'M',true);
$pdf->MultiCell(55, 8, $order['ket'], 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'M',true);
$pdf->Ln(4);
}
}