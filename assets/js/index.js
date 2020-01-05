const database = firebase.database();

const db = database.ref("events").orderByChild("child_num");
var cc = 1;
let pastdate;

function getid(id) {
	return document.getElementById(id);
}

db.on("value", snap => {
	if (snap.numChildren() == 1) {
		document.getElementById(`toast-1`).classList.remove("d-none");
	} else if (snap.numChildren() == 2) {
		document.getElementById(`toast-1`).classList.remove("d-none");
		document.getElementById(`toast-2`).classList.remove("d-none");
	} else if (snap.numChildren() == 3) {
		document.getElementById(`toast-1`).classList.remove("d-none");
		document.getElementById(`toast-2`).classList.remove("d-none");
		document.getElementById(`toast-3`).classList.remove("d-none");
	}
	snap.forEach(doc => {
		let eventname = getid(`eventnamestack${cc}`);
		let eventdetails = getid(`detailsstack${cc}`);
		let SDate = getid(`datestack${cc}`);
		eventname.innerHTML = doc.val().event_name;
		eventdetails.innerHTML = doc.val().event_details;
		SDate.innerHTML = doc.val().sdate;
		pastdate = doc.val().sdate;
		comparedates(`toast-${cc}`);
		cc++;
		if (cc === 4) return;
	});
});

function comparedates(id) {
	let s = pastdate.split("/").map(Number);
	//console.log(s);
	let cdate = new Date();
	let udate = new Date(s[2], s[1] - 1, s[0]);
	//console.log(cdate);
	//console.log(udate);
	if (udate < cdate) {
		document.getElementById(id).classList.add("d-none");
		//console.log("done");
	} else document.getElementById(id).classList.remove("d-none");
}
