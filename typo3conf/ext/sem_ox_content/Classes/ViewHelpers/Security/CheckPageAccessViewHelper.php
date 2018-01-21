<?php
namespace Media711\SemOxContent\ViewHelpers\Security;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * ViewHelper checks if page should be output for current log in user, different of group ids
 *
 * Class CheckPageAccessViewHelper
 * @package Media711\SemOxContent\ViewHelpers\Security
 */
class CheckPageAccessViewHelper extends AbstractViewHelper
{
    /**
     * @param string $pageFeGroups
     * @return boolean
     */
    public function render($pageFeGroups)
    {
        if (!isset($GLOBALS['TSFE']) || !$GLOBALS['TSFE']->loginUser) return false;

        return is_array($GLOBALS['TSFE']->fe_user->groupData['uid']) && $this->checkGroups($pageFeGroups);
    }

    /**
     * @param $pageFeGroups
     * @return bool
     */
    protected function checkGroups($pageFeGroups)
    {
        foreach (explode(',', $pageFeGroups) as $groupId) {
            if (in_array($groupId, explode(',', $GLOBALS['TSFE']->fe_user->user['usergroup']))) return true;
        }

        return false;
    }
}