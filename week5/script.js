function deterOn(){
	var s11 = parseInt(document.querySelector("#s11").value);
	var s12 = parseInt(document.querySelector("#s12").value);
	var s13 = parseInt(document.querySelector("#s13").value);
	var s21 = parseInt(document.querySelector("#s21").value);
	var s22 = parseInt(document.querySelector("#s22").value);
	var s23 = parseInt(document.querySelector("#s23").value);
	var s31 = parseInt(document.querySelector("#s31").value);
	var s32 = parseInt(document.querySelector("#s32").value);
	var s33 = parseInt(document.querySelector("#s33").value);

	var deter = s11 + s12 +s13 -s31 -s32 -s33;

	document.querySelector("#result").innerHTML = deter;

}