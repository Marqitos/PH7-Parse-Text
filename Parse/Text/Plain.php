<?php
/**
 * @title            Plain Text Parser Class
 * @desc             Plain Text Parser with HTML5 support.
 *
 * @author           Marcos Porto Mariño <marcosarnoso@msn.com>
 * @copyright        (c) 2020, Marcos Porto Mariño. All Rights Reserved.
 * @license          Lesser General Public License; See LICENSE.txt in the root directory.
 * @link             https://github.com/Marqitos/PH7-Parse-Text
 * @version          0.1
 */
namespace PH7\Parse\Text;

use PH7\Parse\Code;
use function nl2br;

require_once 'Code.php';

class Plain extends Code {

    /**
     * @access public
     * @param string $sText
     */
    public function __construct($sText) {
        $this->sText = $sText;
        parent::__construct();
    }

    /**
     * @access public
     * @return string The code parsed
     */
    public function __toString() {
        return $this->sText;
    }

    /**
     * Run the parse methods
     *
     * @access protected
     * @return void
     */
    protected function run() {
        $this->paragraph();
		$this->lineBreaks();
    }

    /**
     * Parse text and processing
     *
     * @access protected
     * @return void
     */
    protected function lineBreaks() {
        // Line breaks
        $this->sText = nl2br($this->sText);
    }

}