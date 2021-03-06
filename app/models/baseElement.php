<?php

namespace app\models;
require_once 'app/models/Printable.php';



class baseElement implements Printable{
	private $title;
	public  $description;
	public  $visible = true;
	public  $months;

   public function __construct($title , $description){
            $this->setTitle($title);
            $this->description = $description;

   }

	public function getTitle(){
       return $this->title;
	}

	public function setTitle($title){
		if($title == ""){
            $this->title = "N/A";
		} else {
			$this->title=$title;
		}
	}

	public function getDurationAsString(){

		$years = floor( $this->months / 12);
		$extraMonths = $this->months % 12;

		if($years==0){
			return "$extraMonths  months";
		}else{
		return " $years years $extraMonths  months";
       }
   }

    public function getDescription(){

       	  return $this->description;

       }



}