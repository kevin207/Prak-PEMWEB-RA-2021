function tambah()
{
	var hasil= "<?php $user->tambah(); ?>";
	document.getElementById("hasil").innerHTML = hasil;
	document.getElementById("hasil").style.background = "white";
}

function kurang()
{
	var hasil= "<?php $user->kurang(); ?>";
	document.getElementById("hasil").innerHTML = hasil;
	document.getElementById("hasil").style.background = "white";
}

function kali()
{
	var hasil= "<?php $user->kali(); ?>";
	document.getElementById("hasil").innerHTML = hasil;
	document.getElementById("hasil").style.background = "white";
}

function bagi()
{
	var hasil= "<?php $user->bagi(); ?>";
	document.getElementById("hasil").innerHTML = hasil;
	document.getElementById("hasil").style.background = "white";
}