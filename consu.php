<?php
$codigo = $_POST['codigo'];
$contra = $_POST['contra'];
echo "<div align='center'>";
echo "<p><img src='logoupn.jpg' width='768' height='124'></p>";
echo "</div>";
include ("conexionfed.php");
$sql = "select * from validacion WHERE usuario = '$codigo' AND contra = '$contra'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
$b="tad";
$a==$b;
while($row = mysql_fetch_array($sql))
{
$usuario=$row[usuario];
$contra=$row[contra];
$id=$row[id];

if ($row[id]==51)
{
$a='psicopeda.php';
echo "<div align='center'> ";
echo "<strong>LOGIN CORRECTO</strong>";
echo "</div>";
}
if ($row[id]==52 )
{
$a='infantil.php';
echo "<div align='center'>";
echo "<strong>LOGIN CORRECTO</strong>";
echo "</div>";
}
if ($row[id]==56)
{
$a='infantil.php';
echo "<div align='center'>";
echo "<strong>LOGIN CORRECTO</strong>";
echo "</div>";
}
if ($row[id]==50 )
{
$a='especial.php';
echo "<div align='center'>";
echo "<strong>LOGIN CORRECTO</strong>";
echo "</div>";
}
if ($row[id]==53 )
{
$a='comunitaria.php';
echo "<div align='center'>";
echo "<strong>LOGIN CORRECTO</strong>";
echo "</div>";
}
if ($row[id]==54)
{
$a='basica.php';
echo "<div align='center'> ";
echo "<strong>LOGIN CORRECTO</strong>";
echo "</div>";
}
}
?>
<html>
<head>
<title>confirmacion</title>
</head>
<body>
<?php
if ($id == 50 || $id == 51 || $id == 52 || $id == 53 || $id == 56 || $id == 54)
{?>
<form action="<?php 
if ($a!=$b)
{
echo "$a" ;
}

?>" method="post">

  <p align="center">INSTRUCTIVO DE EVALUACI&Ograve;N DEL DESEMPE&Ntilde;O DOCENTE 
  </p>
  <p align="center">FORMATO A (Estudiantes) </p>
  <p align="justify"><br>
    Apreciado(a) estudiante, este es el instructivo a tener en cuenta para la 
    evaluaci&oacute;n que usted realizara a los docentes del sengundo periodo acad&eacute;mico 
    de 2018.</p>
  <p align="justify">&#8226; Dar clic en la opci&oacute;n de entrar, aparecer&aacute; 
    el formato A, donde usted evaluara los docentes, correspondientes al programa 
    en el que se encuentra inscrito.</p>
  <p align="justify">&#8226; En el formato aparecer&aacute; un fila donde usted 
    ingresara el espacio acad&eacute;mico, el grupo y el profesor que desea evaluar, 
    estos los escoger&aacute; de una lista </p>
  <p align="center"><img src="espacio.JPG" width="616" height="156"></p>
  <p align="left">&#8226; Dentro de la misma fila encontrara las preguntas las 
    cuales debe contestar referente al docente que se encuentra en la misma l&iacute;nea</p>
  <p align="center"><img src="preguntas.JPG" width="1058" height="152"></p>
  <p align="left">&#8226; Tenga en cuenta que las primeras las preguntas de la 
    8 a la 13 son para coordinadores de practica y las preguntas 14 a 17 son para 
    trabajo de grado (Educaci&oacute;n Infantil) Proyecto pedag&oacute;gico (Educaci&oacute;n 
    Especial) Investigaci&oacute;n pedag&oacute;gica (Psicolog&iacute;a y Pedagog&iacute;a) 
  </p>
  <p align="left">&#8226; Tenga en cuenta la siguiente tabla de valores para la 
    calificaci&oacute;n.</p>
  <div align="center">
  <table width="24%" border="2">
    <tr>
      <td height="22"><div align="center">VALORACI&Oacute;N</div></td>
	  <td height="22"><div align="center">PUNTOS</div></td>
    </tr>
  </table>
    <table width="24%" border="2">
      <tr>
      <td width="61%">Excelente</td>
      <td width="39%">45-50</td>
    </tr>
    <tr>
      <td>Sobresaliente</td>
      <td>40-44</td>
    </tr>
    <tr>
      <td>Bueno</td>
      <td>35-39</td>
    </tr>
    <tr>
      <td>Satisfactorio</td>
      <td>30-34</td>
    </tr>
    <tr>
      <td>No satisfactorio</td>
      <td>0-29</td>
    </tr>
  </table>
  </div>
  <p> &#8226; Si tiene alg&uacute;n inconveniente ingresando o diligenciando el 
    formato puede acercarse a la oficina c226 o comunicarse a la universidad pedag&oacute;gica 
    nacional a la extensi&oacute;n 323</p>
  <div align="center">
  	<input type="hidden" name="usuario" value="<?php echo "",$usuario?>" id="usuario">
	<input type="hidden" name="id" value="<?php echo "",$id?>" id="id">
<p> <input type="submit" name="Submit" value="ENTRAR"> </p>

  </div>
</form>
<?php
}

if ($id == 22)
{?>
<form action="fb.php" method="post">
  <p align="center">INSTRUCTIVO DE EVALUACI&Ograve;N DEL DESEMPE&Ntilde;O DOCENTE 
  </p>
  <p align="center">FORMATO B (Docentes) </p>
  <p align="justify">Apreciado(a) Docente, este es el instructivo a tener en cuenta 
    para su evaluaci&oacute;n docente del segundo periodo acad&eacute;mico de 
    2018.</p>
  <p align="justify">&#8226; Ingrese al aplicativo dando clic en el bot&oacute;n 
    entrar en el fondo de este instructivo</p>
  <p align="justify">&#8226; Dentro del aplicativo encontrara sus datos verif&iacute;quelos</p>
  <p align="justify"><img src="datos1.JPG" width="874" height="133"></p>
  <p align="justify">&#8226; Seguidamente en el Formato encontrara las preguntas 
    referentes a la docencia,docencia coordinadores de practica educativa, Trabajo 
    de grado (Educaci&oacute;n Infantil) Proyecto pedag&oacute;gico (Educaci&oacute;n 
    Especial) Investigaci&oacute;n pedag&oacute;gica (Psicolog&iacute;a y Pedagog&iacute;a), 
    Investigaci&oacute;n, Proyectos de extensi&oacute;n, Actividades de gesti&oacute;n 
    institucional dilig&eacute;ncielas seg&uacute;n las actividades acad&eacute;micas 
    que usted realizo durante segundo periodo acad&eacute;mico de 
    2018.</p>
  <p align="justify">&#8226; tenga en cuenta la siguiente tabla para realizar 
    su calificaci&oacute;n</p>
  <table width="24%" border="2" align="center">
    <tr> 
      <td height="22"><div align="center">VALORACI&Oacute;N</div></td>
      <td height="22"><div align="center">PUNTOS</div></td>
    </tr>
  </table>
  <table width="24%" border="2" align="center">
    <tr> 
      <td width="61%">Excelente</td>
      <td width="39%">45-50</td>
    </tr>
    <tr> 
      <td>Sobresaliente</td>
      <td>40-44</td>
    </tr>
    <tr> 
      <td>Bueno</td>
      <td>35-39</td>
    </tr>
    <tr> 
      <td>Satisfactorio</td>
      <td>30-34</td>
    </tr>
    <tr> 
      <td>No satisfactorio</td>
      <td>0-29</td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <p align="justify">&#8226; Los numerales que no correspondan con su desempe&ntilde;o 
    docente, no los diligencie, lo cual no altera el promedio.</p>
  <p align="justify">&#8226; Una vez diligenciado el formato encontrara al fin 
    de este un bot&oacute;n con el titulo de &quot;enviar&quot; al darle clic 
    su autoevaluaci&oacute;n quedara guardada </p>
  <p align="justify">
    <input type="hidden" name="usuario" value="<?php echo "",$usuario?>" id="usuario">
    <input type="hidden" name="id" value="<?php echo "",$id?>" id="id">
  </p>
  <p align="center"> 
    <input type="submit" name="Submit" value="ENTRAR">
  </p>
</form>
<?php 
}

if ($id == 10 || $id == 11 || $id == 12 || $id == 13 || $id == 14 || $id == 15)
{
	if ($id == 10)
	{
	$id = 50;
	}
	if ($id == 11)
	{
    $id = 51;
    }
	if ($id == 12)
	{
    $id = 52;
    }
	if ($id == 13)
	{
    $id = 53;
    }
	if ($id == 14)
	{
    $id = 54;
    }
	if ($id == 15)
	{
    $id = 15;
    }

?>
<form action="fc.php" method="post">
  <p align="center">INSTRUCTIVO DE EVALUACI&Ograve;N DEL DESEMPE&Ntilde;O DOCENTE </p>
  <p align="center">FORMATO C (Evaluaci&oacute;n Jefe Inmediato) </p>
  <p align="justify">Apreciado(a) Coordinador(a) de programa , este es el instructivo 
    a tener en cuenta para que realice la Evaluaci&oacute;n docente de los profesores 
    a cargo de su programa para el segudo periodo acad&eacute;mico de 
    2016.</p>
  <p align="justify">&#8226; Seleccione el docente del cual desea realizar la 
    Evaluaci&oacute;n
    <select name="doc" id="doc">
      <option></option>
      <?php

//mysql_select_db("2011",$mysql);
$sql = "select nombre,cedula from datosp where programa = $id ORDER BY `datosp`.`nombre` ASC " ; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
$usuario=$row[cedula];
}  
   
	 ?>
    </select>
  </p>
  <p align="justify">&#8226; Dentro del aplicativo encontrara el formato de evaluaci&oacute;n 
    del jefe con los datos del docente al cual va a calificar</p>
  <p align="justify"><img src="datos1.JPG" width="874" height="133"> </p>
  <p>&#8226; A continuaci&oacute;n de estos datos encontrara los aspectos acad&eacute;micos 
    en los cuales el docente se pudo desempe&ntilde;ar dentro del periodo acad&eacute;mico, 
    eval&uacute;e estos aspectos teniendo como referencia la siguiente tabla</p>
  <table width="24%" border="2" align="center">
    <tr> 
      <td height="22"><div align="center">VALORACI&Oacute;N</div></td>
      <td height="22"><div align="center">PUNTOS</div></td>
    </tr>
  </table>
  <table width="24%" border="2" align="center">
    <tr> 
      <td width="61%">Excelente</td>
      <td width="39%">45-50</td>
    </tr>
    <tr> 
      <td>Sobresaliente</td>
      <td>40-44</td>
    </tr>
    <tr> 
      <td>Bueno</td>
      <td>35-39</td>
    </tr>
    <tr> 
      <td>Satisfactorio</td>
      <td>30-34</td>
    </tr>
    <tr> 
      <td>No satisfactorio</td>
      <td>0-29</td>
    </tr>
  </table>
  <p>&#8226; Al final del aplicativo encontrara un bot&oacute;n con los datos 
    del docente referente a la calificaci&oacute;n dada por los estudiantes en 
    el formato A y el numero de estudiantes que calificaron a dicho docente.</p>
  <p>&#8226; Los numerales que no correspondan con el desempe&ntilde;o docente, 
    no los diligencie, lo cual no altera el promedio.</p>
  <p>&#8226; Al terminar de diligenciar el formato debe dar clic en el bot&oacute;n 
    &quot;enviar&quot; para que la evaluaci&oacute;n del docente se guardada</p>
  <p> 
   <input type="hidden" name="cedula" value="<?php echo $cedula ; ?>" id="cedula">
    <input type="hidden" name="codigo" value="<?php echo $_POST['codigo'] ; ?>" id="usuario">
  </p>
  <p align="center"> 
    <input type="submit" name="Submit" value="ENTRAR">
  </p>
</form>


<?php 
}

?>


</form>
<?php 
if ($id == 84)
{
?>
<form action="notificacion.php" method="post">
  <p align="center">INSTRUCTIVO CREACION DE NOTIFIACIONES </p>
  <p>&nbsp;</p>
  <p>Apreciado(a) Cordinador(a) de evaluacion docente, este es el instructivo 
    a tener en cuenta para que realize la notificacion de la evaluacion docente 
    de los profesores para el segundo periodo acad&eacute;mico de 
    2018.</p>
  <p>Selecione un docente del cual desea realizar la notificacion del periodo 
    academico 2018-I</p>
  <p>*Selecione el docente 
    <select name="doc" id="doc">
      <option></option>
      <?php

include ("conexionfed.php");
$sql = "select nombre,cedula from datosp ORDER BY `datosp`.`nombre` ASC"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
$usuario=$row[usuario];
}     
?>
    </select>
  </p>
  <p>* Acontinuaci&oacute;n encontrara la notificacion del docente que usted seleciono 
    con todos los datos que este tenga</p>
  <p>*Para la impresion de de dicha notificacion en la barra principal en archivo 
    busque la opcion imprimir y elija la impresora de su preferencia</p>
  <p align="center"> 
    <input type="hidden" name="codigo" value="<?php echo $_POST['codigo'] ; ?>" id="usuario">
  </p>
  <p align="center"> 
    <input type="submit" name="Submit" value="NOTIFICACIONES">
  </p>
  <p align="left"> * <a href="validacion.php">Si desea ingresar algun dato de 
    click aqui Ingreso de datos</a></p>
</form>
<?php 
}
if ($id != 50 && $id != 51 && $id != 52 && $id != 53 && $id != 54 && $id != 22 && $id != 84 && $id != 10 && $id != 11 && $id != 12 && $id != 13 && $id != 14 && $id != 56 && $id != 15 )
{
echo '<script language="javascript">   alert("LOGIN INCORRECTO"); </script>';
}
?>


</body>
</html>
