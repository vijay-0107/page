<?php
	session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("company", $con);
	$query = "SELECT serialized FROM COMPANYREGISTER WHERE ID=".$_GET["id"];
	$result = mysql_query($query);
	$array = mysql_fetch_assoc($result);
	$post = unserialize($array["serialized"]);
	require('fpdf.php');
	
	$pdf=new FPDF();
	$pdf->AddPage();
	if( isset($post) ){
		about($pdf);
		if(isset($_SESSION["status"]) && $_SESSION["status"]=="true"){
			contact($pdf);
		}
		job_profile($pdf);
		salary($pdf);
		process($pdf);
		if(isset($_SESSION["status"]) && $_SESSION["status"]=="true"){
			requirements($pdf);
		}
		branch($pdf);
		$pdf->Output();
	}

	function about($pdf){
		global $post;
		$pdf->SetFont('Arial','',15);
		$pdf->Cell(0,5,"About Organisation",0,1);
		$pdf->Ln();
		$pdf->SetFont('Arial','',10);
		//name		
		$pdf->Cell(0,5,"Name of Organisation : ".$post["name"],0,1);
		//address

		$string = trim(preg_replace('/\s+/', ' ', $post["address"]));
		$pdf->MultiCell(0,5,"Postal address : ".$string,0,1);
		//website
		$pdf->Cell(100,5,"Website : ".$post["website"],0,0);
		//type
		$pdf->Cell(100,5,"Type of organisation : ".$post["type"],0,1);
		//sector		
		$pdf->Cell(0,5,"Industry Sector : ".$post["sector"],0,1);
		$pdf->Ln();
		hr($pdf);
		$pdf->Ln();
	}

	function contact($pdf){
		global $post;
		$pdf->SetFont('Arial','',15);
		$pdf->Cell(0,5,"Contact Details",0,1);
		$pdf->Ln();
		$pdf->SetFont('Arial','',10);
		$count = 0;
		foreach ($post["i_name"] as $name){
			if($name==""){
				continue;
			}
			if($count==0){
				$pdf->Cell(0,5,"Head HR : ".$name,0,1);	
			}else if($count==1){
				$pdf->Cell(0,5,"First Contact Person : ".$name,0,1);	
			}else if($count==2){
				$pdf->Cell(0,5,"Second Contact Person : ".$name,0,1);	
			}
			if(!empty($post["email"][$count])) {
				$pdf->Cell(100,5,"E-mail : ".$post["email"][$count],0,0);		
			}	
			if(!empty($post["mobile"][$count])) {
				$pdf->Cell(100,5,"Mobile : ".$post["mobile"][$count],0,0);		
			}	
			$pdf->Ln();
			if(!empty($post["landline"][$count])) {
				$pdf->Cell(100,5,"Landline : ".$post["landline"][$count],0,0);		
			}	
			if(!empty($post["fax"][$count])) {
				$pdf->Cell(100,5,"Fax : ".$post["fax"][$count],0,0);		
			}	
			$pdf->Ln();
			$pdf->Ln();
			$count++;
		}	
		hr($pdf);
		$pdf->Ln();
	}
	function job_profile($pdf){
		global $post;
		$pdf->SetFont('Arial','',15);
		$pdf->Cell(0,5,"Job Profile",0,1);
		$pdf->Ln();
		$pdf->SetFont('Arial','',10);
		if( !empty($post["b_designation"]) || !empty($post["b_place"]) || !empty($post["b_description"]) ){
			$pdf->Cell(0,5,"B. Tech. :",0,1);	
			if(!empty($post["b_designation"])) {
			$pdf->Cell(100,5,"Job designation :".$post["b_designation"],0,0);	
			}	
			if(!empty($post["b_place"])) {
				$pdf->Cell(100,5,"Place of posting :".$post["b_place"],0,1);
			}	
			if(!empty($post["b_description"])) {
				$pdf->MultiCell(0,5,"Job description :".$post["b_description"],0,1);	
			}
			$pdf->Ln();
		}
		if( !empty($post["m_designation"]) || !empty($post["m_place"]) || !empty($post["m_description"]) ){
			$pdf->Cell(0,5,"M. Tech. : ",0,1);
			if(!empty($post["m_designation"])) {
			$pdf->Cell(100,5,"Job designation :".$post["m_designation"],0,0);	
			}	
			if(!empty($post["m_place"])) {
				$pdf->Cell(100,5,"Place of posting :".$post["m_place"],0,1);
			}	
			if(!empty($post["m_description"])) {
				$pdf->MultiCell(0,5,"Job description :".$post["m_description"],0,1);	
			}	
			$pdf->Ln();
		}
		if( !empty($post["p_designation"]) || !empty($post["p_place"]) || !empty($post["p_description"]) ){
			$pdf->Cell(0,5,"Ph.D. : ",0,1);	
			if(!empty($post["p_designation"])) {
			$pdf->Cell(100,5,"Job designation :".$post["p_designation"],0,0);	
			}	
			if(!empty($post["p_place"])) {
				$pdf->Cell(100,5,"Place of posting :".$post["p_place"],0,1);
			}	
			if(!empty($post["p_description"])) {
				$pdf->MultiCell(0,5,"Job description :".$post["p_description"],0,1);	
			}
			$pdf->Ln();
		}
		hr($pdf);
	}

	function salary($pdf){
		global $post;
		$pdf->SetFont('Arial','',15);
		$pdf->Ln();
		$pdf->Cell(0,5,"Salary Details",0,1);
		$pdf->Ln();
		$pdf->SetFont('Arial','',10);
		if( !empty($post["b_ctc"]) || !empty($post["b_gross"]) || !empty($post["b_take_home"]) || !empty($post["b_bonus"]) || !empty($post["b_bond"]) ){
			$pdf->Cell(0,5,"B. Tech. :",0,1);	
			if(!empty($post["b_ctc"])) {
				$pdf->Cell(100,5,"Cost to Co.(CTC) :".$post["b_ctc"],0,0);	
			}	
			if(!empty($post["b_gross"])) {
				$pdf->Cell(100,5,"Gross :".$post["b_gross"],0,1);
			}	
			if(!empty($post["b_take_home"])) {
				$pdf->MultiCell(0,5,"Take home :".$post["b_take_home"],0,1);	
			}
			if(!empty($post["b_bonus"])) {
				$pdf->MultiCell(0,5,"Bonus/Perks/Incentives :".$post["b_bonus"],0,1);	
			}
			if(!empty($post["b_bond"])) {
				$pdf->MultiCell(0,5,"Bond or Contract(Specific details) :".$post["b_bond"],0,1);	
			}
			$pdf->Ln();
		}
		if( !empty($post["m_ctc"]) || !empty($post["m_gross"]) || !empty($post["m_take_home"]) || !empty($post["m_bonus"])
			|| !empty($post["m_bond"]) ){
			$pdf->Cell(0,5,"M. Tech. : ",0,1);
			if(!empty($post["m_ctc"])) {
			$pdf->Cell(100,5,"Cost to Co.(CTC) :".$post["m_ctc"],0,0);	
			}	
			if(!empty($post["m_gross"])) {
				$pdf->Cell(100,5,"Gross :".$post["m_gross"],0,1);
			}	
			if(!empty($post["m_take_home"])) {
				$pdf->MultiCell(0,5,"Take home :".$post["m_take_home"],0,1);	
			}
			if(!empty($post["m_bonus"])) {
				$pdf->MultiCell(0,5,"Bonus/Perks/Incentives :".$post["m_bonus"],0,1);	
			}
			if(!empty($post["m_bond"])) {
				$pdf->MultiCell(0,5,"Bond or Contract(Specific details) :".$post["m_bond"],0,1);	
			}	
			$pdf->Ln();
		}
		if( !empty($post["p_ctc"]) || !empty($post["p_gross"]) || !empty($post["p_take_home"]) || !empty($post["p_bonus"])
			|| !empty($post["p_bond"]) ){
			$pdf->Cell(0,5,"Ph.D. : ",0,1);	
			if(!empty($post["p_ctc"])) {
			$pdf->Cell(100,5,"Cost to Co.(CTC) :".$post["p_ctc"],0,0);	
			}	
			if(!empty($post["p_gross"])) {
				$pdf->Cell(100,5,"Gross :".$post["p_gross"],0,1);
			}	
			if(!empty($post["p_take_home"])) {
				$pdf->MultiCell(0,5,"Take home :".$post["p_take_home"],0,1);	
			}
			if(!empty($post["p_bonus"])) {
				$pdf->MultiCell(0,5,"Bonus/Perks/Incentives :".$post["p_bonus"],0,1);	
			}
			if(!empty($post["p_bond"])) {
				$pdf->MultiCell(0,5,"Bond or Contract(Specific details) :".$post["p_bond"],0,1);	
			}
			$pdf->Ln();
		}
		hr($pdf);
	}

	function process($pdf){
		global $post;
		$pdf->SetFont('Arial','',15);
		$pdf->Ln();
		$pdf->Cell(0,5,"Selection Process",0,1);
		$pdf->Ln();
		$pdf->SetFont('Arial','',10);
		$string = "";
		if(isset($post["preference"])){
			foreach ($post["preference"] as $value) {
				$string = $string." ".$value;
			}
			$pdf->MultiCell(0,5,"Preference : ".$string,0,1);
		}
		$string = "";
		if(isset($post["mode"])){
			foreach ($post["mode"] as $value) {
				if(empty($string)){
					$string = $value;
				}else{
					$string = $string.", ".$value;
				}
			}
			$pdf->MultiCell(0,5,"Mode of selection : ".$string,0,1);
		}
		if(!empty($post["rounds"])) {
			$pdf->Cell(0,5,"Number of rounds : ".$post["rounds"],0,1);	
		}
		if(!empty($post["cpi"])) {
			$pdf->Cell(0,5,"Eligibility criteria (CPI cutoff on a scale of 0-10) : ".$post["cpi"],0,1);	
		}
		if(!empty($post["period"])) {
			$pdf->Cell(0,5,"Preferred period of visit for recruitment : ".$post["period"],0,1);	
		}
		if(!empty($post["offers"])) {
			$pdf->Cell(0,5,"Number of offers : ".$post["offers"],0,1);	
		}
		$pdf->Ln();
		hr($pdf);
	}

	function requirements($pdf){
		global $post;
		$pdf->SetFont('Arial','',15);
		$pdf->Ln();
		$pdf->Cell(0,5,"Logistics Requirements (for On-Campus hiring)",0,1);
		$pdf->Ln();
		$pdf->SetFont('Arial','',10);

		if(!empty($post["members"])) {
			$pdf->Cell(0,5,"Number of members visiting IIT Patna campus : ".$post["members"],0,1);	
		}
		if(!empty($post["rooms"])) {
			$pdf->Cell(0,5,"No. of rooms required for selection process : ".$post["rooms"],0,1);	
		}
		if(!empty($post["requirements"])) {
			$pdf->Cell(0,5,"Other requirements : : ".$post["requirements"],0,1);	
		}
		$pdf->Ln();
		hr($pdf);
	}

	function branch($pdf){
		global $post;
		$pdf->SetFont('Arial','',15);
		$pdf->Ln();
		$pdf->Cell(0,5,"Programs from which to select",0,1);
		$pdf->Ln();
		$pdf->SetFont('Arial','',10);
		$string = "";
		if(isset($post["b_branch"])){
			foreach ($post["b_branch"] as $value) {
				if(empty($string)){
					$string = $value;
				}else{
					$string = $string.", ".$value;
				}
			}
			$pdf->MultiCell(0,5,"B. Tech. Programs : ".$string,0,1);
		}
		$string = "";
		if(isset($post["m_branch"])){
			foreach ($post["m_branch"] as $value) {
				if(empty($string)){
					$string = $value;
				}else{
					$string = $string.", ".$value;
				}
			}
			$pdf->MultiCell(0,5,"M. Tech. Programs : ".$string,0,1);
		}
		$string = "";
		if(isset($post["p_branch"])){
			foreach ($post["p_branch"] as $value) {
				if(empty($string)){
					$string = $value;
				}else{
					$string = $string.", ".$value;
				}
			}
			$pdf->MultiCell(0,5,"Ph.D. Programs : ".$string,0,1);
		}
		$pdf->Ln();
		hr($pdf);
	}	
	// functions
	function hr($pdf) {
		$x = $pdf->GetX();
		$y = $pdf->GetY();
		$pdf->Line($x, $y, 210-$x, $y);	
	}
?>
