<?php

/**
 * Cette class permet de lier le php à la base MySQL
 *
 * @author  Valentin Leclair <lym.valentin@gmail.com>
 *
 */
class Database
{

	protected $connection;
	protected $query;
	public $query_count = 0;
	
	/**
	 * __construct Connexion à la BD
	 *
	 * @param  string $dbhost localisation de la BD
	 * @param  string $dbuser l'utilisateur
	 * @param  string $dbpass le mot de passe
	 * @param  string $dbname le nom de la BD
	 * @param  string $charset l'encodage de la BD
	 */
	public function __construct(string $dbhost = 'localhost', string $dbuser = 'root', string $dbpass = 'Bk3dGftO)QiQIPj5', string $dbname = 'playtime', string $charset = 'utf8')
	{
		if ($this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname)) {
			echo "Connexion à MySQL réussi.\n";
		} else {
			echo "Erreur de connexion";
		}
		$this->connection->set_charset($charset);
	}
}
