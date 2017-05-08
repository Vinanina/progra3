<?PHP 
/**p=2*l1  + 2*l2
 * 
 */
 include "FiguraGeometrica.php";
class Rectangulo extends FiguraGeometrica
{
    private double  $_ladoUno;
    private double  $_ladoDos;


    function __construct($l1,$l2)
    {
        parent::__construct();
        parent::CalcularDatos();
    }

    protected  CalcularDatos()
    {


    }
    public Dibujar()
   {}

    public  ToString()
        {}
}


?>