/**
 * @see http://github.com/NV/placeholder.js
 */
jQuery.fn.textPlaceholder = function () {

	return this.each(function(){

		var that = this;

		if (that.placeholder && 'placeholder' in document.createElement(that.tagName)) return;

		var placeholder = that.getAttribute('placeholder');
		var input = jQuery(that);

		if (that.value === '' || that.value == placeholder) {
			input.addClass('text-placeholder');
			that.value = placeholder;
		}

		input.focus(function(){
			if (input.hasClass('text-placeholder')) {
				this.value = '';
				input.removeClass('text-placeholder')
			}
		});

		input.blur(function(){
			if (this.value === '') {
				input.addClass('text-placeholder');
				this.value = placeholder;
			} else {
				input.removeClass('text-placeholder');
			}
		});

		that.form && jQuery(that.form).submit(function(){
			if (input.hasClass('text-placeholder')) {
				that.value = '';
			}
		});

	});

};
/*
     FILE ARCHIVED ON 09:46:48 Feb 04, 2018 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 06:49:25 Apr 03, 2019.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  LoadShardBlock: 197.097 (3)
  esindex: 0.011
  captures_list: 242.863
  CDXLines.iter: 15.006 (3)
  PetaboxLoader3.datanode: 257.493 (4)
  exclusion.robots: 0.288
  exclusion.robots.policy: 0.267
  RedisCDXSource: 25.969
  PetaboxLoader3.resolve: 23.348
  load_resource: 105.617
*/