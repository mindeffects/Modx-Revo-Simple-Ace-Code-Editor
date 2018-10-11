<?php
/**
 * Default plugin properties
 *
 * @package SimpleAceCodeEditor
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'AcePath',
        'desc' => 'URL or path to ACE javascript file (and extensions)',
        'type' => 'textfield',
        'value' => "https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js",
        'options' => '',
    ),
    array(
        'name' => 'Theme',
        'desc' => 'editor theme name (you can test them all here: https://ace.c9.io/build/kitchen-sink.html)',
        'type' => 'list',
        'value' => 'monokai',
        'options' => array(
            array('text' => 'Chrome (bright theme)', 'value' => 'chrome'),
            array('text' => 'Clouds (bright theme)', 'value' => 'clouds'),
            array('text' => 'Crimson Editor (bright theme)', 'value' => 'crimson_editor'),
            array('text' => 'Dawn (bright theme)', 'value' => 'dawn'),
            array('text' => 'Dreamweaver (bright theme)', 'value' => 'dreamweaver'),
            array('text' => 'Eclipse (bright theme)', 'value' => 'eclipse'),
            array('text' => 'GitHub (bright theme)', 'value' => 'github'),
            array('text' => 'IPlastic (bright theme)', 'value' => 'iplastic'),
            array('text' => 'Solarized Light (bright theme)', 'value' => 'solarized_light'),
            array('text' => 'TextMate (bright theme)', 'value' => 'textmate'),
            array('text' => 'Tomorrow (bright theme)', 'value' => 'tomorrow'),
            array('text' => 'XCode (bright theme)', 'value' => 'xcode'),
            array('text' => 'Kuroir (bright theme)', 'value' => 'kuroir'),
            array('text' => 'KatzenMilch (bright theme)', 'value' => 'katzenmilch'),
            array('text' => 'SQL Server (bright theme)', 'value' => 'sqlserver'),
            
            array('text' => 'Ambiance (dark theme)', 'value' => 'ambiance'),
            array('text' => 'Chaos (dark theme)', 'value' => 'chaos'),
            array('text' => 'Clouds Midnight (dark theme)', 'value' => 'clouds_midnight'),
            array('text' => 'Dracula (dark theme)', 'value' => 'dracula'),
            array('text' => 'Cobalt (dark theme)', 'value' => 'cobalt'),
            array('text' => 'Gruvbox (dark theme)', 'value' => 'gruvbox'),
            array('text' => 'Green on Black (dark theme)', 'value' => 'gob'),
            array('text' => 'idle Fingers (dark theme)', 'value' => 'idle_fingers'),
            array('text' => 'krTheme (dark theme)', 'value' => 'kr_theme'),
            array('text' => 'Merbivore (dark theme)', 'value' => 'merbivore'),
            array('text' => 'Merbivore Soft (dark theme)', 'value' => 'merbivore_soft'),
            array('text' => 'Mono Industrial (dark theme)', 'value' => 'mono_industrial'),
            array('text' => 'Monokai (dark theme)', 'value' => 'monokai'),
            array('text' => 'Pastel on dark (dark theme)', 'value' => 'pastel_on_dark'),
            array('text' => 'Solarized Dark (dark theme)', 'value' => 'solarized_dark'),
            array('text' => 'Terminal (dark theme)', 'value' => 'terminal'),
            array('text' => 'Tomorrow Night (dark theme)', 'value' => 'tomorrow_night'),
            array('text' => 'Tomorrow Night Blue (dark theme)', 'value' => 'tomorrow_night_blue'),
            array('text' => 'Tomorrow Night Bright (dark theme)', 'value' => 'tomorrow_night_bright'),
            array('text' => 'Tomorrow Night 80s (dark theme)', 'value' => 'tomorrow_night_eighties'),
            array('text' => 'Twilight (dark theme)', 'value' => 'twilight'),
            array('text' => 'Vibrant Ink (dark theme)', 'value' => 'vibrant_ink'),
        ),
    ),
    array(
        'name' => 'ReplaceCTRLDKbdShortcut',
        'desc' => 'Replace the CTRL-D (or CMD-D) keyboard shortcut to perform a more sensible action: duplicate the current line or selection (instead of deleting, which is the default behavior)',
        'type' => 'combo-boolean',
        'value' => '1',
        'options' => '',
    ),
    array(
        'name' => 'Autocompletion',
        'desc' => 'Enable Autocompletion: none, basic (show on CTRL-Space) or live (show on typing) - Note that "ext-language_tools.js" must be available alongside ace.js (will be retrieve from <AcePath>/ext-language_tools.js)',
        'type' => 'list',
        'value' => 'basic',
        'options' => array(
            array('text' => 'None', 'value' => 'none'),
            array('text' => 'Basic (show on CTRL-SPACE)', 'value' => 'basic'),
            array('text' => 'Live (show on typing)', 'value' => 'live'),
        ),
    ),
    array(
        'name' => 'SettingsMenu',
        'desc' => 'Add a settings menu accessible with CTR-Q (or CMD-Q) - Note that "ext-settings_menu.js" must be available alongside ace.js (will be retrieve from <AcePath>/ext-settings_menu.js)',
        'type' => 'combo-boolean',
        'value' => '0',
        'options' => '',
    ),
    array(
        'name' => 'Spellcheck',
        'desc' => 'Enable spellcheck - Note that "ext-spellcheck.js" must be available alongside ace.js (will be retrieve from <AcePath>/ext-spellcheck.js)',
        'type' => 'combo-boolean',
        'value' => '0',
        'options' => '',
    ),
    array(
        'name' => 'EmmetPath',
        'desc' => 'URL or path to Emmet javascript file (see https://github.com/cloud9ide/emmet-core)',
        'type' => 'textfield',
        'value' => "https://cloud9ide.github.io/emmet-core/emmet.js",
        'options' => '',
    ),
    array(
        'name' => 'Emmet',
        'desc' => 'Enable emmet - Note that "ext-emmet.js" must be available alongside ace.js (will be retrieve from <AcePath>/ext-emmet.js)',
        'type' => 'combo-boolean',
        'value' => '0',
        'options' => '',
    ),
    array(
        'name' => 'AcePrintMarginColumn',
        'desc' => 'Print margin column position - Set the character position of the print margin (for instance useful if you like to code with 80 chars wide max) - Set to 0 to disable',
        'type' => 'numberfield',
        'value' => '0',
        'options' => '',
    ),
    array(
        'name' => 'ChunkDetectMIMEShebang',
        'desc' => "Enable 'shebang-style' MIME detection for chunks (in description or in the first line of chunk content) - See README for supported MIME values",
        'type' => 'combo-boolean',
        'value' => '1',
        'options' => '',
    ),
    array(
        'name' => 'ToggleFullScreenKeyBinding',
        'desc' => "Key binding used to toggle editor fullscreen (example: Ctrl-P or F11 or anything you want)",
        'type' => 'textfield',
        'value' => 'F11',
        'options' => '',
    ),
    array(
        'name' => 'ToggleFullScreenShowButton',
        'desc' => "Display the toggle fullscreen button (on top right of the editor)",
        'type' => 'combo-boolean',
        'value' => '1',
        'options' => '',
    ),
    array(
        'name' => 'EditorHeight',
        'desc' => "Editor height (in px, em, rem or %)",
        'type' => 'textfield',
        'value' => '',
        'options' => '',
    ),
    array(
        'name' => 'EditorTVHeight',
        'desc' => "Editor height for template vars - take precedence over EditorHeight value (in px, em, rem or %)",
        'type' => 'textfield',
        'value' => '',
        'options' => '',
    ),
);
return $properties;