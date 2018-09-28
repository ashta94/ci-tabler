! function(t) {
  var e = {};

  function n(i) {
    if (e[i]) return e[i].exports;
    var o = e[i] = {
      i: i,
      l: !1,
      exports: {}
    };
    return t[i].call(o.exports, o, o.exports, n), o.l = !0, o.exports
  }
  n.m = t, n.c = e, n.d = function(t, e, i) {
    n.o(t, e) || Object.defineProperty(t, e, {
      configurable: !1,
      enumerable: !0,
      get: i
    })
  }, n.n = function(t) {
    var e = t && t.__esModule ? function() {
      return t.default
    } : function() {
      return t
    };
    return n.d(e, "a", e), e
  }, n.o = function(t, e) {
    return Object.prototype.hasOwnProperty.call(t, e)
  }, n.p = "", n(n.s = 4)
}([function(t, e, n) {
  "use strict";
  Object.defineProperty(e, "__esModule", {
    value: !0
  });
  var i = function() {
    function t(t, e) {
      for (var n = 0; n < e.length; n++) {
        var i = e[n];
        i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
      }
    }
    return function(e, n, i) {
      return n && t(e.prototype, n), i && t(e, i), e
    }
  }();
  var o = function() {
    function t() {
      ! function(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
      }(this, t), this.notif = {
        timeout: 5e3
      }, this.msgs = {
        s: ["", "Success", "mt-success"],
        w: ["", "Warning", "mt-warning"],
        e: ["", "Error", "mt-error"],
        i: ["", "Info", "mt-info"],
        d: ["", "Notification", "mt-default"]
      }, this.init()
    }
    return i(t, [{
      key: "init",
      value: function() {
        var t = document.getElementById("mt-cont");
        t || ((t = document.createElement("div")).id = "mt-cont", t.classList.add("mt-cont"), document.body.appendChild(t)), this.cont = t
      }
    }, {
      key: "success",
      value: function() {
        var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
        this.append(t || this.msgs.s[0], "s")
      }
    }, {
      key: "warning",
      value: function() {
        var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
        this.append(t || this.msgs.w[0], "w")
      }
    }, {
      key: "error",
      value: function() {
        var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
        this.append(t || this.msgs.e[0], "e")
      }
    }, {
      key: "info",
      value: function() {
        var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
        this.append(t || this.msgs.i[0], "i")
      }
    }, {
      key: "default",
      value: function() {
        var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
        this.append(t || this.msgs.d[0], "d")
      }
    }, {
      key: "append",
      value: function(t, e) {
        var n = this.notif,
          i = this.msgs,
          o = document.createElement("div");
        o.classList.add(i[e][2], "mt-notif", "mt-slide-fade"), o.style.animationDuration = n.timeout / 1e3 + "s";
        var a = document.createElement("p");
        a.innerText = i[e][1], o.appendChild(a);
        var r = document.createElement("p");
        r.innerText = t, o.appendChild(r), document.getElementById("mt-cont").appendChild(o), setTimeout(function() {
          document.getElementById("mt-cont").removeChild(document.getElementById("mt-cont").firstChild)
        }, n.timeout)
      }
    }]), t
  }();
  e.default = o
}, , , , function(t, e, n) {
  t.exports = n(5)
}, function(t, e, n) {
  "use strict";
  Object.defineProperty(e, "__esModule", {
    value: !0
  });
  var i = n(0);
  var o = new i.default;
  window.t = o;
  

  function s() {
    return a[Math.floor(Math.random() * a.length)]
  }

}]);
