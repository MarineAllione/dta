$(function() {

    $("#affiche").click(function() {
        
        // $("tr:even").show();
        
        // $("tr:even").show("slow");
        
        $("tr:even").fadeIn("slow");
        
        // $("tr:even").slideDown();
    }); 
    
    $("#cache").click(function() {
        
        // $("tr:even").hide();
        
        // $("tr:even").hide("slow");
        
        $("tr:even").fadeOut("slow");
        
        // $("tr:even").slideUp();
    });
});