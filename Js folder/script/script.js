$(function(){
    $("img").click(function(){
        var cv = $(this).attr("src");
        if(cv == "img/bulb-off.jpg"){
            $(this).attr('src', 'img/bulb-on.jpg');
        }
        else{
            $(this).attr('src', 'img/bulb-off.jpg');
        }
    });
    // $(".name").keyup(function(){
    //     $(this).val($(this).val().toUpperCase());
    // });
    $('.name').keyup(function(){
        this.value = this.value.toUpperCase();
    });
    // function addnumber(){
    //     var num1 = parseInt.$("num1").value();
    //     var num2 = parseInt.$("num2").value();
    //     var result = num1+num2;
    //     $(".sum").innerHTML = result;
    //     }
    $("#num1").keyup(function()
    {
        var num1 = $(this).val();
        var num2 = $(this).val();
        var res = parseInt(num1) + parseInt(num2);
        $("#sum").val(res);
        $("#sum").val.parseInt($("#num1").val()) + parseInt($("#num2").val())
    })
    $("#num2").keyup(function()
    {
        var num1 = $(this).val();
        var num2 = $(this).val();
        var res = parseInt(num1) + parseInt(num2);
        $("#sum").val(res);
    })


    
});
