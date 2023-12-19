<!DOCTYPE html>
<html lang="en">

<head>
<title>Frootle India Official</title>
<?php include_once("header-css.php");?>
</head>

<body>

    <?php include_once("header.php");?>
    <div class="desk_view">
                <a href=""><img src="images/Solution/1.1-Frootle-Banner.jpg?ver=2.0" style="width: 100%;" /></a>
            </div>

            <div class="m_view">
                <a href=""><img src="images/Solution/1.2-Frootle-Banner.jpg?ver=2.0" style="width: 100%;" /></a>
            </div>
    <div class="newsletter" id="newsletter">
        <div class="container">
            <h2 class="text-uppercase font-weight-bold mb-3 text-center">Contact Us</h2>

            <form id="contact_form" name="contact_form" method="post">
                <div class="form">
                    <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Name :</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Name" name="Name" value="" required
                                placeholder="Name" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email_ID" class="col-sm-2 col-form-label">Email ID :</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Email_ID" name="Email_ID" required
                                placeholder="Email ID" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email_ID" class="col-sm-2 col-form-label">Contact No. :</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Contact_No" name="Contact_No" required
                                placeholder="Contact No." />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email_ID" class="col-sm-2 col-form-label">Company Name :</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Company_Name" name="Company_Name" required
                                placeholder="Company Name" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email_ID" class="col-sm-2 col-form-label">Description :</label>

                        <div class="col-sm-10">
                            <textarea id="Description" name="Description" class="form-control" required
                                placeholder="Description"></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <div id="button_div" style="display: block;">
                            <button type="button" class="btn btn-default text-uppercase news-btn" id="submit_btn"
                                name="submit_btn">Submit</button>
                        </div>
                        <div id="ajax_loader" style="display: none;"><img src="images/loader.gif"
                                style="height: 80px;" /></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr />


    <?php include_once("footer.php");?>

    

    <script type="text/javascript">
    $(document).ready(function() {
        $("#submit_btn").click(function() {
            //e.preventDefault();
            $("#button_div").hide();
            $("#ajax_loader").show();
            var Name = $("#Name").val();
            var Email_ID = $("#Email_ID").val();
            var Contact_No = $("#Contact_No").val();
            var Company_Name = $("#Company_Name").val();
            var Description = $("#Description").val();
            //$("#returnmessage").empty(); // To empty previous error/success message.
            // Checking for blank fields.
            if (Name == "" || Email_ID == "" || Contact_No == "" || Company_Name == "" || Description ==
                "") {
                alert("Please Fill Required Fields");
            } else {
                // Returns successful data submission message when the entered information is stored in database.
                //alert("Message");
                $.ajax({
                    type: "post",
                    url: "contact_form.php",
                    data: "Name=" + Name + "&Email_ID=" + Email_ID + "&Contact_No=" +
                        Contact_No + "&Company_Name=" + Company_Name + "&Description=" +
                        Description,
                    success: function(data) {
                        if (data.trim() == "Success") {
                            $("#contact_form")[0]
                                .reset(); // To reset form fields on success.
                            swal("Completed", "Message Sent", "success");
                            $("#button_div").show();
                            $("#ajax_loader").hide();
                        }
                    },
                });
            }
        });
    });
    </script>
</body>

</html>