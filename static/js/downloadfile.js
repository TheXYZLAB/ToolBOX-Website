/*var co = require('co');
var OSS = require('ali-oss');
function download(element){
    var form = $(element).parents("form");
    // console.log($(form).formSerialize());
    // console.log(element.value);
    var bucket = "https://thetoolbox.oss-cn-shanghai.aliyuncs.com/";
    var objectName = $(form).formSerialize().split("=")[1]+"_"+element.value+".zip"
   /* var client = new OSS.Wrapper({
        region: 'oss-cn-shanghai.aliyuncs.com',
        bucket: 'thetoolbox'});
    var url = client.signatureUrl(objectName, {expires: 3600});
    
    var requester = new XMLHttpRequest();
    requester.open("GET",bucket+objectName,false);
    //requester.send();
    //$.get("https://thetoolbox.oss-cn-shanghai.aliyuncs.com/"+objectName,{async=false});
}*/
function changeherf(element){
    var bucket = "https://thetoolbox.oss-cn-shanghai.aliyuncs.com/";
    var form = $(element).parents("form");
    var objectName = $(form).formSerialize().split("=")[1]+"_"+element.innerHTML+".zip"
    element.href=bucket + objectName;
}