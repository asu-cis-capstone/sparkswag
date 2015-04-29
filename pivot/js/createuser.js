function showResearcherForm () {
	document.getElementById("staffDiv").style.display = "block";
	document.getElementById("studentDiv").style.display = "none";
}
function showStudentForm () {
	document.getElementById("staffDiv").style.display = "none";
	document.getElementById("studentDiv").style.display = "block";
}

function ShowEditForm(name, elem, type){
	if(elem.nextSibling != null){ return; }
	var form = document.createElement("form");
	var input = document.createElement("input");
	var button = document.createElement("button");
	var div = document.createElement("div");
	var controldiv = document.createElement("div");
	
	
	elem.parentNode.appendChild(form);
	form.appendChild(div);
	div.appendChild(input);
	div.appendChild(button);
	
	form.method = 'post';
	//form.action = 'myaccount';
	form.action = '';
	form.setAttribute('class', 'form-horizontal');
	form.setAttribute('accept-charset', 'UTF-8');
	form.setAttribute('role', 'form');
	div.setAttribute('class', 'form-group');
	button.setAttribute('type', 'submit');
	button.setAttribute('class', 'btn btn-default');
	button.appendChild(document.createTextNode('Save'));
	input.setAttribute('class', 'form-control');
	input.setAttribute('name', name);
	input.setAttribute('type', type);
	input.focus();

	var fudged =  elem.parentNode.innerText;
	fudged = fudged.replace(/^.*:/,'');
	fudged = fudged.replace('SAVE','');
	fudged = fudged.trim();//replace('\t','');

	input.value = fudged;
}