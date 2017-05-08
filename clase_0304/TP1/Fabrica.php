<?PHP 
  class Empleado extends Persona
  {

        protected $_empleado[];
        protected $_razonSocial;
        

        public function __construct($razonSocial)
        {
            $_razonSocial  = $razonSocial;
     
	    }

         public function AgregarEmleado()
         {
           return true;
         }
          public function calcularSueldo()
         {
            return ;
         }
         public  function EliminarEmpleado()
         {}
            public  function EliminarEmpleadosRepetidos()
         {}
         public function  ToString()
           {} 
        $array  =array("wwwe","5","2") ;

        function  guardarFabrica()
        {
            
        }





   
    }