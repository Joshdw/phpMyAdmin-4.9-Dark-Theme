<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Styles for CodeMirror editor
 * for the pmahomme theme
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

// unplanned execution path
if (! defined('PHPMYADMIN') && ! defined('TESTSUITE')) {
	exit();
}
?>

.CodeMirror {
	height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 1.2); ?>em;
	direction: ltr;
}
#inline_editor_outer .CodeMirror {
	height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.4); ?>em;
}
.insertRowTable .CodeMirror {
	height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.6); ?>em;
	width: <?php echo ceil($GLOBALS['cfg']['TextareaCols'] * 0.6); ?>em;
	border: 1px solid #a9a9a9;
}
#pma_console .CodeMirror-gutters {
	background-color: initial;
	border: none;
}
span.cm-keyword, span.cm-statement-verb {
	color: #909;
}
span.cm-variable {
	color: black;
}
span.cm-comment {
	color: #808000;
}
span.cm-mysql-string {
	color: #008000;
}
span.cm-operator {
	color: fuchsia;
}
span.cm-mysql-word {
	color: black;
}
span.cm-builtin {
	color: #f00;
}
span.cm-variable-2 {
	color: #f90;
}
span.cm-variable-3 {
	color: #00f;
}
span.cm-separator {
	color: fuchsia;
}
span.cm-number {
	color: teal;
}
.autocomplete-column-name {
	display: inline-block;
}
.autocomplete-column-hint {
	display: inline-block;
	float: right;
	color: #666;
	margin-left: 1em;
}
.CodeMirror-hints {
	z-index: 999;
}
.CodeMirror-lint-tooltip {
	z-index: 200;
	font-family: inherit;
}
.CodeMirror-lint-tooltip code {
  font-family: monospace;
  font-weight: bold;
}


.cm-s-default.CodeMirror, .cm-s-default .CodeMirror-gutters,
.cm-s-pma.CodeMirror{
  background-color: #282a36 !important;
  color: #f8f8f2 !important;
  border: none;
}
.cm-s-default .CodeMirror-gutters { color: #282a36; }
.cm-s-default .CodeMirror-cursor { border-left: solid thin #f8f8f0; }
.cm-s-default .CodeMirror-linenumber { color: #6D8A88; }
.cm-s-default .CodeMirror-selected { background: rgba(255, 255, 255, 0.10); }
.cm-s-default .CodeMirror-line::selection, .cm-s-default .CodeMirror-line > span::selection, .cm-s-default .CodeMirror-line > span > span::selection { background: rgba(255, 255, 255, 0.10); }
.cm-s-default .CodeMirror-line::-moz-selection, .cm-s-default .CodeMirror-line > span::-moz-selection, .cm-s-default .CodeMirror-line > span > span::-moz-selection { background: rgba(255, 255, 255, 0.10); }
.cm-s-default span.cm-comment { color: #6272a4; }
.cm-s-default span.cm-string, .cm-s-default span.cm-string-2 { color: #f1fa8c; }
.cm-s-default span.cm-number { color: #bd93f9; }
.cm-s-default span.cm-variable { color: #50fa7b; }
.cm-s-default span.cm-variable-2 { color: white; }
.cm-s-default span.cm-def { color: #50fa7b; }
.cm-s-default span.cm-operator { color: #ff79c6; }
.cm-s-default span.cm-keyword { color: #ff79c6; }
.cm-s-default span.cm-atom { color: #bd93f9; }
.cm-s-default span.cm-meta { color: #f8f8f2; }
.cm-s-default span.cm-tag { color: #ff79c6; }
.cm-s-default span.cm-attribute { color: #50fa7b; }
.cm-s-default span.cm-qualifier { color: #50fa7b; }
.cm-s-default span.cm-property { color: #66d9ef; }
.cm-s-default span.cm-builtin { color: #50fa7b; }
.cm-s-default span.cm-variable-3, .cm-s-default span.cm-type { color: #ffb86c; }

.cm-s-default .CodeMirror-activeline-background { background: rgba(255,255,255,0.1); }
.cm-s-default .CodeMirror-matchingbracket { text-decoration: underline; color: white !important; }



/* PADDING */

.CodeMirror-lines {
  padding: 4px 0; /* Vertical padding around content */
  line-height: 20px
}
.CodeMirror pre {
  padding: 0 4px; /* Horizontal padding of content */
}

.CodeMirror-scrollbar-filler, .CodeMirror-gutter-filler {
  background-color: <?php echo $GLOBALS['cfg']['ControlColor']; ?>; /* The little square between H and V scrollbars */
}

/* GUTTER */

.CodeMirror-gutters {
  border-right: 1px solid #222;
  background-color: rgba(0,0,0,0.1);
  white-space: nowrap;
  -webkit-border-top-left-radius: 8px;
  -webkit-border-bottom-left-radius: 8px;
  -moz-border-radius-topleft: 8px;
  -moz-border-radius-bottomleft: 8px;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
}
.CodeMirror-linenumbers {}
.CodeMirror-linenumber {
  padding: 0 5px;
  min-width: 20px;
  text-align: right;
  color: #999;
}

#pma_console .CodeMirror-gutters {
    background-color: initial;
    border: none;
}

/* CURSOR */

.CodeMirror div.CodeMirror-cursor {
  border-left: 1px solid #fff;  
  z-index: 3;
}
/* Shown when moving in bi-directional text */
.CodeMirror div.CodeMirror-secondarycursor {
  border-left: 1px solid silver;
}
.CodeMirror.cm-keymap-fat-cursor div.CodeMirror-cursor {
  width: auto;
  border: 0;
  background: #7e7;
  z-index: 1;
}
/* Can style cursor different in overwrite (non-insert) mode */
.CodeMirror div.CodeMirror-cursor.CodeMirror-overwrite {}

.cm-tab { display: inline-block; }

/* DEFAULT THEME */

.cm-s-default .cm-keyword {color: #f7513c;}
.cm-s-default .cm-atom {color: #65f;}
.cm-s-default .cm-number {color: #fe0172;}
.cm-s-default .cm-def {color: #00f;}
.cm-s-default .cm-variable {color: #fff;}
.cm-s-default .cm-variable-2 {color: #ffa200;}
.cm-s-default .cm-variable-3 {color: #085;}
.cm-s-default .cm-property {color: #fff;}
.cm-s-default .cm-operator {color: #fff;}
.cm-s-default .cm-comment {color: #5a0;}
.cm-s-default .cm-string {color: #ffce9f;}
.cm-s-default .cm-string-2 {color: #f50;}
.cm-s-default .cm-meta {color: #555;}
.cm-s-default .cm-error {color: #f00;}
.cm-s-default .cm-qualifier {color: #555;}
.cm-s-default .cm-builtin {color: #30a;}
.cm-s-default .cm-bracket {color: #997;}
.cm-s-default .cm-tag {color: #170;}
.cm-s-default .cm-attribute {color: #00c;}
.cm-s-default .cm-header {color: blue;}
.cm-s-default .cm-quote {color: #090;}
.cm-s-default .cm-hr {color: #999;}
.cm-s-default .cm-link {color: #00c;}

span.cm-keyword, span.cm-statement-verb {
    color: #909;
}
span.cm-mysql-string {
    color: #008000;
}
span.cm-mysql-word {
    color: white;
}
span.cm-separator {
    color: fuchsia;
}

.cm-negative {color: #d44;}
.cm-positive {color: #292;}
.cm-header, .cm-strong {font-weight: bold;}
.cm-em {font-style: italic;}
.cm-link {text-decoration: underline;}

.cm-invalidchar {color: #f00;}

div.CodeMirror span.CodeMirror-matchingbracket {color: #0f0;}
div.CodeMirror span.CodeMirror-nonmatchingbracket {color: #f22;}

/* STOP */

/* The rest of this file contains styles related to the mechanics of
   the editor. You probably shouldn't touch them. */

.CodeMirror {
  line-height: 1.2;
  position: relative;
  overflow: hidden;
  background: none;
  color: #eee;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?> !important;
  height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 1.2); ?>em;
  margin-bottom: 1.2em;  
}

.CodeMirror * {font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?> !important;}

#inline_editor_outer .CodeMirror {
    height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.4); ?>em;
}

.CodeMirror-scroll {
  /* 30px is the magic margin used to hide the element's real scrollbars */
  /* See overflow: hidden in .CodeMirror */
  margin-bottom: -30px; margin-right: -30px;
  padding-bottom: 30px; padding-right: 30px;
  height: 100%;
  outline: none; /* Prevent dragging from highlighting the element */
  position: relative;
}
.CodeMirror-sizer {
  position: relative;
}

/* The fake, visible scrollbars. Used to force redraw during scrolling
   before actuall scrolling happens, thus preventing shaking and
   flickering artifacts. */
.CodeMirror-vscrollbar, .CodeMirror-hscrollbar, .CodeMirror-scrollbar-filler, .CodeMirror-gutter-filler {
  position: absolute;
  z-index: 6;
  display: none;
}
.CodeMirror-vscrollbar {
  right: 0; top: 0;
  overflow-x: hidden;
  overflow-y: scroll;
}
.CodeMirror-hscrollbar {
  bottom: 0; left: 0;
  overflow-y: hidden;
  overflow-x: scroll;
}
.CodeMirror-scrollbar-filler {
  right: 0; bottom: 0;
}
.CodeMirror-gutter-filler {
  left: 0; bottom: 0;
}

.CodeMirror-gutters {
  position: absolute; left: 0; top: 0;
  padding-bottom: 30px;
  z-index: 3;
}
.CodeMirror-gutter {
  white-space: normal;
  height: 100%;
  padding-bottom: 30px;
  margin-bottom: -32px;
  display: inline-block;
  /* Hack to make IE7 behave */
  *zoom:1;
  *display:inline;
}
.CodeMirror-gutter-elt {
  position: absolute;
  cursor: default;
  z-index: 4;
}

.CodeMirror-lines {
  cursor: text;
}
.CodeMirror pre {
  /* Reset some styles that the rest of the page might have set */
  -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
  border-width: 0;
  background: transparent;
  font-family: inherit;
  font-size: inherit;
  margin: 0;
  white-space: pre;
  word-wrap: normal;
  line-height: inherit;
  color: inherit;
  z-index: 2;
  position: relative;
  overflow: visible;
}
.CodeMirror-wrap pre {
  word-wrap: break-word;
  white-space: pre-wrap;
  word-break: normal;
}
.CodeMirror-code pre {
  border-right: 30px solid transparent;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
}
.CodeMirror-wrap .CodeMirror-code pre {
  border-right: none;
  width: auto;
}
.CodeMirror-linebackground {
  position: absolute;
  left: 0; right: 0; top: 0; bottom: 0;
  z-index: 0;
}

.CodeMirror-linewidget {
  position: relative;
  z-index: 2;
  overflow: auto;
}

.CodeMirror-widget {
  display: inline-block;
}

.CodeMirror-wrap .CodeMirror-scroll {
  overflow-x: hidden;
}

.CodeMirror-measure {
  position: absolute;
  width: 100%; height: 0px;
  overflow: hidden;
  visibility: hidden;
}
.CodeMirror-measure pre { position: static; }

.CodeMirror div.CodeMirror-cursor {
  position: absolute;
  visibility: hidden;
  border-right: none;
  width: 0;
}
.CodeMirror-focused div.CodeMirror-cursor {
  visibility: visible;
}

.CodeMirror-selected { background: #d9d9d9; }
.CodeMirror-focused .CodeMirror-selected { background: #d7d4f0; }

.cm-searching {
  background: #ffa;
  background: rgba(255, 255, 0, .4);
}


.insertRowTable .CodeMirror {
    height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.6); ?>em;
    width: <?php echo ceil($GLOBALS['cfg']['TextareaCols'] * 0.6); ?>em;
    border: 1px solid #a9a9a9;
}

.autocomplete-column-name {
    display: inline-block;
}
.autocomplete-column-hint {
    display: inline-block;
    float: right;
    color: #666;
    margin-left: 1em;
}
.CodeMirror-hints {
    color: #999;
    background-color: #999;
    z-index: 200;
}
.CodeMirror-lint-tooltip {
    z-index: 200;
    font-family: inherit;
}
.CodeMirror-lint-tooltip code {
  font-family: monospace;
  font-weight: bold;
}


/* IE7 hack to prevent it from returning funny offsetTops on the spans */
.CodeMirror span { *vertical-align: text-bottom; }

@media print {
  /* Hide the cursor when printing */
  .CodeMirror div.CodeMirror-cursor {
    visibility: hidden;
  }
}
