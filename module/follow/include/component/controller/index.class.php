<?php
class Follow_Component_Controller_Index extends Phpfox_Component
{
    public function process(){
        Phpfox::getService('follow')->followUser(2,1);
        die("done!");
    }
}

?>