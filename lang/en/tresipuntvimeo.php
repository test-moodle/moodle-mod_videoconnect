<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     mod_tresipuntvimeo
 * @category    string
 * @copyright   2021 Tresipunt
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Tresipunt Vimeo';
$string['pluginname'] = 'Tresipunt Vimeo';
$string['modulename'] = 'Tresipunt Vimeo';
$string['modulenameplural'] = 'Tresipunt Vimeos';
$string['tresipuntvimeoname'] = 'Name';
$string['tresipuntvimeoname_help'] = 'Select a name for this resource';
$string['selectvideo'] = 'Select a video';
$string['pluginadministration'] = 'Tresipunt Vimeo Administration';
$string['vimeoheading'] = 'Vimeo API configuration';
$string['vimeoheadingdesc'] = 'Fill in the following fields with your Vimeo credentials';
$string['client_id'] = 'Client ID';
$string['client_secret'] = 'Client Secret';
$string['access_token'] = 'Personal Access Token';
$string['is_authenticated'] = 'Is authenticated?';
$string['is_authenticated_desc'] = 'Select this option if you have a personal access token';
$string['scopes'] = 'Scopes';
$string['scopes_desc'] = 'Scopes accepted';
$string['scopes_not_exist'] = 'There are no scopes configured in the plugin';
$string['missingidandcmid'] = 'Missing ID and CMID in URL';
$string['task_upload_videos'] = 'Task to upload videos to Vimeo';
$string['idvideo'] = 'ID Video of Vimeo';
$string['idvideo_help'] = 'Ex: https://vimeo.com/<strong>536287845</strong>';
$string['we_are_sorry'] = 'We are sorry';
$string['filepath_not_found'] = 'No video selected for upload';
$string['not_executed'] = 'This video will be available for viewing shortly';
$string['discarded'] = 'This video has been discarded for a new one';
$string['uploading'] = 'This video will be available for viewing shortly';
$string['error_uploading'] = 'An error occurred while uploading the video to Vimeo';
$string['completed'] = 'This video will be available for viewing shortly';
$string['deleted'] = 'This course module has been deleted';
$string['id_video_missing'] = 'ID video is missing in uploading response';
$string['error_whitelist'] = 'Error in update whitelist';
$string['whitelist'] = 'Whitelist domain';
$string['whitelist_desc'] = "Domain to include in the privacy whitelist. Don't include protocol 'http://' or 'https://'. Ex: implika.test";