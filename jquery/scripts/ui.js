$(function() {
    
    $("#menu").menu();

    $("#accordeon").accordion();
    
    $("#datepicker").datepicker({
        dateFormat: "yy-mm-dd"
    });
    
    $("#dialog").dialog({ 
        autoOpen: false 
    });
    
    $("#opener").click(function() {
        $("#dialog").dialog("open");
    });
});