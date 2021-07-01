<?php

class Matrix{
	public $baris = 0;
	public $kolom = 0;
	public $matrix = array();
	
	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				$this->matrix[$i][$j] = " ";
			}
		}
	}
	
	public function showMatrix(){
		echo "<table border=1 style='border-collapse: collapse;'>";
		for($i = 0; $i < $this->baris; $i++){
			echo "<tr>";
			for($j = 0; $j < $this->kolom; $j++){
				echo "<td style='padding: 10px'>";
				if(@$this->matrix[$i][$j] != null){
					echo @$this->matrix[$i][$j];
				} else {
					echo " ";
				}
				echo "</td>";	
			} 
			echo "</tr>";
		}	
		echo "</table>";
	}
	
	public function form1(){
		echo "<form method='POST'>";
		echo "input : <input type='number' value='".@$_POST['input']."' name='input' />";
		echo "<input type='submit' value='submit' />";
		echo "</form>";
	}
}