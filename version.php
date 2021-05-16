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
 * Shell to force installation of all Microsoft Word file import/export set plugins.
 *
 * @package local_wordimport
 * @copyright 2021 Eoin Campbell
 * @author Eoin Campbell
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2021051600;
$plugin->requires = 2018051700; // Moodle 3.5.
$plugin->release = '1.1.1 (Build: 2021051600)';
$plugin->component = 'local_wordimport';
$plugin->maturity = MATURITY_STABLE;
$plugin->dependencies = [
    'atto_wordimport' => 2020070603,
    'booktool_wordimport' => 2021050200, // Release 1.4.7.
    'local_glossary_wordimport' => 2021051500, // Release 1.1.2.
    // 'local_lesson_wordimport' => 2021041100, // Alpha release, omit for the moment.
    'qformat_wordtable' => 2020071101
];
