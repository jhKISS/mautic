<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

if (empty($type)):
    $type = 'string';
endif;

?>

<?php if (stripos($name, "email") !== false): ?>
<a target="_blank" href="mailto:<?php echo $value; ?>"><?php echo $value; ?></a>

<?php elseif (stripos($name, "skype") !== false): ?>
<a href="skype:<?php echo $value; ?>?call"><?php echo $value; ?></a>

<?php elseif (stripos($name, "facebook") !== false): ?>
<?php if (strpos($value, 'http') === false): ?>
<a target="_blank" href="https://www.facebook.com/<?php echo $value; ?>"><?php echo $value; ?></a>
<?php else: ?>
<a target="_blank" href="<?php echo $value; ?>"><?php echo $value; ?></a>
<?php endif; ?>

<?php elseif (stripos($name, "twitter") !== false): ?>
<?php if (strpos($value, 'http') === false): ?>
<a target="_blank" href="https://www.twitter.com/<?php echo $value; ?>"><?php echo $value; ?></a>
<?php else: ?>
<a target="_blank" href="<?php echo $value; ?>"><?php echo $value; ?></a>
<?php endif; ?>

<?php elseif (stripos($name, "linkedin") !== false): ?>
<?php if (strpos($value, 'http') === false): ?>
<a target="_blank" href="https://www.linkedin.com/in/<?php echo $value; ?>"><?php echo $value; ?></a>
<?php else: ?>
<a target="_blank" href="<?php echo $value; ?>"><?php echo $value; ?></a>
<?php endif; ?>

<?php elseif (stripos($name, "googleplus") !== false): ?>
<?php if (strpos($value, 'http') === false): ?>
<a target="_blank" href="https://plus.google.com/+<?php echo $value; ?>"><?php echo $value; ?></a>
<?php else: ?>
<a target="_blank" href="<?php echo $value; ?>"><?php echo $value; ?></a>
<?php endif; ?>

<?php elseif (stripos($name, "website") !== false): ?>
<?php if (strpos($value, 'http') === 0): ?>
<a target="_blank" href="<?php echo $value; ?>"><?php echo $value; ?></a>
<?php elseif (strpos($value, 'http') === false): ?>
<a target="_blank" href="http://<?php echo $value; ?>"><?php echo $value; ?></a>
<?php else: ?>
<?php echo $value; ?>
<?php endif; ?>

<?php elseif (strpos($value, 'http') === 0): ?>
<a target="_blank" href="<?php echo $value; ?>"><?php echo $value; ?></a>
<?php
elseif ($type == 'datetime'):
    $dateHelper = new \Mautic\CoreBundle\Helper\DateTimeHelper($value);
    echo $dateHelper->toLocalString($dateFormats[$type]);
?>

<?php else: ?>
<?php echo $value; ?>

<?php endif; ?>