<?php

/* clear phone number */

function phone_clear($phone_num){
    $phone_num = preg_replace("![^0-9]+!",'',$phone_num);
    return($phone_num);
}

/* excerpt */

add_filter( 'excerpt_length', function(){
    return 20;
} );

add_filter( 'excerpt_more', function( $more ) {
    return '...';
} );



