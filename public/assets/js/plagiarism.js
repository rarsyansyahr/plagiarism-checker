$(document).ready(function (e) {
    $(".btn-get-started, #btn-again, #link-plagiarism").on(
        "click",
        function () {
            $("#document1").val(null);
            $("#document2").val(null);

            $(".alert-danger").hide();

            $("#plagiarism-form").show(300);
            $("#loading-plagiarism").hide(300);

            $("#result").hide(300);
            $("#plagiarism").show(300);
        }
    );

    $("#document1, #document2").on("change", function () {
        let document = $(this).val(),
            extension = document.split(".").pop();

        if (extension != "pdf") {
            alert("File atau dokumen hanya boleh berformat pdf..");
            $(this).val(null);
        } else {
            let doc1 = $("#document1").val(),
                doc2 = $("#document2").val();

            if (doc1 != null && doc2 != null && doc1 == doc2) {
                alert("File atau dokumen tidak boleh sama..");
                $(this).val(null);
            }
        }
    });

    $("#plagiarism-form").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            url: "plagiarism",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $(".alert-danger").hide();
                $("#plagiarism-form").hide(300);
                $("#loading-plagiarism").show(300);

                setTimeout(console.log("Process"), 2000);
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
                let errors = err.responseJSON.errors;

                console.log(err, errors);

                if(errors != null) {
                    $("#list-errors").empty();

                    if('document1' in errors) {
                        console.log(errors.document1);

                        for(i in errors.document1) {
                            $("#list-errors").append(`<li>${errors.document1[i]}</li>`);
                        }
                    }
    
                    if('document2' in errors) {
                        console.log(errors.document2);

                        for(i in errors.document2) {
                            $("#list-errors").append(`<li>${errors.document2[i]}</li>`);
                        }
                    }
                } else {
                    console.log(errors);

                    $("#list-errors").empty();
                    $("#list-errors").append(JSON.stringify(errors));
                }

                $(".alert-danger").show();

                $("#loading-plagiarism").hide(300);
                $("#plagiarism-form").show(300);                
            },
        });
    });
});
