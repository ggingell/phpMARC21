<?php

namespace phpMARC21;

/**
 * Class constants.php
 * Class that defines constants
 *
 * 
 */

/**
 * Hexadecimal value for Subfield indicator
 * @global hex SUBFIELD_INDICATOR
 */
define("SUBFIELD_INDICATOR", "\x1F");
/**
 * Hexadecimal value for End of Field
 * @global hex END_OF_FIELD
 */
define("END_OF_FIELD", "\x1E");
/**
 * Hexadecimal value for End of Record
 * @global hex END_OF_RECORD
 */
define("END_OF_RECORD", "\x1D");
/**
 * Length of the Directory
 * @global integer DIRECTORY_ENTRY_LEN
 */
define("DIRECTORY_ENTRY_LEN", 12);
/**
 * Length of the Leader
 * @global integer LEADER_LEN
 */
define("LEADER_LEN", 24);



/* EOF: phpMARC21.php */