/**
 * charmap.js
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under LGPL License.
 *
 * License: http://tinymce.moxiecode.com/license
 * Contributing: http://tinymce.moxiecode.com/contributing
 */

tinyMCEPopup.requireLangPack();

var charmap = [
	['&nbsp;',    '&#160;',  true, 'no-break space'],
	['&amp;',     '&#38;',   true, 'ampersand'],
	['&quot;',    '&#34;',   true, 'quotation mark'],
// finance
	['&cent;',    '&#162;',  true, 'cent sign'],
	['&euro;',    '??, true, 'euro sign'],
	['&pound;',   '&#163;',  true, 'pound sign'],
	['&yen;',     '&#165;',  true, 'yen sign'],
// signs
	['&copy;',    '&#169;',  true, 'copyright sign'],
	['&reg;',     '&#174;',  true, 'registered sign'],
	['&trade;',   '??, true, 'trade mark sign'],
	['&permil;',  '??, true, 'per mille sign'],
	['&micro;',   '&#181;',  true, 'micro sign'],
	['&middot;',  '&#183;',  true, 'middle dot'],
	['&bull;',    '??, true, 'bullet'],
	['&hellip;',  '??, true, 'three dot leader'],
	['&prime;',   '??, true, 'minutes / feet'],
	['&Prime;',   '??, true, 'seconds / inches'],
	['&sect;',    '&#167;',  true, 'section sign'],
	['&para;',    '&#182;',  true, 'paragraph sign'],
	['&szlig;',   '&#223;',  true, 'sharp s / ess-zed'],
// quotations
	['&lsaquo;',  '??, true, 'single left-pointing angle quotation mark'],
	['&rsaquo;',  '??, true, 'single right-pointing angle quotation mark'],
	['&laquo;',   '&#171;',  true, 'left pointing guillemet'],
	['&raquo;',   '&#187;',  true, 'right pointing guillemet'],
	['&lsquo;',   '??, true, 'left single quotation mark'],
	['&rsquo;',   '??, true, 'right single quotation mark'],
	['&ldquo;',   '??, true, 'left double quotation mark'],
	['&rdquo;',   '??, true, 'right double quotation mark'],
	['&sbquo;',   '??, true, 'single low-9 quotation mark'],
	['&bdquo;',   '??, true, 'double low-9 quotation mark'],
	['&lt;',      '&#60;',   true, 'less-than sign'],
	['&gt;',      '&#62;',   true, 'greater-than sign'],
	['&le;',      '??, true, 'less-than or equal to'],
	['&ge;',      '??, true, 'greater-than or equal to'],
	['&ndash;',   '??, true, 'en dash'],
	['&mdash;',   '??, true, 'em dash'],
	['&macr;',    '&#175;',  true, 'macron'],
	['&oline;',   '??, true, 'overline'],
	['&curren;',  '&#164;',  true, 'currency sign'],
	['&brvbar;',  '&#166;',  true, 'broken bar'],
	['&uml;',     '&#168;',  true, 'diaeresis'],
	['&iexcl;',   '&#161;',  true, 'inverted exclamation mark'],
	['&iquest;',  '&#191;',  true, 'turned question mark'],
	['&circ;',    '?',  true, 'circumflex accent'],
	['&tilde;',   '?',  true, 'small tilde'],
	['&deg;',     '&#176;',  true, 'degree sign'],
	['&minus;',   '??, true, 'minus sign'],
	['&plusmn;',  '&#177;',  true, 'plus-minus sign'],
	['&divide;',  '&#247;',  true, 'division sign'],
	['&frasl;',   '??, true, 'fraction slash'],
	['&times;',   '&#215;',  true, 'multiplication sign'],
	['&sup1;',    '&#185;',  true, 'superscript one'],
	['&sup2;',    '&#178;',  true, 'superscript two'],
	['&sup3;',    '&#179;',  true, 'superscript three'],
	['&frac14;',  '&#188;',  true, 'fraction one quarter'],
	['&frac12;',  '&#189;',  true, 'fraction one half'],
	['&frac34;',  '&#190;',  true, 'fraction three quarters'],
// math / logical
	['&fnof;',    '?',  true, 'function / florin'],
	['&int;',     '??, true, 'integral'],
	['&sum;',     '??, true, 'n-ary sumation'],
	['&infin;',   '??, true, 'infinity'],
	['&radic;',   '??, true, 'square root'],
	['&sim;',     '??, false,'similar to'],
	['&cong;',    '??, false,'approximately equal to'],
	['&asymp;',   '??, true, 'almost equal to'],
	['&ne;',      '??, true, 'not equal to'],
	['&equiv;',   '??, true, 'identical to'],
	['&isin;',    '??, false,'element of'],
	['&notin;',   '??, false,'not an element of'],
	['&ni;',      '??, false,'contains as member'],
	['&prod;',    '??, true, 'n-ary product'],
	['&and;',     '??, false,'logical and'],
	['&or;',      '??, false,'logical or'],
	['&not;',     '&#172;',  true, 'not sign'],
	['&cap;',     '??, true, 'intersection'],
	['&cup;',     '??, false,'union'],
	['&part;',    '??, true, 'partial differential'],
	['&forall;',  '?', false,'for all'],
	['&exist;',   '??, false,'there exists'],
	['&empty;',   '??, false,'diameter'],
	['&nabla;',   '??, false,'backward difference'],
	['&lowast;',  '??, false,'asterisk operator'],
	['&prop;',    '??, false,'proportional to'],
	['&ang;',     '??, false,'angle'],
// undefined
	['&acute;',   '&#180;',  true, 'acute accent'],
	['&cedil;',   '&#184;',  true, 'cedilla'],
	['&ordf;',    '&#170;',  true, 'feminine ordinal indicator'],
	['&ordm;',    '&#186;',  true, 'masculine ordinal indicator'],
	['&dagger;',  '??, true, 'dagger'],
	['&Dagger;',  '??, true, 'double dagger'],
// alphabetical special chars
	['&Agrave;',  '&#192;',  true, 'A - grave'],
	['&Aacute;',  '&#193;',  true, 'A - acute'],
	['&Acirc;',   '&#194;',  true, 'A - circumflex'],
	['&Atilde;',  '&#195;',  true, 'A - tilde'],
	['&Auml;',    '&#196;',  true, 'A - diaeresis'],
	['&Aring;',   '&#197;',  true, 'A - ring above'],
	['&AElig;',   '&#198;',  true, 'ligature AE'],
	['&Ccedil;',  '&#199;',  true, 'C - cedilla'],
	['&Egrave;',  '&#200;',  true, 'E - grave'],
	['&Eacute;',  '&#201;',  true, 'E - acute'],
	['&Ecirc;',   '&#202;',  true, 'E - circumflex'],
	['&Euml;',    '&#203;',  true, 'E - diaeresis'],
	['&Igrave;',  '&#204;',  true, 'I - grave'],
	['&Iacute;',  '&#205;',  true, 'I - acute'],
	['&Icirc;',   '&#206;',  true, 'I - circumflex'],
	['&Iuml;',    '&#207;',  true, 'I - diaeresis'],
	['&ETH;',     '&#208;',  true, 'ETH'],
	['&Ntilde;',  '&#209;',  true, 'N - tilde'],
	['&Ograve;',  '&#210;',  true, 'O - grave'],
	['&Oacute;',  '&#211;',  true, 'O - acute'],
	['&Ocirc;',   '&#212;',  true, 'O - circumflex'],
	['&Otilde;',  '&#213;',  true, 'O - tilde'],
	['&Ouml;',    '&#214;',  true, 'O - diaeresis'],
	['&Oslash;',  '&#216;',  true, 'O - slash'],
	['&OElig;',   '?',  true, 'ligature OE'],
	['&Scaron;',  '?',  true, 'S - caron'],
	['&Ugrave;',  '&#217;',  true, 'U - grave'],
	['&Uacute;',  '&#218;',  true, 'U - acute'],
	['&Ucirc;',   '&#219;',  true, 'U - circumflex'],
	['&Uuml;',    '&#220;',  true, 'U - diaeresis'],
	['&Yacute;',  '&#221;',  true, 'Y - acute'],
	['&Yuml;',    '顫',  true, 'Y - diaeresis'],
	['&THORN;',   '&#222;',  true, 'THORN'],
	['&agrave;',  '&#224;',  true, 'a - grave'],
	['&aacute;',  '&#225;',  true, 'a - acute'],
	['&acirc;',   '&#226;',  true, 'a - circumflex'],
	['&atilde;',  '&#227;',  true, 'a - tilde'],
	['&auml;',    '&#228;',  true, 'a - diaeresis'],
	['&aring;',   '&#229;',  true, 'a - ring above'],
	['&aelig;',   '&#230;',  true, 'ligature ae'],
	['&ccedil;',  '&#231;',  true, 'c - cedilla'],
	['&egrave;',  '&#232;',  true, 'e - grave'],
	['&eacute;',  '&#233;',  true, 'e - acute'],
	['&ecirc;',   '&#234;',  true, 'e - circumflex'],
	['&euml;',    '&#235;',  true, 'e - diaeresis'],
	['&igrave;',  '&#236;',  true, 'i - grave'],
	['&iacute;',  '&#237;',  true, 'i - acute'],
	['&icirc;',   '&#238;',  true, 'i - circumflex'],
	['&iuml;',    '&#239;',  true, 'i - diaeresis'],
	['&eth;',     '&#240;',  true, 'eth'],
	['&ntilde;',  '&#241;',  true, 'n - tilde'],
	['&ograve;',  '&#242;',  true, 'o - grave'],
	['&oacute;',  '&#243;',  true, 'o - acute'],
	['&ocirc;',   '&#244;',  true, 'o - circumflex'],
	['&otilde;',  '&#245;',  true, 'o - tilde'],
	['&ouml;',    '&#246;',  true, 'o - diaeresis'],
	['&oslash;',  '&#248;',  true, 'o slash'],
	['&oelig;',   '?',  true, 'ligature oe'],
	['&scaron;',  '禳',  true, 's - caron'],
	['&ugrave;',  '&#249;',  true, 'u - grave'],
	['&uacute;',  '&#250;',  true, 'u - acute'],
	['&ucirc;',   '&#251;',  true, 'u - circumflex'],
	['&uuml;',    '&#252;',  true, 'u - diaeresis'],
	['&yacute;',  '&#253;',  true, 'y - acute'],
	['&thorn;',   '&#254;',  true, 'thorn'],
	['&yuml;',    '&#255;',  true, 'y - diaeresis'],
	['&Alpha;',   '?',  true, 'Alpha'],
	['&Beta;',    '?',  true, 'Beta'],
	['&Gamma;',   '?',  true, 'Gamma'],
	['&Delta;',   '?',  true, 'Delta'],
	['&Epsilon;', '?',  true, 'Epsilon'],
	['&Zeta;',    '?',  true, 'Zeta'],
	['&Eta;',     '?',  true, 'Eta'],
	['&Theta;',   '?',  true, 'Theta'],
	['&Iota;',    '?',  true, 'Iota'],
	['&Kappa;',   '?',  true, 'Kappa'],
	['&Lambda;',  '?',  true, 'Lambda'],
	['&Mu;',      '?',  true, 'Mu'],
	['&Nu;',      '?',  true, 'Nu'],
	['&Xi;',      '?',  true, 'Xi'],
	['&Omicron;', '?',  true, 'Omicron'],
	['&Pi;',      '?',  true, 'Pi'],
	['&Rho;',     '峞',  true, 'Rho'],
	['&Sigma;',   '峉',  true, 'Sigma'],
	['&Tau;',     '峇',  true, 'Tau'],
	['&Upsilon;', '峊',  true, 'Upsilon'],
	['&Phi;',     '峖',  true, 'Phi'],
	['&Chi;',     '峓',  true, 'Chi'],
	['&Psi;',     '峔',  true, 'Psi'],
	['&Omega;',   '峏',  true, 'Omega'],
	['&alpha;',   '帢',  true, 'alpha'],
	['&beta;',    '帣',  true, 'beta'],
	['&gamma;',   '帠',  true, 'gamma'],
	['&delta;',   '帤',  true, 'delta'],
	['&epsilon;', '庰',  true, 'epsilon'],
	['&zeta;',    '庤',  true, 'zeta'],
	['&eta;',     '庢',  true, 'eta'],
	['&theta;',   '庛',  true, 'theta'],
	['&iota;',    '庣',  true, 'iota'],
	['&kappa;',   '庥',  true, 'kappa'],
	['&lambda;',  '弇',  true, 'lambda'],
	['&mu;',      '弮',  true, 'mu'],
	['&nu;',      '彖',  true, 'nu'],
	['&xi;',      '徆',  true, 'xi'],
	['&omicron;', '怷',  true, 'omicron'],
	['&pi;',      '?',  true, 'pi'],
	['&rho;',     '?',  true, 'rho'],
	['&sigmaf;',  '?',  true, 'final sigma'],
	['&sigma;',   '?',  true, 'sigma'],
	['&tau;',     '?',  true, 'tau'],
	['&upsilon;', '?',  true, 'upsilon'],
	['&phi;',     '?',  true, 'phi'],
	['&chi;',     '?',  true, 'chi'],
	['&psi;',     '?',  true, 'psi'],
	['&omega;',   '?',  true, 'omega'],
// symbols
	['&alefsym;', '??, false,'alef symbol'],
	['&piv;',     '?',  false,'pi symbol'],
	['&real;',    '??, false,'real part symbol'],
	['&thetasym;','?',  false,'theta symbol'],
	['&upsih;',   '?',  false,'upsilon - hook symbol'],
	['&weierp;',  '??, false,'Weierstrass p'],
	['&image;',   '??, false,'imaginary part'],
// arrows
	['&larr;',    '??, true, 'leftwards arrow'],
	['&uarr;',    '??, true, 'upwards arrow'],
	['&rarr;',    '??, true, 'rightwards arrow'],
	['&darr;',    '??, true, 'downwards arrow'],
	['&harr;',    '??, true, 'left right arrow'],
	['&crarr;',   '??, false,'carriage return'],
	['&lArr;',    '??, false,'leftwards double arrow'],
	['&uArr;',    '??, false,'upwards double arrow'],
	['&rArr;',    '??, false,'rightwards double arrow'],
	['&dArr;',    '??, false,'downwards double arrow'],
	['&hArr;',    '??, false,'left right double arrow'],
	['&there4;',  '??, false,'therefore'],
	['&sub;',     '??, false,'subset of'],
	['&sup;',     '??, false,'superset of'],
	['&nsub;',    '??, false,'not a subset of'],
	['&sube;',    '??, false,'subset of or equal to'],
	['&supe;',    '??, false,'superset of or equal to'],
	['&oplus;',   '??, false,'circled plus'],
	['&otimes;',  '??, false,'circled times'],
	['&perp;',    '??, false,'perpendicular'],
	['&sdot;',    '??, false,'dot operator'],
	['&lceil;',   '??, false,'left ceiling'],
	['&rceil;',   '??, false,'right ceiling'],
	['&lfloor;',  '??, false,'left floor'],
	['&rfloor;',  '??, false,'right floor'],
	['&lang;',    '??, false,'left-pointing angle bracket'],
	['&rang;',    '??, false,'right-pointing angle bracket'],
	['&loz;',     '??, true, 'lozenge'],
	['&spades;',  '??, true, 'black spade suit'],
	['&clubs;',   '??, true, 'black club suit'],
	['&hearts;',  '??, true, 'black heart suit'],
	['&diams;',   '??, true, 'black diamond suit'],
	['&ensp;',    '??, false,'en space'],
	['&emsp;',    '??, false,'em space'],
	['&thinsp;',  '??, false,'thin space'],
	['&zwnj;',    '??, false,'zero width non-joiner'],
	['&zwj;',     '??, false,'zero width joiner'],
	['&lrm;',     '??, false,'left-to-right mark'],
	['&rlm;',     '??, false,'right-to-left mark'],
	['&shy;',     '&#173;',  false,'soft hyphen']
];

tinyMCEPopup.onInit.add(function() {
	tinyMCEPopup.dom.setHTML('charmapView', renderCharMapHTML());
	addKeyboardNavigation();
});

function addKeyboardNavigation(){
	var tableElm, cells, settings;

	cells = tinyMCEPopup.dom.select(".charmaplink", "charmapgroup");

	settings ={
		root: "charmapgroup",
		items: cells
	};

	tinyMCEPopup.editor.windowManager.createInstance('tinymce.ui.KeyboardNavigation', settings, tinyMCEPopup.dom);
}

function renderCharMapHTML() {
	var charsPerRow = 20, tdWidth=20, tdHeight=20, i;
	var html = '<div id="charmapgroup" aria-labelledby="charmap_label" tabindex="0" role="listbox">'+
	'<table role="presentation" border="0" cellspacing="1" cellpadding="0" width="' + (tdWidth*charsPerRow) + 
	'"><tr height="' + tdHeight + '">';
	var cols=-1;

	for (i=0; i<charmap.length; i++) {
		var previewCharFn;

		if (charmap[i][2]==true) {
			cols++;
			previewCharFn = 'previewChar(\'' + charmap[i][1].substring(1,charmap[i][1].length) + '\',\'' + charmap[i][0].substring(1,charmap[i][0].length) + '\',\'' + charmap[i][3] + '\');';
			html += ''
				+ '<td class="charmap">'
				+ '<a class="charmaplink" role="button" onmouseover="'+previewCharFn+'" onfocus="'+previewCharFn+'" href="javascript:void(0)" onclick="insertChar(\'' + charmap[i][1].substring(2,charmap[i][1].length-1) + '\');" onclick="return false;" onmousedown="return false;" title="' + charmap[i][3] + '">'
				+ charmap[i][1]
				+ '</a></td>';
			if ((cols+1) % charsPerRow == 0)
				html += '</tr><tr height="' + tdHeight + '">';
		}
	 }

	if (cols % charsPerRow > 0) {
		var padd = charsPerRow - (cols % charsPerRow);
		for (var i=0; i<padd-1; i++)
			html += '<td width="' + tdWidth + '" height="' + tdHeight + '" class="charmap">&nbsp;</td>';
	}

	html += '</tr></table></div>';
	html = html.replace(/<tr height="20"><\/tr>/g, '');

	return html;
}

function insertChar(chr) {
	tinyMCEPopup.execCommand('mceInsertContent', false, '&#' + chr + ';');

	// Refocus in window
	if (tinyMCEPopup.isWindow)
		window.focus();

	tinyMCEPopup.editor.focus();
	tinyMCEPopup.close();
}

function previewChar(codeA, codeB, codeN) {
	var elmA = document.getElementById('codeA');
	var elmB = document.getElementById('codeB');
	var elmV = document.getElementById('codeV');
	var elmN = document.getElementById('codeN');

	if (codeA=='#160;') {
		elmV.innerHTML = '__';
	} else {
		elmV.innerHTML = '&' + codeA;
	}

	elmB.innerHTML = '&amp;' + codeA;
	elmA.innerHTML = '&amp;' + codeB;
	elmN.innerHTML = codeN;
}
