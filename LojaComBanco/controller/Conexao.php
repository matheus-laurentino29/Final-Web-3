<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "lojabanco";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) 
or die ("Não foi possivel conectar-se ao servidor. Erro:" . mysqli_connect_error());

	class Conexao{
		private static $conn;
		
		public function __construct(){
			$this->abreConexao();
		}

		public static function conectar()
		{
			if(null == self::$conn)	{
				try
				{
					self::$conn =  new PDO('mysql:host=localhost;dbname=lojabanco', 'root', '');
				}
				catch(PDOException $exception)
				{
					die($exception->getMessage());
				}
			}
			return self::$conn;
		}

		public static function desconectar(){
			self::$conn = null;
		}
	}
?>