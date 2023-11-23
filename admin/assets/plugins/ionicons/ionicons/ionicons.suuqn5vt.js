/*!Built with http://stenciljs.com*/ (function (
  Context,
  namespace,
  hydratedCssClass,
  resourcesUrl,
  s
) {
  "use strict";
  s = document.querySelector("script[data-namespace='ionicons']");
  if (s) {
    resourcesUrl = s.getAttribute("data-resources-url");
  }
  (function (t, e, n, o) {
    "use strict";
    function i(t, e) {
      const n = `data-${t.t}`;
      return e && e !== S ? `${n}-${e}` : n;
    }
    function r(t) {
      return { e: t[0], n: t[1], o: !!t[2], i: !!t[3], r: !!t[4] };
    }
    function s(t, e) {
      if (L(e) && "object" != typeof e && "function" != typeof e) {
        if (t === Boolean || 3 === t) return "false" !== e && ("" === e || !!e);
        if (t === Number || 4 === t) return parseFloat(e);
        if (t === String || 2 === t) return e.toString();
      }
      return e;
    }
    function c(t, e, n, o) {
      const i = t.s.get(e);
      i &&
        ((o = i["s-ld"] || i.$activeLoading) &&
          ((n = o.indexOf(e)) > -1 && o.splice(n, 1),
          o.length ||
            (i["s-init"] && i["s-init"](), i.$initLoad && i.$initLoad())),
        t.s.delete(e));
    }
    function l(t, e) {
      let n,
        o,
        i = null,
        r = !1,
        s = !1;
      for (var c = arguments.length; c-- > 2; ) B.push(arguments[c]);
      for (; B.length > 0; ) {
        let e = B.pop();
        if (e && void 0 !== e.pop) for (c = e.length; c--; ) B.push(e[c]);
        else
          "boolean" == typeof e && (e = null),
            (s = "function" != typeof t) &&
              (null == e
                ? (e = "")
                : "number" == typeof e
                ? (e = String(e))
                : "string" != typeof e && (s = !1)),
            s && r
              ? (i[i.length - 1].vtext += e)
              : null === i
              ? (i = [s ? { vtext: e } : e])
              : i.push(s ? { vtext: e } : e),
            (r = s);
      }
      if (null != e) {
        if (
          (e.className && (e.class = e.className), "object" == typeof e.class)
        ) {
          for (c in e.class) e.class[c] && B.push(c);
          (e.class = B.join(" ")), (B.length = 0);
        }
        null != e.key && (n = e.key), null != e.name && (o = e.name);
      }
      return "function" == typeof t
        ? t(Object.assign({}, e, { children: i }), H)
        : {
            vtag: t,
            vchildren: i,
            vtext: void 0,
            vattrs: e,
            vkey: n,
            vname: o,
            c: void 0,
            l: !1,
          };
    }
    function f(t) {
      return {
        vtag: t.vtag,
        vchildren: t.vchildren,
        vtext: t.vtext,
        vattrs: t.vattrs,
        vkey: t.vkey,
        vname: t.vname,
      };
    }
    function u(t, e, n, o) {
      e.split(" ").forEach((e) => {
        (t[e] = !0),
          n &&
            ((t[`${e}-${n}`] = !0),
            o && (t[`${e}-${n}-${o}`] = t[`${e}-${o}`] = !0));
      });
    }
    function a(t, e) {
      t.f.has(e) ||
        (t.f.set(e, !0),
        t.u ? t.queue.write(() => d(t, e)) : t.queue.tick(() => d(t, e)));
    }
    function d(t, e, n, o, i, r) {
      if ((t.f.delete(e), !t.a.has(e))) {
        if (((o = t.d.get(e)), (n = !o))) {
          if (
            ((i = t.s.get(e)) && i.$rendered && (i["s-rn"] = !0),
            i && !i["s-rn"])
          )
            return (
              (i["s-rc"] = i["s-rc"] || []).push(() => {
                d(t, e);
              }),
              void (i.$onRender = i["s-rc"])
            );
          o = (function s(t, e, n, o, i, r, c) {
            try {
              (function l(t, e, n, o, i, r, s) {
                for (s in (t.p.set(o, n),
                t.m.has(n) || t.m.set(n, {}),
                ((r = Object.assign(
                  { color: { type: String } },
                  e.properties
                )).mode = { type: String }),
                r))
                  m(t, r[s], n, o, s, i);
              })(t, (i = t.b(e).v), e, (o = new i()), n),
                (function f(t, e, n) {
                  if (e) {
                    const o = t.p.get(n);
                    e.forEach((e) => {
                      n[e.method] = {
                        emit: (n) => {
                          t.y(o, e.name, {
                            bubbles: e.bubbles,
                            composed: e.composed,
                            cancelable: e.cancelable,
                            detail: n,
                          });
                        },
                      };
                    });
                  }
                })(t, i.events, o);
              try {
                if ((r = t.w.get(e))) {
                  for (c = 0; c < r.length; c += 2) o[r[c]](r[c + 1]);
                  t.w.delete(e);
                }
              } catch (n) {
                t.g(n, 2, e);
              }
            } catch (n) {
              (o = {}), t.g(n, 7, e, !0);
            }
            return t.d.set(e, o), o;
          })(t, e, t.k.get(e));
          try {
            o.componentWillLoad && (r = o.componentWillLoad());
          } catch (n) {
            t.g(n, 3, e);
          }
        } else
          try {
            o.componentWillUpdate && (r = o.componentWillUpdate());
          } catch (n) {
            t.g(n, 5, e);
          }
        r && r.then ? r.then(() => p(t, e, o, n)) : p(t, e, o, n);
      }
    }
    function p(t, e, n, o) {
      (function i(t, e, n, o) {
        try {
          const i = e.v.host,
            r = e.v.encapsulation,
            s = "shadow" === r && t.j.M;
          let c, f;
          if (
            ((c = (function i(t, e, n) {
              return (
                t &&
                  Object.keys(t).forEach((o) => {
                    t[o].reflectToAttr && ((n = n || {})[o] = e[o]);
                  }),
                n
              );
            })(e.v.properties, o)),
            (f = s ? n.shadowRoot : n),
            !n["s-rn"])
          ) {
            t.C(t, t.j, e, n);
            const i = n["s-sc"];
            i &&
              (t.j.O(
                n,
                (function r(t) {
                  return `${t}-host`;
                })(i),
                ""
              ),
              o.render ||
                t.j.O(
                  n,
                  (function s(t) {
                    return `${t}-slot`;
                  })(i),
                  ""
                ));
          }
          if (o.render || o.hostData || i || c) {
            t.x = !0;
            const a = o.render && o.render();
            let d;
            if ((d = o.hostData && o.hostData()) && e.N) {
              const t = Object.keys(d).reduce((t, n) => {
                return e.N[n] ? t.concat(n) : e.N[q(n)] ? t.concat(q(n)) : t;
              }, []);
              if (t.length > 0)
                throw new Error(
                  "The following keys were attempted to be set with hostData() from the " +
                    `${e.t} component: ${t.join(", ")}. ` +
                    "If you would like to modify these please set @Prop({ mutable: true, reflectToAttr: true}) on the @Prop() decorator."
                );
            }
            c && (d = d ? Object.assign(d, c) : c),
              (t.x = !1),
              i &&
                (d = (function c(t, e, n) {
                  return (
                    (t = t || {}),
                    Object.keys(e).forEach((o) => {
                      "theme" === o
                        ? u((t.class = t.class || {}), e[o], n.mode, n.color)
                        : "class" === o
                        ? u((t[o] = t[o] || {}), e[o])
                        : (t[o] = e[o]);
                    }),
                    t
                  );
                })(d, i, o));
            const p = t.W.get(n) || {};
            p.c = f;
            const m = l(null, d, a);
            (m.l = !0), t.W.set(n, t.render(n, p, m, s, r));
          }
          t.P && t.P.T(n),
            (n["s-rn"] = !0),
            n.$onRender && (n["s-rc"] = n.$onRender),
            n["s-rc"] && (n["s-rc"].forEach((t) => t()), (n["s-rc"] = null));
        } catch (e) {
          (t.x = !1), t.g(e, 8, n, !0);
        }
      })(t, t.b(e), e, n);
      try {
        o
          ? e["s-init"]()
          : (n.componentDidUpdate && n.componentDidUpdate(), j(t.W.get(e))),
          e["s-hmr-load"] && e["s-hmr-load"]();
      } catch (n) {
        t.g(n, 6, e, !0);
      }
    }
    function m(t, e, n, o, i, r, c, l) {
      if (e.type || e.state) {
        const f = t.m.get(n);
        e.state ||
          (!e.attr ||
            (void 0 !== f[i] && "" !== f[i]) ||
            ((c = r && r.S) && L((l = c[e.attr])) && (f[i] = s(e.type, l))),
          n.hasOwnProperty(i) &&
            (void 0 === f[i] && (f[i] = s(e.type, n[i])),
            "mode" !== i && delete n[i])),
          o.hasOwnProperty(i) && void 0 === f[i] && (f[i] = o[i]),
          e.watchCallbacks && (f[F + i] = e.watchCallbacks.slice()),
          b(
            o,
            i,
            function f(e) {
              return (e = t.m.get(t.p.get(this))) && e[i];
            },
            function u(n, o) {
              (o = t.p.get(this)) && (e.state || e.mutable) && v(t, o, i, n);
            }
          );
      } else if (e.elementRef) h(o, i, n);
      else if (e.method) h(n, i, o[i].bind(o));
      else if (e.context) {
        const r = t.A(e.context);
        void 0 !== r && h(o, i, (r.R && r.R(n)) || r);
      } else e.connect && h(o, i, t.L(e.connect));
    }
    function v(t, e, n, o, i, r, s) {
      (i = t.m.get(e)) || t.m.set(e, (i = {}));
      const c = i[n];
      if (o !== c && ((i[n] = o), (r = t.d.get(e)))) {
        if ((s = i[F + n]))
          for (let t = 0; t < s.length; t++)
            try {
              r[s[t]].call(r, o, c, n);
            } catch (t) {}
        !t.x && e["s-rn"] && a(t, e);
      }
    }
    function h(t, e, n) {
      Object.defineProperty(t, e, { configurable: !0, value: n });
    }
    function b(t, e, n, o) {
      Object.defineProperty(t, e, { configurable: !0, get: n, set: o });
    }
    function y(t, e, n, o, i) {
      const r = e !== (e = e.replace(/^xlink\:?/, "")),
        s = U[e] || o;
      (s && (!n || "false" === n)) || i
        ? r
          ? t.removeAttributeNS(z, D(e))
          : t.removeAttribute(e)
        : "function" != typeof n &&
          (s && (n = ""),
          r ? t.setAttributeNS(z, D(e), n) : t.setAttribute(e, n));
    }
    function $(t, e, n, o, i, r, s) {
      if ("class" !== n || r)
        if ("style" === n) {
          for (const t in o)
            (i && null != i[t]) ||
              (/-/.test(t) ? e.style.D(t) : (e.style[t] = ""));
          for (const t in i)
            (o && i[t] === o[t]) ||
              (/-/.test(t)
                ? e.style.setProperty(t, i[t])
                : (e.style[t] = i[t]));
        } else if (
          "o" !== n[0] ||
          "n" !== n[1] ||
          !/[A-Z]/.test(n[2]) ||
          n in e
        )
          if (
            "list" !== n &&
            "type" !== n &&
            !r &&
            (n in e ||
              (-1 !== ["object", "function"].indexOf(typeof i) && null !== i))
          ) {
            const o = t.b(e);
            o && o.N && o.N[n]
              ? (g(e, n, i),
                s && o.N[n].q && y(e, o.N[n].I, i, 3 === o.N[n].B, null == i))
              : "ref" !== n &&
                (g(e, n, null == i ? "" : i),
                (null != i && !1 !== i) || t.j.H(e, n));
          } else
            null != i && "key" !== n
              ? y(e, n, i)
              : (r || (t.j.F(e, n) && (null == i || !1 === i))) && t.j.H(e, n);
        else
          (n = D(n) in e ? D(n.substring(2)) : D(n[2]) + n.substring(3)),
            i ? i !== o && t.j.U(e, n, i) : t.j.z(e, n);
      else if (o !== i) {
        const t = w(o),
          n = w(i),
          r = t.filter((t) => !n.includes(t)),
          s = w(e.className).filter((t) => !r.includes(t)),
          c = n.filter((e) => !t.includes(e) && !s.includes(e));
        s.push(...c), (e.className = s.join(" "));
      }
    }
    function w(t) {
      return null == t || "" === t ? [] : t.trim().split(/\s+/);
    }
    function g(t, e, n) {
      try {
        t[e] = n;
      } catch (t) {}
    }
    function k(t, e, n, o, i) {
      const r = 11 === n.c.nodeType && n.c.host ? n.c.host : n.c,
        s = (e && e.vattrs) || A,
        c = n.vattrs || A;
      for (i in s)
        (c && null != c[i]) || null == s[i] || $(t, r, i, s[i], void 0, o, n.l);
      for (i in c)
        (i in s && c[i] === ("value" === i || "checked" === i ? r[i] : s[i])) ||
          $(t, r, i, s[i], c[i], o, n.l);
    }
    function M(t, e) {
      function n(i, r, s, c, l, f, p, b, y) {
        if (
          ((b = r.vchildren[s]),
          u ||
            ((m = !0),
            "slot" === b.vtag &&
              (d && e.O(c, d + "-slot", ""),
              b.vchildren ? (b.Q = !0) : (b.Z = !0))),
          L(b.vtext))
        )
          b.c = e.G(b.vtext);
        else if (b.Z) b.c = e.G("");
        else {
          if (
            ((f = b.c =
              Q || "svg" === b.vtag
                ? e.J("http://www.w3.org/2000/svg", b.vtag)
                : e.K(b.Q ? "slot-fb" : b.vtag)),
            (Q = "svg" === b.vtag || ("foreignObject" !== b.vtag && Q)),
            k(t, null, b, Q),
            L(d) && f["s-si"] !== d && e.O(f, (f["s-si"] = d), ""),
            L(a) &&
              e.O(
                f,
                T,
                a +
                  "." +
                  s +
                  ((function t(e) {
                    if (e)
                      for (var n = 0; n < e.length; n++)
                        if ("slot" !== e[n].vtag || t(e[n].vchildren))
                          return !0;
                    return !1;
                  })(b.vchildren)
                    ? ""
                    : ".")
              ),
            b.vchildren)
          )
            for (l = 0; l < b.vchildren.length; ++l)
              (p = n(i, b, l, f)) &&
                (L(a) &&
                  3 === p.nodeType &&
                  !p["s-cr"] &&
                  e.V(f, e.X("s." + a + "." + l)),
                e.V(f, p),
                L(a) &&
                  3 === p.nodeType &&
                  !p["s-cr"] &&
                  (e.V(f, e.X("/")), e.V(f, e.G(" "))));
          "svg" === b.vtag && (Q = !1);
        }
        return (
          (b.c["s-hn"] = v),
          (b.Q || b.Z) &&
            ((b.c["s-sr"] = !0),
            (b.c["s-cr"] = h),
            (b.c["s-sn"] = b.vname || ""),
            (y = i && i.vchildren && i.vchildren[s]) &&
              y.vtag === b.vtag &&
              i.c &&
              o(i.c)),
          b.c
        );
      }
      function o(n, i, r, s) {
        t.Y = !0;
        const f = e._(n);
        for (r = f.length - 1; r >= 0; r--)
          (s = f[r])["s-hn"] !== v &&
            s["s-ol"] &&
            (e.tt(s),
            e.et(l(s), s, c(s)),
            e.tt(s["s-ol"]),
            (s["s-ol"] = null),
            (m = !0)),
            i && o(s, i);
        t.Y = !1;
      }
      function i(t, o, i, r, s, l, f, u) {
        const a = t["s-cr"] || t.$defaultHolder;
        for (
          (f = (a && e.nt(a)) || t).shadowRoot &&
          e.ot(f) === v &&
          (f = f.shadowRoot);
          s <= l;
          ++s
        )
          r[s] &&
            (u = L(r[s].vtext) ? e.G(r[s].vtext) : n(null, i, s, t)) &&
            ((r[s].c = u), e.et(f, u, c(o)));
      }
      function r(t, n, i, r) {
        for (; n <= i; ++n)
          L(t[n]) &&
            ((r = t[n].c),
            (p = !0),
            r["s-ol"] ? e.tt(r["s-ol"]) : o(r, !0),
            e.tt(r));
      }
      function s(t, e) {
        return (
          t.vtag === e.vtag &&
          t.vkey === e.vkey &&
          ("slot" !== t.vtag || t.vname === e.vname)
        );
      }
      function c(t) {
        return t && t["s-ol"] ? t["s-ol"] : t;
      }
      function l(t) {
        return e.nt(t["s-ol"] ? t["s-ol"] : t);
      }
      const f = [];
      let u, a, d, p, m, v, h;
      return function b(y, $, w, g, M, j, C, O, x, N, W, E) {
        if (
          ((v = e.ot(y)),
          (h = y["s-cr"]),
          (u = g),
          (a = "shadow" !== M ? j : null),
          (d = y["s-sc"]),
          (m = p = !1),
          (function f(u, a, d) {
            const p = (a.c = u.c),
              m = u.vchildren,
              v = a.vchildren;
            (Q = a.c && L(e.it(a.c)) && void 0 !== a.c.ownerSVGElement),
              (Q = "svg" === a.vtag || ("foreignObject" !== a.vtag && Q)),
              L(a.vtext)
                ? (d = p["s-cr"] || p.$defaultHolder)
                  ? e.rt(e.nt(d), a.vtext)
                  : u.vtext !== a.vtext && e.rt(p, a.vtext)
                : ("slot" !== a.vtag && k(t, u, a, Q),
                  L(m) && L(v)
                    ? (function h(t, u, a, d, p, m, v, b) {
                        let y = 0,
                          $ = 0,
                          w = u.length - 1,
                          g = u[0],
                          k = u[w],
                          M = d.length - 1,
                          j = d[0],
                          C = d[M];
                        for (; y <= w && $ <= M; )
                          if (null == g) g = u[++y];
                          else if (null == k) k = u[--w];
                          else if (null == j) j = d[++$];
                          else if (null == C) C = d[--M];
                          else if (s(g, j)) f(g, j), (g = u[++y]), (j = d[++$]);
                          else if (s(k, C)) f(k, C), (k = u[--w]), (C = d[--M]);
                          else if (s(g, C))
                            ("slot" !== g.vtag && "slot" !== C.vtag) ||
                              o(e.nt(g.c)),
                              f(g, C),
                              e.et(t, g.c, e.st(k.c)),
                              (g = u[++y]),
                              (C = d[--M]);
                          else if (s(k, j))
                            ("slot" !== g.vtag && "slot" !== C.vtag) ||
                              o(e.nt(k.c)),
                              f(k, j),
                              e.et(t, k.c, g.c),
                              (k = u[--w]),
                              (j = d[++$]);
                          else {
                            for (p = null, m = y; m <= w; ++m)
                              if (
                                u[m] &&
                                L(u[m].vkey) &&
                                u[m].vkey === j.vkey
                              ) {
                                p = m;
                                break;
                              }
                            L(p)
                              ? ((b = u[p]).vtag !== j.vtag
                                  ? (v = n(u && u[$], a, p, t))
                                  : (f(b, j), (u[p] = void 0), (v = b.c)),
                                (j = d[++$]))
                              : ((v = n(u && u[$], a, $, t)), (j = d[++$])),
                              v && e.et(l(g.c), v, c(g.c));
                          }
                        y > w
                          ? i(
                              t,
                              null == d[M + 1] ? null : d[M + 1].c,
                              a,
                              d,
                              $,
                              M
                            )
                          : $ > M && r(u, y, w);
                      })(p, m, a, v)
                    : L(v)
                    ? (L(u.vtext) && e.rt(p, ""),
                      i(p, null, a, v, 0, v.length - 1))
                    : L(m) && r(m, 0, m.length - 1)),
              Q && "svg" === a.vtag && (Q = !1);
          })($, w),
          L(a) && e.O($.c, P, a),
          m)
        ) {
          for (
            (function t(n, o, i, r, s, c, l, u, a, d) {
              for (s = 0, c = (o = e._(n)).length; s < c; s++) {
                if ((i = o[s])["s-sr"] && (r = i["s-cr"]))
                  for (
                    u = e._(e.nt(r)), a = i["s-sn"], l = u.length - 1;
                    l >= 0;
                    l--
                  )
                    (r = u[l])["s-cn"] ||
                      r["s-nr"] ||
                      r["s-hn"] === i["s-hn"] ||
                      ((((3 === (d = e.ct(r)) || 8 === d) && "" === a) ||
                        (1 === d && null === e.lt(r, "slot") && "" === a) ||
                        (1 === d && e.lt(r, "slot") === a)) &&
                        (f.some((t) => t.ft === r) ||
                          ((p = !0),
                          (r["s-sn"] = a),
                          f.push({ ut: i, ft: r }))));
                1 === e.ct(i) && t(i);
              }
            })(w.c),
              C = 0;
            C < f.length;
            C++
          )
            (O = f[C]).ft["s-ol"] ||
              (((x = e.G(""))["s-nr"] = O.ft),
              e.et(e.nt(O.ft), (O.ft["s-ol"] = x), O.ft));
          for (t.Y = !0, C = 0; C < f.length; C++) {
            for (
              O = f[C], W = e.nt(O.ut), E = e.st(O.ut), x = O.ft["s-ol"];
              (x = e.at(x));

            )
              if (
                (N = x["s-nr"]) &&
                N &&
                N["s-sn"] === O.ft["s-sn"] &&
                W === e.nt(N) &&
                (N = e.st(N)) &&
                N &&
                !N["s-nr"]
              ) {
                E = N;
                break;
              }
            ((!E && W !== e.nt(O.ft)) || e.st(O.ft) !== E) &&
              O.ft !== E &&
              (e.tt(O.ft), e.et(W, O.ft, E));
          }
          t.Y = !1;
        }
        return (
          p &&
            (function t(n, o, i, r, s, c, l, f) {
              for (r = 0, s = (i = e._(n)).length; r < s; r++)
                if (((o = i[r]), 1 === e.ct(o))) {
                  if (o["s-sr"])
                    for (l = o["s-sn"], o.hidden = !1, c = 0; c < s; c++)
                      if (i[c]["s-hn"] !== o["s-hn"])
                        if (((f = e.ct(i[c])), "" !== l)) {
                          if (1 === f && l === e.lt(i[c], "slot")) {
                            o.hidden = !0;
                            break;
                          }
                        } else if (
                          1 === f ||
                          (3 === f && "" !== e.dt(i[c]).trim())
                        ) {
                          o.hidden = !0;
                          break;
                        }
                  t(o);
                }
            })(w.c),
          (f.length = 0),
          w
        );
      };
    }
    function j(t, e) {
      t &&
        (t.vattrs && t.vattrs.ref && t.vattrs.ref(e ? null : t.c),
        t.vchildren &&
          t.vchildren.forEach((t) => {
            j(t, e);
          }));
    }
    function C(t, e, n, o, i) {
      const r = t.ct(e);
      let s, c, l, f;
      if (i && 1 === r) {
        (c = t.lt(e, T)) &&
          (l = c.split("."))[0] === o &&
          (((f = {}).vtag = t.ot((f.c = e))),
          n.vchildren || (n.vchildren = []),
          (n.vchildren[l[1]] = f),
          (n = f),
          (i = "" !== l[2]));
        for (let r = 0; r < e.childNodes.length; r++)
          C(t, e.childNodes[r], n, o, i);
      } else
        3 === r &&
          (s = e.previousSibling) &&
          8 === t.ct(s) &&
          "s" === (l = t.dt(s).split("."))[0] &&
          l[1] === o &&
          (((f = { vtext: t.dt(e) }).c = e),
          n.vchildren || (n.vchildren = []),
          (n.vchildren[l[2]] = f));
    }
    function O(t, e) {
      const n = t.b(e);
      n.pt &&
        n.pt.forEach((n) => {
          n.o ||
            t.j.U(
              e,
              n.e,
              (function o(t, e, n, i) {
                return (o) => {
                  (i = t.d.get(e))
                    ? i[n](o)
                    : ((i = t.w.get(e) || []).push(n, o), t.w.set(e, i));
                };
              })(t, e, n.n),
              n.r,
              n.i
            );
        });
    }
    function x(t, e) {
      const n = { nodeName: e },
        o = t.b(n);
      if (!o || !o.v) return Promise.resolve(null);
      const i = o.v,
        r = (function s(t) {
          return Object.keys(t).reduce(
            (e, n) => {
              const o = t[n];
              let i;
              const r = { name: n };
              if (o.state) (i = "states"), (r.mt = o.watchCallbacks || []);
              else if (o.elementRef) i = "elements";
              else if (o.method) i = "methods";
              else {
                i = "props";
                let t = "any";
                o.type &&
                  ((t = o.type),
                  "function" == typeof o.type && (t = o.type.name)),
                  (r.type = t.toLowerCase()),
                  (r.mutable = o.mutable || !1),
                  (r.connect = o.connect || "-"),
                  (r.context = o.connect || "-"),
                  (r.mt = o.watchCallbacks || []);
              }
              return e[i].push(r), e;
            },
            { vt: [], ht: [], bt: [], yt: [] }
          );
        })(i.properties || {}),
        c = (o.pt || []).map((t) => {
          return {
            $t: t.e,
            capture: t.r,
            disabled: t.o,
            passive: t.i,
            method: t.n,
          };
        }),
        l = i.events || [],
        f = Object.assign(
          {
            wt: i.is,
            gt: o.kt || "unknown",
            encapsulation: i.encapsulation || "none",
          },
          r,
          { events: { Mt: l, listeners: c } }
        );
      return Promise.resolve(f);
    }
    function N(t, e, n, o, i) {
      return (
        n.mode || (n.mode = t.jt(n)),
        n["s-cr"] ||
          t.lt(n, P) ||
          (t.M && 1 === e.encapsulation) ||
          ((n["s-cr"] = t.G("")),
          (n["s-cr"]["s-cn"] = !0),
          t.et(n, n["s-cr"], t._(n)[0])),
        t.M ||
          1 !== e.encapsulation ||
          "shadowRoot" in HTMLElement.prototype ||
          (n.shadowRoot = n),
        1 === e.encapsulation &&
          t.M &&
          !n.shadowRoot &&
          t.Ct(n, { mode: "open" }),
        (o = { Ot: n["s-id"], S: {} }),
        e.N &&
          Object.keys(e.N).forEach((r) => {
            (i = e.N[r].I) && (o.S[i] = t.lt(n, i));
          }),
        o
      );
    }
    function W(t, e, n, o) {
      (n.connectedCallback = function () {
        (function n(t, e, o) {
          t.xt.has(o) || (t.xt.set(o, !0), O(t, o)),
            t.a.delete(o),
            t.Nt.has(o) ||
              (t.Nt.set(o, !0),
              o["s-id"] || (o["s-id"] = t.Wt()),
              (function i(t, e, n) {
                for (n = e; (n = t.j.it(n)); )
                  if (t.Et(n)) {
                    t.Pt.has(e) ||
                      (t.s.set(e, n),
                      n.$activeLoading && (n["s-ld"] = n.$activeLoading),
                      (n["s-ld"] = n["s-ld"] || []).push(e));
                    break;
                  }
              })(t, o),
              t.queue.tick(() => {
                t.k.set(o, N(t.j, e, o)), t.Tt(e, o);
              }));
        })(t, e, this);
      }),
        (n.attributeChangedCallback = function (t, n, o) {
          (function i(t, e, n, o, r, c, l) {
            if (t && o !== r)
              for (c in t)
                if ((l = t[c]).I && D(l.I) === D(n)) {
                  e[c] = s(l.B, r);
                  break;
                }
          })(e.N, this, t, n, o);
        }),
        (n.disconnectedCallback = function () {
          (function e(t, n) {
            if (
              !t.Y &&
              (function o(t, e) {
                for (; e; ) {
                  if (!t.nt(e)) return 9 !== t.ct(e);
                  e = t.nt(e);
                }
              })(t.j, n)
            ) {
              t.a.set(n, !0),
                c(t, n),
                j(t.W.get(n), !0),
                t.j.z(n),
                t.xt.delete(n);
              {
                const e = t.d.get(n);
                e && e.componentDidUnload && e.componentDidUnload();
              }
              t.P && t.P.St(n), [t.s, t.At, t.k].forEach((t) => t.delete(n));
            }
          })(t, this);
        }),
        (n["s-init"] = function () {
          (function e(t, n, o, i, r) {
            if (
              !t.Pt.has(n) &&
              (i = t.d.get(n)) &&
              !t.a.has(n) &&
              (!n["s-ld"] || !n["s-ld"].length)
            ) {
              delete n["s-ld"], t.Pt.set(n, !0);
              try {
                j(t.W.get(n)),
                  (r = t.At.get(n)) && (r.forEach((t) => t(n)), t.At.delete(n)),
                  i.componentDidLoad && i.componentDidLoad();
              } catch (e) {
                t.g(e, 4, n);
              }
              n.classList.add(o), c(t, n);
            }
          })(t, this, o);
        }),
        (n["s-hmr"] = function (n) {
          (function o(t, e, n, i) {
            (e.v = null), t.Pt.delete(n);
            const r = t.d.get(n);
            r && (t.p.delete(r), t.d.delete(n)),
              t.j.z(n),
              t.xt.delete(n),
              (e.pt = null),
              (n["s-hmr-load"] = () => {
                delete n["s-hmr-load"],
                  (function o(t, e, n) {
                    t.xt.has(n) ||
                      (t.xt.set(n, !0),
                      e.v &&
                        e.v.listeners &&
                        ((e.pt = e.v.listeners.map((t) => {
                          return {
                            n: t.method,
                            e: t.name,
                            r: !!t.capture,
                            i: !!t.passive,
                            o: !!t.disabled,
                          };
                        })),
                        O(t, n)));
                  })(t, e, n);
              }),
              t.k.set(n, N(t.j, e, n)),
              t.Tt(e, n, i);
          })(t, e, this, n);
        }),
        (n.forceUpdate = function () {
          a(t, this);
        }),
        (function i(t, e, n) {
          e &&
            Object.keys(e).forEach((o) => {
              const i = e[o],
                r = i.Rt;
              1 === r || 2 === r
                ? b(
                    n,
                    o,
                    function e() {
                      return (t.m.get(this) || {})[o];
                    },
                    function e(n) {
                      v(t, this, o, s(i.B, n));
                    }
                  )
                : 6 === r && h(n, o, I);
            });
        })(t, e.N, n);
    }
    function E(t, e, n, o) {
      return function () {
        const i = arguments;
        return (function r(t, e, n) {
          let o = e[n];
          const i = t.Lt.body;
          return i
            ? (o || (o = i.querySelector(n)),
              o || ((o = e[n] = t.K(n)), t.V(i, o)),
              o.componentOnReady())
            : Promise.resolve();
        })(t, e, n).then((t) => t[o].apply(t, i));
      };
    }
    const P = "data-ssrv",
      T = "data-ssrc",
      S = "$",
      A = {},
      R = {
        enter: 13,
        escape: 27,
        space: 32,
        tab: 9,
        left: 37,
        up: 38,
        right: 39,
        down: 40,
      },
      L = (t) => null != t,
      D = (t) => t.toLowerCase(),
      q = (t) =>
        D(t)
          .split("-")
          .map((t) => t.charAt(0).toUpperCase() + t.slice(1))
          .join(""),
      I = () => {},
      B = [],
      H = {
        forEach: (t, e) => {
          t.forEach((t) => e(f(t)));
        },
        map: (t, e) => {
          return t.map((t) =>
            (function n(t) {
              return {
                vtag: t.vtag,
                vchildren: t.vchildren,
                vtext: t.vtext,
                vattrs: t.vattrs,
                vkey: t.vkey,
                vname: t.vname,
              };
            })(e(f(t)))
          );
        },
      },
      F = "wc-",
      U = {
        allowfullscreen: 1,
        async: 1,
        autofocus: 1,
        autoplay: 1,
        checked: 1,
        controls: 1,
        disabled: 1,
        enabled: 1,
        formnovalidate: 1,
        hidden: 1,
        multiple: 1,
        noresize: 1,
        readonly: 1,
        required: 1,
        selected: 1,
        spellcheck: 1,
      },
      z = "http://www.w3.org/1999/xlink";
    let Q = !1;
    (function Z(t, e, n, o, s, c) {
      function f(t, e) {
        if (!n.customElements.get(t.t)) {
          W(y, (u[t.t] = t), e.prototype, c);
          {
            const n = (e.observedAttributes = []);
            for (const e in t.N) t.N[e].I && n.push(t.N[e].I);
          }
          n.customElements.define(t.t, e);
        }
      }
      const u = { html: {} },
        d = {},
        p = (n[t] = n[t] || {}),
        m = (function v(t, e, n) {
          t.Dt ||
            ((t.Dt = (t, e, n, o) => t.addEventListener(e, n, o)),
            (t.qt = (t, e, n, o) => t.removeEventListener(e, n, o)));
          const o = new WeakMap(),
            i = {
              Lt: n,
              It: !1,
              ct: (t) => t.nodeType,
              K: (t) => n.createElement(t),
              J: (t, e) => n.createElementNS(t, e),
              G: (t) => n.createTextNode(t),
              X: (t) => n.createComment(t),
              et: (t, e, n) => t.insertBefore(e, n),
              tt: (t) => t.remove(),
              V: (t, e) => t.appendChild(e),
              _: (t) => t.childNodes,
              nt: (t) => t.parentNode,
              st: (t) => t.nextSibling,
              at: (t) => t.previousSibling,
              ot: (t) => D(t.nodeName),
              dt: (t) => t.textContent,
              rt: (t, e) => (t.textContent = e),
              lt: (t, e) => t.getAttribute(e),
              O: (t, e, n) => t.setAttribute(e, n),
              Bt: (t, e, n, o) => t.setAttributeNS(e, n, o),
              H: (t, e) => t.removeAttribute(e),
              F: (t, e) => t.hasAttribute(e),
              jt: (e) => e.getAttribute("mode") || (t.Context || {}).mode,
              Ht: (t, o) => {
                return "child" === o
                  ? t.firstElementChild
                  : "parent" === o
                  ? i.it(t)
                  : "body" === o
                  ? n.body
                  : "document" === o
                  ? n
                  : "window" === o
                  ? e
                  : t;
              },
              U: (e, n, r, s, c, l, f, u) => {
                const a = n;
                let d = e,
                  p = o.get(e);
                if (
                  (p && p[a] && p[a](),
                  "string" == typeof l
                    ? (d = i.Ht(e, l))
                    : "object" == typeof l
                    ? (d = l)
                    : (u = n.split(":")).length > 1 &&
                      ((d = i.Ht(e, u[0])), (n = u[1])),
                  !d)
                )
                  return;
                let m = r;
                (u = n.split(".")).length > 1 &&
                  ((n = u[0]),
                  (m = (t) => {
                    t.keyCode === R[u[1]] && r(t);
                  })),
                  (f = i.It ? { capture: !!s, passive: !!c } : !!s),
                  t.Dt(d, n, m, f),
                  p || o.set(e, (p = {})),
                  (p[a] = () => {
                    d && t.qt(d, n, m, f), (p[a] = null);
                  });
              },
              z: (t, e) => {
                const n = o.get(t);
                n &&
                  (e
                    ? n[e] && n[e]()
                    : Object.keys(n).forEach((t) => {
                        n[t] && n[t]();
                      }));
              },
              Ct: (t, e) => t.attachShadow(e),
            };
          (i.M = !!i.Lt.documentElement.attachShadow),
            e.location.search.indexOf("shadow=false") > 0 && (i.M = !1),
            (i.Ft = (t, n, o) => t && t.dispatchEvent(new e.CustomEvent(n, o)));
          try {
            e.addEventListener(
              "e",
              null,
              Object.defineProperty({}, "passive", { get: () => (i.It = !0) })
            );
          } catch (t) {}
          return (
            (i.it = (t, e) => ((e = i.nt(t)) && 11 === i.ct(e) ? e.host : e)), i
          );
        })(p, n, o);
      (e.isServer = e.isPrerender = !(e.isClient = !0)),
        (e.window = n),
        (e.location = n.location),
        (e.document = o),
        (e.resourcesUrl = e.publicPath = s),
        (e.enableListener = (t, e, n, o, i) =>
          (function r(t, e, n, o, i, s) {
            if (e) {
              const r = t.p.get(e),
                c = t.b(r);
              if (c && c.pt)
                if (o) {
                  const o = c.pt.find((t) => t.e === n);
                  o &&
                    t.j.U(
                      r,
                      n,
                      (t) => e[o.n](t),
                      o.r,
                      void 0 === s ? o.i : !!s,
                      i
                    );
                } else t.j.z(r, n);
            }
          })(y, t, e, n, o, i)),
        (e.emit = (t, n, o) =>
          m.Ft(t, e.eventNameFn ? e.eventNameFn(n) : n, o)),
        (p.h = l),
        (p.Context = e);
      const h =
        (n["s-defined"] =
        n.$definedCmps =
          n["s-defined"] || n.$definedCmps || {});
      let b = 0;
      const y = {
        j: m,
        Ut: f,
        y: e.emit,
        b: (t) => u[m.ot(t)],
        A: (t) => e[t],
        isClient: !0,
        Et: (t) => !(!h[m.ot(t)] && !y.b(t)),
        Wt: () => t + b++,
        g: (t, e, n) => void 0,
        L: (t) =>
          (function e(t, n, o) {
            return {
              create: E(t, n, o, "create"),
              componentOnReady: E(t, n, o, "componentOnReady"),
            };
          })(m, d, t),
        queue: (e.queue = (function $(t, e) {
          function n(t) {
            for (let e = 0; e < t.length; e++)
              try {
                t[e]();
              } catch (t) {}
            t.length = 0;
          }
          function o(t, e) {
            let n = 0;
            for (; n < t.length && r() < e; )
              try {
                t[n++]();
              } catch (t) {}
            n === t.length ? (t.length = 0) : 0 !== n && t.splice(0, n);
          }
          function i() {
            a++, n(l);
            const e = r() + 7 * Math.ceil(a * (1 / 22));
            o(f, e),
              o(u, e),
              f.length > 0 && (u.push(...f), (f.length = 0)),
              (d = l.length + f.length + u.length > 0) ? t.raf(i) : (a = 0);
          }
          const r = () => e.performance.now(),
            s = Promise.resolve(),
            c = [],
            l = [],
            f = [],
            u = [];
          let a = 0,
            d = !1;
          return (
            t.raf || (t.raf = e.requestAnimationFrame.bind(e)),
            {
              tick(t) {
                c.push(t), 1 === c.length && s.then(() => n(c));
              },
              read(e) {
                l.push(e), d || ((d = !0), t.raf(i));
              },
              write(e) {
                f.push(e), d || ((d = !0), t.raf(i));
              },
            }
          );
        })(p, n)),
        Tt: function w(t, e, n) {
          if (t.v) a(y, e);
          else {
            const o = "string" == typeof t.kt ? t.kt : t.kt[e.mode],
              i = 2 === t.encapsulation || (1 === t.encapsulation && !m.M);
            let r = s + o + (i ? ".sc" : "") + ".js";
            n && (r += "?s-hmr=" + n),
              import(r)
                .then((n) => {
                  try {
                    (t.v = n[q(t.t)]),
                      (function o(t, e, n, i, r) {
                        if (i) {
                          const o = e.t + (r || S);
                          if (!e[o]) {
                            const s = t.K("template");
                            e[o] = s;
                            {
                              const o = ["<style", ` data-style-tag="${e.t}"`];
                              t.O(s, "data-tmpl-style-tag", e.t),
                                r &&
                                  (o.push(` data-style-mode="${r}"`),
                                  t.O(s, "data-tmpl-style-mode", r)),
                                (2 === n || (1 === n && !t.M)) &&
                                  (o.push(' data-style-scoped="true"'),
                                  t.O(s, "data-tmpl-style-scoped", "true")),
                                o.push(">"),
                                o.push(i),
                                o.push("</style>"),
                                (s.innerHTML = o.join(""));
                            }
                            t.V(t.Lt.head, s);
                          }
                        }
                      })(m, t, t.encapsulation, t.v.style, t.v.styleMode);
                  } catch (e) {
                    t.v = class {};
                  }
                  a(y, e);
                })
                .catch((t) => void 0);
          }
        },
        s: new WeakMap(),
        zt: new WeakMap(),
        Nt: new WeakMap(),
        xt: new WeakMap(),
        Pt: new WeakMap(),
        p: new WeakMap(),
        k: new WeakMap(),
        d: new WeakMap(),
        a: new WeakMap(),
        f: new WeakMap(),
        At: new WeakMap(),
        w: new WeakMap(),
        W: new WeakMap(),
        m: new WeakMap(),
      };
      y.render = M(y, m);
      const g = m.Lt.documentElement;
      (g["s-ld"] = []),
        (g["s-rn"] = !0),
        (g["s-init"] = () => {
          y.Pt.set(g, (p.loaded = y.u = !0)),
            m.Ft(n, "appload", { detail: { namespace: t } });
        }),
        (function k(t, e, n) {
          const o = n.querySelectorAll(`[${P}]`),
            i = o.length;
          let r, s, c, l, f, u;
          if (i > 0)
            for (t.Pt.set(n, !0), l = 0; l < i; l++)
              for (
                r = o[l],
                  s = e.lt(r, P),
                  (c = {}).vtag = e.ot((c.c = r)),
                  t.W.set(r, c),
                  f = 0,
                  u = r.childNodes.length;
                f < u;
                f++
              )
                C(e, r.childNodes[f], c, s, !0);
        })(y, m, g),
        (y.C = (t, e, n, o) => {
          (function r(t, e, n, o) {
            const r = n.encapsulation,
              s = 2 === r || (1 === r && !t.j.M);
            let c = n.t + o.mode,
              l = n[c];
            if (
              (s && (o["s-sc"] = i(n, o.mode)),
              l || ((l = n[(c = n.t + S)]), s && (o["s-sc"] = i(n))),
              l)
            ) {
              let n = e.Lt.head;
              if (e.M)
                if (1 === r) n = o.shadowRoot;
                else {
                  let t = o;
                  for (; (t = e.nt(t)); )
                    if (t.host && t.host.shadowRoot) {
                      n = t.host.shadowRoot;
                      break;
                    }
                }
              let i = t.zt.get(n);
              if ((i || t.zt.set(n, (i = {})), !i[c])) {
                let t;
                {
                  (t = l.content.cloneNode(!0)), (i[c] = !0);
                  const o = n.querySelectorAll("[data-styles]");
                  e.et(
                    n,
                    t,
                    (o.length && o[o.length - 1].nextSibling) || n.firstChild
                  );
                }
              }
            }
          })(t, e, n, o);
        }),
        (function j(t, e, n, o) {
          const i = (n.Qt = n.Qt || {});
          return (
            (i.Zt = i.Zt || []),
            i.Zt.push(
              (function r(t, e, n) {
                return {
                  namespace: e,
                  Gt: (t) => {
                    return t && t.tagName
                      ? Promise.all([
                          x(n, t.tagName),
                          (function e(t, n) {
                            return Promise.resolve(t.d.get(n));
                          })(n, t),
                        ]).then((t) => {
                          return t[0] && t[1] ? { Jt: t[0], Kt: t[1] } : null;
                        })
                      : Promise.resolve(null);
                  },
                  Vt: (t) => {
                    return x(n, t);
                  },
                  Xt: () => {
                    return Promise.all(
                      t.components.map((t) => {
                        return x(n, t[0]);
                      })
                    ).then((t) => {
                      return t.filter((t) => t);
                    });
                  },
                };
              })(t, e, o)
            ),
            i.Gt ||
              (i.Gt = (t) => {
                return Promise.all(
                  i.Zt.map((e) => {
                    return e.Gt(t);
                  })
                ).then((t) => {
                  return t.find((t) => !!t);
                });
              }),
            i.Xt ||
              (i.Xt = () => {
                const t = [];
                return (
                  i.Zt.forEach((e) => {
                    t.push(e.Xt());
                  }),
                  Promise.all(t).then((t) => {
                    const e = [];
                    return (
                      t.forEach((t) => {
                        t.forEach((t) => {
                          e.push(t);
                        });
                      }),
                      e
                    );
                  })
                );
              }),
            i
          );
        })(p, t, n, y),
        (p.components || [])
          .map((t) => {
            const e = (function n(t, e, o) {
              const i = { t: t[0], N: { color: { I: "color" } } };
              i.kt = t[1];
              const s = t[3];
              if (s)
                for (e = 0; e < s.length; e++)
                  (o = s[e]),
                    (i.N[o[0]] = {
                      Rt: o[1],
                      q: !!o[2],
                      I: "string" == typeof o[3] ? o[3] : o[3] ? o[0] : 0,
                      B: o[4],
                    });
              return (i.encapsulation = t[4]), t[5] && (i.pt = t[5].map(r)), i;
            })(t);
            return (u[e.t] = e);
          })
          .forEach((t) => f(t, class extends HTMLElement {})),
        (function O(t, e, n, o, i, r) {
          if (
            ((e.componentOnReady = (e, n) => {
              if (!e.nodeName.includes("-")) return n(null), !1;
              const o = t.b(e);
              if (o)
                if (t.Pt.has(e)) n(e);
                else {
                  const o = t.At.get(e) || [];
                  o.push(n), t.At.set(e, o);
                }
              return !!o;
            }),
            i)
          ) {
            for (r = i.length - 1; r >= 0; r--)
              e.componentOnReady(i[r][0], i[r][1]) && i.splice(r, 1);
            for (r = 0; r < o.length; r++)
              if (!n[o[r]].componentOnReady) return;
            for (r = 0; r < i.length; r++) i[r][1](null);
            i.length = 0;
          }
        })(y, p, n, n["s-apps"], n["s-cr"]),
        (p.initialized = !0);
    })(o, n, t, e, resourcesUrl, hydratedCssClass);
  })(window, document, Context, namespace);
})({}, "ionicons", "hydrated");
