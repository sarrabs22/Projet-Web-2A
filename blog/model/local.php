<?PHP
	class local
    {
		private ?int $id_local = null;
		private ?string $Nivcompte = null;
		private ?int $nbcompte= null;
		private ?int $nbcompteutilisé = null;
		private ?float $etat = null;
		private ?string $email_du_compte = null;
		private ?int $mdp = null;	
		private ?string $dateCreation = null;	
	
		function __construct( string $Nivcompte, int $nbcompte, int $nbcompteutilisé,float $etat, string $email_du_compte, int $mdp, string $dateCreation )
        {
			$this->nbcompteutilisé=$nbcompteutilisé;
			$this->nbcompte=$nbcompte;
			$this->etat=$etat;
			$this->Nivcompte=$Nivcompte;
			$this->email_du_compte=$email_du_compte;
			$this->mdp=$mdp;
			$this->dateCreation=$dateCreation;
		}
		function getIdLocal(): int{
			return $this->id_local;
		}
		function getmdp(): int{
			return $this->mdp;
		}
		function getNivcompte(): string{
			return $this->Nivcompte;
		}
		function getDate(): string{
			return $this->dateCreation;
		}
		function getemail_du_compte(): string{
			return $this->email_du_compte;
		}
		
		function getnbcompte(): int{
			return $this->nbcompte;
		}
		function getnbcompteutilisé(): int{
			return $this->nbcompteutilisé;
		}
		function getetat(): float{
			return $this->etat;
		}
		function setNivcompte(string $Nivcompte): void
        {
			$this->Nivcompte=$Nivcompte;
		}
		function setDate(string $dateCreation): void
        {
			$this->dateCreation=$dateCreation;
		}
		function setnbcompte(int $nbcompte): void
        {
			$this->nbcompte=$nbcompte;
		}
		function setmdp(int $mdp): void
        {
			$this->mdp=$mdp;
		}
		function setnbcompteutilisé(int $nbcompteutilisé): void
        {
			$this->nbcompteutilisé=$nbcompteutilisé;
		}
		function setetat(float $etat): void
        {
			$this->etat=$etat;
		}
		function setemail_du_compte(string $email_du_compte): void
        {
			$this->email_du_compte=$email_du_compte;
		}
		
    }
?>