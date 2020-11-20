function input_check()
{
	const values = [
		document.querySelector('#class_code').value,
		document.querySelector('#student_id').value
	];

	if (values[0] == "" || values[1] == "")
	{
		document.getElementById("error_label").innerHTML = "Pola powyżej nie mogą być puste!";
		document.getElementById("submit_button").disabled = "disabled";
		console.log("sth is empty");
	}
	else
	{
		document.getElementById("error_label").innerHTML = "";
		document.getElementById("submit_button").enabled = "enabled";
		console.log("nothing is empty");
	}
}