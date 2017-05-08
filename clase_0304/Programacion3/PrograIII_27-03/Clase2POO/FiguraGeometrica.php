<?PHP 
/**
 * 
 */
class abstract FiguraGeometrica
{
    protected  string $_color;
    protected  double $_perimetro;
    protected double $_superficie;

    function __construc()
    {
        # code...
    }

        protected  abstract  CalcularDatos($p,$s)
        {
            $_perimetro = $p;

            $_superficie  = $s;

        }

        public abstract Dibujar()
        {}

        public  SetColor($value)
        {
            $_color = $value;

        }



public  GetColor()
{
    return $_color;

}

public   ToString()
{}


}


?>