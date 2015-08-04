//Store the userName and county into local storage
function storeUsrLocaly()
	{
		var userNameInput= document.getElementById("inputName1");
		localStorage.setItem("inputName1", userNameInput.value);

		var countyInput= document.getElementById("inputCounty4");
		localStorage.setItem("inputCounty4", countyInput.value);
}