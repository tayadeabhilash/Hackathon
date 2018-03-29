<?php

echo "<script>firebase.auth().signOut().then(function(){window.location='login.html';}).catch(function(error) {window.alert('Error : ' + errorMessage);});</script>";


?>
