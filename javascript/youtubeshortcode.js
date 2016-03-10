(function() {
	tinymce.create('tinymce.plugins.YouTubeShortCodePlugin', {
		init : function(ed, url) {
			this.editor = ed;
			// Register commands
			ed.addCommand('mceAdvYoutube', function() {
                            ed.windowManager.open({
					file : url + '/../templates/HTMLYoutubeEditor.htm',
					width : 480 + parseInt(ed.getLang('advyoutube.delta_width', 0)),
					height : 400 + parseInt(ed.getLang('advyoutube.delta_height', 0)),
					inline : 1
				}, {
					plugin_url : url
				});
			});
                        
                        // Register button
                        ed.addButton('youtube', {
                            title: 'Insert YouTube ShortCode',
                            image: '/youtube/images/youtube.png',
                            id: 'insertHTMLEditorYoutubeShortCode',
                            cmd: 'mceAdvYoutube'
                        });

			ed.addShortcut('ctrl+y', 'advyoutube.advyoutube_desc', 'mceAdvYoutube');
		},
		getInfo: function () {
                    return {
                        longname: 'ShortCodes Module - YouTube',
                        author: 'Studio Bonito Ltd',
                        authorurl: 'http://www.studiobonito.co.uk',
                        infourl: 'http://www.studiobonito.co.uk',
                        version: '1.0.0'
                    };
            }
            
	});

	// Register plugin
	tinymce.PluginManager.add('youtube', window.tinymce.plugins.YouTubeShortCodePlugin);
})();