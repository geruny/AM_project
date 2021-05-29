(function ($) {
    $(document).ready(function () {

        $(".cardHref").click(function () {

            let cardValue = $(this).attr("value");
            $("#selectPlan option[value='" + cardValue + "']").prop("selected", true).change();
        });

        $("#rangSquare").slider({

            animate: "slow",
            min: 10,
            max: 500,
            value: 100,
            slide: function (event, ui) {
                $("#rangSquareValue").attr("value", ui.value).change();
            }
        });
        $("#rangSquareValue").attr("value", $("#rangSquare").slider("value"));
        SetPrice();

        $("#selectPlan").change(function () {
            $("#rangSquareValue").change();
        });

        $("#rangSquareValue").change(function () {
            SetPrice();
        });
    });

    function SetPrice() {
        let plan = $("#selectPlan").val();
        let square = $("#rangSquareValue").attr("value");
        $("#output-price").val(square * plan);
    }

})(jQuery);