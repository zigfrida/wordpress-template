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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./woocommerce/assets/js/woocommerce.js":
/*!**********************************************!*\
  !*** ./woocommerce/assets/js/woocommerce.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// jQuery(window).on('load', function() {
//   var form = document.getElementsByClassName("cart")[0];
//   console.log(form);
//   var outter_div = document.createElement("div");
//   outter_div.setAttribute("class", "svg-wrapper");
//   var svg = document.createElement("svg");
//   // svg.setAttribute("class","style-svg");
//   //svg.setAttribute("preserveAspectRatio", "none");
//   svg.style.height = "60px";
//   svg.style.width = "320px";
//   // svg.setAttribute("height", "60");
//   // svg.setAttribute("width", "320");
//   svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
//   var rect = document.createElement("rect");
//   rect.setAttribute("class", "shape");
//   rect.style.height = "60px";
//   rect.style.width = "320px";
//   // rect.setAttribute("height", "60");
//   // rect.setAttribute("width", "320");
//   // rect.textContent = " T   ";
//   var btn = document.getElementsByClassName("single_add_to_cart_button")[0];
//   // btn.className = btn.className + " text";
//   var text_space = document.createElement("div");
//   text_space.setAttribute("class", "text");
//   text_space.textContent = "This is a test";
//   svg.appendChild(rect);
//   //svg.appendChild(text_space);
//   outter_div.appendChild(svg);
//   outter_div.appendChild(text_space);
// //   //outter_div.appendChild(btn);
//   //form.appendChild(outter_div);
//   // //svg.appendChild(btn);
//   // //rect.appendChild(btn);
//   var x = document.getElementById("container-product-info");
//   x.appendChild(outter_div);
//   // var y = document.getElementsByClassName("svg")[0].getSVGDocumnet();
//   // console.log(y);
// });

/***/ }),

/***/ 1:
/*!****************************************************!*\
  !*** multi ./woocommerce/assets/js/woocommerce.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\Elaine\wordpress\wp-content\themes\woocommerce-theme\woocommerce\assets\js\woocommerce.js */"./woocommerce/assets/js/woocommerce.js");


/***/ })

/******/ });