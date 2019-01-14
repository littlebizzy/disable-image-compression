=== Disable Image Compression ===

Contributors: littlebizzy
Tags: disable, image, compression, jpeg, jpg, media, upload, editor, thumbnails, quality
Requires at least: 4.4
Tested up to: 4.8
Stable tag: 1.0.2
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Completely disables all JPEG compression in WordPress including image uploads, thumbnails, and image editing tools, thus retaining original quality.

== Description ==

> Completely disables all JPEG compression in WordPress including image uploads, thumbnails, and image editing tools, thus retaining original quality.

One of the more unknown features of WordPress is that it automatically compresses any JPEG or JPG image file that is uploaded in the Media section and/or edited in the TinyMCE post editor (WYSIWYG). Although the goal of this is nice -- to reduce the size of files, thus improving speed or reducing bandwidth -- ultimately it serves little purpose for many websites because it is so arbitrary. For example, the default compression rate is 90% which can have widely varying results depending on the file. Rather than having a "set" compression rate across the board, it often makes more sense to crop images down to an appropriate size and then pre-compress them to an appropriate level either inside an image editing program such as Photoshop or with free online tools such as www.jpegmini.com (etc). In this way, the full quality of an uploaded image is preserved and the correct "look" and "feel" of images is not disturbed by the WordPress interface.

== Installation ==

1. Upload to `/wp-content/plugins/`
2. Activate via WP Admin >> Plugins menu

== Changelog ==

= 1.0.2 =
* recommended plugins

= 1.0.1 =
* tested with WordPress 4.8

= 1.0.0 =
* initial release