
function load_tablas (fechai,fechaf){
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("respuesta").innerHTML=xmlhttp.responseText;
		}
    }
    xmlhttp.open("GET","consultas/consulta_ventas_agencias.php?fechainicial="+fechai+"&fechafinal="+fechaf, true);
    xmlhttp.send();
}
