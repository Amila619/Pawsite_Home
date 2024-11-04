$(document).ready(function() {
    $(".card").hover(
        function() {
            $(this).css({
                "transform": "scale(1.02)",
                "box-shadow": "0 8px 16px rgba(0, 0, 0, 0.2)"
            });
        },
        function() {
            $(this).css({
                "transform": "scale(1)",
                "box-shadow": "none"
            });
        }
    );
});