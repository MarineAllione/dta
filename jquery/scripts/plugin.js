$(function () {

    $("#wColorPicker").wColorPicker({
        
        color: '#FF00FF',
        
        onSelect: function(color){
            
            $("#wColorPicker_input").css("background", color).val(color);
            
            $("body").css('background', color);
        },
        
        onMouseover: function(color){
            $("#wColorPicker_input").css("background", color).val(color);
        },
        
        onMouseout: function(color){
            $("#wColorPicker_input").css("background", color).val(color);
        }
    });
});