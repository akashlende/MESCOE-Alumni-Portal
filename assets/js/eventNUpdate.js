function getid(id) {
	return document.getElementById(id);
}
let c = 0;
const addele = getid(`addele`);
db.on("value", snap => {
	snap.forEach(doc => {
		addele.innerHTML += `<div class="row border mx-auto shadow-lg bg-white mt-5">
      <div class="col-md-4">
        <img
          src=""
          class="px-3 py-3 w-100 h-100"
          id="imgs${c}"
          style="object-fit: cover;"
        />
      </div>
      <div class="col-md-8">
        <div class="card-block px-3 py-3">
          <h4 class="card-title" id="eventname${c}"></h4>
          <p class="card-text" id="eventdetail${c}"></p>
          <i class="far fa-clock" style="font-size: 18px;"></i>
          <span id="SDate${c}"></span><br />
          <span class="ml-4" id="EDate${c}"></span><br />
          <i class="fas fa-map-marker-alt mt-2" style="font-size: 18px;"> </i>
          <span id="loc${c}"></span>
          <br /><br />
          <div style="float: right;">
            <a href="#" id='moreinfo${c}' data-target="#modal-notification" onclick="getdetails('eventname${c}')"  data-toggle="modal" class="btn btn-primary mb-3">More Info</a>
          </div>
        </div>
      </div>
    </div>`;
		let eventname = getid(`eventname${c}`);
		let eventdetails = getid(`eventdetail${c}`);
		let SDate = getid(`SDate${c}`);
		let EDate = getid(`EDate${c}`);
		let loc = getid(`loc${c}`);
		eventname.innerHTML = doc.val().event_name;
		eventdetails.innerHTML = doc.val().event_details;
		SDate.innerHTML = `Starts: ${doc.val().sdate}`;
		EDate.innerHTML = `Ends: ${doc.val().edate}`;
		loc.innerHTML = doc.val().loc;
		document.getElementById(`imgs${c}`).src = doc.val().imgurl;
		c++;
	});
});

function getdetails(id) {
	let e = getid(id).innerHTML;
	let en99 = getid(`modal-title-notification`);
	let sdate = getid(`sdate99`);
	let edate = getid(`edate99`);
	let stime = getid(`stime99`);
	let dur = getid(`dur99`);
	let loc = getid(`loc99`);
	const ename = e.toLowerCase();
	const data = firebase.database().ref("events/" + ename);
	data.once("value").then(snap => {
		en99.innerHTML = snap.val().event_name;
		sdate.innerHTML = `Starts: ${snap.val().sdate}`;
		edate.innerHTML = `Ends: ${snap.val().edate}`;
		stime.innerHTML = `Start Time: ${snap.val().start_time}`;
		dur.innerHTML = `Time Duration: ${snap.val().duration}`;
		loc.innerHTML = `Location: ${snap.val().loc}`;
	});
}
