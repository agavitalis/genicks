$(document).ready(function(){

    $('.change-status').click(function(e) {
        e.preventDefault();
    
        let id = $(this).data("id");
        let status =  $(this).data("status");
      
        swal("The status of this request will be changed to '"+ status +"'", {
            icon: "warning",
            buttons: {
              cancel: "No Don't Change!",
              delete: {
                text: "Update Status!",
                value: "Change",
              }
            },
        })
        .then((value) => {
          switch (value) {
    
            case "Change":
    
                $.ajax({
                    type: 'post',
                    url: '/manage_contacts',
                    data: {
                    '_token': $('input[name=_token]').val(),
                    'status': status,
                    'id':id,
                    },
                    success: function (data) {
                       
                        swal("Gotcha!", "Status successfully updated!", "success");
                        //refresh the page 
                        setTimeout(function () {
                            location.reload();
                        }, 2000)
                    },
                    error: function (data) {
                        console.log(data)
                    },

                });
              break;
    
            default:
              swal("Gotcha", "Got away safely!", "info");
          }
        });
    
    })

    $('.delete-contact').click(function(e) {
        e.preventDefault();
    
        let id = $(this).data("id");
            
        swal("This request will be deleted??", {
            icon: "warning",
            buttons: {
              cancel: "No Don't Delete!",
              delete: {
                text: "Yes Delete!",
                value: "Delete",
              }
            },
        })
        .then((value) => {
          switch (value) {
    
            case "Delete":
    
                $.ajax({
                    type: 'post',
                    url: '/admin_delete_contact',
                    data: {
                    '_token': $('input[name=_token]').val(),
                    'id':id,
                    },
                    success: function (data) {
                       
                        swal("Gotcha!", "Request successfully deleted!", "success");
                        //refresh the page 
                        setTimeout(function () {
                            location.reload();
                        }, 2000)
                    },
                    error: function (data) {
                        console.log(data)
                    },

                });
              break;
    
            default:
              swal("Gotcha", "Got away safely!", "info");
          }
        });
    
    })
    
  })
  
    
    
    