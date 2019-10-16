jQuery(document).ready(function($) {
    
    $('#stdforn').on('submit',function(e){
        e.preventDefault();
        // asign inputs value to variables
        var var_sname = $('#sname').val();
        var var_age = $('#age').val();
        var var_dep = $('#dep').val();
        // call php function using AJAX Jquery
        $.ajax({
            type: 'get',
            url: $('#rel_pass').val() + '/stdAdd.php',
            data: {sname:var_sname, age:var_age, dep:var_dep},
            success: function (data) {
                // if succsess
                console.log(data);
            },
            error: function (msg) {console.log('error');}
        });
    })

});