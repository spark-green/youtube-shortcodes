<div class="video-conatiner $BackgroundColour <% if IsHalfWidth %>half<% end_if %>">
    <div class="ie-padding">
        <div class="flex-video <% if IsWidescreen %>widescreen<% end_if %>">
            <iframe src="https://www.youtube.com/embed/{$YoutubeID}?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="transcript">
            <% if Script %>
            <p><a href="{$Link}#" class="show-transcript" data-for="{$Link}#script-$ID">Read transcript</a></p>
            <div id="script-$ID" class="script-more">
                $Script
                <p><a href="{$Link}#" class="close-transcript">Close</a></p>
            </div>
            <% end_if %>
        </div>
    </div>
</div>