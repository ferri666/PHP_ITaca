"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_games_Crear_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/games/Crear.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/games/Crear.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "crear-game",
  data: function data() {
    return {
      game: {
        dau1: "1",
        dau2: "6",
        win: "",
        player_id: this.$route.params.id
      },
      resultat: "",
      playername: localStorage.playername,
      playerID: this.$route.params.id
    };
  },
  mounted: function mounted() {},
  methods: {
    crear: function crear() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                axios.defaults.headers.common = {
                  Authorization: "Bearer " + localStorage.getItem("token")
                };

                _this.tirardados();

                _context.next = 4;
                return _this.axios.post('/api/players/' + _this.playerID + '/games', _this.game).then(function (response) {})["catch"](function (error) {
                  console.log(error);
                });

              case 4:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    tirardados: function tirardados() {
      this.game.dau1 = Math.floor(Math.random() * (7 - 1) + 1);
      this.game.dau2 = Math.floor(Math.random() * (7 - 1) + 1);
      this.resultat = this.game.dau1 + this.game.dau2;
      if (this.resultat >= 7) this.game.win = true;else this.game.win = false;
    }
  }
});

/***/ }),

/***/ "./resources/js/components/games/Crear.vue":
/*!*************************************************!*\
  !*** ./resources/js/components/games/Crear.vue ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Crear_vue_vue_type_template_id_5f2b1bc4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Crear.vue?vue&type=template&id=5f2b1bc4& */ "./resources/js/components/games/Crear.vue?vue&type=template&id=5f2b1bc4&");
/* harmony import */ var _Crear_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Crear.vue?vue&type=script&lang=js& */ "./resources/js/components/games/Crear.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Crear_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Crear_vue_vue_type_template_id_5f2b1bc4___WEBPACK_IMPORTED_MODULE_0__.render,
  _Crear_vue_vue_type_template_id_5f2b1bc4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/games/Crear.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/games/Crear.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/components/games/Crear.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Crear_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Crear.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/games/Crear.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Crear_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/games/Crear.vue?vue&type=template&id=5f2b1bc4&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/games/Crear.vue?vue&type=template&id=5f2b1bc4& ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Crear_vue_vue_type_template_id_5f2b1bc4___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Crear_vue_vue_type_template_id_5f2b1bc4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Crear_vue_vue_type_template_id_5f2b1bc4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Crear.vue?vue&type=template&id=5f2b1bc4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/games/Crear.vue?vue&type=template&id=5f2b1bc4&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/games/Crear.vue?vue&type=template&id=5f2b1bc4&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/games/Crear.vue?vue&type=template&id=5f2b1bc4& ***!
  \***********************************************************************************************************************************************************************************************************************/
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
  return _c("div", [
    _vm.playername
      ? _c("h1", [_vm._v("Bienvenido " + _vm._s(_vm.playername))])
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau1 == 1
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-one",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-one",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau1 == 2
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-two",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-two",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau1 == 3
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-three",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-three",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau1 == 4
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-four",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-four",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau1 == 5
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-five",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-five",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau1 == 6
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-six",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-six",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 288C110.4 288 96 273.6 96 256s14.38-32 32-32s32 14.38 32 32S145.6 288 128 288zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 288c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 288 320 288zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau2 == 1
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-one",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-one",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau2 == 2
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-two",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-two",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau2 == 3
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-three",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-three",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau2 == 4
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-four",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-four",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau2 == 5
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-five",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-five",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.game.dau2 == 6
      ? _c(
          "svg",
          {
            staticClass: "svg-inline--fa fa-dice-six",
            attrs: {
              "aria-hidden": "true",
              height: "50",
              width: "50",
              focusable: "",
              "data-prefix": "fas",
              "data-icon": "dice-six",
              role: "img",
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 448 512"
            }
          },
          [
            _c("path", {
              attrs: {
                fill: "currentColor",
                d:
                  "M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 288C110.4 288 96 273.6 96 256s14.38-32 32-32s32 14.38 32 32S145.6 288 128 288zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 288c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 288 320 288zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"
              }
            })
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _c(
      "form",
      {
        on: {
          submit: function($event) {
            $event.preventDefault()
            return _vm.crear()
          }
        }
      },
      [
        _c(
          "button",
          { staticClass: "btn btn-primary", attrs: { type: "submit" } },
          [_vm._v("JUEGA!")]
        )
      ]
    ),
    _vm._v(" "),
    _vm.resultat
      ? _c("span", [
          _c("h1", [_vm._v("Tu resultado es: " + _vm._s(this.resultat))]),
          _vm._v(" "),
          _vm.game.win
            ? _c("h1", { staticClass: "text-success" }, [
                _vm._v("¡Has ganado!")
              ])
            : _c("h1", { staticClass: "text-danger" }, [
                _vm._v("¡Has perdido!")
              ])
        ])
      : _vm._e()
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);