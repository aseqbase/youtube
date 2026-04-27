<?php namespace MiMFa\Module\Youtube;
module("MediaFrame");
class Media extends \MiMFa\Module\MediaFrame{
	public function __construct($source=null){
		parent::__construct($source,"#bb0000", asset("/asset/technology/YouTube.png"),"YouTube");
	}
}
?>