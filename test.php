<?php

INCLUDE './Matrix.php';

class Test extends Matrix{

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;

    $mid = ($this->baris + 1) / 2;
		
		for($i = 0; $i < $mid; $i++){
			for($j = 0; $j < $mid; $j++){
        // Diagonal sampe batas segitiga kecil
				if($i == $j && $i + $j > $mid/2){
					$this->matrix[$i][$j] = "*";
          
          // Mirror kanan atas
          $this->matrix[$i][$this->kolom - $j - 1] = "*";

          // Mirror kiri bawah
          $this->matrix[$this->baris - $i - 1][$j] = "*";

          // Mirror kanan bawah
          $this->matrix[$this->baris - $i - 1][$this->kolom - $j - 1] = "*";
				}
        // Kanan sampe batas segitiga kecil
        if ($j == $mid - 1) {
					$this->matrix[$i][$j] = "*";

          // Mirror kiri bawah
          $this->matrix[$this->baris - $i][$j] = "*";
        }
        // Bawah sampe batas segitiga kecil
        if ($i == $mid - 1) {
					$this->matrix[$i][$j] = "*";
          
          // Mirror kanan atas
          $this->matrix[$i][$this->kolom - $j] = "*";
        }
        // Atas sampe batas segitiga kecil
        if ($i == 0 && $j >= $mid/2) {
					$this->matrix[$i][$j] = "*";
          
          // Mirror kanan atas
          $this->matrix[$i][$this->kolom - $j] = "*";

          // Mirror kiri bawah
          $this->matrix[$this->baris - $i - 1][$j] = "*";

          // Mirror kanan bawah
          $this->matrix[$this->baris - $i - 1][$this->kolom - $j] = "*";
        }
        // Kiri sampe batas segitiga kecil
        if ($j == 0 && $i >= $mid/2) {
					$this->matrix[$i][$j] = "*";
          
          // Mirror kanan atas
          $this->matrix[$i][$this->kolom - $j - 1] = "*";

          // Mirror kiri bawah
          $this->matrix[$this->baris - $i - 1][$j] = "*";

          // Mirror kanan bawah
          $this->matrix[$this->baris - $i - 1][$this->kolom - $j - 1] = "*";
        }
        // Segitiga bawah kecil
        if ($i < $mid/2 && $j < $mid/2 && $i + $j >= $mid / 2 - 1) {
					$this->matrix[$i][$j] = "*";
          
          // Mirror kanan atas
          $this->matrix[$i][$this->kolom - $j - 1] = "*";

          // Mirror kiri bawah
          $this->matrix[$this->baris - $i - 1][$j] = "*";

          // Mirror kanan bawah
          $this->matrix[$this->baris - $i - 1][$this->kolom - $j - 1] = "*";
        }
			}
		}
	}
}

$jawab = new Test();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();