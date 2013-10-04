<?php
require_once($cfg['root_dir'] . "classes/User.class.php");
require_once($cfg['root_dir'] . "classes/Database.class.php");

function showHeader($mode, $page, $user=null) {
    global $cfg;

    if($mode=="web") {
        echo '<div id="header-wrap">
                <div id="header">
                    <!-- Header includes Company Logo and Navigation Bar -->

                    <div class="header-logo">
                        <div class="site-logo">
                            <!-- Background Image -->
                        </div>
                    </div>
                    <div class="header-content">
                        <div class="header-contact">
                            <div id="phone" class="header-section">
                                <span class="header-sectionTitle">Call Us</span><a href="tel:9516812972"><span class="full-box-link"></span></a>
                                <span class="header-sectionText">951<span class="red">.</span>681<span class="red">.</span>2972</span>
                            </div>
                            <div id="location" class="header-section">
                                <span class="header-sectionTitle">Visit Us</span><a href="https://www.google.com/maps?q=Youth+Skills+Center+Childcare,+5111+Felspar+Street,+Riverside,+CA&hl=en&ll=33.995466,-117.484531&spn=0.130793,0.264187&sll=37.269174,-119.306607&sspn=16.046017,33.815918&oq=you&t=m&hq=Youth+Skills+Center+Childcare,+5111+Felspar+Street,+Riverside,+CA&radius=15000&z=13&iwloc=A" target="_blank"><span class="full-box-link"></span></a>
                                <span class="header-sectionText">5111 Felspar Street<br />Jurupa Valley<span class="red">,</span> CA 92509</span>
                            </div>
                            <div id="social" class="header-section">
                                <span class="header-sectionTitle">Connect with Us</span>
                                <div class="header-sectionText">
                                    <!--<div class="social-icon myysc">
                                        <a href="#"><img src="images/Pace_Social_Icon_Set/PNG/myYSC.png" /></a>
                                    </div>-->
                                    <div class="social-icon google">
                                        <a href="https://plus.google.com/104544147610723533287/posts"><img src="';  echo $cfg["base_dir"]; echo 'images/Pace_Social_Icon_Set/PNG/google+.png" /></a>
                                    </div>

                                    <div class="social-icon facebook">
                                        <a href="https://www.facebook.com/youthskillscenter"><img src="';  echo $cfg["base_dir"]; echo 'images/Pace_Social_Icon_Set/PNG/facebook.png" /></a>
                                    </div>

                                    <div class="social-icon youtube">
                                        <a href="https://www.youtube.com/youthskillscenter"><img src="';  echo $cfg["base_dir"]; echo 'images/Pace_Social_Icon_Set/PNG/youtube.png" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-search">

                        </div>

                    </div>
                    <a href="#" class="nav-button"><img src="';  echo $cfg["base_dir"]; echo 'images/Pace_Social_Icon_Set/PNG/navigation.png" /></a>

                </div>
                <div id="navigation_wrap">
                    <div id="navigation">
                        <a class="nav ';  if($page == "home") { echo "active";} echo '" href="';  echo $cfg["base_dir"]; echo 'index.php">Home</a>
                        <a class="nav ';  if($page == "about") { echo "active";} echo '" href="';  echo $cfg["base_dir"]; echo 'about.php">About Us</a>
                        <a class="nav ';  if($page == "programs") { echo "active";} echo '" href="';  echo $cfg["base_dir"]; echo 'programs.php">Our Programs</a>
                        <a class="nav ';  if($page == "contact") { echo "active";} echo '" href="';  echo $cfg["base_dir"]; echo 'contact.php">Contact Us</a>
                    </div>
                </div>
            </div>';
    }
    else if($mode=="admin") {
        echo '<div id="header-wrap" class="admin">
                <div id="header">
                    <!-- Header includes Company Logo and Navigation Bar -->

                    <div class="header-logo">
                        <div class="site-logo">
                            <!-- Background Image -->
                        </div>
                    </div>';
                    if($user) {
                        echo '<div class="user_info">
                            <div class="account_logo">' . $user->name[0] . '</div>
                            <div class="dropdown_arrow show_user_info"></div>
                            <div class="user_info_more">
                                <a class="user_info_item account"><strong>Account:</strong> ' . $user->name . '</a>
                                <a class="user_info_item user"><strong style="font-weight: 600;">Logged in as </strong> ' . $user->email . '</a>
                                <a href="logout.php" class="user_info_item logout">Logout</a>
                            </div>
                        </div>';
                    }
        echo '
                    <a href="#" class="nav-button"><img src="';  echo $cfg["base_dir"]; echo 'images/Pace_Social_Icon_Set/PNG/navigation.png" /></a>

                </div>
                <div id="navigation_wrap">
                    <div id="navigation">
                        <a class="nav ';  if($page == "home") { echo "active";} echo '" href="';  echo $cfg["base_dir"]; echo 'admin/index.php">Admin Home</a>
                    </div>
                </div>
            </div>';
    }
}

//========================================================
// SQL Parse Functions
//========================================================

/***************************************************************************
 *                             taken from sql_parse.php
 *                              -------------------
 *     begin                : Thu May 31, 2001
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: sql_parse.php,v 1.8 2002/03/18 23:53:12 psotfx Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   These functions are mainly for use in the db_utilities under the admin
 *   however in order to make these functions available elsewhere, specifically
 *   in the installation phase of phpBB I have seperated out a couple of
 *   functions into this file.  JLH
 *
\***************************************************************************/

//
// remove_comments will strip the sql comment lines out of an uploaded sql file
// specifically for mssql and postgres type files in the install....
//
function remove_comments(&$output)
{
    $lines = explode("\n", $output);
    $output = "";

    // try to keep mem. use down
    $linecount = count($lines);

    $in_comment = false;
    for($i = 0; $i < $linecount; $i++)
    {
        if( preg_match("/^\/\*/", preg_quote($lines[$i])) )
        {
            $in_comment = true;
        }

        if( !$in_comment )
        {
            $output .= $lines[$i] . "\n";
        }

        if( preg_match("/\*\/$/", preg_quote($lines[$i])) )
        {
            $in_comment = false;
        }
    }

    unset($lines);
    return $output;
}

//
// remove_remarks will strip the sql comment lines out of an uploaded sql file
//
function remove_remarks($sql)
{
    $lines = explode("\n", $sql);

    // try to keep mem. use down
    $sql = "";

    $linecount = count($lines);
    $output = "";

    for ($i = 0; $i < $linecount; $i++)
    {
        if (($i != ($linecount - 1)) || (strlen($lines[$i]) > 0))
        {
            if (isset($lines[$i][0]) && $lines[$i][0] != "#")
            {
                $output .= $lines[$i] . "\n";
            }
            else
            {
                $output .= "\n";
            }
            // Trading a bit of speed for lower mem. use here.
            $lines[$i] = "";
        }
    }

    return $output;

}

//
// split_sql_file will split an uploaded sql file into single sql statements.
// Note: expects trim() to have already been run on $sql.
//
function split_sql_file($sql, $delimiter)
{
    // Split up our string into "possible" SQL statements.
    $tokens = explode($delimiter, $sql);

    // try to save mem.
    $sql = "";
    $output = array();

    // we don't actually care about the matches preg gives us.
    $matches = array();

    // this is faster than calling count($oktens) every time thru the loop.
    $token_count = count($tokens);
    for ($i = 0; $i < $token_count; $i++)
    {
        // Don't wanna add an empty string as the last thing in the array.
        if (($i != ($token_count - 1)) || (strlen($tokens[$i] > 0)))
        {
            // This is the total number of single quotes in the token.
            $total_quotes = preg_match_all("/'/", $tokens[$i], $matches);
            // Counts single quotes that are preceded by an odd number of backslashes,
            // which means they're escaped quotes.
            $escaped_quotes = preg_match_all("/(?<!\\\\)(\\\\\\\\)*\\\\'/", $tokens[$i], $matches);

            $unescaped_quotes = $total_quotes - $escaped_quotes;

            // If the number of unescaped quotes is even, then the delimiter did NOT occur inside a string literal.
            if (($unescaped_quotes % 2) == 0)
            {
                // It's a complete sql statement.
                $output[] = $tokens[$i];
                // save memory.
                $tokens[$i] = "";
            }
            else
            {
                // incomplete sql statement. keep adding tokens until we have a complete one.
                // $temp will hold what we have so far.
                $temp = $tokens[$i] . $delimiter;
                // save memory..
                $tokens[$i] = "";

                // Do we have a complete statement yet?
                $complete_stmt = false;

                for ($j = $i + 1; (!$complete_stmt && ($j < $token_count)); $j++)
                {
                    // This is the total number of single quotes in the token.
                    $total_quotes = preg_match_all("/'/", $tokens[$j], $matches);
                    // Counts single quotes that are preceded by an odd number of backslashes,
                    // which means they're escaped quotes.
                    $escaped_quotes = preg_match_all("/(?<!\\\\)(\\\\\\\\)*\\\\'/", $tokens[$j], $matches);

                    $unescaped_quotes = $total_quotes - $escaped_quotes;

                    if (($unescaped_quotes % 2) == 1)
                    {
                        // odd number of unescaped quotes. In combination with the previous incomplete
                        // statement(s), we now have a complete statement. (2 odds always make an even)
                        $output[] = $temp . $tokens[$j];

                        // save memory.
                        $tokens[$j] = "";
                        $temp = "";

                        // exit the loop.
                        $complete_stmt = true;
                        // make sure the outer loop continues at the right point.
                        $i = $j;
                    }
                    else
                    {
                        // even number of unescaped quotes. We still don't have a complete statement.
                        // (1 odd and 1 even always make an odd)
                        $temp .= $tokens[$j] . $delimiter;
                        // save memory.
                        $tokens[$j] = "";
                    }

                } // for..
            } // else
        }
    }

    return $output;
}
function parseSQL($fileAbsPath) {

    ini_set('memory_limit', '5120M');
    set_time_limit ( 0 );

    global $cfg;

    $dbms_schema = $fileAbsPath;

    $sql_query = @fread(@fopen($dbms_schema, 'r'), @filesize($dbms_schema)) or die('problem opening or reading file.');
    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');

    $host = $cfg['connection']['host'];
    $user = $cfg['connection']['username'];
    $pass = $cfg['connection']['password'];
    $db = $cfg['connection']['database'];

    mysql_connect($host,$user,$pass) or die('error connection');
    mysql_select_db($db) or die('error database selection');

    $i=1;
    foreach($sql_query as $sql){
        mysql_query($sql) or die('error in query');
    }
}
