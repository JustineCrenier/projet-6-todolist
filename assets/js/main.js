let object = {};
let xhr = new XMLHttpRequest;
//Call the open function
xhr.open('GET', 'assets/js/todo.json', true)
//call the onload 
xhr.onreadystatechange = function(){
	//check if the status is 200(means everything is okay)
    if (this.status === 200 && this.readyState === 4){
    	object = JSON.parse(this.responseText);
    	console.log(object);
    	//for each to do ...
    	object['todo'].forEach( function(element, index) {
    		const todo = document.getElementById('todo');
    		//create checkbox
    		const cb = document.createElement('input');
    		cb.type = 'checkbox';
    		cb.name = 'todo'+ index;
    		todo.appendChild(cb);
    		//add label
    		const label = document.createElement('label');
    		label.setAttribute('for', `todo${index}`);
    		let node = document.createTextNode(object['todo'][index]);
    		label.appendChild(node);
    		todo.appendChild(label);
    	});
    }
}
//call send
xhr.send();