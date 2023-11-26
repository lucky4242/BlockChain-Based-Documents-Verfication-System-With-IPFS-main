// //Future Use
// const express = require("express");
// const multer = require("multer");
// const app = express();
// const storage = multer.diskStorage({
//   destination: function (req, file, callback) {
//     callback(null, "./uploads");
//   },
//   filename: function (req, file, callback) {
//     callback(null, file.fieldname + "-" + Date.now());
//   },
// });
// const upload = multer({ storage: storage }).single("userPhoto");

// app.get("/", function (req, res) {
//   res.sendFile(__dirname + "/upload.html");
// });

// app.post("/file/image", function (req, res) {
//   upload(req, res, function (err) {
//     if (err) {
//       return res.end("Error uploading file.");
//     }
//     res.end("File is uploaded");
//   });
// });

// app.listen(3000, function () {
//   console.log("Working on port 3000");
// });
