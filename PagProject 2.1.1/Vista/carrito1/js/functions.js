function addProduct(code, nom){
	var amount = document.getElementById(code).value;
	window.location.href = '?action=add&code='+code+'&amount='+amount+'&nom='+nom;
}
function deleteProduct(code){
	window.location.href = 'carritocompras.php?action=remove&code='+code;
}