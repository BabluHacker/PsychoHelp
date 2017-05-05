<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2016, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config {

    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL      = '/psycho_help/profile/easyappointments';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------


    const DB_HOST       = 'localhost';
    const DB_NAME       = 'psycho_help';
    const DB_USERNAME   = 'studentweb';
    const DB_PASSWORD   = 'bismillah';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = FALSE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = 'psychologicalhelp	';
    const GOOGLE_CLIENT_ID      = '983018795869-063snof25gk4aujctkicjckohqlcrca1.apps.googleusercontent.com';
    const GOOGLE_CLIENT_SECRET  = 'WvqWbLht3IVqIFDJk67P6kFW';
    const GOOGLE_API_KEY        = 'AIzaSyDBJaVvP9xLx6UlnuhE0cK3yiNmlcvl_sI';
}

/* End of file config.php */
/* Location: ./config.php */

