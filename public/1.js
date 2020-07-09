(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/text-slideshow.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/text-slideshow.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'TextSlideshow',
  computed: {
    currentRouteName: function currentRouteName() {
      return this.$route.name;
    }
  },
  mounted: function mounted() {
    $(".title-typed").each(function () {
      var $this = $(this);
      $this.typed({
        strings: $this.attr('data-elements').split(','),
        typeSpeed: 100,
        backDelay: 3000
      });
    });
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Home.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Home.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_text_slideshow__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/text-slideshow */ "./resources/js/components/text-slideshow.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'Home',
  components: {
    TextSlideshow: _components_text_slideshow__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  computed: {
    currentRouteName: function currentRouteName() {
      return this.$route.name;
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/text-slideshow.vue?vue&type=template&id=12dd6399&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/text-slideshow.vue?vue&type=template&id=12dd6399& ***!
  \*****************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c(
        "section",
        {
          staticClass: "home-bg section h-100vh clip-home",
          attrs: { id: "home" }
        },
        [
          _c("div", { staticClass: "bg-overlay" }),
          _vm._v(" "),
          _c("div", { staticClass: "bg-overlay-images" }),
          _vm._v(" "),
          _c("div", { staticClass: "home-table" }, [
            _c("div", { staticClass: "home-table-center" }, [
              _c("div", { staticClass: "container" }, [
                _c("div", { staticClass: "row justify-content-center" }, [
                  _c("div", { staticClass: "col-lg-12" }, [
                    _c("div", { staticClass: "text-white text-center" }, [
                      _c("h4", [_vm._v("Hello & Welcome")]),
                      _vm._v(" "),
                      _c("h1", { staticClass: "header_title mb-0 mt-3" }, [
                        _vm._v("I Am "),
                        _c("span", {
                          staticClass: "title-typed font-weight-bold",
                          attrs: {
                            "data-elements":
                              "Brandon Best.,An Engineering Leader.,An Architech."
                          }
                        })
                      ]),
                      _vm._v(" "),
                      _c(
                        "ul",
                        {
                          staticClass:
                            "social_home list-unstyled text-center pt-4"
                        },
                        [
                          _c("li", { staticClass: "list-inline-item" }, [
                            _c("a", { attrs: { href: "#" } }, [
                              _c("i", { staticClass: "mdi mdi-github" })
                            ])
                          ]),
                          _vm._v(" "),
                          _c("li", { staticClass: "list-inline-item" }, [
                            _c("a", { attrs: { href: "#" } }, [
                              _c("i", { staticClass: "mdi mdi-linkedin" })
                            ])
                          ]),
                          _vm._v(" "),
                          _c("li", { staticClass: "list-inline-item" }, [
                            _c("a", { attrs: { href: "#" } }, [
                              _c("i", { staticClass: "mdi mdi-twitter" })
                            ])
                          ]),
                          _vm._v(" "),
                          _c("li", { staticClass: "list-inline-item" }, [
                            _c("a", { attrs: { href: "#" } }, [
                              _c("i", { staticClass: "mdi mdi-stack-overflow" })
                            ])
                          ])
                        ]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "header_btn" }, [
                        _c(
                          "a",
                          {
                            staticClass:
                              "btn btn-outline-custom btn-rounded mt-4",
                            attrs: { href: "#" }
                          },
                          [_vm._v("Download Resume")]
                        )
                      ])
                    ])
                  ])
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "scroll_down" }, [
            _c("a", { staticClass: "scroll", attrs: { href: "#about" } }, [
              _c("i", { staticClass: "mbri-arrow-down text-white" })
            ])
          ])
        ]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Home.vue?vue&type=template&id=63cd6604&":
/*!**************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Home.vue?vue&type=template&id=63cd6604& ***!
  \**************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [_c("text-slideshow"), _vm._v(" "), _vm._m(0)], 1)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("section", { staticClass: "section", attrs: { id: "about" } }, [
      _c("div", { staticClass: "container" }, [
        _c("div", { staticClass: "row justify-content-center" }, [
          _c("div", { staticClass: "col-lg-12" }, [
            _c(
              "div",
              { staticClass: "text-center mx-auto section-main-title" },
              [
                _c("h2", [
                  _c("span", { staticClass: "font-weight-bold" }, [
                    _vm._v("About ")
                  ]),
                  _vm._v("Me")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "main-title-border" }, [
                  _c("i", { staticClass: "mdi mdi-asterisk" })
                ]),
                _vm._v(" "),
                _c("p", { staticClass: "text-muted mx-auto mt-2" }, [
                  _vm._v(
                    "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."
                  )
                ])
              ]
            )
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row mt-4 pt-4" }, [
          _c("div", { staticClass: "col-lg-12" }, [
            _c("div", [
              _c("img", {
                staticClass: "img-fluid mx-auto d-block",
                attrs: { src: "images/brandon-best-signature.png", alt: "" }
              })
            ]),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "text-center about-detail mx-auto mt-5" },
              [
                _c("h3", { staticClass: "mb-3" }, [
                  _vm._v("Hello! "),
                  _c("span", { staticClass: "font-weight-bold text-custom" }, [
                    _vm._v("I'M Brandon Best.")
                  ])
                ]),
                _vm._v(" "),
                _c(
                  "ul",
                  { staticClass: "mb-0 list-inline text-center about-work" },
                  [
                    _c(
                      "li",
                      { staticClass: "list-inline-item mr-0 text-muted" },
                      [_vm._v("Engineering Leader")]
                    ),
                    _vm._v(" "),
                    _c(
                      "li",
                      { staticClass: "list-inline-item mr-0 text-muted" },
                      [_vm._v("Architect")]
                    ),
                    _vm._v(" "),
                    _c(
                      "li",
                      { staticClass: "list-inline-item mr-0 text-muted" },
                      [_vm._v("Developer")]
                    )
                  ]
                ),
                _vm._v(" "),
                _c("p", { staticClass: "text-muted mt-3" }, [
                  _vm._v(
                    "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English."
                  )
                ])
              ]
            )
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row mt-5" }, [
          _c("div", { staticClass: "col-lg-6" }, [
            _c("div", { staticClass: "progress-bars skill-custom" }, [
              _c("div", { staticClass: "clearfix" }, [
                _c(
                  "div",
                  { staticClass: "text-dark font-weight-bold float-left" },
                  [_vm._v("Development")]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "text-muted float-right" }, [
                  _vm._v("80%")
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "progress" }, [
                _c("div", {
                  staticClass: "progress-bar",
                  staticStyle: { width: "80%" },
                  attrs: {
                    role: "progressbar",
                    "aria-valuenow": "0",
                    "aria-valuemin": "0",
                    "aria-valuemax": "100"
                  }
                })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "clearfix" }, [
                _c(
                  "div",
                  { staticClass: "text-dark font-weight-bold float-left" },
                  [_vm._v("WordPress")]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "text-muted float-right" }, [
                  _vm._v("59%")
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "progress" }, [
                _c("div", {
                  staticClass: "progress-bar",
                  staticStyle: { width: "59%" },
                  attrs: {
                    role: "progressbar",
                    "aria-valuenow": "25",
                    "aria-valuemin": "0",
                    "aria-valuemax": "100"
                  }
                })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "clearfix" }, [
                _c(
                  "div",
                  { staticClass: "text-dark font-weight-bold float-left" },
                  [_vm._v("Photoshop")]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "text-muted float-right" }, [
                  _vm._v("88%")
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "progress" }, [
                _c("div", {
                  staticClass: "progress-bar",
                  staticStyle: { width: "88%" },
                  attrs: {
                    role: "progressbar",
                    "aria-valuenow": "0",
                    "aria-valuemin": "0",
                    "aria-valuemax": "100"
                  }
                })
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "col-lg-6" }, [
            _c("div", { staticClass: "progress-bars skill-custom" }, [
              _c("div", { staticClass: "clearfix" }, [
                _c(
                  "div",
                  { staticClass: "text-dark font-weight-bold float-left" },
                  [_vm._v("Html")]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "text-muted float-right" }, [
                  _vm._v("96%")
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "progress" }, [
                _c("div", {
                  staticClass: "progress-bar",
                  staticStyle: { width: "86%" },
                  attrs: {
                    role: "progressbar",
                    "aria-valuenow": "0",
                    "aria-valuemin": "0",
                    "aria-valuemax": "100"
                  }
                })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "clearfix" }, [
                _c(
                  "div",
                  { staticClass: "text-dark font-weight-bold float-left" },
                  [_vm._v("Css")]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "text-muted float-right" }, [
                  _vm._v("70%")
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "progress" }, [
                _c("div", {
                  staticClass: "progress-bar",
                  staticStyle: { width: "70%" },
                  attrs: {
                    role: "progressbar",
                    "aria-valuenow": "25",
                    "aria-valuemin": "0",
                    "aria-valuemax": "100"
                  }
                })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "clearfix" }, [
                _c(
                  "div",
                  { staticClass: "text-dark font-weight-bold float-left" },
                  [_vm._v("Asp.net")]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "text-muted float-right" }, [
                  _vm._v("58%")
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "progress" }, [
                _c("div", {
                  staticClass: "progress-bar",
                  staticStyle: { width: "58%" },
                  attrs: {
                    role: "progressbar",
                    "aria-valuenow": "0",
                    "aria-valuemin": "0",
                    "aria-valuemax": "100"
                  }
                })
              ])
            ])
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/text-slideshow.vue":
/*!****************************************************!*\
  !*** ./resources/js/components/text-slideshow.vue ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _text_slideshow_vue_vue_type_template_id_12dd6399___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./text-slideshow.vue?vue&type=template&id=12dd6399& */ "./resources/js/components/text-slideshow.vue?vue&type=template&id=12dd6399&");
/* harmony import */ var _text_slideshow_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./text-slideshow.vue?vue&type=script&lang=js& */ "./resources/js/components/text-slideshow.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _text_slideshow_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _text_slideshow_vue_vue_type_template_id_12dd6399___WEBPACK_IMPORTED_MODULE_0__["render"],
  _text_slideshow_vue_vue_type_template_id_12dd6399___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/text-slideshow.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/text-slideshow.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/text-slideshow.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_text_slideshow_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./text-slideshow.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/text-slideshow.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_text_slideshow_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/text-slideshow.vue?vue&type=template&id=12dd6399&":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/text-slideshow.vue?vue&type=template&id=12dd6399& ***!
  \***********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_text_slideshow_vue_vue_type_template_id_12dd6399___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./text-slideshow.vue?vue&type=template&id=12dd6399& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/text-slideshow.vue?vue&type=template&id=12dd6399&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_text_slideshow_vue_vue_type_template_id_12dd6399___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_text_slideshow_vue_vue_type_template_id_12dd6399___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/views/Home.vue":
/*!*************************************!*\
  !*** ./resources/js/views/Home.vue ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Home_vue_vue_type_template_id_63cd6604___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Home.vue?vue&type=template&id=63cd6604& */ "./resources/js/views/Home.vue?vue&type=template&id=63cd6604&");
/* harmony import */ var _Home_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Home.vue?vue&type=script&lang=js& */ "./resources/js/views/Home.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Home_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Home_vue_vue_type_template_id_63cd6604___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Home_vue_vue_type_template_id_63cd6604___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/Home.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/Home.vue?vue&type=script&lang=js&":
/*!**************************************************************!*\
  !*** ./resources/js/views/Home.vue?vue&type=script&lang=js& ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Home_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Home.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Home.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Home_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/views/Home.vue?vue&type=template&id=63cd6604&":
/*!********************************************************************!*\
  !*** ./resources/js/views/Home.vue?vue&type=template&id=63cd6604& ***!
  \********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Home_vue_vue_type_template_id_63cd6604___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Home.vue?vue&type=template&id=63cd6604& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Home.vue?vue&type=template&id=63cd6604&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Home_vue_vue_type_template_id_63cd6604___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Home_vue_vue_type_template_id_63cd6604___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);