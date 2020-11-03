let canvas = document.getElementById('draw');
context = canvas.getContext("2d");

let clickX = new Array();
let clickY = new Array();
let clickDrag = new Array();
let paint;
let mouseX;
let mouseY;

//розкоментуйте якщо використовуєте layout з практичною
//необхідно отримати додактовий offset

let offsetLeft = canvas.parentElement.parentElement.offsetLeft;
let offsetTop = canvas.parentElement.parentElement.offsetTop;

canvas.addEventListener('mousedown',function (e){

	mouseX = e.pageX - this.offsetLeft - offsetLeft;
	mouseY = e.pageY - this.offsetTop - offsetTop; 
	paint = true;
	addClick(mouseX, mouseY);
	redraw();
});
canvas.addEventListener('mousemove',function (e){
	if(paint){
		
	addClick(e.pageX - this.offsetLeft - offsetLeft, e.pageY -
	this.offsetTop - offsetTop, true);

		redraw();
	}
});
canvas.addEventListener('mouseup',function (e){
	paint = false;
	clickX.length = 0;
	clickY.length = 0;
	clickDrag.length = 0;
});
canvas.addEventListener('mouseleave',function (e){
	paint = false;
	clickX.length = 0;
	clickY.length = 0;
	clickDrag.length = 0;
});

function addClick(x, y, dragging) {
	clickX.push(x);
	clickY.push(y);
	clickDrag.push(dragging);
}

function redraw(){
	
	
	context.strokeStyle = document.getElementById("color").value;
	context.lineJoin = "round";
	context.lineWidth = document.getElementById("lWidth").value;

	for(var i = 0; i < clickX.length; i++) {
		context.beginPath();
		if(clickDrag[i] && i){
			context.moveTo(clickX[i-1], clickY[i-1]);
		}else{
			context.moveTo(clickX[i]-1, clickY[i]);
	}
	context.lineTo(clickX[i], clickY[i]);
	context.closePath();
    context.stroke();
    context.fill();
	}
}
function clearCanvas(){
	context.clearRect(0, 0, context.canvas.width,
	context.canvas.height); // Clears the canvas
}
