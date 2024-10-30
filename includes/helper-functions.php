<?php

/* Check if color is hex or rgba and return the value */

function bb_bridge_color ( $color )
{
    if ( $color == '' || ! $color ) {
        return;
    }
    if ( false === strpos( $color, 'rgb' ) ) {
        return '#' . $color;
    } else {
        return $color;
    }
}