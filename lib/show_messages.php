<?php
function ShowMessages()
{

    if ( ! $_SESSION["head_printed"] ) BasicHead();

    //weergeven messages
    if ( count($_SESSION["msg"]) > 0 )
    {
        foreach( $_SESSION["msg"] as $message )
        {
            $row = array( "message" => $message );
            $templ = LoadTemplate("messages");
            print ReplaceContentOneRow( $row, $templ );
        }

        unset($_SESSION['msg']);
    }
}