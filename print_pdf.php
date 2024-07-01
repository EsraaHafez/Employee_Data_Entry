<?php
	function generateRow(){
		$contents = '';
		include_once('conn.php');
		$sql = "SELECT * FROM users_emp";

		//use for MySQLi OOP
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['ID']."</td>
				<td>".$row['first_name']."</td>
				<td>".$row['last_name']."</td>
        <td>".$row['addr']."</td>
				<td>".$row['age']."</td>
        <td>".$row['Gender']."</td>
			</tr>
			";
		}
		

		return $contents;
	}
  
  
    require_once('TCPDF/tcpdf.php');
   
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
     $lg = Array();
    $lg['a_meta_charset'] = 'UTF-8';
    $lg['a_meta_dir'] = 'ltr';
    $lg['a_meta_language'] = 'ar';
   $pdf->setLanguageArray($lg);
    $pdf->setRTL(true);
    $pdf->SetFont('aealarabiya', '', 11);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetTitle("Employees Information");
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont('aealarabiya');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetMargins(PDF_MARGIN_LEFT, '11', PDF_MARGIN_RIGHT);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAutoPageBreak(TRUE, 11);

    $pdf->AddPage();
    $content = '';
    $content .= '
      	<h2 align="center">Employees Information</h2>
      	
      	<table border="1" cellspacing="0" cellpadding="3">
           <tr>
        <th width="5%">ID</th>
				<th width="20%">First_Name</th>
				<th width="20%">Last_Name</th>
				<th width="20%">Address</th>
        <th width="20%">Age</th>
        <th width="20%">Gender</th>
              
           </tr>
      ';
			 
    $content .= generateRow();
    $content .= '</table>';
    $pdf->writeHTML($content);
    $pdf->Output('emps.pdf', 'I');


?>
