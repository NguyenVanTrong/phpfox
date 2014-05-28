<?php
class Follow_Service_Follow extends Phpfox_Service
{
    public function __contruct(){
        $this->_sTable = Phpfox::getT('follow');
    }

    public function checkFollow($iuserId,$iuserIdFollow)
    {
        $aResult = $this->database()->select('*')
            ->from(Phpfox::getT('follow'))
            ->where('user_id =' . $iuserId . ' AND user_id_follow = ' .$iuserIdFollow)
            ->execute('getRows');

        if(empty($aResult)) return true;
        return false;
    }

    public function followUser($iuserId, $iuserIdFollow)
    {

        $blsisFollow = $this->checkFollow($iuserId, $iuserIdFollow);
        if($blsisFollow){
            return $this->database()->insert(Phpfox::getT('follow'), array(
                    'user_id' => $iuserId,
                    'user_id_follow' => $iuserIdFollow
                )
            );
        }
    }

    public function unfollowUser($iuserId, $iuserIdFollow)
    {
        $blsisFollow = $this->checkFollow($iuserId, $iuserIdFollow);
        if(!$blsisFollow){
            return $this->database()->delete(Phpfox::getT('follow'), 'user_id = '. $iuserId . ' AND user_id_follow = '. $iuserIdFollow);
        }
    }

    public function listFollowUser(){
        return $this->database()->select('*')
            ->from('follow')
            ->execute('getRows');
    }

    public function get($iUserId){
        $aUserIdFollows = $this->database()->select('user_id_follow')
            ->from(Phpfox::getT('follow'))
            ->where('user_id = '.$iUserId)
            ->execute('getRows');
        $aResult = array();
        foreach ($aUserIdFollows as $iKey => $aRow){
            foreach ($aRow as $key => $value) {
                $aResult[] = Phpfox::getService('user')->getInfoUser($value);
            }
        }
        return $aResult;
    }
}
?>