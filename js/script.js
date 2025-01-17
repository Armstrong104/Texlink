(() => {
    const e = {
        align: "center",
        draggable: !1,
        skipSnaps: !0,
        loop: !1,
        autoPlay: !1,
        autoPlayInterval: 5,
    };
    let t = [];
    function r(e, r, a = 0) {
        const l = t.findIndex((t) => t.carouselId === e);
        -1 !== l &&
            r &&
            (t[l].intervalId ||
                (t[l].intervalId = setInterval(() => {
                    if (!document.hidden) {
                        const r = t.findIndex((t) => t.carouselId === e);
                        if (-1 === r) return;
                        if (1 !== t[r].embla.scrollProgress())
                            return void t[r].embla.scrollNext();
                        t[r].embla.scrollTo(0);
                    }
                }, 1e3 * a)));
    }
    function a(e, r) {
        return new Promise((a, l) => {
            const n = e.querySelector(".embla"),
                o = e.getAttribute("id"),
                i = n.querySelector(".embla__viewport"),
                s = n.querySelector(".embla__button--prev"),
                u = n.querySelector(".embla__button--next");
            if (-1 !== t.findIndex((e) => e.carouselId === o)) return;
            const c = EmblaCarousel(i, r),
                d = (function (e, t, r) {
                    return () => {
                        r.canScrollPrev()
                            ? e.removeAttribute("disabled")
                            : e.setAttribute("disabled", "disabled"),
                            r.canScrollNext()
                                ? t.removeAttribute("disabled")
                                : t.setAttribute("disabled", "disabled");
                    };
                })(s, u, c);
            !(function (e, t, r) {
                e.addEventListener("click", r.scrollPrev, !1),
                    t.addEventListener("click", r.scrollNext, !1);
            })(s, u, c),
                c.on("select", d),
                c.on("init", d),
                t.push({ carouselId: o, embla: c, intervalId: null }),
                a(c);
        });
    }
    function l(e) {
        const t = {};
        return (
            [].forEach.call(e.attributes, (e) => {
                if (/^data-/.test(e.name)) {
                    var r = e.name
                        .substr(5)
                        .replace(/-(.)/g, (e, t) => t.toUpperCase());
                    t[r] = "true" === (a = e.value) || a;
                }
                var a;
            }),
            t
        );
    }
    function n(e) {
        const r = t.findIndex((t) => t.carouselId === e);
        -1 !== r &&
            ("embla" in t[r] && t[r].embla.destroy(),
            clearInterval(t[r].intervalId),
            t.splice(r, 1));
    }
    function o(e, t) {
        const r = {};
        for (let a in t) e[a] || (r[a] = !1);
        return r;
    }
    let i,
        s = !1,
        u = "function" == typeof jQuery;
    u && (i = jQuery);
    document.querySelector("html").classList.contains("is-builder") && u
        ? i(document)
              .on("add.cards", (t) => {
                  if (!i(t.target).hasClass("mbr-embla") || s)
                      return Promise.resolve();
                  const u = t.target.getAttribute("id");
                  n(u);
                  const c = l(t.target.querySelector(".embla")),
                      d = o(c, e),
                      b = Object.assign(c, d);
                  return (
                      (b.draggable = !1),
                      a(t.target, b).then((e) => {
                          e.reInit(b),
                              r(u, b.autoPlay, b.autoPlayInterval),
                              (s = !0),
                              setTimeout(() => {
                                  s = !1;
                              }, 0);
                      })
                  );
              })
              .on("delete.cards", (e) => {
                  n(e.target.getAttribute("id"));
              })
              .on("changeParameter.cards", (t, s, u) => {
                  if (i(t.target).hasClass("mbr-embla")) {
                      const i = t.target.getAttribute("id"),
                          c = l(t.target.querySelector(".embla")),
                          d = o(c, e),
                          b = Object.assign(c, d);
                      switch (s) {
                          case "loop":
                              e.loop = !!u;
                              break;
                          case "autoplay":
                              e.autoPlay = u;
                              break;
                          case "interval":
                              e.autoPlayInterval = +u;
                      }
                      n(i),
                          (b.draggable = !1),
                          a(t.target, b),
                          r(i, b.autoPlay, b.autoPlayInterval);
                  }
              })
        : void 0 === window.initCarouseMultiplePlugin &&
          ((window.initCarouseMultiplePlugin = !0),
          document.querySelectorAll(".mbr-embla").forEach((t) => {
              const n = t.getAttribute("id"),
                  i = l(t.querySelector(".embla")),
                  s = o(i, e),
                  u = Object.assign(i, s);
              a(t, Object.assign(i, s)), r(n, u.autoPlay, +u.autoPlayInterval);
          }));
})();


