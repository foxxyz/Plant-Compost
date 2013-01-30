<?php

	/**
	 * config.inc.php
	 *
	 * Core configuration variables and functions needed by the Compost Plugin
	 *
	 * Please DO NOT edit this file directly. Any configuration directives you want to overwrite should be
	 * redefined in <kbd>/app/config/config.inc.php</kbd> or <kbd>/app/config/config.local.inc.php</kbd>.
	 *
	 * @author Ivo Janssen <ivo@codedealers.com>
	 * @copyright Copyright (c) 2008, Ivo Janssen
	 * @license http://opensource.org/licenses/gpl-2.0.php GNU Public License v2
	 * @package plant_compost
	 * @subpackage config
	 * @version 1.2
	 */
	
	// Max accepted length of a comment (in characters)
	do_define("COMMENTS_MAX_LENGTH", 500); 
	
	// Default value to enable caching on the filebrowser
	do_define("FILEBROWSER_CACHE_ENABLE", false);
	
	// Default value for how long files are cached (in seconds)
	do_define("FILEBROWSER_CACHE_EXPIRE", 2419200); // 4 weeks
	
	// Location on disk where to store the cache
	do_define("FILEBROWSER_CACHE_LOCATION", "/home/protected/tmp/");
	
	// Possible encoding delay (in seconds)
	do_define("FILEBROWSER_ENCODING_DELAY", 300);
	
	// Estimated rate of encoding of video files (seconds per megabyte)
	do_define("FILEBROWSER_ENCODING_RATE", 20);
	
	// Default number of files to display in the filebrowser
	do_define("FILEBROWSER_FILES_PER_PAGE", 32);
	
	// Maximum size for files uploaded in the file browser (in bytes)
	do_define("FILEBROWSER_MAX_SIZE", 120 * 1024 * 1024); // 120MB
	
	// Number of upload boxes to offer
	do_define("FILEBROWSER_NUM_UPLOADS", 10);
		
	// Filebrowser memory limit, so it doesn't die on large file uploads
	do_define("FILEBROWSER_MEMORY_LIMIT", "164M");
		
	// Directory in which the file thumbs are stored
	do_define("FILEBROWSER_THUMBS_DIR", "content/posts/thumbs/");
	
	// Directory in which the browser thumbs are stored
	do_define("FILEBROWSER_THUMBS_DIR_INTERNAL", "content/posts/browser-thumbs/");
	
	// Width of the browser thumbs
	do_define("FILEBROWSER_THUMBS_WIDTH_INTERNAL", 140);
	
	// Directory in which files are uploaded for file browser
	do_define("FILEBROWSER_UPLOAD_DIR", "content/posts/");	
	
	// Accepted file types for photo type posts
	do_define("POST_IMAGE_FILE_TYPES", "image/jpeg,image/pjpeg,image/gif,image/png");
		
	// Max accepted file size for post images (in bytes)
	do_define("POST_IMAGE_MAX_FILE_SIZE", 1024 * 1024 * 5); 	// 5MB
	
	// Width of posts (used for automatic image resizing)
	do_define("POST_WIDTH", 580);
	
	// Posts Feed description
	do_define("POSTS_FEED_DESCRIPTION", "Feed Description Here");
	
	// Posts Feed description
	do_define("POSTS_FEED_TITLE", "Feed Title Here");
	
	// Posts displayed per page
	do_define("POSTS_PER_PAGE", 10);
	
	// Host where your media files are stored
	do_define("REMOTE_MEDIA_ROOT", "http://yoursitename.com");
	
	// Max accepted length of search query (in characters)
	do_define("SEARCH_QUERY_MAX_LENGTH", 20); 

?>