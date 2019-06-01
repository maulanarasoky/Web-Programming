/*
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
*/
// Buat kodingan ajax disini
var req = new XMLHttpRequest();

// Buat Fungsi Post 
function buatPost() {
	req.open('POST', 'submitpost.php', true);
	req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			ambilPost();
			document.getElementById('content').value = '';
		}
	}
	
	var data = document.getElementById('content').value;
	req.send('content=' + data);
}


//Buat fungsi get post 
function ambilPost() {
	req.open('GET', 'getpost.php', true);
	req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			document.getElementById('post-content').innerHTML = req.responseText;
		}
	}
	req.send();
}


//fungsi delete post 
function hapusPost(id) {
	req.open('GET', 'deletePost.php?id=' + id, true);
	req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			ambilPost();
		}
	}
	req.send();
}

function like(id) {
	req.open('GET', 'like.php?id=' + id, true);
	req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			ambilPost();
			document.getElementById('like' + id).style.display = 'none';
			document.getElementById('unlike' + id).style.display = 'block';
		}
	}
	req.send();
}

function unlike(id) {
	req.open('GET', 'unlike.php?id=' + id, true);
	req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			ambilPost();
			document.getElementById('unlike' + id).style.display = 'none';
			document.getElementById('like' + id).style.display = 'block';
		}
	}
	req.send();
}
