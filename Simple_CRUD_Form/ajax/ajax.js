var req = new XMLHttpRequest();

function inputData() {
	req.open('POST', 'function/create.php', true);
	req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			getData();
		}
	}
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var age = document.getElementById('age').value;
	var nim = document.getElementById('nim').value;
	var address = document.getElementById('address').value;

	let sendData = JSON.stringify({
		'firstName' : firstName,
		'lastName' : lastName,
		'age' : age,
		'nim' : nim,
		'address' : address
	})
	req.send(sendData);
}

function getData() {
	req.open('GET', 'function/read.php', true);
	req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			let data = JSON.parse(req.responseText);
			var tag = `<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Age</th>
							<th>Nim</th>
							<th>Address</th>
							<th colspan="2">Action</th>
						</tr> `;
			for(key in data) {
				tag += `<tr>
							<td>${data[key].id}</td>
							<td>${data[key].name}</td>
							<td>${data[key].age}</td>
							<td>${data[key].nim}</td>
							<td>${data[key].address}</td>
							<td><button id="delete" value="${data[key].id}" onclick="deleteData(this.value);">Delete</button>
							<td><button id="update" value="${data[key].id}" onclick="document.location.href='updateForm.php?id=${data[key].id}'">Update</button>
						</tr>`
			}
			document.getElementById('show').innerHTML = tag;
		}
	}
	req.send();
}

function updateData(id) {
	req.open('POST', 'function/update.php?id=' + id, true);
	req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			document.location.href='index.php';
		}
	}
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var address = document.getElementById('address').value;
	var age = document.getElementById('age').value;
	var nim = document.getElementById('nim').value;

	let sendData = JSON.stringify({
		'firstName' : firstName,
		'lastName' : lastName,
		'age' : age,
		'nim' : nim,
		'address' : address
	});
	req.send(sendData);
}

function deleteData(id) {
	req.open('GET', 'function/delete.php?id=' + id, true);
	req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			getData();
			document.getElementById('delete').value;
		}
	}
	req.send();
}