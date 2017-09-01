! function(a) {
  var b = {
    fn: {
      moveZoom: function(a, b) {
        var i, c = a.height(),
          d = a.width(),
          e = b.pageY - a.offset().top,
          f = b.pageX - a.offset().left,
          g = a.find("img"),
          h = a.data("zoom");
        h && "auto" != h ? (i = parseFloat(h), g.css({
          width: d * i + "px",
          height: c * i + "px",
          top: -e * (i - 1) + "px",
          left: -f * (i - 1) + "px"
        })) : (i = g.width() / d, g.css({
          top: -e * (i - 1) + "px",
          left: -f * (i - 1) + "px"
        }))
      },
      changeZoom: function(a, c, d, e, f) {
        var i, j, k, l, m, n, g = a.find("img"),
          h = a.data("zoom");
        h = "auto" == h ? g.width() / a.width() : parseFloat(h), i = a.data("zoomstep"), i = i ? parseFloat(i) : .5, j = a.data("zoomrange"), j = j ? j.split(",") : "1,4", k = parseFloat(j[0]), l = parseFloat(j[1]) > h ? parseFloat(j[1]) : h, m = f > 0 ? 1 : -1, n = Math.round(10 * (h + i * m)) / 10, n >= k && l >= n && (a.data("zoom", n), b.fn.showZoomState(a, n), b.fn.moveZoom(a, c))
      },
      showZoomState: function(b, c) {
        var d = b.find(".he-zoomstate");
        0 == d.length && (d = a('<span class="he-zoomstate">' + c + "X</span>").appendTo(b)), d.text(c + "X").stop(!0, !0).fadeIn(300).delay(200).fadeOut(300)
      },
      switchImg: function(a, b) {
        var d, e, c = a.data("animate");
        c = c ? c : "random", "random" == c && (d = ["fadeIn", "fadeInLeft", "fadeInRight", "fadeInUp", "fadeInDown", "rotateIn", "rotateInLeft", "rotateInRight", "rotateInUp", "rotateInDown", "bounce", "bounceInLeft", "bounceInRight", "bounceInUp", "bounceInDown", "elasticInLeft", "elasticInRight", "elasticInUp", "elasticInDown", "zoomIn", "zoomInLeft", "zoomInRight", "zoomInUp", "zoomInDown", "jellyInLeft", "jellyInRight", "jellyInDown", "jellyInUp", "flipInLeft", "flipInRight", "flipInUp", "flipInDown", "flipInV", "flipInH"], c = d[Math.floor(Math.random() * d.length)]), e = a.find("img"), e.length > 1 && (b > 0 ? (e.eq(0).attr("class", "a0").appendTo(a), e.eq(1).attr("class", "a0 " + c)) : (e.eq(e.length - 1).attr("class", "a0 " + c).prependTo(a), e.eq(0).attr("class", "a0")))
      }
    }
  };
  a(function() {
    a(document).on("mouseenter", ".he-wrap", function() {
      var b = a(this).find(".he-view").addClass("he-view-show");
      a("[data-animate]", b).each(function() {
        var b = a(this).data("animate");
        a(this).addClass(b)
      }), a(this).find(".he-zoom").addClass("he-view-show")
    }).on("mouseleave", ".he-wrap", function() {
      var b = a(this).find(".he-view").removeClass("he-view-show");
      a("[data-animate]", b).each(function() {
        var b = a(this).data("animate");
        a(this).removeClass(b)
      }), a(this).find(".he-zoom").removeClass("he-view-show")
    }).on("mousewheel", ".he-wrap", function(c, d, e, f) {
      var g, h, i;
      1 == a(this).find(".he-sliders").length ? (g = a(this).find(".he-sliders"), h = f > 0 ? 1 : -1, b.fn.switchImg(g, h), c.preventDefault()) : 1 == a(this).find(".he-zoom").length && (i = a(this).find(".he-zoom"), b.fn.changeZoom(i, c, d, e, f), c.preventDefault())
    }).on("mousemove", ".he-zoom", function(c) {
      b.fn.moveZoom(a(this), c)
    }).on("click", ".he-pre", function() {
      var c = a(this).parents(".he-wrap").find(".he-sliders");
      b.fn.switchImg(c, -1)
    }).on("click", ".he-next", function() {
      var c = a(this).parents(".he-wrap").find(".he-sliders");
      b.fn.switchImg(c, 1)
    })
  })
}(jQuery),
function(a) {
  function d(b) {
    var c = b || window.event,
      d = [].slice.call(arguments, 1),
      e = 0,
      g = 0,
      h = 0;
    return b = a.event.fix(c), b.type = "mousewheel", c.wheelDelta && (e = c.wheelDelta / 120), c.detail && (e = -c.detail / 3), h = e, void 0 !== c.axis && c.axis === c.HORIZONTAL_AXIS && (h = 0, g = -1 * e), void 0 !== c.wheelDeltaY && (h = c.wheelDeltaY / 120), void 0 !== c.wheelDeltaX && (g = -1 * c.wheelDeltaX / 120), d.unshift(b, e, g, h), (a.event.dispatch || a.event.handle).apply(this, d)
  }
  var c, b = ["DOMMouseScroll", "mousewheel"];
  if (a.event.fixHooks)
    for (c = b.length; c;) a.event.fixHooks[b[--c]] = a.event.mouseHooks;
  a.event.special.mousewheel = {
    setup: function() {
      if (this.addEventListener)
        for (var a = b.length; a;) this.addEventListener(b[--a], d, !1);
      else this.onmousewheel = d
    },
    teardown: function() {
      if (this.removeEventListener)
        for (var a = b.length; a;) this.removeEventListener(b[--a], d, !1);
      else this.onmousewheel = null
    }
  }, a.fn.extend({
    mousewheel: function(a) {
      return a ? this.bind("mousewheel", a) : this.trigger("mousewheel")
    },
    unmousewheel: function(a) {
      return this.unbind("mousewheel", a)
    }
  })
}(jQuery);