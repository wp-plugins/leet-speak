<?php
/**
 * Plugin Name: Leet Speak
 * Description: Simple Text/HTML to Leet-Speak translator that is fully customizable. Use either [leet][/leet] tags for targeted translations or a custom field ("leet"="1") to translate the entire post.
 * Version: 0.3 (&beta;)
 * Author: Daniel Doezema
 * Author URI: http://dan.doezema.com
 */

 /**
 * Copyright (c) 2010, Daniel Doezema
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in the
 *     documentation and/or other materials provided with the distribution.
 *   * The names of the contributors and/or copyright holder may not be
 *     used to endorse or promote products derived from this software without
 *     specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL DANIEL DOEZEMA BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */


// Include & Instantiate DDLeetSpeak Plugin Class
if (!class_exists("DDLeetSpeak")) {
    require_once('class.leetspeak.php');
    $DDLeetSpeak = new DDLeetSpeak();
} else {
    // Naming Conflict
}

// Installation upon plugin activation
register_activation_hook(__FILE__, array('DDLeetSpeak', 'install'));

// Uninstallation upon plugin deactivation
register_deactivation_hook(__FILE__, array('DDLeetSpeak', 'uninstall'));

// Bootstrap
if($DDLeetSpeak instanceof DDLeetSpeak) {
    require_once('actions.php');
    require_once('filters.php');
}
?>