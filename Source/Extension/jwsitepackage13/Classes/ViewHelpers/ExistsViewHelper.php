<?php

namespace JWeiland\Jwsitepackage13\ViewHelpers;

/*
 * This file is part of the FluidTYPO3/Vhs project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractConditionViewHelper;

/**
 * File/Directory Exists Condition ViewHelper.
 */
class ExistsViewHelper extends AbstractConditionViewHelper
{
    /**
     * Initialize arguments
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('file', 'string', 'Filename which must exist to trigger f:then rendering');
        $this->registerArgument('directory', 'string', 'Directory which must exist to trigger f:then rendering');
    }

    /**
     * This method decides if the condition is TRUE or FALSE. It can be overriden in
     * extending viewhelpers to adjust functionality.
     *
     * @param array<string,mixed>|null $arguments ViewHelper arguments to evaluate the condition for this ViewHelper, allows for
     *                         flexiblity in overriding this method.
     * @return bool
     */
    protected static function evaluateCondition(array $arguments = null): bool
    {
        $file = GeneralUtility::getFileAbsFileName($arguments['file']);
        $directory = $arguments['directory'];
        $evaluation = false;
        if (isset($arguments['file']) === true) {
            $evaluation = ((file_exists($file) || file_exists(Environment::getPublicPath() . '/' . $file)) && is_file($file));
        } elseif (isset($arguments['directory']) === true) {
            $evaluation = (is_dir($directory) || is_dir(Environment::getPublicPath() . '/' . $directory));
        }
        return $evaluation;
    }
}
