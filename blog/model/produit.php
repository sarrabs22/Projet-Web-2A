<?PHP
	class produit
    {
		private  $id = null;
		private  $Nomjeux = null;
		
		private  $description = null;
		private  $prix = null;
		private    $categorie = null;	
		private  $img = null;	
		function __construct( string $Nomjeux, float $nbcompte, int $prix,string $description,int $categorie, string $img)
        {
			$this->Nomjeux=$Nomjeux;
			$this->nbcompte=$nbcompte;
			$this->description=$description;
			$this->prix=$prix;
			$this->categorie=$categorie;
			$this->img=$img;
		}
		function getId(): int{
			return $this->id;
		}
		function getImg(): string{
			return $this->img;
		}
		function getNomjeux(): string{
			return $this->Nomjeux;
		}
		function getnbcompte(): float{
			return $this->nbcompte;
		}
		function getDescription(): string{
			return $this->description;
		}
		function getprix(): int{
			return $this->prix;
		}
		function getCategorie(): int{
			return $this->categorie;
		}
		function setNomjeux(string $Nomjeux): void
        {
			$this->Nomjeux=$Nomjeux;
		}
		function setImg(string $img): void
        {
			$this->img=$img;
		}
		function setnbcompte(float $nbcompte): void
        {
			$this->nbcompte=$nbcompte;
		}
		function setDescription(string $description): void
        {
			$this->description=$description;
		}
		function setprix(int $prix): void
        {
			$this->prix=$prix;
		}
		function setCategorie(int $categorie): void
        {
			$this->categorie=$categorie;
		}
		
    }
?>