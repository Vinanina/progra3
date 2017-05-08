<?php

    include_once("Empleado.php");

    class fabrica {

        private $empleados = array() ; //new empleado; 
        private $rutaArchivo ;
        //public $array = array();

        //Declaracion del constructor.
        public function __construct(){   
            //$this->$empleados = array();      
            $this->rutaArchivo = "fabrica.txt"   ;
            echo "entro al constructor Fabrica<br>";
        }

        public function agregarEmpleado($objpersona){
            $this->empleados[] = $objpersona;                      
            //array_push($this->empleados, $this->emple);     
            //$this->empleados = array_unique($this->empleados); 
            var_dump($this->empleados) . "<br>";
        }

        private function EliminarEmpleadosRepetidos($objpersona){
            $this->empleados[] = array_unique($this->empleados);
        }

        public function guardarFabrica(){

            //try{

                $handle = fopen("fabrica.txt","w"); //CON W NO FUNCIONA ME ARROJA ERROR. CON APPEND SI EXISTE LO ABRE.

                //fwrite($handle,$this->empleados); var_dump
                //No se puede guardar el array directamente sino que hay que transformarlo 
                //a algo de renglon a renglon.
                //se utiliza json
                //Se puede ir recorriendolo e ir insertando registro por registro.
                //fwrite($handle,var_dump($this->empleados)); // CON VAR_DUMP NO FUNCIONA ME LO TERMINA MOSTRANDO POR PANTALLA.
                for($i=0; $i<count($this->empleados) ;$i++){
                    fwrite($handle, $this->empleados[$i]->toString() );
                }
                
                fclose($handle);
                echo "finalizo la escritura al archivo <br>";

            /*
            }(Exception $e){
                echo 'Message: ' .$e->getMessage();
            }*/

           

        }

        //Se debe de recorrer el archivo e ir guardando registro por registro en el array de empleados.
        //por ultimo devolverlo para su impresion por pantalla.
        //Va a ser llamado en el contructor de la fabrica.
        public function obtenerEmpleArchivo(){
            $nombre_fichero = "fabrica.txt";
            $gestor = fopen($nombre_fichero, "r");
            $contenido = fread($gestor, filesize($nombre_fichero));
            fclose($gestor);
            $e = explode("-",$contenido);
            $empleado = new empleado("Juan", "garcia", 23456789, "Masculino");


        }
    

    }

?>