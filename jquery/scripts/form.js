$(function() {

    let promptNom = prompt("Quel est votre nom ?");
    
    $("#nom").val(promptNom);
    
    
    $("#envoyer").click(function(e) {
        
        e.preventDefault();
        
        let inputPass = $("#pass").val();
    
        let inputPassConfirm = $("#passConfirm").val();

        if (inputPass != inputPassConfirm) {

            alert("Passwords non identiques !");
        }
        else {
            alert("Passwords identiques !");
        }
    });    
});