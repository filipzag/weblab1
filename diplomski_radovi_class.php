<?php


class DiplomskiRad implements iRadovi {
	
	var $naziv_rada,$tekst_rada,$link_rada,$oib_tvrtke;
	
	
	function __construct($data) {
	$this->naziv_rada = $data['naziv_rada']  ;
	$this->tekst_rada = $data['tekst_rada'];
	$this->link_rada = $data['link_rada'];
	$this->oib_tvrtke = $data['oib_tvrtke'];


}

function create($data){
	
	self::__construct($data);
}
	function read(){
	try{	
			$pdo = new PDO("mysql:host=localhost;dbname=radovi", 'root', '');
		$sql_query = "SELECT * FROM `diplomski_radovi` WHERE 1";

		foreach($pdo->query($sql_query) as $row){
			
			echo $row['ID_rada']; echo "</br>";
		echo $row['naziv_rada']; echo "</br>";
		echo $row['tekst_rada']; echo "</br>";
		echo $row['link_rada']; echo "</br>";
		echo $row['oib_tvrtke']; echo "</br>";
		echo "--------------------------------------------------"
;		echo "</br>";
			
		}
		
		
		//$q->setFetchMode(PDO::FETCH_ASSOC);
	}catch (PDOException $e){
		
		 die("Could not connect to the database $dbname :" . $e->getMessage());
		
		
	}
/*	
	while ($row = $q->fetch()){
		
		echo $row['ID_rada']; echo "</br>";
		echo $row['naziv_rada']; echo "</br>";
		echo $row['tekst_rada']; echo "</br>";
		echo $row['link_rada']; echo "</br>";
		echo $row['oib_tvrtke']; echo "</br>";
		echo "--------------------------------------------------"
;		
	}*/
		
		
	
	}
	
	function save(){
	
				try{	
				$pdo = new PDO("mysql:host=localhost;dbname=radovi", 'root', '');
				$query = "INSERT INTO diplomski_radovi(`ID_rada`,`naziv_rada`,`tekst_rada`,`link_rada`,`oib_tvrtke`)
				VALUES('','$this->naziv_rada','$this->tekst_rada','$this->link_rada','$this->oib_tvrtke')";
				//echo $this->naziv_rada;

				echo $query;

				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//$stmt = $pdo->prepare($query);
				//$stmt->execute(array(':naziv_rada' => $this->naziv_rada,':tekst_rada'=>$this->tekst_rada,':link_rada'=>$this->link_rada,':oib_tvrtke'=>$this->oib_tvrtke));


				$pdo->exec($query);

				echo "New record created successfully";
				}
				catch(PDOException $e)
				{
				echo  $e->getMessage();
				}

				$pdo= null;

				}

	
	}
	


	function set_naziv_rada ($naziv){
		$this->naziv=$naziv;
	}
	
	function set_tekst_rada ($tekst){
		$this->tekst_rada=$tekst;
	}
	function set_link_rada ($link){
		$this->link_rada=$link;
	}
	
	function set_oib_tvrtke ($oib){
		$this->oib_tvrtke=$oib;
	}
	
	function get_naziv_rada(){
		
		return $this->naziv_rada;
	}
	
	function get_tekst_rada(){
		
		return $this->tekst_rada;
	}
	
	function get_link_rada(){
		
		return $this->link_rada;	
	}
	function get_oib_tvrtke(){
		
		return $this->oib_tvrtke;
	}
	
	
	
	



interface iRadovi {
	
	public function create($data);
	public function read();
	public function save();
	
	
}
?>