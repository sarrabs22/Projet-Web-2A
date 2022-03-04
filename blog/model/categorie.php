<?PHP
	class categorie
    {
		private $id_categorie= null;
		private  $Typejeux = null;	
		function __construct( string $Typejeux)
        {
			$this->Typejeux=$Typejeux;
            
		}
		function getId_Categorie(): int{
			return $this->id_categorie;
		}
		function getTypejeux(): string{
			return $this->Typejeux;
		}
		
		function setTypejeux(string $Typejeux): void
        {
			$this->Typejeux=$Typejeux;
		}
    }
?>