<?php 
    $fullURL = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullURL, "login=failed") == true){
    echo '<style>#invalidCred{visibility: visible !important;}</style>';
    echo '<script>
    $(document).ready(function(){ 
        $("#invalidCred").show();
    });
    </script>';
    } 

    if(strpos($fullURL, "account=pass") == true){
    echo '<style>#accountCreated{visibility: visible !important;}</style>';
    echo '<script>
    $(document).ready(function(){ 
        $("#accountCreated").show();
    });
    </script>';
    } else {

    if(strpos($fullURL, "username=failed") == true){
    echo '<script>
    $(document).ready(function(){ 
        $("#flip").prop("checked", true);
    });
    </script>';
    echo '<style>#invalidUser{visibility: visible !important;}</style>';
    } 

    
    if (strpos($fullURL, "password=failed") == true){
        echo '<script>
        $(document).ready(function(){ 
            $("#flip").prop("checked", true);
            $("#invalidPass").show();
        });
        </script>';
        echo '<style>#invalidPass{visibility: visible !important;}</style>';
    } 

    if(strpos($fullURL, "confirm=failed") == true && strpos($fullURL, "password=failed") == false){
    echo '<script>
    $(document).ready(function(){ 
        $("#flip").prop("checked", true);
    });
    </script>';
    echo '<style>#invalidPassword{visibility: visible !important;}</style>';
    } 

    if (strpos($fullURL, "search=noresults") == true) {

        echo '<style>#noResults{visibility: visible !important;}</style>';
        echo '<script>
        $(document).ready(function(){ 
            $("#noResults").show();
        });
        </script>';
    }
}
    
?>