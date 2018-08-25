$(document).ready(function() {

    $("form").on("submit", function(e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: './src/model/operation.php',
            data: $('form').serialize(),
            success: function(res, req) {
                alert(res);
            }
        });
    });

});