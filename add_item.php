<?php
require_once "PDOConnector.php";
require_once "functionHub.php";
session_start();

$_SESSION[]

?>

<script> 
    countItem = 0;
    $(document).ready(
        function(){
            window.console && console.log('Document ready called.');
            $('addPeriod').click(
                function(event){
                    event.preventDefault();
                    if(countItem >= maxNum){
                        alert("Items being added reach maximum limit.");
                        return;
                    }
                    countItem++;
                    window.console && console.log("Adding item " + countItem);
                    $('itemFields').append();
                }
            );
        }
    );
</script>