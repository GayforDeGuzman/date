
function validate(){
    $("#usr").removeClass("is-invalid")
    $("#pwd").removeClass("is-invalid")
    $("#pwd2").removeClass("is-invalid")

    var usr = $("#usr").val();
    var pwd = $("#pwd").val();
    var pwd2 = $("#pwd2").val();

    if (pwd.length < 6){
        $("#pwd").addClass("is-invalid")
        $("#pwd-feedback").html("Please enter at least 6 characters.")
        return
    }
    if (pwd != pwd2){
        $("#pwd2").addClass("is-invalid")
        return
    }

    //TODO: on type update
    $.post("/date/assets/php/register.php", {usr:usr, pwd:pwd}, function(data){
        var response = jQuery.parseJSON(data);
        if (response.status != 0){
            $("#usr").addClass("is-invalid")
            $("#usr-feedback").html("Nickname already been used!")
            return
        }else{
            window.location = "/date/register.html"
        }
    });
}