var Account = {
    Name : "Noman",
    Balance : 99999,
    Currency : "PKRS",
    IBAN : "PKN1234567"
};

var date = new Date();
var Transactionobj = {
	month: date.getMonth(), 
	day: date.getDate(), 
	year: date.getFullYear(), 
	hour: date.getHours(), 
	minute: date.getMinutes(), 
	second: date.getSeconds()
};



 var months = ["January", "February", "March", "April", "May", "June", "July" , "August","September","October","November","December"];

function display_account_details()
{
    document.getElementById("title").innerText = Account.Name; 
    document.getElementById("balance").innerText = Account.Balance; 
    document.getElementById("currency").innerText = Account.Currency; 
	document.getElementById("IBAN").innerText = Account.IBAN;
}
display_account_details();

function deposit(key)
{
	var box = document.getElementById("deposit");
	document.getElementById("deposit-msg").innerText = "";
	if(key.keyCode == 13)
	{
		if(isNaN(box.value) || box.value <= 0)
		{
			document.getElementById("deposit-msg").innerText = "Enter a Valid Amount";
			document.getElementById("deposit-msg").style.color = "Red";
			box.value = "";
			return;	
		}

		Account.Balance += parseInt(box.value);
		display_account_details();
	
		var table = document.getElementById('transaction-table');
		table.innerHTML += '<tr><td>' + months[Transactionobj.month] + " " + Transactionobj.day + ", " + Transactionobj.year + " " + Transactionobj.hour + ":" + Transactionobj.minute + ":"  + Transactionobj.second + '</td><td>'+ "Credit" +'</td><td>'+ box.value +'</td></tr>';
		box.value = "";
	}
	else
		return;
}

function withDraw(key)
{
	var box = document.getElementById("withdraw");
	document.getElementById("withdraw-msg").innerText = "";
	if(key.keyCode == 13)
	{
		if(isNaN(box.value))
		{
			document.getElementById("withdraw-msg").innerText = "Enter a Valid Amount";
			document.getElementById("withdraw-msg").style.color = "Red";
			box.value = "";
			return;	
		}

		if(box.value <= 0)
		{
			document.getElementById("withdraw-msg").innerText = "Don't have suffient amount in account";
			document.getElementById("withdraw-msg").style.color = "Yellow";
			box.value = "";
			return;	
		}

		Account.Balance -= parseInt(box.value);
		display_account_details();
	
		var table = document.getElementById('transaction-table');
		table.innerHTML += '<tr><td>' + month[Transactionobj.month] + " " + Transactionobj.day + ", " + Transactionobj.year + " " + Transactionobj.hour + ":" + Transactionobj.minute + ":"  + Transactionobj.second + '</td><td>'+ "Debit" +'</td><td>'+ box.value +'</td></tr>';
		box.value = ""; 
	}
	else
		return;
}

