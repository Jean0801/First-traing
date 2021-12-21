let url = 'https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-7EC08C0F-C5F2-478D-84D4-702FCF71511C';

fetch(url)
.then(function (response){
    return response.json();
})
.then(function (data){
    console.log(data);
    
});