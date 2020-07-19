/*==============================================================*/
// Genicks Quote Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#quoteForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });


    function submitForm(){

        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var phone_number = $("#phone_number").val();
        var service = $("#service").val();
        var description = $("#description").val();
       
        $.ajax({
            type: "POST",
            url: "/quote",
            data: {
                '_token': $('input[name=_token]').val(),
                "name" : name,
                "email" : email,
                "phone_number": phone_number,
                "service" : service,
                "description": description,
            },
            success : function(response){
                if (response == "success"){
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false,response);
                }
            }
        });
            
    }

    function formSuccess(){
        $("#quoteForm")[0].reset();
        submitMSG(true, "Message Submitted!, Our Sales Reps will get back to you soon")
    }

    function formError(){
        $("#quoteForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg){
        if(valid){
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict