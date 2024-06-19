$(document).ready(function () {
    $("#short-description").on("input", function () {
        var maxChars = 200;
        var currentLength = $(this).val().length;
        var charCount = $("#charCount");

        if (currentLength > maxChars) {
            $(this).val($(this).val().substring(0, maxChars));
            currentLength = maxChars;
        }

        charCount.text(currentLength + " / " + maxChars);
    });
});
