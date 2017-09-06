function tab(id, col) {
	var tabs = document.getElementById(id);
	col++;
	for(var c = 1; c < tabs.children.length; c++) {
		if(c != col) {
			tabs.children[c].classList.remove("tabActive");
		} else {
			tabs.children[c].classList.add("tabActive");
		}
	}
	for(var c = 0; c < tabs.children[0].children.length; c++) {
		if(c != col-1) {
			tabs.children[0].children[c].classList.remove("tabmenuActive");
		} else {
			tabs.children[0].children[c].classList.add("tabmenuActive");
		}
	}
}