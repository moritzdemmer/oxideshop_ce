<?php
/**
 * Zend Coding Standard.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   CVS: $Id: ZendCodingStandard.php 267648 2008-10-23 04:52:05Z squiz $
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * OXID Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Lars Jankowfsky <lars@oxid-esales.com>
 * @copyright 2007 OXID eSales AG
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 1.2.2
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_Oxid_OxidCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{

   /**
     * Return a list of external sniffs to include with this standard.
     *
     * The Oxid standard uses some PEAR sniffs.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
        return array(
                'Generic/Sniffs/PHP/LowerCaseConstantSniff.php',
                'Generic/Sniffs/Functions/OpeningFunctionBraceBsdAllmanSniff.php',
                'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
                'Generic/Sniffs/WhiteSpace/DisallowTabIndentSniff.php',
                'PEAR/Sniffs/Classes/ClassDeclarationSniff.php',
                'PEAR/Sniffs/Commenting/InlineCommentSniff.php',
                'PEAR/Sniffs/Commenting/FunctionCommentSniff.php',
                'PEAR/Sniffs/Files/IncludingFileSniff.php',
                'PEAR/Sniffs/Files/LineEndingsSniff.php',
                'PEAR/Sniffs/Functions/FunctionCallArgumentSpacingSniff.php',
                //'PEAR/Sniffs/Functions/FunctionCallSignatureSniff.php',
                'PEAR/Sniffs/Functions/ValidDefaultValueSniff.php',
                'PEAR/Sniffs/WhiteSpace/ScopeClosingBraceSniff.php',
                'Squiz/Sniffs/Functions/GlobalFunctionSniff.php',
                'Zend/Sniffs/Files/ClosingTagSniff.php',
               );
    }

    /**
     * Return a list of external sniffs to exclude from this standard.
     *
     * @return array
     */
    public function getExcludedSniffs()
    {
        return array(
            'Oxid/Sniffs/VersionControl/SubversionPropertiesSniff.php',
            'Oxid/Sniffs/Functions/FunctionCallSignatureSniff.php',
        );
    }

}//end class
?>
