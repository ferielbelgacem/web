<?PHP
class Catalogue{
	private $id_article;
	private $type;

	function __construct($id_article,$type){
		$this->id_article=$id_article;
		$this->type=$type;
	}
	
	function getId_article(){
		return $this->id_article;
	}
	function getType(){
		return $this->type;
	}

	function setId_article($id_article){
		$this->id_article=$id_article;
	}
	function setNom($type){
		$this->type=$type;
	}
	
	
}

?>