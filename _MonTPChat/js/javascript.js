function verifyMembers(){
console.log("passé");
	$.ajax({
		url:"getMembers.php", 
		success:function(data){
		
			
			
			var tab = JSON.parse(data);
			var liste = "";
			for(var i=0; i<tab.length; i++){
				liste = liste+(tab[i]+"</br>");
			}
			
			document.getElementById("listeUsers").innerHTML = liste;
			setTimeout(verifyMembers, 1000);
		}
	});
}
	
function verifyMessage(){
	$.ajax({
		url:"getMessage.php", 
		success:function(data){
		
				
			var tab = JSON.parse(data);
			var message = "";
			
			$.each(tab,function(i,val){
				message = message + val.nomUsager + "__" + val.message + "</br>";
				
			});
			
			document.getElementById("ecran").innerHTML = document.getElementById("ecran").innerHTML + message;
			
			setTimeout(verifyMessage, 3000);
		}
	});
}
	
//envoyer message 
function sendMessage(){
	var messages = $("#message").val();
	$.ajax({
		url:"envoieMessage.php", 
		type: 'POST',
		data: 'message=' + messages
	});
	document.getElementById("ecran").innerHTML = document.getElementById("ecran").innerHTML  + "me --> " + messages + "</br>";
	document.getElementById("message").value = '';
}

function envoyerMessage(event){
	if(event.keyCode == 13){
		sendMessage();
	}
	


}