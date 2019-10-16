<?php

//TODO database connection information
define("DATABASE", "inventory");
define("PASSWORD", "BaIWWHb4wvd3eqzb");
define("SERVER", "localhost");
define("USERNAME", "inventory");

// debug switch
define ("DEBUG","1");
//define ("DEBUG","0");

//TODO root directory reference
define("HOME","..");



//TODO set session limits
/* Session expiration settings *
 * MAX_SESSION is the maximum length of a session
 * MAX_INACTIVE is the maximum length of a session with no activity
 * all time settings to be expressed in number of seconds
 * please include a comment with a human-friendly time length after each
 */
 // max time a session should be active, in seconds
define("MAX_SESSION", "86400"); //86400 = 1 days
// max amount of inacivity before session is expired, in seconds
define("MAX_INACTIVE", "7200"); // 7200 = 2 hours
// how often do we check?
define("SESSION_REFRESH", "900"); // 900 = 15 minutes
?>
