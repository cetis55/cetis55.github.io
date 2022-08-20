<?php
    session_start();
    if(isset($_SESSION['nombredelusuario'])){
        $varusu = $_SESSION['nombredelusuario'];
    }
    else{
        header('location: teensedefecto');
    }
?>
<html>
    <head>
        <title>Te esnseño programación</title>
        <link rel="icon" href="Img/xanda.png" type="img/png">
        <link rel="stylesheet" href="Css3/mainense.css">
        <link rel="stylesheet" href="Css3/bloquesense.css">
        <link rel="stylesheet" href="Css3/textosense.css">

    </head>

    <body class="cuerpo_programacion">
        <!-- particles.js container -->
        <div id="particles-js"></div>

        <!-- scripts -->
        <script src="particles.js"></script>
        <script src="javascript/app.js"></script>

    </body>

</html>

<?php
    echo"<div class='barra_superior'>
    <img class='opcion_superiror' src='Img/programacion.png'>
        <form method='POST'>
            <table>
                <input class='buscador' type='text' name='programa_elaborar' placeholder='Programa a elaborar'>
                <input class='buscador_boton' type='submit' name='programa_elaborar_boton' value'Programar'>
            </table>
        </form>
        <form method='POST'>
        <table>
            <input class='cuenta_boton' type='submit' name='cuenta' value='| $varusu |'>
        </table>
    </form>
    </div>";
    echo'<div class="barra_opciones">
        <p class="datos_opciones" style="top:50%;">Lenguaje:</p>
        <p class="datos_opciones" style="top:60%;">Lenguaje:</p>
        <p class="datos_opciones" style="top:70%;">Lenguaje:</p>
    </div>';
    echo'<div><img class="fondo_opcion" src="Img/programacion.png"></div>';

    if(isset($_POST['programa_elaborar'])){
        $loquebusca=$_POST['programa_elaborar'];
        if($loquebusca == 'Calculadora en python' || $loquebusca == 'CALCULADORA EN PYTHON' || $loquebusca == 'programa una calculadora en python' || $loquebusca == 'PROGRAMA UNA CALCULADORA EN PYTHON' || $loquebusca == 'calculadora en python'){
        echo'<div class="barra_opciones">
        <img class="imagen_lenguaje" src="Img/python.png">
        <p class="datos_opciones" style="top:50%;">Lenguaje: Python</p>
        <p class="datos_opciones" style="top:60%;">Programa: Calculadora</p>
        <p class="datos_opciones" style="top:70%;">Archivo: </p>
        </div>';

        echo'<div class="campo_codigo">
        <div class="decorado_codigo"><p class="lennguaje_seleccionado">/Python</p></div>
        <textarea class="codigo">
    def Menu():
    Menu
    1) Suma
    2) Resta
    3) Multiplicacion
    4) Division
    5) Salir
    def Calculadora():
        Menu()
        opc = int(input("Selecione Opcion\n"))
        while (opc >0 and opc <5):</br>
            x = int(input("Ingrese Numero\n"))
            y = int(input("Ingrese Otro Numero\n"))
            if (opc==1):</br>
                print "La Suma es:", x+y</br>
                opc = int(input("Selecione Opcion\n"))
            elif(opc==2):</br>
                print "La Resta es:",x-y</br>
                opc = int(input("Selecione Opcion\n"))
            elif(opc==3):</br>
                print "La Multiplicacion es:",x*y
                opc = int(input("Selecione Opcion\n"))
            elif(opc==4):
                try:
                  print "La Division es:", x/y
                  opc = int(input("Selecione Opcion\n"))
                except ZeroDivisionError:
                  print "No se Permite la Division Entre 0"
                  opc = int(input("Selecione Opcion\n"))
    Calculadora()
        </textarea>
        </div>';
        }
    

    if($loquebusca == 'Calculadora en Java' || $loquebusca == 'CALCULADORA EN JAVA' || $loquebusca == 'programa una calculadora en java' || $loquebusca == 'PROGRAMA UNA CALCULADORA EN JAVA' || $loquebusca == 'calculadora en java'){
        echo'<div class="barra_opciones">
        <img class="imagen_lenguaje" src="Img/java.png">
        <p class="datos_opciones" style="top:50%;">Lenguaje: Java</p>
        <p class="datos_opciones" style="top:60%;">Programa: Calculadora</p>
        <p class="datos_opciones" style="top:70%;">Archivo: </p>
        </div>';

        echo'<div class="campo_codigo">
        <div class="decorado_codigo"><p class="lennguaje_seleccionado">/Java</p></div>
        <textarea class="codigo">
        package calculadora;
        import java.util.Scanner;
        
        public class TestCalculadora{
        public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        double res = 0;
        String operacion;
        boolean comprobar = false;
        do{
        String numero1;
        do {
        
        System.out.println(&quot;\n Por favor, dame el primer número de la operación. &quot;);
        numero1 = sc.nextLine();
        } while (!numero1.matches(&quot;[+-]?[\\d]*[.]?[\\d]+&quot;));
        double nume1 = Double.parseDouble(numero1);
        double n1 = new Double(numero1);
        
        do {
        System.out.println(&quot;\n ¿Que operación desea hacer? (Solo coloque un signo)&quot;);
        System.out.println(&quot;Teniendo en cuenta que: \n + = sumar \n - = restar \n&quot;
        + &quot; x = multiplicar \n / = dividir \n * = elevar primer número al segundo numero.&quot;
        + &quot;\n % = residuo&quot;);
        operacion = sc.nextLine();
        if (operacion.equals(&quot;+&quot;) || operacion.equals(&quot;-&quot;) || operacion.equals(&quot;x&quot;) ||
        operacion.equals(&quot;X&quot;) || operacion.equals(&quot;/&quot;) || operacion.equals(&quot;%&quot;) ||
        operacion.equals(&quot;*&quot;)) {
        comprobar = true;
        }else { comprobar = false; }
        } while (comprobar != true);
        
        String numero2;
        do {
        System.out.println(&quot;\n Por favor, dame el segundo número.&quot;);
        numero2 = sc.nextLine();
        } while (!numero2.matches(&quot;[+-]?[\\d]*[.]?[\\d]+&quot;));
        double nume2 = Double.parseDouble(numero2);
        double n2 = new Double(numero2);
        do{
        comprobar = true;
        switch(operacion){
        case &quot;+&quot;:
        res = n1 + n2;
        break;
        case &quot;-&quot;:
        res = n1 - n2;
        break;
        case &quot;x&quot;:
        case &quot;X&quot;:
        res = n1 * n2;
        
        break;
        case &quot;/&quot;:
        while(n2 == 0){
        do {
        System.err.println(&quot; En el denominador se encuentra \n&quot;
        + &quot;un cero, para evitar errores coloca otro número.&quot;);
        numero2 = sc.nextLine();
        }while (!numero2.matches(&quot;[+-]?[\\d]*[.]?[\\d]+&quot;));
        nume2 = Double.parseDouble(numero2);
        n2 = new Double(numero2);
        }
        res = n1 / n2;
        break;
        case &quot;*&quot;:
        res = Math.pow(n1, n2);
        break;
        case &quot;%&quot;:
        while(n2 == 0){
        do {
        
        System.err.println(&quot; En el denominador se encuentra \n&quot;
        + &quot;un cero, para evitar errores coloca otro número.&quot;);
        numero2 = sc.nextLine();
        }while (!numero2.matches(&quot;[+-]?[\\d]*[.]?[\\d]+&quot;));
        nume2 = Double.parseDouble(numero2);
        n2 = new Double(numero2);
        }
        res = n1 % n2;
        break;
        }
        }while(comprobar != true);
        System.out.println(&quot;(&quot; + numero1 + &quot;) &quot; + operacion + &quot; (&quot; + numero2 + &quot;)&quot; + &quot; = &quot; + res);
        System.out.println(&quot;\n ¿Desea hacer alguna otra operación? \n&quot;);
        System.out.println(&quot; [s/n]&quot;);
        do{
        comprobar = true;
        operacion = sc.nextLine();
        
        switch (operacion) {
        
        case &quot;s&quot;:
        case &quot;S&quot;:
        case &quot;n&quot;:
        case &quot;N&quot;:
        break;
        default:
        System.err.println(&quot;\n Error, ponga un literal valido. \n&quot;);
        comprobar = false;
        }
        }while(comprobar != true);
        }while(operacion.equals(&quot;s&quot;) || operacion.equals(&quot;S&quot;));
        }
        }
        </textarea>
        </div>';
        }

        
    if($loquebusca == 'Calculadora en c#' || $loquebusca == 'CALCULADORA EN C#' || $loquebusca == 'programa una calculadora en c#' || $loquebusca == 'PROGRAMA UNA CALCULADORA EN C#' || $loquebusca == 'calculadora en c#'){
        echo'<div class="barra_opciones">
        <img class="imagen_lenguaje" src="Img/c.png">
        <p class="datos_opciones" style="top:50%;">Lenguaje: C#</p>
        <p class="datos_opciones" style="top:60%;">Programa: Calculadora</p>
        <p class="datos_opciones" style="top:70%; text-decoration: none;">Archivo: <a href="rar/cal.rar" style="text-decoration: none;">Descargar</a></p>
        </div>';

        echo'<div class="campo_codigo">
        <div class="decorado_codigo"><p class="lennguaje_seleccionado">/C#</p></div>
        <textarea class="codigo">
        using System;
        using System.Collections.Generic;
        using System.Linq;
        using System.Text;
        namespace ConsoleApplication15
        {
        class Calculadora //Nombre de nuestra clase.
        {
        static void Main(string[] args)
        {
        Console.Title = &quot;Mini Calculadora - Eulises Rodriguez&quot;; //Sirve para agregarle un titulo a la ventana
        string resp = &quot;&quot;;
        do
        {
        int valor1 = 0; //Aqui se almacenara el primer valor ingresado.
        int valor2 = 0; //Aqui se almacenara el segundo valor ingresado.
        int R = 0; //Aqui se almacenara el resultado de la operacion.
        Console.WriteLine(&quot;Presione el simbolo para realizar la operacion:n&quot;);
        Console.WriteLine(&quot;+ para sumar&quot;);
        Console.WriteLine(&quot;- para restar&quot;);
        Console.WriteLine(&quot;* para multiplicar&quot;);
        Console.WriteLine(&quot;/ para dividir&quot;);
        Console.Write(&quot;n Eliga Una Opcion: &quot;); //Aqui es donde indicaremos que operacion vamos a realizar
        resp = Console.ReadLine();
        string eleccion = Convert.ToString(resp);
        
        Console.WriteLine(&quot;nIngrese sus dos numerosn&quot;);
        Console.Write(&quot;Valor1: &quot;);
        valor1 = int.Parse(Console.ReadLine());
        Console.Write(&quot;Valor2: &quot;);
        valor2 = int.Parse(Console.ReadLine());
        Console.WriteLine();
        switch (eleccion)
        {
        case &quot;+&quot;:
        Console.WriteLine(&quot;El resultado de la suma es:&quot;);
        R = valor1 + valor2;
        Console.WriteLine(&quot;{0} + {1} = {2}&quot;, valor1, valor2, R);
        break;
        case &quot;-&quot;:
        Console.WriteLine(&quot;El resultado de la resta es:&quot;);
        R = valor1 - valor2;
        Console.WriteLine(&quot;{0} - {1} = {2}&quot;, valor1, valor2, R);
        break;
        case &quot;*&quot;:
        Console.WriteLine(&quot;El resultado de la multiplicacion es:&quot;);
        R = valor1 * valor2;
        Console.WriteLine(&quot;{0} * {1} = {2}&quot;, valor1, valor2, R);
        break;
        case &quot;/&quot;:
        Console.WriteLine(&quot;El resultado de la division es:&quot;);
        R = valor1 / valor2;
        
        Console.WriteLine(&quot;{0} / {1} = {2}&quot;, valor1, valor2, R);
        break;
        }
        Console.Write(&quot;n¿Desea Continuar? s/n: &quot;); //Si para realizarlo de nuevo y no para salir.
        resp = Console.ReadLine();
        }
        while (resp == &quot;s&quot; || resp == &quot;s&quot;);
        }
        }
        }
        </textarea>
        </div>';
        }







        if($loquebusca == 'Par o impar en python' || $loquebusca == 'PAR O IMPAR EN PYTHON' || $loquebusca == 'programa un par o impar en python' || $loquebusca == 'PROGRAMA UN PAR O IMPAR EN PYTHON' || $loquebusca == 'par o impar en python' || $loquebusca == 'programa par o impar en python' || $loquebusca == 'PROGRAMA PAR O IMPAR EN python'){
            echo'<div class="barra_opciones">
            <img class="imagen_lenguaje" src="Img/python.png">
            <p class="datos_opciones" style="top:50%;">Lenguaje: Python</p>
            <p class="datos_opciones" style="top:60%;">Programa: Par o impar</p>
            <p class="datos_opciones" style="top:70%;">Archivo: </p>
            </div>';
    
            echo'<div class="campo_codigo">
            <div class="decorado_codigo"><p class="lennguaje_seleccionado">/Python</p></div>
            <textarea class="codigo">
numeros = []
contador = 1
while len(numeros) &lt; 3:
numero_como_cadena = input(&quot;Ingrese el número &quot; + str(contador) + &quot;: &quot;)
try:
numero = float(numero_como_cadena)
if numero in numeros:
print(&quot;El número ya existe&quot;)
else:
numeros.append(numero)
contador = contador + 1
except:
print(&quot;Número no válido&quot;)
for i in numeros:
for j in range(len(numeros) - 1):
if numeros[j] &gt; numeros[j+1]:
numeros[j], numeros[j+1] = numeros[j+1], numeros[j]
# Ya están ordenados. Los imprimimos
for numero in numeros:
print(numero)
            </textarea>
            </div>';
        }

        if($loquebusca == 'Par o impar en java' || $loquebusca == 'PAR O IMPAR EN JAVA' || $loquebusca == 'programa un par o impar en java' || $loquebusca == 'PROGRAMA UN PAR O IMPAR EN JAVA' || $loquebusca == 'par o impar en java' || $loquebusca == 'programa par o impar en java' || $loquebusca == 'PROGRAMA PAR O IMPAR EN java'){
            echo'<div class="barra_opciones">
            <img class="imagen_lenguaje" src="Img/java.png">
            <p class="datos_opciones" style="top:50%;">Lenguaje: Java</p>
            <p class="datos_opciones" style="top:60%;">Programa: Par o impar</p>
            <p class="datos_opciones" style="top:70%;">Archivo: </p>
            </div>';
    
            echo'<div class="campo_codigo">
            <div class="decorado_codigo"><p class="lennguaje_seleccionado">/Java</p></div>
            <textarea class="codigo">
            public class Main {
                public static void main(String[] args) {
                int a,b,c;
                Scanner teclado = new Scanner(System.in);
                System.out.println(“Primer número:”);
                a=teclado.nextInt();
                System.out.println(“Segundo número:”);
                b=teclado.nextInt();
                System.out.println(“Tercer número:”);
                c=teclado.nextInt();
                
                System.out.println(“Los números ordenados de mayor a menor son:”);
                if(a&amp;gt;=b &amp;amp;&amp;amp; b&amp;gt;=c)
                {
                System.out.println(” ” +a+ ” ” +b+ ” ” +c+ “”);
                }
                else if (a&amp;gt;=c &amp;amp;&amp;amp; c&amp;gt;=b)
                {
                System.out.println(” ” +a+ ” ” +c+ ” ” +b+ “”);
                }
                else if (b&amp;gt;=a &amp;amp;&amp;amp; a&amp;gt;=c)
                {
                System.out.println(” ” +b+ ” ” +a+ ” ” +c+ “”);
                }
                else if (b&amp;gt;=c &amp;amp;&amp;amp; c&amp;gt;=a)
                {
                System.out.println(” ” +b+ ” ” +c+ ” ” +a+ “”);
                }
                else if (c&amp;gt;=a &amp;amp;&amp;amp; a&amp;gt;=b)
                {
                System.out.println(” ” +c+ ” ” +a+ ” ” +b+ “”);
                }
                else
                {
                System.out.println(” ” +c+ ” ” +b+ ” ” +a+ “”);
            </textarea>
            </div>';
        }

        
        if($loquebusca == 'Par o impar en c#' || $loquebusca == 'PAR O IMPAR EN C#' || $loquebusca == 'programa un par o impar en c#' || $loquebusca == 'PROGRAMA UN PAR O IMPAR EN C#' || $loquebusca == 'par o impar en c#' || $loquebusca == 'programa par o impar en c#' || $loquebusca == 'PROGRAMA PAR O IMPAR EN c#'){
            echo'<div class="barra_opciones">
            <img class="imagen_lenguaje" src="Img/c.png">
            <p class="datos_opciones" style="top:50%;">Lenguaje: C#</p>
            <p class="datos_opciones" style="top:60%;">Programa: Par o impar</p>
            <p class="datos_opciones" style="top:70%;">Archivo: </p>
            </div>';
    
            echo'<div class="campo_codigo">
            <div class="decorado_codigo"><p class="lennguaje_seleccionado">/C#</p></div>
            <textarea class="codigo">
using System;
namespace Sort3Numbers {
class Program {
static void Main() {
int a = int.Parse(Console.ReadLine());
int b = int.Parse(Console.ReadLine());
int c = int.Parse(Console.ReadLine());
int bigger;
int smaller;
int secondNumber;
if(a &gt; b &amp;&amp; a &gt; c) {
bigger = a;
}else if(b &gt; a &amp;&amp; b &gt; c) {
bigger = b;
}else {
bigger = c;
}
if(a &lt; b &amp;&amp; a &lt; c) {
smaller = a;
}else if(b &lt; a &amp;&amp; b &lt; c) {
smaller = b;
}else {
smaller = c;

}
if(a &gt; smaller &amp;&amp; a &lt; bigger) {
secondNumber = a;
}else if(b &gt; smaller &amp;&amp; b &lt; bigger) {
secondNumber = b;
}else {
secondNumber = c;
}
Console.WriteLine(&quot;{0} {1} {2}&quot;, bigger, secondNumber, smaller);
}
}
}            </textarea>
            </div>';
        }






                
    if($loquebusca == 'Mayor a menor en c#' || $loquebusca == 'MAYOR A MENOR EN C#' || $loquebusca == 'programa un mayor a menor en c#' || $loquebusca == 'PROGRAMA UN MAYOR A MENOR EN C#' || $loquebusca == 'mayor a menor en c#' || $loquebusca == 'programa mayor a menor en c#' || $loquebusca == 'PROGRAMA MAYOR A MENOR EN c#'){
        echo'<div class="barra_opciones">
        <img class="imagen_lenguaje" src="Img/c.png">
        <p class="datos_opciones" style="top:50%;">Lenguaje: C#</p>
        <p class="datos_opciones" style="top:60%;">Programa: Mayor a menor</p>
        <p class="datos_opciones" style="top:70%; text-decoration: none;">Archivo: <a href="rar/cal.rar" style="text-decoration: none;">Descargar</a></p>
        </div>';

        echo'<div class="campo_codigo">
        <div class="decorado_codigo"><p class="lennguaje_seleccionado">/C#</p></div>
        <textarea class="codigo">
        using System;
        namespace Sort3Numbers {
        class Program {
        static void Main() {
        int a = int.Parse(Console.ReadLine());
        int b = int.Parse(Console.ReadLine());
        int c = int.Parse(Console.ReadLine());
        int bigger;
        int smaller;
        int secondNumber;
        if(a &gt; b &amp;&amp; a &gt; c) {
        bigger = a;
        }else if(b &gt; a &amp;&amp; b &gt; c) {
        bigger = b;
        }else {
        bigger = c;
        }
        if(a &lt; b &amp;&amp; a &lt; c) {
        smaller = a;
        }else if(b &lt; a &amp;&amp; b &lt; c) {
        smaller = b;
        }else {
        smaller = c;
        
        }
        if(a &gt; smaller &amp;&amp; a &lt; bigger) {
        secondNumber = a;
        }else if(b &gt; smaller &amp;&amp; b &lt; bigger) {
        secondNumber = b;
        }else {
        secondNumber = c;
        }
        Console.WriteLine(&quot;{0} {1} {2}&quot;, bigger, secondNumber, smaller);
        }
        }
        }
        </textarea>
        </div>';
        }

                    
    if($loquebusca == 'Mayor a menor en java' || $loquebusca == 'MAYOR A MENOR EN java' || $loquebusca == 'programa un mayor a menor en java' || $loquebusca == 'PROGRAMA UN MAYOR A MENOR EN java' || $loquebusca == 'mayor a menor en java' || $loquebusca == 'programa mayor a menor en java' || $loquebusca == 'PROGRAMA MAYOR A MENOR EN java'){
        echo'<div class="barra_opciones">
        <img class="imagen_lenguaje" src="Img/java.png">
        <p class="datos_opciones" style="top:50%;">Lenguaje: Java</p>
        <p class="datos_opciones" style="top:60%;">Programa: Mayor a menor</p>
        <p class="datos_opciones" style="top:70%; text-decoration: none;">Archivo: <a href="rar/cal.rar" style="text-decoration: none;">Descargar</a></p>
        </div>';

        echo'<div class="campo_codigo">
        <div class="decorado_codigo"><p class="lennguaje_seleccionado">/Java</p></div>
        <textarea class="codigo">
        public class Main {
            public static void main(String[] args) {
            int a,b,c;
            Scanner teclado = new Scanner(System.in);
            System.out.println(“Primer número:”);
            a=teclado.nextInt();
            System.out.println(“Segundo número:”);
            b=teclado.nextInt();
            System.out.println(“Tercer número:”);
            c=teclado.nextInt();
            
            System.out.println(“Los números ordenados de mayor a menor son:”);
            if(a&amp;gt;=b &amp;amp;&amp;amp; b&amp;gt;=c)
            {
            System.out.println(” ” +a+ ” ” +b+ ” ” +c+ “”);
            }
            else if (a&amp;gt;=c &amp;amp;&amp;amp; c&amp;gt;=b)
            {
            System.out.println(” ” +a+ ” ” +c+ ” ” +b+ “”);
            }
            else if (b&amp;gt;=a &amp;amp;&amp;amp; a&amp;gt;=c)
            {
            System.out.println(” ” +b+ ” ” +a+ ” ” +c+ “”);
            }
            else if (b&amp;gt;=c &amp;amp;&amp;amp; c&amp;gt;=a)
            {
            System.out.println(” ” +b+ ” ” +c+ ” ” +a+ “”);
            }
            else if (c&amp;gt;=a &amp;amp;&amp;amp; a&amp;gt;=b)
            {
            System.out.println(” ” +c+ ” ” +a+ ” ” +b+ “”);
            }
            else
            {
            System.out.println(” ” +c+ ” ” +b+ ” ” +a+ “”);
            
            }
            }
            }
        </textarea>
        </div>';
        }

                            
    if($loquebusca == 'Mayor a menor en python' || $loquebusca == 'MAYOR A MENOR EN python' || $loquebusca == 'programa un mayor a menor en python' || $loquebusca == 'PROGRAMA UN MAYOR A MENOR EN python' || $loquebusca == 'mayor a menor en python' || $loquebusca == 'programa mayor a menor en python' || $loquebusca == 'PROGRAMA MAYOR A MENOR EN python'){
        echo'<div class="barra_opciones">
        <img class="imagen_lenguaje" src="Img/python.png">
        <p class="datos_opciones" style="top:50%;">Lenguaje: Python</p>
        <p class="datos_opciones" style="top:60%;">Programa: Mayor a menor</p>
        <p class="datos_opciones" style="top:70%; text-decoration: none;">Archivo: <a href="rar/cal.rar" style="text-decoration: none;">Descargar</a></p>
        </div>';

        echo'<div class="campo_codigo">
        <div class="decorado_codigo"><p class="lennguaje_seleccionado">/Python</p></div>
        <textarea class="codigo">
        numeros = []
        contador = 1
        while len(numeros) &lt; 3:
        numero_como_cadena = input(&quot;Ingrese el número &quot; + str(contador) + &quot;: &quot;)
        try:
        numero = float(numero_como_cadena)
        if numero in numeros:
        print(&quot;El número ya existe&quot;)
        else:
        numeros.append(numero)
        contador = contador + 1
        except:
        print(&quot;Número no válido&quot;)
        for i in numeros:
        for j in range(len(numeros) - 1):
        if numeros[j] &gt; numeros[j+1]:
        numeros[j], numeros[j+1] = numeros[j+1], numeros[j]
        # Ya están ordenados. Los imprimimos
        for numero in numeros:
        print(numero)
        </textarea>
        </div>';
        }


                                
    if($loquebusca == 'Calcular sueldo de un trabajador en python' || $loquebusca == 'CALCULAR SUELDO DE UN TRABAJADOR EN python' || $loquebusca == 'programa calcular sueldo de un trabajador en python' || $loquebusca == 'PROGRAMA CALCULAR SUELDO DE UN TRABAJADOR EN python' || $loquebusca == 'calcular sueldo de un trabajador en python' || $loquebusca == 'Calcular sueldo de una trabajadora en python' || $loquebusca == 'CALCULAR SUELDO DE UNA TRABAJADORA EN python' || $loquebusca == 'programa calcular sueldo de una trabajadora en python' || $loquebusca == 'PROGRAMA CALCULAR SUELDO DE UNA TRABAJADORA EN python' || $loquebusca == 'calcular sueldo de una trabajadora en python' || $loquebusca == 'Calcular el sueldo de un trabajador en python' || $loquebusca == 'CALCULAR EL SUELDO DE UN TRABAJADOR EN python' || $loquebusca == 'programa calcular el sueldo de un trabajador en python' || $loquebusca == 'PROGRAMA CALCULAR EL SUELDO DE UN TRABAJADOR EN python' || $loquebusca == 'calcular el sueldo de un trabajador en python'){
        echo'<div class="barra_opciones">
        <img class="imagen_lenguaje" src="Img/python.png">
        <p class="datos_opciones" style="top:50%;">Lenguaje: Python</p>
        <p class="datos_opciones" style="top:60%;">Programa: Calcular el sueldo de un trabajador</p>
        <p class="datos_opciones" style="top:70%; text-decoration: none;">Archivo: <a href="rar/cal.rar" style="text-decoration: none;">Descargar</a></p>
        </div>';

        echo'<div class="campo_codigo">
        <div class="decorado_codigo"><p class="lennguaje_seleccionado">/Python</p></div>
        <textarea class="codigo">
        import os
        antiguedad_en_anos = float (input (&#39;Ingresa el valor de antiguedad en anos: &#39;))
        horas_trabajadas = float (input (&#39;Ingresa el valor de horas trabajadas: &#39;))
        pago_por_hora=15000
        salario_bruto=horas_trabajadas*pago_por_hora
        if horas_trabajadas&gt;38:
        salario_bruto=salario_bruto+(horas_trabajadas-38)*pago_por_hora*0.5
        if salario_bruto&gt;570000:
        
        impuesto=salario_bruto*0.1
        else:
        impuesto=salario_bruto*0.05
        if antiguedad_en_anos&gt;=10:
        bonificacion=200000
        else:
        bonificacion=0
        salario_neto=salario_bruto-impuesto+bonificacion
        print (&#39;Valor de bonificacion: &#39; + repr (bonificacion))
        print (&#39;Valor de impuesto: &#39; + repr (impuesto))
        print (&#39;Valor de pago por hora: &#39; + repr (pago_por_hora))
        print (&#39;Valor de salario bruto: &#39; + repr (salario_bruto))
        print (&#39;Valor de salario neto: &#39; + repr (salario_neto))
        print ()
        os.system (&#39;pause&#39;)
        </textarea>
        </div>';
        }


                           
    if($loquebusca == 'Calcular sueldo de un trabajador en java' || $loquebusca == 'CALCULAR SUELDO DE UN TRABAJADOR EN java' || $loquebusca == 'programa calcular sueldo de un trabajador en java' || $loquebusca == 'PROGRAMA CALCULAR SUELDO DE UN TRABAJADOR EN java' || $loquebusca == 'calcular sueldo de un trabajador en java' || $loquebusca == 'Calcular sueldo de una trabajadora en java' || $loquebusca == 'CALCULAR SUELDO DE UNA TRABAJADORA EN java' || $loquebusca == 'programa calcular sueldo de una trabajadora en java' || $loquebusca == 'PROGRAMA CALCULAR SUELDO DE UNA TRABAJADORA EN java' || $loquebusca == 'calcular sueldo de una trabajadora en java' || $loquebusca == 'Calcular el sueldo de un trabajador en java' || $loquebusca == 'CALCULAR EL SUELDO DE UN TRABAJADOR EN java' || $loquebusca == 'programa calcular el sueldo de un trabajador en java' || $loquebusca == 'PROGRAMA CALCULAR EL SUELDO DE UN TRABAJADOR EN java' || $loquebusca == 'calcular el sueldo de un trabajador en java'){
        echo'<div class="barra_opciones">
        <img class="imagen_lenguaje" src="Img/java.png">
        <p class="datos_opciones" style="top:50%;">Lenguaje: Python</p>
        <p class="datos_opciones" style="top:60%;">Programa: Calcular el sueldo de un trabajador</p>
        <p class="datos_opciones" style="top:70%; text-decoration: none;">Archivo: <a href="rar/cal.rar" style="text-decoration: none;">Descargar</a></p>
        </div>';

        echo'<div class="campo_codigo">
        <div class="decorado_codigo"><p class="lennguaje_seleccionado">/Java</p></div>
        <textarea class="codigo">
        import java.util.Scanner;
        public class Empleado {
        public static void main(String[]args){
        double sueldohora=0;
        int horasextras=0;
        double sueldohe=0;
        double impuestos=0;
        int hrstrabajadas=0;
        double sueldo=0;
        double sueldofinal=0;
        Scanner entrada= new Scanner(System.in);
        System.out.println(&quot;Ingrese el sueldo del empleado x hora&quot;);
        sueldohora= entrada.nextDouble();
        System.out.println(&quot;Ingrese las horas trabajadas a la semana&quot;);
        hrstrabajadas= entrada.nextInt();
        if(hrstrabajadas&gt;40){
        horasextras= hrstrabajadas-40;
        }
        sueldohe= horasextras*sueldohora*2;
        sueldo= sueldohora*(hrstrabajadas+horasextras);
        if(sueldo&gt;=20000){
        
        impuestos= sueldo*0.25;
        }
        else{
        if(sueldo&gt;=15000){
        impuestos= sueldo*0.20;
        }
        else{
        if(sueldo&gt;=10000){
        impuestos= sueldo*0.10;
        }
        else{
        impuestos=0;
        }
        }
        }
        sueldofinal= sueldo-impuestos;
        System.out.println(&quot;El Sueldo del Empleado es: &quot;+sueldofinal);
        }
        }
        </textarea>
        </div>';
        }


        if($loquebusca == 'Calcular sueldo de un trabajador en c#' || $loquebusca == 'CALCULAR SUELDO DE UN TRABAJADOR EN c#' || $loquebusca == 'programa calcular sueldo de un trabajador en c#' || $loquebusca == 'PROGRAMA CALCULAR SUELDO DE UN TRABAJADOR EN c#' || $loquebusca == 'calcular sueldo de un trabajador en c#' || $loquebusca == 'Calcular sueldo de una trabajadora en c#' || $loquebusca == 'CALCULAR SUELDO DE UNA TRABAJADORA EN c#' || $loquebusca == 'programa calcular sueldo de una trabajadora en c#' || $loquebusca == 'PROGRAMA CALCULAR SUELDO DE UNA TRABAJADORA EN java' || $loquebusca == 'calcular sueldo de una trabajadora en java' || $loquebusca == 'Calcular el sueldo de un trabajador en c#' || $loquebusca == 'CALCULAR EL SUELDO DE UN TRABAJADOR EN c#' || $loquebusca == 'programa calcular el sueldo de un trabajador en c#' || $loquebusca == 'PROGRAMA CALCULAR EL SUELDO DE UN TRABAJADOR EN c#' || $loquebusca == 'calcular el sueldo de un trabajador en c#'){
            echo'<div class="barra_opciones">
            <img class="imagen_lenguaje" src="Img/c.png">
            <p class="datos_opciones" style="top:50%;">Lenguaje: C#</p>
            <p class="datos_opciones" style="top:60%;">Programa: Calcular el sueldo de un trabajador</p>
            <p class="datos_opciones" style="top:70%; text-decoration: none;">Archivo: <a href="rar/cal.rar" style="text-decoration: none;">Descargar</a></p>
            </div>';
    
            echo'<div class="campo_codigo">
            <div class="decorado_codigo"><p class="lennguaje_seleccionado">/C#</p></div>
            <textarea class="codigo">
            using System;
            namespace CalculoDelSalarioDeUnEmpleado
            {
            class CalculoDelSalarioDeUnEmpleado
            {
            static void Main(string[] args)
            {
            double costo_normal, horas_trabajadas, salario;
            Console.Write(&quot;Ingresa el valor de costo normal: &quot;);
            costo_normal = double.Parse(Console.ReadLine());
            Console.Write(&quot;Ingresa el valor de horas trabajadas: &quot;);
            horas_trabajadas = double.Parse(Console.ReadLine());
            salario=horas_trabajadas*costo_normal;
            if(horas_trabajadas&gt;40)
            salario=salario+(horas_trabajadas-40)*costo_normal;
            if(horas_trabajadas&gt;48)
            salario=salario+(horas_trabajadas-48)*costo_normal;
            Console.WriteLine(&quot;Valor de salario: &quot; + salario);
            Console.WriteLine();
            Console.Write(&quot;Presiona una tecla para terminar . . . &quot;);
            Console.ReadKey();
            }
            }
            }
            </textarea>
            </div>';
            }
    }
?>