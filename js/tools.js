/**
 * Main method
 *
 * (WS - window store)
 */

function toggleWidget(type, targetId) {
	if (getWSItem(type) === targetId) {
		removeWSItem(type);
		deselectButton(targetId);
		closeWidget(targetId);

		scrollTo(targetId);
	} else {
		deselectButtonsByType(type);
		closeWidgetsByType(type);

		setWSItem(type, targetId);
		selectButton(targetId);
		openWidget(targetId);

		scrollTo(targetId);
	}
}


/**
 * Storing methods
 * 
 * (WS - window store)
 */

function initWindowStore() {
	window.appStore = {};
}

function getWSItem(type) {
	return window.appStore[type];
}

function setWSItem(type, value) {
	window.appStore[type] = value;
}

function removeWSItem(type) {
	delete window.appStore[type];
}

function isWSItemExist(type) {
	return !!window.appStore[type];
}

function clearWS() {
	window.appStore = {};
}


/**
 * Button select methods
 */

function selectButton(selector) {
	$(`#btn-${selector}`).addClass('btn-selected');
}

function deselectButton(selector) {
	$(`#btn-${selector}`).removeClass('btn-selected');
}

function deselectButtonsByType(type) {
	$(`.btn-${type}.btn-selected`).each(function () {
		$(this).removeClass('btn-selected');
	});
}


/**
 * Widget toggle methods
 */

function openWidget(widgetId) {
	$(`#${widgetId}`).addClass('opened');
}

function closeWidget(widgetId) {
	$(`#${widgetId}.opened`).removeClass('opened');
}

function closeWidgetsByType(type) {
	$(`#widgets-${type} .opened`).each(function () {
		$(this).removeClass('opened');
	});
}

/**
 * Scroll to
 */

function scrollTo(selector, duration, delay) {
	var dur = duration ? duration : 500;
	var del = delay ? delay : 400;

	$('html, body').delay(del).animate({
		scrollTop: $(`#${selector}`).offset().top
	}, dur);
}
