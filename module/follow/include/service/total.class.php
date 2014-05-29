<?php
class Follow_Service_Total extends Phpfox_Service
{
    public function __construct()
    {
        $this->_sTable = Phpfox::getT('follow');
    }

    public function getTotalFollow($iUserId)
    {
        return (int) $this->database()->select('COUNT(*)')
            ->from($this->_sTable)
            ->where('user_id = ' . (int) $iUserId )
            ->execute('getSlaveField');
    }
}

?>