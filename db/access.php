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
 * Capabilities for moodec enrolment plugin.
 *
 * @package    enrol_moodec
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

	/* Add, edit or remove moodec enrol instance. */
	'enrol/moodec:config' => array(
		'captype' => 'write',
		'contextlevel' => CONTEXT_COURSE,
		'archetypes' => array(
			'manager' => CAP_ALLOW,
		),
	),

	/* Enrol anybody. */
	'enrol/moodec:enrol' => array(
		'captype' => 'write',
		'contextlevel' => CONTEXT_COURSE,
		'archetypes' => array(
			'manager' => CAP_ALLOW,
			'editingteacher' => CAP_ALLOW,
		),
	),

	/* Manage enrolments of users. */
	'enrol/moodec:manage' => array(
		'captype' => 'write',
		'contextlevel' => CONTEXT_COURSE,
		'archetypes' => array(
			'manager' => CAP_ALLOW,
			'editingteacher' => CAP_ALLOW,
		),
	),

	/* Unenrol anybody (including self) - watch out for data loss. */
	'enrol/moodec:unenrol' => array(
		'captype' => 'write',
		'contextlevel' => CONTEXT_COURSE,
		'archetypes' => array(
			'manager' => CAP_ALLOW,
			'editingteacher' => CAP_ALLOW,
		),
	),

	/* Unenrol self - watch out for data loss. */
	'enrol/moodec:unenrolself' => array(
		'captype' => 'write',
		'contextlevel' => CONTEXT_COURSE,
		'archetypes' => array(
		),
	),

);
