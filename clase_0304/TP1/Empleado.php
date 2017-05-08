<?PHP 
  class Empleado extends Persona
  {

        protected $_legajo;
        protected $_sueldo;
        

        public function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo)
        {
            parent::__construct($nombre,$apellido,$dni,$sexo);

              $_legajo = $legajo;
              $_sueldo = $sueldo;
	    	}

         public function getLegajo()
         {
           return $_legajo;
         }
          public function getSueldo()
         {
            return $_sueldo;
         }

          public function Hablar($idioma)
          {
                return  "";
          }
         public function ToString()
      {
        return  $_nombre.$_apellido.$_dni.$_sexo;

      } 

    }


?>