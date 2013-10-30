<?php
	$cat = array (
				"Popescu Alin bla"=>array("mate"=>10, "fizica"=>8, "info"=>9),
				"Mitrea Alina bla2"=>array("mate"=>7, "fizica"=>10, "info"=>9)				
				);
	$caietTeme = array (
				"Popescu Alin bla"=>array("mate"=>array(), "fizica"=>array(), "info"=>array()),
				"Mitrea Alina bla2"=>array("mate"=>array(), "fizica"=>array(), "info"=>array())				
				);
	$teme = array("mate"=>array(), "fizica"=>array(), "info"=>array());
 	interface User {
 		//function getRol();
 		//function setRol($role);
 		function getNumeComplet();
 		function setNume($nume, $prenume, $email);
 		
 	}
 	interface Elev {
 		function getNote($materie);
 		function getTeme($materie);
 		function sendTema($materie, $tema);
 	}
 	interface Profesor {
 		function setNota($materie, $student, $nota);
 		function listareTeme($materie);
 		function setTeme($materie, $tema);
 	}
 	interface Secretar {
 		function getNote($materie, $student=NULL);
 		function getMedia();
 	}
 	
 	class User implements User {
 		var $nume;
 		var $prenume;
 		var $email;
 		function getNumeComplet() {
 			echo this->nume . " " . this->prenume . " " . this->email;
 		}
 		function setNume($nume, $prenume, $email) {
 			this->nume = $nume;
 			this->prenume = $prenume;
 			this->email = $email;
 		}
 	}
 	class Catalog {
 		
 	} 	
 	class Teme {
 		function listare($materie) {
 			use $teme;
 			for ($i=0;$i<count($teme[$materie]);$i++) {
 				echo $teme[$materie][$i];
 			}
 		}
 	}
 	class Elev extends User implements Elev {	
 		function getNote($materie) {
 			global $cat;
 			$numeComplet = this->nume . " " . this->prenume . " " . this->email;
 			echo $cat[$numeComplet][$materie];
 		}
 		function getTeme($materie) {
 			Teme::listare($materie);
 		}
 		function sendTema($materie, $tema) {
 			$numeComplet = this->nume . " " . this->prenume . " " . this->email;
 			$nr=count($caietTeme[$numeComplet][$materie]);
 			$caietTeme[$numeComplet][$materie][$nr] = $tema;
 		}
 	}
	class Profesor extends User implements Profesor {
		function setNota($materie, $student, $nota) {
			$cat[$tudent][$materie] = $nota;
		}
		function listareTeme($materie) {
			Teme::listare($materie);
		}
		function 
	}	
?>
