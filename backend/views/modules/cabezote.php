<!--=====================================
 CABEZOTE
======================================-->

<div id="cabezote" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

		<ul>
			<li  style="background: #333">
				<a href="mensajes" style="color: #fff">
      			<i class="fa fa-envelope"></i>
      			<span>1</span>
    			</a>
			</li>

			<li  style="background: #333">
				<a href="suscriptores" style="color: #fff">
      			<i class="fa fa-bell"></i>
      			<span>1</span>
    			</a>
			</li>

		</ul>

	</div>

	<div id="time" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">


	<div style="text-align:center; font-weight:bold;">	<script type="text/javascript">
//<![CDATA[
function makeArray() {
for (i = 0; i<makeArray.arguments.length; i++)
this[i + 1] = makeArray.arguments[i];}
var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
var date = new Date();
var day = date.getDate();
var month = date.getMonth() + 1;
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
document.write("Hoy es "+day+" de "+months[month]+" del "+year);
//]]>
</script></div>
<div id="fecha" style="text-align:center; font-weight:bold;"></div>
<script type="text/javascript">
function startTime(){
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('reloj').innerHTML="La hora es "+h+":"+m+":"+s;
t=setTimeout('startTime()',500);}
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();}
</script>
<div id="reloj" style="text-align:center; font-weight:bold;"></div>


	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">

		<img src="views/images/photo.jpg" class="img-circle">

		<p id="member"><?php echo $_SESSION["usuario"];?> <span class="fa fa-chevron-down"></span>
			<br>
			<ol id="admin">
				<li><a href="perfil.html"><span class="fa fa-user"></span>Editar Perfil</a></li>
				<li><a href=""><span class="fa fa-file-text"></span>Términos y Condiciones</a></li>
				<li><a href="salir"><span class="fa fa-times"></span>Salir</a></li>
			</ol>

		</p>

	</div>

</div>

<!--====  Fin de CABEZOTE  ====-->
