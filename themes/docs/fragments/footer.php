			<div class="container bytn-footer">
            <div class="row">
                <div class="col-lg-12">
                      <div class="pull-right">
                         <p>Made with <i class="fa fa-heart text-danger"></i> by <a href="//twitter.com/jasonbayton">@JasonBayton</a>. Material is <i class="fa fa-copyright"></i> <a href="https://bayton.org">Jason Bayton</a> under <i class="fa fa-creative-commons" aria-hidden="true"></i> <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/">BY-NC-SA</a></p>
                      </div>
                </div>
                        </div>
                </div>
        </div>

			<!-- jQuery -->
                        <script src="<?php echo $theme ["htmlresources"]; ?>/js/jquery.js"></script>
			<!-- Bootstraources"]; Core JavaScript -->
			<script src="<?php echo $theme ["htmlresources"]; ?>/js/bootstrap.min.js"></script>

			<!-- Scrolling Nav JavaScript -->
			<script src="<?php echo $theme ["htmlresources"]; ?>/js/jquery.easing.min.js"></script>
			<!-- Embed js -->
                        <script src="<?php echo $theme ["htmlresources"]; ?>/js/embed.js"></script>

<script type="text/javascript">
    $(function () {
        $('body').popover({
            selector: '[data-toggle="popover"]'
        });

        $('body').tooltip({
            selector: 'a[rel="tooltip"], [data-toggle="tooltip"]'
        });
	$('.pop-menu').popover({
		html: true,
  		content: function() {
  		  return $(this).parent().find('.content').html();
  		},
  		container: 'body',
 		trigger: 'focus',
		placement: 'bottom',
		template: '<div class="popover but-men-con" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
	});
    });
</script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
	$("#mobile-header").toggleClass("hidden");
    });
</script>

<script>
//Settings
window.articleWrapperId = '#the-post-contents';
window.tableWrapperId = '#sidebar0';

$(document).ready(function(){
	createToC();
});

function createToC(){
	//For Each H2 in the wrapper
	$(window.articleWrapperId + " h1, " + window.articleWrapperId + ' h2').each(function(i){
		//Get it's inner HTML
		var innerHTML = $(this).html();
		// Add indent to innerHTML
		var tag = $(this).prop("tagName"); // h1, h2, h3, h4...
		switch(tag){
			case "H1":
				linnerHTML = "" + innerHTML;
				break;
			
			case "H2":
					linnerHTML = "&nbsp;&nbsp;&nbsp;" + innerHTML;
				break;
			case "H3":
                                linnerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + innerHTML;                                                                                                   break; 
			case "H4":
                                linnerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + innerHTML;                                                                                                   break; 

		}
		
		//Remove any spaces in it
		var anchorId = innerHTML.replace(/\s/g, '');
		//Attach that as an id to the H2
		$(this).attr('id', anchorId);
		//Create an anchor for this
		var anch = '<a href="#' + anchorId + '">' + linnerHTML + '</a>';
		//Append it to the Table of Contents Wrapper
		$(window.tableWrapperId).append(anch);
	});
}
</script>
<script>
(function(document, history, location) {
  var HISTORY_SUPPORT = !!(history && history.pushState);

  var anchorScrolls = {
    ANCHOR_REGEX: /^#[^ ]+$/,
    OFFSET_HEIGHT_PX: 0,

    /**
     * Establish events, and fix initial scroll position if a hash is provided.
     */
    init: function() {
      this.scrollToCurrent();
      $(window).on('hashchange', $.proxy(this, 'scrollToCurrent'));
      $('body').on('click', 'a', $.proxy(this, 'delegateAnchors'));
    },

    /**
     * Return the offset amount to deduct from the normal scroll position.
     * Modify as appropriate to allow for dynamic calculations
     */
    getFixedOffset: function() {
      return this.OFFSET_HEIGHT_PX;
    },

    /**
     * If the provided href is an anchor which resolves to an element on the
     * page, scroll to it.
     * @param  {String} href
     * @return {Boolean} - Was the href an anchor.
     */
    scrollIfAnchor: function(href, pushToHistory) {
      var match, anchorOffset;

      if(!this.ANCHOR_REGEX.test(href)) {
        return false;
      }

      match = document.getElementById(href.slice(1));

      if(match) {
        anchorOffset = $(match).offset().top - this.getFixedOffset();
        $('html, body').animate({ scrollTop: anchorOffset});

        // Add the state to history as-per normal anchor links
        if(HISTORY_SUPPORT && pushToHistory) {
          history.pushState({}, document.title, location.pathname + href);
        }
      }

      return !!match;
    },
    
    /**
     * Attempt to scroll to the current location's hash.
     */
    scrollToCurrent: function(e) { 
      if(this.scrollIfAnchor(window.location.hash) && e) {
      	e.preventDefault();
      }
    },

    /**
     * If the click event's target was an anchor, fix the scroll position.
     */
    delegateAnchors: function(e) {
      var elem = e.target;

      if(this.scrollIfAnchor(elem.getAttribute('href'), true)) {
        e.preventDefault();
      }
    }
  };

	$(document).ready($.proxy(anchorScrolls, 'init'));
})(window.document, window.history, window.location);
</script>
