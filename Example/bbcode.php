<?php
/**
 * @title            BbCode Markup Language
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2013, Pierre-Henry Soria. All Rights Reserved.
 * @license          Lesser General Public License; See LICENSE.txt in the root directory.
 * @link             http://github.com/pH-7
 * @package          PH7
 * @version          1.0
 */

namespace PH7;

use PH7\Parse\Text\BbCode;
use function file_get_contents;

require_once 'PH7/Parse/Text/BBCode.php';

$sBbCodeText = file_get_contents('text/bbcode.bbc');

$oBbCode = new BbCode($sBbCodeText);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<title>BBCode Parser example</title>
</head>
<body>
<?php echo $oBbCode; ?>
</body>
</html>