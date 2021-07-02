$(document).ready(function (e) {
    $(".btn-get-started").on("click", function () {
        $("#plagiarism").show(300);
        $("#result").hide(300);
    });

    $("#document1, #document2").on("change", function () {
        let document = $(this).val(),
            extension = document.split(".").pop();

        if (extension != "pdf") {
            alert("Dokumen hanya boleh berformat pdf..");
            $(this).val(null);
        } else {
            let doc1 = $("#document1").val(),
                doc2 = $("#document2").val();

            if (doc1 != null && doc2 != null && doc1 == doc2) {
                alert("File dokumen tidak boleh sama..");
                $(this).val(null);
            }
        }
    });

    $("#plagiarism-form").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            url: "/plagiarism",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                console.log("Prepare");
            },
            success: function (data) {
                console.log(data.result);

                let result = Number(data.result * 100);
                $("#txt-result").text(result.toFixed(2) + "%");

                $("#plagiarism").hide(300);
                $("#result").show(300);

                $("#document1").val(null);
                $("#document2").val(null);
            },
            error: function (err) {
                console.log(err);
            },
        });
    });
});
