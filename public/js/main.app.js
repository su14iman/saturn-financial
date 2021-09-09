$(document).ready(function(){

    // jQuery methods go here...


    // alert('jquery working');


});


function menuFunc(page){
    if(page == 1){
        $("#page1").css("display", "block");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        console.log('page 1 loaded ..');
    }else if(page == 2){
        $("#page1").css("display", "none");
        $("#page2").css("display", "block");
        $("#page3").css("display", "none");
        console.log('page 2 loaded ..');
    }else if(page == 3){
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "block");
        console.log('page 3 loaded ..');
    }else{
        alert('Err .. ');
    }
}


function InsertFunc() {
    // alert('Hello ');
    var Title = $("#InsertTitleF").val();
    var Note = $("#InsertNoteF").val(); // is null ..
    var Value = $("#InsertValueF").val();
    var Type = $("#InsertTypeF").val();

        if(Title !=='' && Value !=='' && Type !=='' ){
            if(Note == ''){
                Note = '-';
            }
            $.post("insert",{'title':Title,'note':Note,'value':Value,'type':Type},function(c){
                if(c.AddNewTreatment.stauts == 'ok'){
                    $("#InsertTitleF").val('');
                    $("#InsertNoteF").val(''); // is null ..
                    $("#InsertValueF").val('');
                }else{
                  alert('has be error .. ');
                }
            },'json');


        }else{
            alert('error');
        }

}



/**
 * InsertTitleF
 * InsertNoteF
 * InsertValueF
 * InsertTypeF
 * InsertSubmitF
 *
 * **/