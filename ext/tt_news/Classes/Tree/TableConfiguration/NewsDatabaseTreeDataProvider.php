<?php

namespace RG\TtNews\Tree\TableConfiguration;

use RG\TtNews\Database\Database;
use RG\TtNews\Utility\Div;
use TYPO3\CMS\Core\Authentication\BackendUserAuthentication;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider;


/**
 * TCA tree data provider
 */
class NewsDatabaseTreeDataProvider extends DatabaseTreeDataProvider
{
    /**
     * Gets node children
     *
     * @param \TYPO3\CMS\Backend\Tree\TreeNode $node
     * @param int                              $level
     *
     * @return NULL|\TYPO3\CMS\Backend\Tree\TreeNodeCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    protected function getChildrenOf(\TYPO3\CMS\Backend\Tree\TreeNode $node, $level)
    {
        $allowedItems = $this->getBeUser()->getTSConfig()['tt_newsPerms.']['tt_news_cat.']['allowedItems'];

        $allowedItems = $allowedItems ? \TYPO3\CMS\Core\Utility\GeneralUtility::intExplode(',',
            $allowedItems) : Div::getAllowedTreeIDs();

        $storage = null;

        if ($node->getId() !== 0 && !in_array($node->getId(), $allowedItems)) {
            return $storage;
        }

        $nodeData = null;
        if ($node->getId() !== 0) {
            $nodeData = Database::getInstance()->exec_SELECTgetSingleRow('*', $this->tableName,
                'uid=' . $node->getId());
        }

        if ($nodeData == null) {
            $nodeData = [
                'uid' => 0,
                $this->getLookupField() => ''
            ];
        }

        $children = $this->getRelatedRecords($nodeData);
        if (empty($children)) {
            return $storage;
        }

        /** @var $storage \TYPO3\CMS\Backend\Tree\TreeNodeCollection */
        $storage = GeneralUtility::makeInstance(\TYPO3\CMS\Backend\Tree\TreeNodeCollection::class);
        foreach ($children as $child) {
            $node = GeneralUtility::makeInstance(\TYPO3\CMS\Backend\Tree\TreeNode::class);

            if (!in_array($child, $allowedItems)) {
                continue;
            }

            $node->setId($child);

            if ($level < $this->levelMaximum) {
                $children = $this->getChildrenOf($node, $level + 1);

                if ($children !== null) {
                    $node->setChildNodes($children);
                }
            }

            $storage->append($node);
        }

        return $storage;
    }

    /**
     * @return BackendUserAuthentication
     */
    protected function getBeUser()
    {
        return $GLOBALS['BE_USER'];
    }
}
