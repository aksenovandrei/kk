window.xs_screen_max = 767;
window.sm_screen_max = 991;
var page_is_scrolling = false;
var background_settings = {
    change_on_mobile: false,
    change_on_nonmobile: true,
    use_script: true,
};

function viewport() {
    var c = window,
        b = "inner";
    if (!("innerWidth" in window)) {
        b = "client";
        c = document.documentElement || document.body
    }
    return {
        width: c[b + "Width"],
        height: c[b + "Height"]
    }
}

function toggle_main_menu() {
    if (viewport().width <= window.xs_screen_max) {
        var a = $("#left-sidebar #mobile-menu-icon");
        var b = $("#left-sidebar #main-menu");
        if (b.is(":visible")) {
            b.addClass("menu_closed_on_xs").removeClass("menu_opened_on_xs").slideUp("fast", function() {
                a.removeClass("active")
            });
            return "closed"
        } else {
            b.addClass("menu_opened_on_xs").removeClass("menu_closed_on_xs").slideDown("fast", function() {
                a.addClass("active")
            });
            return "opened"
        }
    }
}

function main_menu_visiblity_on_resize() {
    var a = $("#left-sidebar #main-menu");
    if (viewport().width > window.xs_screen_max) {
        if (a.hasClass("menu_closed_on_xs")) {
            a.show()
        }
    } else {
        if (a.hasClass("menu_closed_on_xs")) {
            a.hide()
        }
        if (a.hasClass("menu_opened_on_xs")) {
            a.show()
        }
    }
}

function sections_content_vertical_position() {
    if (viewport().width > window.xs_screen_max) {
        var a = $(window).height();
        var b = 0.8 * a;
        $("#main-content .section-wrapper").each(function() {
            var e = $(this).find(".content-wrapper");
            var c = e.height();
            var d = ($(this).hasClass("active")) ? true : false;
            if (c > b) {
                e.css({
                    position: "static"
                })
            } else {
                e.css({
                    position: "absolute"
                })
            }
        })
    } else {
        $("#main-content .section-wrapper .content-wrapper").css({
            position: "static"
        })
    }
}

function initialise_general_links_click_events() {
    $("a.link-scroll").click(function(c) {
        var a = $(this).attr("href");
        if (a !== undefined && a != "" && a != "#") {
            var d = a.substr(0, 1);
            if (d == "#") {
                if ($(a).length > 0) {
                    $("#main-content").addClass("same_page_link_in_action");
                    var b = $(a).offset().top;
                    $("html, body").stop().animate({
                        scrollTop: b
                    }, 1500, "easeInOutCubic", function() {
                        $("#main-content").removeClass("same_page_link_in_action");
                        update_active_sections_on_scroll()
                    });
                    c.preventDefault ? c.preventDefault() : c.returnValue = false
                } else {
                    return false
                }
            } else {}
        } else {
            c.preventDefault ? c.preventDefault() : c.returnValue = false;
            return false
        }
    })
}

function initialise_main_menu_click_events() {
    $("#main-menu .menu-item > a").off("click");
    $("#main-menu .menu-item > a").prop("onclick", null);
    $("#main-menu .menu-item > a").click(function(c) {
        var b = $(this).attr("href");
        var f = b.substr(0, 1);
        var e = $(this).parent(".menu-item");
        var d = e.attr("id");
        if (e.hasClass("scroll") && f == "#") {
            var a = (d !== undefined && d != "") ? d : "";
            $("#main-content").addClass("same_page_link_in_action");
            var g = (change_bg_check()) ? true : false;
            scroll_to_section(b, a, g);
            c.preventDefault ? c.preventDefault() : c.returnValue = false
        } else {
            if (b === undefined || b == "" || b == "#") {
                c.preventDefault ? c.preventDefault() : c.returnValue = false;
                return false
            }
        }
    })
}

function scroll_to_section(c, b, e) {
    if (c !== undefined && c != "") {
        var d = $("#main-content " + c + ".section-wrapper");
        if (d.length != 0 && !d.hasClass("active")) {
            var f = d.offset().top;
            var a = $("#main-menu").height();
            if (toggle_main_menu() == "closed") {
                f = f - a
            }
            $("html, body").stop().animate({
                scrollTop: f
            }, 1500, "easeInOutCubic", function() {
                $("#main-content").removeClass("same_page_link_in_action");
                set_section_to_active(c, b, "", e)
            })
        } else {
            return false
        }
    } else {
        return false
    }
}

function set_section_to_active(m, o, n, b) {
    if (m !== undefined && m != "") {
        var a = $("#main-content " + m + ".section-wrapper");
        $("#main-menu .menu-item").removeClass("active");
        $("#main-content .section-wrapper").removeClass("active");
        var e = (o != undefined && o != "") ? $("#main-menu #" + o + ".menu-item") : "";
        if (e != "" && e.length != 0) {
            e.addClass("active")
        } else {
            var d = m.substr(1);
            $("#main-menu #menu-item-" + d + ".menu-item").addClass("active")
        }
        a.addClass("active");
        toggle_top_icon_in_main_menu();
        var k = ($("body").attr("data-overlay") != "false") ? true : false;
        var c = $("body").attr("data-overlay-opacity");
        var h = (c !== undefined && c != "") ? parseFloat(c) : 0.35;
        if (b != false && change_bg_check()) {
            var j = a.attr("data-custom-background-img");
            var g = (j !== undefined && j != "") ? j : $("body").attr("data-default-background-img");
            if (g !== undefined && g != "") {
                var l = (n != true) ? 1500 : 550;
                $(function() {
                    $.vegas({
                        src: g,
                        fade: l,
                    });
                    if (k) {
                        $.vegas("overlay", {
                            src: "img/background-image-overlay-full.png",
                            opacity: h
                        })
                    }
                })
            }
        } else {
            if (background_settings.use_script && !$("body").hasClass("defualt-bg-set")) {
                var f = $("body").attr("data-default-background-img");
                if (f != "" && f !== undefined) {
                    $(function() {
                        $.vegas({
                            src: f,
                            fade: 1500,
                        });
                        if (k) {
                            $.vegas("overlay", {
                                src: "img/background-image-overlay-full.png",
                                opacity: h
                            })
                        }
                    });
                    $("body").addClass("defualt-bg-set")
                }
            }
        }
    }
}

function get_all_section_wrappers_in_page() {
    var a = $("#main-content").find(".section-wrapper");
    return a
}

function update_active_sections_on_scroll(f, a) {
    var e = (f !== undefined && f != "") ? f : $("#main-content").find(".section-wrapper");
    var a = (a !== a && a != "") ? a : 0.25 * ($(window).height());
    var b = $(document).scrollTop();
    var d = e.map(function() {
        var g = ($(this).offset().top) - a;
        var h = $(this).height();
        var j = g + h;
        if (b > g && b <= j) {
            return this
        }
    });
    if (d !== undefined && d != "") {
        var c = "#" + d.attr("id");
        if (!d.hasClass("active")) {
            set_section_to_active(c, "", true)
        }
    }
}

function toggle_top_icon_in_main_menu() {
    var a = $("#main-menu #menu-item-intro");
    if (a.hasClass("active")) {
        a.css({
            opacity: 0
        }).addClass("main-menu-top-icon-active")
    } else {
        a.css({
            opacity: 0.7
        }).removeClass("main-menu-top-icon-active")
    }
}

function preload_section_backgrounds() {
    var a = get_all_section_wrappers_in_page();
    if (a.length > 0) {
        a.each(function() {
            var c = $(this).attr("data-custom-background-img");
            if (c !== undefined && c != "") {
                var b = new Image();
                b.src = c
            }
        })
    }
}

function add_clear_items_to_fix_grid_items_different_heights_issue() {
    if ($("#main-content .grid .grid-item").length > 0) {
        var a = $("#main-content .grid");
        if (a.hasClass("clearfix-for-2cols")) {
            a.find(".grid-item:nth-of-type(2n+2)").after('<article class="clearfix"></article>');
            return false
        } else {
            if (a.hasClass("clearfix-for-3cols")) {
                a.find(".grid-item:nth-of-type(3n+3)").after('<article class="clearfix"></article>');
                return false
            }
        }
    }
}

function effect_fade_out_inactive_grid_items() {
    if ($("#main-content .projects-grid.effect-fade-inactive").length > 0) {
        $("#main-content .projects-grid.effect-fade-inactive").each(function() {
            var a = $(this);
            a.find(".grid-item .item-content").hover(function() {
                var b = $(this);
                b.css({
                    opacity: 1
                });
                a.find(".grid-item .item-content").not(b).css({
                    opacity: 0.3
                })
            }, function() {
                var b = $(this);
                b.css({
                    opacity: 0.3
                })
            });
            a.hover(function() {}, function() {
                setTimeout(function() {
                    a.find(".grid-item .item-content").css({
                        opacity: 1
                    })
                }, 200)
            })
        })
    }
}

function set_height_of_parent_content_wrappers() {
    var a = $("#main-content .max-height");
    a.each(function() {
        var b = $(this).parents(".content-wrapper");
        if (b.length > 0) {
            b.parents(".section-wrapper").addClass("modified-height");
            var c = $(this).attr("data-height-percent");
            if (c !== undefined && c != "" && !isNaN(c)) {
                b.css({
                    height: c + "%"
                })
            } else {
                b.css({
                    height: "80%"
                })
            }
        }
    })
}

function set_equal_height_to_all_carousel_slides_on_small_displays() {
    var a = $("#main-content .carousel");
    a.each(function() {
        var d = ($(this).attr("data-height-percent") !== undefined && $(this).attr("data-height-percent") != "" && !isNaN($(this).attr("data-height-percent"))) ? $(this).attr("data-height-percent") : 80;
        var c = (d / 100) * viewport().height;
        var e = $(this).find(".item .carousel-text-content");
        $(this).find(".item:not(.active)").css({
            opacity: "0",
            position: "absolute",
            display: "block"
        });
        e.css({
            height: "auto"
        });
        var f = [];
        e.each(function() {
            f.push($(this).height())
        });
        var b = Math.max.apply(Math, f) + 40;
        $(this).find(".item:not(.active)").attr("style", "");
        if (viewport().width <= window.sm_screen_max || b >= c) {
            $(this).parents(".section-wrapper").addClass("modified-height");
            e.height(b)
        } else {
            $(this).parents(".section-wrapper").removeClass("modified-height");
            $(this).removeClass("slides-height-modified").find(".item .carousel-text-content").css({
                height: "100%"
            })
        }
    })
}

function populate_and_open_modal(b, g, f, d) {
    var j = $("#common-modal.modal");
    var k = j.find(".modal-body");
    var c = $("#" + g);
    var h = "";
    if (d !== undefined && d != "") {
        h = d
    }
    if (k.length > 0 && c.length > 0) {
        $("#outer-container").fadeTo("fast", 0.2);
        var a = $(document).scrollTop();
        var e = c.html();
        k.empty().html(e);
        j.modal();
        c.find("a[data-lightbox]").each(function() {
            var l = $(this).attr("data-lightbox");
            $(this).removeAttr("data-lightbox");
            $(this).attr("data-mod-lightbox", l)
        });
        if (h != "") {
            j.addClass(h)
        }
        j.on("shown.bs.modal", function(l) {
            position_modal_at_centre();
            if (f !== undefined && f != "" && $("#common-modal.modal").find(f).length > 0) {
                var m = $("#common-modal.modal").find(f).offset().top;
                $("#common-modal.modal").stop().animate({
                    scrollTop: m
                }, 800, "easeInOutCubic")
            }
            modal_backdrop_height(j)
        });
        j.on("hide.bs.modal", function(l) {
            $("#outer-container").fadeTo("fast", 1);
            $("#" + g).find("a[data-mod-lightbox]").each(function() {
                var m = $(this).attr("data-mod-lightbox");
                $(this).removeAttr("data-mod-lightbox");
                $(this).attr("data-lightbox", m)
            })
        });
        j.on("hidden.bs.modal", function(l) {
            k.empty();
            if (h != "") {
                j.removeClass(h)
            }
        })
    }
    b.preventDefault ? b.preventDefault() : b.returnValue = false;
    return false
}

function modal_backdrop_height(a) {
    a.find(".modal-backdrop").css({
        "min-height": a.find(".modal-dialog").outerHeight(true) + "px"
    })
}

function position_modal_at_centre() {
    var f = $(".modal");
    if (f.length > 0 && f.is(":visible")) {
        var a = f.find(".modal-dialog");
        var c = a.width();
        var d = a.height();
        var e = ((d + 70) < viewport().height) ? true : false;
        if (viewport().width > window.sm_screen_max && e == true) {
            var b = (viewport().height - d) / 2;
            a.css({
                "margin-top": b + "px",
                "margin-bottom": "20px"
            })
        } else {
            a.removeAttr("style")
        }
    }
}

function go_to_top_visibility() {
    var a = $("#go-to-top");
    if (a.length > 0) {
        var b = $(document).scrollTop();
        if (b < viewport().height) {
            a.removeClass("active")
        } else {
            a.addClass("active")
        }
    }
}

function scroll_to_top() {
    $("html, body").stop().animate({
        scrollTop: 0
    }, 1500, "easeInOutCubic", function() {
        $("#go-to-top").removeClass("active")
    })
}

function load_images(b, d, f) {
    var e = $("." + b);
    if (e.length > 0) {
        var a = new Array();
        e.each(function() {
            var j = $(this).attr("data-img-src");
            if (j !== undefined && j != "") {
                var h = new Array();
                h.img_object = $(this);
                h.img_src = j;
                a.push(h)
            }
        });
        var c = a.length;
        for (i = 0; i < c; i++) {
            var g = new Image();
            g.src = a[i]["img_src"];
            a[i]["img_object"].attr("src", a[i]["img_src"]);
            if (d == true) {
                a[i]["img_object"].removeClass(b)
            }
            if (f == true && i == c - 1 && (!jQuery.browser.mobile || viewport().width > window.xs_screen_max)) {
                g.onload = function() {
                    sections_content_vertical_position()
                }
            }
        }
    }
}

$(document).ready(function() {
    $('#sub-btn').on('click', function () {
        $('#form-email').removeAttr('disabled');
        $('#form-contact-number').removeAttr('disabled');
        $('#sub-btn').removeAttr('disabled');
        if ($('#form-email').val().trim() != '' && $('#form-contact-number').val().trim() != '' ) {
            $('#form-contact-number').removeAttr('disabled');
            $('#form-email').removeAttr('disabled');
        } else if ($('#form-email').val().trim() != '') {
           $('#form-contact-number').attr('disabled', 'disabled');
        } else if (($('#form-contact-number').val().trim() != '')) {
           $('#form-email').attr('disabled', 'disabled');
        }
    });
    $('.form-val').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    stringLength: {
                        min: 2
                    },
                    notEmpty: {
                        message: 'Пожадуйста, введите свое имя'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Пожалуйста, введите свой email'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
                        message: 'Введите правильный email адрес'
                    }
                }
            },
            contact_number: {
                validators: {
                    stringLength: {
                        min: 5
                    },
                    notEmpty: {
                        message: 'Пожалуйста, введите свой телефон'
                    }
                }
            }
        }
    })
});


function contact_form_IE9_placeholder_fix() {
    var a = $("form");
    a.each(function() {
        var b = $(this);
        $(this).find(".form-control").each(function() {
            var c = $(this).attr("placeholder");
            if (c !== undefined && c != "") {
                $(this).val(c);
                $(this).focus(function() {
                    if ($(this).val() == c) {
                        $(this).val("")
                    }
                });
                $(this).blur(function() {
                    if ($(this).val() == "") {
                        $(this).val(c)
                    }
                })
            }
        })
    })
}

function change_bg_check() {
    return ((jQuery.browser.mobile && background_settings.change_on_mobile) || (!jQuery.browser.mobile && background_settings.change_on_nonmobile)) ? true : false
}

function tabs_uniform_height() {
    var g = $(".tabpanel.uniform-height");
    for (var f = 0, a = g.length; f < a; f++) {
        var e = 0;
        var h = $(g[f]).find(".tab-pane");
        for (var d = 0, b = h.length; d < b; d++) {
            var c = $(h[d]).attr("style");
            $(h[d]).css({
                position: "absolute",
                visibility: "hidden",
                display: "block"
            });
            e = ($(h[d]).outerHeight(true) > e) ? $(h[d]).outerHeight(true) : e;
            $(h[d]).attr("style", c ? c : "")
        }
        h.css({
            "min-height": e + "px"
        })
    }
};

$('#myModal').modal();
$('#myModal').on('shown.bs.modal', function () {
    $(document).off('focusin.modal');
});

$('.chart').on('click', function () {
    $('.modal-body ul h5').hide();
    $('.modal-body ul li').remove();
    $("input:checkbox:checked").each(function () {
        if ($(this).closest('div').attr('id') == 'tabs-tab1') {
            $('.modal-body #title1').show();
        $(this).closest('li').clone().insertAfter("#title1");
        } if ($(this).closest('div').attr('id') == 'tabs-tab2') {
            $('.modal-body #title2').show();
            $(this).closest('li').clone().insertAfter("#title2");
        } if ($(this).closest('div').attr('id') == 'tabs-tab3') {
            $('.modal-body #title3').show();
            $(this).closest('li').clone().insertAfter("#title3");
        } if ($(this).closest('div').attr('id') == 'tabs-tab4') {
            $('.modal-body #title4').show();
            $(this).closest('li').clone().insertAfter("#title4");
        } if ($(this).closest('div').attr('id') == 'tabs-tab5') {
            $('.modal-body #title5').show();
            $(this).closest('li').clone().insertAfter("#title5");
        } if ($(this).closest('div').attr('id') == 'tabs-tab6') {
            $('.modal-body #title6').show();
            $(this).closest('li').clone().insertAfter("#title6");
        }
    });
});
$(".modal-body").on('click', 'li', function (e) {
    $thisId = $(this).find("input").attr("id");
    $('input#'+$thisId).closest('label').toggleClass('active-row');
    $(e.target).closest('li').remove();
    $('input#'+$thisId).prop( "checked", false);
});

$('label input').click(function () {
    $(this).closest('label').toggleClass('active-row');
});

