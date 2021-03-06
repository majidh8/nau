<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme
 * @subpackage nau
 * @copyright  2016 Titus Learning
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

require_once(dirname(__FILE__) . '/includes/header.php');

?>

<div class="backgroundimg" style="background: #000 url(<?php echo $PAGE->theme->setting_file_url('loginbg', 'loginbg'); ?>);-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
<div class="container outercont">
    <div id="page-content" class="row-fluid">
        <div id="page-navbar" class="span12">
            <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
            <?php echo $OUTPUT->navbar(); ?>
        </div>
        <section id="region-main" class="span12">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();



            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        
        
        
        
    </div>
</div></div>


<div class="container dropdownlogin" align="center">
   <?php echo $OUTPUT->get_setting('footerabovedropdown', 'format_html'); ?>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"> <?php echo $OUTPUT->get_setting('loginbuttondropdown', 'format_text'); ?></button>
  <div id="demo" class="collapse" style="padding-top:15px;">
   <?php echo $OUTPUT->get_setting('footerdropdown', 'format_html'); ?>
  </div>
</div>



<?php
require_once(dirname(__FILE__) . '/includes/footer.php');