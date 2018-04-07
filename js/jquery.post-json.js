var form = new FormData();
form.append("m_acy", "106");
form.append("m_sem", "1");
form.append("m_degree", "2");
form.append("m_dep_id", "49");
form.append("m_group", "**");
form.append("m_grade", "**");
form.append("m_class", "**");
form.append("m_option", "**");
form.append("m_crsname", "**");
form.append("m_teaname", "**");
form.append("m_cos_id", "**");
form.append("m_cos_code", "**");
form.append("m_crstime", "**");
form.append("m_crsoutline", "**");
form.append("m_costype", "**");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://timetable.nctu.edu.tw/?r=main/get_cos_list",
  "method": "POST",
  "headers": {},
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});