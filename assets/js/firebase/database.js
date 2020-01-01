import firebaseConfig from "./firebase.config.js";

firebase.initializeApp(firebaseConfig);

export const database = firebase.database();
export const storage = firebase.storage().ref();
