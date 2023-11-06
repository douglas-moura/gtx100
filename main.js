
// menu mobile
function abrirMenu() {
	let menu = document.getElementById('menu-mobile');
	if(menu.style.marginLeft != '0rem') {
		menu.style.marginLeft = '0rem';
	} else {
		menu.style.marginLeft = '-20rem';
	}
}

// flipcard
function flipCard(c) {
	let card = document.getElementsByClassName('card-' + c);
	card[0].classList.toggle('flip-card');
	setTimeout(() => {
		card[0].classList.remove('flip-card');
	}, 4000);
}

// importar HTML
