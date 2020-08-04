/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _menuToggle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./menuToggle */ "./resources/js/menuToggle.js");
/* harmony import */ var _menuShrink__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./menuShrink */ "./resources/js/menuShrink.js");
/* harmony import */ var _searchToggle__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./searchToggle */ "./resources/js/searchToggle.js");
/* harmony import */ var _categorySelector__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./categorySelector */ "./resources/js/categorySelector.js");




Object(_menuToggle__WEBPACK_IMPORTED_MODULE_0__["default"])();
Object(_menuShrink__WEBPACK_IMPORTED_MODULE_1__["default"])();
Object(_searchToggle__WEBPACK_IMPORTED_MODULE_2__["default"])();
Object(_categorySelector__WEBPACK_IMPORTED_MODULE_3__["default"])();

/***/ }),

/***/ "./resources/js/categorySelector.js":
/*!******************************************!*\
  !*** ./resources/js/categorySelector.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return initCategorySelector; });
function initCategorySelector() {
  var select = document.querySelector('#js-category-select');

  if (select) {
    select.addEventListener('change', function (event) {
      var url = select.options[select.selectedIndex].value;
      window.location.href = url;
    });
  }
}

/***/ }),

/***/ "./resources/js/menuShrink.js":
/*!************************************!*\
  !*** ./resources/js/menuShrink.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return initMenuShink; });
function initMenuShink() {
  var header = document.querySelector('#js-site-header');
  window.addEventListener("scroll", function (event) {
    var scroll = window.scrollY;

    if (scroll > 200 && window.matchMedia('(min-width: 64em)').matches) {
      header.classList.add('site-header--small');
    } else {
      header.classList.remove('site-header--small');
    }
  });
}

/***/ }),

/***/ "./resources/js/menuToggle.js":
/*!************************************!*\
  !*** ./resources/js/menuToggle.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return initMenuToggle; });
function initMenuToggle() {
  var buttons = document.querySelectorAll('.js-main-nav-toggle');
  var menu = document.querySelector('#js-menu');
  var overlay = document.querySelector('.js-overlay');
  buttons.forEach(function (item) {
    return item.addEventListener('click', function () {
      overlay.classList.toggle('main-nav__overlay--active');
      menu.classList.toggle('menu--active');
      document.querySelector('html').classList.toggle('no-scroll');
    });
  });
}

/***/ }),

/***/ "./resources/js/searchToggle.js":
/*!**************************************!*\
  !*** ./resources/js/searchToggle.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return initSearchToggle; });
function initSearchToggle() {
  var buttons = document.querySelectorAll('.js-search-toggle');
  var search = document.querySelector('#js-search');
  buttons.forEach(function (item) {
    return item.addEventListener('click', function () {
      search.classList.toggle('search--active');

      if (search.classList.contains('search--active')) {
        search.querySelector('.js-search-input').focus();
        window.scrollTo(0, 0);
      }
    });
  });
}

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/eduruiz/code/comunitas-www/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /home/eduruiz/code/comunitas-www/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });