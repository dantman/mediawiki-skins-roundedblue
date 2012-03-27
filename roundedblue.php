<?php
/**
 * Rounded Blue skin
 *
 * @file
 * @ingroup Skins
 * @author Jennifer Elrod
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Rounded Blue',
	'url' => "https://www.mediawiki.org/wiki/Skin:Rounded_Blue",
	'author' => 'Jennifer Elrod',
	'descriptionmsg' => 'roundedblue-desc',
);

$wgValidSkinNames['roundedblue'] = 'RoundedBlue';
$wgAutoloadClasses['SkinRoundedBlue'] = dirname(__FILE__).'/RoundedBlue.skin.php';
$wgExtensionMessagesFiles['RoundedBlue'] = dirname(__FILE__).'/RoundedBlue.i18n.php';
