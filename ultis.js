$('#ajout').on("keyup", function(e){
    if(e.keyCode == 13 && $('#ajout').val() != ""){
        var tache = $("<div class='tache'></div>").text($('#ajout').val());
        var supp = $("  <i class='fas fa-trash-alt'></i>").click(function(){
            var t = $(this).parent();
            t.fadeOut(function(){
                t.remove();
            });
        });
        var fini = $("<i class='fas fa-check'></i>").click(function(){
        
        var t = $(this).parent();
        t.fadeOut(function () {
         $('#fini').append(t);
         t.fadeIn();
        });
        $(this).remove();
    });
        
        tache.append(supp,fini);
        $('.nouvelle_tache').append(tache);
        $('#ajout').val("");
    }
});