"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_pictures_Mostrar_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Mostrar.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Mostrar.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "pictures",
  data: function data() {
    return {
      pictures: [],
      shopID: this.$route.params.id
    };
  },
  mounted: function mounted() {
    this.mostrarPictures();
  },
  methods: {
    mostrarPictures: function mostrarPictures() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                axios.defaults.headers.common = {
                  Authorization: "Bearer " + localStorage.getItem("token")
                };
                _context.next = 3;
                return _this.axios.get('/api/shops/' + _this.shopID + '/pictures').then(function (response) {
                  _this.pictures = response.data;
                })["catch"](function (error) {
                  _this.pictures = [];
                });

              case 3:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    incendiar: function incendiar() {
      var _this2 = this;

      if (confirm("¿Confirma inciendiar las pruebas?")) this.axios["delete"]('/api/shops/' + this.shopID + '/pictures').then(function (response) {
        _this2.mostrarPictures();
      })["catch"](function (error) {
        console.log(error);
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/pictures/Mostrar.vue":
/*!******************************************************!*\
  !*** ./resources/js/components/pictures/Mostrar.vue ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Mostrar_vue_vue_type_template_id_4ac26fde___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Mostrar.vue?vue&type=template&id=4ac26fde& */ "./resources/js/components/pictures/Mostrar.vue?vue&type=template&id=4ac26fde&");
/* harmony import */ var _Mostrar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Mostrar.vue?vue&type=script&lang=js& */ "./resources/js/components/pictures/Mostrar.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Mostrar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Mostrar_vue_vue_type_template_id_4ac26fde___WEBPACK_IMPORTED_MODULE_0__.render,
  _Mostrar_vue_vue_type_template_id_4ac26fde___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/pictures/Mostrar.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/pictures/Mostrar.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/pictures/Mostrar.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Mostrar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Mostrar.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Mostrar.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Mostrar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/pictures/Mostrar.vue?vue&type=template&id=4ac26fde&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/pictures/Mostrar.vue?vue&type=template&id=4ac26fde& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Mostrar_vue_vue_type_template_id_4ac26fde___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Mostrar_vue_vue_type_template_id_4ac26fde___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Mostrar_vue_vue_type_template_id_4ac26fde___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Mostrar.vue?vue&type=template&id=4ac26fde& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Mostrar.vue?vue&type=template&id=4ac26fde&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Mostrar.vue?vue&type=template&id=4ac26fde&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/pictures/Mostrar.vue?vue&type=template&id=4ac26fde& ***!
  \****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("section", { staticClass: "jumbotron text-center" }, [
      _c("div", { staticClass: "container" }, [
        _c("h1", { staticClass: "jumbotron-heading" }, [
          _vm._v("Album example")
        ]),
        _vm._v(" "),
        _c("p", { staticClass: "lead text-muted" }, [
          _vm._v(
            "Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely."
          )
        ]),
        _vm._v(" "),
        _c(
          "p",
          [
            _c(
              "router-link",
              {
                staticClass: "btn btn-success",
                attrs: {
                  to: { name: "crearCuadre", params: { id: _vm.shopID } }
                }
              },
              [_vm._v("Crear")]
            ),
            _vm._v(" "),
            _c(
              "button",
              {
                staticClass: "btn btn-danger",
                on: {
                  click: function($event) {
                    return _vm.incendiar()
                  }
                }
              },
              [_vm._v("Incendiar")]
            )
          ],
          1
        )
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "container" }, [
      _c("div", { staticClass: "album py-5 bg-light" }, [
        _c(
          "div",
          { staticClass: "row" },
          _vm._l(_vm.pictures, function(picture) {
            return _c("div", { key: picture.id, staticClass: "col-md-4" }, [
              _c("div", { staticClass: "card mb-4 box-shadow" }, [
                _c("img", {
                  staticClass: "card-img-top",
                  staticStyle: {
                    height: "225px",
                    width: "100%",
                    display: "block"
                  },
                  attrs: {
                    "data-src": "https://thisartworkdoesnotexist.com/",
                    alt: "RandomArt",
                    src: "https://thisartworkdoesnotexist.com/",
                    "data-holder-rendered": "true"
                  }
                }),
                _vm._v(" "),
                _c("div", { staticClass: "card-body" }, [
                  _c("p", { staticClass: "card-text" }),
                  _c("h1", [_vm._v(_vm._s(picture.name))]),
                  _vm._v(" "),
                  _c("p", { staticClass: "card-text" }, [
                    _vm._v("By "),
                    picture.author
                      ? _c("small", [_vm._v(_vm._s(picture.author))])
                      : _c("small", [_vm._v("Anonymous")])
                  ]),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticClass:
                        "d-flex justify-content-between align-items-center"
                    },
                    [
                      _vm._m(0, true),
                      _vm._v(" "),
                      _c("small", { staticClass: "text-muted" }, [
                        _vm._v(_vm._s(picture.value) + " €")
                      ])
                    ]
                  )
                ])
              ])
            ])
          }),
          0
        )
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "btn-group" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-sm btn-outline-secondary",
          attrs: { type: "button" }
        },
        [_vm._v("View")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-sm btn-outline-secondary",
          attrs: { type: "button" }
        },
        [_vm._v("Edit")]
      )
    ])
  }
]
render._withStripped = true



/***/ })

}]);