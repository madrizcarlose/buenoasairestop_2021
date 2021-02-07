<!-- mixpanel-->
<script type="text/javascript">
function openPage(name_page) {
  //  alert(name_page);
	mixpanel.track(
		"Open Option Menu",
		{"Opcion Menu":name_page});
	window.open(name_page,"_self");
}

function showList(categorie) {
var root_page = "listsites.php?categoria=";
var name_page = root_page.concat (categorie);
name_page = name_page.concat ("&lat=");
name_page = name_page.concat(document.formulario.latt.value);
name_page = name_page.concat ("&lon=");
name_page = name_page.concat(document.formulario.lont.value);


alert(name_page);
	mixpanel.track(
		"Open Show List",
		{"Opcion List":categorie});
	    window.open(name_page,"_self");
}
</script>