firebase.initializeApp(firebaseConfig);
const db = firebase.database().ref("achievements");

let c=0;
const alumni = document.getElementById(`alumni`);
db.on("value", snap => {
	snap.forEach(doc => {
		alumni.innerHTML += `<div class="row border mx-auto shadow-lg bg-white mt-5">
      <div class="col-sm-4 d-flex justify-content-center ">
        <img
          src=""
          class="py-3 w-100 h-100 d-flex"
          style="object-fit: fill; max-width: 200px;"
          id="imgs${c}"
        />
      </div>
      <div class="col-sm-8">
        <div class="card-block px-3 py-3">
          <h4 class="card-title" id="alumni-name${c}"></h4>
          </p><p class="card-text" id="alumni-class${c}"></p>
          <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          <span id="achievement${c}"></span><br />
        </div>
      </div>
    </div>`;
		let alumniName = document.getElementById(`alumni-name${c}`);
		let alumniClass = document.getElementById(`alumni-class${c}`);
		let alumniAchievement = document.getElementById(`achievement${c}`);

		alumniName.innerHTML = doc.val().alumni_name;
		alumniClass.innerHTML = "Class of "+ doc.val().alumni_class;
		alumniAchievement.innerHTML = doc.val().achievement;
		document.getElementById(`imgs${c}`).src = doc.val().imgurl;
		c++;
	});
});