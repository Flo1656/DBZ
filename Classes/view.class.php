<?php 

/* DBZ VIEW */

class View {
  
    public function __construct () { }
    
    // menu list of table link
    public static function MenuTable ($db_name, $array_table) {
      $menu = "<div>DB : ".$db_name;
      
      foreach ($array_table as $K => $TABLE) {
        $menu .= " <a href='?T=".$TABLE[0]."'>[ ".strtoupper($TABLE[0])." ]</a>";
      }
      
      $menu .= "</div>";
      
      return $menu;
    }    
    
    // html final rendering
    public static function HTML ($title, $contener) {
      echo "<html>
      <head>
        <title>".$title."</title>
        <link rel='stylesheet' type='text/css' href='Fichiers/css/style.css' />
      </head>
      <body>
        <img src='Fichiers/images/logo.jpg' /><br /><hr />
        </hr>".$contener."
        <title> RECHERCHE ET AJOUTER </title>
        <div id=Recherche>
          <a> Trouver une base de données </a>
          <a> Rechercher des occurences </a>
          <a> Ajouter une occurences </a>
          <a> Ajouter une base de données </a>
        </div>
        <div id=Liste>
          <a> Liste de la base de données </a>
            <a> Fruity Land </a>
            <a> Moumout </a>
            <a> Logement </a>
            <a> Hopital </a>
         </div> 
		 <div id=Inscription>
			<title> Inscrivez-vous ! </title>
				<a> Nom </a>
				<a> Prénom </a>
				<a> Adresse </a>
				<a> Téléphone </a>
		</div>
      </body>
      </html>";
    }
    
}

?>
