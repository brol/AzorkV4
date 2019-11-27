<?php
# ***** BEGIN LICENSE BLOCK *****
#
#  	AzorkV4
#  	Theme by Azork (http://xtradotfreedotfr.free.fr/blog/)
#   Contributor : Pierre Van Glabeke
#   Icones by Fam Fam Fam (www.famfamfam.com)
#   License : public domain
#
# ***** END LICENSE BLOCK *****
if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			    "AzorkV4",
	/* Description*/		"Adaptation du kit Aorakit 2C de Kozlika",
	/* Author */			  "Azork, Pierre Van Glabeke",
	/* Version */			  '1.3',
	array(
		'type'		=>		'theme',
		'tplset' => 'mustek',
		'dc_min' => '2.15'
	)
);