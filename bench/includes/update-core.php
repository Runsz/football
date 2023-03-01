<?php
/**
 * WordPress core upgrade functionality.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * @since 2.7.0
 *
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
	// 2.0
	'bench/import-b2.php',
	'bench/import-blogger.php',
	'bench/import-greymatter.php',
	'bench/import-livejournal.php',
	'bench/import-mt.php',
	'bench/import-rss.php',
	'bench/import-textpattern.php',
	'bench/quicktags.js',
	'wp-images/fade-butt.png',
	'wp-images/get-firefox.png',
	'wp-images/header-shadow.png',
	'wp-images/smilies',
	'wp-images/wp-small.png',
	'wp-images/wpminilogo.png',
	'wp.php',
	// 2.0.8
	'wp-includes/js/tinymce/plugins/inlinepopups/readme.txt',
	// 2.1
	'bench/edit-form-ajax-cat.php',
	'bench/execute-pings.php',
	'bench/inline-uploading.php',
	'bench/link-categories.php',
	'bench/list-manipulation.js',
	'bench/list-manipulation.php',
	'wp-includes/comment-functions.php',
	'wp-includes/feed-functions.php',
	'wp-includes/functions-compat.php',
	'wp-includes/functions-formatting.php',
	'wp-includes/functions-post.php',
	'wp-includes/js/dbx-key.js',
	'wp-includes/js/tinymce/plugins/autosave/langs/cs.js',
	'wp-includes/js/tinymce/plugins/autosave/langs/sv.js',
	'wp-includes/links.php',
	'wp-includes/pluggable-functions.php',
	'wp-includes/template-functions-author.php',
	'wp-includes/template-functions-category.php',
	'wp-includes/template-functions-general.php',
	'wp-includes/template-functions-links.php',
	'wp-includes/template-functions-post.php',
	'wp-includes/wp-l10n.php',
	// 2.2
	'bench/cat-js.php',
	'bench/import/b2.php',
	'wp-includes/js/autosave-js.php',
	'wp-includes/js/list-manipulation-js.php',
	'wp-includes/js/wp-ajax-js.php',
	// 2.3
	'bench/admin-db.php',
	'bench/cat.js',
	'bench/categories.js',
	'bench/custom-fields.js',
	'bench/dbx-admin-key.js',
	'bench/edit-comments.js',
	'bench/install-rtl.css',
	'bench/install.css',
	'bench/upgrade-schema.php',
	'bench/upload-functions.php',
	'bench/upload-rtl.css',
	'bench/upload.css',
	'bench/upload.js',
	'bench/users.js',
	'bench/widgets-rtl.css',
	'bench/widgets.css',
	'bench/xfn.js',
	'wp-includes/js/tinymce/license.html',
	// 2.5
	'bench/css/upload.css',
	'bench/images/box-bg-left.gif',
	'bench/images/box-bg-right.gif',
	'bench/images/box-bg.gif',
	'bench/images/box-butt-left.gif',
	'bench/images/box-butt-right.gif',
	'bench/images/box-butt.gif',
	'bench/images/box-head-left.gif',
	'bench/images/box-head-right.gif',
	'bench/images/box-head.gif',
	'bench/images/heading-bg.gif',
	'bench/images/login-bkg-bottom.gif',
	'bench/images/login-bkg-tile.gif',
	'bench/images/notice.gif',
	'bench/images/toggle.gif',
	'bench/includes/upload.php',
	'bench/js/dbx-admin-key.js',
	'bench/js/link-cat.js',
	'bench/profile-update.php',
	'bench/templates.php',
	'wp-includes/images/wlw/WpComments.png',
	'wp-includes/images/wlw/WpIcon.png',
	'wp-includes/images/wlw/WpWatermark.png',
	'wp-includes/js/dbx.js',
	'wp-includes/js/fat.js',
	'wp-includes/js/list-manipulation.js',
	'wp-includes/js/tinymce/langs/en.js',
	'wp-includes/js/tinymce/plugins/autosave/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/autosave/langs',
	'wp-includes/js/tinymce/plugins/directionality/images',
	'wp-includes/js/tinymce/plugins/directionality/langs',
	'wp-includes/js/tinymce/plugins/inlinepopups/css',
	'wp-includes/js/tinymce/plugins/inlinepopups/images',
	'wp-includes/js/tinymce/plugins/inlinepopups/jscripts',
	'wp-includes/js/tinymce/plugins/paste/images',
	'wp-includes/js/tinymce/plugins/paste/jscripts',
	'wp-includes/js/tinymce/plugins/paste/langs',
	'wp-includes/js/tinymce/plugins/spellchecker/classes/HttpClient.class.php',
	'wp-includes/js/tinymce/plugins/spellchecker/classes/TinyGoogleSpell.class.php',
	'wp-includes/js/tinymce/plugins/spellchecker/classes/TinyPspell.class.php',
	'wp-includes/js/tinymce/plugins/spellchecker/classes/TinyPspellShell.class.php',
	'wp-includes/js/tinymce/plugins/spellchecker/css/spellchecker.css',
	'wp-includes/js/tinymce/plugins/spellchecker/images',
	'wp-includes/js/tinymce/plugins/spellchecker/langs',
	'wp-includes/js/tinymce/plugins/spellchecker/tinyspell.php',
	'wp-includes/js/tinymce/plugins/wordpress/images',
	'wp-includes/js/tinymce/plugins/wordpress/langs',
	'wp-includes/js/tinymce/plugins/wordpress/wordpress.css',
	'wp-includes/js/tinymce/plugins/wphelp',
	'wp-includes/js/tinymce/themes/advanced/css',
	'wp-includes/js/tinymce/themes/advanced/images',
	'wp-includes/js/tinymce/themes/advanced/jscripts',
	'wp-includes/js/tinymce/themes/advanced/langs',
	// 2.5.1
	'wp-includes/js/tinymce/tiny_mce_gzip.php',
	// 2.6
	'bench/bookmarklet.php',
	'wp-includes/js/jquery/jquery.dimensions.min.js',
	'wp-includes/js/tinymce/plugins/wordpress/popups.css',
	'wp-includes/js/wp-ajax.js',
	// 2.7
	'bench/css/press-this-ie-rtl.css',
	'bench/css/press-this-ie.css',
	'bench/css/upload-rtl.css',
	'bench/edit-form.php',
	'bench/images/comment-pill.gif',
	'bench/images/comment-stalk-classic.gif',
	'bench/images/comment-stalk-fresh.gif',
	'bench/images/comment-stalk-rtl.gif',
	'bench/images/del.png',
	'bench/images/gear.png',
	'bench/images/media-button-gallery.gif',
	'bench/images/media-buttons.gif',
	'bench/images/postbox-bg.gif',
	'bench/images/tab.png',
	'bench/images/tail.gif',
	'bench/js/forms.js',
	'bench/js/upload.js',
	'bench/link-import.php',
	'wp-includes/images/audio.png',
	'wp-includes/images/css.png',
	'wp-includes/images/default.png',
	'wp-includes/images/doc.png',
	'wp-includes/images/exe.png',
	'wp-includes/images/html.png',
	'wp-includes/images/js.png',
	'wp-includes/images/pdf.png',
	'wp-includes/images/swf.png',
	'wp-includes/images/tar.png',
	'wp-includes/images/text.png',
	'wp-includes/images/video.png',
	'wp-includes/images/zip.png',
	'wp-includes/js/tinymce/tiny_mce_config.php',
	'wp-includes/js/tinymce/tiny_mce_ext.js',
	// 2.8
	'bench/js/users.js',
	'wp-includes/js/swfupload/plugins/swfupload.documentready.js',
	'wp-includes/js/swfupload/plugins/swfupload.graceful_degradation.js',
	'wp-includes/js/swfupload/swfupload_f9.swf',
	'wp-includes/js/tinymce/plugins/autosave',
	'wp-includes/js/tinymce/plugins/paste/css',
	'wp-includes/js/tinymce/utils/mclayer.js',
	'wp-includes/js/tinymce/wordpress.css',
	// 2.8.5
	'bench/import/btt.php',
	'bench/import/jkw.php',
	// 2.9
	'bench/js/page.dev.js',
	'bench/js/page.js',
	'bench/js/set-post-thumbnail-handler.dev.js',
	'bench/js/set-post-thumbnail-handler.js',
	'bench/js/slug.dev.js',
	'bench/js/slug.js',
	'wp-includes/gettext.php',
	'wp-includes/js/tinymce/plugins/wordpress/js',
	'wp-includes/streams.php',
	// MU
	'README.txt',
	'htaccess.dist',
	'index-install.php',
	'bench/css/mu-rtl.css',
	'bench/css/mu.css',
	'bench/images/site-admin.png',
	'bench/includes/mu.php',
	'bench/wpmu-admin.php',
	'bench/wpmu-blogs.php',
	'bench/wpmu-edit.php',
	'bench/wpmu-options.php',
	'bench/wpmu-themes.php',
	'bench/wpmu-upgrade-site.php',
	'bench/wpmu-users.php',
	'wp-includes/images/wordpress-mu.png',
	'wp-includes/wpmu-default-filters.php',
	'wp-includes/wpmu-functions.php',
	'wpmu-settings.php',
	// 3.0
	'bench/categories.php',
	'bench/edit-category-form.php',
	'bench/edit-page-form.php',
	'bench/edit-pages.php',
	'bench/images/admin-header-footer.png',
	'bench/images/browse-happy.gif',
	'bench/images/ico-add.png',
	'bench/images/ico-close.png',
	'bench/images/ico-edit.png',
	'bench/images/ico-viewpage.png',
	'bench/images/fav-top.png',
	'bench/images/screen-options-left.gif',
	'bench/images/wp-logo-vs.gif',
	'bench/images/wp-logo.gif',
	'bench/import',
	'bench/js/wp-gears.dev.js',
	'bench/js/wp-gears.js',
	'bench/options-misc.php',
	'bench/page-new.php',
	'bench/page.php',
	'bench/rtl.css',
	'bench/rtl.dev.css',
	'bench/update-links.php',
	'bench/bench.css',
	'bench/bench.dev.css',
	'wp-includes/js/codepress',
	'wp-includes/js/codepress/engines/khtml.js',
	'wp-includes/js/codepress/engines/older.js',
	'wp-includes/js/jquery/autocomplete.dev.js',
	'wp-includes/js/jquery/autocomplete.js',
	'wp-includes/js/jquery/interface.js',
	'wp-includes/js/scriptaculous/prototype.js',
	// Following file added back in 5.1, see #45645.
	//'wp-includes/js/tinymce/wp-tinymce.js',
	// 3.1
	'bench/edit-attachment-rows.php',
	'bench/edit-link-categories.php',
	'bench/edit-link-category-form.php',
	'bench/edit-post-rows.php',
	'bench/images/button-grad-active-vs.png',
	'bench/images/button-grad-vs.png',
	'bench/images/fav-arrow-vs-rtl.gif',
	'bench/images/fav-arrow-vs.gif',
	'bench/images/fav-top-vs.gif',
	'bench/images/list-vs.png',
	'bench/images/screen-options-right-up.gif',
	'bench/images/screen-options-right.gif',
	'bench/images/visit-site-button-grad-vs.gif',
	'bench/images/visit-site-button-grad.gif',
	'bench/link-category.php',
	'bench/sidebar.php',
	'wp-includes/classes.php',
	'wp-includes/js/tinymce/blank.htm',
	'wp-includes/js/tinymce/plugins/media/css/content.css',
	'wp-includes/js/tinymce/plugins/media/img',
	'wp-includes/js/tinymce/plugins/safari',
	// 3.2
	'bench/images/logo-login.gif',
	'bench/images/star.gif',
	'bench/js/list-table.dev.js',
	'bench/js/list-table.js',
	'wp-includes/default-embeds.php',
	'wp-includes/js/tinymce/plugins/wordpress/img/help.gif',
	'wp-includes/js/tinymce/plugins/wordpress/img/more.gif',
	'wp-includes/js/tinymce/plugins/wordpress/img/toolbars.gif',
	'wp-includes/js/tinymce/themes/advanced/img/fm.gif',
	'wp-includes/js/tinymce/themes/advanced/img/sflogo.png',
	// 3.3
	'bench/css/colors-classic-rtl.css',
	'bench/css/colors-classic-rtl.dev.css',
	'bench/css/colors-fresh-rtl.css',
	'bench/css/colors-fresh-rtl.dev.css',
	'bench/css/dashboard-rtl.dev.css',
	'bench/css/dashboard.dev.css',
	'bench/css/global-rtl.css',
	'bench/css/global-rtl.dev.css',
	'bench/css/global.css',
	'bench/css/global.dev.css',
	'bench/css/install-rtl.dev.css',
	'bench/css/login-rtl.dev.css',
	'bench/css/login.dev.css',
	'bench/css/ms.css',
	'bench/css/ms.dev.css',
	'bench/css/nav-menu-rtl.css',
	'bench/css/nav-menu-rtl.dev.css',
	'bench/css/nav-menu.css',
	'bench/css/nav-menu.dev.css',
	'bench/css/plugin-install-rtl.css',
	'bench/css/plugin-install-rtl.dev.css',
	'bench/css/plugin-install.css',
	'bench/css/plugin-install.dev.css',
	'bench/css/press-this-rtl.dev.css',
	'bench/css/press-this.dev.css',
	'bench/css/theme-editor-rtl.css',
	'bench/css/theme-editor-rtl.dev.css',
	'bench/css/theme-editor.css',
	'bench/css/theme-editor.dev.css',
	'bench/css/theme-install-rtl.css',
	'bench/css/theme-install-rtl.dev.css',
	'bench/css/theme-install.css',
	'bench/css/theme-install.dev.css',
	'bench/css/widgets-rtl.dev.css',
	'bench/css/widgets.dev.css',
	'bench/includes/internal-linking.php',
	'wp-includes/images/admin-bar-sprite-rtl.png',
	'wp-includes/js/jquery/ui.button.js',
	'wp-includes/js/jquery/ui.core.js',
	'wp-includes/js/jquery/ui.dialog.js',
	'wp-includes/js/jquery/ui.draggable.js',
	'wp-includes/js/jquery/ui.droppable.js',
	'wp-includes/js/jquery/ui.mouse.js',
	'wp-includes/js/jquery/ui.position.js',
	'wp-includes/js/jquery/ui.resizable.js',
	'wp-includes/js/jquery/ui.selectable.js',
	'wp-includes/js/jquery/ui.sortable.js',
	'wp-includes/js/jquery/ui.tabs.js',
	'wp-includes/js/jquery/ui.widget.js',
	'wp-includes/js/l10n.dev.js',
	'wp-includes/js/l10n.js',
	'wp-includes/js/tinymce/plugins/wplink/css',
	'wp-includes/js/tinymce/plugins/wplink/img',
	'wp-includes/js/tinymce/plugins/wplink/js',
	'wp-includes/js/tinymce/themes/advanced/img/wpicons.png',
	'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/butt2.png',
	'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/button_bg.png',
	'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/down_arrow.gif',
	'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/fade-butt.png',
	'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/separator.gif',
	// Don't delete, yet: 'wp-rss.php',
	// Don't delete, yet: 'wp-rdf.php',
	// Don't delete, yet: 'wp-rss2.php',
	// Don't delete, yet: 'wp-commentsrss2.php',
	// Don't delete, yet: 'wp-atom.php',
	// Don't delete, yet: 'wp-feed.php',
	// 3.4
	'bench/images/gray-star.png',
	'bench/images/logo-login.png',
	'bench/images/star.png',
	'bench/index-extra.php',
	'bench/network/index-extra.php',
	'bench/user/index-extra.php',
	'bench/images/screenshots/admin-flyouts.png',
	'bench/images/screenshots/coediting.png',
	'bench/images/screenshots/drag-and-drop.png',
	'bench/images/screenshots/help-screen.png',
	'bench/images/screenshots/media-icon.png',
	'bench/images/screenshots/new-feature-pointer.png',
	'bench/images/screenshots/welcome-screen.png',
	'wp-includes/css/editor-buttons.css',
	'wp-includes/css/editor-buttons.dev.css',
	'wp-includes/js/tinymce/plugins/paste/blank.htm',
	'wp-includes/js/tinymce/plugins/wordpress/css',
	'wp-includes/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
	'wp-includes/js/tinymce/plugins/wordpress/img/embedded.png',
	'wp-includes/js/tinymce/plugins/wordpress/img/more_bug.gif',
	'wp-includes/js/tinymce/plugins/wordpress/img/page_bug.gif',
	'wp-includes/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
	'wp-includes/js/tinymce/plugins/wpeditimage/css/editimage-rtl.css',
	'wp-includes/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
	'wp-includes/js/tinymce/plugins/wpfullscreen/editor_plugin.dev.js',
	'wp-includes/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
	'wp-includes/js/tinymce/plugins/wpgallery/img/gallery.png',
	'wp-includes/js/tinymce/plugins/wplink/editor_plugin.dev.js',
	// Don't delete, yet: 'wp-pass.php',
	// Don't delete, yet: 'wp-register.php',
	// 3.5
	'bench/gears-manifest.php',
	'bench/includes/manifest.php',
	'bench/images/archive-link.png',
	'bench/images/blue-grad.png',
	'bench/images/button-grad-active.png',
	'bench/images/button-grad.png',
	'bench/images/ed-bg-vs.gif',
	'bench/images/ed-bg.gif',
	'bench/images/fade-butt.png',
	'bench/images/fav-arrow-rtl.gif',
	'bench/images/fav-arrow.gif',
	'bench/images/fav-vs.png',
	'bench/images/fav.png',
	'bench/images/gray-grad.png',
	'bench/images/loading-publish.gif',
	'bench/images/logo-ghost.png',
	'bench/images/logo.gif',
	'bench/images/menu-arrow-frame-rtl.png',
	'bench/images/menu-arrow-frame.png',
	'bench/images/menu-arrows.gif',
	'bench/images/menu-bits-rtl-vs.gif',
	'bench/images/menu-bits-rtl.gif',
	'bench/images/menu-bits-vs.gif',
	'bench/images/menu-bits.gif',
	'bench/images/menu-dark-rtl-vs.gif',
	'bench/images/menu-dark-rtl.gif',
	'bench/images/menu-dark-vs.gif',
	'bench/images/menu-dark.gif',
	'bench/images/required.gif',
	'bench/images/screen-options-toggle-vs.gif',
	'bench/images/screen-options-toggle.gif',
	'bench/images/toggle-arrow-rtl.gif',
	'bench/images/toggle-arrow.gif',
	'bench/images/upload-classic.png',
	'bench/images/upload-fresh.png',
	'bench/images/white-grad-active.png',
	'bench/images/white-grad.png',
	'bench/images/widgets-arrow-vs.gif',
	'bench/images/widgets-arrow.gif',
	'bench/images/wpspin_dark.gif',
	'wp-includes/images/upload.png',
	'wp-includes/js/prototype.js',
	'wp-includes/js/scriptaculous',
	'bench/css/bench-rtl.dev.css',
	'bench/css/bench.dev.css',
	'bench/css/media-rtl.dev.css',
	'bench/css/media.dev.css',
	'bench/css/colors-classic.dev.css',
	'bench/css/customize-controls-rtl.dev.css',
	'bench/css/customize-controls.dev.css',
	'bench/css/ie-rtl.dev.css',
	'bench/css/ie.dev.css',
	'bench/css/install.dev.css',
	'bench/css/colors-fresh.dev.css',
	'wp-includes/js/customize-base.dev.js',
	'wp-includes/js/json2.dev.js',
	'wp-includes/js/comment-reply.dev.js',
	'wp-includes/js/customize-preview.dev.js',
	'wp-includes/js/wplink.dev.js',
	'wp-includes/js/tw-sack.dev.js',
	'wp-includes/js/wp-list-revisions.dev.js',
	'wp-includes/js/autosave.dev.js',
	'wp-includes/js/admin-bar.dev.js',
	'wp-includes/js/quicktags.dev.js',
	'wp-includes/js/wp-ajax-response.dev.js',
	'wp-includes/js/wp-pointer.dev.js',
	'wp-includes/js/hoverIntent.dev.js',
	'wp-includes/js/colorpicker.dev.js',
	'wp-includes/js/wp-lists.dev.js',
	'wp-includes/js/customize-loader.dev.js',
	'wp-includes/js/jquery/jquery.table-hotkeys.dev.js',
	'wp-includes/js/jquery/jquery.color.dev.js',
	'wp-includes/js/jquery/jquery.color.js',
	'wp-includes/js/jquery/jquery.hotkeys.dev.js',
	'wp-includes/js/jquery/jquery.form.dev.js',
	'wp-includes/js/jquery/suggest.dev.js',
	'bench/js/xfn.dev.js',
	'bench/js/set-post-thumbnail.dev.js',
	'bench/js/comment.dev.js',
	'bench/js/theme.dev.js',
	'bench/js/cat.dev.js',
	'bench/js/password-strength-meter.dev.js',
	'bench/js/user-profile.dev.js',
	'bench/js/theme-preview.dev.js',
	'bench/js/post.dev.js',
	'bench/js/media-upload.dev.js',
	'bench/js/word-count.dev.js',
	'bench/js/plugin-install.dev.js',
	'bench/js/edit-comments.dev.js',
	'bench/js/media-gallery.dev.js',
	'bench/js/custom-fields.dev.js',
	'bench/js/custom-background.dev.js',
	'bench/js/common.dev.js',
	'bench/js/inline-edit-tax.dev.js',
	'bench/js/gallery.dev.js',
	'bench/js/utils.dev.js',
	'bench/js/widgets.dev.js',
	'bench/js/wp-fullscreen.dev.js',
	'bench/js/nav-menu.dev.js',
	'bench/js/dashboard.dev.js',
	'bench/js/link.dev.js',
	'bench/js/user-suggest.dev.js',
	'bench/js/postbox.dev.js',
	'bench/js/tags.dev.js',
	'bench/js/image-edit.dev.js',
	'bench/js/media.dev.js',
	'bench/js/customize-controls.dev.js',
	'bench/js/inline-edit-post.dev.js',
	'bench/js/categories.dev.js',
	'bench/js/editor.dev.js',
	'wp-includes/js/tinymce/plugins/wpeditimage/js/editimage.dev.js',
	'wp-includes/js/tinymce/plugins/wpdialogs/js/popup.dev.js',
	'wp-includes/js/tinymce/plugins/wpdialogs/js/wpdialog.dev.js',
	'wp-includes/js/plupload/handlers.dev.js',
	'wp-includes/js/plupload/wp-plupload.dev.js',
	'wp-includes/js/swfupload/handlers.dev.js',
	'wp-includes/js/jcrop/jquery.Jcrop.dev.js',
	'wp-includes/js/jcrop/jquery.Jcrop.js',
	'wp-includes/js/jcrop/jquery.Jcrop.css',
	'wp-includes/js/imgareaselect/jquery.imgareaselect.dev.js',
	'wp-includes/css/wp-pointer.dev.css',
	'wp-includes/css/editor.dev.css',
	'wp-includes/css/jquery-ui-dialog.dev.css',
	'wp-includes/css/admin-bar-rtl.dev.css',
	'wp-includes/css/admin-bar.dev.css',
	'wp-includes/js/jquery/ui/jquery.effects.clip.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.scale.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.blind.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.core.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.shake.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.fade.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.explode.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.slide.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.drop.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.highlight.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.bounce.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.pulsate.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.transfer.min.js',
	'wp-includes/js/jquery/ui/jquery.effects.fold.min.js',
	'bench/images/screenshots/captions-1.png',
	'bench/images/screenshots/captions-2.png',
	'bench/images/screenshots/flex-header-1.png',
	'bench/images/screenshots/flex-header-2.png',
	'bench/images/screenshots/flex-header-3.png',
	'bench/images/screenshots/flex-header-media-library.png',
	'bench/images/screenshots/theme-customizer.png',
	'bench/images/screenshots/twitter-embed-1.png',
	'bench/images/screenshots/twitter-embed-2.png',
	'bench/js/utils.js',
	// Added back in 5.3 [45448], see #43895.
	// 'bench/options-privacy.php',
	'wp-app.php',
	'wp-includes/class-wp-atom-server.php',
	'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/ui.css',
	// 3.5.2
	'wp-includes/js/swfupload/swfupload-all.js',
	// 3.6
	'bench/js/revisions-js.php',
	'bench/images/screenshots',
	'bench/js/categories.js',
	'bench/js/categories.min.js',
	'bench/js/custom-fields.js',
	'bench/js/custom-fields.min.js',
	// 3.7
	'bench/js/cat.js',
	'bench/js/cat.min.js',
	'wp-includes/js/tinymce/plugins/wpeditimage/js/editimage.min.js',
	// 3.8
	'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/page_bug.gif',
	'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/more_bug.gif',
	'wp-includes/js/thickbox/tb-close-2x.png',
	'wp-includes/js/thickbox/tb-close.png',
	'wp-includes/images/wpmini-blue-2x.png',
	'wp-includes/images/wpmini-blue.png',
	'bench/css/colors-fresh.css',
	'bench/css/colors-classic.css',
	'bench/css/colors-fresh.min.css',
	'bench/css/colors-classic.min.css',
	'bench/js/about.min.js',
	'bench/js/about.js',
	'bench/images/arrows-dark-vs-2x.png',
	'bench/images/wp-logo-vs.png',
	'bench/images/arrows-dark-vs.png',
	'bench/images/wp-logo.png',
	'bench/images/arrows-pr.png',
	'bench/images/arrows-dark.png',
	'bench/images/press-this.png',
	'bench/images/press-this-2x.png',
	'bench/images/arrows-vs-2x.png',
	'bench/images/welcome-icons.png',
	'bench/images/wp-logo-2x.png',
	'bench/images/stars-rtl-2x.png',
	'bench/images/arrows-dark-2x.png',
	'bench/images/arrows-pr-2x.png',
	'bench/images/menu-shadow-rtl.png',
	'bench/images/arrows-vs.png',
	'bench/images/about-search-2x.png',
	'bench/images/bubble_bg-rtl-2x.gif',
	'bench/images/wp-badge-2x.png',
	'bench/images/wordpress-logo-2x.png',
	'bench/images/bubble_bg-rtl.gif',
	'bench/images/wp-badge.png',
	'bench/images/menu-shadow.png',
	'bench/images/about-globe-2x.png',
	'bench/images/welcome-icons-2x.png',
	'bench/images/stars-rtl.png',
	'bench/images/wp-logo-vs-2x.png',
	'bench/images/about-updates-2x.png',
	// 3.9
	'bench/css/colors.css',
	'bench/css/colors.min.css',
	'bench/css/colors-rtl.css',
	'bench/css/colors-rtl.min.css',
	// Following files added back in 4.5, see #36083.
	// 'bench/css/media-rtl.min.css',
	// 'bench/css/media.min.css',
	// 'bench/css/farbtastic-rtl.min.css',
	'bench/images/lock-2x.png',
	'bench/images/lock.png',
	'bench/js/theme-preview.js',
	'bench/js/theme-install.min.js',
	'bench/js/theme-install.js',
	'bench/js/theme-preview.min.js',
	'wp-includes/js/plupload/plupload.html4.js',
	'wp-includes/js/plupload/plupload.html5.js',
	'wp-includes/js/plupload/changelog.txt',
	'wp-includes/js/plupload/plupload.silverlight.js',
	'wp-includes/js/plupload/plupload.flash.js',
	// Added back in 4.9 [41328], see #41755.
	// 'wp-includes/js/plupload/plupload.js',
	'wp-includes/js/tinymce/plugins/spellchecker',
	'wp-includes/js/tinymce/plugins/inlinepopups',
	'wp-includes/js/tinymce/plugins/media/js',
	'wp-includes/js/tinymce/plugins/media/css',
	'wp-includes/js/tinymce/plugins/wordpress/img',
	'wp-includes/js/tinymce/plugins/wpdialogs/js',
	'wp-includes/js/tinymce/plugins/wpeditimage/img',
	'wp-includes/js/tinymce/plugins/wpeditimage/js',
	'wp-includes/js/tinymce/plugins/wpeditimage/css',
	'wp-includes/js/tinymce/plugins/wpgallery/img',
	'wp-includes/js/tinymce/plugins/wpfullscreen/css',
	'wp-includes/js/tinymce/plugins/paste/js',
	'wp-includes/js/tinymce/themes/advanced',
	'wp-includes/js/tinymce/tiny_mce.js',
	'wp-includes/js/tinymce/mark_loaded_src.js',
	'wp-includes/js/tinymce/wp-tinymce-schema.js',
	'wp-includes/js/tinymce/plugins/media/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/media/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/media/media.htm',
	'wp-includes/js/tinymce/plugins/wpview/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/wpview/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/directionality/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/directionality/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/wordpress/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/wordpress/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/wpdialogs/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/wpdialogs/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/wpeditimage/editimage.html',
	'wp-includes/js/tinymce/plugins/wpeditimage/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/wpeditimage/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/fullscreen/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/fullscreen/fullscreen.htm',
	'wp-includes/js/tinymce/plugins/fullscreen/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/wplink/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/wplink/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/wpgallery/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/wpgallery/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/tabfocus/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/tabfocus/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/wpfullscreen/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/wpfullscreen/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/paste/editor_plugin.js',
	'wp-includes/js/tinymce/plugins/paste/pasteword.htm',
	'wp-includes/js/tinymce/plugins/paste/editor_plugin_src.js',
	'wp-includes/js/tinymce/plugins/paste/pastetext.htm',
	'wp-includes/js/tinymce/langs/wp-langs.php',
	// 4.1
	'wp-includes/js/jquery/ui/jquery.ui.accordion.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.autocomplete.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.button.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.core.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.datepicker.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.dialog.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.draggable.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.droppable.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-blind.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-bounce.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-clip.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-drop.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-explode.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-fade.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-fold.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-highlight.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-pulsate.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-scale.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-shake.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-slide.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect-transfer.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.effect.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.menu.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.mouse.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.position.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.progressbar.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.resizable.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.selectable.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.slider.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.sortable.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.spinner.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.tabs.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.tooltip.min.js',
	'wp-includes/js/jquery/ui/jquery.ui.widget.min.js',
	'wp-includes/js/tinymce/skins/wordpress/images/dashicon-no-alt.png',
	// 4.3
	'bench/js/wp-fullscreen.js',
	'bench/js/wp-fullscreen.min.js',
	'wp-includes/js/tinymce/wp-mce-help.php',
	'wp-includes/js/tinymce/plugins/wpfullscreen',
	// 4.5
	'wp-includes/theme-compat/comments-popup.php',
	// 4.6
	'bench/includes/class-wp-automatic-upgrader.php', // Wrong file name, see #37628.
	// 4.8
	'wp-includes/js/tinymce/plugins/wpembed',
	'wp-includes/js/tinymce/plugins/media/moxieplayer.swf',
	'wp-includes/js/tinymce/skins/lightgray/fonts/readme.md',
	'wp-includes/js/tinymce/skins/lightgray/fonts/tinymce-small.json',
	'wp-includes/js/tinymce/skins/lightgray/fonts/tinymce.json',
	'wp-includes/js/tinymce/skins/lightgray/skin.ie7.min.css',
	// 4.9
	'bench/css/press-this-editor-rtl.css',
	'bench/css/press-this-editor-rtl.min.css',
	'bench/css/press-this-editor.css',
	'bench/css/press-this-editor.min.css',
	'bench/css/press-this-rtl.css',
	'bench/css/press-this-rtl.min.css',
	'bench/css/press-this.css',
	'bench/css/press-this.min.css',
	'bench/includes/class-wp-press-this.php',
	'bench/js/bookmarklet.js',
	'bench/js/bookmarklet.min.js',
	'bench/js/press-this.js',
	'bench/js/press-this.min.js',
	'wp-includes/js/mediaelement/background.png',
	'wp-includes/js/mediaelement/bigplay.png',
	'wp-includes/js/mediaelement/bigplay.svg',
	'wp-includes/js/mediaelement/controls.png',
	'wp-includes/js/mediaelement/controls.svg',
	'wp-includes/js/mediaelement/flashmediaelement.swf',
	'wp-includes/js/mediaelement/froogaloop.min.js',
	'wp-includes/js/mediaelement/jumpforward.png',
	'wp-includes/js/mediaelement/loading.gif',
	'wp-includes/js/mediaelement/silverlightmediaelement.xap',
	'wp-includes/js/mediaelement/skipback.png',
	'wp-includes/js/plupload/plupload.flash.swf',
	'wp-includes/js/plupload/plupload.full.min.js',
	'wp-includes/js/plupload/plupload.silverlight.xap',
	'wp-includes/js/swfupload/plugins',
	'wp-includes/js/swfupload/swfupload.swf',
	// 4.9.2
	'wp-includes/js/mediaelement/lang',
	'wp-includes/js/mediaelement/lang/ca.js',
	'wp-includes/js/mediaelement/lang/cs.js',
	'wp-includes/js/mediaelement/lang/de.js',
	'wp-includes/js/mediaelement/lang/es.js',
	'wp-includes/js/mediaelement/lang/fa.js',
	'wp-includes/js/mediaelement/lang/fr.js',
	'wp-includes/js/mediaelement/lang/hr.js',
	'wp-includes/js/mediaelement/lang/hu.js',
	'wp-includes/js/mediaelement/lang/it.js',
	'wp-includes/js/mediaelement/lang/ja.js',
	'wp-includes/js/mediaelement/lang/ko.js',
	'wp-includes/js/mediaelement/lang/nl.js',
	'wp-includes/js/mediaelement/lang/pl.js',
	'wp-includes/js/mediaelement/lang/pt.js',
	'wp-includes/js/mediaelement/lang/ro.js',
	'wp-includes/js/mediaelement/lang/ru.js',
	'wp-includes/js/mediaelement/lang/sk.js',
	'wp-includes/js/mediaelement/lang/sv.js',
	'wp-includes/js/mediaelement/lang/uk.js',
	'wp-includes/js/mediaelement/lang/zh-cn.js',
	'wp-includes/js/mediaelement/lang/zh.js',
	'wp-includes/js/mediaelement/mediaelement-flash-audio-ogg.swf',
	'wp-includes/js/mediaelement/mediaelement-flash-audio.swf',
	'wp-includes/js/mediaelement/mediaelement-flash-video-hls.swf',
	'wp-includes/js/mediaelement/mediaelement-flash-video-mdash.swf',
	'wp-includes/js/mediaelement/mediaelement-flash-video.swf',
	'wp-includes/js/mediaelement/renderers/dailymotion.js',
	'wp-includes/js/mediaelement/renderers/dailymotion.min.js',
	'wp-includes/js/mediaelement/renderers/facebook.js',
	'wp-includes/js/mediaelement/renderers/facebook.min.js',
	'wp-includes/js/mediaelement/renderers/soundcloud.js',
	'wp-includes/js/mediaelement/renderers/soundcloud.min.js',
	'wp-includes/js/mediaelement/renderers/twitch.js',
	'wp-includes/js/mediaelement/renderers/twitch.min.js',
	// 5.0
	'wp-includes/js/codemirror/jshint.js',
	// 5.1
	'wp-includes/random_compat/random_bytes_openssl.php',
	'wp-includes/js/tinymce/wp-tinymce.js.gz',
	// 5.3
	'wp-includes/js/wp-a11y.js',     // Moved to: wp-includes/js/dist/a11y.js
	'wp-includes/js/wp-a11y.min.js', // Moved to: wp-includes/js/dist/a11y.min.js
	// 5.4
	'bench/js/wp-fullscreen-stub.js',
	'bench/js/wp-fullscreen-stub.min.js',
	// 5.5
	'bench/css/ie.css',
	'bench/css/ie.min.css',
	'bench/css/ie-rtl.css',
	'bench/css/ie-rtl.min.css',
	// 5.6
	'wp-includes/js/jquery/ui/position.min.js',
	'wp-includes/js/jquery/ui/widget.min.js',
	// 5.7
	'wp-includes/blocks/classic/block.json',
	// 5.8
	'bench/images/freedoms.png',
	'bench/images/privacy.png',
	'bench/images/about-badge.svg',
	'bench/images/about-color-palette.svg',
	'bench/images/about-color-palette-vert.svg',
	'bench/images/about-header-brushes.svg',
	'wp-includes/block-patterns/large-header.php',
	'wp-includes/block-patterns/heading-paragraph.php',
	'wp-includes/block-patterns/quote.php',
	'wp-includes/block-patterns/text-three-columns-buttons.php',
	'wp-includes/block-patterns/two-buttons.php',
	'wp-includes/block-patterns/two-images.php',
	'wp-includes/block-patterns/three-buttons.php',
	'wp-includes/block-patterns/text-two-columns-with-images.php',
	'wp-includes/block-patterns/text-two-columns.php',
	'wp-includes/block-patterns/large-header-button.php',
	'wp-includes/blocks/subhead/block.json',
	'wp-includes/blocks/subhead',
	'wp-includes/css/dist/editor/editor-styles.css',
	'wp-includes/css/dist/editor/editor-styles.min.css',
	'wp-includes/css/dist/editor/editor-styles-rtl.css',
	'wp-includes/css/dist/editor/editor-styles-rtl.min.css',
	// 5.9
	'wp-includes/blocks/heading/editor.css',
	'wp-includes/blocks/heading/editor.min.css',
	'wp-includes/blocks/heading/editor-rtl.css',
	'wp-includes/blocks/heading/editor-rtl.min.css',
	'wp-includes/blocks/post-content/editor.css',
	'wp-includes/blocks/post-content/editor.min.css',
	'wp-includes/blocks/post-content/editor-rtl.css',
	'wp-includes/blocks/post-content/editor-rtl.min.css',
	'wp-includes/blocks/query-title/editor.css',
	'wp-includes/blocks/query-title/editor.min.css',
	'wp-includes/blocks/query-title/editor-rtl.css',
	'wp-includes/blocks/query-title/editor-rtl.min.css',
	'wp-includes/blocks/tag-cloud/editor.css',
	'wp-includes/blocks/tag-cloud/editor.min.css',
	'wp-includes/blocks/tag-cloud/editor-rtl.css',
	'wp-includes/blocks/tag-cloud/editor-rtl.min.css',
	// 6.0
	'wp-content/themes/twentytwentytwo/assets/fonts/LICENSE.md',
	// 6.1
	'wp-content/themes/twentytwentyone/assets/sass/05-blocks/spacer/_style.scss',
	'wp-content/themes/twentytwentyone/assets/sass/05-blocks/spacer',
	'wp-includes/blocks/post-comments.php',
	'wp-includes/blocks/post-comments/block.json',
	'wp-includes/blocks/post-comments/editor.css',
	'wp-includes/blocks/post-comments/editor.min.css',
	'wp-includes/blocks/post-comments/editor-rtl.css',
	'wp-includes/blocks/post-comments/editor-rtl.min.css',
	'wp-includes/blocks/post-comments/style.css',
	'wp-includes/blocks/post-comments/style.min.css',
	'wp-includes/blocks/post-comments/style-rtl.css',
	'wp-includes/blocks/post-comments/style-rtl.min.css',
	'wp-includes/blocks/post-comments',
	'wp-includes/blocks/comments-query-loop/block.json',
	'wp-includes/blocks/comments-query-loop/editor.css',
	'wp-includes/blocks/comments-query-loop/editor.min.css',
	'wp-includes/blocks/comments-query-loop/editor-rtl.css',
	'wp-includes/blocks/comments-query-loop/editor-rtl.min.css',
	'wp-includes/blocks/comments-query-loop',
);

/**
 * Stores new files in wp-content to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the WordPress Upgrade. These items will not be
 * re-installed in future upgrades, this behaviour is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to wp-content) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @since 4.7.0 New themes were not automatically installed for 4.4-4.6 on
 *              upgrade. New themes are now installed again. To disable new
 *              themes from being installed on upgrade, explicitly define
 *              CORE_UPGRADE_SKIP_NEW_BUNDLED as true.
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
	'plugins/akismet/'          => '2.0',
	'themes/twentyten/'         => '3.0',
	'themes/twentyeleven/'      => '3.2',
	'themes/twentytwelve/'      => '3.5',
	'themes/twentythirteen/'    => '3.6',
	'themes/twentyfourteen/'    => '3.8',
	'themes/twentyfifteen/'     => '4.1',
	'themes/twentysixteen/'     => '4.4',
	'themes/twentyseventeen/'   => '4.7',
	'themes/twentynineteen/'    => '5.0',
	'themes/twentytwenty/'      => '5.3',
	'themes/twentytwentyone/'   => '5.6',
	'themes/twentytwentytwo/'   => '5.9',
	'themes/twentytwentythree/' => '6.1',
);

/**
 * Upgrades the core of WordPress.
 *
 * This will create a .maintenance file at the base of the WordPress directory
 * to ensure that people can not access the web site, when the files are being
 * copied to their locations.
 *
 * The files in the `$_old_files` list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the `$_new_bundled_files` list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current WordPress base.
 *   3. Copy new WordPress directory over old WordPress files.
 *   4. Upgrade WordPress to new version.
 *     4.1. Copy all files/folders other than wp-content
 *     4.2. Copy any language files to WP_LANG_DIR (which may differ from WP_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new WordPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new WordPress over the old fails, then the worse is that
 * the new WordPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @global WP_Filesystem_Base $wp_filesystem          WordPress filesystem subclass.
 * @global array              $_old_files
 * @global array              $_new_bundled_files
 * @global wpdb               $wpdb                   WordPress database abstraction object.
 * @global string             $wp_version
 * @global string             $required_php_version
 * @global string             $required_mysql_version
 *
 * @param string $from New release unzipped path.
 * @param string $to   Path to old WordPress installation.
 * @return string|WP_Error New WordPress version on success, WP_Error on failure.
 */
function update_core( $from, $to ) {
	global $wp_filesystem, $_old_files, $_new_bundled_files, $wpdb;

	set_time_limit( 300 );

	/**
	 * Filters feedback messages displayed during the core update process.
	 *
	 * The filter is first evaluated after the zip file for the latest version
	 * has been downloaded and unzipped. It is evaluated five more times during
	 * the process:
	 *
	 * 1. Before WordPress begins the core upgrade process.
	 * 2. Before Maintenance Mode is enabled.
	 * 3. Before WordPress begins copying over the necessary files.
	 * 4. Before Maintenance Mode is disabled.
	 * 5. Before the database is upgraded.
	 *
	 * @since 2.5.0
	 *
	 * @param string $feedback The core update feedback messages.
	 */
	apply_filters( 'update_feedback', __( 'Verifying the unpacked files&#8230;' ) );

	// Sanity check the unzipped distribution.
	$distro = '';
	$roots  = array( '/wordpress/', '/wordpress-mu/' );

	foreach ( $roots as $root ) {
		if ( $wp_filesystem->exists( $from . $root . 'readme.html' )
			&& $wp_filesystem->exists( $from . $root . 'wp-includes/version.php' )
		) {
			$distro = $root;
			break;
		}
	}

	if ( ! $distro ) {
		$wp_filesystem->delete( $from, true );

		return new WP_Error( 'insane_distro', __( 'The update could not be unpacked' ) );
	}

	/*
	 * Import $wp_version, $required_php_version, and $required_mysql_version from the new version.
	 * DO NOT globalize any variables imported from `version-current.php` in this function.
	 *
	 * BC Note: $wp_filesystem->wp_content_dir() returned unslashed pre-2.8.
	 */
	$versions_file = trailingslashit( $wp_filesystem->wp_content_dir() ) . 'upgrade/version-current.php';

	if ( ! $wp_filesystem->copy( $from . $distro . 'wp-includes/version.php', $versions_file ) ) {
		$wp_filesystem->delete( $from, true );

		return new WP_Error(
			'copy_failed_for_version_file',
			__( 'The update cannot be installed because some files could not be copied. This is usually due to inconsistent file permissions.' ),
			'wp-includes/version.php'
		);
	}

	$wp_filesystem->chmod( $versions_file, FS_CHMOD_FILE );

	/*
	 * `wp_opcache_invalidate()` only exists in WordPress 5.5 or later,
	 * so don't run it when upgrading from older versions.
	 */
	if ( function_exists( 'wp_opcache_invalidate' ) ) {
		wp_opcache_invalidate( $versions_file );
	}

	require WP_CONTENT_DIR . '/upgrade/version-current.php';
	$wp_filesystem->delete( $versions_file );

	$php_version       = PHP_VERSION;
	$mysql_version     = $wpdb->db_version();
	$old_wp_version    = $GLOBALS['wp_version']; // The version of WordPress we're updating from.
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' ) ); // A dash in the version indicates a development release.
	$php_compat        = version_compare( $php_version, $required_php_version, '>=' );

	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) ) {
		$mysql_compat = true;
	} else {
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );
	}

	if ( ! $mysql_compat || ! $php_compat ) {
		$wp_filesystem->delete( $from, true );
	}

	$php_update_message = '';

	if ( function_exists( 'wp_get_update_php_url' ) ) {
		$php_update_message = '</p><p>' . sprintf(
			/* translators: %s: URL to Update PHP page. */
			__( '<a href="%s">Learn more about updating PHP</a>.' ),
			esc_url( wp_get_update_php_url() )
		);

		if ( function_exists( 'wp_get_update_php_annotation' ) ) {
			$annotation = wp_get_update_php_annotation();

			if ( $annotation ) {
				$php_update_message .= '</p><p><em>' . $annotation . '</em>';
			}
		}
	}

	if ( ! $mysql_compat && ! $php_compat ) {
		return new WP_Error(
			'php_mysql_not_compatible',
			sprintf(
				/* translators: 1: WordPress version number, 2: Minimum required PHP version number, 3: Minimum required MySQL version number, 4: Current PHP version number, 5: Current MySQL version number. */
				__( 'The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.' ),
				$wp_version,
				$required_php_version,
				$required_mysql_version,
				$php_version,
				$mysql_version
			) . $php_update_message
		);
	} elseif ( ! $php_compat ) {
		return new WP_Error(
			'php_not_compatible',
			sprintf(
				/* translators: 1: WordPress version number, 2: Minimum required PHP version number, 3: Current PHP version number. */
				__( 'The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher. You are running version %3$s.' ),
				$wp_version,
				$required_php_version,
				$php_version
			) . $php_update_message
		);
	} elseif ( ! $mysql_compat ) {
		return new WP_Error(
			'mysql_not_compatible',
			sprintf(
				/* translators: 1: WordPress version number, 2: Minimum required MySQL version number, 3: Current MySQL version number. */
				__( 'The update cannot be installed because WordPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.' ),
				$wp_version,
				$required_mysql_version,
				$mysql_version
			)
		);
	}

	// Add a warning when the JSON PHP extension is missing.
	if ( ! extension_loaded( 'json' ) ) {
		return new WP_Error(
			'php_not_compatible_json',
			sprintf(
				/* translators: 1: WordPress version number, 2: The PHP extension name needed. */
				__( 'The update cannot be installed because WordPress %1$s requires the %2$s PHP extension.' ),
				$wp_version,
				'JSON'
			)
		);
	}

	/** This filter is documented in bench/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Preparing to install the latest version&#8230;' ) );

	// Don't copy wp-content, we'll deal with that below.
	// We also copy version.php last so failed updates report their old version.
	$skip              = array( 'wp-content', 'wp-includes/version.php' );
	$check_is_writable = array();

	// Check to see which files don't really need updating - only available for 3.7 and higher.
	if ( function_exists( 'get_core_checksums' ) ) {
		// Find the local version of the working directory.
		$working_dir_local = WP_CONTENT_DIR . '/upgrade/' . basename( $from ) . $distro;

		$checksums = get_core_checksums( $wp_version, isset( $wp_local_package ) ? $wp_local_package : 'en_US' );

		if ( is_array( $checksums ) && isset( $checksums[ $wp_version ] ) ) {
			$checksums = $checksums[ $wp_version ]; // Compat code for 3.7-beta2.
		}

		if ( is_array( $checksums ) ) {
			foreach ( $checksums as $file => $checksum ) {
				if ( 'wp-content' === substr( $file, 0, 10 ) ) {
					continue;
				}

				if ( ! file_exists( ABSPATH . $file ) ) {
					continue;
				}

				if ( ! file_exists( $working_dir_local . $file ) ) {
					continue;
				}

				if ( '.' === dirname( $file )
					&& in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ), true )
				) {
					continue;
				}

				if ( md5_file( ABSPATH . $file ) === $checksum ) {
					$skip[] = $file;
				} else {
					$check_is_writable[ $file ] = ABSPATH . $file;
				}
			}
		}
	}

	// If we're using the direct method, we can predict write failures that are due to permissions.
	if ( $check_is_writable && 'direct' === $wp_filesystem->method ) {
		$files_writable = array_filter( $check_is_writable, array( $wp_filesystem, 'is_writable' ) );

		if ( $files_writable !== $check_is_writable ) {
			$files_not_writable = array_diff_key( $check_is_writable, $files_writable );

			foreach ( $files_not_writable as $relative_file_not_writable => $file_not_writable ) {
				// If the writable check failed, chmod file to 0644 and try again, same as copy_dir().
				$wp_filesystem->chmod( $file_not_writable, FS_CHMOD_FILE );

				if ( $wp_filesystem->is_writable( $file_not_writable ) ) {
					unset( $files_not_writable[ $relative_file_not_writable ] );
				}
			}

			// Store package-relative paths (the key) of non-writable files in the WP_Error object.
			$error_data = version_compare( $old_wp_version, '3.7-beta2', '>' ) ? array_keys( $files_not_writable ) : '';

			if ( $files_not_writable ) {
				return new WP_Error(
					'files_not_writable',
					__( 'The update cannot be installed because your site is unable to copy some files. This is usually due to inconsistent file permissions.' ),
					implode( ', ', $error_data )
				);
			}
		}
	}

	/** This filter is documented in bench/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Enabling Maintenance mode&#8230;' ) );

	// Create maintenance file to signal that we are upgrading.
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file   = $to . '.maintenance';
	$wp_filesystem->delete( $maintenance_file );
	$wp_filesystem->put_contents( $maintenance_file, $maintenance_string, FS_CHMOD_FILE );

	/** This filter is documented in bench/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Copying the required files&#8230;' ) );

	// Copy new versions of WP files into place.
	$result = copy_dir( $from . $distro, $to, $skip );

	if ( is_wp_error( $result ) ) {
		$result = new WP_Error(
			$result->get_error_code(),
			$result->get_error_message(),
			substr( $result->get_error_data(), strlen( $to ) )
		);
	}

	// Since we know the core files have copied over, we can now copy the version file.
	if ( ! is_wp_error( $result ) ) {
		if ( ! $wp_filesystem->copy( $from . $distro . 'wp-includes/version.php', $to . 'wp-includes/version.php', true /* overwrite */ ) ) {
			$wp_filesystem->delete( $from, true );
			$result = new WP_Error(
				'copy_failed_for_version_file',
				__( 'The update cannot be installed because your site is unable to copy some files. This is usually due to inconsistent file permissions.' ),
				'wp-includes/version.php'
			);
		}

		$wp_filesystem->chmod( $to . 'wp-includes/version.php', FS_CHMOD_FILE );

		/*
		 * `wp_opcache_invalidate()` only exists in WordPress 5.5 or later,
		 * so don't run it when upgrading from older versions.
		 */
		if ( function_exists( 'wp_opcache_invalidate' ) ) {
			wp_opcache_invalidate( $to . 'wp-includes/version.php' );
		}
	}

	// Check to make sure everything copied correctly, ignoring the contents of wp-content.
	$skip   = array( 'wp-content' );
	$failed = array();

	if ( isset( $checksums ) && is_array( $checksums ) ) {
		foreach ( $checksums as $file => $checksum ) {
			if ( 'wp-content' === substr( $file, 0, 10 ) ) {
				continue;
			}

			if ( ! file_exists( $working_dir_local . $file ) ) {
				continue;
			}

			if ( '.' === dirname( $file )
				&& in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ), true )
			) {
				$skip[] = $file;
				continue;
			}

			if ( file_exists( ABSPATH . $file ) && md5_file( ABSPATH . $file ) === $checksum ) {
				$skip[] = $file;
			} else {
				$failed[] = $file;
			}
		}
	}

	// Some files didn't copy properly.
	if ( ! empty( $failed ) ) {
		$total_size = 0;

		foreach ( $failed as $file ) {
			if ( file_exists( $working_dir_local . $file ) ) {
				$total_size += filesize( $working_dir_local . $file );
			}
		}

		// If we don't have enough free space, it isn't worth trying again.
		// Unlikely to be hit due to the check in unzip_file().
		$available_space = function_exists( 'disk_free_space' ) ? @disk_free_space( ABSPATH ) : false;

		if ( $available_space && $total_size >= $available_space ) {
			$result = new WP_Error( 'disk_full', __( 'There is not enough free disk space to complete the update.' ) );
		} else {
			$result = copy_dir( $from . $distro, $to, $skip );

			if ( is_wp_error( $result ) ) {
				$result = new WP_Error(
					$result->get_error_code() . '_retry',
					$result->get_error_message(),
					substr( $result->get_error_data(), strlen( $to ) )
				);
			}
		}
	}

	// Custom content directory needs updating now.
	// Copy languages.
	if ( ! is_wp_error( $result ) && $wp_filesystem->is_dir( $from . $distro . 'wp-content/languages' ) ) {
		if ( WP_LANG_DIR !== ABSPATH . WPINC . '/languages' || @is_dir( WP_LANG_DIR ) ) {
			$lang_dir = WP_LANG_DIR;
		} else {
			$lang_dir = WP_CONTENT_DIR . '/languages';
		}

		// Check if the language directory exists first.
		if ( ! @is_dir( $lang_dir ) && 0 === strpos( $lang_dir, ABSPATH ) ) {
			// If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			$wp_filesystem->mkdir( $to . str_replace( ABSPATH, '', $lang_dir ), FS_CHMOD_DIR );
			clearstatcache(); // For FTP, need to clear the stat cache.
		}

		if ( @is_dir( $lang_dir ) ) {
			$wp_lang_dir = $wp_filesystem->find_folder( $lang_dir );

			if ( $wp_lang_dir ) {
				$result = copy_dir( $from . $distro . 'wp-content/languages/', $wp_lang_dir );

				if ( is_wp_error( $result ) ) {
					$result = new WP_Error(
						$result->get_error_code() . '_languages',
						$result->get_error_message(),
						substr( $result->get_error_data(), strlen( $wp_lang_dir ) )
					);
				}
			}
		}
	}

	/** This filter is documented in bench/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Disabling Maintenance mode&#8230;' ) );

	// Remove maintenance file, we're done with potential site-breaking changes.
	$wp_filesystem->delete( $maintenance_file );

	// 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users,
	// preventing installation of Twenty Twelve.
	if ( '3.5' === $old_wp_version ) {
		if ( is_dir( WP_CONTENT_DIR . '/themes/twentytwelve' )
			&& ! file_exists( WP_CONTENT_DIR . '/themes/twentytwelve/style.css' )
		) {
			$wp_filesystem->delete( $wp_filesystem->wp_themes_dir() . 'twentytwelve/' );
		}
	}

	/*
	 * Copy new bundled plugins & themes.
	 * This gives us the ability to install new plugins & themes bundled with
	 * future versions of WordPress whilst avoiding the re-install upon upgrade issue.
	 * $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated.
	 */
	if ( ! is_wp_error( $result )
		&& ( ! defined( 'CORE_UPGRADE_SKIP_NEW_BUNDLED' ) || ! CORE_UPGRADE_SKIP_NEW_BUNDLED )
	) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running.
			if ( $development_build || version_compare( $introduced_version, $old_wp_version, '>' ) ) {
				$directory = ( '/' === $file[ strlen( $file ) - 1 ] );

				list( $type, $filename ) = explode( '/', $file, 2 );

				// Check to see if the bundled items exist before attempting to copy them.
				if ( ! $wp_filesystem->exists( $from . $distro . 'wp-content/' . $file ) ) {
					continue;
				}

				if ( 'plugins' === $type ) {
					$dest = $wp_filesystem->wp_plugins_dir();
				} elseif ( 'themes' === $type ) {
					// Back-compat, ::wp_themes_dir() did not return trailingslash'd pre-3.2.
					$dest = trailingslashit( $wp_filesystem->wp_themes_dir() );
				} else {
					continue;
				}

				if ( ! $directory ) {
					if ( ! $development_build && $wp_filesystem->exists( $dest . $filename ) ) {
						continue;
					}

					if ( ! $wp_filesystem->copy( $from . $distro . 'wp-content/' . $file, $dest . $filename, FS_CHMOD_FILE ) ) {
						$result = new WP_Error( "copy_failed_for_new_bundled_$type", __( 'Could not copy file.' ), $dest . $filename );
					}
				} else {
					if ( ! $development_build && $wp_filesystem->is_dir( $dest . $filename ) ) {
						continue;
					}

					$wp_filesystem->mkdir( $dest . $filename, FS_CHMOD_DIR );
					$_result = copy_dir( $from . $distro . 'wp-content/' . $file, $dest . $filename );

					// If a error occurs partway through this final step, keep the error flowing through, but keep process going.
					if ( is_wp_error( $_result ) ) {
						if ( ! is_wp_error( $result ) ) {
							$result = new WP_Error;
						}

						$result->add(
							$_result->get_error_code() . "_$type",
							$_result->get_error_message(),
							substr( $_result->get_error_data(), strlen( $dest ) )
						);
					}
				}
			}
		} // End foreach.
	}

	// Handle $result error from the above blocks.
	if ( is_wp_error( $result ) ) {
		$wp_filesystem->delete( $from, true );

		return $result;
	}

	// Remove old files.
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;

		if ( ! $wp_filesystem->exists( $old_file ) ) {
			continue;
		}

		// If the file isn't deleted, try writing an empty string to the file instead.
		if ( ! $wp_filesystem->delete( $old_file, true ) && $wp_filesystem->is_file( $old_file ) ) {
			$wp_filesystem->put_contents( $old_file, '' );
		}
	}

	// Remove any Genericons example.html's from the filesystem.
	_upgrade_422_remove_genericons();

	// Deactivate the REST API plugin if its version is 2.0 Beta 4 or lower.
	_upgrade_440_force_deactivate_incompatible_plugins();

	// Deactivate incompatible plugins.
	_upgrade_core_deactivate_incompatible_plugins();

	// Upgrade DB with separate request.
	/** This filter is documented in bench/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Upgrading database&#8230;' ) );

	$db_upgrade_url = admin_url( 'upgrade.php?step=upgrade_db' );
	wp_remote_post( $db_upgrade_url, array( 'timeout' => 60 ) );

	// Clear the cache to prevent an update_option() from saving a stale db_version to the cache.
	wp_cache_flush();
	// Not all cache back ends listen to 'flush'.
	wp_cache_delete( 'alloptions', 'options' );

	// Remove working directory.
	$wp_filesystem->delete( $from, true );

	// Force refresh of update information.
	if ( function_exists( 'delete_site_transient' ) ) {
		delete_site_transient( 'update_core' );
	} else {
		delete_option( 'update_core' );
	}

	/**
	 * Fires after WordPress core has been successfully updated.
	 *
	 * @since 3.3.0
	 *
	 * @param string $wp_version The current WordPress version.
	 */
	do_action( '_core_updated_successfully', $wp_version );

	// Clear the option that blocks auto-updates after failures, now that we've been successful.
	if ( function_exists( 'delete_site_option' ) ) {
		delete_site_option( 'auto_core_update_failed' );
	}

	return $wp_version;
}

/**
 * Redirect to the About WordPress page after a successful upgrade.
 *
 * This function is only needed when the existing installation is older than 3.4.0.
 *
 * @since 3.3.0
 *
 * @global string $wp_version The WordPress version string.
 * @global string $pagenow    The filename of the current screen.
 * @global string $action
 *
 * @param string $new_version
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $wp_version, $pagenow, $action;

	if ( version_compare( $wp_version, '3.4-RC1', '>=' ) ) {
		return;
	}

	// Ensure we only run this on the update-core.php page. The Core_Upgrader may be used in other contexts.
	if ( 'update-core.php' !== $pagenow ) {
		return;
	}

	if ( 'do-core-upgrade' !== $action && 'do-core-reinstall' !== $action ) {
		return;
	}

	// Load the updated default text localization domain for new strings.
	load_default_textdomain();

	// See do_core_upgrade().
	show_message( __( 'WordPress updated successfully.' ) );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message(
		'<span class="hide-if-no-js">' . sprintf(
			/* translators: 1: WordPress version, 2: URL to About screen. */
			__( 'Welcome to WordPress %1$s. You will be redirected to the About WordPress screen. If not, click <a href="%2$s">here</a>.' ),
			$new_version,
			'about.php?updated'
		) . '</span>'
	);
	show_message(
		'<span class="hide-if-js">' . sprintf(
			/* translators: 1: WordPress version, 2: URL to About screen. */
			__( 'Welcome to WordPress %1$s. <a href="%2$s">Learn more</a>.' ),
			$new_version,
			'about.php?updated'
		) . '</span>'
	);
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit.
	require_once ABSPATH . 'bench/admin-footer.php';
	exit;
}

/**
 * Cleans up Genericons example files.
 *
 * @since 4.2.2
 *
 * @global array              $wp_theme_directories
 * @global WP_Filesystem_Base $wp_filesystem
 */
function _upgrade_422_remove_genericons() {
	global $wp_theme_directories, $wp_filesystem;

	// A list of the affected files using the filesystem absolute paths.
	$affected_files = array();

	// Themes.
	foreach ( $wp_theme_directories as $directory ) {
		$affected_theme_files = _upgrade_422_find_genericons_files_in_folder( $directory );
		$affected_files       = array_merge( $affected_files, $affected_theme_files );
	}

	// Plugins.
	$affected_plugin_files = _upgrade_422_find_genericons_files_in_folder( WP_PLUGIN_DIR );
	$affected_files        = array_merge( $affected_files, $affected_plugin_files );

	foreach ( $affected_files as $file ) {
		$gen_dir = $wp_filesystem->find_folder( trailingslashit( dirname( $file ) ) );

		if ( empty( $gen_dir ) ) {
			continue;
		}

		// The path when the file is accessed via WP_Filesystem may differ in the case of FTP.
		$remote_file = $gen_dir . basename( $file );

		if ( ! $wp_filesystem->exists( $remote_file ) ) {
			continue;
		}

		if ( ! $wp_filesystem->delete( $remote_file, false, 'f' ) ) {
			$wp_filesystem->put_contents( $remote_file, '' );
		}
	}
}

/**
 * Recursively find Genericons example files in a given folder.
 *
 * @ignore
 * @since 4.2.2
 *
 * @param string $directory Directory path. Expects trailingslashed.
 * @return array
 */
function _upgrade_422_find_genericons_files_in_folder( $directory ) {
	$directory = trailingslashit( $directory );
	$files     = array();

	if ( file_exists( "{$directory}example.html" )
		&& false !== strpos( file_get_contents( "{$directory}example.html" ), '<title>Genericons</title>' )
	) {
		$files[] = "{$directory}example.html";
	}

	$dirs = glob( $directory . '*', GLOB_ONLYDIR );
	$dirs = array_filter(
		$dirs,
		static function( $dir ) {
			// Skip any node_modules directories.
			return false === strpos( $dir, 'node_modules' );
		}
	);

	if ( $dirs ) {
		foreach ( $dirs as $dir ) {
			$files = array_merge( $files, _upgrade_422_find_genericons_files_in_folder( $dir ) );
		}
	}

	return $files;
}

/**
 * @ignore
 * @since 4.4.0
 */
function _upgrade_440_force_deactivate_incompatible_plugins() {
	if ( defined( 'REST_API_VERSION' ) && version_compare( REST_API_VERSION, '2.0-beta4', '<=' ) ) {
		deactivate_plugins( array( 'rest-api/plugin.php' ), true );
	}
}

/**
 * @access private
 * @ignore
 * @since 5.8.0
 * @since 5.9.0 The minimum compatible version of Gutenberg is 11.9.
 * @since 6.1.1 The minimum compatible version of Gutenberg is 14.1.
 */
function _upgrade_core_deactivate_incompatible_plugins() {
	if ( defined( 'GUTENBERG_VERSION' ) && version_compare( GUTENBERG_VERSION, '14.1', '<' ) ) {
		$deactivated_gutenberg['gutenberg'] = array(
			'plugin_name'         => 'Gutenberg',
			'version_deactivated' => GUTENBERG_VERSION,
			'version_compatible'  => '14.1',
		);
		if ( is_plugin_active_for_network( 'gutenberg/gutenberg.php' ) ) {
			$deactivated_plugins = get_site_option( 'wp_force_deactivated_plugins', array() );
			$deactivated_plugins = array_merge( $deactivated_plugins, $deactivated_gutenberg );
			update_site_option( 'wp_force_deactivated_plugins', $deactivated_plugins );
		} else {
			$deactivated_plugins = get_option( 'wp_force_deactivated_plugins', array() );
			$deactivated_plugins = array_merge( $deactivated_plugins, $deactivated_gutenberg );
			update_option( 'wp_force_deactivated_plugins', $deactivated_plugins );
		}
		deactivate_plugins( array( 'gutenberg/gutenberg.php' ), true );
	}
}
