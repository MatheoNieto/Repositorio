/*!
 * ForMeter - Form completion progress bar
 * http://codecanyon.net/item/formeter-form-completion-progress-bar/2801131?ref=w3ninja
 *
 * Copyright (c) 2013, w3ninja
 * http://codecanyon.net/user/w3ninja
 * http://www.wiredshack.com/
 *
 * Released under CodeCanyon Regular License.
 *
 * Version: 1.3 (Feb 05 2015)
 */
(function($) {
    $.fn.extend({
        formProgress: function(options) {
            var st = {
                speed: 300,
                style: "green",
                bubble: false,
                selector: ".required",
                minPercent: false,
                message: "Please complete all required fields !"
            };
            if (options) {
                $.extend(st, options);
            }
            var _this = $(this),
                sel = st.selector,
                mainForm = $(sel).parents("form"),
                names = [],
                timer;
            $(sel + ":radio").each(function() {
                var n = $(this).attr("name");
                if ($.inArray(n, names) < 0) {
                    names.push(n);
                }
            });
            var totalInputs = $(sel).not(":radio").length + names.length;
            $(mainForm).find(sel + ":checkbox, " + sel + ":radio, select" + sel).on("change", function() {
                animateBar.call(_this);
            });
            $(mainForm).find("input[type=text]" + sel + ", input[type=password]" + sel + ", textarea" + sel).on("keyup", function() {
                timer && clearTimeout(timer);
                timer = setTimeout(function() {
                    animateBar.call(_this);
                }, 300);
            });
            return this.each(function() {
                animateBar.call(_this);
            });

            function animateBar() {
                var vars = barData();
                _this.attr("class", st.style);
                $(this).stop().animate({
                    width: vars.toPercent * vars.ratio
                }, st.speed);
                if (st.bubble) {
                    if (vars.bubble.length === 0) {
                        $(this).parent().append('<div class="bubble"><div class="percent">' + vars.toPercent + '%</div><div class="arrow"></div></div>');
                        vars.bubble = $(this).next();
                    } else {
                        vars.bubble.find(".percent").text(vars.toPercent + "%");
                    }
                    vars.bubble.stop().animate({
                        left: (vars.toPercent * vars.ratio) - 5
                    }, st.speed);
                } else {
                    $(this).parent().parent().find('label').find('span').text(vars.toPercent + "% completado");
                }
                preventSubmit(vars.toPercent);
            }

            function barData() {
                var filled = $(sel).filter(function() {
                    return $(this).val();
                }).not(":checkbox, :radio").length + $(sel + ":checked").length;
                return {
                    filled: filled,
                    ratio: _this.parent().width() / 100,
                    toPercent: Math.round((filled * 100) / totalInputs),
                    bubble: _this.next()
                };
            }

            function preventSubmit(percentage) {
                if (!st.minPercent) {
                    return false;
                }
                var targetInput = mainForm.find("input[type=submit]");
                targetInput.removeAttr("onclick");
                if (percentage < st.minPercent) {
                    targetInput.attr("onclick", "alert('" + st.message + " Minimum percentage: " + st.minPercent + "%'); return false;");
                }
            }
        }
    });
})(jQuery);