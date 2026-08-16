function handleMove(element, dx, leftXLimit, rightXLimit)
{
	var xStart = element.getStyle('left').toInt();

	var xDest = xStart + dx;



	xDest = Math.min(xDest, rightXLimit);
	xDest = Math.max(xDest, leftXLimit);

	var nextStyle = 'block';
	if (xDest == leftXLimit) {
		nextStyle  = 'none';
	}
	$$('#screenshots .next img').setStyle('display', nextStyle);

	var prevStyle = 'block';
	if (xDest == rightXLimit) {
		prevStyle  = 'none';
	}
	$$('#screenshots .prev img').setStyle('display', prevStyle);

	element.lastDest = xDest;

	if(element.fx == null){
		element.fx = new Fx.Morph(element, {duration: 'normal', transition: Fx.Transitions.Sine.easeInOut});
	}
	element.fx.start({
		'left': xDest
	});
}

window.addEvent('domready', function() {

	//Overlay functions. Add FadeIN/OUT later.
	$$('div.overlay').addEvents({
		show: function() {
			this.setStyle('display', 'block');
		},
		hide: function() {
			this.setStyle('display', 'none');
		}
	});

	//Close Buttons
	$$('div.overlay .closer').addEvent('click', function(event) {
		event.stop();
		this.getParent('div.overlay').fireEvent('hide');
	});

	//Signup Buttons
	$$('.signup_link').addEvent('click', function(event) {
		if (typeof(event) !== 'undefined') {
			event.stop();
		}
		var signupLayer = $('signup_layer');
		if (!signupLayer) {
			console.warn('[DEBUG] signup_layer not found');
			return;
		}
		signupLayer.fireEvent('show');
	});

	//Login Buttons
	$$('.login_link').addEvent('click', function(event) {
		if (typeof(event) !== 'undefined') {
			event.stop();
		}
		var loginLayer = $('login_layer');
		if (!loginLayer) {
			console.warn('[DEBUG] login_layer not found');
			return;
		}
		loginLayer.fireEvent('show');
	});

	//Login Buttons
	$$('#screenshot_list li a').each(function(item, index){
		item.addEvent('click', function(event) {
			event.stop();
			galarie.show(index);
			$('screenshot_layer').fireEvent('show');
		});
	});


	if ($('screenshot_list')) {
		$('screenshot_list').addEvents({
			moveRight: function() {
				var windowSize = 300;
				var w = this.getStyle('width').toInt();
				var leftXLimit = windowSize - w;
				var rightXLimit = 0;
				handleMove(this, 98, leftXLimit, rightXLimit);
			},
			moveLeft: function() {
				var windowSize = 300;
				var w = this.getStyle('width').toInt();
				var leftXLimit = windowSize - w;
				var rightXLimit = 0;
				handleMove(this, -98, leftXLimit, rightXLimit);
			}
		});

		$$('*.dynamic_img').addEvents({
			'mouseenter': function() {
				this.addClass('over');
			},
			'mouseleave': function() {
				this.removeClass('over');
			}
		});

		$$('*.dynamic_btn').addEvents({
			'mouseenter': function() {
				this.addClass('over');
			},
			'mouseleave': function() {
				this.removeClass('over');
				this.removeClass('clicked');
			},
			'mousedown': function() {
				this.removeClass('over');
				this.addClass('clicked');
			},
			'mouseup': function() {
				this.removeClass('clicked');
				this.addClass('over');
			}
		});


		$$('#screenshots .next').addEvent('click', function(e) {
				$('screenshot_list').fireEvent('moveLeft');
			});
		$$('#screenshots .prev').addEvent('click', function(e) {
				$('screenshot_list').fireEvent('moveRight');
			});
	}

	t_minus();

});

Fx.Screenshots = new Class({

	Implements: [Events, Options],

	$current: 0,
	$length: 0,

	initialize: function(image, headline, comment, elements){
		var self = this;

		this.elements = elements;
		this.targetImg = $(image);
		this.targetHl = $(headline);
		this.targetDesc = $(comment);
		this.$length = this.elements.length;
	},

	showNext: function(){
		var index = this.$current + 1;
		if (index >= this.$length) index = 0;
		this.render(index);
	},

	showPrev: function(){
		var index = this.$current - 1;
		if (index < 0) index = this.$length - 1;
		this.render(index);
	},

	show: function(num){
		this.render(num);
		return this;
	},

	render: function(index){
		index = this.elements[index] != undefined ? index : 0;
		var elem = this.elements[index];
		this.targetImg.src = elem.img;
		this.targetHl.innerHTML = elem.hl;
		this.targetDesc.innerHTML = elem.desc;
		this.$current = index;
	}

});



function Popup(i, j, game_url)
{
	var layer = $('iframe_layer');

	$('frame_box').empty();
	$('frame_box').innerHTML = "<iframe frameborder=\"0\" id=\"Frame\" src=\"" + game_url + "manual.php?typ=" + i + "&s=" + j + "\" width=\"412\" height=\"440\" border=\"0\"></iframe>";

	$('iframe_layer').fireEvent('show');

	var windowSize = window.getSize();

	if (windowSize.x < 700 || windowSize.y < 700) {
		$$('#iframe_layer .overlay_content').setStyle('position', 'absolute');
		return true;
	} else {
		$$('#iframe_layer .overlay_content').setStyle('position', 'fixed');
		return false;
	}
}

function t_minus()
{
	// Zeit wird herunter gezaehlt
	for (i = 1;; i++)
	{
		myElement = document.getElementById("timer" + i);
		if (myElement != null)
		{
			sek = t_format1(myElement) - 1;
			if (sek < 0)
			{
				setTimeout("document.location.reload()", 1000);
			}
			else
			{
				sek = t_format2(sek);
				myElement.innerHTML = sek;
			}
		}
		else
		{
			break;
		}
	}
	setTimeout("t_minus()", 1000);
}

function t_format1(myElement)
{
	// 00:01:30 wird zu 90s umformatiert
	p = myElement.innerHTML.split(":");
	sek = p[0] * 3600 + p[1] * 60 + p[2] * 1;
	return sek;
}

function t_format2(s)
{
	// 90s wird zu 00:01:30 umformatiert
	if (s > -1)
	{
		stunden = Math.floor(s / 3600);
		minuten = Math.floor(s / 60) % 60;
		sekunden = s % 60;
		t = stunden + ":";
		if (minuten < 10)
		{
			t += "0";
		}
		t += minuten + ":";
		if (sekunden < 10)
		{
			t += "0";
		}
		t += sekunden;
	}
	else
	{
		t = "0:00:0?";
	}
	return t;
}



function showLayer(layer)
{
	closeLayers();
	var layerName = layer+'_layer';
	$(layerName).fireEvent('show');
}

function closeLayers()
{
	$$('div.overlay').fireEvent('hide');
}

/**
 * BUILD POPUP (AJAX)
 * -------------------
 * Fixes the "double action" flow: previously, clicking a field on the
 * village map did a full page reload to build.php, then clicking
 * "upgrade" did another full reload back to dorf1.php/dorf2.php -
 * requiring the player to click the field again from scratch for the
 * next upgrade.
 *
 * Now: clicking a field opens the same build.php content in an
 * in-page popup (no reload). Clicking "upgrade" inside the popup
 * submits via AJAX and re-opens the same field's popup with fresh
 * data - no navigation away from dorf1/dorf2 at all.
 *
 * Every link this intercepts still has a normal, working href.
 * If a request fails or JS is unavailable, the link falls back to a
 * real page load - nothing here is a hard dependency.
 */
window.addEvent('domready', function() {

	var popup     = $('buildPopup');
	var popupBody = $('buildPopupBody');

	if (!popup || !popupBody) {
		// Popup shell not present on this page (e.g. old template not
		// updated yet, or a page other than dorf1/dorf2) - do nothing,
		// every link below still has its normal href as a fallback.
		return;
	}

	/**
	 * Fetches a build.php URL as an AJAX fragment and injects the
	 * result into the popup body, the resource bar and the build
	 * queue box.
	 */
	function loadBuildFragment(url) {

		popupBody.innerHTML = '<p class="none">...</p>';
		popup.setStyle('display', 'block');

		new Request({
			url: url,
			method: 'get',
			headers: { 'X-Requested-With': 'XMLHttpRequest' },
			onSuccess: function(responseText) {

				var data;
				try {
					data = JSON.decode(responseText);
				} catch (e) {
					// Malformed/unexpected response - safest fallback is a
					// real navigation, exactly what would have happened
					// without this popup.
					window.location = url;
					return;
				}

				if (!data || data.error) {
					window.location = (data && data.redirect) ? data.redirect : url;
					return;
				}

				popupBody.innerHTML = data.html;

				var resBox = $('res');
				if (resBox && data.res) {
					// res.tpl's root element IS <div id="res">, so data.res
					// is a full replacement markup for this exact node -
					// swap it in place (outer, not inner) to keep behaving
					// the same as a fresh page load. Native outerHTML used
					// directly since this MooTools build doesn't reliably
					// support set('outerHTML', ...).
					resBox.outerHTML = data.res;
				}

				var queueBox = $('building_contract');
				if (typeof data.queue !== 'undefined') {
					if (data.queue) {
						// Building.tpl's root element IS the
						// <table id="building_contract">; replace it in
						// place, or insert it fresh if the queue was empty
						// before (table didn't exist in the DOM yet).
						if (queueBox) {
							queueBox.outerHTML = data.queue;
						} else {
							var resAnchor = $('res');
							if (resAnchor) {
								var tmp = new Element('div', { html: data.queue });
								var freshTable = tmp.getFirst();
								if (freshTable) resAnchor.grab(freshTable, 'before');
							}
						}
					} else if (queueBox) {
						// Queue is now empty (e.g. last job finished) -
						// remove the leftover table.
						queueBox.destroy();
					}
				}

				bindPopupLinks();
			},
			onFailure: function() {
				window.location = url;
			}
		}).send();
	}

	/**
	 * (Re)binds the AJAX interceptor to every relevant link currently
	 * in the DOM. Two kinds of links carry data-ajax-build="1":
	 *
	 *  - Village map areas (field.tpl / dorf2.tpl): href points to
	 *    build.php?id=X, a read-only view. Clicking opens the popup
	 *    with that fragment.
	 *
	 *  - The "upgrade" link (Templates/Build/upgrade.tpl): href points
	 *    to dorf1.php?a=X&c=checker or dorf2.php?a=X&c=checker, which
	 *    is where procBuild() actually performs the upgrade. Clicking
	 *    submits that URL first, then - once confirmed - reloads the
	 *    SAME field's build.php?id=X fragment to show the new state,
	 *    all without leaving the popup.
	 *
	 * Called once on load and again after every popup content refresh,
	 * since the links inside the popup are replaced each time.
	 */
	function bindPopupLinks() {

		$$('area[data-ajax-build="1"], a[data-ajax-build="1"]').each(function(el) {

			// Avoid double-binding the same element across refreshes.
			if (el.retrieve('ajaxBuildBound')) return;
			el.store('ajaxBuildBound', true);

			el.addEvent('click', function(event) {
				event.stop();

				var href = el.get('href');

				if (href.test(/[?&]a=\d+/) && href.test(/\/(dorf1|dorf2)\.php(\?|$)/)) {
					submitUpgrade(href, el.get('data-field-id'));
				} else {
					loadBuildFragment(href);
				}
			});
		});
	}

	/**
	 * Submits an upgrade action (dorf1.php?a=X or dorf2.php?a=X), then
	 * reloads that same field's build.php popup fragment to reflect
	 * the result. fieldId is read from the link's data-field-id
	 * (falls back to parsing it out of the href's a= parameter).
	 */
	function submitUpgrade(url, fieldId) {

		if (!fieldId) {
			var match = url.match(/[?&]a=(\d+)/);
			fieldId = match ? match[1] : null;
		}

		popupBody.innerHTML = '<p class="none">...</p>';

		new Request({
			url: url,
			method: 'get',
			headers: { 'X-Requested-With': 'XMLHttpRequest' },
			onSuccess: function(responseText) {

				var data;
				try {
					data = JSON.decode(responseText);
				} catch (e) {
					window.location = url;
					return;
				}

				if (!data || data.error || !fieldId) {
					window.location = url;
					return;
				}

				// Upgrade submitted - reload the same field's popup to
				// show the new build queue / next-level cost.
				loadBuildFragment('build.php?id=' + fieldId);
			},
			onFailure: function() {
				window.location = url;
			}
		}).send();
	}

	// Close button + clicking the dark mask both close the popup,
	// same behaviour as the other overlays in this codebase.
	popup.getElement('.closer').addEvent('click', function(event) {
		event.stop();
		popup.setStyle('display', 'none');
	});
	popup.getElement('.mask').addEvent('click', function() {
		popup.setStyle('display', 'none');
	});

	bindPopupLinks();
});