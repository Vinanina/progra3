<?PHP 
  abstract  class Persona{

        private $_apellido;
        private $_dni;
        private $_nombre;    
        private $_sexo;

        public function __construct($nombre,$apellido,$dni,$sexo)
        {
          $_apellido = $apellido;
          $_dni = $dni;
          $_nommbre = $nombre;
          $_sexo =  $sexo;
	      }

      public function  getApellido()
      {
        return $_apellido;
       }
      public function  getDni()
      {
          return $_dni;

      }
      public function  getNombre()
      {
        return $_nombre;

      }      
      public function  getSexo()
      {
        return $_sexo;
      }

      public function  Hablar($idioma)
      {
        return  " ".(string)$idioma;
      }
      public function ToString()
      {
        return  $_nombre."-".$_apellido."-".(string)$_dni."-".(string)$_sexo;

      } 



    }


?>