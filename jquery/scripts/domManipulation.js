$(function() {
    
    $("ul.rouge li.pair").css("background-color", "#d1483e");
    
    $("ul.rouge li.impair").css("background-color", "#8c1007");

    
    $("ul.bleu li.pair").css("background-color", "#15b2a2");
    
    $("ul.bleu li.impair").css("background-color", "#2d4eaf");    
    
    
    $("ol li:nth-child(2)").addClass("vert");
    
    
    $("ol li").each(function(index) {
        
        let textContent = $(this).text();
        
        $(this).text(textContent.toUpperCase());
    });
    
    
    $("<li class=\"pair\">Quatrième élément de la liste rouge</li>").appendTo($("ul.rouge"));
    
    $("<li>Elément 0 de la liste numérotée</li>").prependTo($("ol"));
    
});