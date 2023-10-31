define([
	'uiComponent'
], function(Component) {
	"use strict";

	return Component.extend({
		defaults: {
			title: 'test title',
			content: 'test content',
			btnText: 'Click',
			isPrimary: true
		}
	});
});