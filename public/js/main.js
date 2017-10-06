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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 41);
/******/ })
/************************************************************************/
/******/ ({

/***/ 41:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(42);


/***/ }),

/***/ 42:
/***/ (function(module, exports) {

function menuVisible() {
	var hamburger = document.getElementsByClassName('hamburger')[0];
	var mainSection = document.getElementsByClassName('mainSection')[0];
	var header = document.getElementsByTagName('header')[0];
	var content = document.getElementById('content');
	var footer = document.getElementsByTagName('footer')[0];
	var body = document.getElementsByTagName('body')[0];

	var hamburgerLine1 = document.getElementsByClassName('hamburgerLine-1')[0];
	var hamburgerLine2 = document.getElementsByClassName('hamburgerLine-2')[0];
	var hamburgerLine3 = document.getElementsByClassName('hamburgerLine-3')[0];

	hamburger.onclick = function () {

		if (header.className == 'menuVisible') {
			header.className = '';

			if (screen.width >= 768) {

				var clientHeight = document.documentElement.clientHeight / 1.1;

				footer.className = '';
				mainSection.className = 'mainSection';
				content.className = '';
				content.style.height = document.documentElement.clientHeight + 'px';
				body.className = '';
			}
		} else {

			header.className = 'menuVisible';

			if (screen.width >= 768) {

				var clientHeight = document.documentElement.clientHeight / 1.1;

				footer.className = 'menuVisible';
				mainSection.className = 'mainSection menuVisible';
				content.className = 'menuVisible';
				content.style.height = clientHeight + 'px';
				body.className = 'menuVisible';
				hamburgerLine1.className = 'hamburgerLine1 menuVisible';
				hamburgerLine2.className = 'hamburgerLine2 menuVisible';
				hamburgerLine3.className = 'hamburgerLine3 menuVisible';
			}
		}
	};
}

window.onload = function () {
	menuVisible();
};

/***/ })

/******/ });