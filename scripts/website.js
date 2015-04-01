$(document).ready(function()
{
	$( "#dialog_mail_support" ).hide();
	
	$("#pwdmail").click(function(){
		$("#result").append("La demande du changement de mot de passe a été effectuée.");
	});
	
	$("#supportmail").click(function(){
		var dialog, form;
		dialog = $( "#dialog_mail_support" ).dialog({
		      autoOpen: false,
		      height: 350,
		      width: 350,
		      modal: true,
		      buttons: {
			    	 "Valider": function()
			    	 {
			    		 var objet = $("#objet").val();
			    		 var message = $("#message").val();
			    		 $("#result").append("Le mail a été envoyé au support.");
			    		 dialog.dialog( "close" );
			    	 },
			        Cancel: function() {
			          dialog.dialog( "close" );
			        }
			      },
			      close: function() {
			        form[ 0 ].reset();
			      }
			    });
		
		form = dialog.find( "form" ).on( "submit", function( event ) {
		      event.preventDefault();
		    });
		
		dialog.dialog( "open" );
	});
});