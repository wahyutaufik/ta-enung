<?php  
$html =
  '';
 
$dompdf = new DOMPDF();
$dompdf->set_option('enable_remote', true);
$dompdf->set_paper('legal', 'landscape');
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("base_operation_report.pdf", array('Attachment' => false));
exit;
?>