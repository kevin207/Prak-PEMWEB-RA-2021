function factorial()
{
	number = document.getElementById("number").value;
	result = 1;
	a = "Faktorial dari "
	b = " adalah "

	for (counter=1; counter<=number; counter++)
	{
		result = result * counter;
	}
	
	if (number == "")
	{
		document.getElementById("faktor").innerHTML = "";
	}

	else
	{
		document.getElementById("faktor").innerHTML = a + number + b + result;
	}
	
}

function themes()
{
	x = document.getElementById("themes").value;

	if(x == "light")
	{
		document.body.style.backgroundColor = "white";
		document.body.style.color = "Black";
	}

	else if(x == "dark")
	{
		document.body.style.backgroundColor = "Black";
		document.body.style.color = "White";
	}

	else if(x == "silver")
	{
		document.body.style.backgroundColor = "silver";
		document.body.style.color = "gold";
	}



}

function words()
{
	x = document.getElementById("words").value;

	if(x == "sorrow")
	{
		document.getElementById("kata").innerHTML = "Sorrow is a feeling of immense sadness, like the sorrow you would feel if your best friend suddenly moved across the country.";
	}

	else if(x == "redemption")
	{
		document.getElementById("kata").innerHTML = "Redemption involves the return of mutual fund shares or the return of money invested in a fixed-income security when it matures.";
	}

	else if(x == "sillouhette")
	{
		document.getElementById("kata").innerHTML = "Sillouhette is the image of a person, animal, object or scene represented as a solid shape of a single colour, usually black, with its edges matching the outline of the subject.";
	}

	else if(x == "immortal")
	{
		document.getElementById("kata").innerHTML = "Immortality is the ability to live forever, or eternal life";
	}

	else
	{
		document.getElementById("kata").innerHTML = "";
	}
}



