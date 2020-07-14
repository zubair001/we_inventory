<?php
	require_once('auth.php');
//    session_start();
   
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="resource/css/bootstrap.min.css">
        <link rel="stylesheet" href="resource/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="resource/css/style.css">

        <!-- SmartMenus core CSS (required) -->
        <link href="../inventory/resource/menu/css/sm-core-css.css" rel="stylesheet" type="text/css" />

        <!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
        <link href="../inventory/resource/menu/css/sm-blue/sm-blue.css" rel="stylesheet" type="text/css" />


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


 <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <script src="resource/js/jquery-3.1.1.min.js"></script>
        <script src="resource/js/bootstrap.min.js"></script>
        <script src="resource/js/moment.js"></script>
        <script src="resource/js/bootstrap-datetimepicker.min.js"></script>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>






        <title>Inventory System</title>

<!--        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>-->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".edit_tr").click(function() {
                    var ID = $(this).attr('id');
                    $("#first_" + ID).show();
                    $("#last_" + ID).hide();
                    $("#last_input_" + ID).show();
                }).change(function() {
                    var ID = $(this).attr('id');
                    var first = $("#first_input_" + ID).val();
                    var last = $("#last_input_" + ID).val();
                    var dataString = 'id=' + ID + '&price=' + first + '&qty_sold=' + last;
                    $("#first_" + ID).html('<img src="load.gif" />');


                    if (first.length && last.length > 0) {
                        $.ajax({
                            type: "POST",
                            url: "table_edit_ajax.php",
                            data: dataString,
                            cache: false,
                            success: function(html) {

                                $("#first_" + ID).html(first);
                                $("#last_" + ID).html(last);
                            }
                        });
                    } else {
                        alert('Enter something.');
                    }

                });

                $(".editbox").mouseup(function() {
                    return false
                });

                $(document).mouseup(function() {
                    $(".editbox").hide();
                    $(".text").show();
                });

            });

        </script>


        <!-- jQuery -->
<!--        <script type="text/javascript" src="../inventory/resource/menu/libs/jquery/jquery.js"></script>-->

        <!-- SmartMenus jQuery plugin -->
        <script type="text/javascript" src="../inventory/resource/menu/jquery.smartmenus.js"></script>

        <!-- SmartMenus jQuery init -->
        <script type="text/javascript">
            $(function() {
                $('#main-menu').smartmenus({
                    subMenusSubOffsetX: 1,
                    subMenusSubOffsetY: -2
                });
            });

        </script>


    </head>
