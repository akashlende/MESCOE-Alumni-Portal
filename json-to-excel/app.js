const json2xls = require("json2xls");
const fs = require("fs");
const dump = require("./dump.json");

let excelJson = [];
let alumnniKeys = Object.keys(dump.alumni);
let serialNo = 1;
for (let i = 0; i < alumnniKeys.length; i++) {
    key = alumnniKeys[i];
    if (dump.alumni[key].personal.fullName === "") continue;
    excelJson.push({
        "serial no": serialNo,
        name: dump.alumni[key].personal.fullName,
        email: dump.alumni[key].personal.userEmail,
        department: dump.alumni[key].academics.departments[0],
        "year of passing": dump.alumni[key].personal.year,
        city: dump.alumni[key].personal.city,
        state: dump.alumni[key].personal.state,
        country: dump.alumni[key].personal.country,
        facebook: dump.alumni[key].socials.facebook,
        github: dump.alumni[key].socials.github,
        instagram: dump.alumni[key].socials.instagram,
        linkedin: dump.alumni[key].socials.linkedin,
        twitter: dump.alumni[key].socials.twitter,
        details: dump.alumni[key].personal.details,
        bio: dump.alumni[key].personal.bio,
        image: dump.alumni[key].personal.image,
        alumniId: key,
    });
    serialNo += 1;
}

var xls = json2xls(excelJson);
fs.writeFileSync("data.xlsx", xls, "binary");
