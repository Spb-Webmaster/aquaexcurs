document.addEventListener('DOMContentLoaded', function () {

    var $ua = window.navigator.userAgent;
    var $msie = $ua.indexOf("MSIE ");
    var $special;
    var special;
    var $version;
    var $subversion;
   // jQuery("html").hide();
    (function ($) {
        $.fn.removeClassWild = function (mask) {
            return this.removeClass(function (index, cls) {
                var re = mask.replace(/\*/g, "\\S+");
                return (cls.match(new RegExp("\\b" + re + "", "g")) || []).join(" ")
            })
        };
        special = {
            Reset: function () {
                $special = {
                    active: 1,
                    color: 1,
                    font_family: 1,
                    font_size: 1,
                    line_height: 1,
                    letter_spacing: 1,
                    images: 1
                };
                $.cookie("special", $special, {path: "/"})
            }, Set: function () {
                $("html").removeClassWild("special-*").addClass("special-color-" + $special.color).addClass("special-font-size-" + $special.font_size).addClass("special-font-family-" + $special.font_family).addClass("special-line-height-" + $special.line_height).addClass("special-letter-spacing-" + $special.letter_spacing).addClass("special-images-" + $special.images);
                $("#special button").removeClass("active");
                $(".special-color button[value=" + $special.color + "]").addClass("active");
                $(".special-font-size button[value=" + $special.font_size + "]").addClass("active");
                $(".special-font-family button[value=" + $special.font_family + "]").addClass("active");
                $(".special-line-height button[value=" + $special.line_height + "]").addClass("active");
                $(".special-letter-spacing button[value=" + $special.letter_spacing + "]").addClass("active");
                $(".special-images button").val($special.images);
                special.ToggleImages()
            }, ToggleImages: function () {
                $("img").each(function () {
                    if ($special.images) {
                        if ($(this).data("src")) $(this).attr("src", $(this).data("src"));
                        if ($(this).data("srcset")) $(this).attr("srcset", $(this).data("srcset"))
                    } else {
                        $(this).data("src", $(this).attr("src"));
                        if ($(this).attr("srcset")) $(this).data("srcset", $(this).attr("srcset"));
                        $(this).removeAttr("src");
                        if ($(this).attr("srcset")) $(this).removeAttr("srcset")
                    }
                })
            }, Off: function () {
                if ($("#specialButton").length) {
                    $("html").removeClass("special").removeClassWild("special-*");
                    $("i.special-audio").remove();
                    if (responsiveVoice.isPlaying()) responsiveVoice.cancel();
                    $("audio").remove();
                    $("#special").remove();
                    $.removeCookie("special", {path: "/"});
                    $("#specialButton").show()
                } else {
                    if ($msie > 0) {
                        var url = window.location + "";
                        if (url.indexOf("template=") >= 0) {
                            window.location = url.replace(/template=\d+/g, "template=0")
                        } else {
                            window.location = url + "?template=0"
                        }
                    } else {
                        $.post(window.location.origin + window.location.pathname, {template: 0}, function () {
                            window.location = window.location.origin + window.location.pathname
                        })
                    }
                }
            }, On: function () {
                $("head").append($('<link rel="stylesheet" type="text/css" />').attr("href", "uhpv/css/uhpv.css"));
                if (!$special) special.Reset();
                if ($("#specialButton").length) {
                    $special.active = 1;
                    $.cookie("special", $special, {path: "/"});
                    $("#specialButton").hide()
                }
                $("html").addClass("special");
                $("body").prepend($($tpl));
                special.Set();
                $("#special button").on("click", function () {
                    var parent = $(this).parent().attr("class").replace("special-", "");
                    if (parent) {
                        $("#special .special-" + parent + " button").removeClass("active");
                        switch (parent) {
                            case"color":
                                $special.color = parseInt($(this).val());
                                $(this).addClass("active");
                                $("html").removeClassWild("special-" + parent + "-*").addClass("special-" + parent + "-" + $(this).val());
                                $.cookie("special", $special, {path: "/"});
                                break;
                            case"font-size":
                                $special.font_size = parseInt($(this).val());
                                $(this).addClass("active");
                                $("html").removeClassWild("special-" + parent + "-*").addClass("special-" + parent + "-" + $(this).val());
                                $.cookie("special", $special, {path: "/"});
                                break;
                            case"font-family":
                                $special.font_family = parseInt($(this).val());
                                $(this).addClass("active");
                                $("html").removeClassWild("special-" + parent + "-*").addClass("special-" + parent + "-" + $(this).val());
                                $.cookie("special", $special, {path: "/"});
                                break;
                            case"line-height":
                                $special.line_height = parseInt($(this).val());
                                $(this).addClass("active");
                                $("html").removeClassWild("special-" + parent + "-*").addClass("special-" + parent + "-" + $(this).val());
                                $.cookie("special", $special, {path: "/"});
                                break;
                            case"letter-spacing":
                                $special.letter_spacing = parseInt($(this).val());
                                $(this).addClass("active");
                                $("html").removeClassWild("special-" + parent + "-*").addClass("special-" + parent + "-" + $(this).val());
                                $.cookie("special", $special, {path: "/"});
                                break;
                            case"images":
                                $special.images = $special.images ? 0 : 1;
                                $(this).val($special.images);
                                special.ToggleImages();
                                $.cookie("special", $special, {path: "/"});
                                break;
                            case"audio":
                                if ($(this).val() == 1) {
                                    $("i.special-audio").remove();
                                    if (responsiveVoice.isPlaying()) responsiveVoice.cancel();
                                    $("p,h1,h2,h3,h4,h5,h6,li,dt,dd,.audiotext").off();
                                    $(this).val(0)
                                } else {
                                    responsiveVoice.speak("Включено озвучивание текста.", "Russian Female");
                                    $(this).addClass("active");
                                    $(this).val(1);
                                    $("p,h1,h2,h3,h4,h5,h6,li,dt,dd,.audiotext").on("mouseover", function () {
                                        if (responsiveVoice.isPlaying()) responsiveVoice.cancel();
                                        responsiveVoice.speak($(this).text().trim(), "Russian Female")
                                    })
                                }
                                break;
                            case"settings":
                                $("#special-settings-body").slideToggle();
                                break;
                            case"settings-close":
                                $("#special-settings-body").slideUp();
                                break;
                            case"reset":
                                special.Reset();
                                special.Set();
                                $("#special-settings-body").slideUp();
                                break;
                            case"quit":
                                special.Off();
                                break
                        }
                    }
                })
            }
        }
    })(jQuery);
    jQuery(function ($) {
        $version = "1.3";
        $.cookie.json = true;
        $special = $.cookie("special");
        if ($("#specialButton").length) {
            $subversion = "lite";
            if ($special && $special.active) special.On();
            $("#specialButton").on("click", special.On)
        } else {
            $subversion = "pro";
            special.On()
        }
        console.info("Special version %s (%s).\nUser agent: %s", $version, $subversion, $ua);
        //$("html").fadeIn(1e3)
        $("html").show()
    });
    (function (factory) {
        if (typeof define === "function" && define.amd) {
            define(["jquery"], factory)
        } else if (typeof exports === "object") {
            factory(require("jquery"))
        } else {
            factory(jQuery)
        }
    })(function ($) {
        var pluses = /\+/g;

        function encode(s) {
            return config.raw ? s : encodeURIComponent(s)
        }

        function decode(s) {
            return config.raw ? s : decodeURIComponent(s)
        }

        function stringifyCookieValue(value) {
            return encode(config.json ? JSON.stringify(value) : String(value))
        }

        function parseCookieValue(s) {
            if (s.indexOf('"') === 0) {
                s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\")
            }
            try {
                s = decodeURIComponent(s.replace(pluses, " "));
                return config.json ? JSON.parse(s) : s
            } catch (e) {
            }
        }

        function read(s, converter) {
            var value = config.raw ? s : parseCookieValue(s);
            return $.isFunction(converter) ? converter(value) : value
        }

        var config = $.cookie = function (key, value, options) {
            if (value !== undefined && !$.isFunction(value)) {
                options = $.extend({}, config.defaults, options);
                if (typeof options.expires === "number") {
                    var days = options.expires, t = options.expires = new Date;
                    t.setTime(+t + days * 864e5)
                }
                return document.cookie = [encode(key), "=", stringifyCookieValue(value), options.expires ? "; expires=" + options.expires.toUTCString() : "", options.path ? "; path=" + options.path : "", options.domain ? "; domain=" + options.domain : "", options.secure ? "; secure" : ""].join("")
            }
            var result = key ? undefined : {};
            var cookies = document.cookie ? document.cookie.split("; ") : [];
            for (var i = 0, l = cookies.length; i < l; i++) {
                var parts = cookies[i].split("=");
                var name = decode(parts.shift());
                var cookie = parts.join("=");
                if (key && key === name) {
                    result = read(cookie, value);
                    break
                }
                if (!key && (cookie = read(cookie)) !== undefined) {
                    result[name] = cookie
                }
            }
            return result
        };
        config.defaults = {};
        $.removeCookie = function (key, options) {
            if ($.cookie(key) === undefined) {
                return false
            }
            $.cookie(key, "", $.extend({}, options, {expires: -1}));
            return !$.cookie(key)
        }
    });
    if ("undefined" != typeof responsiveVoice) console.log("ResponsiveVoice already loaded"), console.log(responsiveVoice); else var ResponsiveVoice = function () {
        var a = this;
        a.version = "1.5.0";
        console.log("ResponsiveVoice r" + a.version);
        a.responsivevoices = [{
            name: "UK English Female",
            flag: "gb",
            gender: "f",
            voiceIDs: [3, 5, 1, 6, 7, 171, 201, 8]
        }, {
            name: "UK English Male",
            flag: "gb",
            gender: "m",
            voiceIDs: [0, 4, 2, 75, 202, 159, 6, 7]
        }, {
            name: "US English Female",
            flag: "us",
            gender: "f",
            voiceIDs: [39, 40, 41, 42, 43, 173, 205, 204, 235, 44]
        }, {
            name: "Arabic Male",
            flag: "ar",
            gender: "m",
            voiceIDs: [96, 95, 97, 196, 98],
            deprecated: !0
        }, {name: "Arabic Female", flag: "ar", gender: "f", voiceIDs: [96, 95, 97, 196, 98]}, {
            name: "Armenian Male",
            flag: "hy",
            gender: "f",
            voiceIDs: [99]
        }, {
            name: "Australian Female",
            flag: "au",
            gender: "f",
            voiceIDs: [87, 86, 5, 201, 88]
        }, {
            name: "Brazilian Portuguese Female",
            flag: "br",
            gender: "f",
            voiceIDs: [245, 124, 123, 125, 186, 223, 126]
        }, {
            name: "Chinese Female",
            flag: "cn",
            gender: "f",
            voiceIDs: [249, 58, 59, 60, 155, 191, 231, 61]
        }, {
            name: "Chinese (Hong Kong) Female",
            flag: "hk",
            gender: "f",
            voiceIDs: [192, 193, 232, 250, 251, 252]
        }, {
            name: "Chinese Taiwan Female",
            flag: "tw",
            gender: "f",
            voiceIDs: [252, 194, 233, 253, 254, 255]
        }, {name: "Czech Female", flag: "cz", gender: "f", voiceIDs: [101, 100, 102, 197, 103]}, {
            name: "Danish Female",
            flag: "dk",
            gender: "f",
            voiceIDs: [105, 104, 106, 198, 107]
        }, {
            name: "Deutsch Female",
            flag: "de",
            gender: "f",
            voiceIDs: [27, 28, 29, 30, 31, 78, 170, 199, 32]
        }, {
            name: "Dutch Female",
            flag: "nl",
            gender: "f",
            voiceIDs: [243, 219, 84, 157, 158, 184, 45]
        }, {name: "Finnish Female", flag: "fi", gender: "f", voiceIDs: [90, 89, 91, 209, 92]}, {
            name: "French Female",
            flag: "fr",
            gender: "f",
            voiceIDs: [240, 21, 22, 23, 77, 178, 210, 26]
        }, {
            name: "Greek Female",
            flag: "gr",
            gender: "f",
            voiceIDs: [62, 63, 80, 200, 64]
        }, {name: "Hatian Creole Female", flag: "ht", gender: "f", voiceIDs: [109]}, {
            name: "Hindi Female",
            flag: "hi",
            gender: "f",
            voiceIDs: [247, 66, 154, 179, 213, 67]
        }, {
            name: "Hungarian Female",
            flag: "hu",
            gender: "f",
            voiceIDs: [9, 10, 81, 214, 11]
        }, {
            name: "Indonesian Female",
            flag: "id",
            gender: "f",
            voiceIDs: [241, 111, 112, 180, 215, 113]
        }, {
            name: "Italian Female",
            flag: "it",
            gender: "f",
            voiceIDs: [242, 33, 34, 35, 36, 37, 79, 181, 216, 38]
        }, {
            name: "Japanese Female",
            flag: "jp",
            gender: "f",
            voiceIDs: [248, 50, 51, 52, 153, 182, 217, 53]
        }, {
            name: "Korean Female",
            flag: "kr",
            gender: "f",
            voiceIDs: [54, 55, 56, 156, 183, 218, 57]
        }, {name: "Latin Female", flag: "va", gender: "f", voiceIDs: [114]}, {
            name: "Norwegian Female",
            flag: "no",
            gender: "f",
            voiceIDs: [72, 73, 221, 74]
        }, {
            name: "Polish Female",
            flag: "pl",
            gender: "f",
            voiceIDs: [244, 120, 119, 121, 185, 222, 122]
        }, {
            name: "Portuguese Female",
            flag: "br",
            gender: "f",
            voiceIDs: [128, 127, 129, 187, 224, 130]
        }, {
            name: "Romanian Male",
            flag: "ro",
            gender: "m",
            voiceIDs: [151, 150, 152, 225, 46]
        }, {
            name: "Russian Female",
            flag: "ru",
            gender: "f",
            voiceIDs: [246, 47, 48, 83, 188, 226, 49]
        }, {
            name: "Slovak Female",
            flag: "sk",
            gender: "f",
            voiceIDs: [133, 132, 134, 227, 135]
        }, {
            name: "Spanish Female",
            flag: "es",
            gender: "f",
            voiceIDs: [19, 238, 16, 17, 18, 20, 76, 174, 207, 15]
        }, {
            name: "Spanish Latin American Female",
            flag: "es",
            gender: "f",
            voiceIDs: [239, 137, 136, 138, 175, 208, 139]
        }, {name: "Swedish Female", flag: "sv", gender: "f", voiceIDs: [85, 148, 149, 228, 65]}, {
            name: "Tamil Male",
            flag: "hi",
            gender: "m",
            voiceIDs: [141]
        }, {
            name: "Thai Female",
            flag: "th",
            gender: "f",
            voiceIDs: [143, 142, 144, 189, 229, 145]
        }, {
            name: "Turkish Female",
            flag: "tr",
            gender: "f",
            voiceIDs: [69, 70, 82, 190, 230, 71]
        }, {name: "Afrikaans Male", flag: "af", gender: "m", voiceIDs: [93]}, {
            name: "Albanian Male",
            flag: "sq",
            gender: "m",
            voiceIDs: [94]
        }, {name: "Bosnian Male", flag: "bs", gender: "m", voiceIDs: [14]}, {
            name: "Catalan Male",
            flag: "catalonia",
            gender: "m",
            voiceIDs: [68]
        }, {name: "Croatian Male", flag: "hr", gender: "m", voiceIDs: [13]}, {
            name: "Czech Male",
            flag: "cz",
            gender: "m",
            voiceIDs: [161]
        }, {name: "Danish Male", flag: "da", gender: "m", voiceIDs: [162], deprecated: !0}, {
            name: "Esperanto Male",
            flag: "eo",
            gender: "m",
            voiceIDs: [108]
        }, {name: "Finnish Male", flag: "fi", gender: "m", voiceIDs: [160], deprecated: !0}, {
            name: "Greek Male",
            flag: "gr",
            gender: "m",
            voiceIDs: [163],
            deprecated: !0
        }, {name: "Hungarian Male", flag: "hu", gender: "m", voiceIDs: [164]}, {
            name: "Icelandic Male",
            flag: "is",
            gender: "m",
            voiceIDs: [110]
        }, {name: "Latin Male", flag: "va", gender: "m", voiceIDs: [165], deprecated: !0}, {
            name: "Latvian Male",
            flag: "lv",
            gender: "m",
            voiceIDs: [115]
        }, {name: "Macedonian Male", flag: "mk", gender: "m", voiceIDs: [116]}, {
            name: "Moldavian Male",
            flag: "md",
            gender: "m",
            voiceIDs: [117]
        }, {name: "Montenegrin Male", flag: "me", gender: "m", voiceIDs: [118]}, {
            name: "Norwegian Male",
            flag: "no",
            gender: "m",
            voiceIDs: [166]
        }, {name: "Serbian Male", flag: "sr", gender: "m", voiceIDs: [12]}, {
            name: "Serbo-Croatian Male",
            flag: "hr",
            gender: "m",
            voiceIDs: [131]
        }, {name: "Slovak Male", flag: "sk", gender: "m", voiceIDs: [167], deprecated: !0}, {
            name: "Swahili Male",
            flag: "sw",
            gender: "m",
            voiceIDs: [140]
        }, {name: "Swedish Male", flag: "sv", gender: "m", voiceIDs: [168], deprecated: !0}, {
            name: "Vietnamese Male",
            flag: "vi",
            gender: "m",
            voiceIDs: [146],
            deprecated: !0
        }, {name: "Welsh Male", flag: "cy", gender: "m", voiceIDs: [147]}, {
            name: "US English Male",
            flag: "us",
            gender: "m",
            voiceIDs: [0, 4, 2, 6, 7, 75, 159, 234, 236, 237]
        }, {name: "Fallback UK Female", flag: "gb", gender: "f", voiceIDs: [8]}];
        a.voicecollection = [{name: "Google UK English Male"}, {name: "Agnes"}, {name: "Daniel Compact"}, {name: "Google UK English Female"}, {
            name: "en-GB",
            rate: .25,
            pitch: 1
        }, {
            name: "en-AU",
            rate: .25,
            pitch: 1
        }, {name: "inglés Reino Unido"}, {name: "English United Kingdom"}, {
            name: "Fallback en-GB Female",
            lang: "en-GB",
            fallbackvoice: !0
        }, {name: "Eszter Compact"}, {name: "hu-HU", rate: .4}, {
            name: "Fallback Hungarian",
            lang: "hu",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Fallback Serbian", lang: "sr", fallbackvoice: !0}, {
            name: "Fallback Croatian",
            lang: "hr",
            fallbackvoice: !0
        }, {name: "Fallback Bosnian", lang: "bs", fallbackvoice: !0}, {
            name: "Fallback Spanish",
            lang: "es",
            fallbackvoice: !0
        }, {name: "Spanish Spain"}, {name: "español España"}, {
            name: "Diego Compact",
            rate: .3
        }, {name: "Google Español"}, {
            name: "es-ES",
            rate: .2
        }, {name: "Google Français"}, {name: "French France"}, {name: "francés Francia"}, {
            name: "Virginie Compact",
            rate: .5
        }, {name: "fr-FR", rate: .25}, {
            name: "Fallback French",
            lang: "fr",
            fallbackvoice: !0
        }, {name: "Google Deutsch"}, {name: "German Germany"}, {name: "alemán Alemania"}, {
            name: "Yannick Compact",
            rate: .5
        }, {name: "de-DE", rate: .25}, {
            name: "Fallback Deutsch",
            lang: "de",
            fallbackvoice: !0
        }, {name: "Google Italiano"}, {name: "Italian Italy"}, {name: "italiano Italia"}, {
            name: "Paolo Compact",
            rate: .5
        }, {name: "it-IT", rate: .25}, {
            name: "Fallback Italian",
            lang: "it",
            fallbackvoice: !0
        }, {
            name: "Google US English",
            timerSpeed: 1
        }, {name: "English United States"}, {name: "inglés Estados Unidos"}, {name: "Vicki"}, {
            name: "en-US",
            rate: .2,
            pitch: 1,
            timerSpeed: 1.3
        }, {name: "Fallback English", lang: "en-US", fallbackvoice: !0, timerSpeed: 0}, {
            name: "Fallback Dutch",
            lang: "nl",
            fallbackvoice: !0,
            timerSpeed: 0
        }, {name: "Fallback Romanian", lang: "ro", fallbackvoice: !0}, {name: "Milena Compact"}, {
            name: "ru-RU",
            rate: .25
        }, {name: "Fallback Russian", lang: "ru_RU", fallbackvoice: !0}, {
            name: "Google 日本人",
            timerSpeed: 1
        }, {name: "Kyoko Compact"}, {name: "ja-JP", rate: .25}, {
            name: "Fallback Japanese",
            lang: "ja",
            fallbackvoice: !0
        }, {name: "Google 한국의", timerSpeed: 1}, {name: "Narae Compact"}, {
            name: "ko-KR",
            rate: .25
        }, {name: "Fallback Korean", lang: "ko", fallbackvoice: !0}, {
            name: "Google 中国的",
            timerSpeed: 1
        }, {name: "Ting-Ting Compact"}, {name: "zh-CN", rate: .25}, {
            name: "Fallback Chinese",
            lang: "zh-CN",
            fallbackvoice: !0
        }, {name: "Alexandros Compact"}, {name: "el-GR", rate: .25}, {
            name: "Fallback Greek",
            lang: "el",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Fallback Swedish", lang: "sv", fallbackvoice: !0, service: "g2"}, {
            name: "hi-IN",
            rate: .25
        }, {name: "Fallback Hindi", lang: "hi", fallbackvoice: !0}, {
            name: "Fallback Catalan",
            lang: "ca",
            fallbackvoice: !0
        }, {name: "Aylin Compact"}, {name: "tr-TR", rate: .25}, {
            name: "Fallback Turkish",
            lang: "tr",
            fallbackvoice: !0
        }, {name: "Stine Compact"}, {name: "no-NO", rate: .25}, {
            name: "Fallback Norwegian",
            lang: "no",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Daniel"}, {name: "Monica"}, {name: "Amelie"}, {name: "Anna"}, {name: "Alice"}, {name: "Melina"}, {name: "Mariska"}, {name: "Yelda"}, {name: "Milena"}, {name: "Xander"}, {name: "Alva"}, {name: "Lee Compact"}, {name: "Karen"}, {
            name: "Fallback Australian",
            lang: "en-AU",
            fallbackvoice: !0
        }, {name: "Mikko Compact"}, {name: "Satu"}, {name: "fi-FI", rate: .25}, {
            name: "Fallback Finnish",
            lang: "fi",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Fallback Afrikans", lang: "af", fallbackvoice: !0}, {
            name: "Fallback Albanian",
            lang: "sq",
            fallbackvoice: !0
        }, {name: "Maged Compact"}, {name: "Tarik"}, {name: "ar-SA", rate: .25}, {
            name: "Fallback Arabic",
            lang: "ar",
            fallbackvoice: !0,
            service: "g2"
        }, {
            name: "Fallback Armenian",
            lang: "hy",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Zuzana Compact"}, {name: "Zuzana"}, {name: "cs-CZ", rate: .25}, {
            name: "Fallback Czech",
            lang: "cs",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Ida Compact"}, {name: "Sara"}, {name: "da-DK", rate: .25}, {
            name: "Fallback Danish",
            lang: "da",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Fallback Esperanto", lang: "eo", fallbackvoice: !0}, {
            name: "Fallback Hatian Creole",
            lang: "ht",
            fallbackvoice: !0
        }, {name: "Fallback Icelandic", lang: "is", fallbackvoice: !0}, {name: "Damayanti"}, {
            name: "id-ID",
            rate: .25
        }, {name: "Fallback Indonesian", lang: "id", fallbackvoice: !0}, {
            name: "Fallback Latin",
            lang: "la",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Fallback Latvian", lang: "lv", fallbackvoice: !0}, {
            name: "Fallback Macedonian",
            lang: "mk",
            fallbackvoice: !0
        }, {name: "Fallback Moldavian", lang: "mo", fallbackvoice: !0, service: "g2"}, {
            name: "Fallback Montenegrin",
            lang: "sr-ME",
            fallbackvoice: !0
        }, {name: "Agata Compact"}, {name: "Zosia"}, {name: "pl-PL", rate: .25}, {
            name: "Fallback Polish",
            lang: "pl",
            fallbackvoice: !0
        }, {name: "Raquel Compact"}, {name: "Luciana"}, {
            name: "pt-BR",
            rate: .25
        }, {
            name: "Fallback Brazilian Portugese",
            lang: "pt-BR",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Joana Compact"}, {name: "Joana"}, {name: "pt-PT", rate: .25}, {
            name: "Fallback Portuguese",
            lang: "pt-PT",
            fallbackvoice: !0
        }, {
            name: "Fallback Serbo-Croation",
            lang: "sh",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Laura Compact"}, {name: "Laura"}, {name: "sk-SK", rate: .25}, {
            name: "Fallback Slovak",
            lang: "sk",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Javier Compact"}, {name: "Paulina"}, {
            name: "es-MX",
            rate: .25
        }, {
            name: "Fallback Spanish (Latin American)",
            lang: "es-419",
            fallbackvoice: !0,
            service: "g2"
        }, {name: "Fallback Swahili", lang: "sw", fallbackvoice: !0}, {
            name: "Fallback Tamil",
            lang: "ta",
            fallbackvoice: !0
        }, {name: "Narisa Compact"}, {name: "Kanya"}, {name: "th-TH", rate: .25}, {
            name: "Fallback Thai",
            lang: "th",
            fallbackvoice: !0
        }, {name: "Fallback Vietnamese", lang: "vi", fallbackvoice: !0}, {
            name: "Fallback Welsh",
            lang: "cy",
            fallbackvoice: !0
        }, {name: "Oskar Compact"}, {
            name: "sv-SE",
            rate: .25
        }, {name: "Simona Compact"}, {name: "Ioana"}, {
            name: "ro-RO",
            rate: .25
        }, {name: "Kyoko"}, {name: "Lekha"}, {name: "Ting-Ting"}, {name: "Yuna"}, {name: "Xander Compact"}, {
            name: "nl-NL",
            rate: .25
        }, {
            name: "Fallback UK English Male",
            lang: "en-GB",
            fallbackvoice: !0,
            service: "g1",
            voicename: "rjs"
        }, {name: "Finnish Male", lang: "fi", fallbackvoice: !0, service: "g1", voicename: ""}, {
            name: "Czech Male",
            lang: "cs",
            fallbackvoice: !0,
            service: "g1",
            voicename: ""
        }, {name: "Danish Male", lang: "da", fallbackvoice: !0, service: "g1", voicename: ""}, {
            name: "Greek Male",
            lang: "el",
            fallbackvoice: !0,
            service: "g1",
            voicename: "",
            rate: .25
        }, {name: "Hungarian Male", lang: "hu", fallbackvoice: !0, service: "g1", voicename: ""}, {
            name: "Latin Male",
            lang: "la",
            fallbackvoice: !0,
            service: "g1",
            voicename: ""
        }, {name: "Norwegian Male", lang: "no", fallbackvoice: !0, service: "g1", voicename: ""}, {
            name: "Slovak Male",
            lang: "sk",
            fallbackvoice: !0,
            service: "g1",
            voicename: ""
        }, {
            name: "Swedish Male",
            lang: "sv",
            fallbackvoice: !0,
            service: "g1",
            voicename: ""
        }, {
            name: "Fallback US English Male",
            lang: "en",
            fallbackvoice: !0,
            service: "tts-api",
            voicename: ""
        }, {name: "German Germany", lang: "de_DE"}, {
            name: "English United Kingdom",
            lang: "en_GB"
        }, {name: "English India", lang: "en_IN"}, {
            name: "English United States",
            lang: "en_US"
        }, {name: "Spanish Spain", lang: "es_ES"}, {
            name: "Spanish Mexico",
            lang: "es_MX"
        }, {name: "Spanish United States", lang: "es_US"}, {
            name: "French Belgium",
            lang: "fr_BE"
        }, {name: "French France", lang: "fr_FR"}, {name: "Hindi India", lang: "hi_IN"}, {
            name: "Indonesian Indonesia",
            lang: "in_ID"
        }, {name: "Italian Italy", lang: "it_IT"}, {name: "Japanese Japan", lang: "ja_JP"}, {
            name: "Korean South Korea",
            lang: "ko_KR"
        }, {name: "Dutch Netherlands", lang: "nl_NL"}, {
            name: "Polish Poland",
            lang: "pl_PL"
        }, {name: "Portuguese Brazil", lang: "pt_BR"}, {
            name: "Portuguese Portugal",
            lang: "pt_PT"
        }, {name: "Russian Russia", lang: "ru_RU"}, {name: "Thai Thailand", lang: "th_TH"}, {
            name: "Turkish Turkey",
            lang: "tr_TR"
        }, {name: "Chinese China", lang: "zh_CN_#Hans"}, {
            name: "Chinese Hong Kong",
            lang: "zh_HK_#Hans"
        }, {name: "Chinese Hong Kong", lang: "zh_HK_#Hant"}, {
            name: "Chinese Taiwan",
            lang: "zh_TW_#Hant"
        }, {name: "Alex"}, {name: "Maged", lang: "ar-SA"}, {name: "Zuzana", lang: "cs-CZ"}, {
            name: "Sara",
            lang: "da-DK"
        }, {name: "Anna", lang: "de-DE"}, {name: "Melina", lang: "el-GR"}, {
            name: "Karen",
            lang: "en-AU"
        }, {name: "Daniel", lang: "en-GB"}, {name: "Moira", lang: "en-IE"}, {
            name: "Samantha (Enhanced)",
            lang: "en-US"
        }, {name: "Samantha", lang: "en-US"}, {name: "Tessa", lang: "en-ZA"}, {
            name: "Monica",
            lang: "es-ES"
        }, {name: "Paulina", lang: "es-MX"}, {name: "Satu", lang: "fi-FI"}, {
            name: "Amelie",
            lang: "fr-CA"
        }, {name: "Thomas", lang: "fr-FR"}, {name: "Carmit", lang: "he-IL"}, {
            name: "Lekha",
            lang: "hi-IN"
        }, {name: "Mariska", lang: "hu-HU"}, {name: "Damayanti", lang: "id-ID"}, {
            name: "Alice",
            lang: "it-IT"
        }, {name: "Kyoko", lang: "ja-JP"}, {name: "Yuna", lang: "ko-KR"}, {
            name: "Ellen",
            lang: "nl-BE"
        }, {name: "Xander", lang: "nl-NL"}, {name: "Nora", lang: "no-NO"}, {
            name: "Zosia",
            lang: "pl-PL"
        }, {name: "Luciana", lang: "pt-BR"}, {name: "Joana", lang: "pt-PT"}, {
            name: "Ioana",
            lang: "ro-RO"
        }, {name: "Milena", lang: "ru-RU"}, {name: "Laura", lang: "sk-SK"}, {
            name: "Alva",
            lang: "sv-SE"
        }, {name: "Kanya", lang: "th-TH"}, {name: "Yelda", lang: "tr-TR"}, {
            name: "Ting-Ting",
            lang: "zh-CN"
        }, {name: "Sin-Ji", lang: "zh-HK"}, {
            name: "Mei-Jia",
            lang: "zh-TW"
        }, {
            name: "Microsoft David Mobile - English (United States)",
            lang: "en-US"
        }, {
            name: "Microsoft Zira Mobile - English (United States)",
            lang: "en-US"
        }, {name: "Microsoft Mark Mobile - English (United States)", lang: "en-US"}, {
            name: "native",
            lang: ""
        }, {name: "Google español"}, {name: "Google español de Estados Unidos"}, {name: "Google français"}, {name: "Google Bahasa Indonesia"}, {name: "Google italiano"}, {name: "Google Nederlands"}, {name: "Google polski"}, {name: "Google português do Brasil"}, {name: "Google русский"}, {name: "Google हिन्दी"}, {name: "Google 日本語"}, {name: "Google 普通话（中国大陆）"}, {name: "Google 粤語（香港）"}, {
            name: "zh-HK",
            rate: .25
        }, {
            name: "Fallback Chinese (Hong Kong) Female",
            lang: "zh-HK",
            fallbackvoice: !0,
            service: "g1"
        }, {name: "Google 粤語（香港）"}, {name: "zh-TW", rate: .25}, {
            name: "Fallback Chinese (Taiwan) Female",
            lang: "zh-TW",
            fallbackvoice: !0,
            service: "g1"
        }];
        a.iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
        a.iOS9 = /(iphone|ipod|ipad).* os 9_/.test(navigator.userAgent.toLowerCase()) || /(iphone|ipod|ipad).* os 10_/.test(navigator.userAgent.toLowerCase());
        a.is_chrome = -1 < navigator.userAgent.indexOf("Chrome");
        a.is_safari = -1 < navigator.userAgent.indexOf("Safari");
        a.is_chrome && a.is_safari && (a.is_safari = !1);
        a.is_opera = !!window.opera || 0 <= navigator.userAgent.indexOf(" OPR/");
        a.is_android = -1 < navigator.userAgent.toLowerCase().indexOf("android");
        a.iOS_initialized = !1;
        a.iOS9_initialized = !1;
        a.cache_ios_voices = [{name: "he-IL", voiceURI: "he-IL", lang: "he-IL"}, {
            name: "th-TH",
            voiceURI: "th-TH",
            lang: "th-TH"
        }, {name: "pt-BR", voiceURI: "pt-BR", lang: "pt-BR"}, {
            name: "sk-SK",
            voiceURI: "sk-SK",
            lang: "sk-SK"
        }, {name: "fr-CA", voiceURI: "fr-CA", lang: "fr-CA"}, {
            name: "ro-RO",
            voiceURI: "ro-RO",
            lang: "ro-RO"
        }, {name: "no-NO", voiceURI: "no-NO", lang: "no-NO"}, {
            name: "fi-FI",
            voiceURI: "fi-FI",
            lang: "fi-FI"
        }, {name: "pl-PL", voiceURI: "pl-PL", lang: "pl-PL"}, {
            name: "de-DE",
            voiceURI: "de-DE",
            lang: "de-DE"
        }, {name: "nl-NL", voiceURI: "nl-NL", lang: "nl-NL"}, {
            name: "id-ID",
            voiceURI: "id-ID",
            lang: "id-ID"
        }, {name: "tr-TR", voiceURI: "tr-TR", lang: "tr-TR"}, {
            name: "it-IT",
            voiceURI: "it-IT",
            lang: "it-IT"
        }, {name: "pt-PT", voiceURI: "pt-PT", lang: "pt-PT"}, {
            name: "fr-FR",
            voiceURI: "fr-FR",
            lang: "fr-FR"
        }, {name: "ru-RU", voiceURI: "ru-RU", lang: "ru-RU"}, {
            name: "es-MX",
            voiceURI: "es-MX",
            lang: "es-MX"
        }, {name: "zh-HK", voiceURI: "zh-HK", lang: "zh-HK"}, {
            name: "sv-SE",
            voiceURI: "sv-SE",
            lang: "sv-SE"
        }, {name: "hu-HU", voiceURI: "hu-HU", lang: "hu-HU"}, {
            name: "zh-TW",
            voiceURI: "zh-TW",
            lang: "zh-TW"
        }, {name: "es-ES", voiceURI: "es-ES", lang: "es-ES"}, {
            name: "zh-CN",
            voiceURI: "zh-CN",
            lang: "zh-CN"
        }, {name: "nl-BE", voiceURI: "nl-BE", lang: "nl-BE"}, {
            name: "en-GB",
            voiceURI: "en-GB",
            lang: "en-GB"
        }, {name: "ar-SA", voiceURI: "ar-SA", lang: "ar-SA"}, {
            name: "ko-KR",
            voiceURI: "ko-KR",
            lang: "ko-KR"
        }, {name: "cs-CZ", voiceURI: "cs-CZ", lang: "cs-CZ"}, {
            name: "en-ZA",
            voiceURI: "en-ZA",
            lang: "en-ZA"
        }, {name: "en-AU", voiceURI: "en-AU", lang: "en-AU"}, {
            name: "da-DK",
            voiceURI: "da-DK",
            lang: "da-DK"
        }, {name: "en-US", voiceURI: "en-US", lang: "en-US"}, {
            name: "en-IE",
            voiceURI: "en-IE",
            lang: "en-IE"
        }, {name: "hi-IN", voiceURI: "hi-IN", lang: "hi-IN"}, {
            name: "el-GR",
            voiceURI: "el-GR",
            lang: "el-GR"
        }, {name: "ja-JP", voiceURI: "ja-JP", lang: "ja-JP"}];
        a.cache_ios9_voices = [{
            name: "Maged",
            voiceURI: "com.apple.ttsbundle.Maged-compact",
            lang: "ar-SA",
            localService: !0,
            "default": !0
        }, {
            name: "Zuzana",
            voiceURI: "com.apple.ttsbundle.Zuzana-compact",
            lang: "cs-CZ",
            localService: !0,
            "default": !0
        }, {
            name: "Sara",
            voiceURI: "com.apple.ttsbundle.Sara-compact",
            lang: "da-DK",
            localService: !0,
            "default": !0
        }, {
            name: "Anna",
            voiceURI: "com.apple.ttsbundle.Anna-compact",
            lang: "de-DE",
            localService: !0,
            "default": !0
        }, {
            name: "Melina",
            voiceURI: "com.apple.ttsbundle.Melina-compact",
            lang: "el-GR",
            localService: !0,
            "default": !0
        }, {
            name: "Karen",
            voiceURI: "com.apple.ttsbundle.Karen-compact",
            lang: "en-AU",
            localService: !0,
            "default": !0
        }, {
            name: "Daniel",
            voiceURI: "com.apple.ttsbundle.Daniel-compact",
            lang: "en-GB",
            localService: !0,
            "default": !0
        }, {
            name: "Moira",
            voiceURI: "com.apple.ttsbundle.Moira-compact",
            lang: "en-IE",
            localService: !0,
            "default": !0
        }, {
            name: "Samantha (Enhanced)",
            voiceURI: "com.apple.ttsbundle.Samantha-premium",
            lang: "en-US",
            localService: !0,
            "default": !0
        }, {
            name: "Samantha",
            voiceURI: "com.apple.ttsbundle.Samantha-compact",
            lang: "en-US",
            localService: !0,
            "default": !0
        }, {
            name: "Tessa",
            voiceURI: "com.apple.ttsbundle.Tessa-compact",
            lang: "en-ZA",
            localService: !0,
            "default": !0
        }, {
            name: "Monica",
            voiceURI: "com.apple.ttsbundle.Monica-compact",
            lang: "es-ES",
            localService: !0,
            "default": !0
        }, {
            name: "Paulina",
            voiceURI: "com.apple.ttsbundle.Paulina-compact",
            lang: "es-MX",
            localService: !0,
            "default": !0
        }, {
            name: "Satu",
            voiceURI: "com.apple.ttsbundle.Satu-compact",
            lang: "fi-FI",
            localService: !0,
            "default": !0
        }, {
            name: "Amelie",
            voiceURI: "com.apple.ttsbundle.Amelie-compact",
            lang: "fr-CA",
            localService: !0,
            "default": !0
        }, {
            name: "Thomas",
            voiceURI: "com.apple.ttsbundle.Thomas-compact",
            lang: "fr-FR",
            localService: !0,
            "default": !0
        }, {
            name: "Carmit",
            voiceURI: "com.apple.ttsbundle.Carmit-compact",
            lang: "he-IL",
            localService: !0,
            "default": !0
        }, {
            name: "Lekha",
            voiceURI: "com.apple.ttsbundle.Lekha-compact",
            lang: "hi-IN",
            localService: !0,
            "default": !0
        }, {
            name: "Mariska",
            voiceURI: "com.apple.ttsbundle.Mariska-compact",
            lang: "hu-HU",
            localService: !0,
            "default": !0
        }, {
            name: "Damayanti",
            voiceURI: "com.apple.ttsbundle.Damayanti-compact",
            lang: "id-ID",
            localService: !0,
            "default": !0
        }, {
            name: "Alice",
            voiceURI: "com.apple.ttsbundle.Alice-compact",
            lang: "it-IT",
            localService: !0,
            "default": !0
        }, {
            name: "Kyoko",
            voiceURI: "com.apple.ttsbundle.Kyoko-compact",
            lang: "ja-JP",
            localService: !0,
            "default": !0
        }, {
            name: "Yuna",
            voiceURI: "com.apple.ttsbundle.Yuna-compact",
            lang: "ko-KR",
            localService: !0,
            "default": !0
        }, {
            name: "Ellen",
            voiceURI: "com.apple.ttsbundle.Ellen-compact",
            lang: "nl-BE",
            localService: !0,
            "default": !0
        }, {
            name: "Xander",
            voiceURI: "com.apple.ttsbundle.Xander-compact",
            lang: "nl-NL",
            localService: !0,
            "default": !0
        }, {
            name: "Nora",
            voiceURI: "com.apple.ttsbundle.Nora-compact",
            lang: "no-NO",
            localService: !0,
            "default": !0
        }, {
            name: "Zosia",
            voiceURI: "com.apple.ttsbundle.Zosia-compact",
            lang: "pl-PL",
            localService: !0,
            "default": !0
        }, {
            name: "Luciana",
            voiceURI: "com.apple.ttsbundle.Luciana-compact",
            lang: "pt-BR",
            localService: !0,
            "default": !0
        }, {
            name: "Joana",
            voiceURI: "com.apple.ttsbundle.Joana-compact",
            lang: "pt-PT",
            localService: !0,
            "default": !0
        }, {
            name: "Ioana",
            voiceURI: "com.apple.ttsbundle.Ioana-compact",
            lang: "ro-RO",
            localService: !0,
            "default": !0
        }, {
            name: "Milena",
            voiceURI: "com.apple.ttsbundle.Milena-compact",
            lang: "ru-RU",
            localService: !0,
            "default": !0
        }, {
            name: "Laura",
            voiceURI: "com.apple.ttsbundle.Laura-compact",
            lang: "sk-SK",
            localService: !0,
            "default": !0
        }, {
            name: "Alva",
            voiceURI: "com.apple.ttsbundle.Alva-compact",
            lang: "sv-SE",
            localService: !0,
            "default": !0
        }, {
            name: "Kanya",
            voiceURI: "com.apple.ttsbundle.Kanya-compact",
            lang: "th-TH",
            localService: !0,
            "default": !0
        }, {
            name: "Yelda",
            voiceURI: "com.apple.ttsbundle.Yelda-compact",
            lang: "tr-TR",
            localService: !0,
            "default": !0
        }, {
            name: "Ting-Ting",
            voiceURI: "com.apple.ttsbundle.Ting-Ting-compact",
            lang: "zh-CN",
            localService: !0,
            "default": !0
        }, {
            name: "Sin-Ji",
            voiceURI: "com.apple.ttsbundle.Sin-Ji-compact",
            lang: "zh-HK",
            localService: !0,
            "default": !0
        }, {
            name: "Mei-Jia",
            voiceURI: "com.apple.ttsbundle.Mei-Jia-compact",
            lang: "zh-TW",
            localService: !0,
            "default": !0
        }];
        a.systemvoices = null;
        a.CHARACTER_LIMIT = 100;
        a.VOICESUPPORT_ATTEMPTLIMIT = 5;
        a.voicesupport_attempts = 0;
        a.fallbackMode = !1;
        a.WORDS_PER_MINUTE = 130;
        a.fallback_parts = null;
        a.fallback_part_index = 0;
        a.fallback_audio = null;
        a.fallback_playbackrate = 1;
        a.def_fallback_playbackrate = a.fallback_playbackrate;
        a.fallback_audiopool = [];
        a.msgparameters = null;
        a.timeoutId = null;
        a.OnLoad_callbacks = [];
        a.useTimer = !1;
        a.utterances = [];
        a.tstCompiled = function (a) {
            return eval("typeof xy === 'undefined'")
        };
        a.fallbackServicePath = "http://tts.voicetech.yandex.net/" + (a.tstCompiled() ? "" : "develop/") + "tts";
        a.default_rv = a.responsivevoices[0];
        a.debug = !1;
        a.log = function (b) {
            a.debug && console.log(b)
        };
        a.init = function () {
            a.is_android && (a.useTimer = !0);
            a.is_opera || "undefined" === typeof speechSynthesis ? (console.log("RV: Voice synthesis not supported"), a.enableFallbackMode()) : setTimeout(function () {
                var b = setInterval(function () {
                    var c = window.speechSynthesis.getVoices();
                    0 != c.length || null != a.systemvoices && 0 != a.systemvoices.length ? (console.log("RV: Voice support ready"), a.systemVoicesReady(c), clearInterval(b)) : (console.log("Voice support NOT ready"), a.voicesupport_attempts++, a.voicesupport_attempts > a.VOICESUPPORT_ATTEMPTLIMIT && (clearInterval(b), null != window.speechSynthesis ? a.iOS ? (a.iOS9 ? a.systemVoicesReady(a.cache_ios9_voices) : a.systemVoicesReady(a.cache_ios_voices), console.log("RV: Voice support ready (cached)")) : (console.log("RV: speechSynthesis present but no system voices found"), a.enableFallbackMode()) : a.enableFallbackMode()))
                }, 100)
            }, 100);
            a.Dispatch("OnLoad")
        };
        a.systemVoicesReady = function (b) {
            a.systemvoices = b;
            a.mapRVs();
            null != a.OnVoiceReady && a.OnVoiceReady.call();
            a.Dispatch("OnReady");
            window.hasOwnProperty("dispatchEvent") && window.dispatchEvent(new Event("ResponsiveVoice_OnReady"))
        };
        a.enableFallbackMode = function () {
            a.fallbackMode = !0;
            console.log("RV: Enabling fallback mode");
            a.mapRVs();
            null != a.OnVoiceReady && a.OnVoiceReady.call();
            a.Dispatch("OnReady");
            window.hasOwnProperty("dispatchEvent") && window.dispatchEvent(new Event("ResponsiveVoice_OnReady"))
        };
        a.getVoices = function () {
            for (var b = [], c = 0; c < a.responsivevoices.length; c++) b.push({name: a.responsivevoices[c].name});
            return b
        };
        a.speak = function (b, c, e) {
            if (a.iOS9 && !a.iOS9_initialized) a.log("Initializing ios9"), setTimeout(function () {
                a.speak(b, c, e)
            }, 100), a.clickEvent(), a.iOS9_initialized = !0; else {
                a.isPlaying() && (a.log("Cancelling previous speech"), a.cancel());
                a.fallbackMode && 0 < a.fallback_audiopool.length && a.clearFallbackPool();
                b = b.replace(/[\"\`]/gm, "'");
                a.msgparameters = e || {};
                a.msgtext = b;
                a.msgvoicename = c;
                a.onstartFired = !1;
                var h = [];
                if (b.length > a.CHARACTER_LIMIT) {
                    for (var f = b; f.length > a.CHARACTER_LIMIT;) {
                        var g = f.search(/[:!?.;]+/), d = "";
                        if (-1 == g || g >= a.CHARACTER_LIMIT) g = f.search(/[,]+/);
                        -1 == g && -1 == f.search(" ") && (g = 99);
                        if (-1 == g || g >= a.CHARACTER_LIMIT) for (var k = f.split(" "), g = 0; g < k.length && !(d.length + k[g].length + 1 > a.CHARACTER_LIMIT); g++) d += (0 != g ? " " : "") + k[g]; else d = f.substr(0, g + 1);
                        f = f.substr(d.length, f.length - d.length);
                        h.push(d)
                    }
                    0 < f.length && h.push(f)
                } else h.push(b);
                a.multipartText = h;
                g = null == c ? a.default_rv : a.getResponsiveVoice(c);
                !0 === g.deprecated && console.warn("ResponsiveVoice: Voice " + g.name + " is deprecated and will be removed in future releases");
                f = {};
                if (null != g.mappedProfile) f = g.mappedProfile; else if (f.systemvoice = a.getMatchedVoice(g), f.collectionvoice = {}, null == f.systemvoice) {
                    console.log("RV: ERROR: No voice found for: " + c);
                    return
                }
                a.msgprofile = f;
                a.utterances = [];
                for (g = 0; g < h.length; g++) if (a.fallbackMode) {
                    a.fallback_playbackrate = a.def_fallback_playbackrate;
                    var d = a.selectBest([f.collectionvoice.pitch, f.systemvoice.pitch, 1]),
                        k = a.selectBest([a.iOS9 ? 1 : null, f.collectionvoice.rate, f.systemvoice.rate, 1]),
                        l = a.selectBest([f.collectionvoice.volume, f.systemvoice.volume, 1]), m;
                    null != e && (d *= null != e.pitch ? e.pitch : 1, k *= null != e.rate ? e.rate : 1, l *= null != e.volume ? e.volume : 1, m = e.extraParams || null);
                    d /= 2;
                    k /= 2;
                    l *= 2;
                    d = Math.min(Math.max(d, 0), 1);
                    k = Math.min(Math.max(k, 0), 1);
                    l = Math.min(Math.max(l, 0), 1);
                    d = a.fallbackServicePath + "?format=mp3&quality=hi&text=" + encodeURIComponent(h[g]) + "&lang=" + (f.collectionvoice.lang || f.systemvoice.lang || "en-US");
                    m && (d += "&extraParams=" + JSON.stringify(m));
                    k = document.createElement("AUDIO");
                    k.src = d;
                    k.playbackRate = a.fallback_playbackrate;
                    k.preload = "auto";
                    k.load();
                    a.fallback_parts.push(k)
                } else a.log("Using SpeechSynthesis"), d = new SpeechSynthesisUtterance, d.voiceURI = f.systemvoice.voiceURI,
                    d.volume = a.selectBest([f.collectionvoice.volume, f.systemvoice.volume, 1]), d.rate = a.selectBest([a.iOS9 ? 1 : null, f.collectionvoice.rate, f.systemvoice.rate, 1]), d.pitch = a.selectBest([f.collectionvoice.pitch, f.systemvoice.pitch, 1]), d.text = h[g], d.lang = a.selectBest([f.collectionvoice.lang, f.systemvoice.lang]), d.rvIndex = g, d.rvTotal = h.length, 0 == g && (d.onstart = a.speech_onstart), a.msgparameters.onendcalled = !1, null != e ? (d.voice = "undefined" !== typeof e.voice ? e.voice : f.systemvoice, g < h.length - 1 && 1 < h.length ? (d.onend = a.onPartEnd, d.hasOwnProperty("addEventListener") && d.addEventListener("end", a.onPartEnd)) : (d.onend = a.speech_onend, d.hasOwnProperty("addEventListener") && d.addEventListener("end", a.speech_onend)), d.onerror = e.onerror || function (b) {
                    a.log("RV: Unknow Error");
                    a.log(b)
                }, d.onpause = e.onpause, d.onresume = e.onresume, d.onmark = e.onmark, d.onboundary = e.onboundary || a.onboundary, d.pitch = null != e.pitch ? e.pitch : d.pitch, d.rate = a.iOS ? (null != e.rate ? e.rate * e.rate : 1) * d.rate : (null != e.rate ? e.rate : 1) * d.rate, d.volume = null != e.volume ? e.volume : d.volume) : (a.log("No Params received for current Utterance"), d.voice = f.systemvoice, d.onend = a.speech_onend, d.onboundary = a.onboundary, d.onerror = function (b) {
                    a.log("RV: Unknow Error");
                    a.log(b)
                }), a.utterances.push(d), 0 == g && (a.currentMsg = d), console.log(d), a.tts_speak(d);
                a.fallbackMode && (a.fallback_part_index = 0, a.fallback_startPart())
            }
        };
        a.startTimeout = function (b, c) {
            var e = a.msgprofile.collectionvoice.timerSpeed;
            null == a.msgprofile.collectionvoice.timerSpeed && (e = 1);
            0 >= e || (a.timeoutId = setTimeout(c, a.getEstimatedTimeLength(b, e)), a.log("Timeout ID: " + a.timeoutId))
        };
        a.checkAndCancelTimeout = function () {
            null != a.timeoutId && (clearTimeout(a.timeoutId), a.timeoutId = null)
        };
        a.speech_timedout = function () {
            a.cancel();
            a.cancelled = !1;
            a.speech_onend()
        };
        a.speech_onend = function () {
            a.checkAndCancelTimeout();
            !0 === a.cancelled ? a.cancelled = !1 : (a.log("on end fired"), null != a.msgparameters && null != a.msgparameters.onend && 1 != a.msgparameters.onendcalled && (a.log("Speech on end called  -" + a.msgtext), a.msgparameters.onendcalled = !0, a.msgparameters.onend()))
        };
        a.speech_onstart = function () {
            if (!a.onstartFired) {
                a.onstartFired = !0;
                a.log("Speech start");
                if (a.iOS || a.is_safari || a.useTimer) a.fallbackMode || a.startTimeout(a.msgtext, a.speech_timedout);
                a.msgparameters.onendcalled = !1;
                if (null != a.msgparameters && null != a.msgparameters.onstart) a.msgparameters.onstart()
            }
        };
        a.fallback_startPart = function () {
            0 == a.fallback_part_index && a.speech_onstart();
            a.fallback_audio = a.fallback_parts[a.fallback_part_index];
            if (null == a.fallback_audio) a.log("RV: Fallback Audio is not available"); else {
                var b = a.fallback_audio;
                a.fallback_audiopool.push(b);
                setTimeout(function () {
                    b.playbackRate = a.fallback_playbackrate
                }, 50);
                b.onloadedmetadata = function () {
                    b.play();
                    b.playbackRate = a.fallback_playbackrate
                };
                a.fallback_errors && (a.log("RV: Speech cancelled due to errors"), a.speech_onend());
                a.fallback_audio.play();
                a.fallback_audio.addEventListener("ended", a.fallback_finishPart);
                a.useTimer && a.startTimeout(a.multipartText[a.fallback_part_index], a.fallback_finishPart)
            }
        };
        a.isFallbackAudioPlaying = function () {
            var b;
            for (b = 0; b < a.fallback_audiopool.length; b++) if (!a.fallback_audiopool[b].paused) return !0;
            return !1
        };
        a.fallback_finishPart = function (b) {
            a.isFallbackAudioPlaying() ? (a.checkAndCancelTimeout(), a.timeoutId = setTimeout(a.fallback_finishPart, 1e3 * (a.fallback_audio.duration - a.fallback_audio.currentTime))) : (a.checkAndCancelTimeout(), a.fallback_part_index < a.fallback_parts.length - 1 ? (a.fallback_part_index++, a.fallback_startPart()) : a.speech_onend())
        };
        a.cancel = function () {
            a.checkAndCancelTimeout();
            a.fallbackMode ? (null != a.fallback_audio && a.fallback_audio.pause(), a.clearFallbackPool()) : (a.cancelled = !0, speechSynthesis.cancel())
        };
        a.voiceSupport = function () {
            return "speechSynthesis" in window
        };
        a.OnFinishedPlaying = function (b) {
            if (null != a.msgparameters && null != a.msgparameters.onend) a.msgparameters.onend()
        };
        a.setDefaultVoice = function (b) {
            b = a.getResponsiveVoice(b);
            null != b && (a.default_rv = b)
        };
        a.mapRVs = function () {
            for (var b = 0; b < a.responsivevoices.length; b++) for (var c = a.responsivevoices[b], e = 0; e < c.voiceIDs.length; e++) {
                var h = a.voicecollection[c.voiceIDs[e]];
                if (1 != h.fallbackvoice) {
                    var f = a.getSystemVoice(h.name);
                    if (null != f) {
                        c.mappedProfile = {systemvoice: f, collectionvoice: h};
                        break
                    }
                } else {
                    c.mappedProfile = {systemvoice: {}, collectionvoice: h};
                    break
                }
            }
        };
        a.getMatchedVoice = function (b) {
            for (var c = 0; c < b.voiceIDs.length; c++) {
                var e = a.getSystemVoice(a.voicecollection[b.voiceIDs[c]].name);
                if (null != e) return e
            }
            return null
        };
        a.getSystemVoice = function (b) {
            var c = String.fromCharCode(160);
            b = b.replace(new RegExp("\\s+|" + c, "g"), "");
            if ("undefined" === typeof a.systemvoices || null === a.systemvoices) return null;
            for (var e = 0; e < a.systemvoices.length; e++) if (0 === a.systemvoices[e].name.replace(new RegExp("\\s+|" + c, "g"), "").localeCompare(b)) return a.systemvoices[e];
            return null
        };
        a.getResponsiveVoice = function (b) {
            for (var c = 0; c < a.responsivevoices.length; c++) if (a.responsivevoices[c].name == b) return !0 === a.responsivevoices[c].mappedProfile.collectionvoice.fallbackvoice || !0 === a.fallbackMode ? (a.fallbackMode = !0, a.fallback_parts = []) : a.fallbackMode = !1, a.responsivevoices[c];
            return null
        };
        a.Dispatch = function (b) {
            if (a.hasOwnProperty(b + "_callbacks") && null != a[b + "_callbacks"] && 0 < a[b + "_callbacks"].length) {
                for (var c = a[b + "_callbacks"], e = 0; e < c.length; e++) c[e]();
                return !0
            }
            var h = b + "_callbacks_timeout", f = b + "_callbacks_timeoutCount";
            a.hasOwnProperty(h) || (a[f] = 10, a[h] = setInterval(function () {
                --a[f];
                (a.Dispatch(b) || 0 > a[f]) && clearTimeout(a[h])
            }, 50));
            return !1
        };
        a.AddEventListener = function (b, c) {
            a.hasOwnProperty(b + "_callbacks") || (a[b + "_callbacks"] = []);
            a[b + "_callbacks"].push(c)
        };
        a.addEventListener = a.AddEventListener;
        a.clickEvent = function () {
            if (a.iOS && !a.iOS_initialized) {
                a.log("Initializing iOS click event");
                var b = new SpeechSynthesisUtterance(" ");
                speechSynthesis.speak(b);
                a.iOS_initialized = !0
            }
        };
        a.isPlaying = function () {
            return a.fallbackMode ? null != a.fallback_audio && !a.fallback_audio.ended && !a.fallback_audio.paused : speechSynthesis.speaking
        };
        a.clearFallbackPool = function () {
            for (var b = 0; b < a.fallback_audiopool.length; b++) null != a.fallback_audiopool[b] && (a.fallback_audiopool[b].pause(), a.fallback_audiopool[b].src = "");
            a.fallback_audiopool = []
        };
        "complete" === document.readyState ? a.init() : document.addEventListener("DOMContentLoaded", function () {
            a.init()
        });
        a.selectBest = function (a) {
            for (var b = 0; b < a.length; b++) if (null != a[b]) return a[b];
            return null
        };
        a.pause = function () {
            a.fallbackMode ? null != a.fallback_audio && a.fallback_audio.pause() : speechSynthesis.pause()
        };
        a.resume = function () {
            a.fallbackMode ? null != a.fallback_audio && a.fallback_audio.play() : speechSynthesis.resume()
        };
        a.tts_speak = function (b) {
            setTimeout(function () {
                a.cancelled = !1;
                speechSynthesis.speak(b)
            }, .01)
        };
        a.setVolume = function (b) {
            if (a.isPlaying()) if (a.fallbackMode) {
                for (var c = 0; c < a.fallback_parts.length; c++) a.fallback_parts[c].volume = b;
                for (c = 0; c < a.fallback_audiopool.length; c++) a.fallback_audiopool[c].volume = b;
                a.fallback_audio.volume = b
            } else for (c = 0; c < a.utterances.length; c++) a.utterances[c].volume = b
        };
        a.onPartEnd = function (b) {
            if (null != a.msgparameters && null != a.msgparameters.onchuckend) a.msgparameters.onchuckend();
            a.Dispatch("OnPartEnd");
            b = a.utterances.indexOf(b.utterance);
            a.currentMsg = a.utterances[b + 1]
        };
        a.onboundary = function (b) {
            a.log("On Boundary");
            a.iOS && !a.onstartFired && a.speech_onstart()
        };
        a.numToWords = function (b) {
            function c(a) {
                if (Array.isArray(a)) {
                    for (var b = 0, c = Array(a.length); b < a.length; b++) c[b] = a[b];
                    return c
                }
                return Array.from(a)
            }

            var e = function () {
                    return function (a, b) {
                        if (Array.isArray(a)) return a;
                        if (Symbol.iterator in Object(a)) {
                            var c = [], d = !0, e = !1, f = void 0;
                            try {
                                for (var g = a[Symbol.iterator](), h; !(d = (h = g.next()).done) && (c.push(h.value), !b || c.length !== b); d = !0) ;
                            } catch (r) {
                                e = !0, f = r
                            } finally {
                                try {
                                    if (!d && g["return"]) g["return"]()
                                } finally {
                                    if (e) throw f
                                }
                            }
                            return c
                        }
                        throw new TypeError("Invalid attempt to destructure non-iterable instance")
                    }
                }(), h = function (a) {
                    return 0 === a.length
                }, f = function (a) {
                    return function (b) {
                        return b.slice(0, a)
                    }
                }, g = function (a) {
                    return function (b) {
                        return b.slice(a)
                    }
                }, d = function (a) {
                    return a.slice(0).reverse()
                }, k = function (a) {
                    return function (b) {
                        return function (c) {
                            return a(b(c))
                        }
                    }
                }, l = function (a) {
                    return !a
                }, m = function q(a) {
                    return function (b) {
                        return h(b) ? [] : [f(a)(b)].concat(c(q(a)(g(a)(b))))
                    }
                },
                n = " one two three four five six seven eight nine ten eleven twelve thirteen fourteen fifteen sixteen seventeen eighteen nineteen".split(" "),
                p = "  twenty thirty forty fifty sixty seventy eighty ninety".split(" "),
                t = " thousand million billion trillion quadrillion quintillion sextillion septillion octillion nonillion".split(" "),
                u = function (a) {
                    var b = e(a, 3);
                    a = b[0];
                    var c = b[1], b = b[2];
                    return [0 === (Number(b) || 0) ? "" : n[b] + " hundred ", 0 === (Number(a) || 0) ? p[c] : p[c] && p[c] + "-" || "", n[c + a] || n[a]].join("")
                }, v = function (a, b) {
                    return "" === a ? a : a + " " + t[b]
                };
            return "number" === typeof b ? a.numToWords(String(b)) : "0" === b ? "zero" : k(m(3))(d)(Array.from(b)).map(u).map(v).filter(k(l)(h)).reverse().join(" ").trim()
        };
        a.getWords = function (b) {
            for (var c = b.split(/\s+/), e = 0; e < c.length; e++) null != (b = c[e].toString().match(/\d+/)) && (c.splice(e, 1), a.numToWords(+b[0]).split(/\s+/).map(function (a) {
                c.push(a)
            }));
            return c
        };
        a.getEstimatedTimeLength = function (b, c) {
            var e = a.getWords(b), h = 0, f = a.fallbackMode ? 1300 : 700;
            c = c || 1;
            e.map(function (a, b) {
                h += (a.toString().match(/[^ ]/gim) || a).length
            });
            var g = e.length, d = 60 / a.WORDS_PER_MINUTE * c * 1e3 * g;
            5 > g && (d = c * (f + 50 * h));
            a.log("Estimated time length: " + d + " ms, words: [" + e + "], charsCount: " + h);
            return d
        }
    }, responsiveVoice = new ResponsiveVoice;
    var $tpl = '<div id="special"><div class="special-panel"><div class="special-font-size"><span>Шрифт:</span> <button title="Маленький шрифт" value="1"><i>A</i></button> <button title="Средний шрифт" value="2"><i>A</i></button> <button title="Большой шрифт" value="3"><i>A</i></button></div><div class="special-color"><span>Цвет:</span> <button title="Цвет черным по белому" value="1"><i>Ц</i></button> <button title="Цвет белым по черному" value="2"><i>Ц</i></button> <button title="Цвет синим по голубому" value="3" i=""><i>Ц</i></button></div><div class="special-images"><span>Изображения:</span> <button title="Выключить/включить изображения"><i></i></button></div><div class="special-audio"><span>Звук:</span> <button title="Включить/выключить воспроизведение текста" value="0"><i></i></button></div><div class="special-settings"><span>Настройки:</span> <button title="Дополнительные настройки"><i></i></button></div><div class="special-quit"><span>Обычная версия:</span> <button title="Обычная версия сайта"><i></i></button></div></div><div id="special-settings-body"><hr/><h2>Настройки шрифта:</h2><div class="special-font-family"><span>Выберите шрифт:</span> <button value="1"><i>Arial</i></button> <button value="2"><i>Times</i></button></div><div class="special-letter-spacing"><span>Интервал между буквами (<em>Кернинг</em>):</span> <button value="1"><i>Стандартный</i></button> <button value="2"><i>Средний</i></button> <button value="3"><i>Большой</i></button></div><div class="special-line-height"><span>Интервал между строками:</span> <button value="1"><i>Стандартный<br/>интервал</i></button> <button value="2"><i>Полуторный<br/>интервал</i></button> <button value="3"><i>Двойной<br/>интервал</i></button></div><h2>Выбор цветовой схемы:</h2><div class="special-color"><button value="1"><i>Черным<br/>по белому</i></button> <button value="2"><i>Белым<br/>по черному</i></button> <button value="3"><i>Темно-синим<br/>по голубому</i></button> <button value="4"><i>Коричневым<br/>по бежевому</i></button> <button value="5"><i>Зеленым<br/>по темно-коричневому</i></button></div><hr/><div class="special-reset"><button><i>Параметры по умолчанию</i></button></div><div class="special-settings-close"><button><i>Закрыть</i></button></div><div class="avtor"></div></div></div>';
})

