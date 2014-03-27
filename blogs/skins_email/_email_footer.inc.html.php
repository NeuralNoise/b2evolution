<?php
/**
 * This is included into every email to provide footer text, including a quick unsubscribe link.
 *
 * For more info about email skins, see: http://b2evolution.net/man/themes-templates-skins/email-skins/
 *
 * b2evolution - {@link http://b2evolution.net/}
 * Released under GNU GPL License - {@link http://b2evolution.net/about/license.html}
 * @copyright (c)2003-2014 by Francois Planque - {@link http://fplanque.com/}
 *
 * @version $Id$
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

global $admin_url, $htsrv_url, $baseurl, $app_name, $Settings;

// Default params:
$params = array_merge( array(
		'unsubscribe_text' => '',
	), $params );

$edit_notification_url = $admin_url.'?ctrl=user&user_tab=subs';

?>

</div>

<div class="email_footer">

<?php
echo '<p><b>'.T_( 'Please do not reply to this email!' ).'</b><br />'."\n";
echo sprintf( T_( 'This message was automatically generated by %s running on <a %s>%s</a>.' ), $app_name, 'href="'.$baseurl.'"', $Settings->get( 'notification_short_name' ) );
echo "<br />\n";
echo sprintf( T_( 'Your login on %s is: $login$' ), $Settings->get( 'notification_short_name' ) );
echo ' &bull; ';
echo '<a href="'.$htsrv_url.'/login.php?action=lostpassword">'.T_('Lost password?').'</a>';
echo "</p>\n";

echo '<p><b>'.T_( 'Too many emails?' ).'</b><br />'."\n";
echo sprintf( T_('To configure the emails you receive, click here: <a %s>edit notification preferences</a>.'), 'href="'.$edit_notification_url.'"' );
if( !empty( $params['unsubscribe_text'] ) )
{ // Display the unsubscribe message with link
	echo "<br />\n";
	echo $params['unsubscribe_text'];
}
echo "</p>\n";

echo '<p class="center"><img class="b2evo" src="'.$rsc_url.'img/powered-by-b2evolution-120t.gif" alt="Powered by b2evolution" /></p>';
?>

</div>
</body>
</html>