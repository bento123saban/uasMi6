
/* ----------- menu search ------------- */

function search(el) {
	const input = el.value.toUpperCase();
	document.querySelectorAll('.nama-menu').forEach( function(menu) {
		if (menu.textContent.toUpperCase().indexOf(input) > -1) {
			menu.parentElement.style.display = ''
		} else {
			menu.parentElement.style.display = 'none'
		}
	})
}
