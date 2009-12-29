var currentContentUrl;

function setNavigationHighlight() {
	if (typeof window.parent.contentFrame != 'undefined') {
		var newContentUrl = window.parent.contentFrame.location.href;
		if ( currentContentUrl != newContentUrl ) {
			currentContentUrl = newContentUrl;
			elements = $$('body#navigation ul li');
			for (c = 0; c < elements.length; c++) {
				backgroundImage = elements[c].getStyle('backgroundImage').replace(/selected/, 'normal');
				elements[c].setStyle({
					backgroundImage: backgroundImage
				});
			}
			[
				['index.php', 'navigation[Start]'],
				['phpinfo.php', 'navigation[phpInfo]'],
				['apc.php', 'navigation[APC]'],
				['eaccelerator.php', 'navigation[eAccelerator]'],
				['xcache-admin', 'navigation[XCache]'],
				['phpMyAdmin', 'navigation[phpMyAdmin]'],
				['SQLiteManager', 'navigation[SQLiteManager]'],
				['webEdition', 'navigation[webEdition]'],
				['faq.php', 'navigation[FAQ]']
			].each(function(e) {
				if (newContentUrl.indexOf(e[0]) != -1) {
					backgroundImage = $(e[1]).getStyle('backgroundImage').replace(/normal/, 'selected');
					$(e[1]).setStyle({
						backgroundImage: backgroundImage
					});
				}
			});
		}
	}
}