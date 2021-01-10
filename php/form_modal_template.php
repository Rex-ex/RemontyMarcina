<?php
$msg_mailDone = "e-mail został wysłany dziękujemy";
$msg_mailFail = "błąd w wysłaniu e-maila";
$msg_error = "błąd w formularzu. spróbuj innej formy kontaktu";

function showModal($msg){
echo "<div class='modal' id='myModal' data-toggle='modal' data-target='#myModal>'>";
echo "<div class='modal-dialog'>";
echo "<div class='modal-content'>";
echo "<div class='modal-header'>";
echo "<h4 class='modal-title'>Remonty Marcina</h4>";
echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
echo "</div>";
echo "<div class='modal-body'>";
echo "<p>$msg</p>";
echo "</div>";
echo "<div class='modal-footer'>";
echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>zamknij</button>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo '<script>$(document).ready(function(){$("#myModal").modal("show");});</script>';
}

?>
