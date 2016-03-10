/**
 * editor_plugin_src.js
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under LGPL License.
 *
 * License: http://tinymce.moxiecode.com/license
 * Contributing: http://tinymce.moxiecode.com/contributing
 */
(function ($) {
    $(function(){
        $.ajax({
            url: '/youtube-shortcodes/YoutubeOptionsForForm',
            method: 'POST',
            data: $('#ListOutYoutubeOptionsHere').serialize()
        }).complete(function (data) {
            
            $("select#YoutubesOption").empty();
            
            var newOptions = $.parseJSON(data.responseText);
            
            for(var i=0;i<newOptions.length;i++){
                var o = newOptions[i];
                $('select#YoutubesOption').append($('<option>').text(o.Name).attr('value', o.ID));
            }
            
        });
    });
})(jQuery);

function SubmitYoutubeDialog() {
    var ed = tinyMCEPopup.editor;
    var str = '[Youtube ID="' + $('#YoutubesOption option:selected').val() + '"]';

    ed.execCommand('mceInsertContent', false, str);
    tinyMCEPopup.close();
}