<?php
/*
Plugin Name: Ricksticks Fancy Gallery
Plugin URI: 
Description: Add fancybox functionality to gallery elements.
Author: Mike Walsh @ Ricksticks
Author URI: http://ricksticks.com
Version: 0.2
*/

/*  Copyright 2012  Ricksticks  (email : admin@ricksticks.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class RSFancyGallery
{
	private $mousewheel = array(
		'file'    => 'fancybox/lib/jquery.mousewheel-3.0.6.pack.js',
		'version' => null
	);
	
	private $fancyBoxJS = array(
		'file' => 'fancybox/source/jquery.fancybox.pack.js',
		'version' => '2.1.3'
	);
	
	private $fancyBoxCSS = array(
		'file'    => 'fancybox/source/jquery.fancybox.css',
		'version' => '2.1.3'
	);
	
	private $fancyBoxMediaJS = array(
		'file' => 'fancybox/source/helpers/jquery.fancybox-media.js',
		'version' => '2.1.3'
	);
	
	public function __construct()
	{
		$dir = plugin_dir_url(__FILE__);
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('mousewheel',       $dir.$this->mousewheel['file'], array('jquery'), $this->mousewheel['version']);
		wp_enqueue_script('fancybox',         $dir.$this->fancyBoxJS['file'], array('jquery'), $this->fancyBoxJS['version']);
		wp_enqueue_style('fancybox',          $dir.$this->fancyBoxCSS['file'], false, $this->fancyBoxCSS['version']);
		wp_enqueue_script('fancybox-media',   $dir.$this->fancyBoxMediaJS['file'], array('jquery'), $this->fancyBoxMediaJS['version']);
		wp_enqueue_script('trigger-fancybox', $dir.'trigger-fancybox.js', array('fancybox'), '1');
		wp_enqueue_style('custom-fancybox',   $dir.'custom-fancybox.css', array('fancybox'), '1');
	}
}

$RSFancyGallery = new RSFancyGallery();
