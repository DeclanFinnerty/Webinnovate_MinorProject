//Store the userName and county into local storage
	function storeUsrLocaly()
		{
			var userNameInput= document.getElementById("userName");
			localStorage.setItem("userName", userNameInput.value);


			var countyInput= document.getElementById("userCounty");
			localStorage.setItem("userCounty", countyInput.value);

			alert("UserName: " + localStorage.getItem("userName") + "  County: "  + localStorage.getItem("userCounty") );
		}