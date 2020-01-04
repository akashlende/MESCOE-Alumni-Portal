const db = firebase
  .database()
  .ref("events")
  .orderByChild("child_num");
var c = 1;
let past;

function getid(id) {
  return document.getElementById(id);
}

db.on("value", snap => {
  if (snap.numChildren() == 1) {
    document.getElementById(`noeve1`).classList.remove("d-none");
  } else if (snap.numChildren() == 2) {
    document.getElementById(`noeve1`).classList.remove("d-none");
    document.getElementById(`noeve2`).classList.remove("d-none");
  } else if (snap.numChildren() == 3) {
    document.getElementById(`noeve1`).classList.remove("d-none");
    document.getElementById(`noeve2`).classList.remove("d-none");
    document.getElementById(`noeve3`).classList.remove("d-none");
  }
  snap.forEach(doc => {
    let eventname = getid(`eventname${c}`);
    let eventdetails = getid(`eventdetail${c}`);
    let SDate = getid(`SDate${c}`);
    let EDate = getid(`EDate${c}`);
    let loc = getid(`loc${c}`);
    eventname.innerHTML = doc.val().event_name;
    eventdetails.innerHTML = doc.val().event_details;
    document.getElementById(`imgs${c}`).src = doc.val().imgurl;
    c++;
    if (c === 4) return;
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
    past = snap.val().sdate;
    edate.innerHTML = `Ends: ${snap.val().edate}`;
    stime.innerHTML = `Start Time: ${snap.val().start_time}`;
    dur.innerHTML = `Time Duration: ${snap.val().duration}`;
    loc.innerHTML = `Location: ${snap.val().loc}`;
    comparedates();
  });
}

function comparedates() {
  let s = past.split("/").map(Number);
  console.log(s);
  let cdate = new Date();
  let udate = new Date(s[2], s[1] - 1, s[0]);
  console.log(cdate);
  console.log(udate);
  if (udate < cdate) {
    document.getElementById(`reg1`).classList.add("d-none");
    console.log("done");
  }
  else
    document.getElementById(`reg1`).classList.remove("d-none");
}