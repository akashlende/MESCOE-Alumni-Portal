let c = 0;
/*const db = firebase.database().ref("jobs/");
const addele = document.getElementById(`addele`);
db.on("value", snap => {
  snap.forEach(doc => {*/
    addele.innerHTML += `<div class="row border mx-auto shadow-lg bg-white mt-5">
      <div class="col-sm-4">
        <img
          src=""
          class=" px-3 py-3 w-100 h-100"
          id="companyLogo${c}"
        />
      </div>
      <div class="col-sm-8">
        <div class="card-block px-3 py-3" style="height: ">
          <p class="card-title h4" id="companyName${c}"></p>
          <p class="card-text m-0" id="companyDesignation${c}">Designation :&nbsp;</p>
          <p class="card-text m-0" id="companyLocation${c}">Location :&nbsp;</p>
          <p class="card-text m-0" id="companyStart${c}">Start Date :&nbsp;</p>
          <p class="card-text m-0" id="companySalary${c}">Salary :&nbsp;</p>
          <p class="card-text m-0" id="companyPostedOn${c}">Posted On :&nbsp;</p>
          <p class="card-text m-0" id="companyApplyBy${c}">Apply By :&nbsp;</p>
          <div style="float: right;">
            <a href="#" id='apply${c}' class="btn btn-primary mb-3">Apply</a>
          </div>
        </div>
      </div>
    </div>`;
    document.getElementById(`companyName${c}`).innerHTML="Google";
    document.getElementById(`companyDesignation${c}`).innerHTML+="Senior Hardware Engineer";
    document.getElementById(`companyLocation${c}`).innerHTML+="Bangalore";
    document.getElementById(`companyStart${c}`).innerHTML+="February";
    document.getElementById(`companySalary${c}`).innerHTML+="8 LPA";
    document.getElementById(`companyPostedOn${c}`).innerHTML+="2nd January, 2020";
    document.getElementById(`companyApplyBy${c}`).innerHTML+="15th January, 2020";

    document.getElementById(`imgs${c}`).src = doc.val().imgurl;
    c++;
/*  });
});*/

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
