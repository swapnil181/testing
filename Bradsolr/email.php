<script type = "text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type = "text/javascript">
    function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
    
    function emailsubscribe(){
        if (!ValidateEmail($("#txtEmail").val())) {
            alert("Invalid email address.");
        }else {
            var postdata = {
                            "action": subscribe,
                            "email": email
                           };
             $.ajax({
                type: "POST",
                dataType: "json",
                data: postdata,
                url: "jobpost",
                error: function (data) {
                    alert('ERROR');
                },
                success: function (data) {
                  setTimeout(function () {
                    $('#myModal').modal('show');
                  }, 3000);
                }
             });
        }
    }
</script>