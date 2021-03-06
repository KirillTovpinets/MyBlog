/*
formBuilder - https://formbuilder.online/
Version: 1.15.6
Author: Kevin Chappell <kevin.b.chappell@gmail.com>
*/
"use strict";

function formBuilderHelpersFn(e, t) {
    var a = {
        doCancel: !1
    };
    return t.events = formBuilderEventsFn(), a.attrString = function(e) {
        var t = [];
        for (var s in e) e.hasOwnProperty(s) && (s = a.safeAttr(s, e[s]), t.push(s.name + s.value));
        var l = t.join(" ");
        return l
    }, a.hyphenCase = function(e) {
        return e = e.replace(/([A-Z])/g, function(e) {
            return "-" + e.toLowerCase()
        }), e.replace(/\s/g, "-").replace(/^-+/g, "")
    }, a.camelCase = function(e) {
        return e.replace(/-([a-z])/g, function(e, t) {
            return e = e, t.toUpperCase()
        })
    }, a.makeClassName = function(e) {
        return e = e.replace(/[^\w\s\-]/gi, ""), a.hyphenCase(e)
    }, a.safeAttrName = function(e) {
        var t = {
            className: "class"
        };
        return t[e] || a.hyphenCase(e)
    }, a.safeAttr = function(e, t) {
        e = a.safeAttrName(e);
        var s = window.JSON.stringify(a.escapeAttr(t));
        return t = t ? "=" + s : "", {
            name: e,
            value: t
        }
    }, a.mobileClass = function() {
        var e = "";
        return function(t) {
            (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(t) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0, 4))) && (e = " fb-mobile")
        }(navigator.userAgent || navigator.vendor || window.opera), e
    }, a.startMoving = function(e, t) {
        e = e, t.item.show().addClass("moving"), a.startIndex = $("li", this).index(t.item)
    }, a.stopMoving = function(e, t) {
        e = e, t.item.removeClass("moving"), a.doCancel && ($(t.sender).sortable("cancel"), $(this).sortable("cancel")), a.save(), a.doCancel = !1
    }, a.beforeStop = function(t, s) {
        t = t;
        var l = document.getElementById(e.formID),
            o = l.children.length - 1,
            n = [];
        a.stopIndex = s.placeholder.index() - 1, !e.sortableControls && s.item.parent().hasClass("frmb-control") && n.push(!0), e.prepend && n.push(0 === a.stopIndex), e.append && n.push(a.stopIndex + 1 === o), a.doCancel = n.some(function(e) {
            return e === !0
        })
    }, a.safename = function(e) {
        return e.replace(/\s/g, "-").replace(/[^a-zA-Z0-9\-]/g, "").toLowerCase()
    }, a.forceNumber = function(e) {
        return e.replace(/[^0-9]/g, "")
    }, a.initTooltip = function(e) {
        var t = e.find(".tooltip");
        e.mouseenter(function() {
            t.outerWidth() > 200 && t.addClass("max-width"), t.css("left", e.width() + 14), t.stop(!0, !0).fadeIn("fast")
        }).mouseleave(function() {
            e.find(".tooltip").stop(!0, !0).fadeOut("fast")
        }), t.hide()
    }, a.getTypes = function(e) {
        return {
            type: e.attr("type"),
            subtype: $(".fld-subtype", e).val()
        }
    }, a.trimObj = function(e) {
        var t = [null, void 0, "", !1];
        for (var s in e) a.inArray(e[s], t) && delete e[s];
        return e
    }, a.escapeAttr = function(e) {
        function t(e) {
            return a[e] || e
        }
        var a = {
            '"': "&quot;",
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;"
        };
        return "string" == typeof e ? e.replace(/["&<>]/g, t) : e
    }, a.escapeAttrs = function(e) {
        for (var t in e) e.hasOwnProperty(t) && (e[t] = a.escapeAttr(e[t]));
        return e
    }, a.xmlSave = function(e) {
        var s = $(e).toXML(a);
        return window.JSON.stringify(s) === window.JSON.stringify(t.formData) ? !1 : void(t.formData = s)
    }, a.jsonSave = function() {
        e.notify.warning("json data not available yet")
    }, a.save = function() {
        var s, l = a.getElement(),
            o = document.getElementById(e.formID),
            n = {
                xml: a.xmlSave,
                json: a.jsonSave
            };
        return s = n[e.dataType](o), l && (l.value = t.formData, window.jQuery ? $(l).trigger("change") : l.onchange()), document.dispatchEvent(t.events.formSaved), s
    }, a.getElement = function() {
        var s = !1;
        return t.element && (s = t.element, s.id || a.makeId(s), s.onchange || (s.onchange = function() {
            e.notify.success(e.messages.formUpdated)
        })), s
    }, a.incrementId = function(e) {
        var t = e.lastIndexOf("-"),
            a = parseInt(e.substring(t + 1)) + 1,
            s = e.substring(0, t);
        return s + "-" + a
    }, a.makeId = function() {
        var e = arguments.length <= 0 || void 0 === arguments[0] ? !1 : arguments[0],
            t = (new Date).getTime();
        return e.tagName + "-" + t
    }, a.updatePreview = function(e) {
        var t = e.attr("class");
        if (-1 === t.indexOf("ui-sortable-handle")) {
            var s, l = $(e).attr("type"),
                o = $(".prev-holder", e),
                n = {
                    type: l
                };
            $('[class*="fld-"]', e).each(function() {
                var e = a.camelCase(this.name);
                n[e] = "checkbox" === this.type ? this.checked : this.value
            });
            var r = $(".btn-style", e).val();
            r && (n.style = r), l.match(/(select|checkbox-group|radio-group)/) && (n.values = [], n.multiple = $('[name="multiple"]', e).is(":checked"), $(".sortable-options li", e).each(function() {
                var e = {};
                e.selected = $(".option-selected", this).is(":checked"), e.value = $(".option-value", this).val(), e.label = $(".option-label", this).val(), n.values.push(e)
            })), n = a.trimObj(n), n.className = a.classNames(e, n), $(".fld-className", e).val(n.className), e.data("fieldData", n), s = a.fieldPreview(n), o.html(s), $("input[toggle]", o).kcToggle()
        }
    }, a.fieldPreview = function(t) {
        var s, l = "",
            o = (new Date).getTime();
        t = jQuery.extend({}, t), t.type = t.subtype || t.type;
        var n = t.toggle ? "toggle" : "",
            r = a.attrString(t);
        switch (t.type) {
            case "textarea":
            case "rich-text":
                var i = t.value || "";
                l = "<textarea " + r + ">" + i + "</textarea>";
                break;
            case "button":
            case "submit":
                l = "<button " + r + ">" + t.label + "</button>";
                break;
            case "select":
                var c = "",
                    d = t.multiple ? "multiple" : "";
                for (t.values.reverse(), t.placeholder && (c += "<option disabled selected>" + t.placeholder + "</option>"), s = t.values.length - 1; s >= 0; s--) {
                    var p = t.values[s].selected && !t.placeholder ? "selected" : "";
                    c += '<option value="' + t.values[s].value + '" ' + p + ">" + t.values[s].label + "</option>"
                }
                l = "<" + t.type + ' class="' + t.className + '" ' + d + ">" + c + "</" + t.type + ">";
                break;
            case "checkbox-group":
            case "radio-group":
                var u = t.type.replace("-group", ""),
                    m = u + "-" + o;
                for (t.values.reverse(), s = t.values.length - 1; s >= 0; s--) {
                    var f = t.values[s].selected ? "checked" : "",
                        v = u + "-" + o + "-" + s;
                    l += '<div><input type="' + u + '" class="' + t.className + '" name="' + m + '" id="' + v + '" value="' + t.values[s].value + '" ' + f + '/><label for="' + v + '">' + t.values[s].label + "</label></div>"
                }
                if (t.enableOther) {
                    var h = m + "-other",
                        g = {
                            id: h,
                            name: m,
                            className: t.className + " other-option",
                            type: u,
                            onclick: "otherOptionCallback('" + h + "')"
                        },
                        b = a.markup("input", null, g);
                    window.otherOptionCallback = function(e) {
                        var t = document.getElementById(e),
                            a = t.nextElementSibling,
                            s = a.nextElementSibling;
                        t.checked ? (s.style.display = "inline-block", a.style.display = "none") : (s.style.display = "none", a.style.display = "inline-block")
                    }, l += "<div>" + b.outerHTML + '<label for="' + h + '">' + e.messages.other + '</label> <input type="text" id="' + h + '-value" style="display:none;" /></div>'
                }
                break;
            case "text":
            case "password":
            case "email":
            case "date":
            case "file":
            case "number":
                l = "<input " + r + ">";
                break;
            case "color":
                l = '<input type="' + t.type + '" class="' + t.className + '"> ' + e.messages.selectColor;
                break;
            case "hidden":
            case "checkbox":
                l = '<input type="' + t.type + '" ' + n + " >";
                break;
            case "autocomplete":
                l = '<input class="ui-autocomplete-input ' + t.className + '" autocomplete="on">';
                break;
            default:
                r = a.attrString(t), l = "<" + t.type + " " + r + ">" + t.label + "</" + t.type + ">"
        }
        return l
    }, a.updateMultipleSelect = function() {
        $(document.getElementById(e.formID)).on("change", 'input[name="multiple"]', function() {
            var e = $(this).parents(".field-options:eq(0)").find(".sortable-options input.option-selected");
            this.checked ? e.each(function() {
                $(this).prop("type", "checkbox")
            }) : e.each(function() {
                $(this).removeAttr("checked").prop("type", "radio")
            })
        })
    }, a.debounce = function(e) {
        var t, a = arguments.length <= 1 || void 0 === arguments[1] ? 250 : arguments[1],
            s = arguments.length <= 2 || void 0 === arguments[2] ? !1 : arguments[2];
        return function() {
            var l = this,
                o = arguments,
                n = function() {
                    t = null, s || e.apply(l, o)
                },
                r = s && !t;
            clearTimeout(t), t = setTimeout(n, a), r && e.apply(l, o)
        }
    }, a.htmlEncode = function(e) {
        return $("<div/>").text(e).html()
    }, a.htmlDecode = function(e) {
        return $("<div/>").html(e).text()
    }, a.validateForm = function() {
        var t = $(document.getElementById(e.formID)),
            a = [];
        $('input[name="label"], input[type="text"].option', t).each(function() {
            if ("" === $(this).val()) {
                var t = $(this).parents("li.form-field"),
                    s = $(this);
                a.push({
                    field: t,
                    error: e.messages.labelEmpty,
                    attribute: s
                })
            }
        }), a.length && (alert("Error: " + a[0].error), $("html, body").animate({
            scrollTop: a[0].field.offset().top
        }, 1e3, function() {
            var e = $(".toggle-form", a[0].field).attr("id");
            $(".toggle-form", a[0].field).addClass("open").parent().next(".prev-holder").slideUp(250), $("#" + e + "-fld").slideDown(250, function() {
                a[0].attribute.addClass("error")
            })
        }))
    }, a.disabledTT = {
        className: "frmb-tt",
        add: function(t) {
            var s = e.messages.fieldNonEditable;
            if (s) {
                var l = a.markup("p", s, {
                    className: a.disabledTT.className
                });
                t.append(l)
            }
        },
        remove: function(e) {
            $(".frmb-tt", e).remove()
        }
    }, a.classNames = function(t, s) {
        var l = ["checkbox", "checkbox-group", "radio-group"],
            o = ["header", "paragraph", "button"],
            n = void 0;
        for (n = o.length - 1; n >= 0; n--) o = o.concat(e.messages.subtypes[o[n]]);
        l = l.concat(o);
        var r = s.type,
            i = s.style,
            c = t[0].querySelector(".fld-className").value,
            d = [].concat(c.split(" ")).reverse(),
            p = {
                button: "btn",
                submit: "btn"
            },
            u = p[r];
        if (u) {
            if (i) {
                for (n = d.length - 1; n >= 0; n--) {
                    var m = new RegExp("(?:^|s)" + u + "-(.*?)(?:s|$)+", "g"),
                        f = d[n].match(m);
                    f && d.splice(n, 1)
                }
                d.push(u + "-" + i)
            }
            d.push(u)
        } else a.inArray(r, l) || d.push("frm-control");
        return a.unique(d.reverse()).join(" ").trim()
    }, a.markup = function(e) {
        var t = arguments.length <= 1 || void 0 === arguments[1] ? "" : arguments[1],
            s = arguments.length <= 2 || void 0 === arguments[2] ? {} : arguments[2],
            l = void 0,
            o = document.createElement(e),
            n = function(e) {
                return Array.isArray(e) ? "array" : "undefined" == typeof e ? "undefined" : _typeof(e)
            },
            r = {
                string: function(e) {
                    o.innerHTML = e
                },
                object: function(e) {
                    return o.appendChild(e)
                },
                array: function(e) {
                    for (var t = 0; t < e.length; t++) l = n(e[t]), r[l](e[t])
                }
            };
        for (var i in s)
            if (s.hasOwnProperty(i) && s[i]) {
                var c = a.safeAttrName(i);
                o.setAttribute(c, s[i])
            }
        return l = n(t), t && r[l].call(this, t), o
    }, a.closeConfirm = function(e, a) {
        e = e || document.getElementsByClassName("form-builder-overlay")[0], a = a || document.getElementsByClassName("form-builder-dialog")[0], e.classList.remove("visible"), a.remove(), e.remove(), document.dispatchEvent(t.events.modalClosed)
    }, a.editorLayout = function(e) {
        var t = {
            left: {
                stage: "pull-right",
                controls: "pull-left"
            },
            right: {
                stage: "pull-left",
                controls: "pull-right"
            }
        };
        return t[e] ? t[e] : ""
    }, a.showOverlay = function() {
        var e = a.markup("div", null, {
            className: "form-builder-overlay"
        });
        return document.body.appendChild(e), e.classList.add("visible"), e.onclick = function() {
            a.closeConfirm(e)
        }, e
    }, a.confirm = function(t, s) {
        var l = arguments.length <= 2 || void 0 === arguments[2] ? !1 : arguments[2],
            o = arguments.length <= 3 || void 0 === arguments[3] ? "" : arguments[3],
            n = a.showOverlay(),
            r = a.markup("button", e.messages.yes, {
                className: "yes btn btn-success btn-sm"
            }),
            i = a.markup("button", e.messages.no, {
                className: "no btn btn-danger btn-sm"
            });
        i.onclick = function() {
            a.closeConfirm(n)
        }, r.onclick = function() {
            s(), a.closeConfirm(n)
        };
        var c = a.markup("div", [i, r], {
            className: "button-wrap"
        });
        o = "form-builder-dialog " + o;
        var d = a.markup("div", [t, c], {
            className: o
        });
        return l ? d.classList.add("positioned") : (l = {
            pageX: Math.max(document.documentElement.clientWidth, window.innerWidth || 0) / 2,
            pageY: Math.max(document.documentElement.clientHeight, window.innerHeight || 0) / 2
        }, d.style.position = "fixed"), d.style.left = l.pageX + "px", d.style.top = l.pageY + "px", document.body.appendChild(d), r.focus(), d
    }, a.dialog = function(e) {
        var s = arguments.length <= 1 || void 0 === arguments[1] ? !1 : arguments[1],
            l = arguments.length <= 2 || void 0 === arguments[2] ? "" : arguments[2];
        a.showOverlay(), l = "form-builder-dialog " + l;
        var o = a.markup("div", e, {
            className: l
        });
        return s ? o.classList.add("positioned") : (s = {
            pageX: Math.max(document.documentElement.clientWidth, window.innerWidth || 0) / 2,
            pageY: Math.max(document.documentElement.clientHeight, window.innerHeight || 0) / 2
        }, o.style.position = "fixed"), o.style.left = s.pageX + "px", o.style.top = s.pageY + "px", document.body.appendChild(o), -1 !== l.indexOf("data-dialog") && document.dispatchEvent(t.events.viewData), o
    }, a.removeAllfields = function() {
        var t = document.getElementById(e.formID),
            s = t.querySelectorAll("li.form-field"),
            l = $(s),
            o = [];
        e.prepend && o.push(!0), e.append && o.push(!0), o.some(function(e) {
            return e === !0
        }) || t.parentElement.classList.add("empty"), t.classList.add("removing");
        var n = 0;
        l.each(function() {
            n += $(this).outerHeight() + 3
        }), s[0].style.marginTop = -n + "px", setTimeout(function() {
            l.remove(), document.getElementById(e.formID).classList.remove("removing"), a.save()
        }, 500)
    }, a.setFieldOrder = function(t) {
        if (!e.sortableControls) return !1;
        var a = {};
        t.children().each(function(e, t) {
            a[e] = $(t).data("attrs").type
        }), window.sessionStorage && window.sessionStorage.setItem("fieldOrder", window.JSON.stringify(a))
    }, a.orderFields = function(t) {
        var s = !1;
        window.sessionStorage && (e.sortableControls ? s = window.sessionStorage.getItem("fieldOrder") : window.sessionStorage.removeItem("fieldOrder")), s ? (s = window.JSON.parse(s), s = Object.keys(s).map(function(e) {
            return s[e]
        })) : s = a.unique(e.controlOrder);
        for (var l = [], o = s.length - 1; o >= 0; o--) {
            var n = t.filter(function(e) {
                return e.attrs.type === s[o]
            })[0];
            l.push(n)
        }
        return l.filter(Boolean)
    }, a.forEach = function(e, t, a) {
        for (var s = 0; s < e.length; s++) t.call(a, s, e[s])
    }, a.inArray = function(e, t) {
        return -1 !== t.indexOf(e)
    }, a.unique = function(e) {
        return e.filter(function(e, t, a) {
            return a.indexOf(e) === t
        })
    }, a.closeAllEdit = function(e) {
        var t = $("> li.editing", e),
            a = $(".toggle-form", e),
            s = $(".frm-holder", t);
        a.removeClass("open"), t.removeClass("editing"), s.hide(), $(".prev-holder", t).show()
    }, a.toggleEdit = function(e) {
        var t = document.getElementById(e),
            a = $(".toggle-form", t),
            s = $(".frm-holder", t);
        t.classList.toggle("editing"), a.toggleClass("open"), $(".prev-holder", t).slideToggle(250), s.slideToggle(250)
    }, a.stickyControls = function(e, t) {
        var a = $(t).parent(),
            s = e.parent(),
            l = a.width(),
            o = t.getBoundingClientRect();
        $(window).scroll(function() {
            var e = $(this).scrollTop();
            if (e > s.offset().top) {
                var n = {
                        position: "fixed",
                        width: l,
                        top: 0,
                        bottom: "auto",
                        right: "auto",
                        left: o.left
                    },
                    r = a.offset(),
                    i = s.offset(),
                    c = r.top + a.height(),
                    d = i.top + s.height();
                c > d && r.top !== i.top && a.css({
                    position: "absolute",
                    top: "auto",
                    bottom: 0,
                    right: 0,
                    left: "auto"
                }), (d > c || c === d && r.top > e) && a.css(n)
            } else t.parentElement.removeAttribute("style")
        })
    }, a
}

function formBuilderEventsFn() {
    var e = {};
    return e.loaded = new Event("loaded"), e.viewData = new Event("viewData"), e.userDeclined = new Event("userDeclined"), e.modalClosed = new Event("modalClosed"), e.formSaved = new Event("formSaved"), e
}
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
    return typeof e
} : function(e) {
    return e && "function" == typeof Symbol && e.constructor === Symbol ? "symbol" : typeof e
};
! function(e) {
    var t = function(t, a) {
        var s = {
                theme: "fresh",
                labels: {
                    off: "Off",
                    on: "On"
                }
            },
            l = e.extend(s, a),
            o = e('<div class="kc-toggle"/>').insertAfter(t).append(t);
        o.toggleClass("on", t.is(":checked"));
        var n = '<div class="kct-on">' + l.labels.on + "</div>",
            r = '<div class="kct-off">' + l.labels.off + "</div>",
            i = '<div class="kct-handle"></div>',
            c = '<div class="kct-inner">' + n + i + r + "</div>";
        o.append(c), o.click(function() {
            t.attr("checked", !t.attr("checked")), e(this).toggleClass("on")
        })
    };
    e.fn.kcToggle = function(a) {
        var s = this;
        return s.each(function() {
            var s = e(this);
            if (!s.data("kcToggle")) {
                var l = new t(s, a);
                s.data("kcToggle", l)
            }
        })
    }
}(jQuery),
function(e) {
    var t = function(t, a) {
        var s = this,
            l = {
                controlPosition: "right",
                controlOrder: ["autocomplete", "button", "checkbox", "checkbox-group", "date", "file", "header", "hidden", "paragraph", "number", "radio-group", "select", "text", "textarea"],
                dataType: "xml",
                disableFields: [],
                editOnAdd: !1,
                append: !1,
                prepend: !1,
                defaultFields: [],
                fieldRemoveWarn: !1,
                roles: {
                    1: "Administrator"
                },
                messages: {
                    addOption: "Add Option",
                    allFieldsRemoved: "All fields were removed.",
                    allowSelect: "Allow Select",
                    allowMultipleFiles: "Allow users to upload multiple files",
                    autocomplete: "Autocomplete",
                    button: "Button",
                    cannotBeEmpty: "This field cannot be empty",
                    checkboxGroup: "Checkbox Group",
                    checkbox: "Checkbox",
                    checkboxes: "Checkboxes",
                    className: "Class",
                    clearAllMessage: "Are you sure you want to clear all fields?",
                    clearAll: "Clear",
                    close: "Close",
                    content: "Content",
                    copy: "Copy To Clipboard",
                    dateField: "Date Field",
                    description: "Help Text",
                    descriptionField: "Description",
                    devMode: "Developer Mode",
                    editNames: "Edit Names",
                    editorTitle: "Form Elements",
                    editXML: "Edit XML",
                    enableOther: "Enable &quot;Other&quot;",
                    enableOtherMsg: "Let users to enter an unlisted option",
                    fieldDeleteWarning: !1,
                    fieldVars: "Field Variables",
                    fieldNonEditable: "This field cannot be edited.",
                    fieldRemoveWarning: "Are you sure you want to remove this field?",
                    fileUpload: "File Upload",
                    formUpdated: "Form Updated",
                    getStarted: "Drag a field from the right to this area",
                    header: "Header",
                    hide: "Edit",
                    hidden: "Hidden Input",
                    label: "Label",
                    labelEmpty: "Field Label cannot be empty",
                    limitRole: "Limit access to one or more of the following roles:",
                    mandatory: "Mandatory",
                    maxlength: "Max Length",
                    minOptionMessage: "This field requires a minimum of 2 options",
                    multipleFiles: "Multiple Files",
                    name: "Name",
                    no: "No",
                    number: "Number",
                    off: "Off",
                    on: "On",
                    option: "Option",
                    optional: "optional",
                    optionLabelPlaceholder: "Label",
                    optionValuePlaceholder: "Value",
                    optionEmpty: "Option value required",
                    other: "Other",
                    paragraph: "Paragraph",
                    placeholder: "Placeholder",
                    placeholders: {
                        value: "Value",
                        label: "Label",
                        text: "",
                        textarea: "",
                        email: "Enter you email",
                        placeholder: "",
                        className: "space separated classes",
                        password: "Enter your password"
                    },
                    preview: "Preview",
                    radioGroup: "Radio Group",
                    radio: "Radio",
                    removeMessage: "Remove Element",
                    remove: "&#215;",
                    required: "Required",
                    richText: "Rich Text Editor",
                    roles: "Access",
                    save: "Save",
                    selectOptions: "Options",
                    select: "Select",
                    selectColor: "Select Color",
                    selectionsMessage: "Allow Multiple Selections",
                    size: "Size",
                    sizes: {
                        xs: "Extra Small",
                        sm: "Small",
                        m: "Default",
                        lg: "Large"
                    },
                    style: "Style",
                    styles: {
                        btn: {
                            "default": "Default",
                            danger: "Danger",
                            info: "Info",
                            primary: "Primary",
                            success: "Success",
                            warning: "Warning"
                        }
                    },
                    subtype: "Type",
                    subtypes: {
                        text: ["text", "password", "email", "color"],
                        button: ["button", "submit"],
                        header: ["h1", "h2", "h3"],
                        paragraph: ["p", "address", "blockquote", "canvas", "output"]
                    },
                    text: "Text Field",
                    textArea: "Text Area",
                    toggle: "Toggle",
                    warning: "Warning!",
                    value: "Value",
                    viewXML: "&lt;/&gt;",
                    yes: "Yes"
                },
                notify: {
                    error: function(e) {
                        return console.error(e)
                    },
                    success: function(e) {
                        return console.log(e)
                    },
                    warning: function(e) {
                        return console.warn(e)
                    }
                },
                sortableControls: !1,
                stickyControls: !1,
                prefix: "form-builder-"
            };
        l.messages.subtypes.password = l.messages.subtypes.text, l.messages.subtypes.email = l.messages.subtypes.text, l.messages.subtypes.color = l.messages.subtypes.text, l.messages.subtypes.submit = l.messages.subtypes.button;
        var o = e.extend(!0, l, t),
            n = e(a),
            r = "frmb-" + e("ul[id^=frmb-]").length++;
        o.formID = r, s.element = a;
        var i = e("<ul/>").attr("id", r).addClass("frmb"),
            c = formBuilderHelpersFn(o, s);
        s.layout = c.editorLayout(o.controlPosition);
        var d = r + "-fld-1",
            p = r + "-control-box",
            u = [{
                label: o.messages.textArea,
                attrs: {
                    type: "textarea",
                    className: "text-area",
                    name: "textarea"
                }
            }, {
                label: o.messages.text,
                attrs: {
                    type: "text",
                    className: "text-input",
                    name: "text-input"
                }
            }, {
                label: o.messages.select,
                attrs: {
                    type: "select",
                    className: "select",
                    name: "select"
                }
            }, {
                label: o.messages.radioGroup,
                attrs: {
                    type: "radio-group",
                    className: "radio-group",
                    name: "radio-group"
                }
            }, {
                label: o.messages.paragraph,
                attrs: {
                    type: "paragraph",
                    className: "paragraph"
                }
            }, {
                label: o.messages.number,
                attrs: {
                    type: "number",
                    className: "numbers",
                    name: "number"
                }
            }, {
                label: o.messages.hidden,
                attrs: {
                    type: "hidden",
                    className: "hidden-input",
                    name: "hidden-input"
                }
            }, {
                label: o.messages.header,
                attrs: {
                    type: "header",
                    className: "header"
                }
            }, {
                label: o.messages.fileUpload,
                attrs: {
                    type: "file",
                    className: "file-input",
                    name: "file-input"
                }
            }, {
                label: o.messages.dateField,
                attrs: {
                    type: "date",
                    className: "calendar",
                    name: "date-input"
                }
            }, {
                label: o.messages.checkboxGroup,
                attrs: {
                    type: "checkbox-group",
                    className: "checkbox-group",
                    name: "checkbox-group"
                }
            }, {
                label: o.messages.checkbox,
                attrs: {
                    type: "checkbox",
                    className: "checkbox",
                    name: "checkbox"
                }
            }, {
                label: o.messages.button,
                attrs: {
                    type: "button",
                    className: "button-input",
                    name: "button"
                }
            }, {
                label: o.messages.autocomplete,
                attrs: {
                    type: "autocomplete",
                    className: "autocomplete icon-text-input",
                    name: "autocomplete"
                }
            }];
        u = c.orderFields(u), o.disableFields && (u = u.filter(function(e) {
            return !c.inArray(e.attrs.type, o.disableFields)
        }));
        var m = c.markup("ul", null, {
            id: p,
            className: "frmb-control"
        });
        o.sortableControls && m.classList.add("sort-enabled");
        for (var f = e(m), v = u.length - 1; v >= 0; v--) {
            var h = e("<li/>", {
                "class": "icon-" + u[v].attrs.className,
                type: u[v].type,
                name: u[v].className,
                label: u[v].label
            });
            h.data("newFieldData", u[v]);
            var g = c.markup("span", u[v].label);
            h.html(g).appendTo(f)
        }
        var b = "xml" === o.dataType ? o.messages.viewXML : o.messages.viewJSON,
            y = c.markup("button", b, {
                id: r + "-view-data",
                type: "button",
                className: "view-data btn btn-default"
            }),
            k = c.markup("button", o.messages.clearAll, {
                id: r + "-clear-all",
                type: "button",
                className: "clear-all btn btn-default"
            }),
            w = c.markup("button", o.messages.save, {
                className: "btn btn-primary " + o.prefix + "save",
                id: r + "-save",
                type: "button"
            }),
            x = c.markup("div", [k, y], {
                className: "form-actions btn-group"
            }).outerHTML;
        i.sortable({
            cursor: "move",
            opacity: .9,
            revert: 150,
            beforeStop: c.beforeStop,
            start: c.startMoving,
            stop: c.stopMoving,
            cancel: "input, select, .disabled, .form-group, .btn",
            placeholder: "frmb-placeholder"
        }), f.sortable({
            helper: "clone",
            opacity: .9,
            connectWith: i,
            cursor: "move",
            scroll: !1,
            placeholder: "ui-state-highlight",
            start: c.startMoving,
            stop: c.stopMoving,
            revert: 150,
            beforeStop: c.beforeStop,
            distance: 3,
            update: function(e, t) {
                return c.doCancel ? !1 : (e = e, void(t.item.parent()[0] === i[0] ? (A(t.item, !0), c.doCancel = !0) : (c.setFieldOrder(f), c.doCancel = !o.sortableControls)))
            }
        });
        var C = e("<div/>", {
                id: r + "-stage-wrap",
                "class": "stage-wrap " + s.layout.stage
            }),
            N = e("<div/>", {
                id: r + "-form-wrap",
                "class": "form-wrap form-builder" + c.mobileClass()
            });
        n.before(C).appendTo(C);
        var E = e("<div/>", {
            id: r + "-cb-wrap",
            "class": "cb-wrap " + s.layout.controls
        }).append(f[0], x);
        C.append(i, E), C.before(N), N.append(C, E);
        var O = c.debounce(function(t) {
            if (t && "keyup" === t.type && "className" === this.name) return !1;
            var a = e(this).parents(".form-field:eq(0)");
            c.updatePreview(a), c.save()
        });
        i.on("change blur keyup", ".form-elements input, .form-elements select, .form-elements textarea", O), e("li", f).click(function() {
            c.stopIndex = void 0, A(e(this), !0), c.save()
        });
        var T = function() {
                var t = [];
                if (o.prepend && !e(".disabled.prepend", i).length) {
                    var a = c.markup("li", o.prepend, {
                        className: "disabled prepend"
                    });
                    t.push(!0), i.prepend(a)
                }
                if (o.append && !e(".disabled.append", i).length) {
                    var s = c.markup("li", o.append, {
                        className: "disabled append"
                    });
                    t.push(!0), i.append(s)
                }
                t.some(function(e) {
                    return e === !0
                }) && C.removeClass("empty")
            },
            A = function(t) {
                var a = arguments.length <= 1 || void 0 === arguments[1] ? !1 : arguments[1],
                    s = {};
                if (t instanceof jQuery) {
                    var l = t.data("newFieldData");
                    if (l) s = l.attrs, s.label = l.label;
                    else {
                        var o = t[0].attributes;
                        a || (s.values = t.children().map(function(t, a) {
                            return t = t, {
                                label: e(a).text(),
                                value: e(a).attr("value"),
                                selected: Boolean(e(a).attr("selected"))
                            }
                        }));
                        for (var n = o.length - 1; n >= 0; n--) s[o[n].name] = o[n].value
                    }
                } else s = t;
                s.name = a ? $(s) : s.name, s.className = s.className || s["class"];
                var r = /(?:^|\s)btn-(.*?)(?:\s|$)/g.exec(s.className);
                r && (s.style = r[1]), c.escapeAttrs(s), P(s), C.removeClass("empty")
            },
            S = function() {
                var t = "";
                t = s.formData ? s.formData : "" !== n.val() ? e.parseXML(s.element.value.trim()) : !1;
                var a = e(t).find("field");
                if (a.length > 0) s.formData = t, a.each(function() {
                    A(e(this))
                });
                else if (!t)
                    if (o.defaultFields && o.defaultFields.length) {
                        o.defaultFields.reverse();
                        for (var l = o.defaultFields.length - 1; l >= 0; l--) A(o.defaultFields[l]);
                        C.removeClass("empty"), c.save()
                    } else o.prepend || o.append || C.addClass("empty").attr("data-content", o.messages.getStarted);
                e("li.form-field:not(.disabled)", i).each(function() {
                    c.updatePreview(e(this))
                }), T()
            },
            M = function() {
                var e = {
                    xml: S,
                    json: function() {
                        console.log("coming soon")
                    }
                };
                e[o.dataType]()
            };
        i.on("mousemove", "li.disabled", function(t) {
            e(".frmb-tt", this).css({
                left: t.offsetX - 16,
                top: t.offsetY - 34
            })
        }), i.on("mouseenter", "li.disabled", function() {
            c.disabledTT.add(e(this))
        }), i.on("mouseleave", "li.disabled", function() {
            c.disabledTT.remove(e(this))
        });
        var $ = function(e) {
                var t = (new Date).getTime();
                return e.type + "-" + t
            },
            D = function W(e) {
                var t = c.markup("a", o.messages.addOption, {
                        className: "add add-opt"
                    }),
                    W = "";
                if (e.values && e.values.length || (e.values = [{
                        selected: !0
                    }, {
                        selected: !1
                    }], e.values = e.values.map(function(e, t) {
                        return e.label = o.messages.option + " " + (t + 1), e.value = c.hyphenCase(e.label), e
                    })), W += '<label class="false-label">' + o.messages.selectOptions + "</label>", W += '<div class="sortable-options-wrap">', "select" === e.type) {
                    var a = {
                        second: o.messages.selectionsMessage
                    };
                    W += F("multiple", e, a)
                }
                for (W += '<ol class="sortable-options">', v = 0; v < e.values.length; v++) W += R(e.name, e.values[v], e.multiple);
                return W += "</ol>", W += c.markup("div", t, {
                    className: "option-actions"
                }).outerHTML, W += "</div>", c.markup("div", W, {
                    className: "form-group field-options"
                }).outerHTML
            },
            L = function U(e) {
                var t, U = [],
                    a = "",
                    s = ["select", "checkbox-group", "radio-group"],
                    l = function() {
                        return -1 !== s.indexOf(e.type)
                    }(),
                    n = function() {
                        var t = ["header", "paragraph", "file"].concat(s, o.messages.subtypes.header, o.messages.subtypes.paragraph);
                        return -1 === t.indexOf(e.type)
                    }(),
                    r = void 0 !== e.role ? e.role.split(",") : [];
                U.push(H(e)), "checkbox" === e.type && U.push(F("toggle", e, {
                    first: o.messages.toggle
                })), U.push(j("label", e)), e.size = e.size || "m", e.style = e.style || "default";
                var i = ["header", "paragraph", "button"].concat(o.messages.subtypes.header, o.messages.subtypes.paragraph);
                if (i = i.concat(o.messages.subtypes.header, o.messages.subtypes.paragraph), -1 === i.indexOf(e.type) && U.push(j("description", e)), U.push(I(e)), "button" === e.type && U.push(q(e.style, e.type)), "number" === e.type && (U.push(B("min", e)), U.push(B("max", e)), U.push(B("step", e))), U.push(j("placeholder", e)), U.push(j("className", e)), U.push(j("name", e)), n && U.push(j("value", e)), "file" === e.type) {
                    var p = {
                        first: o.messages.multipleFiles,
                        second: o.messages.allowMultipleFiles
                    };
                    U.push(F("multiple", e, p))
                }
                U.push('<div class="form-group access-wrap"><label>' + o.messages.roles + "</label>"), U.push('<input type="checkbox" class="fld-enable-roles" name="enable-roles" value="" ' + (void 0 !== e.role ? "checked" : "") + ' id="enable-roles-' + d + '"/> <label for="enable-roles-' + d + '" class="roles-label">' + o.messages.limitRole + "</label>"), U.push('<div class="available-roles" ' + (void 0 !== e.role ? 'style="display:block"' : "") + ">");
                for (t in o.roles) o.roles.hasOwnProperty(t) && (a = c.inArray(t, r) ? "checked" : "", U.push('<input type="checkbox" name="roles[]" value="' + t + '" id="fld-' + d + "-roles-" + t + '" ' + a + ' class="roles-field" /><label for="fld-' + d + "-roles-" + t + '">' + o.roles[t] + "</label><br/>"));
                return U.push("</div></div>"), "checkbox-group" !== e.type && "radio-group" !== e.type || (U.push('<div class="form-group other-wrap"><label>' + o.messages.enableOther + "</label>"), U.push('<input type="checkbox" class="fld-enable-other" name="enable-other" value="" ' + (void 0 !== e.other ? "checked" : "") + ' id="enable-other-' + d + '"/> <label for="enable-other-' + d + '" class="other-label">' + o.messages.enableOtherMsg + "</label></div>")), l && U.push(D(e)), U.push(j("maxlength", e)), U.join("")
            },
            F = function(e, t, a) {
                var s = function(t) {
                        return '<label for="' + e + "-" + d + '">' + t + "</label>"
                    },
                    l = void 0 !== t[e] ? "checked" : "",
                    o = '<input type="checkbox" class="fld-' + e + '" name="' + e + '" value="true" ' + l + ' id="' + e + "-" + d + '"/>',
                    n = [o];
                return a.first && n.unshift(s(a.first)), a.second && n.push(s(a.second)), '<div class="form-group ' + e + '-wrap">' + n.join("") + "</div>"
            },
            I = function Y(e) {
                var t = o.messages.subtypes,
                    a = e.type,
                    s = e.subtype || "",
                    Y = "",
                    l = void 0;
                if (t[a]) {
                    var n = "<label>" + o.messages.subtype + "</label>";
                    Y += '<select name="subtype" class="fld-subtype frm-control" id="subtype-' + d + '">', t[a].forEach(function(e) {
                        l = s === e ? "selected" : "", Y += '<option value="' + e + '" ' + l + ">" + e + "</option>"
                    }), Y += "</select>", Y = '<div class="form-group subtype-wrap">' + n + " " + Y + "</div>"
                }
                return Y
            },
            q = function(e, t) {
                var a = {
                        button: "btn"
                    },
                    s = o.messages.styles[a[t]],
                    l = "";
                if (s) {
                    var n = "<label>" + o.messages.style + "</label>";
                    l += '<input value="' + e + '" name="style" type="hidden" class="btn-style">', l += '<div class="btn-group" role="group">', Object.keys(o.messages.styles[a[t]]).forEach(function(s) {
                        var n = e === s ? "active" : "";
                        l += '<button value="' + s + '" type="' + t + '" class="' + n + " btn-xs " + a[t] + " " + a[t] + "-" + s + '">' + o.messages.styles[a[t]][s] + "</button>"
                    }), l += "</div>", l = '<div class="form-group style-wrap">' + n + " " + l + "</div>"
                }
                return l
            },
            B = function _(e, t) {
                var a = t[e] || "",
                    s = o.messages[e] || e,
                    l = o.messages.placeholders[e] || "",
                    _ = '<input type="number" value="' + a + '" name="' + e + '" placeholder="' + l + '" class="fld-' + e + ' frm-control" id="' + e + "-" + d + '">';
                return '<div class="form-group ' + e + '-wrap"><label for="' + e + "-" + d + '">' + s + "</label> " + _ + "</div>"
            },
            j = function(e, t) {
                var a = ["text", "textarea", "select"],
                    s = ["header"],
                    l = ["paragraph"],
                    n = ["checkbox", "select", "checkbox-group", "date", "autocomplete", "radio-group", "hidden", "button", "header", "number"],
                    r = t[e] || "",
                    i = o.messages[e];
                "label" === e && c.inArray(t.type, l) && (i = o.messages.content), s = s.concat(o.messages.subtypes.header, l), n = n.concat(l);
                var p = o.messages.placeholders,
                    u = p[e] || "",
                    m = "",
                    f = [];
                if ("placeholder" !== e || c.inArray(t.type, a) || f.push(!0), "name" === e && c.inArray(t.type, s) && f.push(!0), "maxlength" === e && c.inArray(t.type, n) && f.push(!0), !f.some(function(e) {
                        return e === !0
                    })) {
                    var v = '<label for="' + e + "-" + d + '">' + i + "</label>";
                    m += "label" === e && c.inArray(t.type, l) || "value" === e && "textarea" === t.type ? '<textarea name="' + e + '" placeholder="' + u + '" class="fld-' + e + ' frm-control" id="' + e + "-" + d + '">' + r + "</textarea>" : '<input type="text" value="' + r + '" name="' + e + '" placeholder="' + u + '" class="fld-' + e + ' frm-control" id="' + e + "-" + d + '">', m = '<div class="form-group ' + e + '-wrap">' + v + " " + m + "</div>"
                }
                return m
            },
            H = function(e) {
                var t = ["header", "paragraph", "button"],
                    a = [],
                    s = "";
                return c.inArray(e.type, t) && a.push(!0), a.some(function(e) {
                    return e === !0
                }) || (s = F("required", e, {
                    first: o.messages.required
                })), s
            },
            P = function(t) {
                var a = t.type || "text",
                    s = t.label || o.messages[a] || o.messages.label,
                    l = c.markup("a", o.messages.remove, {
                        id: "del_" + d,
                        className: "del-button btn delete-confirm",
                        title: o.messages.removeMessage
                    }),
                    n = c.markup("a", null, {
                        id: d + "-edit",
                        className: "toggle-form btn icon-pencil1",
                        title: o.messages.hide
                    }),
                    r = c.markup("div", [n, l], {
                        className: "field-actions"
                    }).outerHTML;
                r += '<label class="field-label">' + s + "</label>", t.description && (r += '<span class="tooltip-element" tooltip="' + t.description + '">?</span>');
                var p = t.required ? 'style="display:inline"' : "";
                r += '<span class="required-asterisk" ' + p + "> *</span>", r += c.markup("div", "", {
                    className: "prev-holder"
                }).outerHTML, r += '<div id="' + d + '-holder" class="frm-holder">', r += '<div class="form-elements">', r += L(t), r += c.markup("a", o.messages.close, {
                    className: "close-field"
                }).outerHTML, r += "</div>", r += "</div>";
                var u = c.markup("li", r, {
                        "class": a + "-field form-field",
                        type: a,
                        id: d
                    }),
                    m = e(u);
                m.data("fieldData", {
                    attrs: t
                }), "undefined" != typeof c.stopIndex ? e("> li", i).eq(c.stopIndex).after(m) : i.append(m), e(".sortable-options", m).sortable(), c.updatePreview(m), o.editOnAdd && (c.closeAllEdit(i), c.toggleEdit(d)), d = c.incrementId(d)
            },
            R = function(e, t, a) {
                var s = {
                        selected: a ? "checkbox" : "radio"
                    },
                    l = ["value", "label", "selected"],
                    n = [];
                t = t || {
                    selected: !1,
                    label: "",
                    value: ""
                };
                for (var r = l.length - 1; r >= 0; r--) {
                    var i = l[r];
                    if (t.hasOwnProperty(i)) {
                        var d = {
                            type: s[i] || "text",
                            "class": "option-" + i,
                            placeholder: o.messages.placeholders[i],
                            value: t[i],
                            name: e
                        };
                        "selected" === i && (d.checked = t.selected), n.push(c.markup("input", null, d))
                    }
                }
                var p = {
                    className: "remove btn",
                    title: o.messages.removeMessage
                };
                n.push(c.markup("a", o.messages.remove, p));
                var u = c.markup("li", n);
                return u.outerHTML
            };
        i.on("click touchstart", ".remove", function(t) {
            var a = e(this).parents(".form-field:eq(0)");
            t.preventDefault();
            var s = e(this).parents(".sortable-options:eq(0)").children("li").length;
            2 >= s ? o.notify.error("Error: " + o.messages.minOptionMessage) : e(this).parent("li").slideUp("250", function() {
                e(this).remove(), c.updatePreview(a), c.save()
            })
        }), i.on("touchstart", "input", function(t) {
            if (t.handled === !0) return !1;
            if ("checkbox" === e(this).attr("type")) e(this).trigger("click");
            else {
                e(this).focus();
                var a = e(this).val();
                e(this).val(a)
            }
        }), i.on("click touchstart", ".toggle-form, .close-field", function(t) {
            if (t.stopPropagation(), t.preventDefault(), t.handled === !0) return !1;
            var a = e(this).parents(".form-field:eq(0)").attr("id");
            c.toggleEdit(a), t.handled = !0
        }), i.on("keyup change", '[name="label"]', function() {
            e(".field-label", e(this).closest("li")).text(e(this).val())
        }), i.delegate("input.error", "keyup", function() {
            e(this).removeClass("error")
        }), i.on("keyup", 'input[name="description"]', function() {
            var t = e(this).parents(".form-field:eq(0)"),
                a = e(".tooltip-element", t),
                s = e(this).val();
            if ("" !== s)
                if (a.length) a.attr("tooltip", s).css("display", "inline-block");
                else {
                    var l = '<span class="tooltip-element" tooltip="' + s + '">?</span>';
                    e(".field-label", t).after(l)
                } else a.length && a.css("display", "none")
        }), c.updateMultipleSelect(), i.delegate('input[name="name"]', "blur", function() {
            e(this).val(c.safename(e(this).val())), "" === e(this).val() ? e(this).addClass("field_error").attr("placeholder", o.messages.cannotBeEmpty) : e(this).removeClass("field_error")
        }), i.delegate("input.fld-maxlength", "blur", function() {
            e(this).val(c.forceNumber(e(this).val()))
        }), i.on("click touchstart", ".delete-confirm", function(t) {
            t.preventDefault();
            var a = this.getBoundingClientRect(),
                s = document.body.getBoundingClientRect(),
                l = {
                    pageX: a.left + a.width / 2,
                    pageY: a.top - s.top - 12
                },
                n = e(this).parents(".form-field:eq(0)").attr("id"),
                r = e(document.getElementById(n)),
                d = function() {
                    r.slideUp(250, function() {
                        r.removeClass("deleting"), r.remove(), c.save(), i[0].childNodes.length || C.addClass("empty").attr("data-content", o.messages.getStarted)
                    })
                };
            if (document.addEventListener("modalClosed", function() {
                    r.removeClass("deleting")
                }, !1), o.fieldRemoveWarn) {
                var p = c.markup("h3", o.messages.warning),
                    u = c.markup("p", o.messages.fieldRemoveWarning);
                c.confirm([p, u], d, l), r.addClass("deleting")
            } else d(r)
        }), i.on("click", ".style-wrap button", function() {
            var t = e(this).val(),
                a = e(this).parent(),
                s = a.prev(".btn-style");
            s.val(t), e(this).siblings(".btn").removeClass("active"), e(this).addClass("active"), O.call(a)
        }), i.on("click", "input.fld-required", function() {
            var t = e(this).parents("li.form-field").find(".required-asterisk");
            t.toggle()
        }), i.on("click", 'input[name="enable-roles"]', function() {
            var t = e(this).siblings("div.available-roles"),
                a = e(this);
            t.slideToggle(250, function() {
                a.is(":checked") || e('input[type="checkbox"]', t).removeAttr("checked")
            })
        }), i.on("click", ".add-opt", function(t) {
            t.preventDefault();
            var a = e(this).parents(".field-options:eq(0)"),
                s = e('[name="multiple"]', a),
                l = e(".option-selected:eq(0)", a),
                o = !1;
            o = s.length ? s.prop("checked") : "checkbox" === l.attr("type");
            var n = l.attr("name");
            e(".sortable-options", a).append(R(n, !1, o)), c.updateMultipleSelect()
        }), i.on("mouseover mouseout", ".remove, .del-button", function() {
            e(this).parents("li:eq(0)").toggleClass("delete")
        });
        var z = e(document.getElementById(r + "-view-data"));
        z.click(function(e) {
            e.preventDefault();
            var t = c.htmlEncode(n.val()),
                a = c.markup("code", t, {
                    className: "xml"
                }),
                s = c.markup("pre", a);
            c.dialog(s, null, "data-dialog")
        });
        var X = e(document.getElementById(r + "-clear-all"));
        return X.click(function() {
            var t = e("li.form-field"),
                a = this.getBoundingClientRect(),
                s = document.body.getBoundingClientRect(),
                l = {
                    pageX: a.left + a.width / 2,
                    pageY: a.top - s.top - 12
                };
            t.length ? c.confirm(o.messages.clearAllMessage, function() {
                c.removeAllfields(), o.notify.success(o.messages.allFieldsRemoved), c.save()
            }, l) : c.dialog("There are no fields to clear", {
                pageX: l.pageX,
                pageY: l.pageY
            })
        }), e(document.getElementById(r + "-save")).click(function(e) {
            e.preventDefault(), c.save(), c.validateForm(e)
        }), n.parent().find('p[id*="ideaTemplate"]').remove(), n.wrap('<div class="template-textarea-wrap"/>'), M(), i.css("min-height", f.height()), o.stickyControls && c.stickyControls(i, m), document.dispatchEvent(s.events.loaded), s.actions = {
            clearFields: c.removeAllfields,
            save: c.save
        }, s
    };
    e.fn.formBuilder = function(a) {
        return this.each(function() {
            var s, l = this;
            if (e(l).data("formBuilder")) {
                var o = e(l).parents(".form-builder:eq(0)");
                o.before(l), o.remove()
            }
            s = new t(a, l), e(l).data("formBuilder", s)
        })
    }
}(jQuery),
function(e) {
    e.fn.toXML = function(t) {
        var a = "",
            s = function(a) {
                var s = [];
                return e(".sortable-options li", a).each(function() {
                    var a = e(this),
                        l = {
                            value: e(".option-value", a).val(),
                            selected: e(".option-selected", a).is(":checked")
                        },
                        o = t.markup("option", e(".option-label", a).val(), l).outerHTML;
                    s.push("\n			" + o)
                }), s.join("") + "\n		"
            };
        return this.each(function() {
            var l = this;
            l.childNodes.length >= 1 && (a += "<form-template>\n	<fields>", t.forEach(l.childNodes, function(l, o) {
                l = l;
                var n = e(o);
                if (!n.hasClass("disabled")) {
                    var r, i, c, d, p;
                    ! function() {
                        r = e(".roles-field:checked", o).map(function() {
                            return this.value
                        }).get(), i = e('[name="enable-other"]:checked', o).length;
                        var l = t.getTypes(n);
                        e('[class*="fld-"]', o).each(function() {
                            var e = t.camelCase(this.name);
                            l[e] = "checkbox" === this.type ? this.checked : this.value
                        }), r.length && (l.role = r.join(",")), i && (l.other = "true"), l = t.trimObj(l), l = t.escapeAttrs(l), c = l.type.match(/(select|checkbox-group|radio-group)/), d = "", c && (d = s(n)), p = t.markup("field", d, l), a += "\n		" + p.outerHTML
                    }()
                }
            }), a += "\n	</fields>\n</form-template>")
        }), a
    }
}(jQuery), "remove" in Element.prototype || (Element.prototype.remove = function() {
    this.parentNode && this.parentNode.removeChild(this)
}), "function" != typeof Event && ! function() {
    window.Event = function(e) {
        var t = document.createEvent("Event");
        return t.initEvent(e, !0, !0), t
    }
}();