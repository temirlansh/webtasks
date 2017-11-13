function changeImage(event) {
	var src = event.currentTarget.src;
	var n = document.createElement("img");
	n.src = src;
	var b = document.getElementById("bigImage").childNodes[1];
	document.getElementById("bigImage").replaceChild(n, b);
}