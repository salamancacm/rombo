<?php
//Test Sofka
//Carlos Salamanca
//Para probar ingrese a localhost/prueba/test.php desde el navegador (Recuerde haber iniciado XAMPP)

/*
Resumen o Explicación: 

Dividi el rombo en 2 partes, el triangulo de arriba y el triangulo de abajo.
Se hace un primer ciclo para saber la altura o lineas a imprimir, se agrega un segundo ciclo para 
definir espacios para que pueda darnos la forma del triangulo (si no todo se alinearía  a la izquierda),
y un tercer ciclo para mostrar los numeros.

Para cambiar el numero que recibe la funcion solo cambielo en la linea 60

*/

function rombo($altura){
    //PARTE DE ARRIBA
    echo"<pre>";
    for($i=0;$i<=$altura;$i++)
       {
        //Espacios en blanco
         for($j=0;$j<=$altura-$i;$j++)
        printf(" ");
         
         for($j=0;$j<=$i;$j++)
           printf($j);
     
         
           for($j=$i-1;$j>=0;$j--)
          printf($j);
        //Salto de linea
         printf("<br>");
       }
    
    /*
    PARTE DE ABAJO
    Se toma como inicio $altura-1 porque ya la parte de arriba construye la parte
    intermedia  del rombo (entonces se necesita 1 menos)
    */
        for($i=$altura-1;$i>=0;$i--) {
            //Espacios en blanco
            for($j=0;$j<=$altura-$i;$j++)
                printf(" ");
    
            for($j=0;$j<=$i;$j++)
                printf($j);
    
            for($j=$i-1;$j>=0;$j--)
                printf($j);
            //Salto de linea
            printf("<br>");
        }

    echo"</pre>";

}
//Ejecuto la funcion
rombo(5);

?>