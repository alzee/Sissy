<?php
/**
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

class chat{
	private $late;
	private $shit;
	private $crap;
	function __construct(){
		$this->late = array("gonna late");
		$this->shit= array(
			"holy shit",
			"shit"
		);
		$this->crap= array(
			"bullshit",
			"dogshit",
			"crap"
		);
	}

	function __destruct(){
	}

	function say($word){
		if(is_array($this->$word)){
			shuffle($this->$word);
			echo $this->$word[0];
		}
		else echo $this->$word;
	}
}
