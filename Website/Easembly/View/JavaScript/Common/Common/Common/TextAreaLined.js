/**
 * Created by Judah on 6/16/15.
 */
(function($) {

    $.fn.linedtextarea = function(options) {

        // Get the Options
        var opts = $.extend({}, $.fn.linedtextarea.defaults, options);

        //alert("ENTROU!!!");

        /*
         * Helper function to make sure the line numbers are always
         * kept up to the current system
         */
        var fillOutLines = function(codeLines, h, lineNumber){
            while ( (codeLines.height() - h ) <= 0 ){
                if ( lineNumber == opts.selectedLine )
                    codeLines.append("<div class='DivClassLineNumber ClassLineSelect'>" + lineNumber + "</div>");
                else
                    codeLines.append("<div class='DivClassLineNumber'>" + lineNumber + "</div>");

                lineNumber++;
            }
            return lineNumber;
        };


        /*
         * Iterate through each of the elements are to be applied to
         */
        return this.each(function() {
            var lineNumber = 1;
            var textarea = $(this);

            /* Turn off the wrapping of as we don't want to screw up the line numbers */
            textarea.attr("wrap", "off");
            textarea.css({resize:'none'});
            var originalTextAreaWidth	= textarea.outerWidth();

            /* Wrap the text area in the elements we need */
            textarea.wrap("<div class='DivClassLinedTextArea'></div>");
            var linedTextAreaDiv	= textarea.parent().wrap("<div class='DivClassLinedWrap' style='width:" + originalTextAreaWidth + "px'></div>");
            var linedWrapDiv 			= linedTextAreaDiv.parent();

            linedWrapDiv.prepend("<div class='DivClassLines'></div>");

            var linesDiv	= linedWrapDiv.find(".DivClassLines");
            linesDiv.height( textarea.height() + 6 );


            /* Draw the number bar; filling it out where necessary */
            linesDiv.append( "<div class='DivClassCodeLines'></div>" );
            var codeLinesDiv	= linesDiv.find(".DivClassCodeLines");
            lineNumber = fillOutLines( codeLinesDiv, linesDiv.height(), 1 );

            /* Move the textarea to the selected line */
            if ( opts.selectedLine != -1 && !isNaN(opts.selectedLine) ){
                var fontSize = parseInt( textarea.height() / (lineNumber-2) );
                var position = parseInt( fontSize * opts.selectedLine ) - (textarea.height()/2);
                textarea[0].scrollTop = position;
            }


            /* Set the width */
            var sidebarWidth					= linesDiv.outerWidth();
            var paddingHorizontal 		= parseInt( linedWrapDiv.css("border-left-width") ) + parseInt( linedWrapDiv.css("border-right-width") ) + parseInt( linedWrapDiv.css("padding-left") ) + parseInt( linedWrapDiv.css("padding-right") );
            var linedWrapDivNewWidth 	= originalTextAreaWidth - paddingHorizontal;
            var textareaNewWidth			= originalTextAreaWidth - sidebarWidth - paddingHorizontal;// - 20;

            textarea.width( textareaNewWidth );
            linedWrapDiv.width( linedWrapDivNewWidth );



            /* React to the scroll event */
            textarea.scroll( function(tn){
                var domTextArea		= $(this)[0];
                var scrollTop 		= domTextArea.scrollTop;
                var clientHeight 	= domTextArea.clientHeight;
                codeLinesDiv.css( {'margin-top': (-1*scrollTop) + "px"} );
                lineNumber = fillOutLines( codeLinesDiv, scrollTop + clientHeight, lineNumber );
            });


            /* Should the textarea get resized outside of our control */
            textarea.resize( function(tn){
                var domTextArea	= $(this)[0];
                linesDiv.height( domTextArea.clientHeight + 6 );
            });

        });
    };

    // default options
    $.fn.linedtextarea.defaults = {
        selectedLine: -1,
        selectedClass: 'ClassLineSelect'
    };
})(jQuery);